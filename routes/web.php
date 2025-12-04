<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/criar-conta', [UserController::class, 'create'] )->name('create-account');
Route::post('/criar-conta', [UserController::class, 'store'])->name('insert-account');

Route::middleware(['throttle:login-attempts'])->group(function () {
    Route::post('/login', [AuthController::class, 'loginAttempt'])->name('auth');
});

// Route::post('/login', function () {
//     return 'autenticação do usuário ';
// })->name('auth');

Route::get('/redefinir-senha', function () {
    return 'autenticação do usuário ';
})->name('forgot-password');

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
