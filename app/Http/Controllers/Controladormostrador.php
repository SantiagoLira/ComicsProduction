<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\Articulo_A;
use DB;

class Controladormostrador
 extends Controller
{
   
    public function index(Request $request)
    {
     
        $buscar2=$request->get('buscar2');
        $tablaAr=DB::table('tb_articulo')->where('descripcion','like','%'.$buscar2.'%')->get();
        return view('Consulta_Articulos', compact('tablaAr'),compact("buscar2"));
    }

    public function create()
    {$tablaAr = DB::table('tb_proveedor')->get();
        return view('Alta_Articulo', compact('tablaAr'));
    }

    public function store(Articulo_A $request)
    {   $suma= $request->input('Precio_compra')+$request->input('Precio_compra') * 0.4;
        DB::table('tb_articulo')->insert([
            "tipo"=>$request->input('Tipo'),
            "Marca"=>$request->input('Marca'),
            "FechaIngreso"=>$request->input('fecha'),
            "PrecioCompra"=>$request->input('Precio_compra'),
            "cantidad"=>$request->input('Cantidad'),
            "PrecioVenta"=>$suma,
            "descripcion"=>$request->input('Descripcion'),
            "idproveedor"=>$request->input('Proveedor'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('articulo/create')->with('confirmacion'," ");

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Articulo_A $request, $id)
    {
        $suma= $request->input('Precio_compra')+$request->input('Precio_compra') * 0.4;
        DB::table('tb_articulo')->where('idArticulo', $id)->update([
            "tipo"=>$request->input('Tipo'),
            "Marca"=>$request->input('Marca'),
            "FechaIngreso"=>$request->input('fecha'),
            "PrecioCompra"=>$request->input('Precio_compra'),
            "cantidad"=>$request->input('Cantidad'),
            "PrecioVenta"=>$suma,
            "descripcion"=>$request->input('Descripcion'),
            "idproveedor"=>$request->input('Proveedor'),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('articulo')->with('Actualiza'," ");
    }

    public function destroy($id)
    {
        DB::table('tb_articulo')->where('idArticulo', $id)->delete();
        return redirect('articulo')->with('Elimina'," ");
    }
}
