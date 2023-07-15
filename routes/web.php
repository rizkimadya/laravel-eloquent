<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// relasi one to one untuk table user dan phone
Route::get('/', [UserController::class, 'index']);

// relasi one to many untuk table post dan comment
Route::get('/posts', [PostController::class, 'index']);
