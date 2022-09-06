<div>

    <!-- Ordenar-->
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="row text-sm">
                    <h1>Filtar por: </h1>
                    <div>
                        <div class="form-group text-sm">
                            <select wire:model="sort" class="form-control text-sm">
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
            <div class="row">
                @foreach ($lineas as $linea)
                    <div class="col-md-3">



                        <br>
                        <div class="card card-custom bg-white border-white border-0">
                            <div class="card-custom-img"
                                style="background-image: url({{ asset('img/bg1.jpg') }});"></div>
                            <div class="card-custom-avatar">
                                <img class="img-fluid" src="{{ asset('img/linea_default.png') }}"
                                    alt="Avatar" />
                            </div>
                            <div class="card-body text-sm" style="overflow-y: auto">

                                <h4 class="card-title"><strong>Información de Línea:</strong> </h4>
                                <p class="card-text"> <strong>Línea:</strong> {{ $linea->nombre }}</p>
                                <p class="card-text"><strong>Área:</strong> {{ $linea->areas->nombre }}</p>
                            </div>
                            <div class="card-footer text-sm"
                                style="background: inherit; border-color: inherit;">

                                <a class="btn text-white btn-sm btn-block" style="background-color: #5e80b7"
                                data-toggle="modal" wire:click="OpenViewModal({{ $linea->id }})">Ver mas
                                información</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="DataViewDetail" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
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
                                <td>{{ $view_line_nom }}</td>
                            </tr>
                            <tr>
                                <th>Empresa:</th>
                                <td>{{ $view_line_empre }}</td>
                            </tr>
                            <tr>
                                <th>Planta:</th>
                                <td>{{ $view_line_plan }}</td>
                            </tr>
                            <tr>
                                <th>Area:</th>
                                <td>{{ $view_line_area }}</td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>

<link rel="stylesheet" href="{{ asset('css/registros.css') }}">

<script>
    window.addEventListener('show-modal', event => {
        $('#DataViewDetail').modal('show');
    });
</script>
