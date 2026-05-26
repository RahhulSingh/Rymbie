<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function showRegister()
    {
        return view('auth.register');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // dd($request->all());
        $credentials=$request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]);
        if(auth()->attempt($credentials)){
            // dd(auth()->user());
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }   
        return back()->with('error','Invalid email or password');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
