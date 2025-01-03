<?php

use App\Http\Controllers\v1\TerminalController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckToken;
use App\Http\Controllers\v1\GazstationController;

Route::get('/test', [TestController::class, 'index']);

Route::group(['prefix' => 'v1', 'middleware' => CheckToken::class], function () {
    Route::group(['prefix' => 'gazstation'], function () {
        Route::get('/info', [GazstationController::class, 'getInfo']);
        Route::get('/', [GazstationController::class, 'getById']);

        // Работа с терминалами
        Route::group(['prefix' => 'terminals'], function () {
            Route::get('/', [TerminalController::class, 'index']);
        });
    });
});

require __DIR__ . '/auth.php';
