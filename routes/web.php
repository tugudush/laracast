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

Route::get('/tasks', 'PageController@tasks');
//Route::get('/task/{id}', 'PageController@task');
Route::get('/task/{task}', 'PageController@task');