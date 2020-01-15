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

Route::get('tableview','TableViewController@tablet');

Route::get('tableview/create','TableViewController@create');

Route::get('tableview/store','TableViewController@store');


Route::get('tableview/edit/{id}','TableViewController@edit');

Route::get('tableview/update/{id}','TableViewController@update');

Route::get('tableview/delete/{id}','TableViewController@destroy');





