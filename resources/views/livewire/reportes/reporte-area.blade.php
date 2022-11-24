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




    <div class="card shadow mb-4">
        <div class="card-body text-sm">

        <div class="table-responsive">
            <table class="table table-sm table-bordered border-primary" >

                <tbody>
                    <tr>
                        <td colspan="50" class="text-center text-white text-lg" style="background-color: #7492c2"><strong>{{ $nombre_area }}</strong></td>
                    </tr>
                    <tr>
                        <td colspan="{{ $count_data +3 }}" rowspan="2" class="text-center text-white align-middle" style="background-color: #5173aa"><strong>Mes</strong></td>
                        <td style="background-color: white"></td>
                        <td class=" align-middle text-center" style="font-size: 0.40rem;">ALTA CONCENTRACION</td>
                        <td  class=" align-middle text-center" style="font-size: 0.50rem;">Mayor a 6 Brix</td>
                    </tr>
                    <tr>
                        <td style="background-color: pink"></td>
                        <td  class=" align-middle text-center" style="font-size: 0.40rem;">BAJA CONCENTRACION</td>
                        <td class=" align-middle text-center" style="font-size: 0.50rem;"> Menor a 4 Brix</td>
                    </tr>
                    <tr>
                        <td colspan="3" rowspan="3" style="background-color: #c5cedb"></td>
                        <td colspan="{{ $count_data }}" class="text-xs align-middle text-center" style="background-color: #c5cedb"><strong>CW</strong></td>
                        <td style="background-color: yellow"></td>
                        <td  class=" align-middle text-center" style="font-size: 0.40rem;">OK LIMITE INFERIOR</td>
                        <td  class=" align-middle text-center" style="font-size: 0.50rem;">Entre 4 y 5 Brix</td>
                    </tr>
                    <tr>
                        <td colspan="{{ $count_data }}" class="text-xs align-middle text-center" style="background-color: #c5cedb"><strong>cocentracion en %</strong> </td>
                        <td style="background-color: yellowgreen"></td>
                        <td class=" align-middle text-center" style="font-size: 0.40rem;">OK</td>
                        <td class=" align-middle text-center" style="font-size: 0.50rem;">Entrea 5 y 6 Brix</td>
                    </tr>
                    <tr>
                        @foreach ($fechas as $fecha => $fech)
                        @foreach ($fech as $date)
                        <td class="text-xs text-center align-middle" style="background-color: #c5cedb">
                            {{\Carbon\Carbon::parse($date)->format('d')  }}</td>
                        @endforeach

                        @endforeach

                        <td class="text-xs text-center align-middle" style="background-color: #c5cedb; width:10px;" >Pomedio pH</td>
                        <td class="text-xs text-center align-middle" style="background-color: #c5cedb; width:10px;">Promedio Concentracion</td>
                        <td class="text-xs text-center align-middle" style="background-color: #c5cedb; width:10px;">Comentarios</td>
                    </tr>



                    @foreach ($datos as $ids => $valores)
                    <tr>
                        <td rowspan="2" class="text-xs text-center align-middle text-white" style="background-color: #5173aa"> <i class="fas fa-caret-right"></i> </td>
                        <td rowspan="2" class="text-xs text-center align-middle text-white" style="background-color: #749ad8">{{ $ids }}</td>
                        <td class="text-xs text-center align-middle"><strong>pH</strong></td>
                        @foreach ($valores['value'] as $valor)
                            <td  class="text-xs text-center align-middle">{{ $valor }}</td>
                         @endforeach
                         @foreach ($valores['prom_ph'] as $valor)
                         <td class="text-xs text-center align-middle" style="background-color: #bcd5ed">{{ round($valor,2) }}</td>
                        @endforeach
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="text-xs text-center align-middle"><strong>Con.</strong></td>
                        @foreach ($valores['value2'] as $valor)
                        <td class="text-xs text-center align-middle">{{ $valor }}</td>
                        @endforeach

                        <td></td>
                        @foreach ($valores['prom_con'] as $valor)
                            <td <?php if ($valor > 6) {
                                echo "style='background-color: #ffffff'";
                            } if ($valor < 4 ) {
                                echo "style='background-color: #fae3d4'";
                            }
                            if ($valor >=4 && $valor <= 5 ) {
                                echo "style='background-color: #ffff00'";
                            }
                            if ($valor > 5 && $valor <= 6 ) {
                                echo "style='background-color: #92d050'";
                            }
                             ?> >{{ round($valor,2) }}</td>
                         @endforeach
                        <td></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    </div>



</div>
