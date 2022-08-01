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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/php', function () {
    return view('php');
})->name('php');

Route::get('/javascript', function () {
    return view('javascript');
})->name('javascript');

Route::get('/android', function () {
    return view('android');
})->name('android');

Route::get('/other', function () {
    return view('other');
})->name('other');
