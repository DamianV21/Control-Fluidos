<div>


    <!-- Ordenar-->

    <div class="container text-center">
        <div class="row">
          <div class="col">
            <div class="row text-sm">
                <h1 >Filtar por: </h1>
                <div>
                    <div class="form-group text-sm">
                        <select  wire:model="sort" class="form-control text-sm">
                            <option selected></option>
                            <option value="az">A-Z</option>
                            <option value="za">Z-A</option>
                        </select>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>

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
                                    data-toggle="modal" wire:click="OpenViewModal({{ $area->id }})">Ver mas
                                    información</a>

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
                    <h5 class="modal-title" id="exampleModalLongTitle">Calidad de Agua</h5>
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
                            <input type="number" step="0.01" id="ph" class="form-control" wire:model="ph">
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
                    <h5 class="modal-title">Informacion Area</h5>
                    <button type="button" class="close" wire:click="CloseViewModal" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Nombre:</th>
                                <td>{{ $view_area_nom }}</td>
                            </tr>
                            <tr>
                                <th>Empresa:</th>
                                <td>{{ $view_area_empresa }}</td>
                            </tr>
                            <tr>
                                <th>Planta:</th>
                                <td>{{ $view_area_planta }}</td>
                            </tr>
                            <tr>
                                <th>Usuario asignado:</th>
                                <td>{{ $view_area_user }}</td>
                            </tr>

                        </tbody>
                    </table>
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
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($calidades as $coll)
                        <table class="table table-bordered">
                            <label><strong>Fecha registrada: </strong> {{ $coll->created_at }}</label>
                            <tbody>
                                <tr>
                                    <th>Origen de Agua:</th>
                                    <td>{{ $coll->origen_agua }}</td>
                                </tr>
                                <tr>
                                    <th>Dureza:</th>
                                    <td>{{ $coll->dureza }}</td>
                                </tr>
                                <tr>
                                    <th>pH:</th>
                                    <td>{{ $coll->ph }}</td>
                                </tr>
                                <tr>
                                    <th>Conductividad:</th>
                                    <td>{{ $coll->conductividad }}</td>
                                </tr>
                                <tr>
                                    <th>Cloruros:</th>
                                    <td>{{ $coll->cloruros }}</td>
                                </tr>
                                <tr>
                                    <th>Sulfatos:</th>
                                    <td>{{ $coll->sulfatos }}</td>
                                </tr>


                            </tbody>

                        </table>
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
