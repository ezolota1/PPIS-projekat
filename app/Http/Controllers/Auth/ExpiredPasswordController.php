<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class ExpiredPasswordController extends Controller
{
    public function showExpiredPasswordForm()
    {
        return view('auth.passwords.expired');
    }

    public function updateExpiredPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required'
        ]);

        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->password_changed_at = Carbon::now();
        $user->save();

        return redirect()->route('home')->with('message', 'Your password has been changed!');
    }
}