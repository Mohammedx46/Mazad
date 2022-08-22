<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    protected $fillable=[
        'products_id',
        'product_image_location',
    ];

    // Relationship To Products 
    public function product(){
        return $this->belongsTo(Products::class, 'products_id' );
    } 

    use HasFactory;
}
