<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\Comics_A;
use DB;
use Carbon\Carbon;

class ControladorComic extends Controller
{
   
    public function index(Request $request)
    {
        $buscar3=$request->get('buscar3');
        $tablaCo=DB::table('tb_comic')->where('nombre','like','%'.$buscar3.'%')->get();
        return view('Consulta_Comics', compact('tablaCo'),compact("buscar3"));
    }

    public function create()
    {
        $tablaAr = DB::table('tb_proveedor')->get();
        return view('Alta_Comics', compact('tablaAr'));
       
    }

    public function store(Comics_A $request)
    {   
        $suma= $request->input('Precio_compra')+$request->input('Precio_compra') * 0.4;
        DB::table('tb_comic')->insert([
            "nombre"=>$request->input('Nombre'),
            "edicion"=>$request->input('Edicion'),
            "precioCompra"=>$request->input('Precio_compra'),
            "compania"=>$request->input('Compañia'),
            "precioVenta"=>$suma,
            "cantidad"=>$request->input('Cantidad'),
            "fechaIngreso"=>$request->input('Fecha'),
            "idproveedor"=>$request->input('Proveedor'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('comic/create')->with('mensaje'," ");

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Comics_A $request, $id)
    {
        $suma= $request->input('Precio_compra')+$request->input('Precio_compra') * 0.4;
        DB::table('tb_comic')->where('idComic', $id)->update([
            "nombre"=>$request->input('Nombre'),
            "edicion"=>$request->input('Edicion'),
            "precioCompra"=>$request->input('Precio_compra'),
            "compania"=>$request->input('Compañia'),
            "precioVenta"=>$suma,
            "cantidad"=>$request->input('Cantidad'),
            "fechaIngreso"=>$request->input('Fecha'),
            "idproveedor"=>$request->input('Proveedor'),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('comic')->with('Actualiza'," ");
    }

    public function destroy($id)
    {
        DB::table('tb_comic')->where('idComic', $id)->delete();
        return redirect('comic')->with('Elimina'," ");
    }
}
