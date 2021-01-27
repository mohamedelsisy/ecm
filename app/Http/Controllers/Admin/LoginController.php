<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller

{


    public function getLogin(){
        return view('admin.auth.login');
    }

    public function login(LoginRequest $request){


        if (auth()
            ->guard('admin')
            ->attempt
            (
                [
                    'email' => $request->input("email"),
                    'password' => $request->input("password")
                ]
            ))
        {

            return redirect() -> route('admin.dashboard');
        }

        return redirect()->back()->with(['error' => 'خطأ في البيانات ']);

    }



    public function logout(){

        auth()->logout();
        return redirect()->route('get.admin.login');
    }
}
