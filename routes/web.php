<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\ProfileController;
use App\Http\Controllers\Client\SocialiteController;

// Client routes
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/search', [HomeController::class, 'search'])->name('search.index');

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/{product}', [HomeController::class, 'product'])->name('product.list');
Route::get('/product-detail', [ProductController::class, 'detail'])->name('product.detail');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog-detail', [BlogController::class, 'detail'])->name('blog.detail');

Route::get('/login', [AuthController::class, 'login'])->name('login.index');
Route::post('/login', [AuthController::class, 'postLogin'])->name('login.post');

Route::get('/register', [AuthController::class, 'register'])->name('register.index');
Route::post('/register', [AuthController::class, 'postRegister'])->name('register.post');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout.index');

Route::get('/forget', [AuthController::class, 'forget'])->name('auth.forget');
Route::post('/forgetPassword', [AuthController::class, 'forgetPassword'])->name('forget.post');

Route::get('/reset/{token}', [AuthController::class, 'reset'])->name('reset.password');
Route::post('/reset/{token}', [AuthController::class, 'resetPost'])->name('reset.post');


Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.post');

Route::get('/auth/redirect', [SocialiteController::class, 'redirect']);
Route::get('/auth/google/callback', [SocialiteController::class, 'callback']);

Route::middleware('client.authentication')->get('/profile/{id}', [ProfileController::class, 'index'])->name('profile.index');
Route::middleware('client.authentication')->post('/profile', [ProfileController::class, 'update'])->name('profile.update');

// Admin routes
Route::get('/admin', [LoginController::class, 'index'])->name('admin');

Route::get('/admin/login', [LoginController::class, 'index'])->name('admin.index');
Route::post('/admin/login', [LoginController::class, 'create'])->name('admin.post');

Route::prefix('admin')->middleware('admin.authentication')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
});
