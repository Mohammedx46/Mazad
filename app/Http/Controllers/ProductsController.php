<?php

namespace App\Http\Controllers;

use App\Models\Productcategories;
use Carbon\Carbon;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;


class ProductsController extends Controller
{
    //

    // Show all Products
    public function index(Request $request)
    {
        // dd($request);
        return view('index', [
            "heading" => "All Auctions",
            "products" => Products::latest()->paginate(),
        ]);
    }


    // Show Create Form
    public function create()
    {
        $categories = Productcategories::all();
        
        return view('mazad_admin.screens.products.add_product', [
            'categories' => $categories,
        ]);
    }

    // Store Product Data
    public function store(Request $request)
    {
        $date = Carbon::parse($request->bid_start_date);
        $threeDays = $date->addDays(3);
        $formFields = $request->validate([
            'category_id'=>'required',
        	'product_name'=> ['required', 'alpha'],
        	'product_short_description'=> ['required', 'alpha', 'max:255'],
        	'product_description'=> ['required'],
        	'product_start_price'=> ['required','numeric'],
        	'product_sell_now_price'=> ['required','numeric'],
		    'product_quantity'=> ['required', 'numeric'],
        	'product_start_date'=> ['required','date', 'after_or_equal:today'],
        	'product_end_date'=> ['required', 'required' , 'date' , 'before_or_equal:'. $threeDays ],
        	'product_main_image_location'=> 'required',
        	'is_product_sold'=> ['required', 'boolean'],
        ]);
        dd($formFields);
        Products::create($formFields);

        return redirect('/')->with('success', 'تم إضافة المنتج بنجاح');
    }

}
