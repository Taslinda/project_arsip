<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reklame;
use App\Traits\FileTrait;

class ReklameController extends Controller
{
    use FileTrait;
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_hotel = \App\Reklame::where('lokasi','LIKE','%' .$request->cari. '%')
            ->orwhere('no_npwpd','LIKE','%' .$request->cari. '%')
            ->orwhere('nama_usaha','LIKE','%' .$request->cari. '%')
            ->orwhere('alamat_usaha','LIKE','%' .$request->cari. '%')->get();;
        }else{
            $data_reklame = \App\Reklame::all(); 
        }
       return view('arsip-pages.reklame', ['data_reklame' => $data_reklame]);
    }


    public function create(Request $request)
    {
        $input = $request->all();
        $input['file'] = null;
        if($request->hasFile('file')){
            $input['file']=$this->uploadFile($request,'reklame','file');
        }
        reklame::create($input);
        return redirect('/reklame')->with('succes','Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $reklame = \App\Reklame::find($id);
        return view('crud-reklame/reklame-edit',['reklame' => $reklame]);
    }

    public function update(Request $request,$id)
    {
        $reklame = \App\Reklame::find($id);
        $input = $request->all();
        if($request->hasFile('file')){
            $input['file']=$this->updateFile($request,$reklame->file,'reklame','file');
        }
        $reklame->update($input);
        

        return redirect('/reklame')->with('succes','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $reklame = \App\Reklame::find($id);
        $this->deleteFile($reklame->file, 'reklame');
        $reklame->delete($reklame);
        return redirect('/reklame')->with('succes','Data Berhasil Dihapus');
    }
}
