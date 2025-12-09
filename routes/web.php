<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Task\CreateController;
use App\Http\Controllers\Task\DeleteController;
use App\Http\Controllers\Task\EditController;
use App\Http\Controllers\Task\IndexController;
use App\Http\Controllers\Task\StoreContoller;
use App\Http\Controllers\Task\UpdateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('categories', CategoryController::class)->names('categories');

Route::get('tasks', IndexController::class)->name('tasks.index');
Route::get('tasks/{task}', CreateController::class)->name('tasks.create');
Route::post('tasks', StoreContoller::class)->name('tasks.store');
Route::get('tasks/{task}/edit', EditController::class)->name('tasks.edit');
Route::put('tasks/{task}', UpdateController::class)->name('tasks.update');
Route::delete('tasks/{task}', DeleteController::class)->name('tasks.destroy');

Route::get('/test', function () {
    return 'Test page';
});

require __DIR__.'/auth.php';
