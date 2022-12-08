<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Proveedor_A;
use DB;
use Carbon\Carbon;

class ControladorProveedor extends Controller
{
   
    public function index()
    {
        $tablaPro = DB::table('tb_proveedor')->get();
        return view('Proveedor_Catalogo', compact('tablaPro'));
    }

    public function create()
    {
        return view('Alta_Proveedor');
    }

    public function store(Proveedor_A $request)
    {
        DB::table('tb_proveedor')->insert([
            "contacto"=>$request->input('Contacto'),
            "empresa"=>$request->input('Empresa'),
            "direccion"=>$request->input('Direccion'),
            "telefono"=>$request->input('Celular'),
            "pais"=>$request->input('Pais'),
            "correo"=>$request->input('Correo'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('proveedor/create')->with('mensaje'," ");

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Proveedor_A $request, $id)
    {
        DB::table('tb_proveedor')->where('idProveedor', $id)->update([
            "contacto"=>$request->input('Contacto'),
            "empresa"=>$request->input('Empresa'),
            "direccion"=>$request->input('Direccion'),
            "telefono"=>$request->input('Celular'),
            "pais"=>$request->input('Pais'),
            "correo"=>$request->input('Correo'),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('proveedor')->with('Actualiza'," ");
    }

    public function destroy($id)
    {
        DB::table('tb_proveedor')->where('idProveedor', $id)->delete();
        return redirect('proveedor')->with('Eliminar'," ");
    }
}
