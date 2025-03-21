<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:admin', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return "Admin Dashboard";
    })->name('admin.dashboard');
});
