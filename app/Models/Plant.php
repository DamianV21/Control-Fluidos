<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;
    public function clientes(){
        return $this->belongsTo(Client::class,'contacto_id');
    }
}
