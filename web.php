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
    return view('formulario');
});

Route::get('/formulario', function () {
    return view('formulario');
});

Route::get('/exclusivo', function () {
    return view('exclusivo');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->middleware('auth');

Route::get('/formulario', 'FormularioController@index');
Route::get('/create', 'FormularioController@create');
Route::post('/formulario', 'FormularioController@store');

Route::get('/exclusivo', 'ExclusivoController@index');
Route::get('/create', 'ExclusivoController@create');
Route::post('/exclusivo', 'ExclusivoController@store');