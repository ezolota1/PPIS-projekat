<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PasswordExpired
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        // Set the expiration period (e.g., 30 days)
        $passwordExpiryDays = 30;

        // // Set the expiration period to 2 minutes for testing
        // $passwordExpiryMinutes = 2;

        if ($user && $user->password_changed_at) {
            $passwordChangedAt = Carbon::parse($user->password_changed_at);
            if ($passwordChangedAt->diffInDays(Carbon::now()) >= $passwordExpiryDays) {
                return redirect()->route('password.expired');
            }
            // if ($passwordChangedAt->diffInMinutes(Carbon::now()) >= $passwordExpiryMinutes) {
            //     return redirect()->route('password.expired');
            // }
        }

        return $next($request);
    }
}
