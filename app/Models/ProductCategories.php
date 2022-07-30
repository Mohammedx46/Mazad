<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productcategories extends Model
{
    protected $fillable =[
        'category_name',
        'category_description',
        'category_image_location',
    ];

    // Relationship To Products
    public function products()
    {
        return $this->hasMany(Products::class, 'category_id');
    }
    
    use HasFactory;
}
