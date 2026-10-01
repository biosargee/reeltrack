<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search', [MovieController::class, 'search'])->name('search');
Route::get('/movie/{id}', [MovieController::class, 'show'])->name('movie.show');