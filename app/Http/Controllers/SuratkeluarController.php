<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suratkeluar;
use App\Traits\FileTrait;

class SuratkeluarController extends Controller
{
    use FileTrait;
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_suratkeluar = \App\Suratkeluar::where('ket','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_suratkeluar = \App\Suratkeluar::all(); 
        }
       return view('arsip-pages.suratkeluar', ['data_suratkeluar' => $data_suratkeluar]);
    }


    public function create(Request $request)
    {
        $input = $request->all();
        $input['file'] = null;
        if($request->hasFile('file')){
            $input['file']=$this->uploadFile($request,'suratkeluar','file');
        }
        suratkeluar::create($input);
        return redirect('/suratkeluar')->with('succes','Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $suratkeluar = \App\Suratkeluar::find($id);
        return view('crud-suratkeluar/suratkeluar-edit',['suratkeluar' => $suratkeluar]);
    }

    public function update(Request $request,$id)
    {
        $suratkeluar = \App\Suratkeluar::find($id);
        $input = $request->all();
        if($request->hasFile('file')){
            $input['file']=$this->updateFile($request,$suratkeluar->file,'suratkeluar','file');
        }
        $suratkeluar->update($input);
        

        return redirect('/suratkeluar')->with('succes','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $suratkeluar = \App\Suratkeluar::find($id);
        $this->deleteFile($suratkeluar->file, 'suratkeluar');
        $suratkeluar->delete($suratkeluar);
        return redirect('/suratkeluar')->with('succes','Data Berhasil Dihapus');
    }
}
