<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Api\AuthController;
use App\Api\CaptchaController;
use App\Api\SiteController;
use App\Api\UserController;

Route::post('/login', [AuthController::class, 'login']);
Route::get('/captcha', [CaptchaController::class, 'create']);
Route::get('user/info', [UserController::class, 'info']);
Route::apiResource('site',SiteController::class);
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
