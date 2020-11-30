<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Airtanah;
use App\Traits\FileTrait;

class AirtanahController extends Controller
{
    use FileTrait;
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_hotel = \App\AirTanah::where('lokasi','LIKE','%' .$request->cari. '%')
            ->orwhere('no_npwpd','LIKE','%' .$request->cari. '%')
            ->orwhere('nama_usaha','LIKE','%' .$request->cari. '%')
            ->orwhere('alamat_usaha','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_airtanah = \App\Airtanah::all(); 
        }
       return view('arsip-pages.airtanah', ['data_airtanah' => $data_airtanah]);
    }


    public function create(Request $request)
    {
        $input = $request->all();
        $input['file'] = null;
        if($request->hasFile('file')){
            $input['file']=$this->uploadFile($request,'airtanah','file');
        }
        Airtanah::create($input);
        return redirect('/airtanah')->with('succes','Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $airtanah = \App\Airtanah::find($id);
        return view('crud-airtanah/airtanah-edit',['airtanah' => $airtanah]);
    }

    public function update(Request $request,$id)
    {
        $airtanah = \App\Airtanah::find($id);
        $input = $request->all();
        if($request->hasFile('file')){
            $input['file']=$this->updateFile($request,$airtanah->file,'airtanah','file');
        }
        $airtanah->update($input);
        

        return redirect('/airtanah')->with('succes','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $airtanah = \App\Airtanah::find($id);
        $this->deleteFile($airtanah->file, 'airtanah');
        $airtanah->delete($airtanah);
        return redirect('/airtanah')->with('succes','Data Berhasil Dihapus');
    }

}
