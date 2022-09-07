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
                    <h6><strong>Elige una maquina</strong></h6>
                    <div class="form-group">
                        <select wire:model="maquina" class="form-control">
                            <option selected value="0">Ninguno</option>
                            @foreach ($maquinas as $maquina)
                                <option value="{{ $maquina->id }}">{{ $maquina->ids }}</option>
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
                     <a class="btn btn-danger text-sm btn-block {{ count($data) < 1 ? 'disabled' : '' }}"
                        href="{{ url('report/pdf' . '/' . $valor . '/' . $dateFrom . '/' . $dateTo) }}"
                        target="_blank">
                        <i class="fa fa-file-pdf"></i> Generar PDF </a>

                   <!-- <a class="btn btn-success btn-block {{ count($data) < 1 ? 'disabled' : '' }}"
                        href="{{ url('report/excel' . '/' . $valor . '/' . $dateFrom . '/' . $dateTo) }}"
                        target="_blank">
                        <i class="fa fa-calculator"></i> Exportar a Excel </a>-->
                </div>
                <div class="col-md-3">
                </div>
                <div class="col-md-3">
                </div>
                <div class="col-md-3">
                    <button wire:click="Consulta()"
                        class="btn  btn-block text-sm text-white {{ count($data) > 1 ? 'disabled' : '' }}"
                        style="background-color: #5e80b7;"> <i class="fa fa-search"></i>
                        Consultar
                    </button>

                    <a class="btn btn-block text-sm text-white {{ count($data) < 1 ? 'disabled' : '' }}" href="/reportes"
                        style="background-color: #383838">
                        <i class="fas fa-paper-plane"></i> Nuevo reporte
                    </a>
                </div>
            </div>
        </div>
    </div>






    <!-- Graficas -->
    <div class="col-md-12">

        @if ($data->count() == 0)
            <center>

            </center>
        @else
            <div class="container mt-5">
                <div class="card ">
                    <div style="text-align: center" class="card-body ">

                        <strong> Reporte General</strong>
                        <br>
                        <span>Desde: {{ \Carbon\Carbon::parse($dateFrom)->formatLocalized('%d de %B') }} Hasta:
                            {{ \Carbon\Carbon::parse($dateTo)->formatLocalized('%d de %B') }}</span>
                        <br>
                        <span>{{ $nombre_maquina }}</span>
                        <br>
                        <span>{{ $nombre_empresa }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <figure class="highcharts-figure">
                            <div id="grafica"></div>

                        </figure>
                    </div>
                </div>
        @endif
    </div>
    <br>

    <!-- Datos Generales -->
    <div class="col-md-12">

        @if ($data->count() == 0)
            <center>

                <img style="width: 250px" style="" src="{{ asset('img/undraw_predictive_analytics_re_wxt8.svg') }}" alt="">
                <span class="font-sans text-lg font-bold text-slate-500">Realiza una consulta para generar el
                    reporte</span>
            </center>
        @else
            <div class="card ">
                <div style="text-align: center" class="card-body ">

                    <div class="table-responsive">

                        <table class="table table-striped table-sm table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-white " style="background: #5b80b7">Datos generales</th>
                                    @foreach ($data as $d)
                                        <th class="text-white text-center" style="background: #5b80b7">
                                            {{ \Carbon\Carbon::parse($d->created_at)->format('d') }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <!-- DATOS A EXTRAER DE BD.REFRIGERANTES -->
                            <tbody>

                                <tr>
                                    <td class="text-white" style="background: #7099da"><strong>Conc. Inicial
                                            °Brix</strong>
                                    </td>

                                    @foreach ($data as $d)
                                        <td class="text-center">{{ $d->concentracion_inicial }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td class="text-white" style="background: #7099da"><strong>Volumen Inicial
                                            (lts)</strong>
                                    </td>
                                    @foreach ($data as $d)
                                        <td class="text-center">{{ $d->volumen_inicial }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td class="text-white" style="background: #7099da"><strong>Volume de Recargas
                                            (lts)</strong>
                                    </td>
                                    @foreach ($data as $d)
                                        <td class="text-center">{{ $d->litros_recarga }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td class="text-white" style="background: #7099da"><strong>Conc. de Recarga
                                            °Brix</strong>
                                    </td>
                                    @foreach ($data as $d)
                                        <td class="text-center">{{ $d->concentracion_recarga }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td class="text-white" style="background: #7099da"><strong>Conc. Final
                                            °Brix</strong>
                                    </td>
                                    @foreach ($data as $d)
                                        <td class="text-center">{{ $d->concentracion_final }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td class="text-white" style="background: #7099da"><strong>Litros de
                                            concentrado(Lts/día)</strong></td>
                                    @foreach ($data as $d)
                                        <td class="text-center">{{ $d->concentracion_inicial }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td class="text-white" style="background: #7099da"><strong>Total de concentrado
                                            acumulado</strong></td>
                                    @foreach ($data as $d)
                                        <td class="text-center">{{ $d->concentracion_inicial }}</td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif
    </div>


    <br>

    <br>
    <!-- Datos Estadisticos -->
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-5">

                @if ($data->count() == 0)
                    <center>

                    </center>
                @else
                    <div class="card ">
                        <div style="text-align: center" class="card-body ">
                            <div class="table-responsive">
                                <table class="table table-striped table-sm table-bordered table-hover">
                                    <thead>

                                    </thead>
                                    <!-- DATOS A EXTRAER DE BD.REFRIGERANTES -->
                                    <tbody>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Días
                                                    totales</strong>
                                            </td>

                                            <td class="text-center">{{ $data->count() }}</td>

                                        </tr>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Conc. Inicial
                                                    °Brix</strong>
                                            </td>

                                            <td class="text-center">{{ round($prom_con_ini, 2) }}</td>

                                        </tr>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Volumen Inicial
                                                    (lts)</strong>
                                            </td>

                                            <td class="text-center">{{ round($prom_vol_ini, 2) }}</td>

                                        </tr>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Volumen de
                                                    Recargas
                                                    (lts)</strong>
                                            </td>

                                            <td class="text-center">{{ $suma_vol_rec }}</td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif


            </div>


            <div class="col-md-2">
            </div>

            <div class="col-md-5">

                @if ($data->count() == 0)
                    <center>

                    </center>
                @else
                    <div class="card ">
                        <div style="text-align: center" class="card-body ">

                            <div class="table-responsive">
                                <table class="table table-striped table-sm table-bordered table-hover">
                                    <thead>

                                    </thead>
                                    <!-- DATOS A EXTRAER DE BD.REFRIGERANTES -->
                                    <tbody>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Conc. de
                                                    Recarga
                                                    °Brix</strong></td>

                                            <td class="text-center">{{ round($prom_con_rec, 2) }}</td>

                                        </tr>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Conc. Final
                                                    °Brix</strong>
                                            </td>

                                            <td class="text-center">{{ round($prom_con_fin, 2) }}</td>

                                        </tr>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Litros de
                                                    Concentrado
                                                    (Lts/días)</strong>
                                            </td>

                                            <td class="text-center">9.6</td>

                                        </tr>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Total de
                                                    concentrado
                                                    acumulado</strong>
                                            </td>

                                            <td class="text-center">7.5</td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif


            </div>
        </div>
    </div>

    <?php
    $arr_espuma_aceite = [
        'Si' => 'red',
        'No' => 'green',
        'si' => 'red',
        'no' => 'green',
    ];

    $arr_aroma = [
        'Regular' => 'yellow',
        'Malo' => 'red',
        'Bueno' => 'green',
        'regular' => 'yellow',
        'malo' => 'red',
        'bueno' => 'green',
    ];

    ?>

    <br>

    <!-- Tabla comentarios -->
    <div class="col-md-12">
        @if ($data->count() == 0)
        @else
            <div class="card ">
                <div style="text-align: center" class="card-body ">
                    <strong>Observaciones</strong>
                </div>
            </div>
            <div class="card ">
                <div style="text-align: center" class="card-body ">

                    <div id="columnas" class="table-responsive">
                        @foreach ($data as $da)
                            <table class="table table-bordered table-sm"
                                style="border: 2px solid rgb(119, 119, 119);">
                                <tbody>
                                    <tr>
                                        <td style="border: 2px solid rgb(119, 119, 119);"><strong>Dia:</strong>
                                            {{ \Carbon\Carbon::parse($da->created_at)->format('d') }}
                                        </td>
                                        <td style="border: 2px solid rgb(119, 119, 119);" colspan="6"
                                            rowspan="2">{{ $da->comentarios }}</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 2px solid rgb(119, 119, 119);">
                                            <strong>Mes:</strong>{{ \Carbon\Carbon::parse($da->created_at)->format('m') }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border: 2px solid rgb(119, 119, 119);" rowspan="2">
                                            <strong>Año:</strong>
                                            {{ \Carbon\Carbon::parse($da->created_at)->format('Y') }}
                                        </td>
                                        <td style="border: 2px solid rgb(119, 119, 119);"><strong>Espuma</strong></td>
                                        <td style="border: 2px solid rgb(119, 119, 119);" class="<?php echo $arr_espuma_aceite[$da->exceso_espuma]; ?>">
                                            {{ $da->exceso_espuma }}</td>
                                        <td style="border: 2px solid rgb(119, 119, 119);"><strong>Mal olor</strong>
                                        </td>
                                        <td style="border: 2px solid rgb(119, 119, 119);" class="<?php echo $arr_aroma[$da->aroma]; ?>">
                                            {{ $da->aroma }}</td>
                                        <td style="border: 2px solid rgb(119, 119, 119);"><strong>A.Entramp.</strong>
                                        </td>
                                        <td style="border: 2px solid rgb(119, 119, 119);" class="<?php echo $arr_espuma_aceite[$da->aceites_entrampados]; ?>">
                                            {{ $da->aceites_entrampados }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="6"><strong>Técnico:</strong> {{ $tecnico}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        @endforeach
                    </div>
                </div>
            </div>


        @endif
    </div>

    <br>
    <!-- Graficas 2 -->
    <div class="col-md-12">

        @if ($data->count() == 0)
            <center>

            </center>
        @else
            <div class="card ">
                <div style="text-align: center" class="card-body ">
                    <strong>Estado del soluble</strong>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <figure class="highcharts-figure">
                            <div id="grafica_espuma"></div>
                        </figure>
                    </div>
                    <div class="col-sm">
                        <figure class="highcharts-figure">
                            <div id="grafica_olor"></div>
                        </figure>
                    </div>
                    <div class="col-sm">
                        <figure class="highcharts-figure">
                            <div id="grafica_entram"></div>
                        </figure>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <br>

</div>






<link rel="stylesheet" href="{{ asset('css/reportes.css') }}" />


<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>




<script>
    Highcharts.chart('grafica', {

        title: {
            text: 'Estado general de la maquina'
        },



        yAxis: {
            title: {
                text: 'Concentración'
            }
        },

        xAxis: {
            accessibility: {
                rangeDescription: 'Range: 1 to 30 '
            }
        },

        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        plotOptions: {
            series: {
                label: {
                    connectorAllowed: true
                },
                pointStart: 1
            }
        },

        series: [{
            name: 'Concentración Inicial',
            data: <?= $resul ?>
        }, {
            name: 'Minimo',
            data: <?= $resul3 ?>
        }, {
            name: 'Maximo',
            data: <?= $resul4 ?>
        }, {
            name: 'Concentración Final',
            data: <?= $resul2 ?>
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }

    });

    Highcharts.chart('grafica_espuma', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Espuma'
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
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -180,
                endAngle: 180,
                center: ['50%', '50%'],
                size: '100%'
            }
        },
        series: [{
            type: 'pie',
            name: 'Espuma',
            innerSize: '50%',
            data: [
                ['Si', <?= $espuma_si ?>],
                ['', 0],
                ['No', <?= $espuma_no ?>],
            ]
        }]
    });

    Highcharts.chart('grafica_olor', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Mal olor'

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
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -180,
                endAngle: 180,
                center: ['50%', '50%'],
                size: '100%'
            }
        },
        series: [{
            type: 'pie',
            name: 'Mal olor',
            innerSize: '50%',
            data: [
                ['Malo', <?= $olor_malo ?>],
                ['', 0],
                ['Regular', <?= $olor_regular ?>],
                ['Bueno', <?= $olor_bueno ?>],
            ]
        }]
    });

    Highcharts.chart('grafica_entram', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Aceite entrampado'

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
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -180,
                endAngle: 180,
                center: ['50%', '50%'],
                size: '100%'
            }
        },
        series: [{
            type: 'pie',
            name: 'Aceite entrampado',
            innerSize: '50%',
            data: [

                ['Si', <?= $aceite_si ?>],
                ['', 0],
                ['No', <?= $aceite_no ?>],
            ]
        }]
    });
</script>
