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

Route::get('/', 'App\Http\Controllers\TodoController@menu');
Route::get('/todos', 'App\Http\Controllers\TodoController@index');
Route::get('/todos/create', 'App\Http\Controllers\TodoController@create');
Route::post('/todos', 'App\Http\Controllers\TodoController@store');
Route::get('/todos/{todo}', 'App\Http\Controllers\TodoController@show');
Route::get('/todos/{todo}/edit', 'App\Http\Controllers\TodoController@edit');
Route::put('/todos/{todo}', 'App\Http\Controllers\TodoController@update');
Route::delete('/todos/{todo}', 'App\Http\Controllers\TodoController@destroy');
Route::get('/google/events','App\Http\Controllers\TodoController@google_calendar');

Route::get('/haves', 'App\Http\Controllers\HaveController@index');
Route::get('/haves/create', 'App\Http\Controllers\HaveController@create');
Route::get('/haves/{have}', 'App\Http\Controllers\HaveController@show');
Route::post('/haves', 'App\Http\Controllers\HaveController@store');
Route::get('/haves/{have}/edit', 'App\Http\Controllers\HaveController@edit');
Route::put('/haves/{have}', 'App\Http\Controllers\HaveController@update');
Route::delete('/haves/{have}', 'App\Http\Controllers\HaveController@destroy');

Route::get('/moneys', 'App\Http\Controllers\MoneyController@index');
Route::get('/moneys/create', 'App\Http\Controllers\MoneyController@create');
Route::post('/moneys', 'App\Http\Controllers\MoneyController@store');
Route::get('/moneys/{money}', 'App\Http\Controllers\MoneyController@show');
Route::get('/moneys/{money}/edit', 'App\Http\Controllers\MoneyController@edit');
Route::put('/moneys/{money}', 'App\Http\Controllers\MoneyController@update');
Route::delete('/moneys/{money}', 'App\Http\Controllers\MoneyController@destroy');