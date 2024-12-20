<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController AS PostV2;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource('v1/posts', PostV1::class)->only(['index','show','destroy'])->middleware('auth:sanctum');
Route::apiResource('v2/posts', PostV2::class)->only(['index','show'])->middleware('auth:sanctum');

Route::post('login', [App\Http\Controllers\Api\LoginController::class, 'login'])->name('login');
