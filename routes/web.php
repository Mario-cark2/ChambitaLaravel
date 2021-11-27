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
 
 
Auth::routes();
Route::resource('/notas', 'NotaController');
Route::get('/notas/lista', 'NotaController@index')->name('notas.lista');
Route::get('/editar/{id}', 'NotaController@edit')->name('notas.editar');

Route::put('/editar/{id}', 'NotaController@update')->name('notas.update');

Route::delete('/destroy/{id}', 'NotaController@destroy')->name('notas.destroy');
Route::get('/home', 'HomeController@index')->name('home');
