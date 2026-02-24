<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return response()->json([
        'message' => 'API working'
    ]);
});

Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index');
    Route::put('/users/{id}', 'update');
    Route::delete('/users/{id}', 'destroy');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/products', 'index');
});