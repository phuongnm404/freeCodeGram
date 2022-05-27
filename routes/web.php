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

Route::get('/', 'PostsController@index');

Auth::routes();
Route::post('/follow/{user}', 'FollowsController@store');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/p/create', 'PostsController@create');

Route::post('/p', 'PostsController@store');

Route::get('/p/{post}', 'PostsController@show');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profiles.show');

Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profiles.edit');

Route::patch('/profile/{user}', 'ProfilesController@update')->name('profiles.update');
