<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProductController::class,'index']);

Route::get('products/{id}/{category?}',[ProductController::class,'detail'] );


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->group(function(){

    Route::get('/', [AdminController::class,'index'])->name('admin.index');
    Route::get('/categories', [CategoryController::class,'create'])->name('admin.categories.create');
    Route::post('/categories/store', [CategoryController::class,'store'])->name('admin.categories.store');

    Route::get('products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('products/store', [ProductController::class,'store'])->name('admin.products.store');

    Route::get('products', [ProductController::class,'table'])->name('admin.products.table');

    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

    Route::get('/brands', [BrandController::class, 'index'])->name('admin.brands.index');
    Route::get('/brands/create', [BrandController::class, 'create'])->name('admin.brands.create');
    Route::post('/brands', [BrandController::class, 'store'])->name('admin.brands.store');

    Route::get('/brands/{id}/edit', [BrandController::class, 'edit'])->name('admin.brands.edit');
    Route::put('/brands/{id}', [BrandController::class, 'update'])->name('admin.brands.update');

    Route::delete('/brands/{id}', [BrandController::class, 'destroy'])->name('admin.brands.destroy');




});   

