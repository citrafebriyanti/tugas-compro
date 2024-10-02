<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogdetailController;


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







Route::get('/', [HomeController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

Route::get('/BlogDetail', [BlogDetailController::class, 'index'])->name('BlogDetail.index');