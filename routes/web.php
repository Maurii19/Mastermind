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

Route::get('/', 'MastermindController@getIndex');
Route::post('/mastermind', 'MastermindController@postDatos');
Route::post('/mastermind_comprobar', 'MastermindController@postGame');
