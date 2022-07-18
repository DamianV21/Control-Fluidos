<?php

namespace App\Http\Livewire\Vistas;

use App\Models\Area;
use App\Models\CalidadAgua;

use Livewire\Component;

class IndexAreas extends Component
{
    public $area_id,$usuario,$origen_agua,$dureza,$ph,$conductividad,$cloruros,$sulfatos;
    public $view_area_id,$view_area_nombre;
    public $view_area_nom,$view_area_empresa,$view_area_planta,$view_area_user;
    public $view_reg_ori,$collecc,$view_reg_dur,$view_reg_ph,$view_reg_con,$view_reg_clo,$view_reg_sulf,$view_reg_area;
    public $sort="id";
    public $direction="desc";
    public $view_id_area,$cal;

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
        ->orderBy($this->sort,$this->direction)
        ->get();

        return view('livewire.vistas.index-areas',compact('areas','calidades'));
    }

    public function AddArea($id){
        $area_view = Area::where('id',$id)->first();

        $this->view_area_id = $area_view->id;
        $this->view_area_nombre = $area_view->nombre;
    }

    public function storeAreaData(){
        $this->validate([

            'origen_agua' => 'required',
            'dureza' => 'required|numeric',
            'ph' => 'required|numeric',
            'conductividad' => 'required|numeric',
            'cloruros' => 'required|numeric',
            'sulfatos' => 'required|numeric'
        ]);


        $this->usuario = auth()->id();

        $CalidadAgua = new CalidadAgua();
        $CalidadAgua -> area_id = $this->view_area_id;
        $CalidadAgua -> usuario_id = $this->usuario;
        $CalidadAgua -> origen_agua = $this->origen_agua;
        $CalidadAgua -> dureza = $this->dureza;
        $CalidadAgua -> ph = $this->ph;
        $CalidadAgua -> conductividad = $this->conductividad;
        $CalidadAgua -> cloruros = $this->cloruros;
        $CalidadAgua -> sulfatos = $this->sulfatos;

        $CalidadAgua->save();

        session()->flash('message',"Registro Calidad de Agua agregado correctamente");


        $this->origen_agua = '';
        $this->dureza = '';
        $this->ph = '';
        $this->conductividad = '';
        $this->cloruros = '';
        $this->sulfatos = '';

        $this->dispatchBrowserEvent('close-modal');

    }

    public function OpenViewModal($id){

        $collec = Area::where('id',$id)->first();

        $this->view_area_nom = $collec->nombre;
        $this->view_area_empresa = $collec->empresas->nombre;
        $this->view_area_planta = $collec->plantas->nombre;
        $this->view_area_user = $collec->usuarios->name;


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



    public function OpenViewArea($id){
        $area_view = Area::where('id',$id)->first();

        $this->view_id_area = $area_view->id;

        $this->dispatchBrowserEvent('show-registros');

    }

}
