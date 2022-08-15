<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contacts;
use App\Models\Products;

use Illuminate\Http\Request;
use App\Models\ProductImages;
use App\Models\Categories;
use function PHPUnit\Framework\returnSelf;

class AuctionController extends Controller
{

    // Main Page
    public function index()
    {
        $comingAuctions = Products::latest()->ComingAuctions(['ComingAuctions'])->paginate(3);
        $date =  now()->addDay('-3')->format('Y-m-d h:m:s');
        $liveAuctions = Products::latest()->LiveAuctions(['liveAuctions'=> $date])->paginate(3);
        // dd($liveAuctions);
        $authors = User::latest()->paginate(3);
        
        return view('index' , [
            "heading" => "الصفحة الرائيسية للمزاد",
            "products" => $liveAuctions,
            "categories" => Categories::all(),
            "comingAuctions" => $comingAuctions,
            "authors" => $authors,
        ]);
    }

    // Main Auction Details
    public function auction(Products $product)
    {
        $user = User::find($product->user_id);
        $category = Categories::find($product->categories_id);

        $date =  now()->addDay('-4')->format('Y-m-d h:m:s');
        $liveAuctions = Products::LiveAuctions(['liveAuctions'=> $date])->paginate(3);

        $is_bid = false;
        return view('mazad.auction-details', [
            "heading" => "تفاصيل المزاد",
            "product" => $product,
            "products" => $liveAuctions,

            "user" => $user,

            "category" => $category,
            "categories" => Categories::latest(),

            "is_bid" => $is_bid ,
            "auction_images" => ProductImages::all(),
        ]);
    }


    // Auction By Category Page
    public function auctionCategory()
    {
        $date =  now()->addDay('-4')->format('Y-d-m h:m:s');
        // $comingFeatures = Products::latest()->ComingFeatures(['comingFeatures'])->paginate(5);
        // $liveAuctions = Products::latest()->LiveAuctions(['liveAuctions'=> $date])->paginate(3);
        
        $products = Products::latest()->filter(request(['categoryId', 'search']))->paginate(5);

        return view('/mazad.auction-category',[
            "heading" => "مزادات حسب التصنيف",
            "products" => $products,
            "categories" => Categories::all(),
        ]);
    }


    // Show Live Auctions
    public function liveAuctions()
    {
        $date =  now()->addDay('-4')->format('Y-m-d h:m:s');
        $liveAuctions = Products::latest()->LiveAuctions(['liveAuctions'=> $date])->paginate(6);
        return view('mazad.live-auctions', [
            "heading" => "مزادات جارية",
            'products' => $liveAuctions,
        ]);
    }


    // Show coming Auctions
    public function comingAuctions()
    {
        $comingAuctions = Products::latest()->ComingAuctions(['ComingAuctions'])->paginate(5);
        return view('mazad.coming-auctions', [
            "heading" => "مزادات قادمة",
            'products' => $comingAuctions,
        ]);
    }
    
    // author Details Page
    public function author()
    {
        return view('mazad.author-details');
    }

    public function authors()
    {
        $authors = User::latest()->paginate(12);
        return view('mazad.authors',[
            "authors" => $authors,
        ]);
    }

    // Contact Page
    public function contact()
    {
        return view('mazad.contact');
    }

    // Contact Send Request Page
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'topic' => ['required'],
            'user_message' => ['required'],
        ]);

        $formFields['user_id'] = auth()->id() ;

        Contacts::create($formFields);

        return back()->with('success', 'تم إرسال طلبك بنجاح');
    }
}
