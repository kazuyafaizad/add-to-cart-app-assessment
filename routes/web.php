<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/add-product', [ProductController::class, 'create']);

Route::post('/add-product', [ProductController::class, 'store']);

Route::get('/product', [ProductController::class, 'index']);


Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::post('/cart/{id}', [CartController::class, 'store'])->name('cart.add');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::post('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
