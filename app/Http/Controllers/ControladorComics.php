<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Articulo_A;
use App\Http\Requests\Articulo_E;
use App\Http\Requests\Comics_A;
use App\Http\Requests\Comics_E;
use App\Http\Requests\Proveedor_A;
use App\Http\Requests\Proveedor_E;



class ControladorComics extends Controller
{
    public function Validacion1(Articulo_A $D){
    
         return redirect()->route("21")->with('mensaje',"datos");
     }
     public function Validacion2(Articulo_E $D){
    
        return redirect()->route("24")->with('mensaje',"datos");
     }
    public function Validacion3(Comics_A $D){
    
            return redirect()->route("22")->with('mensaje',"datos");
        }
        public function Validacion4(Comics_E $D){
    
            return redirect()->route("23")->with('mensaje',"datos");
        }
        public function Validacion5(Proveedor_A $D){
    
            return redirect()->route("12")->with('mensaje',"datos");
        }
        public function Validacion6(Proveedor_E $D){
    
            return redirect()->route("13")->with('mensaje',"datos");
        }
        public function Validacion7($d){
            $a=$d->input('Contacto');
            if($a=="ADMIN"){
                 return 'Se esta procesando tu recuerdo 1';;

            }
            return 'Se esta procesando tu recuerdo 2';;
        }
    }

