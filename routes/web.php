<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\AdminController;

Route::get('/', [ProductController::class,'index']);

Route::get('/admin', [AdminController::class,'index']);

Route::post('/add-cart/{id}',[CartController::class,'addCart']);

Route::get('/cart',[CartController::class,'view']);

Route::get('/checkout',[OrderController::class,'checkout']);

Route::post('/place-order',[OrderController::class,'placeOrder']);

Route::get('/invoice/{id}',[InvoiceController::class,'download']);