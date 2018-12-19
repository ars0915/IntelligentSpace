<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('get_total_a', 'FacilityController@get_total_a');
Route::get('get_num_a/{username}', 'FacilityController@get_num_a');



Route::get('get_total_b', 'FacilityController@get_total_b');
Route::get('get_num_b/{username}', 'FacilityController@get_num_b');
