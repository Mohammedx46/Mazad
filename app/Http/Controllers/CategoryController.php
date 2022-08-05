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
    public function index()
    {
        $categories = ProductCategories::latest() ;
        $count = ProductCategories::count();
        return view('mazad_admin.screens.products.product_category.categories', [
            "heading" => "All Categories",
            "categories" => $categories->paginate(4),
            "allCategoriesCount" => $count,
        ]);
    }

    // Show Create Form
    public function create()
    {
        $categories = ProductCategories::latest();
        $count = ProductCategories::count();
        return view('mazad_admin.screens.products.product_category.add_category', [
            "categories" => $categories->paginate(3),
            "allCategoriesCount" => $count,
        ]);
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
        
        ProductCategories::create($formFields);
        
        return redirect('/categoriesShow')->with('success', 'تم إضافة التصنيف بنجاح');
    }

    // Show Create Form
    public function edit(ProductCategories $category)
    {
        return view('mazad_admin.screens.products.product_category.edit_category', [
            'category' => $category,
        ]);
    }

    // Store Product Data
    public function update(Request $request, ProductCategories $category)
    {
        $formFields = $request->validate([
            'category_name'=> ['required', 'alpha'],
            'category_description'=> ['required'],
        ]);

        // Store Image
        if ($request->hasFile('category_image_location')) {
            $formFields['category_image_location'] = $request->file('category_image_location')->store('category_image_locations', 'public');
        }
        
        $category->update($formFields);
        
        return redirect('/categoriesShow')->with('success', 'تم تعديل  التصنيف بنجاح');
    }

    // Delete Category
    public function delete(ProductCategories $category)
    {
        $category->delete();
        return back()->with('danger' , "تم حذف التصنيف بنجاح");
    }
}
