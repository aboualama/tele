<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
		
 
Route::get('/telefono' , 'TeleController@index'); 	 
Route::post('/telefono' , 'TeleController@store'); 	
Route::get('/telefono/{id}' , 'TeleController@show'); 	
Route::put('/telefono/update/{id}' , 'TeleController@update'); 	
Route::delete('/telefono/{id}' , 'TeleController@destroy'); 		

Route::post('/marca' , 'TeleController@marcastore'); 