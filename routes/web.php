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
Route::get('/', 'HomePageController@index')->name('homepage');

Route::get('/characters', 'CharactersController@index')->name('characters');

Route::get('/stories', 'StoriesController@index')->name('stories');

Route::get('/games', 'GamesController@index')->name('games');

Route::get('/movies', 'MoviesController@index')->name('movies');

Route::get('/shows', 'ShowsController@index')->name('shows');

Route::get('/news', 'NewsController@index')->name('news');

Route::get('/shop', 'ShopController@index')->name('shop');




// RESOURCES
Route::resource('comics', 'ComicController');
