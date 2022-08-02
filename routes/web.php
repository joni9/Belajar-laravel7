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

Route::get('/', 'HomeController@home')->name('home');
Route::get('/aboutme', 'HomeController@aboutme')->name('aboutme'); // di link a hernya diisi {{route('aboutme)}}
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/product', 'HomeController@product')->name('product');