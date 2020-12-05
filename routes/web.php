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

Route::get('/','Home\IndexController@index')->name('index');


Route::get('/about','About\AboutController@index')->name('about');
Route::get('/blog','Blog\BlogController@index')->name('blog');
Route::get('/contact','Contact\ContactController@index')->name('contact');
