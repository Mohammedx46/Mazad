<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable= [
        'category_id',
        'product_title',
        'product_short_description',
        'product_description',
        'product_start_price',
        'product_start_date',
        'product_end_date',
        'product_main_image_location'
    ];




    //------------------ Relationships ------------------
    // Relationship To User
    public function category()
    {
        return $this->belongsTo(ProductCategories::class, 'category_id');
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
