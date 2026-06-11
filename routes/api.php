<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\MovieController;
use App\Http\Controllers\Api\FavoriteController;

Route::prefix('v1')->group(function () {

    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {

        Route::post('/logout', [AuthController::class, 'logout']);

        Route::get('/movies/search', [MovieController::class, 'search']);
        Route::get('/movies/{imdbID}', [MovieController::class, 'detail']);

        Route::post('/favorites', [FavoriteController::class, 'store']);
        Route::get('/favorites', [FavoriteController::class, 'index']);
        Route::delete('/favorites/{id}', [FavoriteController::class, 'destroy']);

    });

});