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
// ------------ Frontend ----------------

// Landing Page

Route::get('/','HomeController@index');
Route::get('/detail/{id}','HomeController@detail');
Route::get('/daftar/{id}','HomeController@daftar');
Route::get('/register/{id}','HomeController@register');
Route::get('/success/{id}','HomeController@success');

// -------------- Backend ------------------

// Auth
Route::get('/auth','AuthController@login');
Route::get('/auth/register','AuthController@register');
Route::get('/auth/confirmRegister','AuthController@confirmRegister');
Route::get('/admin','AuthController@index');

// SuperAdmin
Route::get('/admin/confirm','SuperAdminController@confirm');
Route::get('/admin/block','SuperAdminController@block');

// Admin
Route::get('/admin/reg','AdminController@register');
Route::get('/admin/pendaftaran','AdminController@daftar');
Route::get('/admin/test','AdminController@test');
