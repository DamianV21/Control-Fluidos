<?php

namespace App\Http\Livewire\Menu;

use App\Http\Livewire\Reportes\Refrigerantes;
use App\Models\Machine;
use App\Models\Refrigerante;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class General extends Component
{
    public $maquinas,$listMaquinas,$dateNow,$dateAdd;

    public function mount(){
        $this->maquinas = Machine::where('is_active', 1)->where(function($query){
            $query->where("usuario_id", auth()->id())
            ->orWhere('created_by', auth()->id())
            ->orWhere('supervisor_id', auth()->id())
            ->orWhere('client_id', auth()->id());
        })->select('id')->get()->toArray();


        $this->listMaquinas = Refrigerante::whereIn('maquina_id',$this->maquinas)
        ->whereRaw('created_at in (select max(created_at) from refrigerantes group by maquina_id)')
        ->get();

        $this->dateNow = Carbon::now();


    }

    public function render()
    {
        return view('livewire.menu.general');
    }
}
