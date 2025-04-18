<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:admin', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard.index');
    })->name('admin.dashboard');
    Route::resource('categories', CategoryController::class);
    Route::get('categories/{category}/toggle-visibility',
        [CategoryController::class, 'toggleVisibility'])->name('categories.toggle.visibility');
});
