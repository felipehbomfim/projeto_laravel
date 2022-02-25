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
    return view('welcome');
});

Route::get('/projeto_inicial', 'App\Http\Controllers\SeriesController@index')
    ->name('listar_series');
Route::get('/projeto_inicial/criar', 'App\Http\Controllers\SeriesController@create')
    ->name('form_criar_serie');
Route::post('/projeto_inicial/criar', 'App\Http\Controllers\SeriesController@store');
Route::post('/projeto_inicial/remover/{id}', 'App\Http\Controllers\SeriesController@destroy');
