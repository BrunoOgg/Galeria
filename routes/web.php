<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;
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
});

Route::resource('album', 'App\Http\Controllers\AlbumController')->only([
    'index', 'show', 'store'
]);
Route::get('/photo/dowload/{id}', 'App\Http\Controllers\PhotoController@download');
Route::resource('photo', 'App\Http\Controllers\PhotoController')->only([
    'store'
]);

Route::prefix('auth')->group(function () {
    Route::post('login', 'App\Http\Controllers\UserController@login');
    Route::post('register', 'App\Http\Controllers\UserController@register');
    Route::post('logout', 'App\Http\Controllers\UserController@logout');
    Route::get('init', 'App\Http\Controllers\UserController@init');
});