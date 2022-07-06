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

Route::get('/','App\Http\Controllers\DashboardController@index')->name('home');

Auth::routes();
Route::get('logout','App\Http\Controllers\Auth\LoginController@logout');

Route::resource('product','App\Http\Controllers\ProductController');
Route::resource('transactions','\App\Http\Controllers\TransactionController');

Route::get('rejected/{id}', 'App\Http\Controllers\DashboardController@rejected')->name('rejected');
Route::get('approved/{id}', 'App\Http\Controllers\DashboardController@approved')->name('approved');