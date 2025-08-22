<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
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

 Route::get('/',[AuthController::class,'showlogin'])->name('login');
 Route::get('/register',[AuthController::class,'showregister'])->name('register');
 Route::get('/login',[AuthController::class,'showlogin'])->name('login');
 
 Route::post('/register',[AuthController::class,'register'])->name('auth.register');
 Route::post('/login',[AuthController::class,'login'])->name('auth.login');
 Route::get('/reotp',[AuthController::class,'showregister'])->name('verification.notice');


 Route::middleware(['auth','verified'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
});
