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

Route::get('/', 'HomeController@home')->name('home');

Route::get('/movies', 'HomeController@movies')->name('movies');


Route::get('/naves/{id}', 'HomeController@naves')->name('naves');


Route::get('/info/starships/{id}', 'HomeController@info')->name('info');

Route::post('/guardar_nave', 'HomeController@guardar_nave')->name('guardar_nave');

Route::get('/registros_data', 'HomeController@registros_data')->name('registros_data');

Route::get('/registros', 'HomeController@registros')->name('registros');

Route::get('/informacion_registro/{id}', 'HomeController@informacion_registro')->name('informacion_registro');

Route::get('/detalles_registro/{id}', 'HomeController@detalles_registro')->name('detalles_registro');

Route::get('/datos_json', 'HomeController@datos_json')->name('datos_json');
