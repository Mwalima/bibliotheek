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
    return view('index');
});

Route::get('/boektoevoegen', function () {
    return view('boektoevoegen');
});
Route::post('/boektoevoegen', ['as' => 'insertboek.store', 'uses' => 'BoekController@insertBoeken'])->middleware('auth');

Route::get('/boekoverzicht', 'BoekController@getBoeken')->middleware('auth');

Route::get('login', array('uses' => 'UserController@showLogin'));

Route::get('logout', array('uses' => 'UserController@doLogout'));

Auth::routes();

Route::get('/home', 'HomeController@index')->name('boektoevoegen');