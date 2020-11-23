<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suratmasuk;
use App\Traits\FileTrait;

class SuratmasukController extends Controller
{
    use FileTrait;
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_suratmasuk = \App\Suratmasuk::where('ket','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_suratmasuk = \App\Suratmasuk::all(); 
        }
       return view('arsip-pages.suratmasuk', ['data_suratmasuk' => $data_suratmasuk]);
    }


    public function create(Request $request)
    {
        $input = $request->all();
        $input['file'] = null;
        if($request->hasFile('file')){
            $input['file']=$this->uploadFile($request,'suratmasuk','file');
        }
        suratmasuk::create($input);
        return redirect('/suratmasuk')->with('succes','Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $suratmasuk = \App\Suratmasuk::find($id);
        return view('crud-suratmasuk/suratmasuk-edit',['suratmasuk' => $suratmasuk]);
    }

    public function update(Request $request,$id)
    {
        $suratmasuk = \App\Suratmasuk::find($id);
        $input = $request->all();
        if($request->hasFile('file')){
            $input['file']=$this->updateFile($request,$suratmasuk->file,'suratmasuk','file');
        }
        $suratmasuk->update($input);
        

        return redirect('/suratmasuk')->with('succes','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $suratmasuk = \App\Suratmasuk::find($id);
        $this->deleteFile($suratmasuk->file, 'suratmasuk');
        $suratmasuk->delete($suratmasuk);
        return redirect('/suratmasuk')->with('succes','Data Berhasil Dihapus');
    }
}
