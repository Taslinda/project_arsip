<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suratpemasangan;
use App\Traits\FileTrait;

class SuratpemasanganController extends Controller
{
    use FileTrait;
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_suratpemasangan = \App\Suratpemasangan::where('ket','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_suratpemasangan = \App\Suratpemasangan::all(); 
        }
       return view('arsip-pages.suratpemasangan', ['data_suratpemasangan' => $data_suratpemasangan]);
    }


    public function create(Request $request)
    {
        $input = $request->all();
        $input['file'] = null;
        if($request->hasFile('file')){
            $input['file']=$this->uploadFile($request,'suratpemasangan','file');
        }
        suratpemasangan::create($input);
        return redirect('/suratpemasangan')->with('succes','Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $suratpemasangan = \App\Suratpemasangan::find($id);
        return view('crud-suratpemasangan/suratpemasangan-edit',['suratpemasangan' => $suratpemasangan]);
    }

    public function update(Request $request,$id)
    {
        $suratpemasangan = \App\Suratpemasangan::find($id);
        $input = $request->all();
        if($request->hasFile('file')){
            $input['file']=$this->updateFile($request,$suratpemasangan->file,'suratpemasangan','file');
        }
        $suratpemasangan->update($input);
        

        return redirect('/suratpemasangan')->with('succes','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $suratpemasangan = \App\Suratpemasangan::find($id);
        $this->deleteFile($suratpemasangan->file, 'suratpemasangan');
        $suratpemasangan->delete($suratpemasangan);
        return redirect('/suratpemasangan')->with('succes','Data Berhasil Dihapus');
    }
}
