<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'password',
        'user_status',
        'subscription_type',
        'insurance_amount',
		'is_bidding',
        'is_confirm_terms',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

     // Relationship To AuctionUsers    
    public function auction_user()
    {
        return $this->hasMany(AuctionUsers::class, 'user_id');
    }

    // Relationship To Products 
    public function products()
    {
        return $this->hasMany(Products::class, 'products_id');
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
