<?php


// Route::get('/', function () {
//     return view('welcome');
// });

////////////Pages Route////////////
Route::get('/', 'PagesController@index')->name('pages.index');

////////////Login Route/////////////
Route::post('/login-access', 'LoginController@login')->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
