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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('/aplicacao', 'App\Http\Controllers\AplicacaoController');

Route::resource('/local', 'App\Http\Controllers\LocalController');

Route::resource('/pessoa', 'App\Http\Controllers\PessoaController');

Route::resource('/vacina', 'App\Http\Controllers\VacinaController');