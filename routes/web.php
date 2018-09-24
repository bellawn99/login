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

Route::get('login', 'LoginController@login')->name('login');
Route::get('blank', 'TestController@blank')->name('blank');
Route::get('blank2', 'TestController@blank2')->name('blank2');

//latihan bootstrap
Route::get('test', function(){
	return view('test');
	
})->name('test');
