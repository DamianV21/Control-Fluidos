<?php

namespace App\Http\Livewire\Vistas;

use App\Models\Line;
use Livewire\Component;

class IndexLineas extends Component
{
    public $view_line_nom,$view_line_empre,$view_line_plan,$view_line_area;
    public $view_planta_nombre,$view_planta_direc,$view_planta_ciudad,$view_planta_estado,
    $view_planta_cp,$view_planta_tel,$view_planta_con;
    public $sort="id";
    public $direction="desc";

    public function render()
    {
        if ($this->sort == 'az') {
            $this->direction='asc';
            $this->sort = 'nombre';

        } elseif($this->sort == 'za') {
            $this->direction='desc';
            $this->sort = 'nombre';
        }
        $lineas = Line::where('usuario_id',auth()->id())
        ->orWhere('created_by',auth()->id())
        ->orderBy($this->sort,$this->direction)
        ->get();

        return view('livewire.vistas.index-lineas',compact('lineas'));
    }

    public function OpenViewModal($id){

        $collec = Line::where('id',$id)->first();

        $this->view_line_nom = $collec->nombre;
        $this->view_line_empre = $collec->empresas->nombre;
        $this->view_line_plan = $collec->plantas->nombre;
        $this->view_line_area = $collec->areas->nombre;


        $this->dispatchBrowserEvent('show-modal');
    }


    public function CloseViewModal(){
        $this->view_line_nom = '';
        $this->view_line_empre = '';
        $this->view_line_plan = '';
        $this->view_line_area = '';
    }
}
