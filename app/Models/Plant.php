<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;
    public function clientes()
    {
        return $this->belongsTo(Client::class, 'contacto_id');
    }

    public function empresas(){
        return $this->belongsTo(Company::class,'empresa_id');
    }

     public function scopeCurrentUser($query)
    {
        return $query->where('author_id', auth()->id());
    }

    public function scopePlantaArea($query)
    {
        if (auth()->user()->hasRole('IVA Admin')) {
            return $query->where('created_by',auth()->id());
        }
    }

}
