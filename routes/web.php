<?php

use Illuminate\Support\Facades\Route;

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


// MAIN ROUTES
Route::get('/', 'HomePageController@index');

Route::get('/characters', 'CharactersController@index');

Route::get('/stories', 'StoriesController@index');

Route::get('/games', 'GamesController@index');

Route::get('/movies', 'MoviesController@index');

Route::get('/shows', 'ShowsController@index');

Route::get('/news', 'NewsController@index');

Route::get('/shop', 'ShopController@index');




// RESOURCES
Route::resource('comics', 'ComicController');
