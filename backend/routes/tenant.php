<?php

declare(strict_types=1);

use App\Http\Controllers\RestaurantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

Route::middleware(['guest'])->group(function () {
    Route::get('/check-tenant', function () {
        return response()->json([
            'exists' => true
        ]);
    });

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/auth-user', function (Request $request) {
        return $request->user()->load('role');
    });

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);

    Route::apiResource('restaurants', RestaurantController::class);
});
