<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Client;
use App\Models\Machine;
use App\Models\Plant;
use App\Models\Refrigerante;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;


class AExportController extends Controller
{
    public function report_areaPDF($id_area,$dateFrom=null,$dateTo=null)
    {
        $data = [];
        $maquinas=[];
        $datos = [];
        $fechas = [];
        $count_data = 0;
        $count_area = 0;
        $total_concentracion=0;
        $total_ph = 0;
        $sum_concentracion_baja=0;
        $sum_concentracion_alta=0;
        $sum_concentracion_ok=0;
        $concentracion_baja=0;
        $concentracion_alta=0;
        $concentracion_ok=0;
        $sum_ph_ok = 0;
        $sum_ph_bajo = 0;
        $ph_ok = 0;
        $ph_bajo = 0;



        $from = Carbon::parse($dateFrom)->format('Y-m-d') . ' 00:00:00';
        $to = Carbon::parse($dateTo)->format('Y-m-d') . ' 23:59:59';
        $nombre_area = Area::where("id",$id_area)->first()->nombre ?? null;
        $maquinas=Machine::where("area_id",$id_area)->select('id')->get()->toArray();
        $planta_id = Area::find($id_area)->planta_id ?? 'No Aplica';
        $nombre_planta = Plant::find($planta_id)->nombre ?? 'No Aplica';
        $ubicacion_planta = Plant::find($planta_id)->direccion ?? 'No Aplica';
        $telefono_planta = Plant::find($planta_id)->telefono ?? 'No Aplica';
        $contacto_id = Plant::find($planta_id)->contacto_id ?? '0';
        $contacto_planta = Client::find($contacto_id)->nombre ?? 'No Aplica';
        $usuario_id = Area::find($id_area)->created_by ?? '0';
        $responsable = User::find($usuario_id)->name ?? 'No Aplica';
        $numero_aleatorio = Str::random(10);
        $date = \Carbon\Carbon::now()->format('d-m-Y');


        $data = Refrigerante::
            selectRaw('refrigerantes.maquina_id,
            GROUP_CONCAT(refrigerantes.ph order by refrigerantes.created_at ASC) AS ph,
            GROUP_CONCAT(refrigerantes.concentracion_final order by refrigerantes.created_at ASC) AS con_final,
            GROUP_CONCAT(refrigerantes.created_at order by refrigerantes.created_at ASC) AS fechas,
            avg(refrigerantes.ph) as prom_ph,
            avg(refrigerantes.concentracion_final) as prom_con')
            ->join('machines','machines.id', '=', 'refrigerantes.maquina_id')
            ->whereBetween('refrigerantes.created_at',[$from,$to])
            ->whereIn('maquina_id',$maquinas)
            ->groupBy('maquina_id')
            ->get();

            foreach($data as $d){
                $datos[$d->maquinas->ids] = ["value" => explode(",", $d->ph),"value2" => explode(",", $d->con_final),
                "prom_ph" => explode(",", $d->prom_ph),"prom_con" => explode(",", $d->prom_con)];

                $fechas=["fecha" =>explode(",",$d->fechas)];

            }

            $count_data= count($fechas,COUNT_RECURSIVE) -1;
            $count_area = count($fechas,COUNT_RECURSIVE) + 5;

            foreach ($datos as $item => $i) {
                foreach ($i['prom_con'] as $info => $in) {

                    if ($in < 4) {
                        $sum_concentracion_baja++;
                    }
                    if ($in > 6) {
                        $sum_concentracion_alta++;
                    }
                    if ($in >= 4 && $in <= 6) {
                        $sum_concentracion_ok++;
                    }
                }
            }


            foreach ($datos as $item => $i) {
                foreach ($i['prom_ph'] as $info => $in) {
                    if ($in >= 8.9 && $in <= 9.69) {
                        $sum_ph_ok++;
                    }
                    if ($in <= 8.89) {
                       $sum_ph_bajo++;
                    }
                }
            }



           $total_concentracion = $sum_concentracion_alta + $sum_concentracion_baja + $sum_concentracion_ok;
           $concentracion_alta = round((($sum_concentracion_alta / $total_concentracion ) * 100), 2);
           $concentracion_baja = round((($sum_concentracion_baja / $total_concentracion ) * 100),2);
           $concentracion_ok = round((($sum_concentracion_ok / $total_concentracion ) * 100),2);

           $total_ph = $sum_ph_ok + $sum_ph_bajo;
           $ph_ok = round((($sum_ph_ok / $total_ph) * 100),2);
           $ph_bajo = round((($sum_ph_bajo / $total_ph) *100),2);


            $pdf = PDF::loadView('pdf.reporte_area', compact(
                'data',
                'dateFrom',
                'dateTo',
                'datos',
                'fechas',
                'nombre_area',
                'count_data',
                'count_area',
                'nombre_planta',
                'nombre_area',
                'ubicacion_planta',
                'responsable',
                'concentracion_baja',
                'concentracion_alta',
                'concentracion_ok',
                'ph_ok',
                'ph_bajo',
                'telefono_planta',
                'contacto_planta',
                'numero_aleatorio'
            ));

            $pdf->setPaper('legal', 'landscape');
            return $pdf->stream($nombre_area . ' ' . $date . '.pdf');
    }
}
