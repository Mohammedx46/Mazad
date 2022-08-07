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


Route::get('/', [AuctionController::class, 'index']);

Route::get('/auction-category', [AuctionController::class, 'auctionCategory']);

// Route::get('/auction-details', [AuctionController::class, 'auction']);

Route::get('/admin', [AdminController::class, 'admin']);

Route::get('/contact', [AuctionController::class, 'contact']);

// ------------ Users ---------------------
// ----------------------------------------
Route::get('/usersShow', [UserController::class, 'index']);

Route::get('/users/create', [UserController::class, 'userCreate']);

Route::get('/users/{user}/edit', [UserController::class, 'edit']);

Route::put('/users/{user}', [UserController::class, 'update']);
// Delete user
Route::delete('/users/{user}', [UserController::class, 'delete']);



// ------------ Products ------------------
// ----------------------------------------
Route::get('/productsShow', [ProductsController::class, 'index']);

Route::get('/products/create', [ProductsController::class, 'create'])->middleware('auth');

Route::post('/products', [ProductsController::class, 'store']);

// Edit Product 
Route::get('/products/{product}/edit', [ProductsController::class, 'edit']);

Route::put('/products/{product}', [ProductsController::class, 'update']);

// Delete category
Route::delete('/products/{product}', [ProductsController::class, 'delete']);

// ------------ Categories ----------------
// ----------------------------------------

Route::get('/categoriesShow', [CategoryController::class, 'index']);

Route::get('/categories/create', [CategoryController::class, 'create']);

Route::post('/categories', [CategoryController::class, 'store']);

// Edit category 
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit']);

Route::put('/categories/{category}', [CategoryController::class, 'update']);

// Delete category 
Route::delete('/categories/{category}', [CategoryController::class, 'delete']);


// ------------ User ---------------------
// ----------------------------------------

Route::get('/signup', [UserController::class, 'create'])->middleware('guest');

Route::post('/users', [UserController::class, 'store']);

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/logout', [UserController::class, 'logout']);
