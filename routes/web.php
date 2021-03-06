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
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/jobs-profile', function () {
    return view('job');
})->name('job.profile');

Route::get('/ebooks', function () {
    return view('books');
})->name('books');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
