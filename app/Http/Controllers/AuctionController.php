<?php

namespace App\Http\Controllers;

use App\Models\Auctions;
use App\Models\AuctionUsers;
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
        if ( $product->is_product_sold == 1 || $product->auction_end_date <= now() )
        {
            return redirect('/');
        }
        $user = User::find($product->user_id);
        $category = Categories::find($product->categories_id);

        $liveAuctions = Products::latest()->paginate(3);

        $auctionId = Auctions::where('product_id', $product->id)->value('id');

        $auctionUsers = AuctionUsers::where('auction_id' , $auctionId)->get();

        return view('mazad.auction-details', [
            "heading" => "تفاصيل المزاد",
            "product" => $product,
            "products" => $liveAuctions,

            "user" => $user,

            "category" => $category,

            'auctionId' => $auctionId, 
            "auctionUsers" => $auctionUsers,
        ]);
    }

    public function endAuction(Products $product)
    {
        $user = User::find($product->user_id);
        $category = Categories::find($product->categories_id);

        $liveAuctions = Products::latest()->paginate(3);

        $auctionId = Auctions::where('product_id', $product->id)->value('id');
        $auctionUsers = AuctionUsers::where('auction_id' , $auctionId)->get();
        // End Auction Code 
        // ----------------
        
        // Get Winner in Auction who has the max Price
        $maxUserPrice =  AuctionUsers::where('auction_id' , '=' , $this->auctionId ) -> max('user_price');
        $winUsers = AuctionUsers::where('user_price' , '=' , $maxUserPrice )->get();
        
        //Find product 
        Products::find($this->product->id)->update(['is_product_sold' => 1]);
        
        return view('mazad.end-auction', [
            "heading" => "تفاصيل المزاد",
            "product" => $product,
            "products" => $liveAuctions,

            "user" => $user,
            "winUsers"=> $winUsers,
            "category" => $category,
            'auctionId' => $auctionId, 
            "auctionUsers" => $auctionUsers,
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
        $liveAuctions = Products::latest()->LiveAuctions(['liveAuctions'=> $date])->paginate(3);
        $categories = Categories::all();
        return view('mazad.live-auctions', [
            "heading" => "مزادات جارية",
            "products" => $liveAuctions,
            "categories" => $categories,
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
        return view('mazad.author-details', [
            "heading" => 'تفاصيل المورد',
        ]);
    }

    public function authors()
    {
        $authors = User::latest()->where('join' , 'products' , 'where' , 'user_id' , '=' , 'user_id')
        
        ->paginate(5);
        dd($authors);
        return view('mazad.authors',[
            "heading" => 'الموردين',
            "authors" => $authors,
        ]);
    }

    // Contact Page
    public function contact()
    {
        return view('mazad.contact', [
            'heading' => 'للتواصل',
        ]);
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
