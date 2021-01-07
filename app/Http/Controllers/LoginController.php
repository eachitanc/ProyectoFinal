<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;

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

    public function registroUser(Request $request){   
        $us = new Usuario();
        $us -> user = $request->input('txtUser');
        $us -> pass_user = $request->input('passUser');
        $us -> nom_user = $request->input('txtNomUser');
        $us -> ape_user = $request->input('txtApeUser');
        $us -> correo_user = $request->input('emailUser');
        $us -> rol = $request->input('numRol');
        $us -> save(); 
        return redirect () -> route ('formLogin');    
    }

}
        
        