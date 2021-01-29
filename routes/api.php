<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Api\AuthController;
use App\Api\CaptchaController;


Route::post('/login', [AuthController::class, 'login']);
Route::get('/captcha', [CaptchaController::class, 'create']);

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
