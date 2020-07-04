<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\NoticeController;

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

Route::post('newuser', 'UserController@store');
Route::post('login', 'UserController@show');

Route::get('notices/{category}', 'NoticeController@index');
Route::post('new', 'NoticeController@store');

Route::get('rating/{notice_id}', 'RatingController@index');
Route::post('rating/{notice_id}', 'RatingController@store');
