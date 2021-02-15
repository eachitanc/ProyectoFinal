<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Usuario;
use App\Models\Cargo;
use Illuminate\Session\SessionManager;

class UsuariosController extends Controller
{
    public function listarUser(){
        $usuario = DB::table('usuario as usr')
                    ->join('rol', 'usr.rol', '=', 'rol.id_rol')
                    ->select('usr.id_user','usr.user','usr.nom_user','usr.ape_user','rol.descripcion_rol')
                    ->orderBy('usr.rol', 'desc')
                    ->get();
        return view('registro.listado', ['usuario' => $usuario]); 
          
    }
    public function formularioReg()
    {
        $roles = Cargo::all();
        return view('registro.fromRegistrarUsuario', ['rol' => $roles]);
    }
    public function registrar(Request $request)
    {
        $use = new Usuario();
        $use->user = $request->input('txtUser');
        $use->pass_user = $request->input('passUser');
        $use->nom_user = $request->input('txtNomUser');
        $use->ape_user = $request->input('txtApeUser');
        $use->tel_user = $request->input('txtTelefono'); 
        $use->correo_user = $request->input('emailUser');
        $use->rol = $request->input('rol');
        $use->save();
        return redirect()->route('listarUser');
    }

    public function fromActu($id){
       $use =  DB::table('usuario as usr')
                ->join('rol', 'usr.rol', '=', 'rol.id_rol')
                ->where('usr.id_user','=',"$id")
                ->get();
        $rol = DB::table('rol')
                ->get();
        return view('registro.fromActualizarUser', ['use'=> $use,'rol'=>$rol]);
    }


    public function actualizar(Request $request){
        $id =$request->input('idUser');

        $use = Usuario::findOrFail($id);
        $use->user = $request->input('txtUser');
        $use->pass_user = $request->input('passUser');
        $use->nom_user = $request->input('txtNomUser');
        $use->ape_user = $request->input('txtApeUser');
        $use->tel_user = $request->input('txtTelefono');
        $use->correo_user = $request->input('emailUser');
        $use->rol = $request->input('rol');
        $use->save();
        return redirect()->route('listarUser');
    }

    public function eliminar($id){
        $use = Usuario::findOrFail($id);
        $use->delete();
        return redirect()->route('listarUser');
    }
}
