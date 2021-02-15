<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\DetalleFactura;
use App\Models\Factura;
use Illuminate\Support\Facades\DB;
use App\Exports\ProductoExport;
use Maatwebsite\Excel\Facades\Excel;
//use mikehaertl\wkhtmlto\Pdf;

use Barryvdh\DomPDF\Facades as PDF;

class InformeController extends Controller
{
    public function informe(){
        return view('informes.informe');
    }

    public function exportarExcel(){
        return Excel::download(new ProductoExport,'productos.xlsx');
    }

    public function exportarPDF(){
        $user = Usuario::select(DB::raw("COUNT(*) as count"))
                ->whereYear('created_at',date('Y'))
                ->groupby(DB::raw("Month(created_at)"))
                ->pluck('count');

        $months = Usuario::select(DB::raw("Month(created_at) as month"))
                ->whereYear('created_at',date('Y'))
                ->groupby(DB::raw("Month(created_at)"))
                ->pluck('month');
        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $index =>$month){
            $datas[$month] = $user[$index];
        }
        $ventas = Factura::all();
        $pdf = \PDF::loadView('informes.informepdf',compact('ventas','datas'));
        return $pdf->download('informe.pdf');
    }

    public function vistaPDF(){
        $user = Usuario::select(DB::raw("COUNT(*) as count"))
                ->whereYear('created_at',date('Y'))
                ->groupby(DB::raw("Month(created_at)"))
                ->pluck('count');

        $months = Usuario::select(DB::raw("Month(created_at) as month"))
                ->whereYear('created_at',date('Y'))
                ->groupby(DB::raw("Month(created_at)"))
                ->pluck('month');
        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $index =>$month){
            $datas[$month] = $user[$index];
        }
        $ventas = Factura::all();
        return view('informes.informepdf',compact('datas','ventas'));
    }
    
}
