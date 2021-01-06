<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginUser(Request $request){
        $us = $request->input('defaultLoginFormUser');
        $ps = $request->input('defaultLoginFormPassword');
        if($us == "" || $ps == ""){
            return view('login.login');
        }else{
            $user  = DB::table('usuario')
                    ->where('user','=',$us)
                    ->get();
            return view('logeado.inicio', ['user' => $user]);
        }
        
    }

    public function registroUser(Request $request){        
    }
}
        
        