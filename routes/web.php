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

Route::get('/', 'HomeController@index')->name('home');
// Route::get('/blog/1', 'HomeController@index')->name('home');

Route::resource('blog', 'BlogController');
Route::resource('colours', 'ColourController');
Route::resource('identity', 'IdentityController');
Route::resource('images', 'ImagesController');
Route::resource('plans', 'PlansController');

Route::get('about', 'AboutController@index');

Route::get('admin', 'AdminController@index')->middleware('auth');
Auth::routes();
