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

Route::get('/', 'PagesController@index' );

Route::get('/about', 'PagesController@about');

Route::get('/applicant', 'PagesController@applicant');

Route::get('/submission', 'PagesController@submission');

Route::get('/admin', 'PagesController@admin');

Route::get('/comittee/{id}', 'PagesController@comittee');

Route::get('/depthead/{id}', 'PagesController@depthead');

Route::resource('applications', 'ApplicationController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

