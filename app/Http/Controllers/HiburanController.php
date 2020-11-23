<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hiburan;
use App\Traits\FileTrait;

class HiburanController extends Controller
{
    use FileTrait;
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_hiburan = \App\Hiburan::where('no_npwpd','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_hiburan = \App\Hiburan::all(); 
        }
       return view('arsip-pages.hiburan', ['data_hiburan' => $data_hiburan]);
    }


    public function create(Request $request)
    {
        $input = $request->all();
        $input['file'] = null;
        if($request->hasFile('file')){
            $input['file']=$this->uploadFile($request,'hiburan','file');
        }
        Hiburan::create($input);
        return redirect('/hiburan')->with('succes','Data Berhasil Ditambahkan');
    }

    public function update(Request $request,$id)
    {
        $hiburan = \App\Hiburan::find($id);
        $input = $request->all();
        if($request->hasFile('file')){
            $input['file']=$this->updateFile($request,$hiburan->file,'hiburan','file');
        }
        $hiburan->update($input);
        

        return redirect('/hiburan')->with('succes','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $hiburan = \App\Hiburan::find($id);
        $this->deleteFile($hiburan->file, 'hiburan');
        $hiburan->delete($hiburan);
        return redirect('/hiburan')->with('succes','Data Berhasil Dihapus');
    }
}
