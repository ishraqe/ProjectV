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

Route::get('/cms/dash', 'CmsController@index');
Route::get('/cms/post', 'PostController@index');
Route::get('/cms/album', 'AlbumController@index');


Route::post('/cms/post/save', 'PostController@store');
Route::post('/cms/album/save', 'AlbumController@store');

Route::get('/cms/posts/list/{id}', 'PostController@show');

Route::get('/cms/posts/del/{id}', 'PostController@destroy');
Route::get('/cms/albuns/del/{id}', 'AlbumController@destroy');
Route::get('/cms/photo/del/{id}', 'PhotoController@destroy');

Route::get('/cms/posts/edit/{id}', 'PostController@edit');

Route::get('/cms/photo/{id}', 'PhotoController@show');
Route::post('/cms/photo/save/{id}', 'PhotoController@store');