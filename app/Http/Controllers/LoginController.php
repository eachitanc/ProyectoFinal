<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Session\SessionManager;

class LoginController extends Controller
{
    public function loginUser(Request $request){
        $us = $request->input('defaultLoginFormUser');
        $ps = $request->input('defaultLoginFormPassword');
        if($us == "" || $ps == ""){
            return view('login.login');
        }else{
            $user  = DB::table('usuario')
                    ->where('user','=',"$us")
                    ->get();
            return view('logeado.inicio', ['user' => $user]);
        }
        
    }

    public function registroUser(Request $request, SessionManager $sessionManager){ 
        $us = $request->input('txtUser');
        $cor = $request->input('emailUser');
        $user  = DB::table('usuario')
                    ->where('user','=',"$us")
                    ->get();
        $correo = DB::table('usuario')
                    ->where('correo_user','=',"$cor")
                    ->get();
        if(count($user)>0){
            $resp = "0";
        }else{
            if(count($correo)>0){
                $resp = "1";    
            }else{
                $us = new Usuario();
                $us -> user = $request->input('txtUser');
                $us -> pass_user = $request->input('passUser');
                $us -> nom_user = $request->input('txtNomUser');
                $us -> ape_user = $request->input('txtApeUser');
                $us -> correo_user = $request->input('emailUser');
                $us -> rol = $request->input('numRol');
                $us -> save(); 
                $resp = "2";
            }
        }
        $sessionManager->flash('resp', "$resp");
        return view('login.resregistro');     
    }

}
        
        