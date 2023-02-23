<?php

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

// Mostrar la vista index, o vista inicial
Route::get('/', 'IndexController@index')->name('listado');

Route::post('guardar', 'IndexController@guardar')->name('guardar');

Route::get('captura', 'IndexController@create')->name('captura.jurado');