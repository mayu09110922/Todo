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

Route::get('/', 'App\Http\Controllers\TodoController@index');
Route::get('/todos/create', 'App\Http\Controllers\TodoController@create');
Route::get('/todos/{todo}', 'App\Http\Controllers\TodoController@show');
Route::post('/todos', 'App\Http\Controllers\TodoController@store');

Route::get('/', 'App\Http\Controllers\HaveController@index');
Route::get('/haves/create', 'App\Http\Controllers\HaveController@create');
Route::get('/haves/{have}', 'App\Http\Controllers\HaveController@show');
Route::post('/haves', 'App\Http\Controllers\HaveController@store');

Route::get('/', 'App\Http\Controllers\MoneyController@index');
Route::get('/moneys/create', 'App\Http\Controllers\MoneyController@create');
Route::get('/moneys/{money}', 'App\Http\Controllers\MoneyController@show');
Route::post('/moneys', 'App\Http\Controllers\MoneyController@store');