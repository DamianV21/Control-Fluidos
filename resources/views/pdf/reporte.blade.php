<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .data-info {
            margin-bottom: 0rem;
            margin-top: 0.3rem;
            font-size: 0.8rem;
        }

        .data-detail {
            margin-bottom: 0rem;
            margin-top: 0.1rem;
        }

        .table-info {
            margin-top: 0rem;
        }

        .table-detail {
            margin-top: 0rem;
            margin-bottom: 2rem;
            margin-left: 10rem;

        }

        hr.horizontal {
            background-color: rgb(243, 243, 243);
            color: #ebebeb;
        }

        hr.horizontal.dark {
            margin-top: 1rem;
            margin-left: 3rem;
            margin-right: 3rem;
        }

        .info-date {
            text-align: left;
            margin-right: 1.5rem;
            margin-bottom: 0rem;
        }

        .info-page {
            text-align: right;
            margin-right: 1.5rem;
            margin-bottom: 0rem;
        }


        .text-normal {
            font-size: 0.9rem;
        }

        .text-grande {
            font-size: 1.1rem;
        }

        .text-sm {
            font-size: 0.8rem;
        }

        .text-center {
            text-align: center;
        }

        .pagenum:before {
            content: counter(page);
        }

        .page-break {
            page-break-after: always;
        }

        .page-break2 {
            page-break-inside: avoid;
        }

        .grafic-line {
            margin-bottom: 1.5rem;
        }

        .data-table {
            margin-bottom: 6.5rem;
            margin-top: 5rem;
        }

        .grafica-circular {
            margin-bottom: 9.5rem;
            margin-top: 7rem;
        }

        .green {
            background: rgb(155, 187, 89);
            color: white;
        }

        .red {
            background: rgb(240, 0, 0);
            color: white;
        }

        .yellow {
            background: rgb(240, 236, 0);

        }

        .columnas {
            width: 50%;
            display: inline-block;
        }

        .commit-table {
            margin-left: 3rem;
        }

        .data-commit-table {
            width: 95%;
            margin-bottom: 1.5rem;
        }

        .pie {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 40px;
            color: white;
            font-size: 9pt;
            color: #333333;
        }
    </style>

</head>

<body>
    <!--ENCABEZADO DE LA PAGINA  PRINCIPAL-->
    <section class="header">
        <table class="table-info" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td width="30%" style="vertical-align: top; padding-top: 10px; position:relative">
                    <img src="{{ base_path() }}/public/img/logo7.png" width="170px">
                </td>

                <td width="40%" style="vertical-aling:top; padding-top:10px ">
                    <p class="data-info">
                        <strong class="text-dark">E-mail:</strong> &nbsp;
                        customerservice@cuttingfluids.com.mx
                    </p>
                    <p class="data-info"><strong class="text-dark">Telefono:</strong> &nbsp; (614) 426
                        2186</p>
                    <p class="data-info"><strong class="text-dark">Sitio web:</strong> &nbsp;
                        www.cuttingfluids.com.mx</p>

                </td>

                <td width="30%" class="rob-bol" style=" vertical-aling:top;  padding-top:10px">
                    <p class="data-info"><strong>Cutting Fluids S.A. de C.V.</strong></p>
                    <p class="data-info"><strong>Dirección:</strong> &nbsp; Circuito Balvanera
                        5a Bodega 3, Fracc. Industrial Balvanera. Querétaro, Qro. CP.76900</p>
                </td>
            </tr>
        </table>
        <hr class="horizontal dark">
        <table class="table-detail" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td width="50%" style="vertical-aling:top; padding-top:10px ">
                    <p class="data-detail text-grande"><strong>Detalles del Cliente:</strong></p>
                    <p class="data-detail text-normal"><strong class="text-dark">Planta:</strong> &nbsp;
                        {{ $planta_nombre }}</p>
                    <p class="data-detail text-normal">{{ $direccion_empresa }}</p>
                    <p class="data-detail text-normal"><strong class="text-dark">Telefono:</strong> &nbsp;
                        {{ $telefono_empresa }}</p>
                    <p class="data-detail text-normal"> <strong class="text-dark">Responsable:</strong> &nbsp;
                        {{ $contacto_empresa }}</p>
                </td>

                <td width="50%" class="rob-bol" style=" vertical-aling:top;  padding-top:10px">
                    <p class="data-detail text-grande"><strong>Detalles del Reporte:</strong></p>
                    <p class="data-detail text-normal"><strong class="text-dark">Reporte:</strong> &nbsp;
                        #{{ $numero_aleatorio }}</p>
                    <p class="data-detail text-normal"><strong class="text-dark">Maquina:</strong> &nbsp;
                        {{ $machine }}</p>
                    <p class="data-detail text-normal"> <strong class="text-dark">Producto:</strong> &nbsp;
                        {{ $producto }}</p>
                    <p class="data-detail text-normal"><strong class="text-dark">Emitido del:</strong> &nbsp;
                        {{ \Carbon\Carbon::parse($dateFrom)->format('d-m-Y') }} &nbsp;
                        <strong class="text-dark"> al:</strong> &nbsp;
                        {{ \Carbon\Carbon::parse($dateTo)->format('d-m-Y') }}
                    </p>
                </td>
            </tr>
        </table>
    </section>
    <!--END ENCABEZADO DE LA PAGINA PRINCIPAL-->

    <!--GRAFICA LINEAL DE CONCENTRACIONES-->
    <p class="text-center"><strong>GRAFICA DE CONCENTRACIONES</strong></p>
    <div class="grafic-line text-center">
        <?php

        $qc = new QuickChart();
        $d_reco_min = json_encode($reco_min);
        $d_reco_max = json_encode($reco_max);
        $d_con_inicial = json_encode($con_inicial);
        $d_con_final = json_encode($con_final);
        $d_dias = json_encode($dias_d);
        $qc->setConfig("{
                                                                                                                                                                                                                 type: 'line',
                                                                                                                                                                                                           data: {
                                                                                                                                                                                                             labels: $d_dias,
                                                                                                                                                                                                             datasets: [
                                                                                                                                                                                                                 {
                                                                                                                                                                                                                 label: 'Datos:',
                                                                                                                                                                                                                 fill: false,
                                                                                                                                                                                                                 backgroundColor: 'rgb(255,255 ,255 )',
                                                                                                                                                                                                                 borderColor: 'rgb(255,255 ,255 )',
                                                                                                                                                                                                                 data: [20],
                                                                                                                                                                                                               },
                                                                                                                                                                                                               {
                                                                                                                                                                                                                 label: 'Concentración Inicial',
                                                                                                                                                                                                                 backgroundColor: 'rgb(149, 147, 146)',
                                                                                                                                                                                                                 borderColor: 'rgb(149, 147, 146)',
                                                                                                                                                                                                                 data: $d_con_inicial,
                                                                                                                                                                                                                 fill: false,
                                                                                                                                                                                                               },
                                                                                                                                                                                                               {
                                                                                                                                                                                                                 label: 'Concentración Final',
                                                                                                                                                                                                                 backgroundColor: 'rgb(94, 128, 183)',
                                                                                                                                                                                                                 borderColor: 'rgb(94, 128, 183)',
                                                                                                                                                                                                                 data: $d_con_final,
                                                                                                                                                                                                                 fill: false,
                                                                                                                                                                                                               },
                                                                                                                                                                                                               {
                                                                                                                                                                                                                 label: 'Minimo',
                                                                                                                                                                                                                 backgroundColor: 'rgb(193, 192, 192 )',
                                                                                                                                                                                                                 borderColor: 'rgb(193, 192, 192)',
                                                                                                                                                                                                                 data: $d_reco_min,
                                                                                                                                                                                                                 fill: false,
                                                                                                                                                                                                               },
                                                                                                                                                                                                               {
                                                                                                                                                                                                                 label: 'Maximo',
                                                                                                                                                                                                                 backgroundColor: 'rgb(193, 192, 192)',
                                                                                                                                                                                                                 borderColor: 'rgb(193, 192, 192)',
                                                                                                                                                                                                                 data: $d_reco_max,
                                                                                                                                                                                                                 fill: false,
                                                                                                                                                                                                               },


                                                                                                                                                                                                             ],
                                                                                                                                                                                                           },
                                                                                                                                                                                                           options: {
                                                                                                                                                                                                             title: {
                                                                                                                                                                                                               display: false,
                                                                                                                                                                                                               text: 'Gráfica de Concentración',
                                                                                                                                                                                                             },
                                                                                                                                                                                                           },
                                                                                                                                                                                                               }");

        $a = $qc->getUrl();
        $imageData = base64_encode(file_get_contents($a));
        echo '<img width="900px" height="380px" src="data:image/jpeg;base64,' . $imageData . '">';

        ?>
    </div>
    <!--END GRAFICA LINEAL DE CONCENTRACIONES-->

    <!--PIE DE PAGINA-->
    <section class="pie">
        <hr class="horizontal dark">
        <table cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td width="50%">
                    <p class="info-date text-sm">
                        <span>Fecha: </span>
                        {{ $date = \Carbon\Carbon::now()->format('d-m-Y') }}
                    </p>
                </td>

                <td width="50%">
                    <p class="info-page text-sm">
                        Página <span class="pagenum"></span>
                    </p>
                </td>
            </tr>
        </table>
    </section>
    <!--END PIE DE PAGINA-->

    <!--SALTO DE PAGINA-->
    <div class="page-break"></div>

    <!--ENCABEZADO DE LA PAGINA-->
    <section class="header">
        <table class="table-info" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td width="30%" style="vertical-align: top; padding-top: 10px; position:relative">
                    <img src="{{ base_path() }}/public/img/logo7.png" width="170px">
                </td>

                <td width="40%" style="vertical-aling:top; padding-top:10px ">
                    <p class="data-info">
                        <strong class="text-dark">E-mail:</strong> &nbsp;
                        customerservice@cuttingfluids.com.mx
                    </p>
                    <p class="data-info"><strong class="text-dark">Telefono:</strong> &nbsp; (614) 426
                        2186</p>
                    <p class="data-info"><strong class="text-dark">Sitio web:</strong> &nbsp;
                        www.cuttingfluids.com.mx</p>

                </td>

                <td width="30%" class="rob-bol" style=" vertical-aling:top;  padding-top:10px">
                    <p class="data-info"><strong>Cutting Fluids S.A. de C.V.</strong></p>
                    <p class="data-info"><strong>Dirección:</strong> &nbsp; Circuito Balvanera
                        5a Bodega 3, Fracc. Industrial Balvanera. Querétaro, Qro. CP.76900</p>
                </td>
            </tr>
        </table>
        <hr class="horizontal dark">
    </section>
    <!--END ENCABEZADO DE LA PAGINA-->


    <!--TABLA GENERAL-->
    <section class="data-table">
        <p class="text-center"><strong>TABLA DE CONCENTRACIONES</strong></p>
        <table cellpadding="0" cellspacing="0" class="table-items" width="100%">
            <thead>
                <tr>
                    <td class="rob-bol" width="250px"
                        style="text-align:center; background: #959392;  border: 1px solid #000000;">Datos Generales /
                        Días
                    </td>
                    @foreach ($data as $d)
                        <td class="rob-bol"
                            style="text-align:center; background: #959392;  border: 1px solid #000000;">
                            {{ \Carbon\Carbon::parse($d->created_at)->format('d') }}
                        </td>
                    @endforeach
                </tr>
            </thead>
            <!-- DATOS A EXTRAER DE BD.REFRIGERANTES -->
            <tbody>

                <tr>
                    <td class="rob-bol" style="text-align:center; background: #BFBFBF; border: 1px solid #000000;">
                        Conc.
                        Inicial
                        °Brix
                    </td>

                    @foreach ($data as $d)
                        <td class="text-center" style=" text-align:center; border: 1px solid #000000;">
                            {{ $d->concentracion_inicial }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td class="rob-bol" style="text-align:center; background: #BFBFBF; border: 1px solid #000000;">
                        Volumen
                        Inicial
                        (lts)
                    </td>
                    @foreach ($data as $d)
                        <td class="text-center" style=" text-align:center; border: 1px solid #000000;">
                            {{ $d->volumen_inicial }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td class="rob-bol" style="text-align:center; background: #BFBFBF; border: 1px solid #000000;">
                        Volume de
                        Recargas
                        (lts)
                    </td>
                    @foreach ($data as $d)
                        <td class="text-center" style="text-align:center; border: 1px solid #000000;">
                            {{ $d->litros_recarga }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td class="rob-bol" style=" text-align:center;background: #BFBFBF; border: 1px solid #000000;">
                        Conc.
                        de
                        Recarga
                        °Brix
                    </td>
                    @foreach ($data as $d)
                        <td class="text-center" style="text-align:center; border: 1px solid #000000;">
                            {{ $d->concentracion_recarga }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td class="rob-bol" style="text-align:center; background: #BFBFBF; border: 1px solid #000000;">
                        Conc.
                        Final
                        °Brix
                    </td>
                    @foreach ($data as $d)
                        <td class="text-center" style="text-align:center; border: 1px solid #000000;">
                            {{ $d->concentracion_final }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td class="rob-bol" style="text-align:center; background: #BFBFBF; border: 1px solid #000000;">
                        Rango pH
                    </td>
                    @foreach ($data as $d)
                        <td class="text-center" style="text-align:center; border: 1px solid #000000;">
                            {{ $d->ph }}</td>
                    @endforeach
                </tr>
                <tr>
                    <td class="rob-bol" style="text-align:center; background: #BFBFBF; border: 1px solid #000000;">
                        Litros de
                        concentrado(Lts/día)</td>
                    @foreach ($data as $d)
                        <td class="text-center" style="text-align:center; border: 1px solid #000000;">
                            {{ ($d->litros_recarga * $d->concentracion_recarga * $d->maquinas->fac_refractor) / 100 }}
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td class="rob-bol" style="text-align:center; background: #BFBFBF; border: 1px solid #000000;">
                        Total
                        de
                        concentrado
                        acumulado</td>
                    @foreach ($data as $d)
                        <td class="text-center" style="text-align:center; border: 1px solid #000000;">
                            {{ $num1 += ($d->litros_recarga * $d->concentracion_recarga * $d->maquinas->fac_refractor) / 100 }}
                        </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <br>
        <!--Tabla estadisticas-->
        <table cellpadding="0" cellspacing="0" width="100%">

            <tr>
                <td width="10%"></td>
                <td width="40%">
                    <table cellpadding="0" cellspacing="0" class="table-items">
                        <thead>

                        </thead>
                        <!-- DATOS A EXTRAER DE BD.REFRIGERANTES -->
                        <tbody>
                            <tr>
                                <td class="rob-bol"
                                    style="text-align:center; background: #BFBFBF; border: 1px solid #000000; width:200px;">
                                    Días
                                    totales
                                </td>

                                <td class="text-center"
                                    style=" text-align:center; border: 1px solid #000000; width:200px;">
                                    {{ $data->count() }}</td>

                            </tr>
                            <tr>
                                <td class="rob-bol"
                                    style="text-align:center; background: #BFBFBF; border: 1px solid #000000">
                                    Conc. Inicial
                                    °Brix
                                </td>

                                <td class="text-center" style=" text-align:center; border: 1px solid #000000">
                                    {{ round($prom_con_ini, 2) }}</td>

                            </tr>
                            <tr>
                                <td class="rob-bol"
                                    style="text-align:center; background: #BFBFBF; border: 1px solid #000000">
                                    Volumen Inicial
                                    (lts)
                                </td>

                                <td class="text-center" style=" text-align:center; border: 1px solid #000000">
                                    {{ round($prom_vol_ini, 2) }}</td>

                            </tr>
                            <tr>
                                <td class="rob-bol"
                                    style="text-align:center; background: #BFBFBF; border: 1px solid #000000">
                                    Volumen de
                                    Recargas
                                    (lts)
                                </td>

                                <td class="text-center" style=" text-align:center; border: 1px solid #000000">
                                    {{ $suma_vol_rec }}</td>

                            </tr>

                        </tbody>
                    </table>
                </td>
                <td width="10%"></td>
                <td width="40%">
                    <table cellpadding="0" cellspacing="0" class="table-items">
                        <thead>

                        </thead>
                        <!-- DATOS A EXTRAER DE BD.REFRIGERANTES -->
                        <tbody>
                            <tr>
                                <td class="rob-bol"
                                    style="text-align:center; background: #BFBFBF; border: 1px solid #000000; width:240px;">
                                    Conc.
                                    de
                                    Recarga
                                    °Brix</td>

                                <td class="text-center"
                                    style="text-align:center; border: 1px solid #000000; width:160px;">
                                    {{ round($prom_con_rec, 2) }}</td>

                            </tr>
                            <tr>
                                <td class="rob-bol"
                                    style="text-align:center; background: #BFBFBF; border: 1px solid #000000;">
                                    Conc. Final
                                    °Brix
                                </td>

                                <td class="text-center" style="text-align:center; border: 1px solid #000000;">
                                    {{ round($prom_con_fin, 2) }}</td>

                            </tr>
                            <tr>
                                <td class="rob-bol"
                                    style="text-align:center; background: #BFBFBF; border: 1px solid #000000;">
                                    pH
                                </td>

                                <td class="text-center" style="text-align:center; border: 1px solid #000000;">
                                    {{ round($promedio_ph, 2) }}</td>

                            </tr>

                            <tr>
                                <td class="rob-bol"
                                    style="text-align:center; background: #BFBFBF; border: 1px solid #000000;">
                                    Litros de
                                    Concentrado
                                    (Lts/días)
                                </td>

                                <td class="text-center" style="text-align:center; border: 1px solid #000000;">
                                    {{ round($promedio_concentrado, 2) }}</td>

                            </tr>
                            <tr>
                                <td class="rob-bol"
                                    style="text-align:center; background: #BFBFBF; border: 1px solid #000000;">
                                    Total de
                                    concentrado
                                    acumulado
                                </td>

                                <td class="text-center" style="text-align:center; border: 1px solid #000000;">
                                    {{ $num1 }}</td>

                            </tr>

                        </tbody>
                    </table>
                </td>
            </tr>

        </table>
        <img width="500px" src="" alt="">
    </section>
    <!--END TABLA GENERAL-->

    <!--PIE DE PAGINA-->
    <section class="pie">
        <hr class="horizontal dark">
        <table cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td width="50%">
                    <p class="info-date text-sm">
                        <span>Fecha: </span>
                        {{ $date = \Carbon\Carbon::now()->format('d-m-Y') }}
                    </p>
                </td>

                <td width="50%">
                    <p class="info-page text-sm">
                        Página <span class="pagenum"></span>
                    </p>
                </td>
            </tr>
        </table>
    </section>
    <!--END PIE DE PAGINA-->

    <!--SALTO DE PAGINA-->
    <div class="page-break"></div>

    <!--ENCABEZADO DE LA PAGINA-->
    <section class="header">
        <table class="table-info" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td width="30%" style="vertical-align: top; padding-top: 10px; position:relative">
                    <img src="{{ base_path() }}/public/img/logo7.png" width="170px">
                </td>

                <td width="40%" style="vertical-aling:top; padding-top:10px ">
                    <p class="data-info">
                        <strong class="text-dark">E-mail:</strong> &nbsp;
                        customerservice@cuttingfluids.com.mx
                    </p>
                    <p class="data-info"><strong class="text-dark">Telefono:</strong> &nbsp; (614) 426
                        2186</p>
                    <p class="data-info"><strong class="text-dark">Sitio web:</strong> &nbsp;
                        www.cuttingfluids.com.mx</p>

                </td>

                <td width="30%" class="rob-bol" style=" vertical-aling:top;  padding-top:10px">
                    <p class="data-info"><strong>Cutting Fluids S.A. de C.V.</strong></p>
                    <p class="data-info"><strong>Dirección:</strong> &nbsp; Circuito Balvanera
                        5a Bodega 3, Fracc. Industrial Balvanera. Querétaro, Qro. CP.76900</p>
                </td>
            </tr>
        </table>
        <hr class="horizontal dark">
    </section>
    <!--END ENCABEZADO DE LA PAGINA-->

    <?php
    $arr_espuma_aceite = [
        'Si' => 'red',
        'Sí' => 'red',
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
    <!--GRAFICA DE DONA ESTADO DE SOLUBLE-->
    <section class="grafica-circular">
        <p class="text-center"><strong>GRAFICA ESTADO DE SOLUBLE</strong></p>
        <table cellpadding="0" cellspacing="0" width="100%">
            <tbody>
                <tr>
                    <td style="border: 1px solid black;" width="33%">
                        <?php

                        $qc = new QuickChart();
                        $qc->setConfig("{
                                                                                                                                                                                                                                                                                                                                                                                    type: 'doughnut',
                                                                                                                                                                                                                                                                                                                                                      data: {
                                                                                                                                                                                                                                                                                                                                                        datasets: [
                                                                                                                                                                                                                                                                                                                                                          {
                                                                                                                                                                                                                                                                                                                                                            data: [$espuma_no,$espuma_si],
                                                                                                                                                                                                                                                                                                                                                            backgroundColor: [
                                                                                                                                                                                                                                                                                                                                                              'rgb(155, 187, 89)',
                                                                                                                                                                                                                                                                                                                                                              'rgb(240, 0, 0)',

                                                                                                                                                                                                                                                                                                                                                            ],
                                                                                                                                                                                                                                                                                                                                                            label: 'Dataset 1',
                                                                                                                                                                                                                                                                                                                                                          },
                                                                                                                                                                                                                                                                                                                                                        ],
                                                                                                                                                                                                                                                                                                                                                        labels: ['No', 'Si'],
                                                                                                                                                                                                                                                                                                                                                      },
                                                                                                                                                                                                                                                                                                                                                      options: {
                                                                                                                                                                                                                                                                                                                                                        title: {
                                                                                                                                                                                                                                                                                                                                                          display: true,
                                                                                                                                                                                                                                                                                                                                                          text: 'Espuma',
                                                                                                                                                                                                                                                                                                                                                        },
                                                                                                                                                                                                                                                                                                                                                      },
                                                                                                                                                                                                                                                                                                                                                                                                                       }");

                        $a = $qc->getUrl();
                        $imageData = base64_encode(file_get_contents($a));
                        echo '<img width="400px" src="data:image/jpeg;base64,' . $imageData . '">';

                        ?>
                    </td>
                    <td style="border: 1px solid black;" width="33%">
                        <?php
                        $qc = new QuickChart();
                        $qc->setConfig("{
                                                                                                                                                                                                                                                                                                                                                                                    type: 'doughnut',
                                                                                                                                                                                                                                                                                                                                                      data: {
                                                                                                                                                                                                                                                                                                                                                        datasets: [
                                                                                                                                                                                                                                                                                                                                                          {
                                                                                                                                                                                                                                                                                                                                                            data: [$olor_bueno, $olor_regular, $olor_malo],
                                                                                                                                                                                                                                                                                                                                                            backgroundColor: [
                                                                                                                                                                                                                                                                                                                                                              'rgb(155, 187, 89)',
                                                                                                                                                                                                                                                                                                                                                              'rgb(240, 236, 0)',
                                                                                                                                                                                                                                                                                                                                                              'rgb(240, 0, 0)',

                                                                                                                                                                                                                                                                                                                                                            ],
                                                                                                                                                                                                                                                                                                                                                            label: 'Dataset 1',
                                                                                                                                                                                                                                                                                                                                                          },
                                                                                                                                                                                                                                                                                                                                                        ],
                                                                                                                                                                                                                                                                                                                                                        labels: ['Bueno', 'Regular', 'Malo'],
                                                                                                                                                                                                                                                                                                                                                      },
                                                                                                                                                                                                                                                                                                                                                      options: {
                                                                                                                                                                                                                                                                                                                                                        title: {
                                                                                                                                                                                                                                                                                                                                                          display: true,
                                                                                                                                                                                                                                                                                                                                                          text: 'Mal olor',
                                                                                                                                                                                                                                                                                                                                                        },
                                                                                                                                                                                                                                                                                                                                                      },
                                                                                                                                                                                                                                                                                                                                                                                                                       }");

                        $a = $qc->getUrl();
                        $imageData = base64_encode(file_get_contents($a));
                        echo '<img width="400px" src="data:image/jpeg;base64,' . $imageData . '">';
                        ?>
                    </td>
                    <td style="border: 1px solid black;" width="33%">
                        <?php
                        $qc = new QuickChart();
                        $qc->setConfig("{
                                                                                                                                                                                                                                                                                                                                                                                    type: 'doughnut',
                                                                                                                                                                                                                                                                                                                                                      data: {
                                                                                                                                                                                                                                                                                                                                                        datasets: [
                                                                                                                                                                                                                                                                                                                                                          {
                                                                                                                                                                                                                                                                                                                                                            data: [$aceite_no, $aceite_si],
                                                                                                                                                                                                                                                                                                                                                            backgroundColor: [
                                                                                                                                                                                                                                                                                                                                                              'rgb(155, 187, 89)',
                                                                                                                                                                                                                                                                                                                                                              'rgb(240, 0, 0)',

                                                                                                                                                                                                                                                                                                                                                            ],
                                                                                                                                                                                                                                                                                                                                                            label: 'Dataset 1',
                                                                                                                                                                                                                                                                                                                                                          },
                                                                                                                                                                                                                                                                                                                                                        ],
                                                                                                                                                                                                                                                                                                                                                        labels: ['No', 'Si'],
                                                                                                                                                                                                                                                                                                                                                      },
                                                                                                                                                                                                                                                                                                                                                      options: {
                                                                                                                                                                                                                                                                                                                                                        title: {
                                                                                                                                                                                                                                                                                                                                                          display: true,
                                                                                                                                                                                                                                                                                                                                                          text: 'Aceite entrampado',
                                                                                                                                                                                                                                                                                                                                                        },
                                                                                                                                                                                                                                                                                                                                                      },
                                                                                                                                                                                                                                                                                                                                                                                                                       }");

                        $a = $qc->getUrl();
                        $imageData = base64_encode(file_get_contents($a));
                        echo '<img width="400px" src="data:image/jpeg;base64,' . $imageData . '">';

                        ?>
                    </td>
                </tr>
                <tr>
                    <td width="33%">
                        <table cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                                <tr>
                                    <td style="text-align:center;  border: 1px solid black;" width="50%">Ultimo
                                        registro:</td>
                                    <td style="text-align:center; border: 1px solid black;"
                                        class="<?php echo $arr_espuma_aceite[$ultimo_registro_espuma]; ?>" width="50%">{{ $ultimo_registro_espuma }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width="33%">
                        <table cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                                <tr>
                                    <td style="text-align:center;  border: 1px solid black;" width="50%">Ultimo
                                        registro:</td>
                                    <td style="text-align:center; border: 1px solid black;"
                                        class="<?php echo $arr_aroma[$ultimo_registro_olor]; ?>" width="50%">{{ $ultimo_registro_olor }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width="33%">
                        <table cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                                <tr>
                                    <td style="text-align:center;  border: 1px solid black;" width="50%">Ultimo
                                        registro:</td>
                                    <td style="text-align:center;   border: 1px solid black;"
                                        class="<?php echo $arr_espuma_aceite[$ultimo_registro_aceites]; ?>" width="50%">{{ $ultimo_registro_aceites }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>

    </section>
    <!--END GRAFICA DE DONA ESTADO DE SOLUBLE-->

    <!--PIE DE PAGINA-->
    <section class="pie">
        <hr class="horizontal dark">
        <table cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td width="50%">
                    <p class="info-date text-sm">
                        <span>Fecha: </span>
                        {{ $date = \Carbon\Carbon::now()->format('d-m-Y') }}
                    </p>
                </td>

                <td width="50%">
                    <p class="info-page text-sm">
                        Página <span class="pagenum"></span>
                    </p>
                </td>
            </tr>
        </table>
    </section>
    <!--END PIE DE PAGINA-->

    <!--SALTO DE PAGINA-->
    <div class="page-break"></div>

    <!--ENCABEZADO DE LA PAGINA-->
    <section class="header">
        <table class="table-info" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td width="30%" style="vertical-align: top; padding-top: 10px; position:relative">
                    <img src="{{ base_path() }}/public/img/logo7.png" width="170px">
                </td>

                <td width="40%" style="vertical-aling:top; padding-top:10px ">
                    <p class="data-info">
                        <strong class="text-dark">E-mail:</strong> &nbsp;
                        customerservice@cuttingfluids.com.mx
                    </p>
                    <p class="data-info"><strong class="text-dark">Telefono:</strong> &nbsp; (614) 426
                        2186</p>
                    <p class="data-info"><strong class="text-dark">Sitio web:</strong> &nbsp;
                        www.cuttingfluids.com.mx</p>

                </td>

                <td width="30%" class="rob-bol" style=" vertical-aling:top;  padding-top:10px">
                    <p class="data-info"><strong>Cutting Fluids S.A. de C.V.</strong></p>
                    <p class="data-info"><strong>Dirección:</strong> &nbsp; Circuito Balvanera
                        5a Bodega 3, Fracc. Industrial Balvanera. Querétaro, Qro. CP.76900</p>
                </td>
            </tr>
        </table>
        <hr class="horizontal dark">
    </section>
    <!--END ENCABEZADO DE LA PAGINA-->

    <!--TABLA DE OBSERVACIONES-->
    <p class="text-center" style="margin-bottom: 1rem; margin-top: 2rem;"><strong>TABLA DE OBSERVACIONES</strong></p>
    <div class="commit-table">
        @foreach ($data as $da)
            <table class="data-commit-table" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                    <tr>
                        <td width="100px" style="border: 1px solid black; "><strong>Dia:</strong>
                            {{ \Carbon\Carbon::parse($da->created_at)->format('d') }}
                        </td>
                        <td class="text-center" style="border: 1px solid black; " colspan="6" rowspan="2">
                            <strong>{{ $da->comentarios }}
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; ">
                            <strong>Mes:</strong>{{ \Carbon\Carbon::parse($da->created_at)->format('m') }}
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; " rowspan="2"><strong>Año:</strong>
                            {{ \Carbon\Carbon::parse($da->created_at)->format('Y') }}</td>
                        <td class="text-center" style="border: 1px solid black; ">Espuma</td>
                        <td style="border: 1px solid black; text-align:center;" class="<?php echo $arr_espuma_aceite[$da->exceso_espuma]; ?>">
                            {{ $da->exceso_espuma }}
                        </td>
                        <td class="text-center" style="border: 1px solid black; ">Mal olor</td>
                        <td style="border: 1px solid black; text-align:center; " class="<?php echo $arr_aroma[$da->aroma]; ?>">
                            {{ $da->aroma }}</td>
                        <td class="text-center" style="border: 1px solid black; ">A.Entrampado</td>
                        <td style="border: 1px solid black; text-align:center; " class="<?php echo $arr_espuma_aceite[$da->exceso_espuma]; ?>">
                            {{ $da->aceites_entrampados }}</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; " colspan="6"><strong>Tecnico:</strong>
                            {{ $da->usuarios->name ?? 'No existe' }}</td>
                    </tr>
                </tbody>
            </table>
        @endforeach
    </div>
    <!--END TABLA DE OBSERVACIONES-->

    <!--PIE DE PAGINA-->
    <section class="pie">
        <hr class="horizontal dark">
        <table cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td width="50%">
                    <p class="info-date text-sm">
                        <span>Fecha: </span>
                        {{ $date = \Carbon\Carbon::now()->format('d-m-Y') }}
                    </p>
                </td>

                <td width="50%">
                    <p class="info-page text-sm">
                        Página <span class="pagenum"></span>
                    </p>
                </td>
            </tr>
        </table>
    </section>
    <!--END PIE DE PAGINA-->

</body>

</html>
