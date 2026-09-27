<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
    Route::get('/', [
        HomeController::class,
        'index'
    ]);

    Route::get('/pengunjung', function () {
        return view('pengunjung');
    });

    Route::get('/pengunjung/tambah', [
        HomeController::class,
        'tambah'
    ]);

use App\Http\Controllers\OllamaController;
    Route::get('/ask', [
        OllamaController::class,
        'ask'
    ]);