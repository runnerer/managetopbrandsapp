<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageBrandController;

Route::prefix('brands')->group(function () {
    Route::get('/', [ManageBrandController::class, 'index']);
    Route::post('/', [ManageBrandController::class, 'store']);
    Route::put('{id}', [ManageBrandController::class, 'update']);
    Route::delete('{id}', [ManageBrandController::class, 'destroy']);
});
