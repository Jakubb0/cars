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

//User

Route::post('/register', 'UserController@register')->name('register');
Route::post('/login', 'UserController@login')->name('login');
Route::view('/mainpage', 'mainpage');

//Car
Route::resource('cars', 'CarController')->middleware('web'); // anything that uses Auth must be in 'web' middleware


