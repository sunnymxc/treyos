<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;
    
    public function redirectTo()
    {
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
         
        // return $next($request);

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
