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

Auth::routes(); /* Rutas de registro y login  */

Route::group(['middleware' => 'my_auth'], function() {

    Route::get('/home', 'HomeController@index')->name('home');
    // Colocar las demas rutas que necesitan auth
    Route::get('/categories', 'CategoryController@index');
    Route::post('/category/store', 'CategoryController@store');
    Route::post('/category/update', 'CategoryController@update');
    Route::post('/category/destroy', 'CategoryController@destroy');
    Route::get('/category/enabled', 'CategoryController@enabled');
    Route::post('/category/abled', 'CategoryController@abled');

});


