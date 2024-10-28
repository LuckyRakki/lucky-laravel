<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use Illuminate\Http\Request;

Route::get('/welcome', function () {
    return view('welcome'); // ini merujuk ke halaman welcome.blade.php
});
Route::get('/login', function () {
    return view('login'); // ini merujuk ke halaman index.blade.php
});
Route::get('/about', function () {
    return view('about'); // ini merujuk ke halaman index.blade.php
});
Route::get('/', function () {
    return view('index'); // ini merujuk ke halaman index.blade.php
});

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/', [HomeController::class, 'index'])->name('home');