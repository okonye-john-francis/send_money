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

Route::get('/page_1', function () {
    return view('send_money');
})->name("send_money");

Route::get('/page_2', function () {
    return view('send_money_page2');
})->name("page_2");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
