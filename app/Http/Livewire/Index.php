<?php

namespace App\Http\Livewire;

use App\Models\Area;
use App\Models\Line;
use App\Models\Machine;
use App\Models\Plant;
use Livewire\Component;

class Index extends Component
{
    public $plantas,$areas,$lineas,$maquinas;
    public function render()
    {
        $this-> plantas = Plant::where('usuario_id',auth()->id())->get();
        $this-> areas = Area::where('usuario_id',auth()->id())->get();
        $this-> lineas = Line::where('usuario_id',auth()->id())->get();
        $this-> maquinas = Machine::where('usuario_id',auth()->id())->get();
        return view('livewire.index');
    }
}
