<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelayController;
use App\Http\Controllers\WifiController;

Route::get('/getRelayStatus', RelayController::class.'@index');
Route::patch('/toggleRelay/{relay}', [RelayController::class, 'toggleRelay']);
Route::apiResource('wifi', WifiController::class);

