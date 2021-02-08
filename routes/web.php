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
    return view('master');
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

Route::get('/searchdata', 'FdplanController@searchdata');
Route::resource('fdplan', 'FdplanController');

Route::get('/search', 'PageController@search');
/*Route::get('/search', 'SearchController@store');
Route::get('/search', 'SearchController@index');*/
Route::resource('search', 'SearchController');

//Route::resource('result', 'SearchController');
Route::get('/result', 'PageController@result');
Route::resource('result', 'ResultController');

Route::get('/page/nlist', 'PageController@nlist');