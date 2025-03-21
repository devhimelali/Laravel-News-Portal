<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:user', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return "User Dashboard";
    })->name('user.dashboard');
});
