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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register', 'RegisterController@index')->middleware('auth');
Route::resource('administrator', 'AdministratorController')->middleware('auth');
Route::resource('contact', 'ContactController')->middleware('auth');
Route::resource('insplan', 'InsplanController')->middleware('auth');
Route::resource('news', 'NewsController')->middleware('auth');
Route::resource('calinsure', 'CalinsureController');
Route::resource('conditionform', 'ConditionformController');