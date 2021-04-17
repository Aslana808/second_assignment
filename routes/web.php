<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index']);

Route::get('/posts/create', [\App\Http\Controllers\PostController::class, 'create']);

Route::get('/posts/{id}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');

Route::post('posts.store',[\App\Http\Controllers\PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{id}/edit', [\App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit');

Route::put('/posts/{id}/update', [\App\Http\Controllers\PostController::class, 'update'])->name('posts.update');

Route::delete('/posts/{id}/destroy', [\App\Http\Controllers\PostController::class, 'destroy'])->name('posts.destroy');

