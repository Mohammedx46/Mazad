<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuctionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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


Route::get('/', [MainController::class, 'index']);

Route::get('/auction-category', [CategoryController::class, 'auctionCategory']);

Route::get('/auction-details', [AuctionController::class, 'auction']);

Route::get('/admin', [AdminController::class, 'admin']);

Route::get('/user/create', [AdminController::class, 'userCreate']);

// Create Product 
Route::get('/productsShow', [ProductsController::class, 'index']);

Route::get('/products/create', [ProductsController::class, 'create']);

Route::post('/products', [ProductsController::class, 'store']);

// Edit Product 
Route::post('/products/{product}/edit', [ProductsController::class, 'edit']);

// -------------- Categories --------------
// ----------------------------------------

Route::get('/categories/create', [CategoryController::class, 'create']);

Route::post('/categories', [CategoryController::class, 'store']);
