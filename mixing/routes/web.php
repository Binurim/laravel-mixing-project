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

Route::get('/investment', 'Investment@index')->name('investment');

Route::get('/add-investment', 'Investment@create')->name('add_investment');


//Route::get('/fixed-deposit', 'FixedDeposit@index')->name('fixed-deposit');

