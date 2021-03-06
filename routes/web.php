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

// Auth::routes(['register' => false]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('users', 'UserController');

Route::resource('areas', 'AreaController');

Route::resource('givers', 'GiverController');

Route::resource('seekers', 'SeekerController');



/*********************** practice route*******************/
Route::get('home-view','DesignController@index');
Route::get('add-single-worker','DesignController@addSingleWorker');
Route::get('add-seeker','DesignController@addSeeker');
