<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDocuments extends Model
{

    protected $fillable =[
        'products_id',
        'product_document_location',
    ];

    public function product(){
        return $this->belongsTo(Products::class,'products_id');
    }

    use HasFactory;
}
