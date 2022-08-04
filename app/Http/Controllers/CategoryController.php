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
        return view('mazad.auction-category', [
            "heading" => "All Auctions",
            "categories" => ProductCategories::all(),
            "products" => Products::latest()->paginate(2),
        ]);
    }


    // Show Create Form
    public function create()
    {
        return view('mazad_admin.screens.products.product_category.add_category');
    }

    // Store Product Data
    public function store(Request $request)
    {
        // dd($request->all());
        $formFields = $request->validate([
        	'category_name'=> ['required', 'alpha'],
        	'category_description'=> ['required'],
        ]);

        $formFields['category_image_location'] = 'act1.png';
        
        Productcategories::create($formFields);
        
        return redirect('/')->with('success', 'تم إضافة تصنيف بنجاح');
    }



}
