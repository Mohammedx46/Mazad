<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use App\Models\Categories;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Categories::latest() ;
        $count = Categories::count();
        return view('mazad_admin.products.product_category.categories', [
            "heading" => "All Categories",
            "categories" => $categories->paginate(4),
            "allCategoriesCount" => $count,
        ]);
    }

    // Show Create Form
    public function create()
    {
        $categories = Categories::latest()->paginate(3);
        $count = Categories::count();
        return view('mazad_admin.products.product_category.add_category', [
            "categories" => $categories,
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
        
        Categories::create($formFields);
        
        return redirect('/categories/categoriesShow')->with('success', 'تم إضافة التصنيف بنجاح');
    }

    // Show Create Form
    public function edit(Categories $category)
    {
        return view('mazad_admin.products.product_category.edit_category', [
            'category' => $category,
        ]);
    }

    // Store Product Data
    public function update(Request $request, Categories $category)
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
        
        return redirect('/categories/categoriesShow')->with('success', 'تم تعديل  التصنيف بنجاح');
    }

    // Delete Category
    public function delete(Categories $category)
    {
        $category->delete();
        return back()->with('danger' , "تم حذف التصنيف بنجاح");
    }
}
