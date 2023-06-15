<div>
    <!-- Formulario de Consulta -->
    <div class="container-fluid">
        <div class="page-header min-height-160 border-radius-xl mt-4"
            style="
            background-image: url('img/bg5.jpg');
            background-position-y: 50%;
          ">
            <span class="mask bg-gradient-light opacity-3"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-3 mt-n8 mb-4 overflow-hidden">
            <div class="row gx-4">
                <div class="container text-end mb-3 btn_reportes">
                    <a class="btn btn-round mb-0 me-1 bg-gradient-danger {{ count($data) < 1 ? 'disabled' : '' }}"
                        target="_blank" href="{{ url('report/pdf' . '/' . $valor . '/' . $dateFrom . '/' . $dateTo) }}"
                        style="--bs-btn-padding-y: .40rem; --bs-btn-padding-x: .80rem; --bs-btn-font-size: .80rem;">
                        <i class="fas fa-file-pdf"></i> Generar PDF</a>

                    <button class="btn btn-round mb-0 me-1 bg-gradient-primary {{ count($data) < 1 ? 'disabled' : '' }}"
                        href="/reportes"
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
                            <select wire:model="maquina" class="form-select">
                                <option selected value="0">Ninguno</option>
                                @foreach ($maquinas as $maquina)
                                    <option value="{{ $maquina->id }}">{{ $maquina->ids }}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Selecciona una Maquina</label>
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
                                href="{{ url('report/pdf' . '/' . $valor . '/' . $dateFrom . '/' . $dateTo) }}">
                                <i class="fas fa-file-pdf"></i> Generar PDF</a>
                            <a class="btn mb-0 w-100 btn-round me-1 bg-gradient-primary my-2 {{ count($data) < 1 ? 'disabled' : '' }}"
                                href="/reportes">
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
                        <div class="content-wrapper-header">
                            <div class="content-wrapper-context">
                                <h2 class="text-white">Bienvenido!</h2>
                                <div class="content-text">
                                    Puedes consultar la información que necesites en cualquier momento, sin
                                    necesidad
                                    de estar en tu lugar de trabajo. Optimiza tu tiempo generando tus reportes sin
                                    complicaciones.
                                </div>

                            </div>
                            <img class="content-wrapper-img" src="img/reportes.png" alt="" />
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
                                                        {{ $nombre_empresa }}
                                                    </li>
                                                    <li class="list-group-item border-0 ps-0 text-sm mb-1">
                                                        {{ $direccion_empresa }}
                                                    </li>
                                                    <li class="list-group-item border-0 ps-0 text-sm">
                                                        <strong class="text-dark">Telefono:</strong> &nbsp;
                                                        {{ $telefono_empresa }}
                                                    </li>
                                                    <li class="list-group-item border-0 ps-0 text-sm">
                                                        <strong class="text-dark">Responsable:</strong> &nbsp;
                                                        {{ $contacto_empresa }}
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
                                                        <strong class="text-dark">Maquina:</strong> &nbsp;
                                                        {{ $nombre_maquina }}
                                                    </li>
                                                    <li class="list-group-item border-0 ps-0 text-sm">
                                                        <strong class="text-dark">Producto:</strong> &nbsp;
                                                        {{ $producto }}
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
                                <!-- Sección 1 Grafica de Concentraciones -->
                                <div class="timeline-block mb-5">
                                    <span class="timeline-step">
                                        <i class="fas fa-chart-line text-primary text-gradient"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0 text-center">Grafica de
                                            Concentraciones</h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-3 text-center">
                                            SECCIÓN 1</p>
                                        <div>
                                            <figure class="highcharts-figure">
                                                <div id="grafica"></div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>

                                <!-- Seccion 2 Tabla de concentraciones -->
                                <div class="timeline-block mb-5">
                                    <span class="timeline-step">
                                        <i class="fas fa-table text-success text-gradient"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0 text-center">Tabla de
                                            Concentraciones</h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0 text-center">
                                            SECCIÓN 2</p>
                                        <div class="table-responsive p-0 mx-1 mt-4">
                                            <table class="table table-sm table-bordered align-items-center justify-content-center mb-0">
                                                <thead>
                                                    <tr class="text-center text-black" style="background-color: #5e80b75e">
                                                        <th class="text-uppercase  text-xs font-weight-bolder ">
                                                            <strong>Datos Generales / Fechas(dia)</strong>
                                                        </th>
                                                        @foreach ($data as $d)
                                                            <th
                                                                class="text-uppercase text-xs font-weight-bolder ps-2">
                                                                <strong>{{ \Carbon\Carbon::parse($d->created_at)->format('d') }}
                                                            </th></strong>
                                                        @endforeach
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-0">

                                                                <div class="my-auto">
                                                                    <h6 class="mb-0 text-xs"><strong>Concentración
                                                                            Inicial
                                                                            (°Brix)</strong></h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        @foreach ($data as $d)
                                                            <td style="background-color: rgb(243, 243, 243)">
                                                                <p
                                                                    class="text-sm text-secondary font-weight-bold mb-0">
                                                                    {{ $d->concentracion_inicial }}</p>
                                                            </td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-0">

                                                                <div class="my-auto">
                                                                    <h6 class="mb-0 text-xs"><strong>Volumen Inicial
                                                                            (lts)</strong></h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        @foreach ($data as $d)
                                                            <td>
                                                                <p
                                                                    class="text-sm text-secondary font-weight-bold mb-0">
                                                                    {{ $d->volumen_inicial }}</p>
                                                            </td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-0">

                                                                <div class="my-auto">
                                                                    <h6 class="mb-0 text-xs"><strong>Volumen de
                                                                            Recargas
                                                                            (lts)</strong></h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        @foreach ($data as $d)
                                                            <td style="background-color: rgb(243, 243, 243)">
                                                                <p
                                                                    class="text-sm text-secondary font-weight-bold mb-0">
                                                                    {{ $d->litros_recarga }}</p>
                                                            </td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-0">

                                                                <div class="my-auto">
                                                                    <h6 class="mb-0 text-xs"><strong>Concentración de
                                                                            Recarga
                                                                            (°Brix)</strong></h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        @foreach ($data as $d)
                                                            <td>
                                                                <p class="text-sm font-weight-bold mb-0">
                                                                    {{ $d->concentracion_recarga }}</p>
                                                            </td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-0">

                                                                <div class="my-auto">
                                                                    <h6 class="mb-0 text-xs"><strong>Concentración
                                                                            Final
                                                                            (°Brix)</strong></h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        @foreach ($data as $d)
                                                            <td style="background-color: rgb(243, 243, 243)">
                                                                <p class="text-sm font-weight-bold mb-0">
                                                                    {{ $d->concentracion_final }}</p>
                                                            </td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-0">

                                                                <div class="my-auto">
                                                                    <h6 class="mb-0 text-xs"><strong>Rango de
                                                                            pH</strong></h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        @foreach ($data as $d)
                                                            <td>
                                                                <p class="text-sm font-weight-bold mb-0">
                                                                    {{ $d->ph }}</p>
                                                            </td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-0">

                                                                <div class="my-auto">
                                                                    <h6 class="mb-0 text-xs"><strong>Litros de
                                                                            concentrado(Lts/día)</strong></h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        @foreach ($data as $d)
                                                            <td style="background-color: rgb(243, 243, 243)">
                                                                <p class="text-sm font-weight-bold mb-0">
                                                                    {{ ($d->litros_recarga * $d->concentracion_recarga * $d->maquinas->fac_refractor) / 100 }}
                                                                </p>
                                                            </td>
                                                        @endforeach
                                                    </tr>
                                                    <tr>
                                                        <td style="border: rgb(223, 221, 221) 1px solid;">
                                                            <div class="d-flex px-0">

                                                                <div class="my-auto">
                                                                    <h6 class="mb-0 text-xs"><strong>Total de
                                                                            concentrado
                                                                            acumulado</strong></h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        @foreach ($data as $d)
                                                            <td style="border: rgb(223, 221, 221) 1px solid;">
                                                                <p class="text-sm font-weight-bold mb-0">
                                                                    {{ $num1 += ($d->litros_recarga * $d->concentracion_recarga * $d->maquinas->fac_refractor) / 100 }}
                                                                </p>
                                                            </td>
                                                        @endforeach
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="container p-0 mt-5">
                                            <div class="row">
                                                <div class="col table-stadics">
                                                    <div class="table-responsive p-0">
                                                        <table class="table table-bordered table-sm align-items-center mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex px-2 py-1">
                                                                            <div
                                                                                class="d-flex flex-column justify-content-center">
                                                                                <h6 class="mb-0 text-xs"><strong>Días
                                                                                        totales</strong>
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="background-color: #5e80b75e">
                                                                        <p class="text-xs font-weight-bold mb-0">
                                                                            {{ $data->count() }} dias
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex px-2 py-1">
                                                                            <div
                                                                                class="d-flex flex-column justify-content-center">
                                                                                <h6 class="mb-0 text-xs">
                                                                                    <strong>Concentración inicial
                                                                                        (Brix)</strong>
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="text-xs font-weight-bold mb-0">
                                                                            {{ round($prom_con_ini, 2) }} brix
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex px-2 py-1">
                                                                            <div
                                                                                class="d-flex flex-column justify-content-center">
                                                                                <h6 class="mb-0 text-xs">
                                                                                    <strong>Volumen inicial
                                                                                        (Ltrs.)</strong>
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="background-color: #5e80b75e">
                                                                        <p class="text-xs font-weight-bold mb-0">
                                                                            {{ round($prom_vol_ini, 2) }} ltrs.
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex px-2 py-1">
                                                                            <div
                                                                                class="d-flex flex-column justify-content-center">
                                                                                <h6 class="mb-0 text-xs">
                                                                                    <strong>Volumen de recargas
                                                                                        (Ltrs.)</strong>
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="text-xs font-weight-bold mb-0">
                                                                            {{ $suma_vol_rec }} ltrs.
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="border: rgb(223, 221, 221) 1px solid;">
                                                                        <div class="d-flex px-2 py-1">
                                                                            <div
                                                                                class="d-flex flex-column justify-content-center">
                                                                                <h6 class="mb-0 text-xs">
                                                                                    <strong>Concentración de recarga
                                                                                        (Brix)</strong>
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="border: rgb(223, 221, 221) 1px solid; background-color: #5e80b75e">
                                                                        <p class="text-xs font-weight-bold mb-0">
                                                                            {{ round($prom_con_rec, 2) }} brix
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col table-stadics">
                                                    <div class="table-responsive p-0">
                                                        <table class="table table-bordered table-sm align-items-center mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex px-2 py-1">
                                                                            <div
                                                                                class="d-flex flex-column justify-content-center">
                                                                                <h6 class="mb-0 text-xs">
                                                                                    <strong>Concentración final
                                                                                        (Brix)</strong>
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="background-color: #5e80b75e">
                                                                        <p class="text-xs font-weight-bold mb-0">
                                                                            {{ round($prom_con_fin, 2) }} brix
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex px-2 py-1">
                                                                            <div
                                                                                class="d-flex flex-column justify-content-center">
                                                                                <h6 class="mb-0 text-xs">
                                                                                    <strong>Promedio de pH</strong>
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="text-xs font-weight-bold mb-0">
                                                                            {{ round($promedio_ph, 2) }}
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex px-2 py-1">
                                                                            <div
                                                                                class="d-flex flex-column justify-content-center">
                                                                                <h6 class="mb-0 text-xs"><strong>Litros
                                                                                        de Concentrado
                                                                                        (Ltrs/días)</strong>
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="background-color: #5e80b75e">
                                                                        <p class="text-xs font-weight-bold mb-0">
                                                                            {{ round($promedio_concentrado, 2) }} ltrs.
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="border: rgb(223, 221, 221) 1px solid;">
                                                                        <div class="d-flex px-2 py-1">
                                                                            <div
                                                                                class="d-flex flex-column justify-content-center">
                                                                                <h6 class="mb-0 text-xs"><strong>Total,
                                                                                        de concentrado
                                                                                        acumulado</strong>
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td style="border: rgb(223, 221, 221) 1px solid;">
                                                                        <p class="text-xs font-weight-bold mb-0">
                                                                            {{ $num1 }}
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <?php
                                $arr_espuma_aceite = [
                                    'Si' => 'background-color: red;',
                                    'Sí' => 'background-color: red;',
                                    'No' => 'background-color: green;',
                                    'si' => 'background-color: red;',
                                    'no' => 'background-color: green;',
                                ];

                                $arr_aroma = [
                                    'Regular' => 'background-color: yellow;',
                                    'Malo' => 'background-color: red;',
                                    'Bueno' => 'background-color: green;',
                                    'regular' => 'background-color: yellow;',
                                    'malo' => 'background-color: red;',
                                    'bueno' => 'background-color: green;',
                                ];
                                ?>
                                <!-- Sección 3 Comentarios -->
                                <div class="timeline-block mb-5">
                                    <span class="timeline-step">
                                        <i class="fas fa-comments text-warning text-gradient"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0 text-center">Comentarios
                                            registrados
                                        </h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0 text-center">
                                            SECCIÓN 3</p>
                                        <div class="table-responsive columnas p-0 mx-3 mt-4">
                                            @foreach ($data as $da)
                                                <table
                                                    class="table table-bordered align-items-center justify-content-center mb-0">
                                                    <tbody>
                                                        <tr class="text-xs ps-2">
                                                            <td style="width: 60px">
                                                                <h6 class="mb-0 text-xs"><strong>Día: </strong>
                                                                    {{ \Carbon\Carbon::parse($da->created_at)->format('d') }}
                                                                </h6>
                                                            </td>
                                                            <td class="text-uppercase text-xxs text-center font-weight-bolder ps-2"
                                                                colspan="6" rowspan="2">
                                                                {{ $da->comentarios }}
                                                            </td>
                                                        </tr>
                                                        <tr class="text-xs ps-2">
                                                            <td style="width: 60px">
                                                                <h6 class="mb-0 text-xs"><strong>Mes: </strong>
                                                                    {{ \Carbon\Carbon::parse($da->created_at)->format('m') }}
                                                                </h6>
                                                            </td>
                                                        </tr>
                                                        <tr class="text-xs ps-2">
                                                            <td style="width: 60px" rowspan="2">
                                                                <h6 class="mb-0 text-xs"><strong>Año: </strong>
                                                                    {{ \Carbon\Carbon::parse($da->created_at)->format('Y') }}
                                                                </h6>
                                                            </td>
                                                            <td>
                                                                <h6 class="mb-0 text-xs"><strong>Espuma</strong>
                                                                </h6>
                                                            </td>
                                                            <td class="text-white" style="<?php echo $arr_espuma_aceite[$da->exceso_espuma]; ?>">
                                                                {{ $da->exceso_espuma }}
                                                            </td>
                                                            <td>
                                                                <h6 class="mb-0 text-xs"><strong>Mal olor</strong>
                                                                </h6>
                                                            </td>
                                                            <td class="text-white" style="<?php echo $arr_aroma[$da->aroma]; ?>">
                                                                {{ $da->aroma }}</td>
                                                            <td>
                                                                <h6 class="mb-0 text-xs"><strong>A. Entram.</strong>
                                                                </h6>
                                                            </td>
                                                            <td class="text-white" style="<?php echo $arr_espuma_aceite[$da->aceites_entrampados]; ?>">
                                                                {{ $da->aceites_entrampados }}</td>
                                                        </tr>
                                                        <tr class="text-xs ps-2">
                                                            <td colspan="6"
                                                                style="border: rgb(223, 221, 221) 1px solid;">
                                                                <h6 class="mb-0 text-xs"><strong>Tecnico: </strong>
                                                                    {{ $da->usuarios->name ?? 'No existe' }}
                                                                </h6>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>

                                <!-- Sección 4 Grafica de dona de Comentarios -->
                                <div class="timeline-block mb-5">
                                    <span class="timeline-step">
                                        <i class="ni ni-credit-card text-info text-gradient"></i>
                                    </span>
                                    <div class="timeline-content">
                                        <h6 class="text-dark text-sm font-weight-bold mb-0 text-center">Grafica estado
                                            de soluble
                                        </h6>
                                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0 text-center">
                                            Sección 4</p>
                                        <div class="container mt-4">
                                            <div class="row">
                                                <div class="col-sm">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0 text-center">
                                                        Espuma
                                                    </h6>
                                                    <figure class="highcharts-figure">
                                                        <div id="grafica_espuma"></div>
                                                    </figure>
                                                </div>
                                                <div class="col-sm">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0 text-center">Mal
                                                        olor
                                                    </h6>
                                                    <figure class="highcharts-figure">
                                                        <div id="grafica_olor"></div>
                                                    </figure>
                                                </div>
                                                <div class="col-sm">
                                                    <h6 class="text-dark text-sm font-weight-bold mb-0 text-center">
                                                        Aceite
                                                    </h6>
                                                    <figure class="highcharts-figure">
                                                        <div id="grafica_entram"></div>
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
    @endif

</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
    window.addEventListener('data_vacia', event => {
        Swal.fire({
            icon: 'error',
            title: 'Algo salió mal!',
            text: 'No se encontraron registros',
            customClass: {
                confirmButton: 'custom-button',
            },
            confirmButtonText: 'Aceptar'
        })

    });
</script>

<script>
    Highcharts.chart('grafica', {

        title: {
            text: ''
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
