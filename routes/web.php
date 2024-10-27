<?php

use App\Http\Controllers\web\AboutUsController;
use App\Http\Controllers\web\BlogController;
use App\Http\Controllers\web\CartController;
use App\Http\Controllers\web\ContactController;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\LoginController;
use App\Http\Controllers\web\PaymentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'registerSubmit'])->name('register.submit');
Route::get('/forget-password', [LoginController::class, 'forgetPassword'])->name('forgetPassword');
Route::post('/forget-password', [LoginController::class, 'forgetPasswordSubmit'])->name('forgetPassword.submit');
Route::get('/authentication-code', [LoginController::class, 'authenticationCode'])->name('authenticationCode');
Route::post('/authentication-code', [LoginController::class, 'authenticationCodeSubmit'])->name('authenticationCode.submit');
Route::get('/new-password', [LoginController::class, 'newPassword'])->name('newPassword');
Route::post('/new-password', [LoginController::class, 'newPasswordSubmit'])->name('newPassword.submit');

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/goc-cha-me', [BlogController::class, 'index'])->name('blog.index');
Route::get('/goc-cha-me/{slug}', [BlogController::class, 'detail'])->name('blog.detail');
Route::get('/ve-chung-toi', [AboutUsController::class, 'index'])->name('about.index');
Route::get('/lien-he', [ContactController::class, 'index'])->name('contact.index');
Route::get('/gio-hang', [CartController::class, 'index'])->name('cart.index');
Route::get('/thanh-toan', [PaymentController::class, 'index'])->name('payment.index');
