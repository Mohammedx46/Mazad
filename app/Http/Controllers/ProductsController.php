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
    public function index()
    {
        // dd($request);
        $products = Products::latest() ;
        $count = Products::where('is_product_sold','=','0')->count();
        return view('mazad_admin.screens.products.products', [
            "heading" => "All Products",
            "products" => $products->paginate(5),
            "allProductsCount" => $count,
        ]);
    }


    // Create Product
    public function create()
    {
        
        return view('mazad_admin.screens.products.add_product', [
            'categories' => ProductCategories::all(),
        ]);
    }

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
    public function edit(Products $product)
    {
        return view('mazad_admin.screens.products.edit_product', [
            'product' => $product,
            'categories' => ProductCategories::all(),
        ]);
    }

    public function update(Request $request, Products $product)
    {
        $date = Carbon::parse($request->auction_start_date);
        $fourDays = $date->addDays(4);
        
        
        $formFields = $request->validate([
            'productcategories_id'=>['required'],
            'product_name'=> ['required', 'max:50'],
        	'product_short_description'=> ['required', 'max:255'],
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

        $product->update($formFields);
        
        return redirect('/productsShow')->with('success', 'تم تعديل  المنتج بنجاح');
    }

    // Delete Product
    public function delete(Products $product)
    {
        $product->delete();

        return back()->with('danger' , "تم حذف المنتج بنجاح");
    }

}
