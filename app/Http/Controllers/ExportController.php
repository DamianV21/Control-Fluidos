<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Client;
use App\Models\Machine;
use App\Models\Plant;
use Illuminate\Support\Str;
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
        $data = [];
        $con_inicial = [];
        $con_final = [];
        $reco_min = [];
        $reco_max = [];
        $dias = [];
        $dias_d = [];

        $daa = null;
        $num1 = 0;
        $suma_concentrado = 0;
        $suma_con_ini = 0;
        $suma_vol_ini = 0;
        $suma_vol_rec = 0;
        $suma_con_rec = 0;
        $suma_con_fin = 0;
        $suma_ph = 0;

        $from = Carbon::parse($dateFrom)->format('Y-m-d') . ' 00:00:00';
        $to = Carbon::parse($dateTo)->format('Y-m-d') . ' 23:59:59';

        $data = Refrigerante::whereBetween('created_at', [$from, $to])
            ->where('maquina_id', $valor)
            ->get();

        $planta_machine = Machine::find($valor)->planta_id ?? 'No Aplica';
        $planta_nombre = Plant::find($planta_machine)->nombre ?? 'No Aplica';
        $direccion_empresa = Plant::find($planta_machine)->direccion ?? 'No Aplica';
        $telefono_empresa = Plant::find($planta_machine)->telefono ?? 'No Aplica';
        $id_contacto = Plant::find($planta_machine)->contacto_id ?? '0';
        $contacto_empresa = Client::find($id_contacto)->nombre ?? 'No Aplica';
        $planta_ubicacion = Plant::find($planta_machine)->ciudad ?? 'No Aplica';
        $usuario_id = Machine::find($valor)->usuario_id ?? 'No Aplica';
        $responsable = User::find($usuario_id)->name ?? 'No Aplica';
        $producto = Machine::find($valor)->producto ?? 'No Aplica';
        $machine = Machine::find($valor)->ids ?? 'No Aplica';
        $tipo_maquina = Machine::find($valor)->tipo ?? 'No Aplica';
        $area_id = Machine::find($valor)->area_id ?? 'No Aplica';
        $nombre_area = Area::find($area_id)->nombre ?? 'No Aplica';
        $numero_aleatorio = Str::random(10);

        foreach ($data as $d) {
            $suma_con_ini = $suma_con_ini + $d->concentracion_inicial;
            $suma_vol_ini = $suma_vol_ini + $d->volumen_inicial;
            $suma_vol_rec = $suma_vol_rec + $d->litros_recarga;
            $suma_con_rec = $suma_con_rec + $d->concentracion_recarga;
            $suma_con_fin = $suma_con_fin + $d->concentracion_final;
            $suma_ph = $suma_ph + $d->ph;
            $suma_concentrado += ($d->litros_recarga * $d->concentracion_recarga * $d->maquinas->fac_refractor) / 100;
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
        $promedio_ph = $suma_ph / $data->count();
        $promedio_concentrado = $suma_concentrado / $data->count();

        $date = \Carbon\Carbon::now()->format('d-m-Y');

        //Datos de Graficas

        $valores_espuma = Refrigerante::whereBetween('created_at', [$from, $to])
            ->where('maquina_id', $valor)
            ->where('exceso_espuma', 'Si')
            ->get();
        $espuma_si = round(($valores_espuma->count() * 100) / $data->count(),2);
        $espuma_no = round((($data->count() - $valores_espuma->count()) * 100) / $data->count(),2);


        $ultimo_registro_espuma = $data->first()->exceso_espuma ?? null;
        $ultimo_registro_olor = $data->first()->aroma ?? null;
        $ultimo_registro_aceites = $data->first()->aceites_entrampados ?? null;


        $valores_olor_malo = Refrigerante::whereBetween('created_at', [$from, $to])
            ->where('maquina_id', $valor)
            ->where('aroma', 'Malo')
            ->get();
        $olor_malo = round(($valores_olor_malo->count() * 100) / $data->count(),2);

        $valores_olor_regular = Refrigerante::whereBetween('created_at', [$from, $to])
            ->where('maquina_id', $valor)
            ->where('aroma', 'Regular')
            ->get();
        $olor_regular = round(($valores_olor_regular->count() * 100) / $data->count(),2);

        $valores_olor_bueno = Refrigerante::whereBetween('created_at', [$from, $to])
            ->where('maquina_id', $valor)
            ->where('aroma', 'Bueno')
            ->get();
        $olor_bueno = round(($valores_olor_bueno->count() * 100) / $data->count(),2);

        $valores_aceite = Refrigerante::whereBetween('created_at',[$from,$to])
                ->where('maquina_id',$valor)
                ->where('aceites_entrampados','Si')
                ->get();
                $aceite_si = round(($valores_aceite->count() * 100) / $data->count(),2) ;
               $aceite_no = round((($data->count()-$valores_aceite->count())*100) / $data->count(),2);


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
            'dias_d',
            'num1',
            'promedio_ph',
            'promedio_concentrado',
            'espuma_si',
            'espuma_no',
            'olor_malo',
            'olor_regular',
            'olor_bueno',
            'aceite_si',
            'aceite_no',
            'ultimo_registro_espuma',
            'ultimo_registro_olor',
            'ultimo_registro_aceites',
            'direccion_empresa',
            'telefono_empresa',
            'contacto_empresa',
            'numero_aleatorio'

        ));




        $pdf->setPaper('legal', 'landscape');
        // $pdf->setOptions('defaultFont', 'Courier');


        return $pdf->stream($machine . ' ' . $nombre_area . ' ' . $date . '.pdf'); //VisualizarReporte
        //return $pdf->download('MaquinaReporte.pdf'); //DescargarReporte

    }


}
