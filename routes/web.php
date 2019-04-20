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
| Author by : Edric Laksa Putra
| Email     : edricstephanus@gmail.com
| December 2018
*/

Route::get('/', 'HomeController@index')->name('home');