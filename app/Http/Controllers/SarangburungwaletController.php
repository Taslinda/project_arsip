<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sarangburungwalet;
use App\Traits\FileTrait;

class SarangburungwaletController extends Controller
{
    use FileTrait;
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_hotel = \App\Sarangburungwalet::where('lokasi','LIKE','%' .$request->cari. '%')
            ->orwhere('no_npwpd','LIKE','%' .$request->cari. '%')
            ->orwhere('nama_usaha','LIKE','%' .$request->cari. '%')
            ->orwhere('alamat_usaha','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_sarangburungwalet = \App\Sarangburungwalet::all(); 
        }
       return view('arsip-pages.sarangburungwalet', ['data_sarangburungwalet' => $data_sarangburungwalet]);
    }


    public function create(Request $request)
    {
        $input = $request->all();
        $input['file'] = null;
        if($request->hasFile('file')){
            $input['file']=$this->uploadFile($request,'sarangburungwalet','file');
        }
        sarangburungwalet::create($input);
        return redirect('/sarangburungwalet')->with('succes','Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $sarangburungwalet = \App\Sarangburungwalet::find($id);
        return view('crud-sarangburungwalet/sarangburungwalet-edit',['sarangburungwalet' => $sarangburungwalet]);
    }

    public function update(Request $request,$id)
    {
        $sarangburungwalet = \App\Sarangburungwalet::find($id);
        $input = $request->all();
        if($request->hasFile('file')){
            $input['file']=$this->updateFile($request,$sarangburungwalet->file,'sarangburungwalet','file');
        }
        $sarangburungwalet->update($input);
        

        return redirect('/sarangburungwalet')->with('succes','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $sarangburungwalet = \App\Sarangburungwalet::find($id);
        $this->deleteFile($sarangburungwalet->file, 'sarangburungwalet');
        $sarangburungwalet->delete($sarangburungwalet);
        return redirect('/sarangburungwalet')->with('succes','Data Berhasil Dihapus');
    }
}
