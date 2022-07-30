<?php

namespace App\Http\Controllers;

use App\Models\ProductCategories;
use App\Models\Products;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //

    public function index()
    {
        return view('index', [
            "heading" => "All Auctions",
            "products" => Products::latest()->paginate(),
            "categories" => ProductCategories::all(),
        ]);
    }
}
