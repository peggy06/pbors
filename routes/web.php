<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@start')->name('index');
Route::group([
    'middleware' => 'web',
    'namespace'  => '\Admin',
    'as'         => 'admin.'
], function () {
    Route::resource('company', 'CompaniesController');
});

Route::group([
    'middleware' => 'web',
    'namespace'  => '\Client',
    'as'         => 'client.'
], function () {
    Route::get('schedules/{schedule}/export', 'SchedulesController@export')->name('schedules.export');
    Route::resource('schedules', 'SchedulesController');
    Route::get('reservations/{reservation}/confirm', 'ReservationsController@confirm')->name('reservations.confirm');
    Route::resource('reservations', 'ReservationsController');
    Route::resource('routes', 'RoutesController');
    Route::get('password', 'PasswordController@reset')->name('password.reset');
    Route::post('password', 'PasswordController@store')->name('password.store');

});

Auth::routes();

Route::get('/home', 'HomeController@index');
