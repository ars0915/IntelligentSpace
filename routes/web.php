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

Route::get('/', function () {
    #return view('welcome');
    return 'A___A';
});

Route::get('get_total_a', 'FacilityController@get_total_a');
Route::get('get_total_b', 'FacilityController@get_total_b');
