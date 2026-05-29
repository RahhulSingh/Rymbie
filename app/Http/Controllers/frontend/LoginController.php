<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function index()
    {
        return view('frontend.loginup');
    }

    public function loginCheck(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]))
        {
            return redirect('/')
                ->with('success', 'Login Successful');
        }

        return back()->with('error', 'Invalid Email or Password');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home')->with('success', 'Logged out successfully!');
    }
}
