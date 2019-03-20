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

Route::get('/', 'WelcomeController@index')->name('Welcome');

Route::get('articles', 'WelcomeController@articles')->name('articles');
Route::get('categories', 'WelcomeController@categories')->name('categories');

Route::resource('articles', 'ArticlesController');
Route::resource('article', 'ArticlesController');

Route::resource('categories', 'CategoriesController');
Route::resource('category', 'CategoriesController');
