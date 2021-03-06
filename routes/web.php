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

//Start again :(

Route::get('/tasks', 'TasksController@index')->name('task.index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::post('/tasks', 'TasksController@store')->name('task.store');

Route::delete('/tasks', 'TasksController@update')->name('task.update');