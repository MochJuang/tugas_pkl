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
Route::get('auth/success/','AuthController@success')->middleware('login');
Route::get('/auth','AuthController@login');
Route::get('/auth/register','AuthController@register');
Route::post('/auth/actRegister','AuthController@actRegister')->middleware('login');
Route::post('/auth/actLogin','AuthController@actLogin');
Route::post('/auth/actRegisterTempat','AuthController@actRegisterTempat')->middleware('login');
Route::get('/auth/registerTempat','AuthController@registerTempat')->middleware('login');
Route::get('/admin','AuthController@index')->middleware('login');
Route::get('/logout','AuthController@logout')->middleware('login');

// SuperAdmin
Route::get('/admin/confirm','SuperAdminController@confirm')->middleware('login');
Route::get('/admin/block','SuperAdminController@block')->middleware('login');
Route::put('/admin/confirmAct','SuperAdminController@confirmAct')->middleware('login');
Route::put('/admin/blockAct','SuperAdminController@blockAct')->middleware('login');
Route::put('/admin/activeAct','SuperAdminController@activeAct')->middleware('login');

// Admin
Route::get('/admin/reg','AdminController@register');
Route::get('/admin/pendaftaran','AdminController@daftar');
Route::get('/admin/test','AdminController@test');
