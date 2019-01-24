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
    return redirect('/login');
});

Route::post('/task', 'TaskController@createTask');
Route::delete('/task/{id}', 'TaskController@deleteTask')->name('delete');
Route::get('/tasks', 'TaskController@allTasks');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
