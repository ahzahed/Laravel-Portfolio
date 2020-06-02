<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function LoginIndex(){
    	return view('login');
    }

    function onLogout(Request $request){
        $request->session()->flush();
        return redirect('/login');
    }


    function onLogin(Request $request){
       $user= $request->input('user');
       $pass= $request->input('pass');
       $countValue=Admin::where('username','=',$user)->where('password','=',$pass)->count();

        if($countValue==1){
            $request->session()->put('user',$user);
            return 1;
        }
        else{
            return 0;
        }

    }

}
