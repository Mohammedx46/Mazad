<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\ProductImages;

use App\Models\ProductCategories;
use function PHPUnit\Framework\returnSelf;

class AuctionController extends Controller
{

    public function index()
    {
        $date =  now()->addDay('-4')->format('Y-d-m h:m:s');
        $comingFeatures = Products::latest()->ComingFeatures(['comingFeatures'])->paginate(3);
        $liveAuctions = Products::latest()->Filter2(['liveAuctions'=> $date])->paginate(3);
        return view('index' , [
            "heading" => "All Auctions",
            "products" => $liveAuctions,
            "categories" => $liveAuctions,
            "comingFeatures" => $comingFeatures,
        ]);
    }

    public function auctionCategory()
    {
        // dd(request('search'));
        $comingFeatures = Products::latest()->ComingFeatures(['comingFeatures'])->paginate(5);
        $products = Products::latest()->filter(request(['categoryId', 'search']))->paginate(5);
        // dd($comingFeatures);
        return view('/mazad.auction-category',[
            "products" => $products,
            "categories" => ProductCategories::all(),
        ]);
    }

    public function auction(Request $request)
    {
        // dd($request);
        return view('mazad.auction-details', [
            "heading" => "All Auctions",
            "products" => Products::latest()->paginate(),
            "auction_images" => ProductImages::all(),
        ]);
    }

    public function contact()
    {
        return view('mazad.contact');
    }
}
