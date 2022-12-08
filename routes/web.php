<?php
use App\Http\Controllers\ControladorPedidos;
use App\Http\Controllers\ControladorCorreo;
use App\Http\Controllers\ControladorCarrito;
use App\Http\Controllers\ControladorComics;
use App\Http\Controllers\ControladorArticulos;
use App\Http\Controllers\ControladorComic2;
use App\Http\Controllers\ControladorArticulos2;
use App\Http\Controllers\ControladorComic;
use App\Http\Controllers\ControladorProveedor;
use App\Http\Controllers\controllerLogin;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view('1','Proveedor_Catalogo');
Route::view('2','catalogo');
//Route::view('1','Proveedor_Catalogo');
//Route::view('2','Consulta_Articulos');
Route::view('5','catalogo');
//Route::view('21','Alta_Articulo')->name("21");;
//Route::view('22','Alta_Comics')->name("22");
Route::view('33','Alta_Pedidos')->name("33");
Route::view('23','Editar_Comics')->name("23");;
Route::view('24','Editar_Articulo')->name("24");
//Route::view('12','Alta_Proveedor')->name("12");
Route::view('13','Editar_Proveedor')->name("13");
Route::view('6','catalogo2');

Route::view('correo','Correoingresar')->name("correo");
Route::post('correo.store',[ControladorCorreo::class,'store'])->name('correo.store');
Route::view('Plantilla_1','Plantilla_1' )->name("pan");
Route::view('compraexito','compraexito' )->name("pan2");
Route::view('cancelarexito','cancelarexito' )->name("pan3");
Route::view('Editar_Pedidos','Editar_Pedidos' )->name("pan32");


//Route::post('AltaArticulo',[ControladorComics::class,'validacion1']);
//ALTA ARTICULO
Route:: post('articulo', [ControladorArticulos::class, 'store'])->name('articulo.store');
Route::get('articulo/create',[ControladorArticulos::class,'create'])->name('articulo.create');
Route::get('articulo',[ControladorArticulos::class,'index'])->name('articulo.index');
Route::put('articulo/{id}',[ControladorArticulos::class,'update'])->name('articulo.update');
Route::delete('articulo/{id}',[ControladorArticulos::class,'destroy'])->name('articulo.destroy');

//AlTA COMICS
Route:: post('comic', [ControladorComic::class, 'store'])->name('comic.store');
Route::get('comic/create',[ControladorComic::class,'create'])->name('comic.create');
Route::get('comic',[ControladorComic::class,'index'])->name('comic.index');
Route::put('comic/{id}',[ControladorComic::class,'update'])->name('comic.update');
Route::delete('comic/{id}',[ControladorComic::class,'destroy'])->name('comic.destroy');

//ALTA PROVEEDOR
Route:: post('proveedor', [ControladorProveedor::class, 'store'])->name('proveedor.store');
Route::get('proveedor/create',[ControladorProveedor::class,'create'])->name('proveedor.create');
Route::get('proveedor',[ControladorProveedor::class,'index'])->name('proveedor.index');
Route::put('proveedor/{id}',[ControladorProveedor::class,'update'])->name('proveedor.update');
Route::delete('proveedor/{id}',[ControladorProveedor::class,'destroy'])->name('proveedor.destroy');


//ALTA PEDIDO
Route::post('guardarPedido',[ControladorPedidos::class,'store'])->name('guardarPedido');
Route::get('pedidos_catalogo',[ControladorPedidos::class,'index'])->name('pedidos_catalogo');
Route::post('dead/{id}',[ControladorPedidos::class,'destroy'])->name('dead');
Route::post('PDF/{id}',[ControladorPedidos::class,'PDF'])->name('PDF');
Route::post('PDF2',[ControladorCarrito::class,'PDF2'])->name('PDF2');

Route::post('AltaArticulo2',[ControladorComics::class,'validacion2']);
Route::post('Comics1',[ControladorComics::class,'validacion3']);
Route::post('Comics2',[ControladorComics::class,'validacion4']);
Route::post('Proveedor1',[ControladorComics::class,'validacion5']);
Route::post('Proveedor2',[ControladorComics::class,'validacion6']);
Route::post('PostLogin',[controllerLogin::class, 'PostLogin'])->name('Loging');
Route::post('PostSignUp',[controllerLogin::class, 'PostSignUp'])->name('signing');

Route::get('/',function(){
    return view('Login');
})->name('log');

Route::get('RegistrarTrabajador',function(){
    return view('RegistrarTrabajador');
})->name('Signin');

Route::get('VentasArticulos',function(){
    return view('VentasArticulos');
})->name('VentArticulos');

Route::get('VentasComics',function(){
    return view('VentasComics');
})->name('VentComics');

Route::get('Editar_Pedidos2/{id}',[ControladorPedidos::class,'update2'])->name('Editar_Pedidos2');
Route::post('carrito.cancelar', [ControladorCarrito::class,'store'])->name('carrito.cancelar');
Route::get('carrito.cancelar2', [ControladorCarrito::class,'store2'])->name('carrito.cancelar2');
Route::get('carrito',[ControladorCarrito::class,'index'])->name('carrito.index');
Route::get('carrito2',[ControladorCarrito::class,'index2'])->name('carrito.index2');
Route::get('ventasArticulo',[ControladorArticulos2::class,'index'])->name('varticulo.index');
Route::get('ventasArticulo3',[ControladorArticulos2::class,'index2'])->name('index.ventasA');
Route:: get('ventascomic', [ControladorComic2::class, 'index'])->name('vcomic.index');
Route::post('ventascomic2', [ControladorComic2::class, 'store'])->name('ventascomic2');
Route::post('ventasArticulo2', [ControladorArticulos2::class,'store'])->name('ventasArticulo2');
Route::get('ventasArticulo22',[ControladorArticulos::class,'index2'])->name('2varticulo.index');
Route::put('pedido/{id}',[ControladorPedido::class,'update'])->name('pedido.update');
Route::post('PDF3',[ControladorCarrito::class,'PDF3'])->name('PDF3');
Route::post('PDF4',[ControladorCarrito::class,'PDF4'])->name('PDF4');