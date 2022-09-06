<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Reporte de Maquina</title>

    <style>
        html {
            min-height: 100%;
            position: relative;

        }

        body {
            margin: 0;
        }


        .pie {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 40px;
            color: white;
            font-size: 9pt;
            color: #333333;
            border-top: 1px solid #1f1f1f;
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


        .columnas {
            column-count: 2;
            column-gap: 130px;

        }

        @font-face {
            font-family: roboto;
            src: url('font/Roboto-Regular.ttf') format('truetype');
        }

        @font-face {
            font-family: roboto-bold;
            src: url('font/Roboto-Bold.ttf') format('truetype');
        }

        body {
            font-family: roboto;

        }

        .rob-bol {
            font-family: roboto-bold;
        }
    </style>
</head>

<body>
    <!--ENCABEZADO DE LA PAGINA-->
    <section class="header">


        <table cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td width="30%" style="vertical-align: top; padding-top: 10px; position:relative">
                    <img src="{{ base_path() }}/public/img/logo7.png" width="200px">
                </td>

                <td width="40%" style="vertical-aling:top; padding-top:10px">
                    <center><span class="rob-bol" style="font-size: 25px; "> Reporte de
                            Concentración</span></center>

                </td>

                <td width="30%" class="rob-bol" style=" vertical-aling:top;  padding-top:10px">
                    <center>
                        <span style="font-size: 16px">Fecha:</span>


                        {{ $date = \Carbon\Carbon::now()->formatLocalized('%d %B del %Y ') }}

                    </center>
                </td>
            </tr>
        </table>
        <br>
        <br>

        <table cellpadding="0" cellspacing="0" width="100%">
            <tbody>
                <tr>
                    <td style="text-align:right; border: 1px solid black; ">Cliente: </td>
                    <td width="30%" class="rob-bol" style="text-align:center; border: 1px solid black;">
                        {{ $planta_nombre }}</td>
                    <td style="text-align:right; border: 1px solid black;">Fecha desde:</td>
                    <td class="rob-bol" style="text-align:center; border: 1px solid black;">
                        {{ \Carbon\Carbon::parse($dateFrom)->formatLocalized('%d %B') }}
                    </td>
                    <td style="text-align:right; border: 1px solid black;">Máquina:</td>
                    <td class="rob-bol" style="text-align:center; border: 1px solid black;">{{ $machine }}</td>
                </tr>
                <tr>
                    <td style="text-align:right; border: 1px solid black;">Ubicación:</td>
                    <td class="rob-bol" style="text-align:center; border: 1px solid black; ">{{ $planta_ubicacion }}
                    </td>
                    <td style="text-align:right; border: 1px solid black;">Fecha hasta:</td>
                    <td class="rob-bol" style="text-align:center; border: 1px solid black;">
                        {{ \Carbon\Carbon::parse($dateTo)->formatLocalized('%d %B') }}
                    </td>
                    <td style="text-align:right; border: 1px solid black;">Tipo de máquina:</td>
                    <td class="rob-bol" style="text-align:center; border: 1px solid black;">{{ $tipo_maquina }}</td>
                </tr>
                <tr>
                    <td style="text-align:right; border: 1px solid black;">Responsable:</td>
                    <td class="rob-bol" style="text-align:center; border: 1px solid black;">{{ $responsable }}</td>
                    <td style="text-align:right; border: 1px solid black;">Producto:</td>
                    <td class="rob-bol" style="text-align:center; border: 1px solid black;">{{ $producto }}</td>
                    <td style="text-align:right; border: 1px solid black;">Celda:</td>
                    <td class="rob-bol" style="text-align:center; border: 1px solid black;">1</td>
                </tr>
            </tbody>
        </table>
    </section>
    <br>

    <center><span class="rob-bol" style="font-size: 18px; "> Gráfica de Concentración</span></center>

    <!--GRAFICA LINEAL-->
    <center>
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
                                                                                 data: [10],
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
        echo '<img width="800px" height="400px" src="data:image/jpeg;base64,' . $imageData . '">';

        ?>
    </center>


    <!--PIE DE PAGINA-->
    <section class="pie">
        <table cellpadding="0" cellspacing="0" class="table-items" width="100%">
            <tr>
                <td class="rob-bol" style=" padding: 5px 2px;  text-align: left; vertical-align: middle; "
                    width="30%">
                    <span>Cutting Fluids S.A de C.V </span>
                    <br>
                    <span>Correo:customerservice@cuttingfluids.com.mx</span>
                    <br>
                    <span>Tel: (614) 426 2186 </span>
                    <br>
                    <span>www.cuttingfluids.com.mx</span>
                </td>
                <td style="font-weight: bold; padding: 5px 2px; text-align: center; vertical-align: middle; "
                    width="50%" class="text-center">

                </td>
                <td class="rob-bol" style=" padding: 5px 2px; text-align: right; vertical-align: middle; "
                    width="20%" class="text-center">
                    pagina <span class="pagenum"></span>
                </td>
            </tr>
        </table>
    </section>


    <!--------------SALTO DE PAGINA------------------>
    <div class="page-break"></div>


    <!--ENCABEZADO DE LA PAGINA-->
    <section class="header">
        <table cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td width="30%" style="vertical-align: top; padding-top: 10px; position:relative">
                    <img src="{{ base_path() }}/public/img/logo7.png" width="200px">
                </td>

                <td width="40%">
                </td>

                <td width="30%" class="rob-bol" style="vertical-aling:top;  padding-top:10px">
                    <center>
                        <span style="font-size: 16px">Fecha:</span>


                        {{ $date = \Carbon\Carbon::now()->formatLocalized('%d %B del %Y ') }}

                    </center>
                </td>
            </tr>
        </table>
        <br>


    </section>
    <center><span class="rob-bol" style="font-size: 18px; "> Tabla General</span></center>
    <br>
    <br>

    <!--CONTENIDO-->
    <section>
        <!--Tabla general-->
        <table cellpadding="0" cellspacing="0" class="table-items" width="100%">
            <thead>
                <tr>
                    <td class="rob-bol" width="250px"
                        style="text-align:center; background: #959392;  border: 1px solid #000000;">Datos Generales
                    </td>
                    @foreach ($data as $d)
                        <td class="rob-bol" style="text-align:center; background: #959392;  border: 1px solid #000000;">
                            {{ \Carbon\Carbon::parse($d->created_at)->format('d') }}
                        </td>
                    @endforeach
                </tr>
            </thead>
            <!-- DATOS A EXTRAER DE BD.REFRIGERANTES -->
            <tbody>

                <tr>
                    <td class="rob-bol" style="text-align:center; background: #BFBFBF; border: 1px solid #000000;">Conc.
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
                        Litros de
                        concentrado(Lts/día)</td>
                    @foreach ($data as $d)
                        <td class="text-center" style="text-align:center; border: 1px solid #000000;">
                            {{ $d->concentracion_inicial }}</td>
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
                            {{ $d->concentracion_inicial }}</td>
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
                                    Litros de
                                    Concentrado
                                    (Lts/días)
                                </td>

                                <td class="text-center" style="text-align:center; border: 1px solid #000000;">9.6</td>

                            </tr>
                            <tr>
                                <td class="rob-bol"
                                    style="text-align:center; background: #BFBFBF; border: 1px solid #000000;">
                                    Total de
                                    concentrado
                                    acumulado
                                </td>

                                <td class="text-center" style="text-align:center; border: 1px solid #000000;">7.5</td>

                            </tr>

                        </tbody>
                    </table>
                </td>
            </tr>

        </table>
        <img width="500px" src="" alt="">
    </section>


    <!--PIE DE PAGINA-->
    <section class="pie">
        <table cellpadding="0" cellspacing="0" class="table-items" width="100%">
            <tr>
                <td class="rob-bol" style=" padding: 5px 2px;  text-align: left; vertical-align: middle; "
                    width="30%">
                    <span>Cutting Fluids S.A de C.V </span>
                    <br>
                    <span>Correo:customerservice@cuttingfluids.com.mx</span>
                    <br>
                    <span>Tel: (614) 426 2186 </span>
                    <br>
                    <span>www.cuttingfluids.com.mx</span>
                </td>
                <td style="font-weight: bold; padding: 5px 2px; text-align: center; vertical-align: middle; "
                    width="50%" class="text-center">

                </td>
                <td class="rob-bol" style=" padding: 5px 2px; text-align: right; vertical-align: middle; "
                    width="20%" class="text-center">
                    pagina <span class="pagenum"></span>
                </td>
            </tr>
        </table>
    </section>

    <!--------------SALTO DE PAGINA------------------>
    <div class="page-break"></div>


    <!--ENCABEZADO DE LA PAGINA-->
    <section class="header">
        <table cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td width="30%" style="vertical-align: top; padding-top: 10px; position:relative">
                    <img src="{{ base_path() }}/public/img/logo7.png" width="200px">
                </td>

                <td width="40%">
                </td>

                <td width="30%" class="rob-bol" style="vertical-aling:top;  padding-top:10px">
                    <center>
                        <span style="font-size: 16px">Fecha:</span>


                        {{ $date = \Carbon\Carbon::now()->formatLocalized('%d %B del %Y ') }}

                    </center>
                </td>
            </tr>
        </table>
        <br>


    </section>
    <center><span class="rob-bol" style="font-size: 18px; "> Estado del soluble</span></center>
    <br>
    <br>
    <br>

    <!--GRAFICAs CIRCULOS-->
    <section>
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
                                                                                    data: [94, 25, 72],
                                                                                    backgroundColor: [
                                                                                      'rgb(155, 187, 89)',
                                                                                      'rgb(240, 236, 0)',
                                                                                      'rgb(240, 0, 0)',

                                                                                    ],
                                                                                    label: 'Dataset 1',
                                                                                  },
                                                                                ],
                                                                                labels: ['Nada', 'Poco', 'Mucho'],
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
                                                                                    data: [94, 25, 72],
                                                                                    backgroundColor: [
                                                                                      'rgb(155, 187, 89)',
                                                                                      'rgb(240, 236, 0)',
                                                                                      'rgb(240, 0, 0)',

                                                                                    ],
                                                                                    label: 'Dataset 1',
                                                                                  },
                                                                                ],
                                                                                labels: ['Ninguno', 'Ligero', 'Fuerte'],
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
                                                                                    data: [94, 25, 72],
                                                                                    backgroundColor: [
                                                                                      'rgb(155, 187, 89)',
                                                                                      'rgb(240, 236, 0)',
                                                                                      'rgb(240, 0, 0)',

                                                                                    ],
                                                                                    label: 'Dataset 1',
                                                                                  },
                                                                                ],
                                                                                labels: ['Nada', 'Poco', 'Mucho'],
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
                                    <td style="text-align:center; background:#F00000; border: 1px solid black;"
                                        width="50%">Mucho</td>
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
                                    <td style="text-align:center; background:#F0EC00; border: 1px solid black;"
                                        width="50%">Ligero</td>
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
                                    <td style="text-align:center; background:#9BBB59;  border: 1px solid black;"
                                        width="50%">Nada</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>

    </section>


    <!--PIE DE PAGINA-->
    <section class="pie">
        <table cellpadding="0" cellspacing="0" class="table-items" width="100%">
            <tr>
                <td class="rob-bol" style=" padding: 5px 2px;  text-align: left; vertical-align: middle; "
                    width="30%">
                    <span>Cutting Fluids S.A de C.V </span>
                    <br>
                    <span>Correo:customerservice@cuttingfluids.com.mx</span>
                    <br>
                    <span>Tel: (614) 426 2186 </span>
                    <br>
                    <span>www.cuttingfluids.com.mx</span>
                </td>
                <td style="font-weight: bold; padding: 5px 2px; text-align: center; vertical-align: middle; "
                    width="50%" class="text-center">

                </td>
                <td class="rob-bol" style=" padding: 5px 2px; text-align: right; vertical-align: middle; "
                    width="20%" class="text-center">
                    pagina <span class="pagenum"></span>
                </td>
            </tr>
        </table>
    </section>

    <!--------------SALTO DE PAGINA------------------>
    <div class="page-break"></div>


    <!--ENCABEZADO DE LA PAGINA-->
    <section class="header">
        <table cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td width="30%" style="vertical-align: top; padding-top: 10px; position:relative">
                    <img src="{{ base_path() }}/public/img/logo7.png" width="200px">
                </td>

                <td width="40%">
                </td>

                <td width="30%" class="rob-bol" style="vertical-aling:top;  padding-top:10px">
                    <center>
                        <span style="font-size: 16px">Fecha:</span>


                        {{ $date = \Carbon\Carbon::now()->formatLocalized('%d %B del %Y ') }}

                    </center>
                </td>
            </tr>
        </table>
        <br>


    </section>

    <!--CONTENIDO COMEMTARIOS-->
    <section class="columnas">

        <!-- Tabla comentarios -->



        <div>
            <center><span class="rob-bol" style="font-size: 18px; "> Observaciones</span></center>
        </div>
        <br>
        <div class="columnas" style="text-align: center; ">

            @foreach ($data as $da)
                <table cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                        <tr>
                            <td width="100px" style="border: 1px solid black; "><strong>Dia:</strong>
                                {{ \Carbon\Carbon::parse($da->created_at)->format('d') }}
                            </td>
                            <td style="border: 1px solid black; " colspan="6" rowspan="2">
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
                            <td style="border: 1px solid black; ">Espuma</td>
                            <td style="border: 1px solid black; background-color: green">{{ $da->exceso_espuma }}
                            </td>
                            <td style="border: 1px solid black; ">Mal olor</td>
                            <td style="border: 1px solid black; background-color: yellow">{{ $da->aroma }}</td>
                            <td style="border: 1px solid black; ">A.Entrampado</td>
                            <td style="border: 1px solid black; background-color: red">
                                {{ $da->aceites_entrampados }}</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black; " colspan="6"><strong>Tecnico:</strong>
                                {{ $da->usuarios->name }}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
            @endforeach

        </div>






    </section>


    <!--PIE DE PAGINA-->
    <section class="pie">
        <table cellpadding="0" cellspacing="0" class="table-items" width="100%">
            <tr>
                <td class="rob-bol" style=" padding: 5px 2px;  text-align: left; vertical-align: middle; "
                    width="30%">
                    <span>Cutting Fluids S.A de C.V </span>
                    <br>
                    <span>Correo:customerservice@cuttingfluids.com.mx</span>
                    <br>
                    <span>Tel: (614) 426 2186 </span>
                    <br>
                    <span>www.cuttingfluids.com.mx</span>
                </td>
                <td style="font-weight: bold; padding: 5px 2px; text-align: center; vertical-align: middle; "
                    width="50%" class="text-center">

                </td>
                <td class="rob-bol" style=" padding: 5px 2px; text-align: right; vertical-align: middle; "
                    width="20%" class="text-center">
                    pagina <span class="pagenum"></span>
                </td>
            </tr>
        </table>
    </section>





</body>

</html>
