<?php

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

Route::middleware('auth')
    ->group(function () {
        Route::get('sell', 'SellController@showSellForm')->name('sell');
    });

Route::prefix('mypage')
    ->namespace('Mypage')
    ->middleware('auth')
    ->group(function() {
        Route::get('edit-profile', 'ProfileController@showEditProfileForm')->name('edit-profile');
        Route::post('edit-profile', 'ProfileController@editProfile')->name('edit-profile');
    });
