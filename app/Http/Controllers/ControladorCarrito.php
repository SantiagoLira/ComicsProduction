<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\Articulo_A;
use DB;
use Carbon\Carbon;

use PDF;

class ControladorCarrito extends Controller
{
    public function index()
    {
        $tabla = DB::table('tb_venta')->where("estado","disponible")->get();
        return view('carrito', compact('tabla'));
    }
    public function index2()
    {
        $tabla = DB::table('tb_venta')->where("estado","nodisponible")->get();
        return view('carrito2', compact('tabla'));
    }

    public function create()
    {$tablaAr = DB::table('tb_proveedor')->get();
        return view('Alta_Articulo', compact('tablaAr'));
    }
    public function store2()
    {  
        DB::table('tb_venta')->where("estado","disponible")->update([
            "estado"=>"nodisponible",
            "updated_at"=>Carbon::now(),
        ]);   
        return redirect('cancelarexito')->with('n5'," ");

    }
    public function store(Request $request)
    {  
        $id=$request->input('id');
        $tipo=$request->input('tipo');
        if($tipo=="articulo"){
            $cantidad=DB::table('tb_venta')->where('id', $id)->where('tipo', $tipo)->value('cantidad');
            $cantidad2=DB::table('tb_articulo')->where('idArticulo', $id)->value('cantidad');
            $cant3=$cantidad+$cantidad2;
            DB::table('tb_articulo')->where('idArticulo', $id)->update([
                "cantidad"=>$cant3,
                "updated_at"=>Carbon::now(),
            ]);
           DB::table('tb_venta')->where('id', $id)->where('tipo', $tipo)->delete();

           return redirect('cancelarexito')->with('n1'," ");

        }else{
            $cantidad=DB::table('tb_venta')->where('id', $id)->where('tipo', $tipo)->value('cantidad');
            $cantidad2=DB::table('tb_comic')->where('idcomic', $id)->value('cantidad');
            $cant3=$cantidad+$cantidad2;
            DB::table('tb_comic')->where('idcomic', $id)->update([
                "cantidad"=>$cant3,
                "updated_at"=>Carbon::now(),
            ]);
           DB::table('tb_venta')->where('id', $id)->where('tipo', $tipo)->delete();

           return redirect('cancelarexito')->with('n1'," ");
        }
   

    }

    public function PDF2()
    {
     
        $datos=DB::table('tb_venta')->get();
        $pdf =PDF::loadView('PDF2', compact("datos"));
        return $pdf->stream('tiket.pdf');
    
        
    }
    public function PDF3(Request $request)
    {
        $id=$request->input('fecha');
        $datos=DB::table('tb_venta')->where("fecha",$id)->get();
        $pdf =PDF::loadView('PDF3', compact("datos"));
        return $pdf->stream('reporte de dia.pdf');
    
        
    }
    public function PDF4(Request $request)
    {
        $mes=$request->input('mes');
        $datos=DB::table('tb_venta')->where("mes",$mes)->get();
        $pdf =PDF::loadView('PDF4', compact("datos"));
        return $pdf->stream('reporte de mes.pdf');
    
        
    }

    public function edit($id)
    {
        //
    }


}
