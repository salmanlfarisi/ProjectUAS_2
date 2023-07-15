<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
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

Route::get('/', [IndexController::class, 'index']);
Route::get('/pemesanan', [IndexController::class, 'pemesanan']);


Route::get('/admins', [AdminController::class, 'index']);
Route::get('/product', [AdminController::class, 'product']);
Route::get('/pesanan', [AdminController::class, 'pesanan']);

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('produk/edit/{id}', [ProdukController::class, 'edit']);
Route::put('/produk/update/{id}', [ProdukController::class, 'update']);
Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
