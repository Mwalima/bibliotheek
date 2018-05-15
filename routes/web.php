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

Route::get('/boektoevoegen',function(){
    return view('boektoevoegen');
});
Route::post('/boektoevoegen',['as'=>'insertboek.store', 'uses'=>'BoekController@insertBoeken']);



Route::get('/boekoverzicht','BoekController@getBoeken');


// route to show the login form
Route::get('login', array('uses' => 'UserController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'UserController@doLogin'));;

Route::get('logout', array('uses' => 'UserController@doLogout'));

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('boektoevoegen');