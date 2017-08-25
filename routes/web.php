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

    $name = 'Home Page';
    $tasks = [
        'Learn Laravel',
        'Get better at php',
        'build web apps'
    ];

    return view('welcome', compact('tasks', 'name'));
});

Route::get('/about', function () {
    return view('about');
});
