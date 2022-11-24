<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

// Route::get('/',[HomeController::class, 'dashboard'])->name('dashboard')->middleware('auth');


Route::get('/register',[HomeController::class, 'register'])->name('register');
Route::get('/login',[HomeController::class, 'login'])->name('login');

Route::post('/registerUser',[UserController::class, 'registerUser'])->name('register-user');
Route::post('/loginUser',[UserController::class, 'loginUser'])->name('login-user');
Route::get('/logout',[UserController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function(){
    Route::get('/',[HomeController::class, 'dashboard'])->name('dashboard');

});
