<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\CanvasController;



// Rota para a página inicial
Route::get('/', [HomeController::class, 'index']);

Route::get('/', function () { 
    return view('home'); 
}); 

Route::middleware(['auth'])->group(function () { 
    Route::view('/dashboard', 'dashboard')->name('dashboard'); 
}); 

require __DIR__.'/auth.php';

// Rota para a página de FAQ
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

// Rota para a página de manutenção
Route::get('/manutencao', [AuthController::class, 'showManutencao'])->name('manutencao')->middleware('auth');

Route::get('/manutencao', function () {
    return view('manutencao');
})->name('manutencao');

Route::post('/upload', [FileController::class, 'store'])->name('files.store');




// Rotas para login e logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rota para a página de App
Route::get('/app', function () {return view('app.app');})->name('app');


Route::post('/export-canvas', [CanvasController::class, 'export']);




