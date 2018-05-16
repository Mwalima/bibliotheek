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
//set login priviledges on view boeken toevoegen
Route::get('/boektoevoegen','BoekController@getBoekToevoegen')->middleware('auth');

Route::post('/boektoevoegen', ['as' => 'insertboek.store', 'uses' => 'BoekController@insertBoeken']);

Route::get('/boekoverzicht', 'BoekController@getBoeken')->middleware('auth');

Route::get('login', array('uses' => 'UserController@showLogin'));

Route::get('logout', array('uses' => 'UserController@doLogout'));

Auth::routes();

Route::get('/home', 'HomeController@index')->name('boektoevoegen');

//API part
Route::get('boeken_cms', 'BoekController@index');
Route::get('boeken_cms/{boek}', 'BoekController@show');
Route::post('boeken_cms', 'BoekController@store');
Route::put('boeken_cms/{boek}', ['as'=>'boeken_cms.update','uses'=>'BoekController@update']);
Route::delete('boeken_cms/{boek}', ['as'=>'boeken_cms.delete','uses'=>'BoekController@delete']);