<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GrupoController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\EspacioController;
use App\Http\Controllers\ConciertoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



Route::middleware(['auth'])->group(function () {
    Route::resource('grupos', GrupoController::class);
    Route::resource('managers', ManagerController::class);
    Route::resource('espacios', EspacioController::class);
    Route::resource('conciertos', ConciertoController::class);
    
});


Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
