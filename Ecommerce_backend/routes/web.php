<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProductController::class,'index']);

Route::prefix('products')-> controller(ProductController::class)->group(function () {
    Route::get('/', 'index' );
    Route::get('/create' , 'create' );
    Route::get('/{id}/{category?}', 'detail');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->controller(AdminController::class)->group(function(){

    Route::get('/', [AdminController::class,'index'])->name('admin.index');
    Route::get('/categories', [CategoryController::class,'create'])->name('admin.categories.create');

});   


