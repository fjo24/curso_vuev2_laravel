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
use App\User;

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('tasks', 'TaskController', ['except' => 'show', 'edit', 'create']);


Route::get('/listas', function () {
    return view('listas');
});

Route::get('/webpack', function () {
    return view('/webpack/webpacktest');
});

Route::get('users', function () {
    $users = User::get();
    return $users;
    //return ['Francisco', 'Jose', 'Rosa', 'Maria'];
});
