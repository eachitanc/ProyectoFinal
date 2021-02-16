<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Factura;
use App\Models\DetalleFactura;
use App\Models\Producto;
use App\Models\FormaPago;

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

    public function varios(){
        $varProd = DB::table('productos as pro')
                    ->join('categoria', 'pro.categoria', '=', 'categoria.id_cat')
                    ->select('pro.id_producto','pro.nom_producto', 'pro.descripcion_producto','pro.valor_producto', 'pro.cant_producto','categoria.descripcion_cat')
                    ->orderBy('id_producto', 'asc')
                    ->get();
        return view('productos.variosproductos',['varProd' => $varProd]);
    }
    

    public function chocolates(){
        $chocolates = DB::table('productos as pro')
                    ->join('categoria', 'pro.categoria', '=', 'categoria.id_cat')
                    ->select('pro.id_producto','pro.nom_producto', 'pro.descripcion_producto','pro.valor_producto','pro.foto_producto', 'categoria.descripcion_cat')
                    ->where('categoria', '=', '2')
                    ->orderBy('valor_producto', 'desc')
                    ->get();
        return view('productos.chocolates',['chocolate' => $chocolates]);
    }
    public function desayunos(){
        $desayunos = DB::table('productos as pro')
                    ->join('categoria', 'pro.categoria', '=', 'categoria.id_cat')
                    ->select('pro.id_producto','pro.nom_producto', 'pro.descripcion_producto','pro.valor_producto','pro.foto_producto', 'categoria.descripcion_cat')
                    ->where('categoria', '=', '3')
                    ->orderBy('valor_producto', 'desc')
                    ->get();
        return view('productos.desayunos',['desayuno' => $desayunos]);
    }
    public function flores(){
        $flores = DB::table('productos as pro')
                    ->join('categoria', 'pro.categoria', '=', 'categoria.id_cat')
                    ->select('pro.id_producto','pro.nom_producto', 'pro.descripcion_producto','pro.valor_producto','pro.foto_producto', 'categoria.descripcion_cat')
                    ->where('categoria', '=', '4')
                    ->orderBy('valor_producto', 'desc')
                    ->get();
        return view('productos.flores',['flores' => $flores]);
    }
    public function meriendas(){
        $merienda = DB::table('productos as pro')
                    ->join('categoria', 'pro.categoria', '=', 'categoria.id_cat')
                    ->select('pro.id_producto','pro.nom_producto', 'pro.descripcion_producto','pro.valor_producto','pro.foto_producto', 'categoria.descripcion_cat')
                    ->where('categoria', '=', '5')
                    ->orderBy('valor_producto', 'desc')
                    ->get();
        return view('productos.meriendas',['meriendas' => $merienda]);
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
    public function detalleof($id){
        $detalle = DB::table('productos')
                ->join('categoria','categoria','=','categoria.id_cat')
                ->where('id_producto','=',"$id")
                ->get();
        return view('productos.detallesOfertas',['detal' => $detalle]);
    }
    public function ofertaProd(){
        $sale = DB::table('productos as pro')
                    ->join('categoria', 'pro.categoria', '=', 'categoria.id_cat')
                    ->select('pro.id_producto','pro.nom_producto', 'pro.descripcion_producto','pro.valor_producto','pro.foto_producto', 'categoria.descripcion_cat')
                    ->where('descuento', '=', '1')
                    ->orderBy('valor_producto', 'desc')
                    ->get();
        return view('productos.ofertas',['oferta' => $sale]);
    }

    public function facturarProd(){
        $idfact = session('id_fact');
        $formapago = FormaPago::all();
        $datos = DB::table('factura')->join('detallefactura', 'id_factura', '=', 'factura_id')
                                    ->join('productos', 'id_producto', '=', 'producto_id')
                                    ->join('usuario', 'usuario_id', '=', 'id_user')
                                    ->select('id_producto','id_factura','nom_user','ape_user','dir_user','tel_user','correo_user','nom_producto','valor_producto','descuento','cant_producto as cantidad')
                                    ->where('id_factura', '=', "$idfact")
                                    ->get();
        return view('productos.factura.facturar',['datfact' => $datos,'fpago' => $formapago]);
    }
    public function formularioReg1()
    {
        $pro = Producto::all();
        return view('productos.registrar');
    }
    
    public function registrarp(Request $request)
    {
        $use = new Producto();
        $use->nom_producto = $request->input('txtProd');
        $use->valor_producto = $request->input('txtvalProd');
        $use->descripcion_producto = $request->input('txtdescProd');
        $use->cant_producto = $request->input('txtcantProd');
        $use->descuento = $request->input('sldescProd'); 
        $use->categoria = $request->input('slcatProd');
        $use->foto_producto = $request->input('imagen');
        
        $use->save();
        return redirect()->route('variosprod');
    }
    public function fromActup($id){
        $prod =  DB::table('productos as pro')
                 ->join('categoria', 'pro.categoria', '=', 'categoria.id_cat')
                 ->where('pro.id_producto','=',"$id")
                 ->get();
         $cat = DB::table('categoria')
                 ->get();
         return view('productos.fromActualizarprod', ['prod'=> $prod,'cat'=>$cat]);
     }
     public function actualizarpro(Request $request, $id){
        

        $use = Producto::findOrFail($id);
        $use->nom_producto = $request->input('txtProd');
        $use->valor_producto = $request->input('txtvalProd');
        $use->descripcion_producto = $request->input('txtdescProd');
        $use->cant_producto = $request->input('txtcantProd');
        $use->descuento = $request->input('sldescProd'); 
        $use->categoria = $request->input('slcatProd');
        $use->foto_producto = $request->input('imagen');
        $use->save();
        return redirect()->route('variosprod');
    }

     
    public function agregarAlCarrito($id){
        if(session('factura')== 0){
            $hoy = date('Y-m-d');
            $iduser = session('id_usuario');
            $factura = new Factura();
            $factura->fecha_factura = "$hoy";
            $factura->usuario_id = "$iduser";
            $factura->formapago_id = "1";
            $factura->save();

            $idFact = DB::table('factura')->orderby('id_factura','desc')->first()->id_factura;
            session(['id_fact' => "$idFact"]);
            session(['factura' => "1"]);

            $det_factura = new DetalleFactura();
            $det_factura->factura_id = "$idFact";
            $det_factura->producto_id = "$id";
            $det_factura->save();
        }
        else{
            $idfact = session('id_fact');
            $det_factura = new DetalleFactura();
            $det_factura->factura_id = "$idfact";
            $det_factura->producto_id = "$id";
            $det_factura->save();
        }
        return view('productos.comprar');
    }
}

