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

Route::get('/', [UserController::class, 'index'])->name('users.index');
Route::post('users', [UserController::class, 'add'])->name('users.newUser');
Route::delete('users/{user}', [UserController::class, 'delete'])->name('users.deleteUser');
Route::put( 'users/{user}', [UserController::class, 'update'] )->name('users.updateUser');
