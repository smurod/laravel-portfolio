<?php

use App\Http\Controllers\Auth\SocialController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Public\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('project-list', [MainController::class, 'projectList'])->name('project-list');
Route::get('/project-list-all', [MainController::class, 'projectListAll'])->name('project-list-all');
Route::get('/about-us', [MainController::class, 'aboutUs'])->name('about-us');
Route::get('/developers', [MainController::class, 'developers'])->name('developers');
Route::get('/contact-us', [MainController::class, 'contact'])->name('contact-us');
Route::get('/project_details/{project}', [MainController::class, 'projectDetails'])->name('project-details');

Route::get('/dashboard', [ProjectController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('auth/{provider}', [SocialController::class, 'redirectToProvider']);
Route::get('auth/{provider}/callback', [SocialController::class, 'handleProviderCallback']);

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified']], function () {
    Route::resource('project', ProjectController::class);
});


Route::get('/main', [MainController::class, 'index'])->name('home.index');

Route::get('/admin', function () {
    return view('admin.layouts.app');
});

Route::get('/app', function () {
    return view('public.layouts.app');
});

require __DIR__.'/auth.php';
