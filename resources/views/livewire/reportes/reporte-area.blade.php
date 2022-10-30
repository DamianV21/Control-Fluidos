<div>
    <!-- Formulario-Consulta -->
    <div class="card shadow mb-4">
        <div class="card-body text-sm">

            <div class="row">
                <div class="col-md-3">
                    <h6><strong>Elige una planta</strong></h6>
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
                    <h6><strong>Elige una área</strong></h6>
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
        </div>
    </div>

    <div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Maquinas</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($maquinas as $maquina)
                <tr>
                    <th scope="row">{{ $maquina->ids }}</th>
                    <td>{{ $maquina->refrigerantes->ph ?? 'No existe' }}</td>
                  </tr>
                @endforeach


            </tbody>
          </table>


    </div>

</div>
