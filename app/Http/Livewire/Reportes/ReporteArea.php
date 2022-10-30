<?php

namespace App\Http\Livewire\Reportes;

use App\Models\Area;
use App\Models\Line;
use App\Models\Machine;
use App\Models\Plant;
use App\Models\Refrigerante;
use Livewire\Component;

class ReporteArea extends Component
{
    public $plantas=[],$areas=[],$valores=[],$planta,$area,$valor;
    public $lineas=[],$maquinas=[],$datos=[];


    public function render()
    {
        return view('livewire..reportes.reporte-area');
    }


    public function mount(){
        $this->plantas = Plant::where('usuario_id',auth()->id())
        ->orWhere('created_by',auth()->id())
        ->orWhere('supervisor_id',auth()->id())
        ->get();
        $this->areas = collect();
        $this->lineas = collect();
        $this->maquinas = collect();
    }

    public function updatedPlanta($value){
        $this->areas=Area::where("planta_id",$value)->get();
    }

    public function updatedArea($value2)
    {

       $this->lineas=Line::where("area_id",$value2)->get();
       $this->maquinas=Machine::where("area_id",$value2)->get();
    }


}
