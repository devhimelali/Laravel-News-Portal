<?php

use App\Http\Controllers\RedirectController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/redirect', [RedirectController::class, 'redirect'])->name('redirect');

Route::get('/', function () {
    return view('welcome');
});


