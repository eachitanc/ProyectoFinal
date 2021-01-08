<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function anchetas(){
        $anchetas = DB::table('productos as pro')
                    ->join('categoria', 'pro.categoria', '=', 'categoria.id_cat')
                    ->select('pro.id_producto','pro.nom_producto', 'pro.descripcion_producto','pro.valor_producto','pro.foto_producto', 'categoria.descripcion_cat')
                    ->where('categoria', '=', '1')
                    ->orderBy('valor_producto', 'desc')
                    ->get();
        return view('productos.anchetas',['ancheta' => $anchetas]);
    }

    //buscar
    /*public function buscarProd(Request $request){
        $nom = $request->input('txtBuscar');
        if($nom == ""){
            return view('master');
        } 
        $prod = DB::table('productos')
                ->join('categoria','categoria','=','categoria.id_cat')
                ->where('descripcion_producto','like',"%$nom%")
                ->get();
        return view('productos.buscar',['producto' => $prod]);
    }   */

    public function buscaProducto(Request $request){
        $nomb = $request->input('txtBuscar');
        if($nomb == ""){
            $prod = DB::table('productos')
                ->join('categoria','categoria','=','categoria.id_cat')
                ->orderby ('valor_producto','desc')
                ->get();
        }else{
            $prod = DB::table('productos')
                ->join('categoria','categoria','=','categoria.id_cat')
                ->where('descripcion_producto','like',"%$nomb%")
                ->orderby ('valor_producto','asc')
                ->get();
        }
        return view('productos.buscar',['producto' => $prod]);
    }
    public function detalle($id){
        $detalle = DB::table('productos')
                ->join('categoria','categoria','=','categoria.id_cat')
                ->where('id_producto','=',"$id")
                ->get();
        return view('productos.detalles',['detal' => $detalle]);
     }
}

