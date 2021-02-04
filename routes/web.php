<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'home';
});

// Route::get('/{module}/{param?}', function () {
//     return view('app');
// })->where('module', 'auth|login|register|site|system');

//后备路由（没有可匹配路由时执行这里）
Route::fallback(function () {
    return view('app');
});