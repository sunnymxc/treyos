<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
	    if (Auth::guard($guards)->check()) {
	        $role = (Auth::user()->role);
	        switch ($role) {
	            case 'crown':
	            	return redirect('/admin/dashboard');
	                break;
	            case 'agent':
	                return redirect('/agent/dashboard');
	                break;
	            case 'driver':
	                return redirect('/driver/dashboard');
	                break;
	            default:
	                return redirect('/login');
	                break;	
	        }
		}
		return $next($request);
    }
}
