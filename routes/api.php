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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::apiResource('user', 'api\UserInfoController');

Route::get('user', 'UserInfoController@index');
Route::get('user/{userInfo}', 'UserInfoController@show');
Route::post('user', 'UserInfoController@store');
Route::put('user/{userInfo}', 'UserInfoController@update');
Route::delete('user/{userInfo}', 'UserInfoController@destroy');
