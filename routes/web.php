<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageBrandController;
use App\Http\Controllers\TopListController;

Route::prefix('brands')->name('brands.')->group(function () {
    Route::get('/', [ManageBrandController::class, 'index'])->name('index');
    Route::post('/', [ManageBrandController::class, 'store'])->name('store');
    Route::put('{id}', [ManageBrandController::class, 'update'])->name('update');
    Route::delete('{id}', [ManageBrandController::class, 'destroy'])->name('destroy');
});

Route::get('/', [TopListController::class, 'index']);
