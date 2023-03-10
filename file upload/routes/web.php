<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/home', [PostController::class, 'index'])->name('home');
Route::get('posts/create', [PostController::class, 'create']);
Route::post('post', [PostController::class, 'store']);
Route::get('posts/{post}/edit', [PostController::class, 'edit']);
Route::get('posts/{post}', [PostController::class, 'show']);

