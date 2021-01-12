<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function getIndex(){
        session(['id_usuario' => '0']);
        return view('inicio');
    }
    public function getIndexUser(){
        return view('logeado.inicio');
    }

}
