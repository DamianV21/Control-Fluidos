<div>
    <!-- Formulario-Consulta -->
    <div class="card shadow mb-4">
        <div class="card-body text-sm">

            <div class="row">
                <div class="col-md-3">
                    <h6><strong>Elige una Planta</strong></h6>
                    <div class="form-group">
                        <select wire:model="planta" class="form-control">
                            <option value="0">Ninguno</option>
                            @foreach ($plantas as $planta)
                                <option value="{{ $planta->id }}">{{ $planta->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6><strong>Elige una Área</strong></h6>
                    <div class="form-group">
                        <select wire:model="area" class="form-control">
                            <option selected value="0">Ninguno</option>
                            @foreach ($areas as $area)
                                <option value="{{ $area->id }}">{{ $area->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6><strong>Fecha desde</strong></h6>
                    <div class="form-group">
                        <input type="date" wire:model="dateFrom" class="form-control flatpickr"
                            placeholder="Click para elegir">
                    </div>
                </div>
                <div class="col-md-3">
                    <h6><strong>Fecha hasta</strong></h6>
                    <div class="form-group">
                        <input type="date" wire:model="dateTo" class="form-control flatpickr"
                            placeholder="Click para elegir">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">



                </div>
                <div class="col-md-3">
                </div>
                <div class="col-md-3">
                </div>
                <div class="col-md-3 pt-2">
                    <button wire:click="Consulta()" class="btn  btn-block text-sm text-white"
                        style="background-color: #5e80b7;"> <i class="fa fa-search"></i>
                        Consultar
                    </button>
                </div>
            </div>
        </div>
    </div>



    <div>
       <h1>Total resultados {{ $data->count() }}</h1>
        @foreach ($data as $d)

            <p>{{ $d->maquinas->ids}}</p>
        @endforeach
    </div>



</div>
