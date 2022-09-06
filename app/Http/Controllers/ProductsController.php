<?php

namespace App\Http\Controllers;

use App\Models\Auctions;
use App\Models\categories;
use Carbon\Carbon;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;


class ProductsController extends Controller
{
    // Show all Products
    public function index()
    {
        // dd($request);
        $count = Products::where('is_product_sold','=','0')->count();
        $products = Products::latest()->filter(request(['search']))->paginate(5);

        return view('mazad_admin.products.products', [
            "heading" => "All Products",
            "products" => $products,
            "allProductsCount" => $count,
        ]);
    }


    // Create Product
    public function create()
    {
        
        return view('mazad_admin.products.add_product', [
            'categories' => Categories::all(),
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $date = Carbon::parse($request->auction_start_date);
        $fourDays = $date->addDays(4);
        
        
        $formFields = $request->validate([
            'categories_id'=>['required'],
            'product_name'=> ['required'],
        	'product_short_description'=> ['required', 'max:255'],
        	'product_description'=> ['required'],
        	'product_start_price'=> ['required','numeric'],
        	'product_sell_now_price'=> ['required','numeric'],
		    'product_quantity'=> ['required', 'numeric'],
        	'auction_start_date'=> ['required','date', 'after:today'],
        	'auction_end_date'=> ['required', 'required' , 'date' , 'before_or_equal:'. $fourDays ],
        ]);
        
        $formFields['is_product_sold'] = 0 ;
        $formFields['user_id'] = auth()->id();
        // $formFields['user_id'] = 1;

        // Store Image
        if ($request->hasFile('product_main_image_location')) {

            $formFields['product_main_image_location'] = $request->file('product_main_image_location')->store('product_main_image_locations', 'public');
        }

        $product = Products::create($formFields);
        $auctionFields['product_id'] = $product->id;
        $auctionFields['auction_current_price'] = $formFields['product_start_price'];
        $auctionFields['auction_status'] = 0 ;

        Auctions::create($auctionFields);
        return redirect('/')->with('success', 'تم إضافة المنتج بنجاح');
    }


    // Show Edit Form
    public function edit(Products $product)
    {
        return view('mazad_admin.products.edit_product', [
            'product' => $product,
            'categories' => Categories::all(),
        ]);
    }

    public function update(Request $request, Products $product)
    {
        if ($product->user_id != auth()->id())
        {
            abort('403', 'عملية غير مصرح بها');
        }

        $date = Carbon::parse($request->auction_start_date);
        $fourDays = $date->addDays(4);        
        
        $formFields = $request->validate([
            'categories_id'=>['required'],
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
        if (!$product->user_id != auth()->id())
        {
            abort('403', 'عملية غير مصرح بها');
        }

        $product->delete();
        return back()->with('danger' , "تم حذف المنتج بنجاح");
    }

}
