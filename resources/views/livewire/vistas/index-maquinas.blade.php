<div>
    <?php
    $active = [
        '1' => 'bg-gradient-success',
        '0' => 'bg-gradient-danger',
    ];

    $active_name = [
        '1' => 'Activa',
        '0' => 'Inactiva',
    ];
    ?>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Acerca de todas las Maquinas</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Maquina</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status</th>

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tipo</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Producto</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tanque</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            pH </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Conc. </th>

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            F.R.</th>

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Acción</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($maquinas as $maquina)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <i class="fas fa-columns text-lg me-3"></i>
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $maquina->ids }}</h6>
                                                        <p class="text-xs text font-weight-bold mt-1    ">
                                                            {{ $maquina->marca }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm <?php echo $active[$maquina->is_active]; ?>">
                                                    <?php echo $active_name[$maquina->is_active]; ?></span>
                                            </td>
                                            <td>
                                                <p class="text-xs text-center font-weight-bold mb-0">
                                                    {{ $maquina->tipo ?? 'No existe' }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs text-center font-weight-bold mb-0">
                                                    {{ $maquina->producto ?? 'No existe' }}</p>

                                            </td>
                                            <td>
                                                <p class="text-xs text-center font-weight-bold mb-0">
                                                    {{ $maquina->capacidad_tanque ?? 'No existe' }} ltrs.</p>
                                            </td>

                                            <td>
                                                <p class="text-xs text-center font-weight-bold mb-0">
                                                    {{ $maquina->rango_ph ?? 'No existe' }} Max.</p>
                                                <p class="text-xs text-center text-secondary mb-0">
                                                    {{ $maquina->rango_ph_min ?? 'No existe' }} Min.</p>
                                            </td>
                                            <td>
                                                <p class="text-xs text-center font-weight-bold mb-0">
                                                    {{ $maquina->reco_max ?? 'No existe' }} Max.</p>
                                                <p class="text-xs text-center text-secondary mb-0">
                                                    {{ $maquina->reco_min ?? 'No existe' }} Min.</p>
                                            </td>
                                            <td>
                                                <p class="text-xs text-center font-weight-bold mb-0">
                                                    {{ $maquina->fac_refractor ?? 'No existe' }}</p>

                                            </td>

                                            <td class="align-middle text-center ">


                                                <div class="btn-group dropend">
                                                    <button type="button"
                                                        class="btn btn-tumblr btn-icon-only  dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                    </button>

                                                    <ul class="dropdown-menu"
                                                        style=" box-shadow: 0px 0px 25px #999999; backdrop-filter: blur(10px); ">
                                                        <li><a class="dropdown-item" type="button"
                                                                style="border-bottom: 1px solid #dadada;"
                                                                wire:click="OpenViewRefrigerantes({{ $maquina->id }})"
                                                                data-bs-toggle="modal" data-bs-target="#Refrigerantes">
                                                                <span class="text-dark text-sm font-weight-bolder">
                                                                    <i class="fas fa-caret-right mx-2"></i>
                                                                    <i class="fas fa-prescription-bottle"></i></span>
                                                                Historial de Recargas
                                                            </a>
                                                        </li>
                                                        <li><a class="dropdown-item" type="button"
                                                                style="border-bottom: 1px solid #dadada;"
                                                                wire:click="OpenViewAceites({{ $maquina->id }})"
                                                                data-bs-toggle="modal" data-bs-target="#Aceites">
                                                                <span class="text-dark text-sm font-weight-bolder">
                                                                    <i class="fas fa-caret-right mx-2"></i>
                                                                    <i class="fas fa-tint"></i></span>
                                                                Historial de Aceites
                                                            </a>
                                                        </li>
                                                        <li><a class="dropdown-item" type="button"
                                                                style="border-bottom: 1px solid #dadada;"
                                                                wire:click="OpenViewGrasas({{ $maquina->id }})"
                                                                data-bs-toggle="modal" data-bs-target="#Grasas">
                                                                <span class="text-dark text-sm font-weight-bolder">
                                                                    <i class="fas fa-caret-right mx-2"></i>
                                                                    <i class="fas fa-pump-soap"></i></span>
                                                                Historial de Grasas
                                                            </a>
                                                        </li>
                                                        <li><a class="dropdown-item " type="button"
                                                                wire:click="OpenViewMante({{ $maquina->id }})"
                                                                data-bs-toggle="modal" data-bs-target="#Mantenimientos">
                                                                <span class="text-dark text-sm font-weight-bolder">
                                                                    <i class="fas fa-caret-right mx-2"></i>
                                                                    <i class="fas fa-wrench"></i></span>
                                                                Mantenimientos
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
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
        'Si' => 'bg-danger',
        'Sí' => 'bg-danger',
        'No' => 'bg-success',
        'si' => 'bg-danger',
        'no' => 'bg-success',
    ];

    $arr_aroma = [
        'Regular' => 'bg-warning',
        'Malo' => 'bg-danger',
        'Bueno' => 'bg-success',
        'regular' => 'bg-warning',
        'malo' => 'bg-danger',
        'bueno' => 'bg-success',
    ];
    $arr_aroma = [
        'Regular' => 'bg-warning',
        'Malo' => 'bg-danger',
        'Bueno' => 'bg-success',
        'regular' => 'bg-warning',
        'malo' => 'bg-danger',
        'bueno' => 'bg-success',
    ];
    $arr_color = [
        'Amarillo' => 'circulo-amarillo',
        'amarillo' => 'circulo-amarillo',
        'Ámbar' => 'circulo-ambar',
        'ambar' => 'circulo-ambar',
        'Café' => 'circulo-cafe',
        'cafe' => 'circulo-cafe',
        'Variantes claros' => 'circulo-claros',
        'Variantes oscuros' => 'circulo-oscuros',
    ];
    $aroma_aceite = [
        'Aceite quemado' => 'bg-warning',
        'aceite quemado' => 'bg-warning',
        'Dulce' => 'bg-danger',
        'dulce' => 'bg-danger',
        'Bien' => 'bg-success',
        'bien' => 'bg-success',
    ];
    $mante_icono = [
        'Filtración' => 'fas fa-fill-drip',
        'Mantenimiento' => 'fas fa-wrench',
        'mantenimiento' => 'fas fa-wrench',
    ];
    ?>

    <!-- Modal Registro de Refrigerantes-->
    <div wire:ignore.self class="modal fade" id="Refrigerantes" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="Refrigerantes" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
            <div class="modal-content">
                <div class="modal-body bg-gray-100">
                    <div class="container-fluid py-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-4">
                                    <div class="card-body px-0 pt-0 pb-2">
                                        <div class="row search-models mx-3 my-4">
                                            <div class="col-6 d-flex align-items-center">
                                                <h6 class="mb-0">
                                                    <i
                                                        class="fas fa-coins mx-2 text-primary text-gradient text-2xl"></i>Historial
                                                    de Recargas en <strong>"{{ $view_name_machine }}"</strong>
                                                </h6>

                                            </div>
                                            <div class="col-6  d-flex align-items-center text-end">
                                                <div class="input-group mx-5 w-60">
                                                    <span class="input-group-text text-body"><i class="fas fa-search"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control"
                                                        placeholder="Type here...">
                                                </div>
                                                <a class="btn bg-gradient-danger mb-0 "><i
                                                        class="far fa-file-pdf"></i>
                                                    PDF</a>

                                            </div>
                                        </div>
                                        <div class="search-models2">
                                            <h6 class="mx-3 mt-2">
                                                <i
                                                    class="fas fa-coins mx-2 text-primary text-gradient text-2xl"></i>Historial
                                                de Recargas en <strong>"{{ $view_name_machine }}"</strong>
                                            </h6>
                                            <div class="container">
                                                <div class="row">
                                                  <div class="col-8">
                                                    <div class="input-group mx-0">
                                                        <span class="input-group-text text-body"><i class="fas fa-search"
                                                                aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="Type here...">
                                                    </div>
                                                  </div>
                                                  <div class="col-4">
                                                    <a class="btn bg-gradient-danger mb-0 "><i class="far fa-file-pdf"></i>
                                                        PDF</a>
                                                  </div>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="table-responsive mt-3 mx-3">
                                            <table class="table align-items-center justify-content-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Alta</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ">
                                                            Con. Inicial</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ">
                                                            Vol. Inicial</th>
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
                                                            Aroma</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ">
                                                            Aceites Ent.</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ">
                                                            Color</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ">
                                                            Exceso Espuma</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ">
                                                            Comentarios</th>

                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($refrigerantes as $dato)
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex px-2">
                                                                    <div class="text-lg">
                                                                        <i class="fas fa-calendar-week mx-2"></i>

                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <h6 class="mb-0 text-xs">
                                                                            {{ \Carbon\Carbon::parse($dato->created_at)->formatLocalized('%d %B %Y %I:%M %p') }}
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
                                                                                    class="fas fa-prescription-bottle mx-2"></i></i>{{ $dato->concentracion_inicial }}
                                                                                brix.</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress text-bold"
                                                                        style="width: 80px">
                                                                        <div class="progress-bar bg-gradient-primary"
                                                                            style="width: {{ ($dato->concentracion_inicial * 100) / $dato->maquinas->reco_max }}%"
                                                                            role="progressbar"
                                                                            aria-valuenow="{{ ($dato->concentracion_inicial * 100) / $dato->maquinas->reco_max }}"
                                                                            aria-valuemin="0" aria-valuemax="100">
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
                                                                                    class="fas fa-fill mx-2"></i>{{ $dato->volumen_inicial }}
                                                                                ltrs.</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress text-bold"
                                                                        style="width: 80px">
                                                                        <div class="progress-bar bg-gradient-secondary"
                                                                            style="width: {{ round(($dato->volumen_inicial * 100) / $dato->maquinas->capacidad_tanque, 0) }}%"
                                                                            role="progressbar"
                                                                            aria-valuenow="{{ round(($dato->volumen_inicial * 100) / $dato->maquinas->capacidad_tanque, 0) }}"
                                                                            aria-valuemin="0" aria-valuemax="100">
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
                                                                                    class="fas fa-fill mx-2"></i>{{ $dato->litros_recarga }}
                                                                                ltrs.</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress text-bold"
                                                                        style="width: 80px">
                                                                        <div class="progress-bar bg-gradient-secondary"
                                                                            style="width: {{ round(($dato->litros_recarga * 100) / $dato->maquinas->capacidad_tanque, 0) }}%"
                                                                            role="progressbar"
                                                                            aria-valuenow="{{ round(($dato->litros_recarga * 100) / $dato->maquinas->capacidad_tanque, 0) }}"
                                                                            aria-valuemin="0" aria-valuemax="100">
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
                                                                    <div class="progress text-bold"
                                                                        style="width: 80px">
                                                                        <div class="progress-bar bg-gradient-primary"
                                                                            style="width: {{ round(($dato->concentracion_recarga * 100) / $dato->maquinas->reco_max, 0) }}%"
                                                                            role="progressbar"
                                                                            aria-valuenow="{{ round(($dato->concentracion_recarga * 100) / $dato->maquinas->reco_max, 0) }}"
                                                                            aria-valuemin="0" aria-valuemax="100">
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
                                                                    <div class="progress text-bold"
                                                                        style="width: 80px">
                                                                        <div class="progress-bar bg-gradient-primary"
                                                                            style="width: {{ round(($dato->concentracion_final * 100) / $dato->maquinas->reco_max, 0) }}%"
                                                                            role="progressbar"
                                                                            aria-valuenow="{{ round(($dato->concentracion_finala * 100) / $dato->maquinas->reco_max, 0) }}"
                                                                            aria-valuemin="0" aria-valuemax="100">
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
                                                                                    class="fas fa-swatchbook mx-2"></i>{{ $dato->ph }}
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress text-bold"
                                                                        style="width: 80px">
                                                                        <div class="progress-bar bg-gradient-secondary"
                                                                            style="width: {{ round(($dato->ph * 100) / $dato->maquinas->rango_ph, 0) }}%"
                                                                            role="progressbar"
                                                                            aria-valuenow="{{ round(($dato->ph * 100) / $dato->maquinas->rango_ph, 0) }}"
                                                                            aria-valuemin="0" aria-valuemax="100">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-xs text-center">
                                                                <span
                                                                    class="badge badge-sm <?php echo $arr_aroma[$dato->aroma]; ?>">{{ $dato->aroma }}</span>
                                                            </td>
                                                            <td class="text-xs text-center">
                                                                <span
                                                                    class="badge badge-sm <?php echo $arr_espuma_aceite[$dato->aceites_entrampados]; ?>">{{ $dato->aceites_entrampados }}</span>
                                                            </td>
                                                            <td class="text-xs text-center">
                                                                <span
                                                                    class="badge bg-gradient-primary">{{ $dato->color }}</span>
                                                            </td>
                                                            <td class="text-xs text-center">
                                                                <span
                                                                    class="badge badge-sm <?php echo $arr_espuma_aceite[$dato->exceso_espuma]; ?>">{{ $dato->exceso_espuma }}</span>
                                                            </td>
                                                            <td>
                                                                <div
                                                                    style="width: 230px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">
                                                                    <span
                                                                        class="text-xs font-weight-bold">{{ $dato->comentarios }}</span>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark mx-7" data-bs-dismiss="modal"><i
                            class="fas fa-sign-in-alt"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal  Registros de Aceites-->
    <div wire:ignore.self class="modal fade" id="Aceites" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="Aceites" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
            <div class="modal-content">
                <div class="modal-body bg-gray-100">
                    <div class="container-fluid py-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-4">
                                    <div class="card-body px-0 pt-0 pb-2">
                                        <div class="row search-models mx-3 my-4">
                                            <div class="col-6 d-flex align-items-center">
                                                <h6 class="mb-0">
                                                    <i
                                                        class="fas fa-coins mx-2 text-primary text-gradient text-2xl"></i>Registros
                                                    de
                                                    Aceites agregados en <strong>"{{ $view_name_machine }}"</strong>
                                                </h6>

                                            </div>
                                            <div class="col-6 d-flex align-items-center text-end">
                                                <div class="input-group mx-5 w-60">
                                                    <span class="input-group-text text-body"><i class="fas fa-search"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control"
                                                        placeholder="Type here...">
                                                </div>
                                                <a class="btn bg-gradient-danger mb-0 "><i
                                                        class="far fa-file-pdf"></i>
                                                    PDF</a>

                                            </div>
                                        </div>
                                        <div class="search-models2">
                                            <h6 class="mx-3 mt-2">
                                                <i
                                                    class="fas fa-coins mx-2 text-primary text-gradient text-2xl"></i>Registros
                                                de
                                                Aceites agregados en <strong>"{{ $view_name_machine }}"</strong>
                                            </h6>

                                            <div class="container">
                                                <div class="row">
                                                  <div class="col-8">
                                                    <div class="input-group mx-0">
                                                        <span class="input-group-text text-body"><i class="fas fa-search"
                                                                aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="Type here...">
                                                    </div>
                                                  </div>
                                                  <div class="col-4">
                                                    <a class="btn bg-gradient-danger mb-0 "><i class="far fa-file-pdf"></i>
                                                        PDF</a>
                                                  </div>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="table-responsive mt-3 mx-3">
                                            <table class="table align-items-center justify-content-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Aspecto</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            Color</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            Aroma</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            Ltrs. Recarga</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            Fecha Registro</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($aceites as $aceite)
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex px-2">
                                                                    <i class="fas fa-tags mx-2"></i>
                                                                    <div class="my-auto">
                                                                        <h6 class="mb-0 text-sm">
                                                                            {{ $aceite->aspecto }}</h6>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td class="align-middle">
                                                                <div class="d-flex">
                                                                    <div class="<?php echo $arr_color[$aceite->color]; ?> mx-1"></div>
                                                                    <p class="text-xs font-weight-bold mb-0">
                                                                        {{ $aceite->color }}</p>
                                                                </div>
                                                            </td>
                                                            <td class="align-middle text-xs">
                                                                <span
                                                                    class="badge badge-sm <?php echo $aroma_aceite[$aceite->aroma]; ?>">{{ $aceite->aroma }}</span>
                                                            </td>
                                                            <td>
                                                                <div class="progress-wrapper mx-auto">
                                                                    <div class="progress-info">
                                                                        <div class="progress-percentage">
                                                                            <span class="text-xs font-weight-bold">
                                                                                <i
                                                                                    class="fas fa-prescription-bottle mx-2"></i></i>{{ $aceite->litros_recarga }}
                                                                                ltrs.</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress text-bold">
                                                                        <div class="progress-bar bg-gradient-secondary"
                                                                            style="width: {{ ($aceite->litros_recarga * 100) / $aceite->maquinas->capacidad_tanque }}%"
                                                                            role="progressbar"
                                                                            aria-valuenow="{{ ($aceite->litros_recarga * 100) / $aceite->maquinas->capacidad_tanque }}"
                                                                            aria-valuemin="0" aria-valuemax="100">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="align-middle ">
                                                                <span class="text-secondary text-xs font-weight-bold">
                                                                    {{ \Carbon\Carbon::parse($aceite->created_at)->formatLocalized('%Y/%m/%d') }}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark mx-7" data-bs-dismiss="modal"><i
                            class="fas fa-sign-in-alt"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal Registros de Aceites  -->


    <!-- Modal  Registros Grasas-->
    <div wire:ignore.self class="modal fade" id="Grasas" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="Grasas" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
            <div class="modal-content">
                <div class="modal-body bg-gray-100">
                    <div class="container-fluid py-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-4">
                                    <div class="card-body px-0 pt-0 pb-2">
                                        <div class="row search-models mx-3 my-4">
                                            <div class="col-6 d-flex align-items-center">
                                                <h6 class="mb-0">
                                                    <i
                                                        class="fas fa-coins mx-2 text-primary text-gradient text-2xl"></i>Registros
                                                    de
                                                    Grasas agregadas en <strong>"{{ $view_name_machine }}"</strong>
                                                </h6>

                                            </div>
                                            <div class="col-6 d-flex align-items-center text-end">
                                                <div class="input-group mx-5 w-60">
                                                    <span class="input-group-text text-body"><i class="fas fa-search"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control"
                                                        placeholder="Type here...">
                                                </div>
                                                <a class="btn bg-gradient-danger mb-0 "><i
                                                        class="far fa-file-pdf"></i>
                                                    PDF</a>

                                            </div>
                                        </div>
                                        <div class="search-models2">
                                            <h6 class="mx-3 mt-2">
                                                <i
                                                class="fas fa-coins mx-2 text-primary text-gradient text-2xl"></i>Registros
                                            de
                                            Grasas agregadas en <strong>"{{ $view_name_machine }}"</strong>
                                            </h6>

                                            <div class="container">
                                                <div class="row">
                                                  <div class="col-8">
                                                    <div class="input-group mx-0">
                                                        <span class="input-group-text text-body"><i class="fas fa-search"
                                                                aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="Type here...">
                                                    </div>
                                                  </div>
                                                  <div class="col-4">
                                                    <a class="btn bg-gradient-danger mb-0 "><i class="far fa-file-pdf"></i>
                                                        PDF</a>
                                                  </div>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="table-responsive mt-3 mx-3">
                                            <table class="table align-items-center justify-content-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Litros de Recarga</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            Cantidad</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                                            Fecha Registro</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($grasas as $grasa)
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex px-2">
                                                                    <i class="fas fa-fill-drip mx-2"></i>
                                                                    <div class="my-auto">
                                                                        <h6 class="mb-0 text-sm">
                                                                            {{ $grasa->litros_recarga }} ltrs.</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="progress-wrapper mx-auto">
                                                                    <div class="progress text-bold">
                                                                        <div class="progress-bar bg-gradient-warning"
                                                                            style="width: {{ ($grasa->litros_recarga * 100) / 50 }}%"
                                                                            role="progressbar"
                                                                            aria-valuenow="{{ ($grasa->litros_recarga * 100) / 50 }}"
                                                                            aria-valuemin="0" aria-valuemax="100">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-center ">
                                                                <span class="text-secondary text-xs  font-weight-bold">
                                                                    {{ \Carbon\Carbon::parse($grasa->created_at)->formatLocalized('%Y/%m/%d') }}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark mx-7" data-bs-dismiss="modal"><i
                            class="fas fa-sign-in-alt"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal Registros Grasas -->


    <!-- Modal  Registros Mantenimientos-->
    <div wire:ignore.self class="modal fade" id="Mantenimientos" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="Mantenimientos" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
            <div class="modal-content">
                <div class="modal-body bg-gray-100">

                    <div class="container-fluid py-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-4">
                                    <div class="card-body px-0 pt-0 pb-2">
                                        <div class="row search-models mx-3 my-4">
                                            <div class="col-6 d-flex align-items-center">
                                                <h6 class="mb-0">
                                                    <i
                                                        class="fas fa-coins mx-2 text-primary text-gradient text-2xl"></i>Registros
                                                    de
                                                    Mantenimientos de la
                                                    maquina<strong>"{{ $view_name_machine }}"</strong>
                                                </h6>

                                            </div>
                                            <div class="col-6 d-flex align-items-center text-end">
                                                <div class="input-group mx-5 w-60">
                                                    <span class="input-group-text text-body"><i class="fas fa-search"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control"
                                                        placeholder="Type here...">
                                                </div>
                                                <a class="btn bg-gradient-danger mb-0 "><i
                                                        class="far fa-file-pdf"></i>
                                                    PDF</a>

                                            </div>
                                        </div>
                                        <div class="search-models2">
                                            <h6 class="mx-3 mt-2">
                                                <i
                                                class="fas fa-coins mx-2 text-primary text-gradient text-2xl"></i>Registros
                                            de
                                            Mantenimientos de la
                                            maquina<strong>"{{ $view_name_machine }}"</strong>
                                            </h6>

                                            <div class="container">
                                                <div class="row">
                                                  <div class="col-8">
                                                    <div class="input-group mx-0">
                                                        <span class="input-group-text text-body"><i class="fas fa-search"
                                                                aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="Type here...">
                                                    </div>
                                                  </div>
                                                  <div class="col-4">
                                                    <a class="btn bg-gradient-danger mb-0 "><i class="far fa-file-pdf"></i>
                                                        PDF</a>
                                                  </div>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="table-responsive mt-3 mx-3">
                                            <table class="table align-items-center justify-content-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Tipo</th>

                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">
                                                            Recarga Agua</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">
                                                            Recarga Con.</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">
                                                            Observaciones</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ">
                                                            Fecha Registro</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($mantenimientos as $mantenimiento)
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex px-2">
                                                                    <i class="<?php echo $mante_icono[$mantenimiento->tipo]; ?> mx-2"></i>
                                                                    <div class="my-auto">
                                                                        <h6 class="mb-0 text-sm">
                                                                            {{ $mantenimiento->tipo }}</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="progress-wrapper mx-auto">
                                                                    <div class="progress-info">
                                                                        <div class="progress-percentage">
                                                                            <span class="text-xs font-weight-bold">
                                                                                <i
                                                                                    class="fas fa-fill mx-2"></i>{{ $mantenimiento->litros_recarga_agua }}
                                                                                ltrs.</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress text-bold">
                                                                        <div class="progress-bar bg-gradient-primary"
                                                                            style="width: {{ ($mantenimiento->litros_recarga_agua * 100) / $mantenimiento->maquinas->capacidad_tanque }}%"
                                                                            role="progressbar"
                                                                            aria-valuenow="{{ ($mantenimiento->litros_recarga_agua * 100) / $mantenimiento->maquinas->capacidad_tanque }}"
                                                                            aria-valuemin="0" aria-valuemax="100">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="progress-wrapper mx-auto">
                                                                    <div class="progress-info">
                                                                        <div class="progress-percentage">
                                                                            <span class="text-xs font-weight-bold">
                                                                                <i
                                                                                    class="fas fa-prescription-bottle mx-2"></i></i>{{ $mantenimiento->litros_recarga_con }}
                                                                                brix.</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress text-bold">
                                                                        <div class="progress-bar bg-gradient-secondary"
                                                                            style="width: {{ ($mantenimiento->litros_recarga_con * 100) / 30 }}%"
                                                                            role="progressbar"
                                                                            aria-valuenow="{{ ($mantenimiento->litros_recarga_con * 100) / 30 }}"
                                                                            aria-valuemin="0" aria-valuemax="100">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div
                                                                    style="width: 150px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">
                                                                    <span
                                                                        class="text-xs font-weight-bold">{{ $mantenimiento->observaciones }}</span>
                                                                </div>
                                                            </td>
                                                            <td class="text-center ">
                                                                <span class="text-secondary text-xs  font-weight-bold">
                                                                    {{ \Carbon\Carbon::parse($grasa->created_at)->formatLocalized('%Y/%m/%d') }}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark mx-7" data-bs-dismiss="modal"><i
                            class="fas fa-sign-in-alt"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal Registros Mantenimientos -->


</div>
