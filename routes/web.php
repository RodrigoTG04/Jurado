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
Route::get('/', 'ParticipanteController@index')->name('listado');

Route::get('captura/{id}', 'ParticipanteController@create')->name('captura.jurado');

Route::post('guardar', 'ComentarioJuradoController@store')->name('guardar');
