<?php

namespace App\Http\Livewire\Reportes;

use App\Models\Machine;
use App\Models\Plant;
use App\Models\Refrigerante;
use Livewire\Component;
use Carbon\Carbon;

class Refrigerantes extends Component
{

    public $maquinas=[],$plantas=[],$data=[],$valores=[],$planta,$maquina,$valor,$valor_maquina,$dateFrom, $dateTo;
    public $datass=[];

    public $suma_con_ini=0, $prom_con_ini=0,$suma_vol_ini=0, $prom_vol_ini=0,
    $suma_vol_rec=0,$suma_con_rec=0, $prom_con_rec=0,$suma_con_fin=0, $prom_con_fin=0,
    $espuma_si=0,$espuma_no=0,$aceite_si=0,$aceite_no=0,$olor_malo=0,$olor_regular=0,$olor_bueno=0;

    public $valores_espuma=[],$valores_aceite=[],$valores_olor_regular=[],$valores_olor_malo=[],$valores_olor_bueno=[];

    public $nombre_maquina,$nombre_empresa,$nombre_usuario;

    public function mount()
    {
        $this->plantas = Plant::where('usuario_id',auth()->id())->get();
        $this->maquinas = collect();
        $this->valores = collect();
        $this->data = collect();
        $this->valores_espuma = collect();
        $this->valores_aceite = collect();
        $this->valores_olor_regular = collect();
        $this->valores_olor_malo = collect();
        $this->valores_olor_bueno = collect();
    }
    public function updatedPlanta($value)
    {
        $this->maquinas = Machine::where('planta_id',$value)->get();
        $this->maquina = $this->maquinas->first()->id ?? null;

    }

    public function updatedMaquina($valuee)
    {
        $this->valores = Refrigerante::where('maquina_id',$valuee)->get();
        $this->valor = $this->valores->first()->maquina_id ?? null;

    }


    public function Consulta()
    {
        $from = Carbon::parse($this->dateFrom)->format('Y-m-d') . ' 00:00:00';
        $to = Carbon::parse($this->dateTo)->format('Y-m-d') . ' 23:59:59';

        $this->data = Refrigerante::whereBetween('created_at',[$from,$to])
        ->where('maquina_id',$this->valor)
        ->get();



       foreach($this->data as $d){
        $this->suma_con_ini = $this->suma_con_ini + $d->concentracion_inicial;
        $this->suma_vol_ini = $this->suma_vol_ini + $d->volumen_inicial;
        $this->suma_vol_rec = $this->suma_vol_rec + $d->litros_recarga;
        $this->suma_con_rec = $this->suma_con_rec + $d->concentracion_recarga;
        $this->suma_con_fin = $this->suma_con_fin + $d->concentracion_final;
        $this->nombre_maquina = $d->maquinas->ids;
        $this->nombre_empresa = $d->maquinas->plantas->nombre;
        $this->nombre_usuario = $d->tecnicos->name;

       }

       $this->prom_con_ini = $this->suma_con_ini /  $this->data->count();
       $this->prom_vol_ini = $this->suma_vol_ini / $this->data->count();
       $this->prom_con_rec = $this->suma_con_rec / $this->data->count();
       $this->prom_con_fin = $this->suma_con_fin / $this->data->count();


       $this->valores_espuma = Refrigerante::whereBetween('created_at',[$from,$to])
        ->where('maquina_id',$this->valor)
        ->where('exceso_espuma','Si')
        ->get();
       $this->espuma_si = ($this->valores_espuma->count() * 100) / $this->data->count() ;
       $this->espuma_no = (($this->data->count()-$this->valores_espuma->count())*100) / $this->data->count();


       $this->valores_aceite = Refrigerante::whereBetween('created_at',[$from,$to])
        ->where('maquina_id',$this->valor)
        ->where('aceites_entrampados','Si')
        ->get();
        $this->aceite_si = ($this->valores_aceite->count() * 100) / $this->data->count() ;
       $this->aceite_no = (($this->data->count()-$this->valores_aceite->count())*100) / $this->data->count();


       $this->valores_olor_malo = Refrigerante::whereBetween('created_at',[$from,$to])
       ->where('maquina_id',$this->valor)
       ->where('aroma','Malo')
       ->get();
       $this->olor_malo = ($this->valores_olor_malo->count() * 100) / $this->data->count() ;

       $this->valores_olor_regular = Refrigerante::whereBetween('created_at',[$from,$to])
       ->where('maquina_id',$this->valor)
       ->where('aroma','Regular')
       ->get();
       $this->olor_regular = ($this->valores_olor_regular->count() * 100) / $this->data->count() ;

       $this->valores_olor_bueno = Refrigerante::whereBetween('created_at',[$from,$to])
       ->where('maquina_id',$this->valor)
       ->where('aroma','Bueno')
       ->get();
       $this->olor_bueno = ($this->valores_olor_bueno->count() * 100) / $this->data->count() ;

    }

    public function render()
    {
        $from = Carbon::parse($this->dateFrom)->format('Y-m-d') . ' 00:00:00';
        $to = Carbon::parse($this->dateTo)->format('Y-m-d') . ' 23:59:59';
        $datos = Refrigerante::whereBetween('created_at',[$from,$to])
        ->where('maquina_id',$this->valor)
        ->get();
        $puntos = [];
        $ph= [];
        $dato_maquina= [];
        $dato_maquina2= [];
        foreach($datos as $dato){
            $puntos[] = [$dato['concentracion_inicial']];
            $ph[] = [$dato['concentracion_final']];
            $dato_maquina[] = [$dato->maquinas['reco_min']];
            $dato_maquina2[] = [$dato->maquinas['reco_max']];
        }

        return view('livewire.reportes.refrigerantes',
        ["resul" => json_encode($puntos)],["resul2" => json_encode($ph),"resul3" => json_encode($dato_maquina),"resul4" => json_encode($dato_maquina2)]);
    }
}
