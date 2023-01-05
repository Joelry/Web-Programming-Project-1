<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionsController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart/delete/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');

Route::get('/transactions', [TransactionsController::class, 'transactions'])->name('transactions');

Route::get('/profile', function () {
    $user = Auth::user();
    return view('profile', compact('user'));
})->name('profile');

Route::get('/category/{id}', [CategoryController::class, 'products'])->name('category.products');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/products/manage', [ProductController::class, 'index'])->name('products.manage');
Route::get('/products/new', [ProductController::class, 'create'])->name('products.new');
Route::post('/products/new', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/products/edit/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/products/delete/{id}', [ProductController::class, 'destroy'])->name('products.delete');
