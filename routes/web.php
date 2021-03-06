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

//home
Route::get('/', 'NavController@index');

//albums
Route::get('/albums', 'NavController@albums');

//photos
Route::get('photos/{id}', 'NavController@photos');

//videos
Route::get('videos', 'NavController@videos');

//releases
Route::get('releases', 'NavController@releases');

//game
Route::get('game', 'NavController@game');

//contact
Route::get('/contact', 'NavController@contact');
Route::post('/contact', 'NavController@post_contact');

