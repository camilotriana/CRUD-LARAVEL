<?php

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
use App\Product; /*IMPORTAMOS EL MODELO DE PRODUCTOS*/ 
use Illuminate\Http\Request; /*IMPORTAMOS LA LIBRERIA REQUEST*/

Route::get('products', function () {
    $listproducts = Product::all();
    return view('products.index',compact('listproducts')); /*RETORNAMOS LA VISTA A LA QUE QUEREMOS IR Y TODOS LOS DATOS DEL MODELO PRODUCTO*/
})->name('products');

Route::get('products/create', function(){
    return view('products.create');
})->name('products.create');

Route::post('products',function(Request $req){
   $newProduct = new Product;
   $newProduct->name = $req->input('name'); /*GUARDAMOS LOS DATOS DEL FORMULARIO EN LA INSTANCIA DEL MODELO*/
   $newProduct->price = $req->input('price');
   $newProduct->save();

   return redirect('products')->with('info','Producto Creado Exitosamente'); /* ENVIAMOS UN MENSAJE EMERGENTE A LA VISTA DONDE REDIRECCIONAMOS*/
})->name('products.save');