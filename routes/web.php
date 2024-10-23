<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogdetailController;
use App\Http\Controllers\Backend\BlogController as BackendBlogController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\layananController;



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
Route::get('backend/blog',[BackendBlogController::class,'index'])->name('backend.blog');
Route::get('backend/slider',[SliderController::class,'index'])->name('backend.slider');
Route::get('backend/layanan',[LayananController::class,'index'])->name('backend.layanan');
route::get('backend/blog/tambah',[BackendBlogController::class,'tambah'])->name('backend.blog.tambah');
route::post('backend/blog/aksi_tambah',[BackendBlogController::class,'aksi_tambah'])->name('backend.blog.aksi_tambah');
// route edit blog
Route::get('backend/blog/edit{id}',[BackendBlogController::class, 'edit'])->name('backend.blog.edit');
Route::post('backend/blog/aksi_edit/{id}',[BackendBlogController::class, 'aksi_edit'])->name('backend.blog.aksi_edit');
   
    