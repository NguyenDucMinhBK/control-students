<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function view(){
        {
            return view('login');
        }

    }
    public function login(Request $request){
        $name = $request;
        echo $name;
    }
    //
}
