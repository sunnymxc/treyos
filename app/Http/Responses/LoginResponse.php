<?php

namespace Laravel\Fortify\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {
        
        // here i am checking if the currently logout in users has a role of 2 which make him an agent and then redirect to the agents dashboard else the admin dashboard
        if (auth()->user()->role == 3) {
            return redirect()->intended(config('driver/dashboard'));
        } elseif (auth()->user->role == 2) {
        	return redirect()->intended(config('agent/dashboard'));
        } else (auth()->user->role == 92782 {
        	return redirect()->intended(config('admin/dashboard'));
        }
        return redirect()->intended(config('login'));
    }

}