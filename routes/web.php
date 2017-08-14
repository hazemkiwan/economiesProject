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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/articles/{id}','ArticlesController@show');
Route::get('/articles', 'ArticlesController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('users/{user_id}/articles/{article_id}/comment', 'CommentController@store');