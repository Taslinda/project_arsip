<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
     public function getDashboard()
    {
        return view('layouts.master');
    }

     public function postDashboard(Request $request)
    {
       if(!auth()->attempt(['username' => $request->username, 'password' => $request->password])){
           return redirect()->back();
       }
       return redirect()->route('dashboard');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('welcome');
    }

}
