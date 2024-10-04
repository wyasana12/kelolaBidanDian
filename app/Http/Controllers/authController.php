<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;

class authController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function auth_login(Request $request){
        $remember = !empty($request->remember) ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember))
        {
            return redirect('bidan/dashboard');
        }
        else{
            return redirect()->back()->with('error', "Tolong Masukkan Email dan Password Yang Benar");
        }
    }
}