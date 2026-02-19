<?php

use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\PrestamoController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    Route::get('/books', [CatalogoController::class, 'index']);
    Route::post('/loan', [PrestamoController::class, 'index']);
});
