<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('layouts.master');
    }

     public function postLogin(Request $request)
    {
       if(!auth()->attempt(['username' => $request->username, 'password' => $request->password])){
           return redirect()->back();
       }
       return redirect()->route('dashboard');
    }
   
    public function getRegister()
    {
        return view('auth.register');
    }

     public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6:confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        
        return redirect()->route('login');
    }

}