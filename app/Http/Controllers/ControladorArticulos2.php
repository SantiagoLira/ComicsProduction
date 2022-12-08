<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Articulo_A;
use DB;
use Carbon\Carbon;

class ControladorArticulos2 extends Controller
{
   
    public function index()
    {
        $tablaAr2 = DB::table('tb_articulo')->get();
        return view('VentasArticulos', compact('tablaAr2'));
    }

    public function index2()
    {
        $tablaAr2 = DB::table('tb_articulo')->get();
        return view('VentasArticulos', compact('tablaAr2'));
    }

    public function store(Request $request)
    {  
      
      $date=date("m");

      $id=$request->input('id');
       $venta=DB::table('tb_venta')->where('id', $id)->get();
       if($venta->first()==null){
        $cant2=$request->input('cantidad1');
        $cant=$request->input('cantidad2');
        if($cant==0){
            
            return redirect('compraexito')->with('n1'," ");
        }if($cant>$cant2){
       
            return redirect('compraexito')->with('n2'," ");

        }if($cant<0){
       
            return redirect('compraexito')->with('n3'," ");

        }else{
           $id=$request->input('id');
            $cant3=$cant2-$cant;
            DB::table('tb_venta')->insert([
                "id"=>$request->input('id'),
                "descripcion"=>$request->input('descripcion'),
                "cantidad"=>$request->input('cantidad2'),
                "precio"=>$request->input('precio'),
                "tipo"=>"articulo",
                "estado"=>"disponible",
                "fecha"=>Carbon::now(),
                "mes"=>$date,
                "created_at"=>Carbon::now(),
                "updated_at"=>Carbon::now(),
            ]);
            DB::table('tb_articulo')->where('idArticulo', $id)->update([
          
                "cantidad"=>$cant3,
                "updated_at"=>Carbon::now(),
            ]);

            return redirect('compraexito')->with('carrito'," ");
        }
       }else{  
        $cant2=$request->input('cantidad1');
        $cant=$request->input('cantidad2');
        if($cant==0){
            
            return redirect('compraexito')->with('n1'," ");
        }if($cant>$cant2){
       
            return redirect('compraexito')->with('n2'," ");

        }if($cant<0){
       
            return redirect('compraexito')->with('n3'," ");

        }else{

            $estadoe=DB::table('tb_venta')->where('id', $id)->where('estado','disponible')->get();
        if($estadoe==null){
            
            $cantidad_antigua = DB::table('tb_venta')->where('id', $id)->value('cantidad');
            $cantidad_nueva= $cantidad_antigua+$cant;
            DB::table('tb_venta')->where('id', $id)->update([
                "cantidad"=>$cantidad_nueva,
                "updated_at"=>Carbon::now(),
            ]);
            return redirect('compraexito')->with('carrito'," ");
        }else{
            $id=$request->input('id');
            $cant3=$cant2-$cant;
            DB::table('tb_venta')->insert([
                "id"=>$request->input('id'),
                "descripcion"=>$request->input('descripcion'),
                "cantidad"=>$request->input('cantidad2'),
                "precio"=>$request->input('precio'),
                "tipo"=>"articulo",
                "estado"=>"disponible",
                "fecha"=>Carbon::now(),
                "mes"=>$date,
                "created_at"=>Carbon::now(),
                "updated_at"=>Carbon::now(),
            ]);
            DB::table('tb_articulo')->where('idArticulo', $id)->update([
          
                "cantidad"=>$cant3,
                "updated_at"=>Carbon::now(),
            ]);

            return redirect('compraexito')->with('carrito'," ");

        }
           
        }
       
        }

       
            
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function compra()
    {  
   
    }

    public function destroy($id)
    {
        DB::table('tb_articulo')->where('idArticulo', $id)->delete();
        return redirect('articulo')->with('Elimina'," ");
    }
}
