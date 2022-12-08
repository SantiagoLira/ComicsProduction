<?php

namespace App\Http\Controllers;
use PDF;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ControladorPDF extends Controller
{
public function PDF(){
$users = User::all();
view()->share('users.pedidos_catalogo',$users);
$pdf = PDF::loadView('users.pedidos_catalogo', ['users' => $users]);
return $pdf->download('pedidos_catalogo');
    

}
}
