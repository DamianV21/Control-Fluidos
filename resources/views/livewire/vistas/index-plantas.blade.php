<div>
    <!-- Ordenar-->
    <div class="card">
        <div class="card-header">
            <div class="row">
                <label class="col-1.5" for="">Ordenar por:</label>
                <div class="col-2">

                    <div class="form-group">
                        <select wire:model="sort" class="form-control">
                            <option selected>Ordenar por</option>
                            <option value="az">A-Z</option>
                            <option value="za">Z-A</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Orden -->

    <div class="col-sm-12">
        <div class="row">

            @foreach ($plantas as $planta)
                <div class="col-md-3">
                    <div class="card" style="width: 14rem;">
                        <br>
                        <center><img class="card-img-top" src="{{ asset('img/company_default.png') }}"
                                style="width: 150px"></center>
                        <div class="card-body">
                            <p><strong>Información de Planta:</strong></p>
                            <p class="card-text"> <strong>Planta:</strong> {{ $planta->nombre }}</p>
                            <p class="card-text"><strong>Ciudad:</strong> {{ $planta->ciudad }}</p>

                            <a class="btn text-white btn-sm btn-block" style="background-color: #5e80b7" data-toggle="modal"
                                wire:click="OpenViewModal({{ $planta->id }})">Ver más información</a>


                        </div>
                    </div>
                </div>
            @endforeach
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
</div>
<!--End Modal -->


</div>




    <script>
        window.addEventListener('show-modal', event => {
            $('#InfoPlantaData').modal('show');
        });
    </script>

