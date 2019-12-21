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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/sign-in', 'SignInController@showSignIn')->name('sign-in');
Route::get('/sign-up', 'SignUpController@showSignUp')->name('sign-up');
Route::post('/sign-up', 'SignUpController@signUp')->name('sign-up.post');
Route::get('/dashboard', 'DashboardController@showDashboard')->name('dashboard');
