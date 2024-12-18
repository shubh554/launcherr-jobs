<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\ProfileController;

Route::get('/', [AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/userLogin', [AuthController::class, 'login'])->name('login1');
Route::get('/signup', [AuthController::class, 'signup']);
Route::post('/addUser', [AuthController::class, 'add']);


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/jobs', [JobsController::class, 'index']);
    Route::post('/addJobs', [JobsController::class, 'add']);
    Route::get('/toggleActive/{id}/{active}', [JobsController::class, 'toggleActive']);
    Route::post('/editJob', [JobsController::class, 'edit']);
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/updateProfile', [ProfileController::class, 'update']);
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
