<?php

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
