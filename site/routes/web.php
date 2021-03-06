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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/loja', 'LojaController@show');

Route::get('/galeria', 'GaleriaController@galeria');

Route::get('/perfil', function () {
    return view('perfil');
});
Route::get('/contato', function () {
    return view('contato');
});

route::get('/sobre', function () {
    return view('sobre');
});
 

route::resource('galeria_item','GaleriaItemController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
