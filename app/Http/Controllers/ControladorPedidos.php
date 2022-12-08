<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use PDF;
use Illuminate\Http\Request;
use App\Http\Requests\Pedido;
use DB;
use Carbon\Carbon;

class ControladorPedidos extends Controller
{
   
    public function index(Request $request)
   
    {
        $buscar=$request->get('buscar');
        $datos=DB::table('tb_pedido')->where('descripcion','like','%'.$buscar.'%')->get();
        return view("pedidos_catalogo",compact("datos"),compact("buscar"));
            
      
    }

    public function create()
    {
     
     
    }

    public function store(Request $request)
    {
        DB::table('tb_pedido')->insert([
            "descripcion"=>$request->input('descripcion'),
            "precio"=>$request->input('Precio'),
            "cantidad"=>$request->input('cantidad'),
            "idproveedor"=>$request->input('Provedor'),
            "fecha"=> Carbon::now(),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('pedidos_catalogo')->with('mensaje'," ");

    }

    public function show()
    {
        
    
    }

    public function edit($id)
    {
        //
    }

    public function update2($id)
    {
     $com=DB::table('tb_pedido')->where('idpedidpo', $id)->get();
        return view('Editar_Pedidos',compact("com"))->with('mensaje2'," ");
    }

    public function update(Request $request, $id)
    {
        DB::table('tb_pedido')->where('idpedido', $id)->update([
            "descripcion"=>$request->input('descripcion'),
            "precio"=>$request->input('Precio'),
            "cantidad"=>$request->input('cantidad'),
            "idproveedor"=>$request->input('Provedor'),
          
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('pedidos_catalogo')->with('mensaje2'," ");
    }

    public function destroy($id)
    {
        DB::table('tb_pedido')->where('idpedido',$id)->delete();
        return redirect('pedidos_catalogo')->with('mensaje3'," ");;
    }
    public function download()
{

   
    return ("PDF");

}
public function PDF($id)
{
    $datos=DB::table('tb_pedido')->where('idpedido',$id)->get();
    $pdf =PDF::loadView('PDF', compact("datos"));
    return $pdf->stream('archivo.pdf');

    
}
}
