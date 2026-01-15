<?php

declare(strict_types=1);

use App\Http\Controllers\Tenant\MenuCategoryController;
use App\Http\Controllers\Tenant\MenuController;
use App\Http\Controllers\Tenant\MenuItemController;
use App\Http\Controllers\Tenant\RestaurantController;
use App\Http\Middleware\Tenant\SetRestaurantContext;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

Route::get('/check-tenant', function () {
    return response()->json([
        'exists' => true
    ]);
});

Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');

Route::middleware(['auth:sanctum', SetRestaurantContext::class])->group(function () {
    Route::get('/auth-user', function (Request $request) {
        return $request->user()->load('role', 'restaurants');
    });

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);

    Route::apiResource('/restaurants', RestaurantController::class);

    Route::apiResource('/menus', MenuController::class);

    Route::apiResource('menus.categories', MenuCategoryController::class)->shallow();

    Route::post('categories/{category}/items', [MenuItemController::class, 'store']);
    Route::apiResource('items', MenuItemController::class)->except(['store']);
});
