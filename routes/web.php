<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeverancierController;

Route::get('/leveranciers/overzicht', [LeverancierController::class, 'index'])->name('leveranciers.index');
Route::get('/leveranciers/{id}', [LeverancierController::class, 'show'])->name('leveranciers.show');
Route::get('/leveranciers/{id}/edit', [LeverancierController::class, 'edit'])->name('leveranciers.edit');
Route::put('/leveranciers/{id}', [LeverancierController::class, 'update'])->name('leveranciers.update');


Route::get('/', function () {
    return view('welcome');
});

