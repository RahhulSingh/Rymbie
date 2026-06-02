<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Mail;
class RegisterController extends Controller
{
    public function index()
    {
        return view('frontend.register');
    }


    public function registerStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'required|string|max:20',
            'g-recaptcha-response' => 'required|captcha',
        ]);
            
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->role_id = 16;
        $user->save();
        Mail::to($user->email)->send(new RegisterMail($user));
        return redirect()->back()->with('success', 'Registration successful! You can now log in.');
    }
}
