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

//ANOTHER WAY

Route::get('view','AnotherwayTable@views');

Route::get('view/create','AnotherwayTable@create');

Route::get('view/store','AnotherwayTable@store');

// another update & delete

Route::get('view/update/{id}','AnotherwayTable@update');

Route::get('view/edit/{id}','AnotherwayTable@edit');

Route::get('view/delete/{id}','AnotherwayTable@delete');
//FRUITS CRUD

Route::get('fruitspage','FruitsController@face');

Route::get('fruitspage/create','FruitsController@create');

Route::post('fruitspage/store','FruitsController@store');

Route::get('fruitspage/edit/{id}','FruitsController@edit');

Route::put('fruitspage/edited/{id}','FruitsController@edited');

Route::delete('fruitspage/delete/{id}','FruitsController@delete');







