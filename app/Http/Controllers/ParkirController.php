<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parkir;
use App\Traits\FileTrait;

class ParkirController extends Controller
{
    use FileTrait;
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_hotel = \App\Parkir::where('lokasi','LIKE','%' .$request->cari. '%')
            ->orwhere('no_npwpd','LIKE','%' .$request->cari. '%')
            ->orwhere('nama_usaha','LIKE','%' .$request->cari. '%')
            ->orwhere('alamat_usaha','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_parkir = \App\Parkir::all(); 
        }
       return view('arsip-pages.parkir', ['data_parkir' => $data_parkir]);
    }
    

    public function create(Request $request)
    {
        $input = $request->all();
        $input['file'] = null;
        if($request->hasFile('file')){
            $input['file']=$this->uploadFile($request,'parkir','file');
        }
        parkir::create($input);
        return redirect('/parkir')->with('succes','Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $parkir = \App\Parkir::find($id);
        return view('crud-parkir/parkir-edit',['parkir' => $parkir]);
    }

    public function update(Request $request,$id)
    {
        $parkir = \App\Parkir::find($id);
        $input = $request->all();
        if($request->hasFile('file')){
            $input['file']=$this->updateFile($request,$parkir->file,'parkir','file');
        }
        $parkir->update($input);
        

        return redirect('/parkir')->with('succes','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $parkir = \App\Parkir::find($id);
        $this->deleteFile($parkir->file, 'parkir');
        $parkir->delete($parkir);
        return redirect('/parkir')->with('succes','Data Berhasil Dihapus');
    }
}
