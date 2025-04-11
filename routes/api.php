<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelayController;
use App\Http\Controllers\WifiController;

Route::get('/getRelayStatus', RelayController::class.'@index');
Route::patch('/toggleRelay/{relay}', [RelayController::class, 'toggleRelay']);
Route::patch('/onRelay/{relay}', [RelayController::class, 'onRelay']);
Route::patch('/offRelay/{relay}', [RelayController::class, 'offRelay']);
Route::apiResource('wifi', WifiController::class);

