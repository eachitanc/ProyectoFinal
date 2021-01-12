<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function getIndex(){
        return view('inicio');
    }
    public function getIndexlog(){
        return view('logeado.inicio');
    }
    public function login(){
        return view('login.login');
    }
    public function registro(){
        return view('registro.registro');
    }
}
