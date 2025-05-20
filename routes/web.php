<?php

use App\Http\Controllers\PeliculaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

// Si acceden a la raíz
Route::get('/', function () {
    return auth()->check() ? redirect('/home') : redirect('/login');
});

// Ruta protegida para /home (dashboard)
Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // CRUD de películas protegido
    Route::resource('peliculas', PeliculaController::class);
});
