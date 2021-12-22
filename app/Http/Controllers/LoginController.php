<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
           'email'=> 'required|email',
           'password'=> 'required'
        ]);
        //dd('berhasil login');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        // return response()->json([
        //     'status' => 'OK'
        // ]);
        return back()->with('loginError','Login Gagal!');
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->intended('/');
    }

}