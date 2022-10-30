<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;

    public function plantas(){
        return $this->belongsTo(Plant::class,'planta_id');
    }

    public function refrigerantes(){
        return $this->belongsTo(Refrigerante::class,'maquina_id');
    }
}
