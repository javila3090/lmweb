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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');

/*** Banner ***/
Route::get('/admin/banner', 'BannerController@index')->name('banner');
Route::get('/admin/banner/add', 'BannerController@create')->name('add_banner');
Route::post('/admin/banner/store', 'BannerController@store')->name('store_banner');
Route::get('/admin/banner/edit/{id}',['as'=>'edit_banner', 'uses' => 'BannerController@edit']);
Route::post('/admin/banner/update',['as'=>'update_banner', 'uses' => 'BannerController@update']);

/*** Section ***/
Route::get('/admin/section', 'SectionController@index')->name('section');
Route::get('/admin/section/add', 'SectionController@create')->name('add_section');
Route::post('/admin/section/store', 'SectionController@store')->name('store_section');

Auth::routes();
