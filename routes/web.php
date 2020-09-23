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
Route::get('/cari','HomeController@cari');
Route::get('/addClick/{id}','HomeController@addClick');
Route::get('/daftar/{id}','HomeController@daftar');
Route::get('/register/{id}','HomeController@register');
Route::post('/success/{id}','HomeController@success');
Route::post('/daftarAct/{id}','HomeController@daftarAct');
Route::post('/changeRegister/{id}','HomeController@changeRegister');

// -------------- Backend ------------------

// Auth
Route::get('auth/success/','AuthController@success')->middleware('login');
Route::get('/auth','AuthController@login');
Route::get('/auth/register','AuthController@register');
Route::post('/auth/actRegister','AuthController@actRegister');
Route::post('/auth/actLogin','AuthController@actLogin');
Route::post('/auth/actRegisterTempat','AuthController@actRegisterTempat')->middleware('login');
Route::post('/auth/actJenis','AuthController@actJenis')->middleware('login');
Route::get('/auth/registerTempat','AuthController@registerTempat')->middleware('login');
Route::get('/admin','AuthController@index')->middleware('login');
Route::get('/auth/jenisRegister','AuthController@jenisRegister')->middleware('login');
Route::get('/logout','AuthController@logout')->middleware('login');

// SuperAdmin
Route::get('/admin/confirm','SuperAdminController@confirm')->middleware('login');
Route::get('/admin/block','SuperAdminController@block')->middleware('login');
Route::put('/admin/confirmAct','SuperAdminController@confirmAct')->middleware('login');
Route::put('/admin/blockAct','SuperAdminController@blockAct')->middleware('login');
Route::put('/admin/activeAct','SuperAdminController@activeAct')->middleware('login');

// Admin
Route::post('/admin/changeFoto/{id}','AdminController@changeFoto');
Route::get('/admin/profile','AdminController@profile')->middleware('login');
Route::get('/admin/reg','AdminController@register')->middleware('login');
Route::get('/admin/pendaftaran','AdminController@daftar')->middleware('login');
Route::get('/admin/test','AdminController@test')->middleware('login');
Route::get('/admin/changeUtama','AdminController@changeUtama')->middleware('login');
Route::put('/admin/actChangeUtama','AdminController@actChangeUtama')->middleware('login');
Route::put('/admin/changeUser','AdminController@changeUser')->middleware('login');
Route::get('/admin/changeDeskripsi','AdminController@changeDeskripsi')->middleware('login');
Route::put('/admin/actChangeDeskripsi','AdminController@actChangeDeskripsi')->middleware('login');
Route::put('/admin/editJenis','AdminController@editJenis')->middleware('login');
