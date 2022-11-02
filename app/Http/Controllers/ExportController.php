<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Machine;
use App\Models\Plant;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use App\Models\Refrigerante;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use Dompdf\Dompdf;

class ExportController extends Controller
{
    public function reportPDF($valor, $dateFrom = null, $dateTo = null)
    {
        $data = []; $con_inicial = []; $con_final = []; $reco_min= []; $reco_max= []; $dias = [];
        $dias_d = [];

        $daa = null;

        $suma_con_ini=0; $suma_vol_ini=0; $suma_vol_rec=0; $suma_con_rec=0; $suma_con_fin=0;

        $from = Carbon::parse($dateFrom)->format('Y-m-d') . ' 00:00:00';
        $to = Carbon::parse($dateTo)->format('Y-m-d') . ' 23:59:59';

        $data = Refrigerante::whereBetween('created_at', [$from, $to])
            ->where('maquina_id', $valor)
            ->get();

        $planta_machine = Machine::find($valor)->planta_id;
        $planta_nombre = Plant::find($planta_machine)->nombre;
        $planta_ubicacion = Plant::find($planta_machine)->ciudad;
        $usuario_id = Machine::find($valor)->usuario_id;
        $responsable = User::find($usuario_id)->name ?? 'No Aplica';
        $producto = Machine::find($valor)->a_g_guias;
        $machine = Machine::find($valor)->ids;
        $tipo_maquina = Machine::find($valor)->tipo;
        $area_id = Machine::find($valor)->area_id;
        $nombre_area = Area::find($area_id)->nombre;

        foreach ($data as $d) {
            $suma_con_ini = $suma_con_ini + $d->concentracion_inicial;
            $suma_vol_ini = $suma_vol_ini + $d->volumen_inicial;
            $suma_vol_rec = $suma_vol_rec + $d->litros_recarga;
            $suma_con_rec = $suma_con_rec + $d->concentracion_recarga;
            $suma_con_fin = $suma_con_fin + $d->concentracion_final;
            $con_inicial[] = [$d['concentracion_inicial']];
            $con_final[] = [$d['concentracion_final']];
            $reco_min[] = [$d->maquinas['reco_min']];
            $reco_max[] = [$d->maquinas['reco_max']];
            $dias_d[] =  \Carbon\Carbon::parse($d->created_at)->format('d');

        }
        $prom_con_ini = $suma_con_ini /  $data->count();
        $prom_vol_ini = $suma_vol_ini / $data->count();
        $prom_con_rec = $suma_con_rec / $data->count();
        $prom_con_fin = $suma_con_fin / $data->count();

        $date = \Carbon\Carbon::now()->format('d-m-Y h:i:s A');


        $pdf = PDF::loadView('pdf.reporte', compact(
            'data',
            'planta_nombre',
            'planta_ubicacion',
            'responsable',
            'producto',
            'machine',
            'tipo_maquina',
            'dateFrom',
            'dateTo',
            'prom_con_ini',
            'suma_vol_rec',
            'prom_vol_ini',
            'prom_con_rec',
            'prom_con_fin',
            'con_inicial',
            'con_final',
            'reco_min',
            'reco_max',
            'dias_d'
        ));




        $pdf->setPaper('legal', 'landscape');
       // $pdf->setOptions('defaultFont', 'Courier');


        return $pdf->stream($machine.' '.$nombre_area.' '.$date.'.pdf'); //VisualizarReporte
        //return $pdf->download('MaquinaReporte.pdf'); //DescargarReporte

    }
}
