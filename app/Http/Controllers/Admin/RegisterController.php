<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function register(Request $request){
        if($request->method()=="POST"){
            $nickname = $request->input("nickname");
            $password = $request->input("password");

        }
    }
}
