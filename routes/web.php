<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/posts', [PostController::class, 'index'])->name('posts');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
