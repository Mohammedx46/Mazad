<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable= [
        'productcategories_id',
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

    // public function scopeFilter($query, array $filters)
    // {

    //     if ($filters['tag'] ?? false) {
    //         $query->where('tags', 'like', '%' . request('tag') . '%');
    //     }

    //     if ($filters['search'] ?? false) {
    //         $query->where('title', 'like', '%' . request('search') . '%')
    //             ->orWhere('description', 'like', '%' . request('search') . '%')
    //             ->orWhere('tags', 'like', '%' . request('search') . '%');
    //     }
    // }



    //------------------ Relationships ------------------
    // Relationship To User
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
