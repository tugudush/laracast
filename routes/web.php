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

Route::get('/', 'PageController@index');

Route::get('/tasks', 'TaskController@list');
Route::get('/task/{task}', 'TaskController@view')->where(['task' => '[0-9]+']);
Route::get('/task/add', 'TaskController@add');

Route::get('/posts', 'PostController@list');
Route::get('/post/{post}', 'PostController@view')->where(['post' => '[0-9]+']);
Route::get('/post/add', 'PostController@add');