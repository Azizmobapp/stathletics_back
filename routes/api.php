<?php

use App\Http\Controllers\ChampionController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;


Route::apiResource('events', EventController::class);
Route::apiResource('champions', ChampionController::class);
