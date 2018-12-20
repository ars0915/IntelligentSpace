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

Route::POST('create_a/{username}', 'FacilityController@create_a');
Route::GET('get_total_a', 'FacilityController@get_total_a');
Route::GET('get_num_a/{username}', 'FacilityController@get_num_a');
Route::DELETE('del_a/{username}', 'FacilityController@del_a');



Route::POST('create_b/{username}', 'FacilityController@create_b');
Route::GET('get_total_b', 'FacilityController@get_total_b');
Route::GET('get_num_b/{username}', 'FacilityController@get_num_b');
Route::DELETE('del_b/{username}', 'FacilityController@del_b');

