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

Route::get('/', 'PostController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Manage user sign-up, log-in and log-out
Route::get('/log_in', 'UserConfigController@log_in');
Route::get('/sign_up', 'UserConfigController@sign_up');

// Employer routes
Route::get('/employer', 'EmployerController@index');
Route::get('/employer/profile', 'EmployerController@profile');
Route::get('/employer/postJob', 'EmployerController@postJob');
Route::get('/employer/notifications', 'EmployerController@notifications');
Route::get('/employer/myPosts', 'EmployerController@myPosts');

// Manage employer posts
Route::post('/posts', 'PostController@store');
