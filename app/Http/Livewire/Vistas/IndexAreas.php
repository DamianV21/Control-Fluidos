<?php

namespace App\Http\Livewire\Vistas;

use App\Models\Area;
use App\Models\CalidadAgua;

use Livewire\Component;

class IndexAreas extends Component
{



    public $sort="id";
    public $direction="desc";
    public $view_id_area,$view_name_area,$cal;

    public function render()
    {
        if ($this->sort == 'az') {
            $this->direction='asc';
            $this->sort = 'nombre';

        } elseif($this->sort == 'za') {
            $this->direction='desc';
            $this->sort = 'nombre';
        }

        $calidades = CalidadAgua::where('area_id',$this->view_id_area)->get();


        $areas = Area::where('usuario_id',auth()->id())
        ->orWhere('created_by',auth()->id())
        ->orWhere('supervisor_id',auth()->id())
        ->orderBy($this->sort,$this->direction)
        ->get();

        return view('livewire.vistas.index-areas',compact('areas','calidades'));

    }

    public function OpenViewArea($id){
        $area_view = Area::where('id',$id)->first();

        $this->view_id_area = $area_view->id;
        $this->view_name_area = $area_view->nombre;
    }





}
