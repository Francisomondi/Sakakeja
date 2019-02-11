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

Route::get('/','apartmentsController@index');
Route::get('/about','pagesController@about');
Route::get('/estates','pagesController@estates');
Route::get('/testimony','pagesController@testimony');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');  
Route::get('/apartments/create', 'apartmentsController@create');
Route::get('/apartments/show/{apartment_id?}', 'apartmentsController@show');
Route::get('/houses/create/{apartment_id?}', 'housesController@create');
Route::get('/rooms/create/{house_id?}', 'roomsController@create');
Route::get('/houses/show/{id}', 'housesController@show');
Route::get('/rooms/show/{id}', 'roomsController@show');
Route::delete('/houses//{id}', 'housesController@destroy');
Route::resource('apartments','apartmentsController');
Route::resource('rooms','roomsController');
Route::resource('comments','commentsController');
Route::resource('houses','housesController');
Route::resource('roles','rolesController');
Route::resource('properties','propertyController');
Route::resource('users','usersController');
Auth::routes();

