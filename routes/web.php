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

Route::POST('insert/news', 'JobController@learnJob')->name('insertNews');
Route::get('/insertnews/view', function () {
    return view('job', ['name' => 'insertView']);
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/allusers', 'UsersController@index')->name('getAllusers');
    Route::resource('test', 'TestController');
});