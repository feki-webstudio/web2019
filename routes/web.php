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

Route::get('/', 'BlogPostController@index');
Route::get('/ujblog', 'BlogPostController@create')->name('blog.create');
Route::post('/ujblogmentes', 'BlogPostController@store');

Route::get('/blog/{blogId}', 'BlogPostController@show')->name('blog.show');
