<?php

use Illuminate\Support\Facades\Route;

Route::get('camioneros', function () {
    return view('camioneros');
});

use App\Http\Controllers\CamioneroController;

Route::get('/camioneros', [CamioneroController::class, 'index'])->name('camioneros.index');
Route::get('/camioneros/create', [CamioneroController::class, 'create'])->name('camioneros.create');
Route::post('/camioneros', [CamioneroController::class, 'store'])->name('camioneros.store');
Route::get('/camioneros/{camionero}', [CamioneroController::class, 'show'])->name('camioneros.show');
Route::get('/camioneros/{camionero}/edit', [CamioneroController::class, 'edit'])->name('camioneros.edit');
Route::put('/camioneros/{camionero}', [CamioneroController::class, 'update'])->name('camioneros.update');
Route::delete('/camioneros/{camionero}', [CamioneroController::class, 'destroy'])->name('camioneros.destroy');
