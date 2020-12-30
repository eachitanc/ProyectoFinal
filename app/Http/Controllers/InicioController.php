<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function getIndex(){
        return view('master');
    }
    public function login(){
        return view('login.login');
    }
}
