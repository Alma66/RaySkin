<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    SaleController,
    ReviewController,
    ProductController,
    PaymentMethodController,
    PackController,
    CategoryController,
    BrandController,
    AdminController
};

// Agrupar rutas para Reviews
Route::prefix('reviews')->name('reviews.')->group(function () {
    Route::get('/', [ReviewController::class, 'index'])->name('index');
    Route::get('/create', [ReviewController::class, 'create'])->name('create');
    Route::post('/', [ReviewController::class, 'store'])->name('store');
    Route::get('/{id}', [ReviewController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [ReviewController::class, 'edit'])->name('edit');
    Route::put('/{id}', [ReviewController::class, 'update'])->name('update');
    Route::delete('/{id}', [ReviewController::class, 'destroy'])->name('destroy');
});

// Agrupar rutas para Users
Route::prefix('users')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/', [UserController::class, 'store'])->name('store');
    Route::get('/{id}', [UserController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('destroy');
});

// Agrupar rutas para Sales
Route::prefix('sales')->name('sales.')->group(function () {
    Route::get('/', [SaleController::class, 'index'])->name('index');
    Route::get('/create', [SaleController::class, 'create'])->name('create');
    Route::post('/', [SaleController::class, 'store'])->name('store');
    Route::get('/{id}', [SaleController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [SaleController::class, 'edit'])->name('edit');
    Route::put('/{id}', [SaleController::class, 'update'])->name('update');
    Route::delete('/{id}', [SaleController::class, 'destroy'])->name('destroy');
});

// Agrupar rutas para Products
Route::prefix('products')->name('products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/', [ProductController::class, 'store'])->name('store');
    Route::get('/{id}', [ProductController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('edit');
    Route::put('/{id}', [ProductController::class, 'update'])->name('update');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('destroy');
});

// Agrupar rutas para PaymentMethods
Route::prefix('payment-methods')->name('payment-methods.')->group(function () {
    Route::get('/', [PaymentMethodController::class, 'index'])->name('index');
    Route::get('/create', [PaymentMethodController::class, 'create'])->name('create');
    Route::post('/', [PaymentMethodController::class, 'store'])->name('store');
    Route::get('/{id}', [PaymentMethodController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [PaymentMethodController::class, 'edit'])->name('edit');
    Route::put('/{id}', [PaymentMethodController::class, 'update'])->name('update');
    Route::delete('/{id}', [PaymentMethodController::class, 'destroy'])->name('destroy');
});

// Agrupar rutas para Packs
Route::prefix('packs')->name('packs.')->group(function () {
    Route::get('/', [PackController::class, 'index'])->name('index');
    Route::get('/create', [PackController::class, 'create'])->name('create');
    Route::post('/', [PackController::class, 'store'])->name('store');
    Route::get('/{id}', [PackController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [PackController::class, 'edit'])->name('edit');
    Route::put('/{id}', [PackController::class, 'update'])->name('update');
    Route::delete('/{id}', [PackController::class, 'destroy'])->name('destroy');
});

// Agrupar rutas para Categories
Route::prefix('categories')->name('categories.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/', [CategoryController::class, 'store'])->name('store');
    Route::get('/{id}', [CategoryController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('edit');
    Route::put('/{id}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
});

// Agrupar rutas para Brands
Route::prefix('brands')->name('brands.')->group(function () {
    Route::get('/', [BrandController::class, 'index'])->name('index');
    Route::get('/create', [BrandController::class, 'create'])->name('create');
    Route::post('/', [BrandController::class, 'store'])->name('store');
    Route::get('/{id}', [BrandController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [BrandController::class, 'edit'])->name('edit');
    Route::put('/{id}', [BrandController::class, 'update'])->name('update');
    Route::delete('/{id}', [BrandController::class, 'destroy'])->name('destroy');
});

// Agrupar rutas para Admins
Route::prefix('admins')->name('admins.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/create', [AdminController::class, 'create'])->name('create');
    Route::post('/', [AdminController::class, 'store'])->name('store');
    Route::get('/{id}', [AdminController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [AdminController::class, 'edit'])->name('edit');
    Route::put('/{id}', [AdminController::class, 'update'])->name('update');
    Route::delete('/{id}', [AdminController::class, 'destroy'])->name('destroy');
});
