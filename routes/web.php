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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    #return view('welcome');
    return 'A___A';
});

Route::get('get_total_a', 'FacilityController@get_total_a');
Route::get('get_total_b', 'FacilityController@get_total_b');

Route::get('get_num_a/{username}', 'FacilityController@get_num_a');
Route::get('get_num_b/{username}', 'FacilityController@get_num_b');

