<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    public function empresas(){
        return $this->belongsTo(Company::class,'empresa_id');
    }
    public function plantas(){
        return $this->belongsTo(Plant::class,'planta_id');
    }
    public function usuarios(){
        return $this->belongsTo(User::class,'usuario_id');
    }


}
