<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable= [
        'productcategories_id',
        'user_id',
        'product_name',
        'product_short_description',
        'product_description',
        'product_start_price',
        'product_sell_now_price',
        'product_quantity',
        'auction_start_date',
        'auction_end_date',
        'product_main_image_location',
        'is_product_sold',
    ];

    public function scopeFilter($query, array $filters)
    {
        // dd($filters);
        if ($filters['categoryId'] ?? false) {
            $query->where('ProductCategories_id', 'like', '%' . request('categoryId') . '%');
        }

        if ($filters['search'] ?? false) {
            $query->where('product_name', 'like', '%' . request('search') . '%')
                ->orWhere('product_short_description', 'like', '%' . request('search') . '%')
                ->orWhere('product_description', 'like', '%' . request('search') . '%');
        }
    }

    public function scopeFilter2($query, array $filters)
    {
        if ($filters['liveAuctions'] ?? true) {
            // $query->where('auction_start_date', '<=',  today()->format('Y-m-d h:m:s'));
            $query->whereBetween('auction_start_date', [$filters['liveAuctions'], today()->format('Y-m-d h:m:s')] );
            // $query->whereBetween('auction_start_date' , ['2022-08-22 00:50:28' , today()->format('Y-m-d h:m:s')] );
            // $query->where('auction_start_date' , 'Between'  , $filters['liveAuctions']. 'and' . today()->format('Y-m-d h:m:s') );
            // $query->whereBetween('auction_start_date', ['2022-08-23 00:50:28' , '2022-08-06 06:08:36'])->first();
        }
    }

    public function scopeComingFeatures($query , array $filters)
    {
        if ($filters['comingFeatures'] ?? true) {
            $query->where('auction_start_date', '>=' ,  \Carbon\Carbon::tomorrow());
        }
    }


    //------------------ Relationships ------------------
    // Relationship To User

    public function user()
    {
        return $this->belongsTo(Users::class, 'user_id');
    }
    
    public function category()
    {
        return $this->belongsTo(ProductCategories::class, 'productcategories_id');
    }

    // Relationship To auction
    public function auction()
    {   
        return $this->hasMany(Auction::class,'products_id');
    }

    // Relationship To images
    public function images()
    {
        return $this->hasMany(ProductImages::class, 'products_id');
    }

    // Relationship To documents
    // Relationship To images
    public function documents()
    {
        return $this->hasMany(ProductDocuments::class, 'products_id');
    }

    use HasFactory;
}
