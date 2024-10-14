<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PurchaseOrderController;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('dashboard.index'); // Halaman dashboard utama
})->name('home');

// Rute untuk admin dengan prefix 'admin'
Route::prefix('admin')->group(function () {
    // Rute untuk dashboard admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    
    // Rute untuk resource users
    Route::resource('/users', UserController::class);
    
    // Rute untuk resource suppliers
    Route::resource('/suppliers', SupplierController::class);
    
    // Rute untuk resource materials di dalam admin
    Route::resource('/materials', MaterialController::class);
    
    // Rute untuk resource purchase orders
    Route::resource('/purchase-orders', PurchaseOrderController::class);
    
    // Rute custom untuk purchase orders (opsional)
    Route::get('/purchase-orders/custom', [PurchaseOrderController::class, 'customMethod'])->name('purchase-orders.custom');
    
    // Rute untuk menghitung jumlah pengguna
    Route::get('/users/count', [UserController::class, 'countRowData'])->name('users.count');
});

// Rute untuk materials di luar admin prefix
Route::get('/material', [MaterialController::class, 'index'])->name('material.index');

// Rute untuk suppliers di luar admin prefix
Route::get('/suppliers', [SupplierController::class, 'index'])->name('suppliers.index');

// Rute untuk dashboard di luar admin prefix
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Route untuk Purchase Order
Route::get('/purchase-order', [PurchaseOrderController::class, 'index'])->name('purchase_orders.index');

// Rute untuk tampilan AdminLTE
Route::get('/adminlte', function () {
    return view('adminlte');
})->name('adminlte'); // Disarankan untuk memberikan nama pada route

?>
