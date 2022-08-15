<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function scopeRoles($query)
    {
        
        return $query->whereIn('id', [2, 14]);
    }
}
