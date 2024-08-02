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

Route::get('/apuntosugar/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/apuntosugar/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/apuntosugar/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/apuntosugar/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//wallets
Route::middleware('auth')->group(function() {
    Route::get('/apuntosugar/deposit-view', [WalletController::class, 'deposit_view'])->name('deposit.view');
    Route::post('/apuntosugar/deposit', [WalletController::class, 'deposit'])->name('deposit');
    Route::get('/apuntosugar/withdraw-view', [WalletController::class, 'withdraw_view'])->name('withdraw.view');
    Route::post('/apuntosugar/withdraw', [WalletController::class, 'withdraw'])->name('withdraw');

});

//products
Route::middleware('auth')->group(function() {
    Route::get('/apuntosugar/products', [ProductController::class, 'products'])->name('products');
    Route::get('/apuntosugar/create-new-product', [ProductController::class, 'create_product_view'])->name('create.newproduct');
    Route::post('/apuntosugar/create', [ProductController::class, 'create'])->name('create');
});

require __DIR__.'/auth.php';
