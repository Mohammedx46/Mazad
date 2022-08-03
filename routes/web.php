<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuctionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CategoryController;

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
