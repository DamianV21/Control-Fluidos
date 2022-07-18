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


    <div class="row">
        @foreach ($lineas as $linea)
            <div class="col-md-3">
                <div class="card" style="width: 14rem;">
                    <br>
                    <center><img class="card-img-top" src="{{ asset('img/linea_default.png') }}" style="width: 150px">
                    </center>
                    <div class="card-body">
                        <p><strong>Información de Linea:</strong></p>
                        <h5 class="card-title"> <strong>Linea:</strong> {{ $linea->nombre }}</h5>
                        <p class="card-text"><strong>Area:</strong>{{ $linea->areas->nombre }}</p>
                        <br>
                        <a class="btn text-white btn-sm btn-block" style="background-color: #5e80b7" data-toggle="modal"
                            wire:click="OpenViewModal({{ $linea->id }})">Ver mas información</a>


                    </div>
                </div>
            </div>
        @endforeach
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



<script>
    window.addEventListener('show-modal', event => {
        $('#DataViewDetail').modal('show');
    });
</script>
