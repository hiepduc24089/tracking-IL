<?php

use App\Http\Controllers\admin\DashBoardController;
use App\Http\Controllers\admin\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');
Route::get('/password/change', [LoginController::class, 'showPassword'])->name('password.change');
Route::post('/password/update', [LoginController::class, 'updatePassword'])->name('password.update');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('check-admin-auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
});
