<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Session\SessionManager;

class ActualizarController extends Controller
{
    public function formActualizaUser(){
        $idU = session('id_usuario');
        $user  = DB::table('usuario')
                    ->where('id_user','=',"$idU")
                    ->get();
        return view('actualizar.actualizauser',['user' => $user]);
    }
    public function resFormActualizaUser(Request $request, SessionManager $sessionManager){
        $u = session('id_usuario');
        $user = DB::table('usuario')
                ->where('id_user','=',"$u")
                ->get();
        if(count($user)>0){
            $us = Usuario::find("$u");
            $us -> user = $request->input('txtUser');
            $us -> pass_user = $request->input('passUser');
            $us -> nom_user = $request->input('txtNomUser');
            $us -> ape_user = $request->input('txtApeUser');
            $us -> correo_user = $request->input('emailUser');
            $us -> tel_user = $request->input('txtTelefono');
            $us -> dir_user = $request->input('txtDireccion');
            $us -> save(); 
            return view('actualizar.resactualizauser');
        }
    }
}
