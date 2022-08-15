<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable =[
        'category_name',
        'category_description',
        'category_image_location',
    ];

    // Relationship To Products
    public function products()
    {
        return $this->hasMany(Products::class, 'categories_id');
    }
    
    use HasFactory;
}
