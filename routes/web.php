<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::get('/criar-conta', [UserController::class, 'create'] )->name('create-account');

Route::post('/criar-conta', [UserController::class, 'store'])->name('insert-account');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function () {
    return 'autenticação do usuário ';
})->name('auth');

Route::get('/redefinir-senha', function () {
    return 'autenticação do usuário ';
})->name('forgot-password');
