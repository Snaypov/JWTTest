<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function index(){
        return view('jwt.home-jwt');
    }

    public function userLogin(){
        return view('jwt.login-jwt');
    }
}
