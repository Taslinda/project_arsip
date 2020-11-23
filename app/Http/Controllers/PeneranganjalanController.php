<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peneranganjalan;
use App\Traits\FileTrait;

class PeneranganjalanController extends Controller
{
    use FileTrait;
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_peneranganjalan = \App\Peneranganjalan::where('no_npwpd','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_peneranganjalan = \App\Peneranganjalan::all(); 
        }
       return view('arsip-pages.peneranganjalan', ['data_peneranganjalan' => $data_peneranganjalan]);
    }


    public function create(Request $request)
    {
        $input = $request->all();
        $input['file'] = null;
        if($request->hasFile('file')){
            $input['file']=$this->uploadFile($request,'peneranganjalan','file');
        }
        peneranganjalan::create($input);
        return redirect('/peneranganjalan')->with('succes','Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $peneranganjalan = \App\Peneranganjalan::find($id);
        return view('crud-peneranganjalan/peneranganjalan-edit',['peneranganjalan' => $peneranganjalan]);
    }

    public function update(Request $request,$id)
    {
        $peneranganjalan = \App\Peneranganjalan::find($id);
        $input = $request->all();
        if($request->hasFile('file')){
            $input['file']=$this->updateFile($request,$peneranganjalan->file,'peneranganjalan','file');
        }
        $peneranganjalan->update($input);
        

        return redirect('/peneranganjalan')->with('succes','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $peneranganjalan = \App\Peneranganjalan::find($id);
        $this->deleteFile($peneranganjalan->file, 'peneranganjalan');
        $peneranganjalan->delete($peneranganjalan);
        return redirect('/peneranganjalan')->with('succes','Data Berhasil Dihapus');
    }
}
