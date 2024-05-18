<?php

use App\Livewire\Cart;
use App\Livewire\CheckoutStatus;
use App\Livewire\Product;
use App\Livewire\StoreFront;
use App\Livewire\ViewOrder;
use App\Mail\OrderConfirmation;
use App\Models\Order;
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

Route::get('/', StoreFront::class)->name('home');
Route::get('/product/{productId}', Product::class)->name('product');
Route::get('/cart', Cart::class)->name('cart');
Route::get('/checkout-status', CheckoutStatus::class)->name('checkout-status');
Route::get('/order/{orderId}', ViewOrder::class)->name('view-order');
Route::get('/preview', function () {
    $order = Order::first();
    return new OrderConfirmation($order);
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
