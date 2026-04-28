<?php

use App\Http\Controllers\KendaraanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [KendaraanController::class, 'index']);

Route::get('/kendaraan', [KendaraanController::class, 'index'])->name('kendaraan.index');
Route::get('/kendaraan/create', [KendaraanController::class, 'create'])->name('kendaraan.create');
Route::post('/kendaraan/store', [KendaraanController::class, 'store'])->name('kendaraan.store');