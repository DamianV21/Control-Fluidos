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
        @foreach ($maquinas as $maquina)
            <div class="col-md-3">
                <div class="card" style="width: 14rem;">
                    <br>
                    <center><img class="card-img-top" src="{{ asset('img/machine_default.png') }}"
                            style="width: 150px"></center>
                    <div class="card-body">
                        <p><strong>Información de maquina:</strong></p>
                        <h5 class="card-title"><strong>Id</strong>{{ $maquina->ids }}</h5>
                        <p class="card-text"><strong>Marca:</strong>{{ $maquina->marca }}</p>
                        <p class="card-text"><strong>Tipo:</strong>{{ $maquina->tipo }}</p>


                        <a class="btn text-white btn-sm btn-block" style="background-color: #5e80b7" data-toggle="modal"
                            wire:click="OpenViewModal({{ $maquina->id }})">Ver mas información</a>
                        <a class="btn  text-white btn-primary btn-sm btn-block" style="background-color: #5e80b7"
                            wire:click="OpenViewRefrigerantes({{ $maquina->id }})">Registros Refrigerante</a>
                        <a class="btn  text-white btn-primary btn-sm btn-block" style="background-color: #5e80b7"
                            wire:click="OpenViewAceites({{ $maquina->id }})">Registros Aceites</a>
                        <a class="btn  text-white btn-primary btn-sm btn-block" style="background-color: #5e80b7"
                            wire:click="OpenViewGrasas({{ $maquina->id }})">Registros Grasas</a>
                        <a class="btn  text-white btn-primary btn-sm btn-block" style="background-color: #5e80b7"
                            wire:click="OpenViewMante({{ $maquina->id }})">Mantenimientos</a>


                    </div>
                </div>
            </div>
        @endforeach
    </div>




    <!-- Modal Informacion-->
    <div class="modal fade" id="MaquinaInfo" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> <strong>Informacion de Maquina</strong> </h5>
                    <button type="button" class="close" wire:click="CloseViewModa" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <h1 style="text-align: center"><strong>Identificador de Maquina: </strong> {{ $view_maq_id }}
                        </h1>
                        <br>
                        <tbody>

                            <tr>
                                <th>Marca:</th>
                                <td>{{ $view_maq_mar }}</td>
                            </tr>
                            <tr>
                                <th>Tipo de maquina:</th>
                                <td>{{ $view_maq_tipo }}</td>
                            </tr>
                            <tr>
                                <th>Aceite o grasa de guias:</th>
                                <td>{{ $view_maq_ac }}</td>
                            </tr>
                            <tr>
                                <th>Aceite hidraulico:</th>
                                <td>{{ $view_maq_hi }}</td>
                            </tr>
                            <tr>
                                <th>Refrigerante o aceite directo:</th>
                                <td>{{ $view_maq_ref }}</td>
                            </tr>
                            <tr>
                                <th>Capacidad tanque:</th>
                                <td>{{ $view_tanque_maq }}</td>
                            </tr>
                            <tr>
                                <th>Recomendación mínima:</th>
                                <td>{{ $view_maq_min }}</td>
                            </tr>
                            <tr>
                                <th>Recomendación máxima:</th>
                                <td>{{ $view_maq_max }}</td>
                            </tr>
                            <tr>
                                <th>Factor de refractor:</th>
                                <td>{{ $view_maq_fac }}</td>
                            </tr>
                            <tr>
                                <th>Rango de PH:</th>
                                <td>{{ $view_maq_ph }}</td>
                            </tr>
                            <tr>
                                <th>Carga inicial:</th>
                                <td>{{ $view_maq_ini }}</td>
                            </tr>
                            <tr>
                                <th>Mantenimiento preventivo (en días):</th>
                                <td>{{ $view_maq_man }}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Informacion-->


    <!-- Modal Refrigerantes-->
    <div class="modal fade" id="Refrigerantes" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="text-align: center" class="modal-title"><strong>Informacion de Refrigerantes</strong>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($refrigerantes as $refri)
                        <table class="table table-bordered">
                            <h1 style="text-align: center"><strong>Fecha registrada: </strong> {{ $refri->created_at }}
                            </h1>
                            <tbody>
                                <tr>
                                    <th>Concentración inicial en grados Brix %:</th>
                                    <td>{{ $refri->concentracion_inicial }}</td>
                                </tr>
                                <tr>
                                    <th>Litros de recarga:</th>
                                    <td>{{ $refri->litros_recarga }}</td>
                                </tr>
                                <tr>
                                    <th>Concentración de la recarga en grados Brix %:</th>
                                    <td>{{ $refri->concentracion_recarga }}</td>
                                </tr>
                                <tr>
                                    <th>Concentración final en grados Brix %:</th>
                                    <td>{{ $refri->concentracion_final }}</td>
                                </tr>
                                <tr>
                                    <th>pH:</th>
                                    <td>{{ $refri->ph }}</td>
                                </tr>
                                <tr>
                                    <th>Aroma:</th>
                                    <td>{{ $refri->aroma }}</td>
                                </tr>
                                <tr>
                                    <th>Aceites entrampados:</th>
                                    <td>{{ $refri->aceites_entrampados }}</td>
                                </tr>
                                <tr>
                                    <th>Color:</th>
                                    <td>{{ $refri->color }}</td>
                                </tr>
                                <tr>
                                    <th>Exceso de espuma :</th>
                                    <td>{{ $refri->exceso_espuma }}</td>
                                </tr>
                                <tr>
                                    <th>Comentarios del técnico:</th>
                                    <td>{{ $refri->comentarios }}</td>
                                </tr>


                            </tbody>

                        </table>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <!-- End Modal Refrigerantes-->


    <!-- Modal Aceites-->
    <div class="modal fade" id="AceitesData" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="text-align: center" class="modal-title"><strong>Información de Aceites</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($aceites as $aceite)
                        <table class="table table-bordered">
                            <h1 style="text-align: center"><strong>Fecha registrada: </strong>
                                {{ $aceite->created_at }}</h1>
                            <tbody>
                                <tr>
                                    <th>Aspecto:</th>
                                    <td>{{ $aceite->aspecto }}</td>
                                </tr>
                                <tr>
                                    <th>Color:</th>
                                    <td>{{ $aceite->color }}</td>
                                </tr>
                                <tr>
                                    <th>Aroma:</th>
                                    <td>{{ $aceite->aroma }}</td>
                                </tr>
                                <tr>
                                    <th>Litros de recarga:</th>
                                    <td>{{ $aceite->litros_recarga }}</td>
                                </tr>


                            </tbody>

                        </table>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <!-- End Modal Aceites-->

    <!-- Modal Grasas-->
    <div class="modal fade" id="GrasasData" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="text-align: center" class="modal-title"><strong>Información de Grasas</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($grasas as $grasa)
                        <table class="table table-bordered">
                            <h1 style="text-align: center"><strong>Fecha registrada: </strong>
                                {{ $grasa->created_at }}</h1>
                            <tbody>
                                <tr>
                                    <th>Litros de Recarga:</th>
                                    <td>{{ $grasa->litros_recarga }}</td>
                                </tr>

                            </tbody>

                        </table>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <!-- End Modal Grasas-->

    <!-- Modal Mantenimeintos-->
    <div class="modal fade" id="ManteData" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="text-align: center" class="modal-title"><strong>Información de Mantenimeintos</strong>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($mantenimientos as $mantenimiento)
                        <table class="table table-bordered">
                            <h1 style="text-align: center"><strong>Fecha registrada: </strong>
                                {{ $mantenimiento->created_at }}</h1>
                            <tbody>
                                <tr>
                                    <th>Aspecto:</th>
                                    <td>{{ $mantenimiento->tipo }}</td>
                                </tr>
                                <tr>
                                    <th>Color:</th>
                                    <td>{{ $mantenimiento->litros_recarga_agua }}</td>
                                </tr>
                                <tr>
                                    <th>Aroma:</th>
                                    <td>{{ $mantenimiento->litros_recarga_con }}</td>
                                </tr>
                                <tr>
                                    <th>Litros de recarga:</th>
                                    <td>{{ $mantenimiento->observaciones }}</td>
                                </tr>


                            </tbody>

                        </table>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <!-- End Modal Mantenimientos-->
</div>



<script>
    window.addEventListener('show-modal', event => {
        $('#MaquinaInfo').modal('show');
    });

    window.addEventListener('show-refrigerantes', event => {
        $('#Refrigerantes').modal('show');
    });

    window.addEventListener('show-aceites', event => {
        $('#AceitesData').modal('show');
    });

    window.addEventListener('show-grasas', event => {
        $('#GrasasData').modal('show');
    });

    window.addEventListener('show-mante', event => {
        $('#ManteData').modal('show');
    });
</script>
