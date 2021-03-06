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



Auth::routes();

Route::post('follow/{user}','FollowsController@store');

Route::get('/', 'PostsController@index');
// Route::get('/', 'HomeController@index');

Route::get('/p', 'PostsController@index');
Route::get('/p/create', 'PostsController@create'); 
Route::get('/p/{post}', 'PostsController@show');
Route::post('/p', 'PostsController@store'); 


Route::get('/profile/{user}', 'profilesController@index')->name('profile.show');

Route::get('/profile/{user}/edit', 'profilesController@edit')->name('profile.edit');

Route::patch('/profile/{user}', 'profilesController@update')->name('profile.update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
