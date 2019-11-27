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
Route::get('/formulario', 'CiudadController@formulario')->name('form');
Route::POST('/guardar-ciudad', 'CiudadController@guardar_ciudad')->name('guardar-ciudad');
route::get('/reporte','CiudadController@reporte')->name('reporte');
