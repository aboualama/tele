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

//Route::post('login', 'Auth\AuthController@login');
//Route::get('login' , 'Auth\AuthController@showLoginForm');
use Illuminate\Support\Facades\Storage;

Route::get('/', 'FrontController@index');
Route::post('/valuta', 'FrontController@valuta')->name('valuta');
Route::get('/getGP/{id}', 'FrontController@getGb')->name('getGb');
Route::get('/file', function () {
    /*dd( collect(Storage::files('public/qqqqqqqqqqqqqqqqqqqq'))->map(function($file) {
         return Storage::url($file);
     }));*/
    echo asset(Storage::url('/storage/qqqqqqqqqqqqqqqqqqqq/lxReh4I6jXnfASlZjPrB8bernhOPzgVke5oP6MY1.jpeg'));

    echo(Storage::download('public/qqqqqqqqqqqqqqqqqqqq'));
    dd(Storage::disk('public')->exists('qqqqqqqqqqqqqqqqqqqq'));
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('', 'MarcaController@index');
    Route::get('login', 'Auth\AuthController@login');
    Route::view('dashboard', 'dashboard');
    Route::view('examples/plugin', 'examples.plugin');
    Route::view('examples/blank', 'examples.blank');

    Route::resource('telefono', 'TeleController');

    Route::resource('marca', 'MarcaController');
    Route::resource('modello', 'ModelloController');

    Route::post('getmodello', 'TeleController@getmodello');
    Route::post('getmodellogb', 'TeleController@getmodellogb');

    Route::get('search', 'TeleController@search');
    Route::post('searchtelefono', 'TeleController@telefono');
});
Auth::routes();
