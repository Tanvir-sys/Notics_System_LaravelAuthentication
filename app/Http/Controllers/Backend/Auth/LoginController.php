<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::Admin_Dashboard;

    public function showlogin(){
        return view('Backend.Auth.login');
    }

    public function login(Request $request)
    {
       

        //validation
        $request->validate(

            [
                'wmail'=>'required|email',
                'password'=>'required|min:8'
            ]
        ); 

        //attempt to login logic implement

        if(Auth::guard('admin')->Auth::attempt(['email' =>$request-> $email, 'password' => $request->$password],$request->remember )){

            session()->flash('login Success','successfully Login');
            return redirect()->intended(route('dashboard'));

        }else{
            seassion()->flash('login error','Invalid user email and password!!!');
            return back();
        }

    }
}
