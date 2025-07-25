<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;

Route::get('/inertia', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/render', function () {
    return Inertia::render('Render', ['name' => 'Miguel Angel']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});


Route::get('/portafolio', [HomeController::class, 'index'])->name('home');
Route::get('/quienes-somos', [HomeController::class, 'index'])->name('aboutus');
Route::get('/contactanos', [HomeController::class, 'index'])->name('contact');

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/info', [HomeController::class, 'info'])->name('info');