<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use App\Models\ProductCategories;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class CategoryController extends Controller
{
    //

    public function auctionCategory()
    {
        return view('mazad.auction-details', [
            "heading" => "All Auctions",
            "categories" => ProductCategories::all(),
            "products" => Products::latest()->paginate(2),
        ]);
    }



}
