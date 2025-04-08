<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts/index', [PostController::class, 'index']);
Route::get('posts/edit', [PostController::class, 'edit']);
Route::get('posts/create', [PostController::class, 'create']);
Route::get('posts/show', [PostController::class, 'show']);


Route::resource('posts', PostController::class);