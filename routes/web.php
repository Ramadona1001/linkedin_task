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


//Route::get('/linkedin/callback','LinkedController@callback');

Route::get('login/{provider}', 'LinkedController@redirectToProvider');
Route::get('{provider}/callback', 'LinkedController@handleProviderCallback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
