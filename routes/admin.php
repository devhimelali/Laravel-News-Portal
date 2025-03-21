<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('dashboard', function () {
        return "Admin Dashboard";
    })->name('admin.dashboard');
});
