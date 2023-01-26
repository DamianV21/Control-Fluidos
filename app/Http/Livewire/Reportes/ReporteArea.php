<?php

namespace App\Http\Livewire\Reportes;

use App\Models\Area;
use App\Models\Line;
use App\Models\Machine;
use App\Models\Plant;
use App\Models\Refrigerante;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ReporteArea extends Component
{
    public $plantas=[],$areas=[],$valores=[],$data=[],$fechas=[],$concentraciones_prom=[],$planta,$area,$valor,$count_data=0;
    public $lineas=[],$maquinas=[],$datos=[],$id_area,$val,$nombre_area,$nombre_planta,$dateFrom, $dateTo, $concentracion_baja = 0, $concentracion_alta =0,
     $concentracion_ok = 0, $ph_ok=0, $ph_bajo=0;



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
        $this->data = collect();
        $this->maquinas = collect();
        $this->valores = collect();
        $this->val = collect();
    }

    public function updatedPlanta($value){
        $this->areas=Area::where("planta_id",$value)->get();
        $this->nombre_planta = Plant::where("id",$value)->first()->nombre ?? null;


    }

    public function updatedArea($value2)
    {
       $this->maquinas=Machine::where("area_id",$value2)->select('id')->get()->toArray();
       $this->nombre_area = Area::where("id",$value2)->first()->nombre ?? null;
       $this->id_area = Area::where("id",$value2)->first()->id ?? null;

    }


    public function Consulta()
    {

        if (count($this->maquinas) == 0) {
            $this->dispatchBrowserEvent('data_vacia', [
            'title'         =>      'Reporte',
            'title_sub'         =>   'No se tienen registros',
        ]);
        }
        else{
            $from = Carbon::parse($this->dateFrom)->format('Y-m-d') . ' 00:00:00';
            $to = Carbon::parse($this->dateTo)->format('Y-m-d') . ' 23:59:59';

            $this->data = Refrigerante::
            selectRaw('machines.ids,
            GROUP_CONCAT(refrigerantes.ph order by refrigerantes.created_at ASC) AS ph,
            GROUP_CONCAT(refrigerantes.concentracion_final order by refrigerantes.created_at ASC) AS con_final,
            GROUP_CONCAT(refrigerantes.created_at order by refrigerantes.created_at ASC) AS fechas,
            avg(refrigerantes.ph) as prom_ph,
            avg(refrigerantes.concentracion_final) as prom_con')
            ->join('machines','machines.id', '=', 'refrigerantes.maquina_id')
            ->whereBetween('refrigerantes.created_at',[$from,$to])
            ->whereIn('maquina_id',$this->maquinas)
            ->groupBy('maquina_id')
            ->get();



                foreach($this->data as $d){
                    $this->datos[$d->ids] = ["value" => explode(",", $d->ph),"value2" => explode(",", $d->con_final),
                    "prom_ph" => explode(",", $d->prom_ph),"prom_con" => explode(",", $d->prom_con)];

                    $this->fechas=["fecha" =>explode(",",$d->fechas)];


                }

                $this->count_data= count($this->fechas,COUNT_RECURSIVE) -1;




        }







    }


}
