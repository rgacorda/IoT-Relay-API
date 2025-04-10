<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelayController;

Route::get('/getRelayStatus', RelayController::class.'@index');
Route::patch('/toggleRelay/{relay}', [RelayController::class, 'toggleRelay']);
Route::put('/toggleRelay/{relay}', [RelayController::class, 'toggleRelay']);
Route::get('/getRelayStatus/{relay}', [RelayController::class, 'showRelay']);
Route::post('/createRelay', [RelayController::class, 'createRelay']);
Route::delete('/deleteRelay/{relay}', [RelayController::class, 'deleteRelay']);
