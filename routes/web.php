<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'home'])->name('home');
Route::get('/post/{slug}', [PostController::class, 'post'])->name('post');
