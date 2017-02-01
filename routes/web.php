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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/aboutUs', function () {
    return view('pages.aboutUs');
});
Route::get('/media', function () {
    return view('pages.media');
});
Route::get('/news', function () {
    return view('pages.news');
});
Route::get('/photos', function () {
    return view('pages.photos');
});
Route::get('/shows', function () {
    return view('pages.shows');
});
Route::get('/subscribe', function () {
    return view('pages.subscribe');
});
