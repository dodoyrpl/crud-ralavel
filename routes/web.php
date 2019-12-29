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

Route::get('/employe','EmployeController@index'); 
Route::post('/employe/create','EmployeController@create');
Route::get('/employe/{id}','EmployeController@edit');
Route::get('/employe/{id}','EmployeController@delete');  
