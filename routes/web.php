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
})->name('welcome');


Auth::routes();

//User

Route::post('/register', 'UserController@register')->name('register');
Route::post('/login', 'UserController@login')->name('login');
Route::get('/logout', 'UserController@logout')->name('logout');

Route::get('/test/{carid}', 'PhotoController@gallery')->name('gallery');

//Car
Route::resource('cars', 'CarController')->middleware('web'); // anything that uses Auth must be in 'web' middleware
Route::get('/mycars', 'CarController@mycars')->name('mycars');

//Bid
Route::post('/bid/{carid}', 'BidController@bid')->name('bid');

