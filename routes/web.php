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

// Landing Page

Route::get('/','HomeController@index');
Route::get('/detail/{id}','HomeController@detail');
Route::get('/daftar/{id}','HomeController@daftar');
Route::get('/register/{id}','HomeController@register');
Route::get('/success/{id}','HomeController@success');

// -------------- Backend ------------------

