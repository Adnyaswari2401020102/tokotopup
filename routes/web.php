<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopupController;

Route::get('/', [TopupController::class, 'index']);
Route::post('/topup', [TopupController::class, 'store']);
