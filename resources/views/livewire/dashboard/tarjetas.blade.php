<!-- Contenido -->
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Registro de Conc.</p>
                                <h5 class="font-weight-bolder mb-0">
                                    {{ $conWeekCount }}
                                    <span class="text-success text-sm font-weight-bolder">+ {{ $conDayCount }} <i
                                            class="fas fa-history"></i></span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-ruler-pencil text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Maquinas activas</p>
                                <h5 class="font-weight-bolder mb-0">
                                    {{ $maquinasCount }}
                                    <span class="text-secondary text-sm font-weight-bolder"> {{ $listNoActiveCount }} <i
                                            class="fas fa-eye-slash"></i></span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <!--<i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>-->
                                <i class="fas fa-charging-station text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Concentración baja</p>
                                <h5 class="font-weight-bolder mb-0">
                                    {{ $conBaja }}
                                    <span class="text-danger text-sm font-weight-bolder"><i
                                            class="fas fa-exclamation-triangle"></i></span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fas fa-thermometer-empty text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Concentración alta</p>
                                <h5 class="font-weight-bolder mb-0">
                                    {{ $conAlta }}
                                    <span class="text-warning text-sm font-weight-bolder"><i
                                            class="fas fa-exclamation-triangle"></i></span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fas fa-thermometer-full text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column h-100">
                                <p class="mb-1 pt-2 text-bold">Herramienta de Control de Fluidos</p>
                                <h5 class="font-weight-bolder">Cutting Fluids S.A. de C.V.</h5>
                                <p class="mb-5">¡Conozca todo los que ofrecemos para obtener el máximo potencial y
                                    lograr los mejores resultados!</p>
                                <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto"
                                    href=" https://cuttingfluids.com.mx/wp/es_es/ " target="_blank">
                                    Leer mas
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                            <div class="bg-gradient-primary border-radius-lg h-100">
                                <div class="position-relative d-flex align-items-center justify-content-center h-100">
                                    <img class="w-80 position-relative z-index-21 pt-3" src="img/logo_blanco.png"
                                        alt="rocket">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card h-100 p-3">
                <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100">

                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade contenedors tamano-1"
                        data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="4000">
                                <div class="contenedor1 tamano-2"></div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Máxima eficiencia de máquinas y
                                        Herramientas</h4>
                                    <p class="text-white opacity-8 fadeIn3 fadeInBottom">
                                        Cutting Fluids te ayuda a mejorar al máximo.</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <div class="contenedor2 tamano-2"></div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Sistemas de aspirado industrial
                                    </h4>
                                    <p class="text-white opacity-8 fadeIn3 fadeInBottom">
                                        Se brinda extensa gama de aspiradoras y sistemas de aspirado en la industria.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <div class="contenedor3 tamano-2"></div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Dosificadores y mezcladores</h4>
                                    <p class="text-white opacity-8 fadeIn3 fadeInBottom">
                                        Lograr la concentración ideal es muy importante.</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <div class="contenedor4 tamano-2"></div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Refrigerantes</h4>
                                    <p class="text-white opacity-8 fadeIn3 fadeInBottom">
                                        Ofrecemos una extensa gama de productos para un mejor rendimiento.</p>
                                </div>
                            </div>

                        </div>

                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-5 mb-lg-0 mb-4">
            <div class="card z-index-2">
                <div class="card-body p-3">
                    <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
                        <div class="chart">
                            <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                        </div>
                    </div>

                    <h6 class="ms-2 mt-4 mb-0"> Registros de las maquinas por mes </h6>
                    <p class="text-sm ms-2"> (<span class="font-weight-bolder">+{{ $sumaTotalReg }}</span>) este mes
                    </p>

                    <div class="container border-radius-lg mt-2">
                        <div class="row">
                            <div class="col-3 py-3 ps-0">
                                <div class="d-flex mb-2">
                                    <div
                                        class="icon icon-shape icon-xxs text-white shadow border-radius-sm bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center">
                                        <svg width="10px" height="10px" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 576 512">
                                            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                            <path
                                                d="M512 320s-64 92.65-64 128c0 35.35 28.66 64 64 64s64-28.65 64-64-64-128-64-128zm-9.37-102.94L294.94 9.37C288.69 3.12 280.5 0 272.31 0s-16.38 3.12-22.62 9.37l-81.58 81.58L81.93 4.76c-6.25-6.25-16.38-6.25-22.62 0L36.69 27.38c-6.24 6.25-6.24 16.38 0 22.62l86.19 86.18-94.76 94.76c-37.49 37.48-37.49 98.26 0 135.75l117.19 117.19c18.74 18.74 43.31 28.12 67.87 28.12 24.57 0 49.13-9.37 67.87-28.12l221.57-221.57c12.5-12.5 12.5-32.75.01-45.25zm-116.22 70.97H65.93c1.36-3.84 3.57-7.98 7.43-11.83l13.15-13.15 81.61-81.61 58.6 58.6c12.49 12.49 32.75 12.49 45.24 0s12.49-32.75 0-45.24l-58.6-58.6 58.95-58.95 162.44 162.44-48.34 48.34z" />
                                        </svg>
                                    </div>
                                    <p class="text-xs mt-1 mb-0 font-weight-bold">Conc.</p>
                                </div>
                                <h4 class="font-weight-bolder"><i
                                        class="fas fa-angle-double-up text-success text-sm"></i> {{ $conMonthCount }}
                                </h4>

                            </div>
                            <div class="col-3 py-3 ps-0">
                                <div class="d-flex mb-2">
                                    <div
                                        class="icon icon-shape icon-xxs text-white shadow border-radius-sm bg-gradient-info text-center me-2 d-flex align-items-center justify-content-center">
                                        <svg width="10px" height="10px" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 352 512">
                                            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                            <path
                                                d="M205.22 22.09c-7.94-28.78-49.44-30.12-58.44 0C100.01 179.85 0 222.72 0 333.91 0 432.35 78.72 512 176 512s176-79.65 176-178.09c0-111.75-99.79-153.34-146.78-311.82zM176 448c-61.75 0-112-50.25-112-112 0-8.84 7.16-16 16-16s16 7.16 16 16c0 44.11 35.89 80 80 80 8.84 0 16 7.16 16 16s-7.16 16-16 16z" />
                                        </svg>
                                    </div>
                                    <p class="text-xs mt-1 mb-0 font-weight-bold">Aceites</p>
                                </div>
                                <h4 class="font-weight-bolder"><i
                                        class="fas fa-angle-double-up text-success text-sm"></i>
                                    {{ $aceiteMonthCount }}</h4>

                            </div>
                            <div class="col-3 py-3 ps-0">
                                <div class="d-flex mb-2">
                                    <div
                                        class="icon icon-shape icon-xxs text-white shadow border-radius-sm bg-gradient-warning text-center me-2 d-flex align-items-center justify-content-center">
                                        <svg width="10px" height="10px" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 384 512">
                                            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                            <path
                                                d="M235.63,160H84.37a64,64,0,0,0-63.74,58.21L.27,442.21A64,64,0,0,0,64,512H256a64,64,0,0,0,63.74-69.79l-20.36-224A64,64,0,0,0,235.63,160ZM160,416c-33.12,0-60-26.33-60-58.75,0-25,35.7-75.47,52-97.27A10,10,0,0,1,168,260c16.33,21.8,52,72.27,52,97.27C220,389.67,193.12,416,160,416ZM379.31,94.06,336,50.74A64,64,0,0,0,290.75,32H224A32,32,0,0,0,192,0H128A32,32,0,0,0,96,32v96H224V96h66.75l43.31,43.31a16,16,0,0,0,22.63,0l22.62-22.62A16,16,0,0,0,379.31,94.06Z" />
                                        </svg>
                                    </div>
                                    <p class="text-xs mt-1 mb-0 font-weight-bold">Grasas</p>
                                </div>
                                <h4 class="font-weight-bolder"><i
                                        class="fas fa-angle-double-up text-success text-sm"></i> {{ $grasaMonthCount }}
                                </h4>

                            </div>
                            <div class="col-3 py-3 ps-0">
                                <div class="d-flex mb-2">
                                    <div
                                        class="icon icon-shape icon-xxs text-white shadow border-radius-sm bg-gradient-danger text-center me-2 d-flex align-items-center justify-content-center">
                                        <svg width="10px" height="10px" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                            <path
                                                d="M501.1 395.7L384 278.6c-23.1-23.1-57.6-27.6-85.4-13.9L192 158.1V96L64 0 0 64l96 128h62.1l106.6 106.6c-13.6 27.8-9.2 62.3 13.9 85.4l117.1 117.1c14.6 14.6 38.2 14.6 52.7 0l52.7-52.7c14.5-14.6 14.5-38.2 0-52.7zM331.7 225c28.3 0 54.9 11 74.9 31l19.4 19.4c15.8-6.9 30.8-16.5 43.8-29.5 37.1-37.1 49.7-89.3 37.9-136.7-2.2-9-13.5-12.1-20.1-5.5l-74.4 74.4-67.9-11.3L334 98.9l74.4-74.4c6.6-6.6 3.4-17.9-5.7-20.2-47.4-11.7-99.6.9-136.6 37.9-28.5 28.5-41.9 66.1-41.2 103.6l82.1 82.1c8.1-1.9 16.5-2.9 24.7-2.9zm-103.9 82l-56.7-56.7L18.7 402.8c-25 25-25 65.5 0 90.5s65.5 25 90.5 0l123.6-123.6c-7.6-19.9-9.9-41.6-5-62.7zM64 472c-13.2 0-24-10.8-24-24 0-13.3 10.7-24 24-24s24 10.7 24 24c0 13.2-10.7 24-24 24z" />
                                        </svg>
                                    </div>
                                    <p class="text-xs mt-1 mb-0 font-weight-bold">Manten.</p>
                                </div>
                                <h4 class="font-weight-bolder"><i
                                        class="fas fa-angle-double-up text-success text-sm"></i> {{ $mantMonthCount }}
                                </h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card z-index-2">
                <div class="card-header pb-0">
                    <h6>Concentraciones Mensuales</h6>
                    <p class="text-sm">
                        <i class="fa fa-arrow-up text-success"></i>
                        <span class="font-weight-bold">{{ $conMonthCount }}</span> registros este mes
                    </p>
                </div>
                <div class="card-body p-3">
                    <div class="chart">
                        <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4 mb-0">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h6>Últimos registros de concentración</h6>
                            <p class="text-sm mb-0">
                                <i class="fa fa-check text-info" aria-hidden="true"></i>
                                <span class="font-weight-bold ms-1">{{ $refriCount }}</span> registros actuales
                            </p>
                        </div>
                        <div class="col-lg-6 col-5 my-auto text-end">
                            <div class="dropdown float-lg-end pe-4">
                                <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fas fa-plus-circle text-secondary"></i>
                                </a>
                                <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                                    <li><a class="dropdown-item border-radius-md" href="">Ver mas</a></li>
                                    <li><a class="dropdown-item border-radius-md" href="/maquinas">Ver por
                                            maquina</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Maquina</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ">
                                        Litros Recarga</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ">
                                        Con. Recarga</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ">
                                        Con. Final</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ">
                                        pH</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ">
                                        Registro</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($refrigerantes as $dato)
                                    <tr>
                                        <td>
                                            <div class="d-flex py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">
                                                        <i class="fas fa-columns text-primary text-gradient"></i>
                                                        {{ $dato->maquinas->ids }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="progress-wrapper w-75 text-center mx-auto">
                                                <div class="progress-info">
                                                    <div class="progress-percentage">
                                                        <span class="text-xs font-weight-bold">
                                                            <i
                                                                class="fas fa-fill mx-2"></i>{{ $dato->litros_recarga }}
                                                            ltrs.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="progress-wrapper w-75 text-center mx-auto">
                                                <div class="progress-info">
                                                    <div class="progress-percentage">
                                                        <span class="text-xs font-weight-bold">
                                                            <i
                                                                class="fas fa-prescription-bottle mx-2"></i>{{ $dato->concentracion_recarga }}
                                                            brix.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="progress-wrapper w-75 text-center mx-auto">
                                                <div class="progress-info">
                                                    <div class="progress-percentage">
                                                        <span class="text-xs font-weight-bold">
                                                            <i
                                                                class="fas fa-prescription-bottle mx-2"></i>{{ $dato->concentracion_final }}
                                                            brix.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="progress-wrapper w-75 text-center mx-2">
                                                <div class="progress-info">
                                                    <div class="progress-percentage">
                                                        <span class="text-xs font-weight-bold">
                                                            <i class="fas fa-swatchbook mx-2"></i>{{ $dato->ph }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                {{ \Carbon\Carbon::parse($dato->created_at)->format('d/m/Y') }}</span>
                                        </td>


                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $mante_icono = [
            'Filtración' => 'fas fa-fill-drip text-warning',
            'Mantenimiento' => 'fas fa-wrench text-success',
        ];
        ?>
        <div class="col-lg-4 col-md-6">
            <div class="card h-100">
                <div class="card-header pb-0">
                    <h6>Resumen de mantenimientos</h6>
                    <p class="text-sm">
                        <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                        <span class="font-weight-bold">{{ $mantData->count() }}</span> registros este año
                    </p>
                </div>
                <div class="card-body p-3">
                    <div class="timeline timeline-one-side">
                        @foreach ($mantData as $mant)
                            <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                    <i class="<?php echo $mante_icono[$mant->tipo]; ?> text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">
                                        {{ $mant->tipo }},
                                        <i class="fas fa-fill mx-1 text-xxs"></i>{{ $mant->litros_recarga_con }}ltrs.
                                        /
                                        <i class="fas fa-tint mx-1 text-xxs"></i>
                                        {{ $mant->litros_recarga_agua }}
                                        ltrs.
                                    </h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"
                                        style=" text-transform: uppercase;">
                                        {{ $date = \Carbon\Carbon::parse($mant->created_at)->format('d F H:i') }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End Contenido -->

<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.7/index.global.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.7/index.global.min.js'></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth'
        });
        calendar.render();
    });
</script>

<!-- GRAFICAS
<style>
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;200;300;400;500;600;700&display=swap');

    :root {
        --calendar-bg-color: linear-gradient(90deg, rgba(35, 65, 115, 1) 0%, rgba(4, 24, 59, 1) 100%);
        --calendar-font-color: #FFF;
        --weekdays-border-bottom-color: #404040;
        --calendar-date-hover-color: #505050;
        --calendar-current-date-color: #8d8d8d;
        --calendar-today-color: linear-gradient(to bottom, #03a9f4, #2196f3);
        --calendar-today-innerborder-color: transparent;
        --calendar-nextprev-bg-color: transparent;
        --next-prev-arrow-color: #FFF;
        --calendar-border-radius: 16px;
        --calendar-prevnext-date-color: #484848
    }

    * {
        padding: 0;
        margin: 0;
    }

    .calendar {
        font-family: 'IBM Plex Sans', sans-serif;
        position: relative;
        max-width: auto;
        /*change as per your design need */
        min-width: auto;
        background: var(--calendar-bg-color);
        color: var(--calendar-font-color);
        margin: 20px auto;
        box-sizing: border-box;
        overflow: hidden;
        font-weight: normal;
        border-radius: var(--calendar-border-radius);
    }

    .calendar-inner {
        padding: 10px 10px;
    }

    .calendar .calendar-inner .calendar-body {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        text-align: center;
    }

    .calendar .calendar-inner .calendar-body div {
        padding: 4px;
        min-height: 30px;
        line-height: 30px;
        border: 1px solid transparent;
        margin: 10px 2px 0px;
    }

    .calendar .calendar-inner .calendar-body div:nth-child(-n+7) {
        border: 1px solid transparent;
        border-bottom: 1px solid var(--weekdays-border-bottom-color);
    }

    .calendar .calendar-inner .calendar-body div:nth-child(-n+7):hover {
        border: 1px solid transparent;
        border-bottom: 1px solid var(--weekdays-border-bottom-color);
    }

    .calendar .calendar-inner .calendar-body div>a {
        color: var(--calendar-font-color);
        text-decoration: none;
        display: flex;
        justify-content: center;
    }

    .calendar .calendar-inner .calendar-body div:hover {
        border: 1px solid var(--calendar-date-hover-color);
        border-radius: 4px;
    }

    .calendar .calendar-inner .calendar-body div.empty-dates:hover {
        border: 1px solid transparent;
    }

    .calendar .calendar-inner .calendar-controls {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
    }

    .calendar .calendar-inner .calendar-today-date {
        display: grid;
        text-align: center;
        cursor: pointer;
        margin: 3px 0px;
        background: var(--calendar-current-date-color);
        padding: 8px 0px;
        border-radius: 10px;
        width: 80%;
        margin: auto;
    }

    .calendar .calendar-inner .calendar-controls .calendar-year-month {
        display: flex;
        min-width: 100px;
        justify-content: space-evenly;
        align-items: center;
    }

    .calendar .calendar-inner .calendar-controls .calendar-next {
        text-align: right;
    }

    .calendar .calendar-inner .calendar-controls .calendar-year-month .calendar-year-label,
    .calendar .calendar-inner .calendar-controls .calendar-year-month .calendar-month-label {
        font-weight: 500;
        font-size: 20px;
    }

    .calendar .calendar-inner .calendar-body .calendar-today {
        background: var(--calendar-today-color);
        border-radius: 4px;
    }

    .calendar .calendar-inner .calendar-body .calendar-today:hover {
        border: 1px solid transparent;
    }

    .calendar .calendar-inner .calendar-body .calendar-today a {
        outline: 2px solid var(--calendar-today-innerborder-color);
    }

    .calendar .calendar-inner .calendar-controls .calendar-next a,
    .calendar .calendar-inner .calendar-controls .calendar-prev a {
        color: var(--calendar-font-color);
        font-family: arial, consolas, sans-serif;
        font-size: 26px;
        text-decoration: none;
        padding: 4px 12px;
        display: inline-block;
        background: var(--calendar-nextprev-bg-color);
        margin: 10px 0 10px 0;
    }

    .calendar .calendar-inner .calendar-controls .calendar-next a svg,
    .calendar .calendar-inner .calendar-controls .calendar-prev a svg {
        height: 20px;
        width: 20px;
    }

    .calendar .calendar-inner .calendar-controls .calendar-next a svg path,
    .calendar .calendar-inner .calendar-controls .calendar-prev a svg path {
        fill: var(--next-prev-arrow-color);
    }

    .calendar .calendar-inner .calendar-body .prev-dates,
    .calendar .calendar-inner .calendar-body .next-dates {
        color: var(--calendar-prevnext-date-color);
    }

    .calendar .calendar-inner .calendar-body .prev-dates:hover,
    .calendar .calendar-inner .calendar-body .next-dates:hover {
        border: 1px solid transparent;
        pointer-events: none;
    }
</style>-->

<script>
    //check the console for date click event
    //Fixed day highlight
    //Added previous month and next month view

    function CalendarControl() {
        const calendar = new Date();
        const calendarControl = {
            localDate: new Date(),
            prevMonthLastDate: null,
            calWeekDays: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            calMonthName: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec"
            ],
            daysInMonth: function(month, year) {
                return new Date(year, month, 0).getDate();
            },
            firstDay: function() {
                return new Date(calendar.getFullYear(), calendar.getMonth(), 1);
            },
            lastDay: function() {
                return new Date(calendar.getFullYear(), calendar.getMonth() + 1, 0);
            },
            firstDayNumber: function() {
                return calendarControl.firstDay().getDay() + 1;
            },
            lastDayNumber: function() {
                return calendarControl.lastDay().getDay() + 1;
            },
            getPreviousMonthLastDate: function() {
                let lastDate = new Date(
                    calendar.getFullYear(),
                    calendar.getMonth(),
                    0
                ).getDate();
                return lastDate;
            },
            navigateToPreviousMonth: function() {
                calendar.setMonth(calendar.getMonth() - 1);
                calendarControl.attachEventsOnNextPrev();
            },
            navigateToNextMonth: function() {
                calendar.setMonth(calendar.getMonth() + 1);
                calendarControl.attachEventsOnNextPrev();
            },
            navigateToCurrentMonth: function() {
                let currentMonth = calendarControl.localDate.getMonth();
                let currentYear = calendarControl.localDate.getFullYear();
                calendar.setMonth(currentMonth);
                calendar.setYear(currentYear);
                calendarControl.attachEventsOnNextPrev();
            },
            displayYear: function() {
                let yearLabel = document.querySelector(".calendar .calendar-year-label");
                yearLabel.innerHTML = calendar.getFullYear();
            },
            displayMonth: function() {
                let monthLabel = document.querySelector(
                    ".calendar .calendar-month-label"
                );
                monthLabel.innerHTML = calendarControl.calMonthName[calendar.getMonth()];
            },
            selectDate: function(e) {
                console.log(
                    `${e.target.textContent} ${
            calendarControl.calMonthName[calendar.getMonth()]
          } ${calendar.getFullYear()}`
                );
            },
            plotSelectors: function() {
                document.querySelector(
                    ".calendar"
                ).innerHTML += `<div class="calendar-inner"><div class="calendar-controls">
          <div class="calendar-prev"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M88.2 3.8L35.8 56.23 28 64l7.8 7.78 52.4 52.4 9.78-7.76L45.58 64l52.4-52.4z"/></svg></a></div>
          <div class="calendar-year-month">
          <div class="calendar-month-label"></div>
          <div>-</div>
          <div class="calendar-year-label"></div>
          </div>
          <div class="calendar-next"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M38.8 124.2l52.4-52.42L99 64l-7.77-7.78-52.4-52.4-9.8 7.77L81.44 64 29 116.42z"/></svg></a></div>
          </div>
          <div class="calendar-today-date">Today:
            ${calendarControl.calWeekDays[calendarControl.localDate.getDay()]},
            ${calendarControl.localDate.getDate()},
            ${calendarControl.calMonthName[calendarControl.localDate.getMonth()]}
            ${calendarControl.localDate.getFullYear()}
          </div>
          <div class="calendar-body"></div></div>`;
            },
            plotDayNames: function() {
                for (let i = 0; i < calendarControl.calWeekDays.length; i++) {
                    document.querySelector(
                        ".calendar .calendar-body"
                    ).innerHTML += `<div>${calendarControl.calWeekDays[i]}</div>`;
                }
            },
            plotDates: function() {
                document.querySelector(".calendar .calendar-body").innerHTML = "";
                calendarControl.plotDayNames();
                calendarControl.displayMonth();
                calendarControl.displayYear();
                let count = 1;
                let prevDateCount = 0;

                calendarControl.prevMonthLastDate = calendarControl.getPreviousMonthLastDate();
                let prevMonthDatesArray = [];
                let calendarDays = calendarControl.daysInMonth(
                    calendar.getMonth() + 1,
                    calendar.getFullYear()
                );
                // dates of current month
                for (let i = 1; i < calendarDays; i++) {
                    if (i < calendarControl.firstDayNumber()) {
                        prevDateCount += 1;
                        document.querySelector(
                            ".calendar .calendar-body"
                        ).innerHTML += `<div class="prev-dates"></div>`;
                        prevMonthDatesArray.push(calendarControl.prevMonthLastDate--);
                    } else {
                        document.querySelector(
                                ".calendar .calendar-body"
                            ).innerHTML +=
                            `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
                    }
                }
                //remaining dates after month dates
                for (let j = 0; j < prevDateCount + 1; j++) {
                    document.querySelector(
                            ".calendar .calendar-body"
                        ).innerHTML +=
                        `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
                }
                calendarControl.highlightToday();
                calendarControl.plotPrevMonthDates(prevMonthDatesArray);
                calendarControl.plotNextMonthDates();
            },
            attachEvents: function() {
                let prevBtn = document.querySelector(".calendar .calendar-prev a");
                let nextBtn = document.querySelector(".calendar .calendar-next a");
                let todayDate = document.querySelector(".calendar .calendar-today-date");
                let dateNumber = document.querySelectorAll(".calendar .dateNumber");
                prevBtn.addEventListener(
                    "click",
                    calendarControl.navigateToPreviousMonth
                );
                nextBtn.addEventListener("click", calendarControl.navigateToNextMonth);
                todayDate.addEventListener(
                    "click",
                    calendarControl.navigateToCurrentMonth
                );
                for (var i = 0; i < dateNumber.length; i++) {
                    dateNumber[i].addEventListener(
                        "click",
                        calendarControl.selectDate,
                        false
                    );
                }
            },
            highlightToday: function() {
                let currentMonth = calendarControl.localDate.getMonth() + 1;
                let changedMonth = calendar.getMonth() + 1;
                let currentYear = calendarControl.localDate.getFullYear();
                let changedYear = calendar.getFullYear();
                if (
                    currentYear === changedYear &&
                    currentMonth === changedMonth &&
                    document.querySelectorAll(".number-item")
                ) {
                    document
                        .querySelectorAll(".number-item")[calendar.getDate() - 1].classList.add(
                            "calendar-today");
                }
            },
            plotPrevMonthDates: function(dates) {
                dates.reverse();
                for (let i = 0; i < dates.length; i++) {
                    if (document.querySelectorAll(".prev-dates")) {
                        document.querySelectorAll(".prev-dates")[i].textContent = dates[i];
                    }
                }
            },
            plotNextMonthDates: function() {
                let childElemCount = document.querySelector('.calendar-body').childElementCount;
                //7 lines
                if (childElemCount > 42) {
                    let diff = 49 - childElemCount;
                    calendarControl.loopThroughNextDays(diff);
                }

                //6 lines
                if (childElemCount > 35 && childElemCount <= 42) {
                    let diff = 42 - childElemCount;
                    calendarControl.loopThroughNextDays(42 - childElemCount);
                }

            },
            loopThroughNextDays: function(count) {
                if (count > 0) {
                    for (let i = 1; i <= count; i++) {
                        document.querySelector('.calendar-body').innerHTML +=
                            `<div class="next-dates">${i}</div>`;
                    }
                }
            },
            attachEventsOnNextPrev: function() {
                calendarControl.plotDates();
                calendarControl.attachEvents();
            },
            init: function() {
                calendarControl.plotSelectors();
                calendarControl.plotDates();
                calendarControl.attachEvents();
            }
        };
        calendarControl.init();
    }

    const calendarControl = new CalendarControl();
</script>
<script src="assetss/js/plugins/chartjs.min.js"></script>
<script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                "Octubre", "Noviembre", "Diciembre"
            ],
            datasets: [{
                label: "Concentraciones",
                tension: 0.4,
                borderWidth: 0,
                borderRadius: 4,
                borderSkipped: false,
                backgroundColor: "#fff",
                data: [
                    @foreach ($dateMount1 as $item)
                        {{ $item->con }}
                    @endforeach ,
                    @foreach ($dateMount2 as $item)
                        {{ $item->con }}
                    @endforeach ,
                    @foreach ($dateMount3 as $item)
                        {{ $item->con }}
                    @endforeach ,
                    @foreach ($dateMount4 as $item)
                        {{ $item->con }}
                    @endforeach ,
                    @foreach ($dateMount5 as $item)
                        {{ $item->con }}
                    @endforeach ,
                    @foreach ($dateMount6 as $item)
                        {{ $item->con }}
                    @endforeach ,
                    @foreach ($dateMount7 as $item)
                        {{ $item->con }}
                    @endforeach ,
                    @foreach ($dateMount8 as $item)
                        {{ $item->con }}
                    @endforeach ,
                    @foreach ($dateMount9 as $item)
                        {{ $item->con }}
                    @endforeach ,
                    @foreach ($dateMount10 as $item)
                        {{ $item->con }}
                    @endforeach ,
                    @foreach ($dateMount11 as $item)
                        {{ $item->con }}
                    @endforeach ,
                    @foreach ($dateMount12 as $item)
                        {{ $item->con }}
                    @endforeach
                ],
                maxBarThickness: 6
            }, ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        suggestedMin: 0,
                        suggestedMax: 500,
                        beginAtZero: true,
                        padding: 15,
                        font: {
                            size: 14,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                        color: "#fff"
                    },
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false
                    },
                    ticks: {
                        display: false
                    },
                },
            },
        },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 128, 183 )');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //color difuminado

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(166, 166, 166)');
    gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //color difuminado

    new Chart(ctx2, {
        type: "line",
        data: {
            labels: ["En.", "Febr.", "Mzo.", "Abr.", "My.", "Jun.", "Jul.", "Agt.", "Sept.", "Oct.", "Nov.",
                "Dic."
            ],
            datasets: [{
                    label: "Concentración final",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#5e80b7",
                    borderWidth: 3,
                    backgroundColor: gradientStroke1,
                    fill: true,
                    data: [
                        @foreach ($dateMount1 as $item)
                            {{ $item->con }}
                        @endforeach ,
                        @foreach ($dateMount2 as $item)
                            {{ $item->con }}
                        @endforeach ,
                        @foreach ($dateMount3 as $item)
                            {{ $item->con }}
                        @endforeach ,
                        @foreach ($dateMount4 as $item)
                            {{ $item->con }}
                        @endforeach ,
                        @foreach ($dateMount5 as $item)
                            {{ $item->con }}
                        @endforeach ,
                        @foreach ($dateMount6 as $item)
                            {{ $item->con }}
                        @endforeach ,
                        @foreach ($dateMount7 as $item)
                            {{ $item->con }}
                        @endforeach ,
                        @foreach ($dateMount8 as $item)
                            {{ $item->con }}
                        @endforeach ,
                        @foreach ($dateMount9 as $item)
                            {{ $item->con }}
                        @endforeach ,
                        @foreach ($dateMount10 as $item)
                            {{ $item->con }}
                        @endforeach ,
                        @foreach ($dateMount11 as $item)
                            {{ $item->con }}
                        @endforeach ,
                        @foreach ($dateMount12 as $item)
                            {{ $item->con }}
                        @endforeach
                    ],
                    maxBarThickness: 6

                },
                {
                    label: "Concentración inicial",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#9E9E9E",
                    borderWidth: 3,
                    backgroundColor: gradientStroke2,
                    fill: true,
                    data: [
                        @foreach ($dateMount_1 as $item)
                            {{ $item->con }}
                        @endforeach ,
                        @foreach ($dateMount_2 as $item)
                            {{ $item->con }}
                        @endforeach ,
                        @foreach ($dateMount_3 as $item)
                            {{ $item->con }}
                        @endforeach ,
                        @foreach ($dateMount_4 as $item)
                            {{ $item->con }}
                        @endforeach ,
                        @foreach ($dateMount_5 as $item)
                            {{ $item->con }}
                        @endforeach ,
                        @foreach ($dateMount_6 as $item)
                            {{ $item->con }}
                        @endforeach ,
                        @foreach ($dateMount_7 as $item)
                            {{ $item->con }}
                        @endforeach ,
                        @foreach ($dateMount_8 as $item)
                            {{ $item->con }}
                        @endforeach ,
                        @foreach ($dateMount_9 as $item)
                            {{ $item->con }}
                        @endforeach ,
                        @foreach ($dateMount_10 as $item)
                            {{ $item->con }}
                        @endforeach ,
                        @foreach ($dateMount_11 as $item)
                            {{ $item->con }}
                        @endforeach ,
                        @foreach ($dateMount_12 as $item)
                            {{ $item->con }}
                        @endforeach
                    ],
                    maxBarThickness: 6
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#b2b9bf',
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#b2b9bf',
                        padding: 20,
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
    });
</script>
