<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'app' => 'MovieHub API',
        'status' => 'running'
    ]);
});
