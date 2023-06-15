<div>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Acerca de todas las Áreas</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Área</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Planta</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Responsable</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            IVA</th>

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Registros</th>

                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($areas as $area)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <i class="fas fa-project-diagram me-3"></i>
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $area->nombre }}</h6>

                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ $area->empresas->nombre ?? 'No existe' }}</p>
                                                <p class="text-xs text-secondary mb-0">
                                                    {{ $area->plantas->nombre ?? 'No existe' }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ $area->usuarios->name ?? 'No existe' }}</p>

                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ $area->ivas->name ?? 'No existe' }}</p>
                                            </td>


                                            <td class="align-middle text-center text-sm">

                                                <button type="button" wire:click="OpenViewArea({{ $area->id }})"
                                                    class="btn btn-tumblr btn-icon-only"
                                                    data-bs-toggle="modal" data-bs-target="#Registros">
                                                    <i class="fas fa-folder-open"></i>
                                                </button>

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


    <!-- Modal  Registros Calidad Agua-->
    <div wire:ignore.self class="modal fade" id="Registros" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"> <i class="fas fa-folder-open"></i>
                        Registros de Calidad de Agua "{{ $view_name_area }}"</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-body px-0 pt-0 pb-2">
                                    <div class="row search-models mx-3 my-4">
                                        <div class="col-6 d-flex align-items-center">
                                            <h6>Información acerca de la Calidad del Agua</h6>
                                        </div>
                                        <div class="col-6 d-flex align-items-center text-end">
                                            <div class="input-group mx-5 w-60">
                                                <span class="input-group-text text-body"><i class="fas fa-search"
                                                        aria-hidden="true"></i></span>
                                                <input type="text" class="form-control"
                                                    placeholder="Type here...">
                                            </div>
                                            <a class="btn bg-gradient-danger mb-0 "><i class="far fa-file-pdf"></i>
                                                PDF</a>
                                        </div>
                                    </div>
                                    <div class="search-models2">
                                        <h6>Información acerca de la Calidad del Agua</h6>
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
                                    <div class="table-responsive p-0">
                                        <table class="table align-items-center justify-content-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Origen de Agua</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                                        Dureza</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                                        pH</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                                        Conductividad</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                                        Cloruros</th>
                                                    <th
                                                        class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                                        Sulfatos</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Fecha</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($calidades as $calidad)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-0">
                                                                <div>
                                                                    <i class="fas fa-prescription-bottle me-2"></i>

                                                                </div>
                                                                <div class="my-auto">
                                                                    <h6 class="mb-0 text-sm">{{ $calidad->origen_agua }}
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <div
                                                                class="d-flex align-items-center justify-content-center">
                                                                <span
                                                                    class="me-2 text-xs font-weight-bold">{{ $calidad->dureza }}</span>
                                                                <div>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-gradient-success"
                                                                            role="progressbar"
                                                                            aria-valuenow="{{ $calidad->dureza }}"
                                                                            aria-valuemin="0" aria-valuemax="100"
                                                                            style="width: {{ $calidad->dureza }}%;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <div
                                                                class="d-flex align-items-center justify-content-center">
                                                                <span
                                                                    class="me-2 text-xs font-weight-bold">{{ $calidad->ph }}</span>
                                                                <div>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-gradient-secondary"
                                                                            role="progressbar"
                                                                            aria-valuenow="{{ $calidad->ph }}"
                                                                            aria-valuemin="0" aria-valuemax="100"
                                                                            style="width: {{ $calidad->ph }}%;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <div
                                                                class="d-flex align-items-center justify-content-center">
                                                                <span
                                                                    class="me-2 text-xs font-weight-bold">{{ $calidad->conductividad }}</span>
                                                                <div>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-gradient-warning"
                                                                            role="progressbar"
                                                                            aria-valuenow="{{ $calidad->conductividad }}"
                                                                            aria-valuemin="0" aria-valuemax="100"
                                                                            style="width: {{ $calidad->conductividad }}%;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <div
                                                                class="d-flex align-items-center justify-content-center">
                                                                <span
                                                                    class="me-2 text-xs font-weight-bold">{{ $calidad->cloruros }}</span>
                                                                <div>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-gradient-info"
                                                                            role="progressbar"
                                                                            aria-valuenow="{{ $calidad->cloruros }}"
                                                                            aria-valuemin="0" aria-valuemax="100"
                                                                            style="width: {{ $calidad->cloruros }}%;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <div
                                                                class="d-flex align-items-center justify-content-center">
                                                                <span
                                                                    class="me-2 text-xs font-weight-bold">{{ $calidad->sulfatos }}</span>
                                                                <div>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-gradient-danger"
                                                                            role="progressbar"
                                                                            aria-valuenow="{{ $calidad->sulfatos }}"
                                                                            aria-valuemin="0" aria-valuemax="100"
                                                                            style="width: {{ $calidad->sulfatos }}%;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <span class="text-secondary text-xs font-weight-bold">
                                                                {{ \Carbon\Carbon::parse($calidad->created_at)->formatLocalized('%d/%m/%Y') }}</span>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark mx-6" data-bs-dismiss="modal"><i class="fas fa-sign-in-alt"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal Registros Calidad Agua -->

</div>
