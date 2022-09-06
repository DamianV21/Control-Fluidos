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

            <div class="row">
                @foreach ($plantas as $planta)
                    <div class="col-md-3">

                        <br>
                        <div class="card card-custom bg-white border-white border-0">
                            <div class="card-custom-img"
                                style="background-image: url({{ asset('img/bg1.jpg') }});"></div>
                            <div class="card-custom-avatar">
                                <img class="img-fluid" src="{{ asset('img/company_default.png') }}"
                                    alt="Avatar" />
                            </div>
                            <div class="card-body text-sm" style="overflow-y: auto">

                                <h4 class="card-title"><strong>Información de Planta:</strong> </h4>
                                <p class="card-text"> <strong>Planta:</strong> {{ $planta->nombre }}</p>
                                <p class="card-text"><strong>Ciudad:</strong> {{ $planta->ciudad }}</p>
                            </div>
                            <div class="card-footer text-sm"
                                style="background: inherit; border-color: inherit;">

                                <a class="btn text-white btn-sm btn-block" style="background-color: #5e80b7" data-toggle="modal"
                                wire:click="OpenViewModal({{ $planta->id }})">Ver más información</a>

                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>
    </div>







    <!-- Modal -->
    <div wire_ignore.self class="modal fade" id="InfoPlantaData" tabindex="-1" role="dialog"
        aria-labelledby="PlantaData" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Información de Planta</h5>
                    <button type="button" class="close" data-dismiss="modal" wire:click="CloseViewModal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Nombre:</th>
                                <td>{{ $view_planta_nombre }}</td>
                            </tr>
                            <tr>
                                <th>Direccion:</th>
                                <td>{{ $view_planta_direc }}</td>
                            </tr>
                            <tr>
                                <th>Ciudad:</th>
                                <td>{{ $view_planta_ciudad }}</td>
                            </tr>
                            <tr>
                                <th>Estado:</th>
                                <td>{{ $view_planta_estado }}</td>
                            </tr>
                            <tr>
                                <th>C.P:</th>
                                <td>{{ $view_planta_cp }}</td>
                            </tr>
                            <tr>
                                <th>Telefono:</th>
                                <td>{{ $view_planta_tel }}</td>
                            </tr>
                            <tr>
                                <th>Contaco:</th>
                                <td>{{ $view_planta_con }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--End Modal -->


</div>

<link rel="stylesheet" href="{{ asset('css/registros.css') }}">


<script>
    window.addEventListener('show-modal', event => {
        $('#InfoPlantaData').modal('show');
    });
</script>
