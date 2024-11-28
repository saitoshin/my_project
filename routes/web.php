<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Route::get('/top', [App\Http\Controllers\TopController::class, 'index']); //
Route::get('/sample', [App\Http\Controllers\SampleController::class, 'index']);

route::get('/login', [App\Http\Controllers\LoginController::class, 'index']);
route::post('/login/register', [App\Http\Controllers\LoginController::class, 'register']);
route::get('/login/unregister', [App\Http\Controllers\LoginController::class, 'unregister']);
