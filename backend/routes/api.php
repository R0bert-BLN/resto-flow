<?php

use App\Http\Controllers\Auth\TenantRegistrationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

// TODO: Clean routes files

Route::get('/', function () {
    return 'This is your multi-tenant application. This is the main api.';
});

Route::post('/register', [TenantRegistrationController::class, 'store'])->middleware('guest');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/auth-user', function (Request $request) {
        return $request->user()->load('role');
    });

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);
});
