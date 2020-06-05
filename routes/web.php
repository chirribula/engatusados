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


Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();                                                      /*cuando instalas artisan auth*/

Route::get('/', 'GatoController@index');

Route::get('/home', 'GatoController@index')->name('home');



Route::group(['prefix'=>'Engatusados'], function(){

    Route::get('perdidos','GatoController@mostrarPerdidos');
    Route::get('encontrados','GatoController@mostrarEncontrados');
    Route::get('adopcion','GatoController@mostrarAdopcion');
    Route::get('gatos','GatoController@verGatos');
    Route::get('verUnGato/{id}','GatoController@getShow')->where('id','[0-9]+');
    Route::get('insertarGato','GatoController@insertarGato')->middleware('auth');
    Route::get('gatos/{imagen}','GatoController@getImage');
    Route::post('insertarGato/Submit','GatoController@save')->middleware('auth');
    Route::get('editarGato/{id}','GatoController@editarGato')->where('id','[0-9]+')->middleware('auth');
    Route::post('editarGato/submit/{id}','GatoController@updateGato')->where('id','[0-9]+')->middleware('auth');
    Route::get('borrarGato/{id}','GatoController@borrarGato')->where('id', '[0-9]+')->middleware('auth');

});





Route::group(['prefix'=>'Engatusados/Usuario'], function(){

    Route::get('verUsuario/{id}','UserController@verUsuario')->where('id','[0-9]+')->middleware('auth');
    Route::get('editarUsuario/{id}','UserController@edit')->where('id','[0-9]+')->middleware('auth');
    Route::put('editar/submit/{id}','UserController@update')->where('id','[0-9]+')->middleware('auth');

});

Route::group(['prefix'=>'Engatusados/Tienda'], function(){

    Route::post('productos/insertarProductos/submit','ProductoController@save')->middleware('auth');
    Route::get('productos','ProductoController@verProductos');
    Route::get('productos/insertarProductos','ProductoController@insertarProducto')->middleware('auth');
    Route::get('productos/{imagen}','ProductoController@getImage');
    Route::get('verUnProducto/{id}','ProductoController@getShow');
    Route::get('productos/eliminar/{id}','ProductoController@eliminarProducto')->where('id','[0-9]+')->middleware('auth');
    Route::get('productos/editar/{id}','ProductoController@editarProducto')->where('id','[0-9]+')->middleware('auth');
    Route::post('productos/editar/submit/{id}','ProductoController@update')->where('id','[0-9]+')->middleware('auth');
    Route::get('productos/comprar/{id}','ProductoController@comprarProducto')->where('id','[0-9]+')->middleware('auth');
    Route::post('productos/comprobarCompra/{id}','ProductoController@comprobarCompra')->where('id','[0-9]+')->middleware('auth');
});

Route::group(['prefix'=>'Engatusados/Pedido'], function(){

    Route::get('forumarioPedido','PedidoController@forumarioPedido')->where('id','[0-9]+')->middleware('auth');
});

Route::group(['prefix'=>'Engatusados/Categoria'], function(){

    Route::get('insertarCategoria','CategoriaController@insertarCategoria')->middleware('auth');
    Route::post('insertarCategoria/Submit','CategoriaController@save')->middleware('auth');


});



?>
