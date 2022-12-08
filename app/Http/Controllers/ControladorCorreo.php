<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Requests\Articulo_A;
use DB;
use Carbon\Carbon;
use App\Mail\correo2;

class ControladorCorreo extends Controller
{

    public function store(Request $request)
    {
        $correo = new correo2($request->all());
        Mail::to('gerauniversaljeje@gmail.com')->send($correo);
        return redirect('pedidos_catalogo')->with('pedidos', 'Pedido enviado');
    }

}
