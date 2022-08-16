<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Client extends Model
{
    use HasFactory;

    public function scopeContactoPlanta($query)
    {
        if (auth()->user()->hasRole('IVA Admin')) {
            return $query->where('created_by',auth()->id());
        }

    }

}

