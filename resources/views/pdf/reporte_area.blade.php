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

        .pie {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 40px;
            color: white;
            font-size: 9pt;
            color: #333333;
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

        .onnline {
            background-color: #82d616;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-left: 2rem;
        }
        .grafica-estado{
            margin-top: 5rem;
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
                        {{ $nombre_planta }}</p>
                    <p class="data-detail text-normal">{{ $ubicacion_planta }}</p>
                    <p class="data-detail text-normal"><strong class="text-dark">Telefono:</strong> &nbsp;
                        {{ $telefono_planta }}</p>
                    <p class="data-detail text-normal"> <strong class="text-dark">Responsable:</strong> &nbsp;
                        {{ $contacto_planta }}</p>
                </td>

                <td width="50%" class="rob-bol" style=" vertical-aling:top;  padding-top:10px">
                    <p class="data-detail text-grande"><strong>Detalles del Reporte:</strong></p>
                    <p class="data-detail text-normal"><strong class="text-dark">Reporte:</strong> &nbsp;
                        #{{ $numero_aleatorio }}</p>
                    <p class="data-detail text-normal"><strong class="text-dark">Área:</strong> &nbsp;
                        {{ $nombre_area }}</p>
                    <p class="data-detail text-normal"> <strong class="text-dark">Responsable:</strong> &nbsp;
                        {{ $responsable }}</p>
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


    <!-- TABLA DATOS DE AREA -->
    <p class="text-center"><strong>TABLA GENERAL DE CONCENTRADO</strong></p>
    <table cellpadding="0" cellspacing="0" class="table-items" width="100%"
        style="text-align: center; font-family: 'Roboto', sans-serif;  ">

        <tbody>
            <tr>
                <td colspan="{{ $count_area }}" class="text-center text-white text-lg"
                    style="background-color: #aaa8a9; border: 1px solid #000000; font-size: 1rem;">
                    <strong>{{ $nombre_area }}</strong>
                </td>
            </tr>
            <tr>
                <td colspan="{{ $count_data + 3 }}" rowspan="2" class="text-center text-sm text-white align-middle"
                    style="background-color: #959392; border: 1px solid #000000;">
                    <strong>Mes</strong>
                </td>
                <td style="background-color: white"></td>
                <td class=" align-middle text-center" style="font-size: 0.40rem; border: 1px solid #000000;">ALTA
                    CONCENTRACIÓN
                </td>
                <td class=" align-middle text-center" style="font-size: 0.50rem; border: 1px solid #000000;">Mayor a 6
                    Brix
                </td>
            </tr>
            <tr>
                <td style="background-color: pink; border: 1px solid #000000;"></td>
                <td class=" align-middle text-center" style="font-size: 0.40rem; border: 1px solid #000000;">BAJA
                    CONCENTRACIÓN
                </td>
                <td class=" align-middle text-center" style="font-size: 0.50rem; border: 1px solid #000000;"> Menor a 4
                    Brix
                </td>
            </tr>
            <tr>
                <td colspan="3" rowspan="3" style="background-color: #c1c0c0; border: 1px solid #000000;"></td>
                <td colspan="{{ $count_data }}" class="text-xs align-middle text-center"
                    style="background-color: #c1c0c0; font-size: 0.7rem; border: 1px solid #000000;"><strong>CW</strong>
                </td>
                <td style="background-color: yellow; border: 1px solid #000000;"></td>
                <td class=" align-middle text-center" style="font-size: 0.40rem; border: 1px solid #000000;">OK LIMITE
                    INFERIOR
                </td>
                <td class=" align-middle text-center" style="font-size: 0.50rem; border: 1px solid #000000;">Entre 4 y 5
                    Brix
                </td>
            </tr>
            <tr>
                <td colspan="{{ $count_data }}" class="align-middle text-center"
                    style="background-color: #c1c0c0; font-size: 0.7rem; border: 1px solid #000000;">
                    <strong>Concentración en %</strong>
                </td>
                <td style="background-color: yellowgreen; border: 1px solid #000000;"></td>
                <td class=" align-middle text-center" style="font-size: 0.40rem; border: 1px solid #000000;">OK</td>
                <td class=" align-middle text-center" style="font-size: 0.50rem; border: 1px solid #000000;">Entre 5 y
                    6 Brix
                </td>
            </tr>
            <tr>
                @foreach ($fechas as $fecha => $fech)
                    @foreach ($fech as $date)
                        <td class="text-xs text-center align-middle"
                            style="background-color: #c1c0c0; border: 1px solid #000000;">
                            {{ \Carbon\Carbon::parse($date)->format('d') }}</td>
                    @endforeach
                @endforeach

                <td class="text-xs text-center align-middle"
                    style="background-color: #c1c0c0; width:10px; border: 1px solid #000000; font-size: 0.70rem;">
                    Pomedio pH</td>
                <td class="text-xs text-center align-middle"
                    style="background-color: #c1c0c0; width:10px; border: 1px solid #000000; font-size: 0.70rem;">
                    Promedio Concentración</td>
                <td class="text-xs text-center align-middle"
                    style="background-color: #c1c0c0; width:10px; border: 1px solid #000000; font-size: 0.70rem;">
                    Comentarios</td>
            </tr>



            @foreach ($datos as $ids => $valores)
                <tr>
                    <td rowspan="2" class="text-xs text-center align-middle text-white"
                        style="background-color: #959392; font-size: 0.7rem; border: 1px solid #000000;">
                        <div class="onnline">
                        </div>
                        <strong>Onnline </strong>
                    </td>
                    <td rowspan="2" class="text-xs text-center align-middle text-white"
                        style="background-color: #aaa8a9; border: 1px solid #000000;">
                        <strong>{{ $ids }}</strong>
                    </td>
                    <td class="text-xs text-center align-middle"
                        style="border: 1px solid #000000; font-size: 0.80rem;"><strong>pH</strong>
                    </td>
                    @foreach ($valores['value'] as $valor)
                        <td class="text-xs text-center align-middle" style="border: 1px solid #000000;">
                            {{ $valor }}</td>
                    @endforeach
                    @foreach ($valores['prom_ph'] as $valor)
                        <td class="text-xs text-center align-middle" <?php if ($valor >= 8.9 && $valor <= 9.69) {
                            echo "style='background-color: #bdd6ee; border: 1px solid #000000;'";
                        }
                        if ($valor >= 8.3 && $valor <= 8.89) {
                            echo "style='background-color: #c5e0b3; border: 1px solid #000000;'";
                        }
                        if ($valor >= 7 && $valor <= 8.29) {
                            echo "style='background-color: #ffff00; border: 1px solid #000000;'";
                        }

                        ?>>
                            {{ round($valor, 2) }}</td>
                    @endforeach
                    <td style="border: 1px solid #000000;"></td>
                    <td style="border: 1px solid #000000;"></td>
                </tr>
                <tr>
                    <td class="text-xs text-center align-middle"
                        style="border: 1px solid #000000; font-size: 0.80rem;">
                        <strong>Con.</strong>
                    </td>
                    @foreach ($valores['value2'] as $valor)
                        <td class="text-xs text-center align-middle" style="border: 1px solid #000000;">
                            {{ $valor }}</td>
                    @endforeach

                    <td style="border: 1px solid #000000;"></td>
                    @foreach ($valores['prom_con'] as $valor)
                        <td class="text-xs" <?php if ($valor > 6) {
                            echo "style='background-color: #ffffff; border: 1px solid #000000;'";
                        }
                        if ($valor < 4) {
                            echo "style='background-color: #fae3d4; border: 1px solid #000000;'";
                        }
                        if ($valor >= 4 && $valor <= 5) {
                            echo "style='background-color: #ffff00; border: 1px solid #000000;'";
                        }
                        if ($valor > 5 && $valor <= 6) {
                            echo "style='background-color: #92d050; border: 1px solid #000000;'";
                        }
                        ?>>{{ round($valor, 2) }}</td>
                    @endforeach
                    <td style="border: 1px solid #000000;"></td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <!--END TABLA DATOS DE AREA -->

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

    <!-- GRAFICAS DE DONA -->

    <section class="grafica-estado">
        <p class="text-center"><strong>GRAFICA DE DATOS</strong></p>
        <table class="table" style="font-family: 'Roboto', sans-serif;" cellpadding="0" cellspacing="0"
            width="100%">
            <thead>
                <tr>
                    <th style="border: 1px solid black;">ESTATUS DE CONCENTRACIÓN</th>
                    <th style="border: 1px solid black;">ESTATUS DE PH</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="border: 1px solid black;" scope="row">
                        <section>
                            <?php
                            $qc = new QuickChart();
                            $qc->setConfig("{
                                                                                                                                                                                            type: 'pie',
                                                                                                                                                              data: {
                                                                                                                                                                datasets: [
                                                                                                                                                                  {
                                                                                                                                                                    data: [$concentracion_alta,$concentracion_baja,$concentracion_ok],
                                                                                                                                                                    backgroundColor: [
                                                                                                                                                                      'rgb(94, 136, 212, 1)',
                                                                                                                                                                      'rgb(166,176,190)',
                                                                                                                                                                      'rgb(175, 175, 175, 1)',

                                                                                                                                                                    ],
                                                                                                                                                                    label: 'Dataset 1',
                                                                                                                                                                  },
                                                                                                                                                                ],
                                                                                                                                                                labels: ['Concentración Alta', 'Concentración Baja','Concentración Ok'],
                                                                                                                                                              },
                                                                                                                                                              options: {
                                                                                                                                                                title: {
                                                                                                                                                                  display: false,
                                                                                                                                                                  text: 'ESTATUS DE CONCENTRACIÓN',
                                                                                                                                                                },
                                                                                                                                                              },
                                                                                                                                                                                                                               }");

                            $a = $qc->getUrl();
                            $imageData = base64_encode(file_get_contents($a));
                            echo '<img width="600px" src="data:image/jpeg;base64,' . $imageData . '">';
                            ?>
                        </section>
                    </td>
                    <td style="border: 1px solid black;">
                        <section>
                            <?php
                            $qc = new QuickChart();
                            $qc->setConfig("{
                                                                                                                                                                                            type: 'pie',
                                                                                                                                                              data: {
                                                                                                                                                                datasets: [
                                                                                                                                                                  {
                                                                                                                                                                    data: [$ph_ok,$ph_bajo],
                                                                                                                                                                    backgroundColor: [
                                                                                                                                                                      'rgb(166,176,190)',
                                                                                                                                                                      'rgb(94, 136, 212, 1)',


                                                                                                                                                                    ],
                                                                                                                                                                    label: 'Dataset 1',
                                                                                                                                                                  },
                                                                                                                                                                ],
                                                                                                                                                                labels: ['pH Ok', 'pH Bajo'],
                                                                                                                                                              },
                                                                                                                                                              options: {
                                                                                                                                                                title: {
                                                                                                                                                                  display: false,
                                                                                                                                                                  text: 'ESTATUS DE CONCENTRACIÓN',
                                                                                                                                                                },
                                                                                                                                                              },
                                                                                                                                                                                                                               }");

                            $a = $qc->getUrl();
                            $imageData = base64_encode(file_get_contents($a));
                            echo '<img width="600px" src="data:image/jpeg;base64,' . $imageData . '">';
                            ?>
                        </section>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
    <!-- END GRAFICAS DE DONA -->

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
