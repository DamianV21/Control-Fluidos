<?php

namespace App\Http\Livewire\Dashboard;

use App\Http\Livewire\Reportes\Refrigerantes;
use App\Models\Aceite;
use App\Models\Area;
use App\Models\Grasa;
use App\Models\Machine;
use App\Models\Mantenimiento;
use App\Models\Refrigerante;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use JeroenNoten\LaravelAdminLte\View\Components\Form\Select;

class Tarjetas extends Component
{
    public $maquinas, $maquinas2, $conDay, $conWeek, $conMonth, $dateMonth, $dateMonth2, $conWeekCount, $conDayCount, $conMonthCount, $maquinasCount, $date_now, $dateTo, $dateFrom,
        $conBaja, $conAlta, $listBaja, $listAlta, $dateNow, $dateWeek, $dateWeek2, $dateMount1, $dateMount2, $dateMount3, $dateMount4,
        $dateMount5, $dateMount6, $dateMount7, $dateMount8, $dateMount9, $dateMount10, $dateMount11, $dateMount12, $dateMount_1, $dateMount_2, $dateMount_3, $dateMount_4,
        $dateMount_5, $dateMount_6, $dateMount_7, $dateMount_8, $dateMount_9, $dateMount_10, $dateMount_11, $dateMount_12,
        $grafMaquina, $areas, $selectArea, $aceiteMonth, $grasaMonth, $mantMonth, $aceiteMonthCount, $grasaMonthCount, $mantMonthCount, $sumaTotalReg, $refrigerantes,
        $refriCount, $mantData, $mantCount,$listNoActive,$listNoActiveCount;


    public function mount()
    {
        $this->dateNow = Carbon::now()->format('Y-m-d') . ' 23:59:59';
        $this->dateWeek = Carbon::now();
        $this->dateWeek2 = $this->dateWeek->subDay(7)->format('Y-m-d') . ' 00:00:00';
        $this->dateMonth = Carbon::now()->format('m');


        $this->maquinas = Machine::where('is_active', 1)->where(function($query){
            $query->where("usuario_id", auth()->id())
            ->orWhere('created_by', auth()->id())
            ->orWhere('supervisor_id', auth()->id())
            ->orWhere('client_id', auth()->id());
        })->select('id')->get()->toArray();

        $this->maquinas2 = Machine::where('is_active', 1)->where(function($query){
            $query->where("usuario_id", auth()->id())
            ->orWhere('created_by', auth()->id())
            ->orWhere('supervisor_id', auth()->id())
            ->orWhere('client_id', auth()->id());
        })->select('id')->get();


        $this->listNoActive = Machine::where('is_active', 0)->where(function($query){
            $query->where("usuario_id", auth()->id())
            ->orWhere('created_by', auth()->id())
            ->orWhere('supervisor_id', auth()->id())
            ->orWhere('client_id', auth()->id());
        })->select('id')->get();


        //$this->conBaja = DB::select('SELECT count(*) as numBajo from refrigerantes
        //inner join machines on machines.id = refrigerantes.maquina_id
        //where refrigerantes.created_at between and
        //and where concentracion_final  < machines.reco_min;');

        //$this->conAlta = DB::select('SELECT count(*) as numAlta from refrigerantes
        //inner join machines on machines.id = refrigerantes.maquina_id
        //where concentracion_final  > machines.reco_max;');

        $this->listBaja = Refrigerante::join("machines", "machines.id", "=", "refrigerantes.maquina_id")
            ->select('refrigerantes.concentracion_final')
            ->whereIn('maquina_id', $this->maquinas)
            ->whereBetween('refrigerantes.created_at', [$this->dateWeek2, $this->dateNow])
            ->whereRaw('refrigerantes.concentracion_final < machines.reco_min')
            ->get();

        $this->listAlta = Refrigerante::join("machines", "machines.id", "=", "refrigerantes.maquina_id")
            ->select('refrigerantes.concentracion_final')
            ->whereIn('maquina_id', $this->maquinas)
            ->whereBetween('refrigerantes.created_at', [$this->dateWeek2, $this->dateNow])
            ->whereRaw('refrigerantes.concentracion_final > machines.reco_max')
            ->get();

        $this->grafMaquina = Machine::where('is_active', 1)->where(function($query){
            $query->where("usuario_id", auth()->id())
            ->orWhere('created_by', auth()->id())
            ->orWhere('supervisor_id', auth()->id())
            ->orWhere('client_id', auth()->id());
        })->select('id')->get()->toArray();

        $this->dateMount1 = Refrigerante::selectRaw('avg(concentracion_final) as con')
            ->whereRaw('month(created_at) = 1')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();
        $this->dateMount2 = Refrigerante::selectRaw('avg(concentracion_final) as con')
            ->whereRaw('month(created_at) = 2')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();
        $this->dateMount3 = Refrigerante::selectRaw('avg(concentracion_final) as con')
            ->whereRaw('month(created_at) = 3')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();
        $this->dateMount4 = Refrigerante::selectRaw('avg(concentracion_final) as con')
            ->whereRaw('month(created_at) = 4')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();
        $this->dateMount5 = Refrigerante::selectRaw('avg(concentracion_final) as con')
            ->whereRaw('month(created_at) = 5')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();
        $this->dateMount6 = Refrigerante::selectRaw('avg(concentracion_final) as con')
            ->whereRaw('month(created_at) = 6')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();
        $this->dateMount7 = Refrigerante::selectRaw('avg(concentracion_final) as con')
            ->whereRaw('month(created_at) = 7')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();
        $this->dateMount8 = Refrigerante::selectRaw('avg(concentracion_final) as con')
            ->whereRaw('month(created_at) = 8')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();
        $this->dateMount9 = Refrigerante::selectRaw('avg(concentracion_final) as con')
            ->whereRaw('month(created_at) = 9')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();
        $this->dateMount10 = Refrigerante::selectRaw('avg(concentracion_final) as con')
            ->whereRaw('month(created_at) = 10')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();
        $this->dateMount11 = Refrigerante::selectRaw('avg(concentracion_final) as con')
            ->whereRaw('month(created_at) = 11')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();
        $this->dateMount12 = Refrigerante::selectRaw('avg(concentracion_final) as con')
            ->whereRaw('month(created_at) = 12')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();





        $this->dateMount_1 = Refrigerante::selectRaw('avg(concentracion_inicial) as con')
            ->whereRaw('month(created_at) = 1')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();

        $this->dateMount_2 = Refrigerante::selectRaw('avg(concentracion_inicial) as con')
            ->whereRaw('month(created_at) = 2')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();
        $this->dateMount_3 = Refrigerante::selectRaw('avg(concentracion_inicial) as con')
            ->whereRaw('month(created_at) = 3')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();
        $this->dateMount_4 = Refrigerante::selectRaw('avg(concentracion_inicial) as con')
            ->whereRaw('month(created_at) = 4')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();
        $this->dateMount_5 = Refrigerante::selectRaw('avg(concentracion_inicial) as con')
            ->whereRaw('month(created_at) = 5')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();
        $this->dateMount_6 = Refrigerante::selectRaw('avg(concentracion_inicial) as con')
            ->whereRaw('month(created_at) = 6')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();
        $this->dateMount_7 = Refrigerante::selectRaw('avg(concentracion_inicial) as con')
            ->whereRaw('month(created_at) = 7')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();
        $this->dateMount_8 = Refrigerante::selectRaw('avg(concentracion_inicial) as con')
            ->whereRaw('month(created_at) = 8')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();
        $this->dateMount_9 = Refrigerante::selectRaw('avg(concentracion_inicial) as con')
            ->whereRaw('month(created_at) = 9')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();
        $this->dateMount_10 = Refrigerante::selectRaw('avg(concentracion_inicial) as con')
            ->whereRaw('month(created_at) = 10')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();
        $this->dateMount_11 = Refrigerante::selectRaw('avg(concentracion_inicial) as con')
            ->whereRaw('month(created_at) = 11')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();
        $this->dateMount_12 = Refrigerante::selectRaw('avg(concentracion_inicial) as con')
            ->whereRaw('month(created_at) = 12')
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn("maquina_id", $this->grafMaquina)
            ->get();

        //$this->dateMount1 = DB::select('SELECT ifnull(avg(concentracion_final),0.5) as con FROM refrigerantes where maquina_id in (1,2)
        //and month(created_at) = 1 and year(created_at) = "2023";');
        //$this->dateMount2 = DB::select('SELECT ifnull(avg(concentracion_final),0.5) as con FROM refrigerantes where maquina_id in (1,2)
        //and month(created_at) = 2 and year(created_at) = "2023";');


        $this->conBaja = $this->listBaja->count();
        $this->conAlta = $this->listAlta->count();
        $this->maquinasCount = $this->maquinas2->count();
        $this->listNoActiveCount = $this->listNoActive->count();
        $this->date_now = Carbon::now();
        $this->dateTo =  Carbon::parse($this->date_now)->format('Y-m-d') . ' 00:00:00';
        $this->dateFrom = Carbon::parse($this->date_now)->format('Y-m-d') . ' 23:59:59';

        $this->conDay = Refrigerante::whereBetween('created_at', [$this->dateTo, $this->dateFrom])
            ->whereIn('maquina_id', $this->maquinas)
            ->get();

        $this->conWeek = Refrigerante::whereBetween('created_at', [$this->dateWeek2, $this->dateNow])
            ->whereIn('maquina_id', $this->maquinas)
            ->get();

        $this->conMonth = Refrigerante::whereRaw('month(created_at) = ?', $this->dateMonth)
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn('maquina_id', $this->maquinas)
            ->get();

        $this->aceiteMonth = Aceite::whereRaw('month(created_at) = ?', $this->dateMonth)
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn('maquina_id', $this->maquinas)
            ->get();

        $this->grasaMonth = Grasa::whereRaw('month(created_at) = ?', $this->dateMonth)
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn('maquina_id', $this->maquinas)
            ->get();

        $this->mantMonth = Mantenimiento::whereRaw('month(created_at) = ?', $this->dateMonth)
            ->whereRaw('year(created_at) = "2023"')
            ->whereIn('maquina_id', $this->maquinas)
            ->get();

        $this->conDayCount = $this->conDay->count();
        $this->conWeekCount = (($this->conWeek->count()) - $this->conDayCount);
        $this->conMonthCount = $this->conMonth->count();
        $this->aceiteMonthCount = $this->aceiteMonth->count();
        $this->grasaMonthCount = $this->grasaMonth->count();
        $this->mantMonthCount = $this->mantMonth->count();
        $this->sumaTotalReg =  $this->conMonthCount + $this->aceiteMonthCount + $this->grasaMonthCount + $this->mantMonthCount;

        $this->refrigerantes = Refrigerante::whereIn('maquina_id', $this->maquinas)
            ->orderBy('created_at', 'desc')->take(7)
            ->get();
        $this->refriCount = $this->refrigerantes->count();

        $this->mantData = Mantenimiento::whereRaw('year(created_at) = "2023"')
            ->whereIn('maquina_id', $this->maquinas)
            ->orderBy('created_at', 'desc')->take(6)
            ->get();
    }

    public function render()
    {

        return view('livewire.dashboard.tarjetas');
    }
}
