<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suratkeputusan;
use App\Traits\FileTrait;

class SuratkeputusanController extends Controller
{
    use FileTrait;
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_suratkeputusan = \App\Suratkeputusan::where('ket','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_suratkeputusan = \App\Suratkeputusan::all(); 
        }
       return view('arsip-pages.suratkeputusan', ['data_suratkeputusan' => $data_suratkeputusan]);
    }


    public function create(Request $request)
    {
        $input = $request->all();
        $input['file'] = null;
        if($request->hasFile('file')){
            $input['file']=$this->uploadFile($request,'suratkeputusan','file');
        }
        suratkeputusan::create($input);
        return redirect('/suratkeputusan')->with('succes','Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $suratkeputusan = \App\Suratkeputusan::find($id);
        return view('crud-suratkeputusan/suratkeputusan-edit',['suratkeputusan' => $suratkeputusan]);
    }

    public function update(Request $request,$id)
    {
        $suratkeputusan = \App\Suratkeputusan::find($id);
        $input = $request->all();
        if($request->hasFile('file')){
            $input['file']=$this->updateFile($request,$suratkeputusan->file,'suratkeputusan','file');
        }
        $suratkeputusan->update($input);
        

        return redirect('/suratkeputusan')->with('succes','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $suratkeputusan = \App\Suratkeputusan::find($id);
        $this->deleteFile($suratkeputusan->file, 'suratkeputusan');
        $suratkeputusan->delete($suratkeputusan);
        return redirect('/suratkeputusan')->with('succes','Data Berhasil Dihapus');
    }
}
