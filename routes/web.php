<?php

use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ExampleController::class, 'list']);

Route::get('/profile', [ExampleController::class, 'profile']);

Route::match(['get', 'post'], '/login', [ExampleController::class, 'login'])->name('login');

// Ajoutez cette nouvelle route
Route::post('/logout', [ExampleController::class, 'logout'])->name('logout');