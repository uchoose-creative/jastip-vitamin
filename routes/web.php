<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;



Route::get('/', [HomeController::class, 'index']);

Route::get('/login', function () {return view('login');});

Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', function () {return view('register');});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/catalog', [CatalogController::class, 'index']);

Route::get('/cart',[CartController::class, 'index'])->middleware('auth');
Route::post('/add-to-cart/{id}',[CartController::class, 'add'])->middleware('auth');

Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->middleware('admin');

Route::get('/admin/products', [ProductController::class, 'index'])->middleware('admin');

Route::get('/admin/products/create', [ProductController::class, 'create'])->middleware('admin');

Route::post('/admin/products/store', [ProductController::class, 'store'])->middleware('admin');

Route::delete('/admin/products/delete/{id}', [ProductController::class, 'delete'])->middleware('admin');

Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->middleware('admin');

Route::post('/admin/products/update/{id}', [ProductController::class, 'update'])->middleware('admin');

Route::post('/cart/increase/{id}', [CartController::class, 'increase']);
Route::post('/cart/decrease/{id}', [CartController::class, 'decrease']);

Route::post('/cart/delete/{id}', [CartController::class, 'delete'])->middleware('auth');

    
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/profile',
[ProfileController::class,'edit'])->middleware('auth');

Route::post('/profile/update',
[ProfileController::class,'update'])->middleware('auth');

Route::get('/auth/google',
[AuthController::class, 'googleLogin']);

Route::get('/auth/google/callback',
[AuthController::class, 'googleCallback']);

