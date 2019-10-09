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


Route::get('/','pagecontroller@index');
Route::get('/about','pagecontroller@about');
Route::get('/posts','postcontroller@update');
Route::get('/postss','postcontroller@create');
Route::post('/posts/{id}','postcontroller@update');
Route::post('/delet/{id}','postcontroller@destroy');
Route::get('/delet/{id}','postcontroller@destroy');
Route::get('/contact', 'pagecontroller@Contact');
Route::post('/contact', 'postcontroller@cont');
Route::resource('/post', 'postcontroller');
Auth::routes();
Route::get('/Dashboard', 'HomeController@index')->name('home');

