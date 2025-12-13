<?php

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test', function(){
    return response()->json([
        'message' => 'Hello from Laravel API',
        'status' => 'success',
        'version' => '1.0.0',
        'author' => 'Murodjon'
    ]);
});

Route::get('/hello', function(){
    return response()->json([
        'message' => 'Hello from Laravel API',
    ]);
});
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/{id}', [PostController::class, 'show']);
Route::post('/posts', [PostController::class, 'store']);
