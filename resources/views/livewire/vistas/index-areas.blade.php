<div>


    <!-- Ordenar-->

    <div class="container">
        <div class="row">
            <div class="col-md-auto text-sm">
                Filtrar por:
            </div>
            <div class="col-md-auto">

                <div class="btn-group-sm btn-group-toggle" wire:model="sort" data-toggle="buttons">
                    <label class="btn btn-primary">
                        <input type="radio" name="options" id="option2" value="za" autocomplete="off"> <i
                            class="fas fa-sort-alpha-down-alt"></i>
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="options" id="option3" value="az" autocomplete="off"> <i
                            class="fas fa-sort-alpha-down"></i>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <br>

    <!-- End Orden -->

    <div class="card shadow mb-4">
        <div class="card-body">

            @if (session()->has('message'))
                <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
                    {{ session('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="row">
                @foreach ($areas as $area)
                    <div class="col-md-3">


                        <br>
                        <div class="card card-custom bg-white border-white border-0">
                            <div class="card-custom-img" style="background-image: url({{ asset('img/fondo.png') }});">
                            </div>
                            <div class="card-custom-avatar">
                                <img class="img-fluid" src="{{ asset('img/area_default.png') }}" alt="Avatar" />
                            </div>
                            <div class="card-body text-sm" style="overflow-y: auto">

                                <h4 class="card-title"><strong>Información del Área:</strong> </h4>
                                <p class="card-text"> <strong>Área:</strong> {{ $area->nombre }}</p>
                                <p class="card-text"><strong>Planta:</strong> {{ $area->plantas->nombre }}</p>
                            </div>
                            <div class="card-footer text-sm" style="background: inherit; border-color: inherit;">

                                <a class="btn text-white btn-sm btn-block" style="background-color: #5e80b7"
                                    data-toggle="modal" wire:click="OpenViewModal({{ $area->id }})">Ver más
                                    información </a>

                                <a class="btn text-white btn-sm btn-block" style="background-color: #5e80b7"
                                    data-toggle="modal" wire:click="OpenViewArea({{ $area->id }})">Registros</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>



    <!-- Modal Calidad Agua -->
    <div wire:ignore.self class="modal fade" data-backdrop="static" id="AddCalidadAgua" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><label style="color: #5e80b7"> <i class="fas fa-database"></i></label>
                        <span class="span-bold"> Calidad de Agua</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">


                    <div class="form-group row">
                        <label for="origen_agua" class="col-3">Origen de Agua</label>
                        <div class="col-9">
                            <select class="form-control" id="origen_agua" wire:model="origen_agua">
                                <option selected>Seleccione un elemento</option>
                                <option value="Bien">Bien</option>
                                <option value="Ciudad">Ciudad</option>
                                <option value="Desionizada">Desionizada</option>
                                <option value="Osmosis inversa">Osmosis inversa</option>
                                <option value="Suavizada">Suavizada</option>
                                <option value="pipa">Pipa</option>
                                <option value="Pozo">Pozo</option>
                            </select>
                            @error('origen_agua')
                                <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dureza" class="col-3">Dureza</label>
                        <div class="col-9">
                            <input type="number" step="0.01" id="dureza" class="form-control"
                                wire:model="dureza">
                            @error('dureza')
                                <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ph" class="col-3">pH</label>
                        <div class="col-9">
                            <input type="number" step="0.01" id="ph" class="form-control"
                                wire:model="ph">
                            @error('ph')
                                <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="conductividad" class="col-3">Conductividad</label>
                        <div class="col-9">
                            <input type="number" step="0.01" id="conductividad" class="form-control"
                                wire:model="conductividad">
                            @error('conductividad')
                                <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cloruros" class="col-3">Cloruros</label>
                        <div class="col-9">
                            <input type="number" step="0.01" id="cloruros" class="form-control"
                                wire:model="cloruros">
                            @error('cloruros')
                                <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sulfatos" class="col-3">Sulfatos</label>
                        <div class="col-9">
                            <input type="number" step="0.01" id="sulfatos" class="form-control"
                                wire:model="sulfatos">
                            @error('sulfatos')
                                <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-12">
                            <button wire:click="storeAreaData"
                                class="btn btn-success btn-lg btn-block">Registar</button>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->



    <!-- Modal Informacion -->
    <div wire_ignore.self class="modal fade" id="InfoAreaData" tabindex="-1" role="dialog"
        aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><label style="color: #5e80b7"> <i class="fas fa-database"></i></label>
                        <span class="span-bold"> Datos de la Área</span>
                    </h5>
                    <button type="button" class="close" wire:click="CloseViewModal" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="right">
                        <div class="right-container">
                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Nombre:</span>

                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_area_nom }}" />
                                    </div>

                                    <i class="fas fa-spell-check"></i>
                                </div>
                            </section>


                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Empresa:</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_area_empresa }}" />
                                    </div>
                                    <i class="fas fa-building"></i>
                                </div>
                            </section>

                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Planta:</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_area_planta }}" />
                                    </div>
                                    <i class="fas fa-industry"></i>
                                </div>
                            </section>

                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Técnico:</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_area_user }}" />
                                    </div>
                                    <i class="fas fa-user-cog"></i>
                                </div>
                            </section>



                        </div>
                    </div>
                    <!-- right-end -->
                </div>
            </div>
        </div>
    </div>




    <!-- Modal Registros-->
    <div class="modal fade" id="Registros" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><label style="color: #5e80b7"> <i class="fas fa-database"></i></label>
                        <span class="span-bold"> Datos de Calidad del Agua</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($calidades as $coll)

                        <div class="card shadow mb-4 border-left-primary">
                            <!-- Card Header - Accordion -->
                            <a href="#num{{ $coll->id }}" class="d-block card-header py-3" data-toggle="collapse"
                                role="button" aria-expanded="true" aria-controls="num{{ $coll->id }}">
                                <h6 style="font-size: 14px;" class="m-0 font-weight-bold text-primary">
                                    <label style="color: #5e80b7"><i class="fas fa-clipboard-list"></i></label> Fecha
                                    de Registro:
                                    <span class="span-bold2"> {{ \Carbon\Carbon::parse($coll->created_at)->formatLocalized('%d %B %Y %I:%M %p')  }}</span>
                                </h6>
                            </a>
                            <!-- Card Content - Collapse -->
                            <div class="collapse" id="num{{ $coll->id }}">
                                <div class="card-body">
                                    <div class="right">
                                        <div class="right-container">
                                            <section class="right-footer">
                                                <div class="right-footer-container">
                                                    <span class="span-label">Origen de Agua:</span>

                                                    <div class="inp">
                                                        <input style="border-radius: 10px; width:auto;" disabled
                                                            type="text" placeholder="{{ $coll->origen_agua }}" />
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="right-footer">
                                                <div class="right-footer-container">
                                                    <span class="span-label">Dureza:</span>
                                                    <div class="inp">
                                                        <input style="border-radius: 10px; width:auto;" disabled
                                                            type="text" placeholder="{{ $coll->dureza }}" />
                                                    </div>

                                                </div>
                                            </section>
                                            <section class="right-footer">
                                                <div class="right-footer-container">
                                                    <span class="span-label">pH:</span>
                                                    <div class="inp">
                                                        <input style="border-radius: 10px; width:auto;" disabled
                                                            type="text" placeholder="{{ $coll->ph }}" />
                                                    </div>

                                                </div>
                                            </section>
                                            <section class="right-footer">
                                                <div class="right-footer-container">
                                                    <span class="span-label">Conductividad:</span>
                                                    <div class="inp">
                                                        <input style="border-radius: 10px; width:auto;" disabled
                                                            type="text"
                                                            placeholder="{{ $coll->conductividad }}" />
                                                    </div>

                                                </div>
                                            </section>
                                            <section class="right-footer">
                                                <div class="right-footer-container">
                                                    <span class="span-label">Cloruros:</span>
                                                    <div class="inp">
                                                        <input style="border-radius: 10px; width:auto;" disabled
                                                            type="text" placeholder="{{ $coll->cloruros }}" />
                                                    </div>

                                                </div>
                                            </section>
                                            <section class="right-footer">
                                                <div class="right-footer-container">
                                                    <span class="span-label">Sulfatos:</span>
                                                    <div class="inp">
                                                        <input style="border-radius: 10px; width:auto;" disabled
                                                            type="text" placeholder="{{ $coll->sulfatos }}" />
                                                    </div>

                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <!-- right-end -->
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>


</div>


<link rel="stylesheet" href="{{ asset('css/registros.css') }}">


<script>
    window.addEventListener('close-modal', event => {
        $('#AddCalidadAgua').modal('hide');
    });
</script>

<script>
    window.addEventListener('show-modal', event => {
        $('#InfoAreaData').modal('show');
    });

    window.addEventListener('show-registros', event => {
        $('#Registros').modal('show');
    });
</script>
