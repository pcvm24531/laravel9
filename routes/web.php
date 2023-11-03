<?php

use App\Http\Controllers\PageController;
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

//Agrupación UserController
Route::controller(UserController::class)->group(function(){
    Route::get('users/','index');
    Route::post('users/add', 'add')->name('users.newUser');
    Route::delete('users/delete/{user}', 'delete')->name('users.deleteUser');
    Route::put( 'users/update/{user}', 'update' )->name('users.updateUser');
});

//Agrupación PageController
Route::controller( PageController::class )->group(function(){
    Route::get( '/', 'home' )->name('home');
    Route::get( 'blog', 'blog' )->name('blog');
    Route::get( 'blog/{slug}', 'post' )->name('post');
});

