<?php

use App\Http\Controllers\Api\KelasController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('kelas', KelasController::class)->parameters([
    'kelas' => 'kelas'
]);;
Route::apiResource('users', UserController::class);
