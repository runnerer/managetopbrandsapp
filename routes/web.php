<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageBrandController;
use App\Http\Controllers\TopListController;

Route::prefix('brands')->group(function () {
    Route::get('/', [ManageBrandController::class, 'index']);
    Route::post('/', [ManageBrandController::class, 'store']);
    Route::put('{id}', [ManageBrandController::class, 'update']);
    Route::delete('{id}', [ManageBrandController::class, 'destroy']);
});

Route::get('/', [TopListController::class, 'index']);
