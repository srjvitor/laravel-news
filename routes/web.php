<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;

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

Route::get('/register/{register_status?}', 'RegisterController@create')->name('register');

Route::get('/login/{register_success?}', 'LoginController@create')->name('login');

Route::get('/{category?}', 'HomeController@index')->name('home');

Route::get('/new', function () {
    return view('home.new');
})->name('new');

Route::get('/notice/{id?}', function ($id = null) {
    return view('home.notice', ['id' => $id]);
})->name('notice');


