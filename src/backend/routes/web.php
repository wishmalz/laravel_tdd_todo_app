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
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/projects', 'ProjectsController@index')->name('projects');
    Route::get('/projects/create', 'ProjectsController@create')->name('projects.create');
    Route::get('/projects/{project}', 'ProjectsController@show');
    Route::patch('/projects/{project}', 'ProjectsController@update');
    Route::post('/projects', 'ProjectsController@store')->name('projects.store');

    Route::post('/projects/{project}/tasks', 'ProjectTasksController@store')->name('tasks.store');
    Route::patch('/projects/{project}/tasks/{task}', 'ProjectTasksController@update')->name('tasks.update');

    Route::get('/home', 'HomeController@index')->name('home');
});

Auth::routes();
