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
    $categories = \App\Category::all();
    $cant = count($categories)/3;
    return view('welcome')->with(compact('categories', 'cant'));
});

Auth::routes(); /* Rutas de registro y login  */

Route::get('/auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');

Route::get('/auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

Route::group(['middleware' => 'my_auth', 'auth'], function() {

    Route::get('/home', 'HomeController@index')->name('home');
    // Colocar las demas rutas que necesitan auth
    Route::get('/categories', 'CategoryController@index');
    Route::post('/category/store', 'CategoryController@store');
    Route::post('/category/update', 'CategoryController@update');
    Route::post('/category/destroy', 'CategoryController@destroy');
    Route::get('/category/enabled', 'CategoryController@enabled');
    Route::post('/category/abled', 'CategoryController@abled');

    Route::get('/users', 'UserController@index');
    Route::post('/user/store', 'UserController@store');

    Route::get('/films', 'FilmController@index');
    Route::get('/film/create', 'FilmController@create');
    Route::post('/film/store', 'FilmController@store');
    // TODO: Forma como enviamos parametros en las urls
    Route::get('/film/edit/{id}', 'FilmController@edit');
    
    Route::post('/film/update', 'FilmController@update');
    Route::post('/film/destroy', 'FilmController@destroy');
    Route::get('/film/enabled', 'FilmController@enabled');
    Route::post('/film/abled', 'FilmController@abled');

    Route::get('/rental/addFilm/{filmId}', 'RentalController@addFilm');
    Route::get('/rental/confirmation/{filmId}', 'RentalController@confirmationFilm');

    Route::get('/rentals', 'RentalController@index');
    Route::get('/rental/confirmationrental/{rentalId}', 'RentalController@confirmation');


});
Route::get('/category/show/{id}', 'CategoryController@show');
Route::get('/film/show/{id}', 'FilmController@show');

// Test Route
Route::get('/pdf', 'PDFController@get_pdf');
Route::get('/excel', 'PDFController@get_excel');

// Error Handler
Route::get('/404', 'ErrorHandlerController@errorCode404')->name('404');
Route::get('405', ['as'=>'405', 'uses'=>'ErrorHandlerController@errorCode405']);

/*
 * Si usamos ->name('nombre') entonces en el blade usar route(nombre)
 * Si usamos el la url pura entonces en el blade usar url(url)
 * */






