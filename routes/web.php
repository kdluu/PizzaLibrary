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
    return view('users.register');
});

// Auth::routes();

Route::resource('books', 'BookController');
Route::resource('loan', 'LoanController');

//Route::get('index', 'BookController@index');
// Route::post('detele', 'BookController@destroy');

Route::get('users-register', 'UserController@index');
Route::post('users-register', 'UserController@store');

Route::get('userslogin', 'UserController@loginForm');
Route::post('userslogin', 'UserController@login');