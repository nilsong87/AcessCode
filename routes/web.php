<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManutencaoController;
use Illuminate\Support\Facades\Route;

// Rota para a página inicial
Route::get('/', [HomeController::class,'index']);

// Rota para a página de FAQ
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

// Rota para a página de manutenção
Route::get('/manutencao', [ManutencaoController::class, 'index'])->name('manutencao');

// Rota para a página de manutenção-login
Route::get('/manutencao-login', function () {
    return view('manutencao-login');
})->name('manutencao');

// Rota para a página de App
Route::get('/app', function () {
    return view('app');
})->name('app');


