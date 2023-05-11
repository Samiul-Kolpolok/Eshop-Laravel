<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\user;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    public function register(){
        return view('customer.register');
    }
    //

    public function registerPost(Request $request){

        User::create($request);

        return back()->with('success','Registered Successfully');
    }

    public function login(){

        return view('customer.login');
    }


    public function loginPost(Request $request)
    {

        //return $request->all();

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect('/admin-dashboard')->with('message', 'Login Success');

        }

        else{
            return back()->with('message', 'Error Email or Password');
        }


    }

    public function dashboard(){
        return view('customer.dashboard');
    }

    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('login');
    }

}
