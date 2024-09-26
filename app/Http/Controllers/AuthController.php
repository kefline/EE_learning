<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(){
        return view('login');
    }
    
     public function showregistrationform(){
        return view('register');
     }
    public function register(){
        return view('register');
    }

    public function forgot(){
        return view('forgot');
    }
}
