<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class Roles extends Model
{
    use HasFactory;

    protected $fillable= [
        'role_name',
        'permissions',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function getPermissionsAttribute($permissions)
    {
        return json_decode($permissions, true);
    }
}
