<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    //

    // Show all Products
    public function index(Request $request)
    {
        // dd($request);
        return view('index', [
            "heading" => "All Auctions",
            "products" => Products::all(),
        ]);
    }


}
