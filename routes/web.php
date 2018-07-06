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

Route::middleware(['auth'])->prefix('admin')->group(function () {

	/*** Banners ***/
	Route::get('banner', 'BannerController@index')->name('banner');
	Route::get('banner/add', 'BannerController@create')->name('add_banner');
	Route::post('banner/store', 'BannerController@store')->name('store_banner');
	Route::get('banner/edit/{id}',['as'=>'edit_banner', 'uses' => 'BannerController@edit']);
	Route::put('banner/update/{id}',['as'=>'update_banner', 'uses' => 'BannerController@update']);

	/*** Pages ***/
	Route::get('section', 'SectionController@index')->name('section');
	Route::get('section/add', 'SectionController@create')->name('add_section');
	Route::post('section/store', 'SectionController@store')->name('store_section');
	Route::get('section/edit/{id}',['as'=>'edit_section', 'uses' => 'SectionController@edit']);
	Route::put('section/update/{id}',['as'=>'update_section', 'uses' => 'SectionController@update']);

	/*** Users ***/
	Route::get('user', 'UserController@index')->name('users');
	Route::get('user/add', 'UserController@create')->name('add_user');
	Route::post('user/store', 'UserController@store')->name('store_user');
	Route::get('user/edit/{id}',['as'=>'edit_user', 'uses' => 'UserController@edit']);
	Route::put('user/update/{id}',['as'=>'update_user', 'uses' => 'UserController@update']);

});

Auth::routes();
