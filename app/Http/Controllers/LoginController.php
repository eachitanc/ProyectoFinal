<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Session\SessionManager;

class LoginController extends Controller
{
    public function login(){
        return view('login.login');
    }

    public function loginUser(Request $request, SessionManager $sessionManager){
        $us = $request->input('defaultLoginFormUser');
        $ps = $request->input('defaultLoginFormPassword');
        if($us == "" || $ps == ""){
            return view('login.login');
        }else{
            $user  = DB::table('usuario')
                    ->where('user','=',"$us")
                    ->get();
            if(count($user)>0){
                $validar  = DB::table('usuario')
                    ->where('user','=',"$us")
                    ->where('pass_user','=',"$ps")
                    ->get();
                
                if(count($validar)>0){
                    $idUs = DB::table('usuario')->whereuser($us)->first()->id_user;
                    $rolUs = DB::table('usuario')->whereuser($us)->first()->rol;
                    session(['id_usuario' => "$idUs"]);
                    session(['rol_user' => "$rolUs"]);
                    return view('logeado.inicio', ['user' => $user]);
                }
                else{
                    $resp = "0";
                }   
            }
            else{
                $resp = "1";
            }
            $sessionManager->flash('resp', "$resp");
            return view('login.reslogin');     
        }
        
    }
}
        
        