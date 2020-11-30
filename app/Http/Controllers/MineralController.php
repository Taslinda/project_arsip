<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mineral;
use App\Traits\FileTrait;

class MineralController extends Controller
{
    use FileTrait;
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_hotel = \App\Mineral::where('lokasi','LIKE','%' .$request->cari. '%')
            ->orwhere('no_npwpd','LIKE','%' .$request->cari. '%')
            ->orwhere('nama_usaha','LIKE','%' .$request->cari. '%')
            ->orwhere('alamat_usaha','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_mineral = \App\Mineral::all(); 
        }
       return view('arsip-pages.mineral', ['data_mineral' => $data_mineral]);
    }


    public function create(Request $request)
    {
        $input = $request->all();
        $input['file'] = null;
        if($request->hasFile('file')){
            $input['file']=$this->uploadFile($request,'mineral','file');
        }
        mineral::create($input);
        return redirect('/mineral')->with('succes','Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $mineral = \App\Mineral::find($id);
        return view('crud-mineral/mineral-edit',['mineral' => $mineral]);
    }

    public function update(Request $request,$id)
    {
        $mineral = \App\Mineral::find($id);
        $input = $request->all();
        if($request->hasFile('file')){
            $input['file']=$this->updateFile($request,$mineral->file,'mineral','file');
        }
        $mineral->update($input);
        

        return redirect('/mineral')->with('succes','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $mineral = \App\Mineral::find($id);
        $this->deleteFile($mineral->file, 'mineral');
        $mineral->delete($mineral);
        return redirect('/mineral')->with('succes','Data Berhasil Dihapus');
    }
}
