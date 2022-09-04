<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\BiddingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RolesController;

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
// ----------------------------------------


Route::get('/', [AuctionController::class, 'index']);

Route::get('/auction-details/{product}', [AuctionController::class, 'auction']);

// Show Auctions by Category
Route::get('/auction-category', [AuctionController::class, 'auctionCategory']);

Route::get('/live-auctions', [AuctionController::class, 'liveAuctions']);

Route::get('/coming-auctions', [AuctionController::class, 'comingAuctions']);


// Author
Route::get('/authors', [AuctionController::class, 'authors']);

// Route::get('/author/{author}', [AuctionController::class, 'author']);


// Contact us
Route::get('/contact', [AuctionController::class, 'contact']);

Route::post('/contacts/create' , [AuctionController::class, 'store']);

// ------------ Admin Management ----------
// ----------------------------------------
// ----------------------------------------

Route::get('/admin', [AdminController::class, 'admin'])->middleware('can:Control');


// ------------ Products ------------------
// ----------------------------------------
Route::group(['prefix'=> '/products','middleware' => 'can:Products'], function(){

    Route::get('/productsShow', [ProductsController::class, 'index']);
    
    // Create Product 
    Route::get('/create', [ProductsController::class, 'create'])->middleware('can:Admin');
    
    Route::post('/', [ProductsController::class, 'store']);
    
    // Edit Product 
    Route::get('/{product}/edit', [ProductsController::class, 'edit'])->middleware('can:Admin');
    
    Route::put('/{product}', [ProductsController::class, 'update']);
    
    // Delete Product
    Route::delete('/products/{product}', [ProductsController::class, 'delete']);
});


// ------------ Categories ----------------
// ----------------------------------------


Route::group(['prefix' => '/categories','middleware' => 'can:Categories'], function(){

    Route::get('/categoriesShow', [CategoryController::class, 'index']);
    
    // Create category 
    Route::get('/create', [CategoryController::class, 'create'])->middleware('can:Admin');
    
    Route::post('/', [CategoryController::class, 'store']);
    
    // Edit category 
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->middleware('can:Admin');
    
    Route::put('/{category}', [CategoryController::class, 'update']);
    
    // Delete category 
    Route::delete('/{category}', [CategoryController::class, 'delete']);
});


// ------------ Users ---------------------
// ----------------------------------------
Route::get('/usersShow', [UserController::class, 'index']);

// Create User 
Route::get('/users/create', [UserController::class, 'create']);

// Edit User 
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->middleware('can:Admin');

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

// Roles 
// Route::group(['prefix' =>'/roles', 'middleware' => 'can:Permissions'], function(){
Route::group(['prefix' =>'/roles','middleware' => 'can:Roles'], function(){

    // event(new \App\Events\Playground);
    Route::get('/', [RolesController::class , 'index']);

    Route::get('/create', [RolesController::class , 'create']);

    Route::post('/store', [RolesController::class , 'store']);

    Route::get('/{role}/edit', [RolesController::class , 'edit']);

    Route::put('/update/{role}', [RolesController::class , 'update']);

    Route::delete('/{role}', [RolesController::class , 'delete']);
});

// ------------ Bidding -------------------
// ----------------------------------------

Route::group(['prefix' => '/bidding'], function(){
    
    Route::get('/{product}', [BiddingController::class, 'isBidding']);

    Route::post('/bid/create/{product}', [BiddingController::class, 'storeBidding']);
});

Route::get('/ws', function(){
    return view('trySockets' , [
        'heading' => "Try WebSockets",
    ]);
});

// --------------- Bills ------------------
// ----------------------------------------
Route::group(['prefix'=> '/bill','middleware' => 'can:Bills'], function(){

    Route::get('/billsShow', [AdminController::class, 'index']);
    
    // Create Bill 
    Route::get('/create', [AdminController::class, 'create'])->middleware('can:Admin');
    
    Route::post('/', [AdminController::class, 'store']);
    
    // Edit Bill 
    Route::get('/{bill}/edit', [AdminController::class, 'edit'])->middleware('can:Admin');
    
    Route::put('/{bill}', [AdminController::class, 'update']);
    
    // Delete Bill
    Route::delete('/bills/{bill}', [AdminController::class, 'delete']);
});


// Route::post('/chat-message', function(\Illuminate\Http\Request $request){
//     event(new \App\Events\ChatMessageEvent($request->message));
//     dd($request->message);
//     return null;
// });