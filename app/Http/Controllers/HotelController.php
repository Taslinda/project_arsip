<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
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
        \App\Hotel::create($request->all());
        return redirect('/hotel')->with('succes','Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $hotel = \App\Hotel::find($id);
        return view('crud-hotel/hotel-edit',['hotel' => $hotel]);
    }

    public function update(Request $request,$id)
    {
        $hotel = \App\Hotel::find($id);
        $hotel->update($request->all());
        return redirect('/hotel')->with('succes','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $hotel = \App\Hotel::find($id);
        $hotel->delete($hotel);
        return redirect('/hotel')->with('succes','Data Berhasil Dihapus');
    }

}
