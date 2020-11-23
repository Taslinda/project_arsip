<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\Traits\FileTrait;

class HotelController extends Controller
{
    use FileTrait;
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_hotel = \App\Hotel::where('no_npwpd','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_hotel = \App\Hotel::all(); 
        }
       return view('arsip-pages.hotel', ['data_hotel' => $data_hotel]);
    }


    public function create(Request $request)
    {
        $input = $request->all();
        $input['file'] = null;
        if($request->hasFile('file')){
            $input['file']=$this->uploadFile($request,'hotel','file');
        }
        Hotel::create($input);
        return redirect('/hotel')->with('succes','Data Berhasil Ditambahkan');
    }

    public function update(Request $request,$id)
    {
        $hotel = \App\Hotel::find($id);
        $input = $request->all();
        if($request->hasFile('file')){
            $input['file']=$this->updateFile($request,$hotel->file,'hotel','file');
        }
        $hotel->update($input);
        
        return redirect('/hotel')->with('succes','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $hotel = \App\Hotel::find($id);
        $this->deleteFile($hotel->file, 'hotel');
        $hotel->delete($hotel);
        return redirect('/hotel')->with('succes','Data Berhasil Dihapus');
    }

}
