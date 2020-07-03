<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/new', function () {
    return view('home.new');
})->name('new');

Route::get('/notice/{id?}', function ($id = null) {
    return view('home.notice', ['id' => $id]);
})->name('notice');

Route::get('/', function () {
    return view('home.feed');
})->name('home');

Route::get('/register/{register_status?}', function ($register_status = null) {
    return view('session.register', ['status' => $register_status]);
})->name('register');

Route::get('/login/{register?}', function ($register = null) {
    return view('session.login', ['register' => $register]);
})->name('login');
