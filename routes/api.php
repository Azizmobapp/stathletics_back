<?php

use App\Http\Controllers\AthleteController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;


Route::apiResource('events', EventController::class);
Route::apiResource('athletes', AthleteController::class);
