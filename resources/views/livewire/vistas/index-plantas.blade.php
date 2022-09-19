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
                  <input type="radio" name="options" id="option2" value="za" autocomplete="off"> <i class="fas fa-sort-alpha-down-alt"></i>
                </label>
                <label class="btn btn-primary">
                  <input type="radio" name="options" id="option3" value="az" autocomplete="off"> <i class="fas fa-sort-alpha-down"></i>
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
                @foreach ($plantas as $planta)
                    <div class="col-md-3">

                        <br>
                        <div class="card card-custom bg-white border-white border-0">
                            <div class="card-custom-img" style="background-image: url({{ asset('img/bg1.jpg') }});">
                            </div>
                            <div class="card-custom-avatar">
                                <img class="img-fluid" src="{{ asset('img/company_default.png') }}" alt="Avatar" />
                            </div>
                            <div class="card-body text-sm" style="overflow-y: auto">

                                <h4 class="card-title"><strong>Información de Planta:</strong> </h4>
                                <p class="card-text"> <strong>Planta:</strong> {{ $planta->nombre }}</p>
                                <p class="card-text"><strong>Ciudad:</strong> {{ $planta->ciudad }}</p>
                            </div>
                            <div class="card-footer text-sm" style="background: inherit; border-color: inherit;">

                                <a class="btn text-white btn-sm btn-block" style="background-color: #5e80b7"
                                    data-toggle="modal" wire:click="OpenViewModal({{ $planta->id }})">Ver más
                                    información</a>

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
                    <h5 class="modal-title"><label  style="color: #5e80b7"> <i class="fas fa-database"></i></label>
                        <span class="span-bold"> Datos de la Planta</span></h5>
                    <button type="button" class="close" data-dismiss="modal" wire:click="CloseViewModal"
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
                                            placeholder="{{ $view_planta_nombre }}" />
                                    </div>

                                    <i class="fas fa-spell-check"></i>
                                </div>
                            </section>


                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Dirección:</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_planta_direc }}" />
                                    </div>
                                    <i class="fas fa-directions"></i>
                                </div>
                            </section>

                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Ciudad:</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_planta_ciudad }}" />
                                    </div>
                                    <i class="fas fa-compass"></i>
                                </div>
                            </section>

                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Estado:</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_planta_estado }}" />
                                    </div>
                                    <i class="fas fa-route"></i>
                                </div>
                            </section>

                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">C.P. :</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_planta_cp }}" />
                                    </div>
                                    <i class="fas fa-list-ol"></i>
                                </div>
                            </section>

                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Telefono:</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_planta_tel }}" />
                                    </div>
                                    <i class="fas fa-phone"></i>
                                </div>
                            </section>

                            <section class="right-footer">
                                <div class="right-footer-container">
                                    <span class="span-label">Contaco:</span>
                                    <div class="inp">
                                        <input style="border-radius: 10px; width:auto;" disabled type="text"
                                            placeholder="{{ $view_planta_con }}" />
                                    </div>
                                    <i class="fas fa-address-book"></i>
                                </div>
                            </section>

                        </div>
                    </div>
                    <!-- right-end -->

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
