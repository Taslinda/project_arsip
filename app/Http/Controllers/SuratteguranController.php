<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suratteguran;
use App\Traits\FileTrait;

class SuratteguranController extends Controller
{
    use FileTrait;
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_suratteguran = \App\Suratteguran::where('ket','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_suratteguran = \App\Suratteguran::all(); 
        }
       return view('arsip-pages.suratteguran', ['data_suratteguran' => $data_suratteguran]);
    }


    public function create(Request $request)
    {
        $input = $request->all();
        $input['file'] = null;
        if($request->hasFile('file')){
            $input['file']=$this->uploadFile($request,'suratteguran','file');
        }
        suratteguran::create($input);
        return redirect('/suratteguran')->with('succes','Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $suratteguran = \App\Suratteguran::find($id);
        return view('crud-suratteguran/suratteguran-edit',['suratteguran' => $suratteguran]);
    }

    public function update(Request $request,$id)
    {
        $suratteguran = \App\Suratteguran::find($id);
        $input = $request->all();
        if($request->hasFile('file')){
            $input['file']=$this->updateFile($request,$suratteguran->file,'suratteguran','file');
        }
        $suratteguran->update($input);
        

        return redirect('/suratteguran')->with('succes','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $suratteguran = \App\Suratteguran::find($id);
        $this->deleteFile($suratteguran->file, 'suratteguran');
        $suratteguran->delete($suratteguran);
        return redirect('/suratteguran')->with('succes','Data Berhasil Dihapus');
    }
}
