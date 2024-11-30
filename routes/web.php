<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Rota para a página inicial
Route::get('/', [HomeController::class, 'index']);

// Rota para a página de FAQ
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

// Rota para a página de manutenção
Route::get('/manutencao', [AuthController::class, 'showManutencao'])->name('manutencao')->middleware('auth');

// Rotas para login e logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rota para a página de App
Route::get('/app', function () {return view('app.app');})->name('app');