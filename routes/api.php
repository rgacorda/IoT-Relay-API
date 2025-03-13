<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelayController;

Route::get('/getRelayStatus', RelayController::class.'@index');
Route::patch('/toggleRelay/{relay}', [RelayController::class, 'toggleRelay']);

