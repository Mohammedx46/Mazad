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

    // Search
    public function scopeFilter($query, array $filters)
    {

        if ($filters['search'] ?? false) {
            $query->where('role_name', 'like', '%' . request('search') . '%');
        }
    }

    public function users()
    {
        return $this->hasMany(User::class, 'role_id');
    }

    public function getPermissionsAttribute($permissions)
    {
        return json_decode($permissions, true);
    }
}
