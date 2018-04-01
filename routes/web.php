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

Route::get('/', 'IndexController@index')->name('home');

Route::get('/workshop', 'WorkshopsController@create');
Route::post('/workshop', 'WorkshopsController@store');

Route::get('/statistical_analysis', 'StatsController@create');
Route::post('/statistical_analysis', 'StatsController@store');

Route::get('/admin', 'AdminController@login');
Route::get('/admin/dashboard', 'AdminController@dashboard');

Route::get('/admin/training_workshops', 'AdminController@workshops');
Route::get('/admin/training_workshops/{data}', 'AdminController@workshop_details');
Route::delete('/admin/training_workshops/{id}', 'AdminController@workshop_details_delete');

Route::get('/admin/statistical_analysis', 'AdminController@stats');
Route::get('/admin/statistical_analysis/{data}', 'AdminController@stats_details');
Route::delete('/admin/statistical_analysis/{id}', 'AdminController@stats_details_delete');