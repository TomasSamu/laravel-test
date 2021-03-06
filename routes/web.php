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

Route::get('/', 'IndexController@homepage');
Route::get('/movies', 'IndexController@movies');
Route::get('/movies/detail/venom', 'MovieController@detail');
Route::get('/continents/countries', 'ContinentController@europe');
Route::get('/countries/largest', 'CountryController@largest');
Route::get('/countries/czechia', 'CountryController@detail');

/* Route::get('/', 'IndexController@movies'); */