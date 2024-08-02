<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WalletController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//wallets
Route::middleware('auth')->group(function() {
    Route::get('/deposit-view', [WalletController::class, 'deposit_view'])->name('deposit.view');
    Route::post('/deposit', [WalletController::class, 'deposit'])->name('deposit');
    Route::get('/withdraw-view', [WalletController::class, 'withdraw_view'])->name('withdraw.view');
    Route::post('/withdraw', [WalletController::class, 'withdraw'])->name('withdraw');

});

//products
Route::middleware('auth')->group(function() {
    Route::get('/products', [ProductController::class, 'products'])->name('products');
    Route::get('/create-new-product', [ProductController::class, 'create_product_view'])->name('create.newproduct');
});

require __DIR__.'/auth.php';
