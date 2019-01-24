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

// Example Routes
Route::resource('/', 'FrontController');
Route::view('/dashboard', 'dashboard');
Route::view('/examples/plugin', 'examples.plugin');
Route::view('/examples/blank', 'examples.blank');
 
 

Route::resource('/telefono', 'TeleController');

Route::resource('/marca', 'MarcaController');
Route::resource('/modello', 'ModelloController');



Route::post('/getmodello', 'TeleController@getmodello');
Route::post('/getmodellogb', 'TeleController@getmodellogb');


Route::get('/search', 'TeleController@search');
Route::post('/searchtelefono', 'TeleController@telefono'); 
