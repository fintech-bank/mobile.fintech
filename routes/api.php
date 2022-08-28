<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/vapid/key', [\App\Http\Controllers\Api\PushController::class, 'getKey']);
Route::post('/vapid/subscription', [\App\Http\Controllers\Api\PushController::class, 'subscription']);
