<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;

class ForgetPasswordController extends Controller
{
    public function index()
    {
        return view('frontend.forgot_password');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return back()->with('success', 'Password reset link sent to your email!');
    }

    public function showResetForm($token)
    {
        return view('emails.reset-password', compact('token'));
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        $status = Password::reset(

            $request->only(
                'email',
                'password',
                'password_confirmation',
                'token'
            ),

            function ($user, $password) {

                $user->password = Hash::make($password);

                $user->save();
            }
        );

        if ($status == Password::PASSWORD_RESET) {

            return redirect()->route('frontend.login')
                ->with('success', 'Password reset successfully');
        }

        return back()->withErrors([
            'email' => __($status),
        ]);
    }
}