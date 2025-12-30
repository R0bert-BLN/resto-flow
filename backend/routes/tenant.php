<?php

declare(strict_types=1);

use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

Route::get('/check-tenant', function () {
    return response()->json([
        'exists' => true
    ]);
});

Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth:sanctum');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('restaurants', RestaurantController::class);
});
