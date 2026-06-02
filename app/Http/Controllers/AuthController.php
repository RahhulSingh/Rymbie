<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
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
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (auth()->attempt($credentials)) {

            $user = auth()->user();

            // Only Super Admin Allow
            if ($user->role->name != 'Super Admin') {

                auth()->logout();

                return back()->with('error', 'Only admin can login');

            }

            $request->session()->regenerate();

            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Invalid email or password');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
