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

Auth::routes();

Route::get('/', 'dogfacilityController@index')->name('dogfacility.index');

Route::group(['middleware' => 'auth'], function () {
    Route::get('dogfacility/create', 'DogfacilityController@create')->name('dogfacility.create');
    Route::post('dogfacility/store', 'DogfacilityController@store')->name('dogfacility.store');
});
