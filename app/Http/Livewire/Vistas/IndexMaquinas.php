<?php

namespace App\Http\Livewire\Vistas;

use App\Models\Aceite;
use App\Models\Grasa;
use App\Models\Machine;
use App\Models\Mantenimiento;
use App\Models\Refrigerante;
use Livewire\Component;

class IndexMaquinas extends Component
{
    public $view_id_machine,$view_name_machine;
    public $sort="id";
    public $direction="desc";

    public function render()
    {
        if ($this->sort == 'az') {
            $this->direction='asc';
            $this->sort = 'ids';

        } elseif($this->sort == 'za') {
            $this->direction='desc';
            $this->sort = 'ids';
        }

        $refrigerantes = Refrigerante::where('maquina_id',$this->view_id_machine)->orderBy('created_at', 'desc')->get();

        $aceites = Aceite::where('maquina_id',$this->view_id_machine)->orderBy('created_at', 'desc')->get();

        $grasas = Grasa::where('maquina_id',$this->view_id_machine)->orderBy('created_at', 'desc')->get();

        $mantenimientos = Mantenimiento::where('maquina_id',$this->view_id_machine)->orderBy('created_at', 'desc')->get();

        $maquinas = Machine::where('usuario_id',auth()->id())
        ->orWhere('created_by',auth()->id())
        ->orWhere('supervisor_id',auth()->id())
        ->orWhere('client_id',auth()->id())
        ->orderBy($this->sort,$this->direction)
        ->get();


        return view('livewire.vistas.index-maquinas' ,compact('maquinas','refrigerantes','aceites','grasas','mantenimientos'));
    }

    public function OpenViewRefrigerantes($id){
        $machine_view = Machine::where('id',$id)->first();
        $this->view_id_machine = $machine_view->id;
        $this->view_name_machine = $machine_view->ids;

    }

    public function OpenViewAceites($id){
        $machine_view = Machine::where('id',$id)->first();
        $this->view_id_machine = $machine_view->id;
        $this->view_name_machine = $machine_view->ids;

    }

    public function OpenViewGrasas($id){
        $machine_view = Machine::where('id',$id)->first();
        $this->view_id_machine = $machine_view->id;
        $this->view_name_machine = $machine_view->ids;

    }

    public function OpenViewMante($id){
        $machine_view = Machine::where('id',$id)->first();
        $this->view_id_machine = $machine_view->id;
        $this->view_name_machine = $machine_view->ids;

    }
}
