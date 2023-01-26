<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Area</title>

    <style>
        .pie {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 40px;
            color: white;
            font-size: 9pt;
            color: #333333;
            border-top: 1px solid #1f1f1f;
            font-family: 'Roboto', sans-serif;

        }

        .pagenum:before {
            content: counter(page);
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>

    <!--ENCABEZADO DE LA PAGINA 1-->
    <section class="header">
        <table cellpadding="0" cellspacing="0" width="100%"
            style="text-align: center; font-family: 'Roboto', sans-serif;  ">
            <tr>
                <td width="30%" style="vertical-align: top; padding-top: 10px; position:relative">
                    <img src="{{ base_path() }}/public/img/logo7.png" width="160px">
                </td>

                <td width="40%" style="vertical-aling:top; padding-top:10px">
                    <center><span class="rob-bol font-bold	" style="font-size: 25px; "> Reporte de
                            Concentración</span></center>

                </td>

                <td width="30%" class="rob-bol" style=" vertical-aling:top;  padding-top:10px">
                    <img src="{{ base_path() }}/public/img/logo_blaser.png" width="180px">
                </td>
            </tr>
        </table>
        <br>

        <table cellpadding="0" cellspacing="0" width="100%"
            style="text-align: center; font-family: 'Roboto', sans-serif; font-size: 0.90rem;">
            <tbody>
                <tr>
                    <td style="text-align:right; border: 1px solid black; ">Cliente: </td>
                    <td width="30%" class="rob-bol" style="text-align:center; border: 1px solid black;">
                        {{ $nombre_planta }}</td>
                    <td style="text-align:right; border: 1px solid black;">Fecha desde:</td>
                    <td class="rob-bol" style="text-align:center; border: 1px solid black;">
                        {{ \Carbon\Carbon::parse($dateFrom)->formatLocalized('%d/%m/%Y') }}
                    </td>
                    <td style="text-align:right; border: 1px solid black;">Área:</td>
                    <td class="rob-bol" style="text-align:center; border: 1px solid black;">{{ $nombre_area }}</td>
                </tr>
                <tr>
                    <td style="text-align:right; border: 1px solid black;">Ubicación:</td>
                    <td class="rob-bol" style="text-align:center; border: 1px solid black; ">{{ $ubicacion_planta }}
                    </td>
                    <td style="text-align:right; border: 1px solid black;">Fecha hasta:</td>
                    <td class="rob-bol" style="text-align:center; border: 1px solid black;">
                        {{ \Carbon\Carbon::parse($dateTo)->formatLocalized('%d/%m/%Y') }}
                    </td>
                    <td style="text-align:right; border: 1px solid black;">Expedido por:</td>
                    <td class="rob-bol" style="text-align:center; border: 1px solid black;">{{ auth()->user()->name }}
                    </td>
                </tr>
                <tr>
                    <td style="text-align:right; border: 1px solid black;">Responsable:</td>
                    <td class="rob-bol" style="text-align:center; border: 1px solid black;">{{ $responsable }}</td>
                    <td style="text-align:right; border: 1px solid black;">Producto:</td>
                    <td class="rob-bol" style="text-align:center; border: 1px solid black;"></td>
                    <td style="text-align:right; border: 1px solid black;">Fecha:</td>
                    <td class="rob-bol" style="text-align:center; border: 1px solid black;">
                        {{ $date = \Carbon\Carbon::now()->formatLocalized('%d/%m/%Y ') }}
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
    <br>
    <br>

    <!-- TABLA DATOS DE AREA -->
    <table cellpadding="0" cellspacing="0" class="table-items" width="100%"
        style="text-align: center; font-family: 'Roboto', sans-serif;  ">

        <tbody>
            <tr>
                <td colspan="{{ $count_area }}" class="text-center text-white text-lg"
                    style="background-color: #7492c2; font-size: 1rem;  border: 1px solid #000000; font-size: 1.2rem;">
                    <strong>{{ $nombre_area }}</strong>
                </td>
            </tr>
            <tr>
                <td colspan="{{ $count_data + 3 }}" rowspan="2" class="text-center text-white align-middle"
                    style="background-color: #5173aa; border: 1px solid #000000;">
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
                <td colspan="3" rowspan="3" style="background-color: #c5cedb; border: 1px solid #000000;"></td>
                <td colspan="{{ $count_data }}" class="text-xs align-middle text-center"
                    style="background-color: #c5cedb; font-size: 0.7rem; border: 1px solid #000000;"><strong>CW</strong>
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
                    style="background-color: #c5cedb; font-size: 0.7rem; border: 1px solid #000000;">
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
                            style="background-color: #c5cedb; border: 1px solid #000000;">
                            {{ \Carbon\Carbon::parse($date)->format('d') }}</td>
                    @endforeach
                @endforeach

                <td class="text-xs text-center align-middle"
                    style="background-color: #c5cedb; width:10px; border: 1px solid #000000; font-size: 0.70rem;">
                    Pomedio pH</td>
                <td class="text-xs text-center align-middle"
                    style="background-color: #c5cedb; width:10px; border: 1px solid #000000; font-size: 0.70rem;">
                    Promedio Concentración</td>
                <td class="text-xs text-center align-middle"
                    style="background-color: #c5cedb; width:10px; border: 1px solid #000000; font-size: 0.70rem;">
                    Comentarios</td>
            </tr>



            @foreach ($datos as $ids => $valores)
                <tr>
                    <td rowspan="2" class="text-xs text-center align-middle text-white"
                        style="background-color: #5173aa; border: 1px solid #000000;"> <strong></strong> </td>
                    <td rowspan="2" class="text-xs text-center align-middle text-white"
                        style="background-color: #749ad8; border: 1px solid #000000;">{{ $ids }}</td>
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
                    Página <span class="pagenum"></span>
                </td>
            </tr>
        </table>
    </section>


    <!--------------SALTO DE PAGINA------------------>
    <div class="page-break"></div>


    <!--ENCABEZADO DE LA PAGINA 2-->
    <section class="header">
        <table cellpadding="0" cellspacing="0" width="100%"
            style="text-align: center; font-family: 'Roboto', sans-serif;  ">
            <tr>
                <td width="30%" style="vertical-align: top; padding-top: 10px; position:relative">
                    <img src="{{ base_path() }}/public/img/logo7.png" width="160px">
                </td>

                <td width="40%" style="vertical-aling:top; padding-top:10px">
                    <center><span class="rob-bol" style="font-size: 25px; "> </span></center>

                </td>

                <td width="30%" class="rob-bol" style=" vertical-aling:top;  padding-top:10px">
                    <img src="{{ base_path() }}/public/img/logo_blaser.png" width="180px">
                </td>
            </tr>
        </table>
        <br>
    </section>
    <br>
    <br>


    <!-- GRAFICAS DE DONA -->
    <table class="table" style="font-family: 'Roboto', sans-serif;" cellpadding="0" cellspacing="0" width="100%" >
        <thead>
            <tr >
                <th style="border: 1px solid black;">ESTATUS DE CONCENTRACIÓN</th>
                <th style="border: 1px solid black;">ESTATUS DE PH</th>
            </tr>
        </thead>
        <tbody>
            <tr >
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
                    Página <span class="pagenum"></span>
                </td>
            </tr>
        </table>
    </section>

</body>

</html>
