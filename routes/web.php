<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
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

use App\Http\Controllers\PageController;


Route::resource('books', BookController::class);
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::resource('pages',PageController::class);
Route::get('/', [PageController::class, 'index'])->name('pages.index');
Route::get('/pages/list', [PageController::class, 'list'])->name('pages.list');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::resource('categories', CategoryController::class);
Route::get('/categories', [CategoryController::class, 'create'])->name('categories.create');
Route::get('cart', [CartController::class, 'index'])->name('cart.index');
Route::post('cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('cart/update', [CartController::class, 'update'])->name('cart.update');
Route::post('cart/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/order/place', [OrderController::class, 'placeOrder'])->name('order.place');