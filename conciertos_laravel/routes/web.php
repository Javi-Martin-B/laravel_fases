<?php

use App\Http\Controllers\GrupoController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\EspacioController;
use App\Http\Controllers\ConciertoController;


Route::middleware(['auth'])->group(function () {
    Route::resource('grupos', GrupoController::class);
    Route::resource('managers', ManagerController::class);
    Route::resource('espacios', EspacioController::class);
    Route::resource('conciertos', ConciertoController::class);
});
require __DIR__.'/auth.php';
