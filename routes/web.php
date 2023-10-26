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

//Agrupar rutas
Route::controller(UserController::class)->group(function(){
    Route::get('/','index');
    Route::post('users', 'add')->name('users.newUser');
    Route::delete('users/{user}', 'delete')->name('users.deleteUser');
    Route::put( 'users/{user}', 'update' )->name('users.updateUser');
});
