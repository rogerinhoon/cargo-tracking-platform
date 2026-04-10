<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RatreamentoController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);
Route::get('/rastreamento', RatreamentoController::class);
