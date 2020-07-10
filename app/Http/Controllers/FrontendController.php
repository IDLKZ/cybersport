<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.home');
    }


    public function login(){
        return view('backend.login');
    }

    public function register(){
        return view("frontend.auth.register");
    }

    public function logout(){
        if(Auth::check()){Auth::logout();}
        return redirect()->route('main');
    }
}
