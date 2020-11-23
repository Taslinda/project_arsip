<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restoran;
use App\Traits\FileTrait;

class RestoranController extends Controller
{
    use FileTrait;
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_restoran = \App\Restoran::where('no_npwpd','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_restoran = \App\Restoran::all(); 
        }
       return view('arsip-pages.restoran', ['data_restoran' => $data_restoran]);
    }


    public function create(Request $request)
    {
        $input = $request->all();
        $input['file'] = null;
        if($request->hasFile('file')){
            $input['file']=$this->uploadFile($request,'restoran','file');
        }
        restoran::create($input);
        return redirect('/restoran')->with('succes','Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $restoran = \App\Restoran::find($id);
        return view('crud-restoran/restoran-edit',['restoran' => $restoran]);
    }

    public function update(Request $request,$id)
    {
        $restoran = \App\Restoran::find($id);
        $input = $request->all();
        if($request->hasFile('file')){
            $input['file']=$this->updateFile($request,$restoran->file,'restoran','file');
        }
        $restoran->update($input);
        

        return redirect('/restoran')->with('succes','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $restoran = \App\Restoran::find($id);
        $this->deleteFile($restoran->file, 'restoran');
        $restoran->delete($restoran);
        return redirect('/restoran')->with('succes','Data Berhasil Dihapus');
    }
}
