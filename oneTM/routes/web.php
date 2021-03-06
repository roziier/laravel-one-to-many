<?php

use Illuminate\Support\Facades\Route;

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

// Employee
Route::get('/empindex', 'EmployeeController@empIndex') -> name('emp-index'); 
Route::get('/empshow/{id}', 'EmployeeController@empShow') -> name('emp-show'); 
// Tasks
Route::get('/taskindex', 'TaskController@taskIndex') -> name('task-index'); 
Route::get('/taskshow/{id}', 'TaskController@taskShow') -> name('task-show');
Route::get('/taskcreateform', 'TaskController@taskCreate') -> name('task-create-form');
Route::post('/taskstore', 'TaskController@taskStore') -> name('task-store');
Route::get('/taskedit/{id}', 'TaskController@taskEdit') -> name('task-edit');
Route::post('/taskupdate/{id}', 'TaskController@taskUpdate') -> name('task-update');


// Typ
Route::get('/typindex', 'TypologyController@typIndex') -> name('typ-index'); 
Route::get('/typshow/{id}', 'TypologyController@typShow') -> name('typ-show');
Route::get('/typcreateform', 'TypologyController@typCreate') -> name('typ-create-form');
Route::post('/typstore', 'TypologyController@typStore') -> name('typ-store');
Route::get('/typedit/{id}', 'TypologyController@typEdit') -> name('typ-edit');
Route::post('/typupdate/{id}', 'TypologyController@typUpdate') -> name('typ-update');
