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

            <div class="row">
                @foreach ($maquinas as $maquina)
                    <div class="col-md-3">

                        <br>
                        <div class="card card-custom bg-white border-white border-0">
                            <div class="card-custom-img" style="background-image: url({{ asset('img/fondo.png') }});">
                            </div>
                            <div class="card-custom-avatar">
                                <img class="img-fluid" src="{{ asset('img/machine_default.png') }}" alt="Avatar" />
                            </div>
                            <div class="card-body text-sm" style="overflow-y: auto">

                                <h4 class="card-title"><strong>Información de Maquina:</strong> </h4>
                                <p class="card-text"> <strong>Id:</strong> {{ $maquina->ids }}</p>
                                <p class="card-text"><strong>Marca:</strong> {{ $maquina->marca }}</p>
                                <p class="card-text"><strong>Tipo:</strong>{{ $maquina->tipo }}</p>
                            </div>
                            <div class="card-footer text-sm" style="background: inherit; border-color: inherit;">

                                <a class="btn text-white btn-sm btn-block" style="background-color: #5e80b7"
                                    data-toggle="modal" wire:click="OpenViewModal({{ $maquina->id }})">Ver mas
                                    información</a>
                                <a class="btn  text-white btn-primary btn-sm btn-block"
                                    style="background-color: #5e80b7"
                                    wire:click="OpenViewRefrigerantes({{ $maquina->id }})">Registros Refrigerante</a>
                                <a class="btn  text-white btn-primary btn-sm btn-block"
                                    style="background-color: #5e80b7"
                                    wire:click="OpenViewAceites({{ $maquina->id }})">Registros Aceites</a>
                                <a class="btn  text-white btn-primary btn-sm btn-block"
                                    style="background-color: #5e80b7"
                                    wire:click="OpenViewGrasas({{ $maquina->id }})">Registros Grasas</a>
                                <a class="btn  text-white btn-primary btn-sm btn-block"
                                    style="background-color: #5e80b7"
                                    wire:click="OpenViewMante({{ $maquina->id }})">Mantenimientos</a>

                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>
    </div>


    <!-- Modal Informacion-->
    <div class="modal fade" id="MaquinaInfo" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><label style="color: #5e80b7"> <i class="fas fa-database"></i></label>
                        <span class="span-bold"> Datos de la Maquina</span>
                    </h5>
                    <button type="button" class="close" wire:click="CloseViewModa" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="right">
                        <div class="right-container">
                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Maquina:</span>

                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{  $view_maq_id}}" />
                                    </div>

                                </div>
                            </section>
                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Marca:</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_maq_mar }}" />
                                    </div>

                                </div>
                            </section>

                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Tipo de maquina:</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_maq_tipo }}" />
                                    </div>

                                </div>
                            </section>

                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Aceite o grasa de guías:</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_maq_ac  }}" />
                                    </div>

                                </div>
                            </section>
                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Aceite hidráulico:</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_maq_hi  }}" />
                                    </div>

                                </div>
                            </section>
                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Refrigerante o aceite directo:</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_maq_ref }}" />
                                    </div>

                                </div>
                            </section>
                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Capacidad tanque:</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_tanque_maq }}" />
                                    </div>

                                </div>
                            </section>
                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Recomendación mínima:</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_maq_min }}" />
                                    </div>

                                </div>
                            </section>
                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Recomendación máxima:</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_maq_max }}" />
                                    </div>

                                </div>
                            </section>
                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Factor de refractor:</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_maq_fac }}" />
                                    </div>

                                </div>
                            </section>
                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Rango de PH:</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_maq_ph }}" />
                                    </div>

                                </div>
                            </section>
                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Carga inicial:</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_maq_ini }}" />
                                    </div>

                                </div>
                            </section>
                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Mantenimiento preventivo (en días):</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_maq_man }}" />
                                    </div>

                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- right-end -->


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
                    <h5 class="modal-title"><label style="color: #5e80b7"> <i class="fas fa-database"></i></label>
                        <span class="span-bold"> Datos de Refrigerante</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($refrigerantes as $refri)

                    <div class="card shadow mb-4 border-left-primary">
                        <!-- Card Header - Accordion -->
                        <a href="#num{{ $refri->id }}" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="num{{ $refri->id }}">
                            <h6 style="font-size: 14px;" class="m-0 font-weight-bold text-primary">
                                <label style="color: #5e80b7"><i class="fas fa-clipboard-list"></i></label> Fecha
                                de Registro:
                                <span class="span-bold2"> {{ \Carbon\Carbon::parse($refri->created_at)->formatLocalized('%d %B %Y %I:%M %p')  }}</span>
                            </h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse" id="num{{ $refri->id }}">
                            <div class="card-body">
                                <div class="right">
                                    <div class="right-container">
                                        <section class="right-footer">
                                            <div class="right-footer-container">
                                                <span class="span-label">Concentración inicial en grados Brix %:</span>

                                                <div class="inp">
                                                    <input style="border-radius: 10px; width:auto;" disabled
                                                        type="text" placeholder="{{ $refri->concentracion_inicial }}" />
                                                </div>
                                            </div>
                                        </section>
                                        <section class="right-footer">
                                            <div class="right-footer-container">
                                                <span class="span-label">Litros de recarga:</span>
                                                <div class="inp">
                                                    <input style="border-radius: 10px; width:auto;" disabled
                                                        type="text" placeholder="{{ $refri->litros_recarga }}" />
                                                </div>

                                            </div>
                                        </section>
                                        <section class="right-footer">
                                            <div class="right-footer-container">
                                                <span class="span-label">Concentración de la recarga en grados Brix %:</span>
                                                <div class="inp">
                                                    <input style="border-radius: 10px; width:auto;" disabled
                                                        type="text" placeholder="{{ $refri->concentracion_recarga }}" />
                                                </div>

                                            </div>
                                        </section>
                                        <section class="right-footer">
                                            <div class="right-footer-container">
                                                <span class="span-label">Concentración final en grados Brix %:</span>
                                                <div class="inp">
                                                    <input style="border-radius: 10px; width:auto;" disabled
                                                        type="text"
                                                        placeholder="{{ $refri->concentracion_final }}" />
                                                </div>

                                            </div>
                                        </section>
                                        <section class="right-footer">
                                            <div class="right-footer-container">
                                                <span class="span-label">pH:</span>
                                                <div class="inp">
                                                    <input style="border-radius: 10px; width:auto;" disabled
                                                        type="text" placeholder="{{ $refri->ph }}" />
                                                </div>

                                            </div>
                                        </section>
                                        <section class="right-footer">
                                            <div class="right-footer-container">
                                                <span class="span-label">Aroma:	</span>
                                                <div class="inp">
                                                    <input style="border-radius: 10px; width:auto;" disabled
                                                        type="text" placeholder="{{ $refri->aroma }}" />
                                                </div>
                                            </div>
                                        </section>
                                        <section class="right-footer">
                                            <div class="right-footer-container">
                                                <span class="span-label">Aceites entrampados:	</span>
                                                <div class="inp">
                                                    <input style="border-radius: 10px; width:auto;" disabled
                                                        type="text" placeholder="{{ $refri->aceites_entrampados  }}" />
                                                </div>
                                            </div>
                                        </section><section class="right-footer">
                                            <div class="right-footer-container">
                                                <span class="span-label">Color:		</span>
                                                <div class="inp">
                                                    <input style="border-radius: 10px; width:auto;" disabled
                                                        type="text" placeholder="{{ $refri->color}}" />
                                                </div>
                                            </div>
                                        </section><section class="right-footer">
                                            <div class="right-footer-container">
                                                <span class="span-label">Exceso de espuma :	</span>
                                                <div class="inp">
                                                    <input style="border-radius: 10px; width:auto;" disabled
                                                        type="text" placeholder="{{ $refri->exceso_espuma }}" />
                                                </div>
                                            </div>
                                        </section><section class="right-footer">
                                            <div class="right-footer-container">
                                                <span class="span-label">Comentarios del técnico:	</span>
                                                <div class="inp">
                                                    <textarea style="border-radius: 10px; width:auto;"
                                                    disabled  placeholder="{{ $refri->comentarios }}"></textarea>

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
    <!-- End Modal Refrigerantes-->


    <!-- Modal Aceites-->
    <div class="modal fade" id="AceitesData" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><label style="color: #5e80b7"> <i class="fas fa-database"></i></label>
                        <span class="span-bold"> Datos de Aceite</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($aceites as $aceite)

                    <div class="card shadow mb-4 border-left-primary">
                        <!-- Card Header - Accordion -->
                        <a href="#num{{ $aceite->id }}" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="num{{ $aceite->id }}">
                            <h6 style="font-size: 14px;" class="m-0 font-weight-bold text-primary">
                                <label style="color: #5e80b7"><i class="fas fa-clipboard-list"></i></label> Fecha
                                de Registro:
                                <span class="span-bold2"> {{ \Carbon\Carbon::parse($aceite->created_at)->formatLocalized('%d %B %Y %I:%M %p')  }}</span>
                            </h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse" id="num{{ $aceite->id }}">
                            <div class="card-body">
                                <div class="right">
                                    <div class="right-container">
                                        <section class="right-footer">
                                            <div class="right-footer-container">
                                                <span class="span-label">Aspecto:</span>

                                                <div class="inp">
                                                    <input style="border-radius: 10px; width:auto;" disabled
                                                        type="text" placeholder="{{ $aceite->aspecto }}" />
                                                </div>
                                            </div>
                                        </section>
                                        <section class="right-footer">
                                            <div class="right-footer-container">
                                                <span class="span-label">Color:</span>
                                                <div class="inp">
                                                    <input style="border-radius: 10px; width:auto;" disabled
                                                        type="text" placeholder="{{ $aceite->color }}" />
                                                </div>

                                            </div>
                                        </section>
                                        <section class="right-footer">
                                            <div class="right-footer-container">
                                                <span class="span-label">Aroma:</span>
                                                <div class="inp">
                                                    <input style="border-radius: 10px; width:auto;" disabled
                                                        type="text" placeholder="{{ $aceite->aroma }}" />
                                                </div>

                                            </div>
                                        </section>
                                        <section class="right-footer">
                                            <div class="right-footer-container">
                                                <span class="span-label">Litros de recarga:</span>
                                                <div class="inp">
                                                    <input style="border-radius: 10px; width:auto;" disabled
                                                        type="text"
                                                        placeholder="{{ $aceite->litros_recarga }}" />
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
    <!-- End Modal Aceites-->

    <!-- Modal Grasas-->
    <div class="modal fade" id="GrasasData" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><label style="color: #5e80b7"> <i class="fas fa-database"></i></label>
                        <span class="span-bold"> Datos de Grasas</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($grasas as $grasa)
                    <div class="card shadow mb-4 border-left-primary">
                        <!-- Card Header - Accordion -->
                        <a href="#num{{ $grasa->id }}" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="num{{ $grasa->id }}">
                            <h6 style="font-size: 14px;" class="m-0 font-weight-bold text-primary">
                                <label style="color: #5e80b7"><i class="fas fa-clipboard-list"></i></label> Fecha
                                de Registro:
                                <span class="span-bold2"> {{ \Carbon\Carbon::parse($grasa->created_at)->formatLocalized('%d %B %Y %I:%M %p')  }}</span>
                            </h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse" id="num{{ $grasa->id }}">
                            <div class="card-body">
                                <div class="right">
                                    <div class="right-container">
                                        <section class="right-footer">
                                            <div class="right-footer-container">
                                                <span class="span-label">Litros de Recarga:</span>
                                                <div class="inp">
                                                    <input style="border-radius: 10px; width:auto;" disabled
                                                        type="text" placeholder="{{ $grasa->litros_recarga }}" />
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
    <!-- End Modal Grasas-->

    <!-- Modal Mantenimeintos-->
    <div class="modal fade" id="ManteData" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><label style="color: #5e80b7"> <i class="fas fa-database"></i></label>
                        <span class="span-bold"> Datos de Mantenimientos</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($mantenimientos as $mantenimiento)

                    <div class="card shadow mb-4 border-left-primary">
                        <!-- Card Header - Accordion -->
                        <a href="#num{{ $mantenimiento->id }}" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="num{{ $mantenimiento->id }}">
                            <h6 style="font-size: 14px;" class="m-0 font-weight-bold text-primary">
                                <label style="color: #5e80b7"><i class="fas fa-clipboard-list"></i></label> Fecha
                                de Registro:
                                <span class="span-bold2"> {{ \Carbon\Carbon::parse($mantenimiento->created_at)->formatLocalized('%d %B %Y %I:%M %p')  }}</span>
                            </h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse" id="num{{ $mantenimiento->id }}">
                            <div class="card-body">
                                <div class="right">
                                    <div class="right-container">
                                        <section class="right-footer">
                                            <div class="right-footer-container">
                                                <span class="span-label">Tipo de mantenimiento:</span>
                                                <div class="inp">
                                                    <input style="border-radius: 10px; width:auto;" disabled
                                                        type="text" placeholder="{{ $mantenimiento->tipo }}" />
                                                </div>
                                            </div>
                                        </section>
                                        <section class="right-footer">
                                            <div class="right-footer-container">
                                                <span class="span-label">Litros de Recarga de Agua:</span>
                                                <div class="inp">
                                                    <input style="border-radius: 10px; width:auto;" disabled
                                                        type="text" placeholder="{{ $mantenimiento->litros_recarga_agua }}" />
                                                </div>
                                            </div>
                                        </section>
                                        <section class="right-footer">
                                            <div class="right-footer-container">
                                                <span class="span-label">Litros de Recarga de Concentrado:</span>
                                                <div class="inp">
                                                    <input style="border-radius: 10px; width:auto;" disabled
                                                        type="text" placeholder="{{ $mantenimiento->litros_recarga_con}}" />
                                                </div>
                                            </div>
                                        </section>
                                        <section class="right-footer">
                                            <div class="right-footer-container">
                                                <span class="span-label">Observaciones:</span>
                                                <div class="inp">
                                                    <textarea style="border-radius: 10px; width:auto;" disabled
                                                    placeholder="{{ $mantenimiento->observaciones }}"></textarea>

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
    <!-- End Modal Mantenimientos-->
</div>

<link rel="stylesheet" href="{{ asset('css/registros.css') }}">

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
