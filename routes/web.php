<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\inertia;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\User\AuthController;


Route::get('/', [PackageController::class, 'index']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'store']);

