<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    public $table = "bill";

    protected $fillable = [
        "user_id",
        "comment",
        "is_bill_payed",
    ];


    // Relationship To bill
    public function billData()
    {   
        return $this->hasMany(BillData::class,'bill_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

}
