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
    return view('clientes.index');
});

Route::get('/user', function () {
    return view('user.create');
});


Route::resource('plantas', 'PlantaController')->Middleware('auth');
Route::resource('suculentas', 'SuculentasController');
Route::resource('cactus', 'CactusController');
Route::resource('caccli', 'clientescac@index');
Route::resource('ortencias', 'OrtenciasController');

Auth::routes(['reset'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

