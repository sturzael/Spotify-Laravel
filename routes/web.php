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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('/blog/1');
});

Route::resource('blog', 'BlogController');

Route::get('about', 'AboutController@index');

Route::get('admin', 'AdminController@index')->middleware('auth');
Auth::routes();


Route::get('/blog/1', 'HomeController@index')->name('home');
