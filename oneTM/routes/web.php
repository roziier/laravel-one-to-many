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
// Typ
Route::get('/typindex', 'TypologyController@typIndex') -> name('typ-index'); 
Route::get('/typshow/{id}', 'TypologyController@typShow') -> name('typ-show'); 
