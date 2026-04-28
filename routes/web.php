<?php

use Illuminate\Support\Facades\Route;

Route::get('/kendaraan', function () {
    return view('kendaraan.index', ['title' => 'Kendaraan']);
});

Route::get('/kendaraan/create', function () {
    return view('kendaraan.create', ['title' => 'Create Kendaraan']);
});