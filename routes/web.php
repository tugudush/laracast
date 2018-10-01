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

Route::get('/', 'PageController@index')->name('index');

Route::get('/tasks', 'TaskController@list')->name('tasks');
Route::get('/task/{task}', 'TaskController@view')->where(['task' => '[0-9]+']);
Route::get('/task/add', 'TaskController@add')->name('add-task');

Route::get('/posts', 'PostController@list')->name('posts');
Route::get('/post/{post}', 'PostController@view')->where(['post' => '[0-9]+']);
Route::get('/post/add', 'PostController@add')->name('add-post');
Route::post('/post/submit', 'PostController@submit');