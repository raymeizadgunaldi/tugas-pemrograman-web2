<?php

use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [KendaraanController::class, 'index']);

Route::get('/kendaraan', [KendaraanController::class, 'index'])->name('kendaraan.index');
Route::get('/kendaraan/create', [KendaraanController::class, 'create'])->name('kendaraan.create');
Route::post('/kendaraan/store', [KendaraanController::class, 'store'])->name('kendaraan.store');
Route::get('/kendaraan/{kendaraan}/edit', [KendaraanController::class, 'edit'])->name('kendaraan.edit');
Route::put('/kendaraan/{kendaraan}', [KendaraanController::class, 'update'])->name('kendaraan.update');
Route::delete('/kendaraan/{kendaraan}', [KendaraanController::class, 'destroy'])->name('kendaraan.destroy');

//soft deletes
Route::get('/kendaraan/trash', [KendaraanController::class, 'trash'])->name('kendaraan.trash');
Route::put('/kendaraan/{kendaraan}/restore', [KendaraanController::class, 'restore'])->name('kendaraan.restore')->withTrashed();

Route::resource('merek', MerekController::class);
Route::resource('transaksi', TransaksiController::class);