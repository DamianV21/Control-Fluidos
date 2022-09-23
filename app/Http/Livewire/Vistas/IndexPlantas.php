<?php

namespace App\Http\Livewire\Vistas;

use App\Models\Plant;
use Livewire\Component;

class IndexPlantas extends Component
{
    public $sort="id";
    public $direction="desc";
    public $view_planta_nombre,$view_planta_direc,$view_planta_ciudad,$view_planta_estado,
    $view_planta_cp,$view_planta_tel,$view_planta_con;

    public function render()
    {

        if ($this->sort == 'az') {
            $this->direction='asc';
            $this->sort = 'nombre';

        } elseif($this->sort == 'za') {
            $this->direction='desc';
            $this->sort = 'nombre';
        }


        $plantas = Plant::where('usuario_id',auth()->id())
        ->orWhere('created_by',auth()->id())
        ->orderBy($this->sort,$this->direction)
        ->get();

        return view('livewire.vistas.index-plantas',compact('plantas'));
    }

    public function OpenViewModal($id){

        $collec = Plant::where('id',$id)->first();

        $this->view_planta_nombre = $collec->nombre;
        $this->view_planta_direc = $collec->direccion;
        $this->view_planta_ciudad = $collec->ciudad;
        $this->view_planta_estado = $collec->estado;
        $this->view_planta_cp = $collec->codigopostal;
        $this->view_planta_tel = $collec->telefono;
        $this->view_planta_con = $collec->clientes->nombre ?? 'No existe';

        $this->dispatchBrowserEvent('show-modal');
    }


    public function CloseViewModal(){
        $this->view_planta_nombre = '';
        $this->view_planta_direc = '';
        $this->view_planta_ciudad = '';
        $this->view_planta_estado = '';
        $this->view_planta_cp = '';
        $this->view_planta_tel = '';
        $this->view_planta_con = '';
    }

}

