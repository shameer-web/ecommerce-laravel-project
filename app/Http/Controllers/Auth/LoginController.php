<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\facades\Auth;

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
    //protected $redirectTo = '/home';
    public function redirectTo()
    {    

        //admin login
        if(Auth::user()->role_as =='admin')
        {
           return 'dashbord';
        }

         //vendor login
        if(Auth::user()->role_as =='vendor')
        {
           return 'vendor-dashbord';
        }


        //normal user login
        if(Auth::user()->role_as == NULL)
        {
           // return 'home';
            return '/';
        }



        // else
        // {
        //    return 'home';
        // }
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
