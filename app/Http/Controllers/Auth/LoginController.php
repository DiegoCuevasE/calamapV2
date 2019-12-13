<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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
    public function redirectTo(){
			
        // User role
        $tipo = Auth::user()->tipo_usuario; 
        
        // Check user role
        switch ($tipo) {
            case '0':
                return 'admin/home';
                break;
            case '1':
                return 'mype/home';
                break;
            case '2':
                return '/';
                break;
        }

        /*
        switch ($tipo) {

            case 1:
                    return '/adminMype';
                break; 
            case 2:
                    return '/admin';
                break;     
        }
        */
        
    }


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
