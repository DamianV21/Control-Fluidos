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
    public $view_maq_id,$view_maq_mar,$view_maq_tipo,$view_maq_ac,$view_maq_hi,
    $view_maq_ref,$view_tanque_maq,$view_maq_min,$view_maq_max,$view_maq_fac,$view_maq_ph,
    $view_maq_ini,$view_maq_man;
    public $view_id_machine;
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

        $refrigerantes = Refrigerante::where('maquina_id',$this->view_id_machine)->orderBy('created_at', 'asc')->get();

        $aceites = Aceite::where('maquina_id',$this->view_id_machine)->orderBy('created_at', 'asc')->get();

        $grasas = Grasa::where('maquina_id',$this->view_id_machine)->orderBy('created_at', 'asc')->get();

        $mantenimientos = Mantenimiento::where('maquina_id',$this->view_id_machine)->orderBy('created_at', 'asc')->get();

        $maquinas = Machine::where('usuario_id',auth()->id())
        ->orWhere('created_by',auth()->id())
        ->orWhere('supervisor_id',auth()->id())
        ->orderBy($this->sort,$this->direction)
        ->get();


        return view('livewire.vistas.index-maquinas' ,compact('maquinas','refrigerantes','aceites','grasas','mantenimientos'));
    }

    public function OpenViewModal($id){

        $maqui = Machine::where('id',$id)->first();

        $this->view_maq_id = $maqui->ids;
        $this->view_maq_mar = $maqui->marca;
        $this->view_maq_tipo = $maqui->tipo;
        $this->view_maq_ac = $maqui->a_g_guias;
        $this->view_maq_hi = $maqui->a_hidraulico ;
        $this->view_maq_ref = $maqui->r_a_directo ;
        $this->view_tanque_maq = $maqui->capacidad_tanque ;
        $this->view_maq_min = $maqui->reco_min ;
        $this->view_maq_max = $maqui-> 	reco_max ;
        $this->view_maq_fac = $maqui->fac_refractor ;
        $this->view_maq_ph = $maqui->rango_ph ;
        $this->view_maq_ini = $maqui-> 	carga_ini ;
        $this->view_maq_man = $maqui-> 	mantenimiento ;


        $this->dispatchBrowserEvent('show-modal');
    }


    public function CloseViewModal(){
        $this->view_maq_id = '';
        $this->view_maq_mar = '';
        $this->view_maq_tipo = '';
        $this->view_maq_ac = '';
        $this->view_maq_hi = '' ;
        $this->view_maq_ref = '' ;
        $this->view_maq_min = '';
        $this->view_maq_max = '' ;
        $this->view_maq_fac = '';
        $this->view_maq_ph = '' ;
        $this->view_maq_ini = '';
        $this->view_maq_man = '' ;
    }

    public function OpenViewRefrigerantes($id){
        $machine_view = Machine::where('id',$id)->first();

        $this->view_id_machine = $machine_view->id;

        $this->dispatchBrowserEvent('show-refrigerantes');

    }

    public function OpenViewAceites($id){
        $machine_view = Machine::where('id',$id)->first();

        $this->view_id_machine = $machine_view->id;

        $this->dispatchBrowserEvent('show-aceites');

    }

    public function OpenViewGrasas($id){
        $machine_view = Machine::where('id',$id)->first();

        $this->view_id_machine = $machine_view->id;

        $this->dispatchBrowserEvent('show-grasas');

    }

    public function OpenViewMante($id){
        $machine_view = Machine::where('id',$id)->first();

        $this->view_id_machine = $machine_view->id;

        $this->dispatchBrowserEvent('show-mante');

    }
}
