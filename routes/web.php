<?php

use App\Http\Controllers\KendaraanController;
use Illuminate\Support\Facades\Route;

Route::get('/kendaraan', [KendaraanController::class, 'index']);
Route::get('/kendaraan/create', [KendaraanController::class, 'create']);