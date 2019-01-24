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
    return redirect('/tasks');
});

Route::post('/task', 'TaskController@createTask');
Route::post('/task/{id}', 'TaskController@deleteTask')->name('delete');
Route::get('/tasks', 'TaskController@allTasks');

