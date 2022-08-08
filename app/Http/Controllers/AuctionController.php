<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Products;
use Illuminate\Http\Request;

use App\Models\ProductImages;
use App\Models\ProductCategories;
use function PHPUnit\Framework\returnSelf;

class AuctionController extends Controller
{

    public function index()
    {
        $comingAuctions = Products::latest()->ComingAuctions(['ComingAuctions'])->paginate(3);
        $date =  now()->addDay('-4')->format('Y-d-m h:m:s');
        $liveAuctions = Products::latest()->LiveAuctions(['liveAuctions'=> $date])->paginate(3);
        $authors = User::latest()->paginate(3);
        
        return view('index' , [
            "heading" => "All Auctions",
            "products" => $liveAuctions,
            "categories" => ProductCategories::all(),
            "comingAuctions" => $comingAuctions,
            "authors" => $authors,
        ]);
    }

    public function auctionCategory()
    {
        $date =  now()->addDay('-4')->format('Y-d-m h:m:s');
        $comingFeatures = Products::latest()->ComingFeatures(['comingFeatures'])->paginate(5);
        $liveAuctions = Products::latest()->LiveAuctions(['liveAuctions'=> $date])->paginate(3);
        
        $products = Products::latest()->filter(request(['categoryId', 'search']))->paginate(5);

        return view('/mazad.auction-category',[
            "products" => $products,
            "categories" => ProductCategories::all(),
        ]);
    }

    // Show Live Auctions
    public function liveAuctions()
    {
        $date =  now()->addDay('-4')->format('Y-d-m h:m:s');
        $liveAuctions = Products::latest()->LiveAuctions(['liveAuctions'=> $date])->paginate(3);
        return view('mazad.live-auctions', [
            'products' => $liveAuctions,
        ]);
    }

    // Show Live Auctions
    public function comingAuctions()
    {
        $comingAuctions = Products::latest()->ComingAuctions(['ComingAuctions'])->paginate(5);
        return view('mazad.coming-auctions', [
            'products' => $comingAuctions,
        ]);
    }

    public function auction(Request $request)
    {
        return view('mazad.auction-details', [
            "heading" => "كل المزادات",
            "products" => Products::latest()->paginate(),
            "auction_images" => ProductImages::all(),
        ]);
    }

    public function author()
    {
        return view('mazad.author-details', [

        ]);
    }

    public function authors()
    {
        $authors = User::latest()->paginate(9);
        return view('mazad.authors',[
            "authors" => $authors,
        ]);
    }

    public function contact()
    {
        return view('mazad.contact');
    }
}
