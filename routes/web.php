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
    return view('new_customer_page1');
});

Route::get('/page_1', function () {
    return view('new_customer_page1');
})->name("new_customer_page1");


Route::get('/table', function () {
    return view('layouts.new_page');
})->name("new_page");


Route::get('/returning_customer', function () {
    return view('old_customer_page1');
})->name("returning_customer");


Route::get('/page_2', function () {
    return view('send_money_page2');
})->name("page_2");

Route::get('/page_3', function () {
    return view('send_money_page3');
})->name("page_3");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
