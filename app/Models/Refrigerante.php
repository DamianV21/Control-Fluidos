<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refrigerante extends Model
{
    use HasFactory;


    public function maquinas(){
        return $this->belongsTo(Machine::class,'maquina_id');
    }

    public function usuarios(){
        return $this->belongsTo(User::class,'usuario_id');
    }

    public function tecni (){
        return $this->belongsTo(User::class,'usuario_id');
    }
}
