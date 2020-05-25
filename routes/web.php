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

Route::get('/', 'OriginalController@index');
Route::get('/about-us', 'OriginalController@about_us');
Route::get('/coming-soon', 'OriginalController@coming_soon');
Route::get('/contact', 'OriginalController@contact');
Route::get('/single-post', 'OriginalController@single_post');

Route::get('/usuario/{nombre}/{edad}', 'OriginalController@usuario')
->where(['nombre' => '[a-z]+', 'edad' => '[0-9]+']);

Route::resource('/wel', 'UserController');

Route::resource('/clientes', 'ClientController');
Route::resource('/autos', 'CarController');
Route::resource('/revisiones', 'ReviewController');




