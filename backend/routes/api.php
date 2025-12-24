<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

Route::get('/', function () {
    return 'This is your multi-tenant application. This is the main api.';
});

Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('guest');
