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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'GatoController@index');

Route::group(['prefix'=>'Engatusados'], function(){

    Route::get('perdidos','GatoController@mostrarPerdidos');
    Route::get('encontrados','GatoController@mostrarEncontrados');
    Route::get('adopcion','GatoController@mostrarAdopcion');



    Route::get('gatos','GatoController@verGatos');


    Route::get('insertarGato','GatoController@insertarGato');

});







?>
