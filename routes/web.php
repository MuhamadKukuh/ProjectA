<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\userController;
use GuzzleHttp\Middleware;

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

Route::get('/', [authController::class, 'index'])->middleware('guest')->name('index');
Route::post('/login', [authController::class, 'validation'])->middleware('guest')->name('auth');
Route::get('/login', [authController::class, 'login'])->middleware('guest')->name('login');

// User
Route::group(['middleware' => 'auth'], function(){
    Route::get('/Home', [userController::class, 'index'])->name('home');
    Route::post('/registration', [authController::class, 'registration'])->name('registration');
    Route::get('/logout', [authController::class, 'logout'])->name('logout');
});

// SuperAdmin
Route::group(['middleware' => 'guru'], function(){
    Route::get('/register', [authController::class, 'register'])->name('register');
});
