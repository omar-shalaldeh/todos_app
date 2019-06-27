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

Route::get('/',function (){

    return view('welcome');
});
Route::get('/todos','TodosController@index')->name('tod');
Route::get('/todo/{todo}','TodosController@show')->name('todo');
Route::get('/cre-todo','TodosController@create')->name('cre-todo');
Route::post('/todo/store','TodosController@store');
Route::get('/todo/{todo}/edit','TodosController@edit')->name('ed-todo');
Route::post('/todo/{todo}/update','TodosController@update');
Route::get('/todo/{todo}/delete','TodosController@destroy')->name('del-todo');
Route::post('/todo/{todo}/uptrue','TodosController@uptrue');
