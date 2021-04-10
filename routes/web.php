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

Route::get('/', 'IndexController@index')->name('index');

Route::get('/filmler/sayfa/{pageId}', 'MoviesController@index')->name('filmler');
Route::get('/film/{pageId}', 'MoviesController@show')->name('filmler.show');
Route::get('/film/populer/sayfa/{pageId}', 'MoviesController@popular')->name('filmler.popular');

Route::get('/diziler/sayfa/{pageId}', 'TVShowsController@index')->name('diziler');
Route::get('/dizi/{pageId}', 'TVShowsController@show')->name('diziler.show');
Route::get('/dizi/populer/sayfa/{pageId}', 'TVShowsController@popular')->name('diziler.popular');

Route::get('/kisi/{pageId}', 'PeopleController@show')->name('kisiler.show');