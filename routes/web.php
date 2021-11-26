<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserProfileController;

    Route::middleware(['auth'])->group(function () {
        Route::get('/', function () {return view('welcome');})->name('dashboard');
        Route::get('/user/profile/edit/{id}',[UserProfileController::class, 'edit'])->name('profile.edit');
        Route::post('/user/profile/update/{id}',[UserProfileController::class, 'update'])->name('profile.update');
    });