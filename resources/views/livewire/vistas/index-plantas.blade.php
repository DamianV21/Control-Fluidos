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
                    <h5 class="modal-title"><i class="fas fa-industry"></i><span class="span-bold"> Datos de la Planta</span></h5>
                    <button type="button" class="close" data-dismiss="modal" wire:click="CloseViewModal"
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
                    <!-- <table>
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
                    </table>-->
                </div>
            </div>
        </div>
    </div>

    <!--End Modal -->


</div>


<link rel="stylesheet" href="{{ asset('css/registros.css') }}">

<style>
    .span-bold {
        font-size: 16px;
        color: #27272e;
        font-weight: 800;
    }

    img {
        cursor: pointer;
    }

    .img {
        width: 48px;
        height: 48px;
        background-color: #5e80b749;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .right {
        width: auto;
    }

    .span-label {
        font-size: 14px;
        color: #5e80b7;
        font-weight: 800;
        margin-left: 4px;
    }

    .spn-light {
        font-size: 14px;
        color: #425466;
        font-weight: 100;
    }

    .right-header {
        display: flex;
        flex-direction: column;
        gap: 9px;
    }

    ::placeholder {
        font-size: 13px;
        font-weight: 500;
        color: #a1aab2;
    }

    input {
        border: 0;
        outline: 0;
        background-color: transparent;

    }

    .right-footer {
        /* width: 318px;
  height: 46px; */
        background-color: #edf2f7;
        border-radius: 10px;
        margin-top: 12px;
        padding: 5px 4px 5px 16px;

    }

    .right-footer-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>

<script>
    window.addEventListener('show-modal', event => {
        $('#InfoPlantaData').modal('show');
    });
</script>
