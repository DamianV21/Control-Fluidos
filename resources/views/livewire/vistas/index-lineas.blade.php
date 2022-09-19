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
                    <div class="right">
                        <div class="right-container">
                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Nombre:</span>

                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{  $view_line_nom }}" />
                                    </div>

                                    <i class="fas fa-spell-check"></i>
                                </div>
                            </section>


                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Empresa:</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_line_empre }}" />
                                    </div>
                                    <i class="fas fa-building"></i>
                                </div>
                            </section>

                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Planta:</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_line_plan }}" />
                                    </div>
                                    <i class="fas fa-industry"></i>
                                </div>
                            </section>

                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Area:</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_line_area }}" />
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


</div>

<link rel="stylesheet" href="{{ asset('css/registros.css') }}">

<script>
    window.addEventListener('show-modal', event => {
        $('#DataViewDetail').modal('show');
    });
</script>
