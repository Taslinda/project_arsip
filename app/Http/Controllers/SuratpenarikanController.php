<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suratpenarikan;
use App\Traits\FileTrait;

class SuratpenarikanController extends Controller
{
    use FileTrait;
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_suratpenarikan = \App\Suratpenarikan::where('ket','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_suratpenarikan = \App\Suratpenarikan::all(); 
        }
       return view('arsip-pages.suratpenarikan', ['data_suratpenarikan' => $data_suratpenarikan]);
    }


    public function create(Request $request)
    {
        $input = $request->all();
        $input['file'] = null;
        if($request->hasFile('file')){
            $input['file']=$this->uploadFile($request,'suratpenarikan','file');
        }
        suratpenarikan::create($input);
        return redirect('/suratpenarikan')->with('succes','Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $suratpenarikan = \App\Suratpenarikan::find($id);
        return view('crud-suratpenarikan/suratpenarikan-edit',['suratpenarikan' => $suratpenarikan]);
    }

    public function update(Request $request,$id)
    {
        $suratpenarikan = \App\Suratpenarikan::find($id);
        $input = $request->all();
        if($request->hasFile('file')){
            $input['file']=$this->updateFile($request,$suratpenarikan->file,'suratpenarikan','file');
        }
        $suratpenarikan->update($input);
        

        return redirect('/suratpenarikan')->with('succes','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $suratpenarikan = \App\Suratpenarikan::find($id);
        $this->deleteFile($suratpenarikan->file, 'suratpenarikan');
        $suratpenarikan->delete($suratpenarikan);
        return redirect('/suratpenarikan')->with('succes','Data Berhasil Dihapus');
    }
}
