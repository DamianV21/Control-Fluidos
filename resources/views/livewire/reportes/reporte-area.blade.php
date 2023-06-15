<div>
    <!-- Formulario de Consulta -->
    <div class="container-fluid">
        <div class="page-header min-height-160 border-radius-xl mt-4"
            style="
            background-image: url('img/presentacion6.png');
            background-position-y: 35%;
          ">
            <span class="mask bg-gradient-light opacity-3"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-3 mt-n8 mb-4 overflow-hidden">
            <div class="row gx-4">
                <div class="container text-end mb-3 btn_reportes">
                    <a class="btn btn-round mb-0 me-1 bg-gradient-danger {{ count($data) < 1 ? 'disabled' : '' }}"
                        target="_blank"
                        href="{{ url('report_area/pdf' . '/' . $id_area . '/' . $dateFrom . '/' . $dateTo) }}"
                        style="--bs-btn-padding-y: .40rem; --bs-btn-padding-x: .80rem; --bs-btn-font-size: .80rem;">
                        <i class="fas fa-file-pdf"></i> Generar PDF</a>

                    <button class="btn btn-round mb-0 me-1 bg-gradient-primary {{ count($data) < 1 ? 'disabled' : '' }}"
                        href="/reportes-area"
                        style="--bs-btn-padding-y: .40rem; --bs-btn-padding-x: .80rem; --bs-btn-font-size: .80rem;">
                        <i class="fas fa-plus-circle"></i> Nuevo Reporte</button>
                </div>

                <div class="row">
                    <div class="col-md-3 my-1">
                        <div class="form-floating">
                            <select wire:model="planta" class="form-select">
                                <option value="0">Ninguno</option>
                                @foreach ($plantas as $planta)
                                    <option value="{{ $planta->id }}">{{ $planta->nombre }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Selecciona una Planta</label>
                        </div>
                    </div>
                    <div class="col-md-3 my-1">
                        <div class="form-floating">
                            <select wire:model="area" class="form-select">
                                <option selected value="0">Ninguno</option>
                                @foreach ($areas as $area)
                                    <option value="{{ $area->id }}">{{ $area->nombre }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Selecciona una Área</label>
                        </div>
                    </div>
                    <div class="col-md-3 my-1">
                        <div class="form-floating">
                            <input type="date" wire:model="dateFrom" class="form-control"
                                placeholder="Selecciona fecha">
                            <label for="floatingInputValue">Fecha inicial</label>
                        </div>
                    </div>
                    <div class="col-md-3 my-1">
                        <div class="form-floating">
                            <input type="date" wire:model="dateTo" class="form-control"
                                placeholder="Selecciona fecha">
                            <label for="floatingInputValue">Fecha final</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-9 my-1">
                    </div>
                    <div class="col-md-3 my-1">
                        <button wire:click="Consulta()"
                            class="btn mb-0 w-100 btn-round me-1 bg-gradient-dark my-1 {{ count($data) > 1 ? 'disabled' : '' }}">
                            <i class="fas fa-paper-plane"></i> Generar reporte</button>
                        <div class="general">
                            <a class="btn mb-0 w-100 btn-round me-1 bg-gradient-danger my-1 {{ count($data) < 1 ? 'disabled' : '' }}"
                                target="_blank"
                                href="{{ url('report_area/pdf' . '/' . $id_area . '/' . $dateFrom . '/' . $dateTo) }}">
                                <i class="fas fa-file-pdf"></i> Generar PDF</a>
                            <a class="btn mb-0 w-100 btn-round me-1 bg-gradient-primary my-2 {{ count($data) < 1 ? 'disabled' : '' }}"
                                href="/reportes-area">
                                <i class="fas fa-plus-circle"></i> Nuevo reporte</a>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
    @if ($data->count() == 0)
        <div class="container-fluid py-0">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-0">
                        <div class="content-wrapper-header2">
                            <img class="content-wrapper-img" src="img/reporte_area.png" alt="" />
                            <div class="content-wrapper-context">
                                <h2 class="text-white">Experimenta!</h2>
                                <div class="content-text">
                                    Disfruta de la mejor experiencia obteniendo información detallada del rendimiento
                                    de las áreas en las que se trabaja diariamente para obtener mejores resultados y
                                    mayor
                                    confianza de tus clientes.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container-fluid pt-4 mb-1">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <!-- Informacion de Reporte -->
                        <div class="card-header pb-0">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3 align-items-center">
                                        <div class="col-auto my-auto">
                                            <div class="h-100 center">
                                                <img class="w-60 mb-2 mx-3" src="img/logo7.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 align-items-center">
                                        <ul class="list-group">
                                            <li class="list-group-item border-0 ps-0 text-xs my-1">
                                                <strong class="text-dark">E-mail:</strong> &nbsp;
                                                customerservice@cuttingfluids.com.mx
                                            </li>
                                            <li class="list-group-item border-0 ps-0 text-xs mb-1">
                                                <strong class="text-dark">Telefono:</strong> &nbsp; (614) 426
                                                2186
                                            </li>
                                            <li class="list-group-item border-0 ps-0 text-xs">
                                                <strong class="text-dark">Sitio web:</strong> &nbsp;
                                                www.cuttingfluids.com.mx
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 ">
                                        <ul class="list-group">
                                            <li class="list-group-item border-0 ps-0 pt-0 text-xs my-1">
                                                <strong class="text-dark">Cutting Fluids S.A. de C.V.</strong>
                                            </li>
                                            <li class="list-group-item border-0 ps-0 text-xs">
                                                <strong class="text-dark">Dirección:</strong> &nbsp; Circuito Balvanera
                                                5a
                                                Bodega 3, Fracc. Industrial Balvanera. Querétaro, Qro. CP.76900
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <hr class="horizontal dark mt-1">
                                <p class="text-sm mx-3 mb-2 text-end">
                                    <span class="font-weight-bold ms-1">Fecha: </span>
                                    {{ $date = \Carbon\Carbon::now()->format('d-m-Y ') }}
                                </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-auto my-auto">
                                            <div class="h-100">
                                                <ul class="list-group">
                                                    <h6>Detalles del Cliente:</h6>
                                                    <li class="list-group-item border-0 ps-0 text-sm mb-1">
                                                        <strong class="text-dark">Planta:</strong> &nbsp;
                                                        {{ $nombre_planta }}
                                                    </li>
                                                    <li class="list-group-item border-0 ps-0 text-sm mb-1">
                                                        {{ $direccion_planta }}
                                                    </li>
                                                    <li class="list-group-item border-0 ps-0 text-sm">
                                                        <strong class="text-dark">Telefono:</strong> &nbsp;
                                                        {{ $telefono_planta }}
                                                    </li>
                                                    <li class="list-group-item border-0 ps-0 text-sm">
                                                        <strong class="text-dark">Responsable:</strong> &nbsp;
                                                        {{ $contacto_planta }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 space">
                                        <div class="col-auto my-auto">
                                            <div class="h-100">
                                                <ul class="list-group">
                                                    <h6>Detalles del Reporte:</h6>
                                                    <li class="list-group-item border-0 ps-0 text-sm mb-1">
                                                        <strong class="text-dark">Reporte:</strong> &nbsp;
                                                        #{{ $numero_aleatorio }}
                                                    </li>
                                                    <li class="list-group-item border-0 ps-0 text-sm mb-1">
                                                        <strong class="text-dark">Área:</strong> &nbsp;
                                                        {{ $nombre_area }}
                                                    </li>
                                                    <li class="list-group-item border-0 ps-0 text-sm">
                                                        <strong class="text-dark">IVA:</strong> &nbsp;
                                                        {{ $nombre_iva }}
                                                    </li>
                                                    <li class="list-group-item border-0 ps-0 text-sm mb-1">
                                                        <strong class="text-dark">Emitido del:</strong> &nbsp;
                                                        {{ \Carbon\Carbon::parse($dateFrom)->format('d-m-Y') }} &nbsp;
                                                        <strong class="text-dark"> al:</strong> &nbsp;
                                                        {{ \Carbon\Carbon::parse($dateTo)->format('d-m-Y') }}
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="horizontal dark mt-3 mb-6">


                        <div class="card-body px-0 pt-0 pb-2">

                            <div class="timeline timeline-one-side">
                                <!-- Seccion 1 Tabla de concentraciones y pH -->
                                <div class="timeline-block mb-5">
                                    <span class="timeline-step">
                                        <i class="fas fa-table text-primary text-gradient"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0 text-center">Tabla general
                                            de
                                            Concentrado
                                        </h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-5 text-center">
                                            SECCIÓN 1</p>
                                        <div class="table-responsive p-0 mx-1">
                                            <table class="table table-sm table-bordered border-primary"
                                                style="text-align: center; font-family: 'Roboto', sans-serif; ">

                                                <tbody>
                                                    <tr>
                                                        <td colspan="50" style="background-color: #e4e4e4;">
                                                            <h6 class="mb-0 text-sm ">
                                                                <strong>{{ $nombre_area }}</strong>
                                                            </h6>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="{{ $count_data + 3 }}" rowspan="2"
                                                            class="align-middle" style="background-color: #dbdbdb">
                                                            <h6 class="mb-0 text-sm "><strong>Mes</strong>
                                                            </h6>
                                                        </td>
                                                        <td style="background-color: white"></td>
                                                        <td class=" align-middle text-center text-black"
                                                            style="font-size: 0.40rem;">ALTA CONCENTRACION
                                                        </td>
                                                        <td class=" align-middle text-center text-black"
                                                            style="font-size: 0.50rem;">Mayor a 6 Brix
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: pink"></td>
                                                        <td class=" align-middle text-center text-black"
                                                            style="font-size: 0.40rem;">BAJA CONCENTRACION
                                                        </td>
                                                        <td class=" align-middle text-center text-black"
                                                            style="font-size: 0.50rem;"> Menor a 4 Brix
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" rowspan="3"
                                                            style="background-color: #f0f0f0"></td>
                                                        <td colspan="{{ $count_data }}"
                                                            class="text-xs align-middle text-center text-dark"
                                                            style="background-color: #f0f0f0"><strong>CW</strong></td>
                                                        <td style="background-color: yellow"></td>
                                                        <td class=" align-middle text-center text-black"
                                                            style="font-size: 0.40rem;">OK LIMITE INFERIOR
                                                        </td>
                                                        <td class=" align-middle text-center text-black"
                                                            style="font-size: 0.50rem;">Entre 4 y 5 Brix
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="{{ $count_data }}"
                                                            class="text-xs align-middle text-center text-dark"
                                                            style="background-color: #f0f0f0"><strong>cocentracion en
                                                                %</strong> </td>
                                                        <td style="background-color: yellowgreen"></td>
                                                        <td class=" align-middle text-center"
                                                            style="font-size: 0.40rem;">OK</td>
                                                        <td class=" align-middle text-center"
                                                            style="font-size: 0.50rem;">Entrea 5 y 6 Brix
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        @foreach ($fechas as $fecha => $fech)
                                                            @foreach ($fech as $date)
                                                                <td class="text-xs text-center align-middle text-dark"
                                                                    style="background-color: #f0f0f0">
                                                                    {{ \Carbon\Carbon::parse($date)->format('d') }}
                                                                </td>
                                                            @endforeach
                                                        @endforeach

                                                        <td class="text-xxs text-center align-middle text-black"
                                                            style="background-color: #f0f0f0; width:10px;">
                                                            Pomedio pH</td>
                                                        <td class="text-xxs text-center align-middle text-black"
                                                            style="background-color: #f0f0f0; width:10px;">
                                                            Promedio Concentracion</td>
                                                        <td class="text-xxs text-center align-middle text-black"
                                                            style="background-color: #f0f0f0; width:10px;">
                                                            Comentarios</td>
                                                    </tr>



                                                    @foreach ($datos as $ids => $valores)
                                                        <tr>
                                                            <td rowspan="2"
                                                                class="text-xs text-center align-middle text-white"
                                                                style="background-color: #dbdbdb">

                                                                <div class="onnline mx-1">
                                                                </div>
                                                                <h6 class="text-xxs">Online</h6>

                                                            </td>
                                                            <td rowspan="2"
                                                                class="text-xs text-center align-middle text-black"
                                                                style="background-color: #e4e4e4"><strong>{{ $ids }}</strong>
                                                            </td>
                                                            <td class="text-xs text-center align-middle text-black">
                                                                <strong>pH</strong>
                                                            </td>
                                                            @foreach ($valores['value'] as $valor)
                                                                <td class="text-xs text-center align-middle">
                                                                    {{ $valor }}</td>
                                                            @endforeach
                                                            @foreach ($valores['prom_ph'] as $valor)
                                                                <td class="text-xs text-center align-middle text-dark"
                                                                    <?php if ($valor >= 8.9 && $valor <= 9.69) {
                                                                        echo "style='background-color: #bdd6ee'";
                                                                    }
                                                                    if ($valor >= 8.3 && $valor <= 8.89) {
                                                                        echo "style='background-color: #c5e0b3'";
                                                                    }
                                                                    if ($valor >= 7 && $valor <= 8.29) {
                                                                        echo "style='background-color: #ffff00'";
                                                                    }

                                                                    ?>>
                                                                    <strong>{{ round($valor, 2) }}</strong>
                                                                </td>
                                                            @endforeach
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-xs text-center align-middle text-black"
                                                                style="border: rgb(223, 221, 221) 1px solid;">
                                                                <strong>Con.</strong>
                                                            </td>
                                                            @foreach ($valores['value2'] as $valor)
                                                                <td class="text-xs text-center align-middle"
                                                                    style="border: rgb(223, 221, 221) 1px solid;">
                                                                    {{ $valor }}</td>
                                                            @endforeach

                                                            <td style="border: rgb(223, 221, 221) 1px solid;"></td>
                                                            @foreach ($valores['prom_con'] as $valor)
                                                                <td style="border: rgb(223, 221, 221) 1px solid;"
                                                                    class="text-xs text-dark" <?php if ($valor > 6) {
                                                                        echo "style='background-color: #ffffff'";
                                                                    }
                                                                    if ($valor < 4) {
                                                                        echo "style='background-color: #fae3d4'";
                                                                    }
                                                                    if ($valor >= 4 && $valor <= 5) {
                                                                        echo "style='background-color: #ffff00'";
                                                                    }
                                                                    if ($valor > 5 && $valor <= 6) {
                                                                        echo "style='background-color: #92d050'";
                                                                    }
                                                                    ?>>
                                                                    <strong> {{ round($valor, 2) }}</strong>
                                                                </td>
                                                            @endforeach
                                                            <td style="border: rgb(223, 221, 221) 1px solid;"></td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!-- Datos para Graficas Concentracion -->
                                @foreach ($datos as $item => $i)
                                    @foreach ($i['prom_con'] as $info => $in)
                                        @if ($in < 4)
                                            @php
                                                $concentracion_baja++;
                                            @endphp
                                        @endif

                                        @if ($in > 6)
                                            @php
                                                $concentracion_alta++;
                                            @endphp
                                        @endif
                                        @if ($in >= 4 && $in <= 6)
                                            @php
                                                $concentracion_ok++;
                                            @endphp
                                        @endif
                                    @endforeach
                                @endforeach

                                <!-- Datos para Graficas pH-->
                                @foreach ($datos as $item => $i)
                                    @foreach ($i['prom_ph'] as $info => $in)
                                        @if ($in >= 8.9 && $in <= 9.69)
                                            @php
                                                $ph_ok++;
                                            @endphp
                                        @endif

                                        @if ($in <= 8.89)
                                            @php
                                                $ph_bajo++;
                                            @endphp
                                        @endif
                                    @endforeach
                                @endforeach

                                <!-- Grafica circular -->
                                <div class="timeline-block mb-5">
                                    <span class="timeline-step">
                                        <i class="fas fa-chart-line text-primary text-gradient"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0 text-center">Grafica
                                            de Concentrado</h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-5 text-center">
                                            SECCIÓN 2</p>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0 text-center">
                                                        Grafica de Concentración
                                                    </h6>
                                                    <figure class="highcharts-figure">
                                                        <div id="grafica_con"></div>
                                                    </figure>
                                                </div>
                                                <div class="col-sm">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0 text-center">
                                                        Grafica de pH
                                                    </h6>
                                                    <figure class="highcharts-figure">
                                                        <div id="grafica_ph"></div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

    @endif
</div>




<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    window.addEventListener('data_vacia', function(e) {
        Swal.fire({
            icon: 'error',
            title: 'Lo siento...',
            text: '¡Algo salió mal!',
            footer: '<strong style="color: #5e80b7"> No hay datos para mostrar </strong>',
            confirmButtonColor: '#5e80b7',
            confirmButtonText: 'Aceptar'
        })
    });
</script>


<script>
    Highcharts.chart('grafica_con', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    connectorColor: '#5e80b7'
                }
            }
        },
        series: [{
            name: 'Valor',
            data: [{
                    name: 'Concentración Ok',
                    y: <?= $concentracion_ok ?>,
                    sliced: true,
                    selected: true
                },
                {
                    name: 'Concentración Alta',
                    y: <?= $concentracion_alta ?>
                },
                {
                    name: 'Concentración Baja',
                    y: <?= $concentracion_baja ?>
                }

            ]
        }]
    });
    Highcharts.chart('grafica_ph', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    connectorColor: '#5e80b7'
                }
            }
        },
        series: [{
            name: 'Valor',
            data: [{
                    name: 'pH Ok',
                    y: {{ $ph_ok }},
                    sliced: true,
                    selected: true
                },
                {
                    name: 'pH Bajo',
                    y: {{ $ph_bajo }}
                }

            ]
        }]
    });
</script>
