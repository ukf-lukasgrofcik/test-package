<?php

use Illuminate\Support\Facades\Route;
use Lukasgrofcik\Package\Controllers\AuthController;

Route::middleware('api')->prefix('api')->group(function () {

    Route::get('/user', [ AuthController::class, 'user' ]);
    Route::post('/login', [ AuthController::class, 'login' ]);

    Route::middleware('auth:sanctum')->group(function () {

        Route::get('/test', fn () => response([ 'message' => 'You are logged in.' ]));
        Route::post('/logout', [ AuthController::class, 'logout' ]);

    });
});
