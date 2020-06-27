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

Route::get('/games', 'FrontController@list')->name('games.list');
Route::get('/', 'FrontController@main')->name('main');
Route::get('/admin', 'AdminController@index')->name('admin.list');
Route::get('/admin/game/save/{id}', 'GameController@save')->name('game.save');
Route::get('/admin/game/edit/{id}', 'GameController@edit')->name('game.edit');
Route::get('/admin/game/create', 'GameController@create')->name('game.create');
Route::get('/admin/game/delete/{id}', 'GameController@create')->name('game.delete');
//Route::get('categories/edit/{category}', 'AdminController@categoryEdit')->name('categories.edit');
//Route::post('categories/save/{id}', 'AdminController@categorySave')->name('categories.save');