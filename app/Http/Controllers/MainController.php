<?php

namespace App\Http\Controllers;

use App\Models\ProductCategories;
use App\Models\Products;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //

    public function index(Products $product)
    {
        // $products = Products::all();
        // foreach($products as $product)
        // {
        //     dd($product->product_main_image_location);
        // }
        

        return view('index', [
            "heading" => "All Auctions",
            "products" => Products::latest()->paginate(3),
            "categories" => ProductCategories::all(),
        ]);
    }
}
