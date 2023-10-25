<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controller\UserController@index');
Route::post('users', 'App\Http\Controller\UserController@store')->name('user.store');
Route::get('users/{user}', 'App\Http\Controller\UserController@destroy')->name('user.destroy');
