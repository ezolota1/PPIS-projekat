<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    protected $redirectTo = '/home';

    /**
     * Reset the user's password.
     *
     * @param  Request  $request
     * @return void
     */
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = User::where('email', $request->email)
                              ->update(['password' => Hash::make($request->password)]);

        if(!$updatePassword){
            return back()->withInput()->with('error', 'Failed to update password!');
        }

        return redirect('/login')->with('message', 'Your password has been changed!');
    }
}
