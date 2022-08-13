<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Company extends Model
{
    use HasFactory;

    public function scopeEmpresaIVA($query)
    {
        if (auth()->user()->hasRole('IVA Admin')) {
            return $query->where('usuario_id',auth()->id());
        }
        if (auth()->user()->hasRole('Supervisor')) {
            return $query->where('usuario_id',auth()->id());
        }
    }

}
