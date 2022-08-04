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
        return view('mazad_admin.screens.products.products', [
            "heading" => "All Products",
            "products" => Products::latest()->paginate(6),
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
        $date = Carbon::parse($request->auction_start_date);
        $fourDays = $date->addDays(4);
        
        
        $formFields = $request->validate([
            'productcategories_id'=>['required'],
            'product_name'=> ['required', 'alpha'],
        	'product_short_description'=> ['required', 'alpha', 'max:255'],
        	'product_description'=> ['required'],
        	'product_start_price'=> ['required','numeric'],
        	'product_sell_now_price'=> ['required','numeric'],
		    'product_quantity'=> ['required', 'numeric'],
        	'auction_start_date'=> ['required','date', 'after:today'],
        	'auction_end_date'=> ['required', 'required' , 'date' , 'before_or_equal:'. $fourDays ],
        ]);
        
        $formFields['is_product_sold'] = 0 ;

        // Store Image
        if ($request->hasFile('product_main_image_location')) {

            $formFields['product_main_image_location'] = $request->file('product_main_image_location')->store('product_main_image_locations', 'public');
        }

        Products::create($formFields);
        
        return redirect('/')->with('success', 'تم إضافة المنتج بنجاح');
    }

    // Show Edit Form

}
