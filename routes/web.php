<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;

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


// ------------ Mazad ---------------------
// ----------------------------------------

Route::get('/', [AuctionController::class, 'index']);

Route::get('/auction-category', [AuctionController::class, 'auctionCategory']);

Route::get('/live-auctions', [AuctionController::class, 'liveAuctions']);

Route::get('/coming-auctions', [AuctionController::class, 'comingAuctions']);

Route::get('/admin', [AdminController::class, 'admin']);

Route::get('/contact', [AuctionController::class, 'contact']);

// Author
Route::get('/authors', [AuctionController::class, 'authors']);

// Route::get('/author/{author}', [AuctionController::class, 'author']);


// ------------ Products ------------------
// ----------------------------------------
Route::get('/productsShow', [ProductsController::class, 'index']);

// Create Product 
Route::get('/products/create', [ProductsController::class, 'create'])->middleware('auth');

Route::post('/products', [ProductsController::class, 'store']);

// Edit Product 
Route::get('/products/{product}/edit', [ProductsController::class, 'edit']);

Route::put('/products/{product}', [ProductsController::class, 'update']);

// Delete Product
Route::delete('/products/{product}', [ProductsController::class, 'delete']);

// ------------ Categories ----------------
// ----------------------------------------

Route::get('/categoriesShow', [CategoryController::class, 'index']);

// Create category 
Route::get('/categories/create', [CategoryController::class, 'create']);

Route::post('/categories', [CategoryController::class, 'store']);

// Edit category 
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit']);

Route::put('/categories/{category}', [CategoryController::class, 'update']);

// Delete category 
Route::delete('/categories/{category}', [CategoryController::class, 'delete']);


// ------------ Users ---------------------
// ----------------------------------------
Route::get('/usersShow', [UserController::class, 'index']);

// Create User 
Route::get('/users/create', [UserController::class, 'create']);

// Edit User 
Route::get('/users/{user}/edit', [UserController::class, 'edit']);

Route::put('/users/{user}', [UserController::class, 'update']);

// Delete user
Route::delete('/users/{user}', [UserController::class, 'delete']);



// ------------ User ---------------------
// ----------------------------------------

Route::get('/signup', [UserController::class, 'create'])->middleware('guest');

// Create User 
Route::post('/users', [UserController::class, 'store']);

// Login
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// logout
Route::get('/logout', [UserController::class, 'logout']);
