<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\BiddingController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PaymentController;

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

Route::get('/endAuction/{product}', [AuctionController::class, 'endAuction']);

// Show Auctions by Category
Route::get('/auction-category', [AuctionController::class, 'auctionCategory']);

Route::get('/live-auctions', [AuctionController::class, 'liveAuctions']);

Route::get('/coming-auctions', [AuctionController::class, 'comingAuctions']);


// Author
Route::get('/authors', [AuctionController::class, 'authors']);

// Route::get('/author/{author}', [AuctionController::class, 'author']);


// Contact us
Route::get('/contact', [AuctionController::class, 'contact'])->middleware("auth");

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
    Route::get('/create', [ProductsController::class, 'create']);
    
    Route::post('/', [ProductsController::class, 'store']);
    
    // Edit Product 
    Route::get('/{product}/edit', [ProductsController::class, 'edit'])->middleware(['can:Admin']);
    
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
Route::get('/usersShow', [UserController::class, 'index'])->middleware('auth');

// Create User 
Route::get('/users/create', [UserController::class, 'create'])->middleware('can:Admin');

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

// Roles 
// Route::group(['prefix' =>'/roles', 'middleware' => 'can:Permissions'], function(){
Route::group(['prefix' =>'/roles','middleware' => 'can:Roles'], function(){

    // event(new \App\Events\Playground);
    Route::get('/', [RolesController::class , 'index']);

    Route::get('/create', [RolesController::class , 'create'])->middleware('can:Admin');

    Route::post('/store', [RolesController::class , 'store']);

    Route::get('/{role}/edit', [RolesController::class , 'edit'])->middleware('can:Admin');

    Route::put('/update/{role}', [RolesController::class , 'update']);

    Route::delete('/{role}', [RolesController::class , 'delete'])->middleware('can:Admin');
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

    Route::get('/billsShow', [BillController::class, 'index']);
    
    // Create Bill 
    Route::get('/create', [BillController::class, 'create'])->middleware('can:Admin');
    
    Route::post('/', [BillController::class, 'store']);
    
    // Edit Bill 
    Route::get('/{bill}/edit', [BillController::class, 'edit'])->middleware('can:Admin');
    
    Route::put('/{bill}', [BillController::class, 'update']);
    
    // Delete Bill
    Route::delete('/bills/{bill}', [AdminController::class, 'delete']);
});


// Route::post('/chat-message', function(\Illuminate\Http\Request $request){
//     event(new \App\Events\ChatMessageEvent($request->message));
//     dd($request->message);
//     return null;
// });

// route for processing payment
Route::post('/paypal', [PaymentController::class, 'payWithpaypal']);

// route for check status of the payment
Route::get('/status', [PaymentController::class, 'getPaymentStatus']);
