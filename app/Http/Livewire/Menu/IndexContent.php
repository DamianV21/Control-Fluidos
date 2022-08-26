<?php

namespace App\Http\Livewire\Menu;

use Livewire\Component;
use App\Models\Aceite;
use App\Models\Area;
use App\Models\CalidadAgua;
use App\Models\Grasa;
use App\Models\Line;
use App\Models\Machine;
use App\Models\Mantenimiento;
use App\Models\Plant;
use App\Models\Refrigerante;

class IndexContent extends Component
{

    public $selectedPlanta=null,$selectedArea=null,$selectedLinea=null,$selectedMaquina=null;
    public $a_areas=[],$l_lineas=[],$m_maquinas=[];
    public $numero_areas=0,$numero_lineas=0,$numero_maquinas=0;
    //===============================================================================================
    public $planta=null,$area=null,$linea=null,$maquina=null;
    public $plantas=[],$areas=[],$lineas=[],$maquinas=[];
    public $area_id,$usuario,$origen_agua,$dureza,$ph,$conductividad,$cloruros,$sulfatos;
    public $view_maquina_id,$view_maquina_nombre,$view_maquina_id2,$view_maquina_nombre2="Hola";
    public $refrigerante_maquina,$refrigerante_usuario,$concentracion_ini,$volumen_ini,$litros_rec,
             $concentracion_rec,$concentracion_fin,$refrigerante_ph,$aroma,$aceites,$color,$exceso_es,$comentarios;
    public $aceite_maquina,$aceite_usuario,$aspecto,$aceite_color,$aceite_aroma,$acaeite_litros_rec;
    public $grasa_maquina,$grasa_usuario,$grasa_litros_rec;
    public $man_maquina,$man_usuario,$man_tipo,$man_litros_agua,$man_litros_con,$man_observaciones;


    public function updatedLinea($valueee)
    {

        $this->maquinas = Machine::where('linea_id',$valueee)->get();
        $this->maquina = $this->maquinas->first()->id ?? null;
    }

    public function updated($fields)
    {

        $this->validateOnly($fields ,[
            'concentracion_ini' => 'required|numeric',
            'volumen_ini' => 'required|numeric',
            'litros_rec' => 'required|numeric',
            'concentracion_rec' => 'required|numeric',
            'concentracion_fin' => 'required|numeric',
            'refrigerante_ph' => 'required|numeric',
            'aroma' => 'required',
            'aceites' => 'required',
            'color' => 'required',
            'exceso_es' => 'required',
            'comentarios' => 'required'
        ]);

        $this->validateOnly($fields ,[
            'grasa_litros_rec' => 'required|numeric',
        ]);


        $this->validateOnly($fields ,[
            'man_tipo' => 'required',
            'man_litros_agua' => 'required|numeric',
            'man_litros_con' => 'required|numeric',
            'man_observaciones' => 'required'
        ]);

        $this->validateOnly($fields ,[
            'aspecto' => 'required',
            'aceite_color' => 'required',
            'aceite_aroma' => 'required',
            'acaeite_litros_rec' => 'required|numeric'
        ]);
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


        $this->dispatchBrowserEvent('add_agua', [
            'title'         =>      'Calidad de Agua',
            'title_sub'         =>   'Registro agregado correctamente',
        ]);

        $this->origen_agua = '';
        $this->dureza = '';
        $this->ph = '';
        $this->conductividad = '';
        $this->cloruros = '';
        $this->sulfatos = '';

        $this->dispatchBrowserEvent('close-modal-agua');

    }

    public function AddRefrigerante($id){
        $maquina_view = Machine::where('id',$id)->first();

        $this->view_maquina_id = $maquina_view->id;
        $this->view_maquina_nombre = $maquina_view->ids;
    }


    public function AddAceiteData(){
        $this->validate([

            'aspecto' => 'required',
            'aceite_color' => 'required',
            'aceite_aroma' => 'required',
            'acaeite_litros_rec' => 'required|numeric'

        ]);

        $this->aceite_usuario = auth()->id();
        $aceite = new Aceite();
        $aceite->maquina_id = $this->view_maquina_id;
        $aceite->usuario_id = $this->aceite_usuario;
        $aceite->aspecto = $this->aspecto;
        $aceite->color = $this->aceite_color;
        $aceite->aroma = $this->aceite_aroma;
        $aceite->litros_recarga = $this->acaeite_litros_rec;

        $aceite->save();



        $this->dispatchBrowserEvent('add_aceite', [
            'title'         =>      'Aceite',
            'title_sub'         =>   'Registro agregado correctamente',
        ]);


        $this->aceite_maquina = '';
        $this->aceite_usuario = '';
        $this->aspecto = '';
        $this->aceite_color = '';
        $this->aceite_aroma = '';
        $this->acaeite_litros_rec = '';

        $this->dispatchBrowserEvent('close-modal-aceite');

    }

    public function AddGrasaData(){

        $this->validate([
            'grasa_litros_rec' => 'required|numeric',
        ]);

        $this->grasa_usuario = auth()->id();
        $grasa = new Grasa();
        $grasa->maquina_id = $this->view_maquina_id;
        $grasa->usuario_id = $this->grasa_usuario;
        $grasa->litros_recarga = $this->grasa_litros_rec;

        $grasa->save();


        $this->dispatchBrowserEvent('add_grasa', [
            'title'         =>      'Grasas',
            'title_sub'         =>   'Registro agregado correctamente',
        ]);

        $this->grasa_litros_rec = "";

        $this->dispatchBrowserEvent('close-modal-grasa');

    }

    public function AddMantenimientoData(){
        $this->validate([

            'man_tipo' => 'required',
            'man_litros_agua' => 'required|numeric',
            'man_litros_con' => 'required|numeric',
            'man_observaciones' => 'required'

        ]);

        $this->man_usuario = auth()->id();
        $mantenimiento = new Mantenimiento();
        $mantenimiento->maquina_id = $this->view_maquina_id;
        $mantenimiento->usuario_id = $this->man_usuario;
        $mantenimiento->tipo = $this->man_tipo;
        $mantenimiento->litros_recarga_agua = $this->man_litros_agua;
        $mantenimiento->litros_recarga_con = $this->man_litros_con;
        $mantenimiento->observaciones = $this->man_observaciones;

        $mantenimiento->save();


        $this->dispatchBrowserEvent('add_man', [
            'title'         =>      'Mantenimiento',
            'title_sub'         =>   'Registro agregado correctamente',
        ]);

        $this->man_maquina = '';
        $this->man_usuario = '';
        $this->man_tipo = '';
        $this->man_litros_agua = '';
        $this->man_litros_con = '';
        $this->man_observaciones = '';

        $this->dispatchBrowserEvent('close-modal-man');

    }

    public function AddRefrigeranteData(){
        $this->validate([

            'concentracion_ini' => 'required|numeric',
            'volumen_ini' => 'required|numeric',
            'litros_rec' => 'required|numeric',
            'concentracion_rec' => 'required|numeric',
            'concentracion_fin' => 'required|numeric',
            'refrigerante_ph' => 'required|numeric',
            'aroma' => 'required',
            'aceites' => 'required',
            'color' => 'required',
            'exceso_es' => 'required',
            'comentarios' => 'required'

        ]);

        $this->refrigerante_usuario = auth()->id();

        $refrigerante = new Refrigerante();

        $refrigerante->maquina_id=$this->view_maquina_id;
        $refrigerante->usuario_id = $this->refrigerante_usuario;
        $refrigerante->concentracion_inicial = $this->concentracion_ini;
        $refrigerante->volumen_inicial = $this->volumen_ini;
        $refrigerante->litros_recarga = $this->litros_rec;
        $refrigerante->concentracion_recarga = $this->concentracion_rec;
        $refrigerante->concentracion_final = $this->concentracion_fin;
        $refrigerante->ph = $this->refrigerante_ph;
        $refrigerante->aroma = $this->aroma;
        $refrigerante->aceites_entrampados = $this->aceites;
        $refrigerante->color = $this->color;
        $refrigerante->exceso_espuma = $this->exceso_es;
        $refrigerante->comentarios = $this->comentarios;

        $refrigerante->save();


        $this->dispatchBrowserEvent('add_ref', [
            'title'         =>      'Refrigerante',
            'title_sub'         =>   'Registro agregado correctamente',
        ]);

        $this->refrigerante_maquina = '';
        $this->refrigerante_usuario = '';
        $this->concentracion_ini = '';
        $this->volumen_ini = '';
        $this->litros_rec = '';
        $this->concentracion_rec = '';
        $this->concentracion_fin = '';
        $this->refrigerante_ph = '';
        $this->aroma = '';
        $this->aceites = '';
        $this->color = '';
        $this->exceso_es = '';
        $this->comentarios = '';

        $this->dispatchBrowserEvent('close-modal-refrigerante');

    }

    public function render()
    {
        return view('livewire.menu.index-content',[
            'p_plantas' => Plant::where('usuario_id',auth()->id())
            ->orWhere('created_by',auth()->id())
            ->get()
        ]);
    }

    public function updatedselectedPlanta($planta_id){
        $this->a_areas=Area::where("planta_id",$planta_id)->get();
        $this->numero_areas = $this->a_areas->count();
    }

    public function updatedselectedArea($area_id){
        $this->l_lineas=Line::where("area_id",$area_id)->get();
        $this->numero_lineas = $this->l_lineas->count();
    }

    public function updatedselectedLinea($linea_id){
        $this->m_maquinas = Machine::where("linea_id",$linea_id)->get();
        $this->numero_maquinas = $this->m_maquinas->count();
    }
}
