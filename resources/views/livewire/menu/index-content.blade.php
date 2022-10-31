<div>

    <div class="row">
        <div class="col-md-4">

            <div class="card shadow mb-4">
                <div class="card-body">

                    <!--  Filtro de Plantas -->
                    <div class="form-group">
                        <h5 class="text-sm"><label style="color: #5e80b7"><i class="fas fa-industry"></i>
                            </label><strong> Plantas </strong>
                            <span class="badge text-white"
                                style="background-color: #5e80b7">{{ $p_plantas->count() }}</span>
                        </h5>
                        <select class="form-control redondee" multiple wire:model="selectedPlanta">
                            @foreach ($p_plantas as $planta)
                                <option value="{{ $planta->id }}">{{ $planta->nombre }}</option>
                            @endforeach
                        </select>
                    </div>


                    <!--  Filtro de Areas -->
                    <div class="form-group">
                        <h5 class="text-sm"><label style="color: #5e80b7"><i class="fas fa-project-diagram"></i>
                            </label><strong> Áreas</strong>
                            <span class="badge text-white" style="background-color: #5e80b7">{{ $numero_areas }}</span>
                        </h5>
                        <select multiple wire:model="selectedArea" class="form-control redondee">
                            @foreach ($a_areas as $areass)
                                <option value="{{ $areass->id }}">{{ $areass->nombre }}</option>
                            @endforeach
                        </select>
                    </div>


                    <!--  Filtro de Lineas -->
                    <div class="form-group">
                        <h5 class="text-sm"><label style="color: #5e80b7"><i class="fas fa-columns"></i>
                            </label><strong> Líneas</strong>
                            <span class="badge text-white" style="background-color: #5e80b7">{{ $numero_lineas }}</span>
                        </h5>
                        <select multiple wire:model="selectedLinea" class="form-control redondee">
                            @foreach ($l_lineas as $lineass)
                                <option value="{{ $lineass->id }}">{{ $lineass->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>



        <!--  Carga de Datos para los filtros -->
        @if ($numero_maquinas == 0 and $numero_lineas == 0)

            <div class="col-md-8">

                <div class="card shadow mb-4">
                    <div class="card-body">
                        @if ($numero_areas == 0)
                            <center>
                                <br>
                                <img width="400px" src="{{ asset('img/select_planta.png') }}" alt="logo">
                            </center>
                        @else
                            <center>

                                <h1><strong>Áreas</strong></h1>
                                <p class="font-thin	text-xs	">Total de resultados <span class="badge text-white"
                                    style="background-color: #6e6e6e">{{ $a_areas->count() }}</span></p>

                            </center>
                            <div class="row">
                                @foreach ($a_areas as $area)
                                    <div class="col-md-4">
                                        <br>
                                        <div class="card card-custom bg-white border-white border-0">
                                            <div class="card-custom-img"
                                                style="background-image: url({{ asset('img/fondo.png') }});"></div>
                                            <div class="card-custom-avatar">
                                                <img class="img-fluid" src="{{ asset('img/area_default.png') }}"
                                                    alt="Avatar" />
                                            </div>
                                            <div class="card-body text-sm" style="overflow-y: auto">

                                                <h4 class="card-title"><strong>Información del área:</strong> </h4>
                                                <p class="card-text"><strong>Área:</strong>
                                                    {{ $area->nombre }} </p>
                                                <p class="card-text"><strong>Planta:</strong>
                                                    {{ $area->plantas->nombre }} </p>
                                            </div>
                                            <div class="card-footer text-sm"
                                                style="background: inherit; border-color: inherit;">
                                                <a class="btn btn-sm btn-block text-white"
                                                    style="background-color: #5e80b7;" data-toggle="modal"
                                                    data-target="#AddCalidadAgua"
                                                    wire:click="AddArea({{ $area->id }})">Calidad
                                                    Agua</a>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>



            </div>
        @else
            <div class="col-md-8">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        @if ($numero_maquinas == 0 || $numero_lineas == 0)
                            <center>
                                <br>
                                <img width="400px" src="{{ asset('img/selec_linea.png') }}" alt="logo">

                            </center>
                        @else
                            <center>
                                <h1><strong>Máquinas</strong></h1>
                                <p class="font-thin	text-xs	">Total de resultados <span class="badge text-white"
                                    style="background-color: #6e6e6e">{{ $m_maquinas->count() }}</span></p>
                            </center>
                        @endif

                        @if ($numero_lineas == 0)
                            @php
                                $maquinas = [];
                            @endphp
                        @endif

                        <div class="row">

                            @foreach ($m_maquinas as $maquina)
                                <div class="col-md-4 ">
                                    <br>
                                    <div class="card card-custom bg-white border-white border-0">
                                        <div class="card-custom-img"
                                            style="background-image: url({{ asset('img/bg1.jpg') }});"></div>
                                        <div class="card-custom-avatar">
                                            <img class="img-fluid" src="{{ asset('img/machine_default.png') }}"
                                                alt="Avatar" />
                                        </div>
                                        <div class="card-body text-sm" style="overflow-y: auto">
                                            <h4 class="card-title"><strong>Información de maquina:</strong></h4>
                                            <p class="card-text"><strong>Ids:</strong> {{ $maquina->ids }}</p>
                                            <p class="card-text"><strong>Marca:</strong> {{ $maquina->marca }}</p>
                                        </div>
                                        <div class="card-footer text-sm"
                                            style="background: inherit; border-color: inherit;">


                                            <!-- Button trigger modal Refrigerante -->
                                            <a class="btn btn-sm btn-block text-white" style="background-color: #5e80b7"
                                                data-toggle="modal" data-target="#AddRefrigeranteData"
                                                wire:click="AddRefrigerante({{ $maquina->id }})">Refrigerante</a>
                                            <!-- Button trigger modal Aceites -->
                                            <a class="btn text-white btn-sm btn-block" style="background-color: #5e80b7"
                                                data-toggle="modal" data-target="#AddAceite"
                                                wire:click="AddRefrigerante({{ $maquina->id }})">Aceites</a>
                                            <!-- Button trigger modal Grasas -->
                                            <a class="btn text-white btn-sm btn-block" style="background-color: #5e80b7"
                                                data-toggle="modal" data-target="#AddGrasa"
                                                wire:click="AddRefrigerante({{ $maquina->id }})">Grasas</a>
                                            <!-- Button trigger modal Mantenimiento -->
                                            <a class="btn text-white btn-sm btn-block" style="background-color: #5e80b7"
                                                data-toggle="modal" data-target="#AddMantenimiento"
                                                wire:click="AddRefrigerante({{ $maquina->id }})">Mantenimiento</a>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>



            </div>
        @endif
    </div>





    <!-- Modal Calidad Agua -->
    <div wire:ignore.self class="modal fade" data-backdrop="static" id="AddCalidadAgua" tabindex="-1"
        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><label style="color: #5e80b7"> <i
                                class="fas fa-cloud-upload-alt"></i></label>
                        <span class="span-bold"> Registrar Calidad de Agua</span>
                    </h5>
                    <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                    </a>
                </div>

                <div class="modal-body">


                    <div class="form-group row">
                        <label for="origen_agua" class="col-4"><strong>Origen de Agua</strong></label>
                        <div class="col-8">
                            <select class="form-control redonde" id="origen_agua" wire:model="origen_agua">
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
                        <label for="dureza" class="col-4"><strong>Dureza</strong></label>
                        <div class="col-8">
                            <input type="number" step="0.01" id="dureza" class="form-control redonde"
                                wire:model="dureza">
                            @error('dureza')
                                <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ph" class="col-4"><strong>pH</strong></label>
                        <div class="col-8">
                            <input type="number" step="0.01" id="ph" class="form-control redonde"
                                wire:model="ph">
                            @error('ph')
                                <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="conductividad" class="col-4"><strong>Conductividad</strong></label>
                        <div class="col-8">
                            <input type="number" step="0.01" id="conductividad" class="form-control redonde"
                                wire:model="conductividad">
                            @error('conductividad')
                                <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cloruros" class="col-4"><strong>Cloruros</strong></label>
                        <div class="col-8">
                            <input type="number" step="0.01" id="cloruros" class="form-control redonde"
                                wire:model="cloruros">
                            @error('cloruros')
                                <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sulfatos" class="col-4"><strong>Sulfatos</strong></label>
                        <div class="col-8">
                            <input type="number" step="0.01" id="sulfatos" class="form-control redonde"
                                wire:model="sulfatos">
                            @error('sulfatos')
                                <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-12">
                            <center>
                                <button wire:click="storeAreaData" class="cssbuttons-io-button"> Agregar Registro
                                    <div class="icon">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </button>
                            </center>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->


    <!-- Modal Calidad Refrigerante -->
    <div wire:ignore.self class="modal fade" data-backdrop="static" id="AddRefrigeranteData" tabindex="-1"
        role="dialog" aria-labelledby="AddRefrigerante" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><label style="color: #5e80b7"> <i
                                class="fas fa-cloud-upload-alt"></i></label>
                        <span class="span-bold"> Registrar Refrigerante</span>
                    </h5>
                    <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                    </a>
                </div>

                <div class="modal-body">
                    <form id="refrigerante" wire:submit.prevent="AddRefrigeranteData">

                        <div class="form-group row">
                            <label for="concentracion_ini" class="col-5"><strong>Concentración inicial</strong></label>
                            <div class="col-7">
                                <input type="number" step="0.01" id="concentracion_ini" class="form-control redonde"
                                    wire:model="concentracion_ini">
                                @error('concentracion_ini')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="volumen_ini" class="col-5"><strong>Volumen inicial</strong></label>
                            <div class="col-7">
                                <input type="number" step="0.01" id="volumen_ini" class="form-control redonde"
                                    wire:model="volumen_ini">
                                @error('volumen_ini')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="litros_rec" class="col-5"><strong>Litros de recarga</strong></label>
                            <div class="col-7">
                                <input type="number" step="0.01" id="litros_rec" class="form-control redonde"
                                    wire:model="litros_rec">
                                @error('litros_rec')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="concentracion_rec" class="col-5"><strong>Concentración de recarga</strong></label>
                            <div class="col-7">
                                <input type="number" step="0.01" id="concentracion_rec" class="form-control redonde"
                                    wire:model="concentracion_rec">
                                @error('concentracion_rec')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="concentracion_fin" class="col-5"><strong>Concentración final</strong></label>
                            <div class="col-7">
                                <input type="number" step="0.01" id="concentracion_fin" class="form-control redonde"
                                    wire:model="concentracion_fin">
                                @error('concentracion_fin')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="refrigerante_ph" class="col-5"><strong>pH</strong></label>
                            <div class="col-7">
                                <!--<input type="number" step="0.01" id="refrigerante_ph" class="form-control" wire:model="refrigerante_ph">-->

                                <input type="number" step="0.01" id="refrigerante_ph" class="form-control redonde"
                                    wire:model="refrigerante_ph">


                                @error('refrigerante_ph')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="aroma" class="col-5"><strong>Aroma</strong></label>
                            <div class="col-7">
                                <select class="form-control redonde" id="aroma" wire:model="aroma">

                                    <option selected>Elige un valor</option>
                                    <option value="Malo">Malo</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Bueno">Bueno</option>
                                </select>
                                @error('aroma')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="aceites" class="col-5"><strong>Aceites entrampados</strong></label>
                            <div class="col-7">
                                <select class="form-control redonde" id="aceites" wire:model="aceites">

                                    <option selected>Elige un valor</option>
                                    <option value="Sí">Si</option>
                                    <option value="No">No</option>
                                </select>
                                @error('aceites')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="color" class="col-5"><strong>Color</strong></label>
                            <div class="col-7">
                                <select class="form-control redonde" id="color" wire:model="color">

                                    <option selected>Elige un valor</option>
                                    <option value="Marrón">Marrón</option>
                                    <option value="Beige">Beige</option>
                                    <option value="Blanco">Blanco</option>
                                    <option value="Amarillo">Amarillo</option>
                                </select>
                                @error('color')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exceso_es" class="col-5"><strong>Exceso de espuma</strong></label>
                            <div class="col-7">
                                <select class="form-control redonde" id="exceso_es" wire:model="exceso_es">

                                    <option selected>Elige un valor</option>
                                    <option value="Sí">Si</option>
                                    <option value="No">No</option>
                                </select>
                                @error('exceso_es')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="comentarios" class="col-5"><strong>Comentarios</strong></label>
                            <div class="col-7">
                                <textarea class="redondee" placeholder="Escribe un comentario" style="heigh:auto;" id="comentarios" wire:model="comentarios"></textarea>
                                @error('comentarios')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-12">
                                <center>
                                    <button wire:click="AddRefrigeranteData" class="cssbuttons-io-button"> Agregar
                                        Registro
                                        <div class="icon">
                                            <svg height="24" width="24" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                    </button>

                                </center>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Modal Calidad Aceite -->
    <div wire:ignore.self class="modal fade" data-backdrop="static" id="AddAceite" tabindex="-1" role="dialog"
        aria-labelledby="AddAceite" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><label style="color: #5e80b7"> <i
                                class="fas fa-cloud-upload-alt"></i></label>
                        <span class="span-bold"> Registrar Aceites</span>
                    </h5>
                    <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                    </a>
                </div>

                <div class="modal-body">
                    <form id="aceite" wire:submit.prevent="AddAceiteData">


                        <div class="form-group row">
                            <label for="aspecto" class="col-3"><strong>Aspecto</strong></label>
                            <div class="col-9">
                                <select class="form-control redonde" id="aspecto" wire:model="aspecto">
                                    <option></option>
                                    <option value="Transparente">Transparente</option>
                                    <option value="Turbio">Turbio</option>
                                    <option value="Semitransparente">Semitransparente</option>
                                </select>
                                @error('aspecto')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="aceite_color" class="col-3"><strong>Color</strong></label>
                            <div class="col-9">
                                <select class="form-control redonde" id="aceite_color" wire:model="aceite_color">
                                    <option></option>
                                    <option value="Amarillo">Amarillo</option>
                                    <option value="Ámbar">Ámbar</option>
                                    <option value="Café">Café</option>
                                    <option value="Variantes claros">Variantes claros</option>
                                    <option value="Variantes oscuros">Variantes oscuros</option>
                                </select>
                                @error('aceite_color')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="aceite_aroma" class="col-3"><strong>Aroma</strong></label>
                            <div class="col-9">
                                <select class="form-control redonde" id="aceite_aroma" wire:model="aceite_aroma">
                                    <option></option>
                                    <option value="Bien">Bien</option>
                                    <option value="Dulce">Dulce</option>
                                    <option value="Aceite quemado">Aceite quemado</option>
                                </select>
                                @error('aceite_aroma')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="aceite_litros_rec" class="col-3"><strong>Litros de recarga</strong>
                            </label>
                            <div class="col-9">
                                <input type="number" step="0.01" id="acaeite_litros_rec" class="form-control redonde"
                                    wire:model="acaeite_litros_rec">
                                @error('acaeite_litros_rec')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-12">

                                <center>
                                    <button wire:click="AddAceiteData" class="cssbuttons-io-button"> Agregar Registro
                                        <div class="icon">
                                            <svg height="24" width="24" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                    </button>

                                </center>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Modal Calidad Grasas -->
    <div wire:ignore.self class="modal fade" data-backdrop="static" id="AddGrasa" tabindex="-1" role="dialog"
        aria-labelledby="AddAceite" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><label style="color: #5e80b7"> <i
                                class="fas fa-cloud-upload-alt"></i></label>
                        <span class="span-bold"> Registrar Grasas</span>
                    </h5>
                    <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                    </a>
                </div>
                <div class="modal-body">
                    <form id="grasa" wire:submit.prevent="AddGrasaData">


                        <div class="form-group row">
                            <label for="grasa_litros_rec" class="col-5"><strong>Litros de Recarga</strong></label>
                            <div class="col-7">
                                <input type="number" step="0.01" id="grasa_litros_rec" class="form-control redonde"
                                    wire:model="grasa_litros_rec">
                                @error('grasa_litros_rec')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">

                            <div class="col-12">

                                <center>
                                    <button wire:click="AddGrasaData" class="cssbuttons-io-button"> Agregar Registro
                                        <div class="icon">
                                            <svg height="24" width="24" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                    </button>

                                </center>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Modal Calidad Mantenimeinto -->
    <div wire:ignore.self class="modal fade" data-backdrop="static" id="AddMantenimiento" tabindex="-1"
        role="dialog" aria-labelledby="AddAceite" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><label style="color: #5e80b7"> <i
                                class="fas fa-cloud-upload-alt"></i></label>
                        <span class="span-bold"> Registrar Mantenimientos</span>
                    </h5>
                    <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                    </a>
                </div>

                <div class="modal-body">
                    <form id="mantenimiento" wire:submit.prevent="AddMantenimientoData">


                        <div class="form-group row">
                            <label for="man_tipo" class="col-5"><strong>Tipo</strong></label>
                            <div class="col-7">
                                <select class="form-control redonde" id="man_tipo" wire:model="man_tipo">
                                    <option></option>
                                    <option value="Filtración">Filtración</option>
                                    <option value="Mantenimiento">Mantenimiento</option>
                                </select>
                                @error('man_tipo')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="man_litros_agua" class="col-5"><strong>Litros de recarga de agua</strong></label>
                            <div class="col-7">
                                <input type="number" step="0.01" id="man_litros_agua" class="form-control redonde"
                                    wire:model="man_litros_agua">
                                @error('man_litros_agua')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="man_litros_con" class="col-5"><strong>Litros de recarga de concentrado</strong>
                            </label>
                            <div class="col-7">
                                <input type="number" step="0.01" id="man_litros_con" class="form-control redonde"
                                    wire:model="man_litros_con">
                                @error('man_litros_con')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="man_observaciones" class="col-5"><strong>Observaciones</strong></label>
                            <div class="col-7">
                                <textarea class="redondee" placeholder="Escribe una observacion" style="heigh:auto;" id="man_observaciones"
                                    wire:model="man_observaciones"></textarea>
                                @error('man_observaciones')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">

                            <div class="col-12">

                                <center>
                                    <button wire:click="AddMantenimientoData" class="cssbuttons-io-button"> Agregar
                                        Registro
                                        <div class="icon">
                                            <svg height="24" width="24" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                    </button>

                                </center>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

</div>
<link rel="stylesheet" href="{{ asset('css/registros.css') }}">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    window.addEventListener('close-modal-agua', event => {
        $('#AddCalidadAgua').modal('hide');
    });
    window.addEventListener('close-modal-refrigerante', event => {
        $('#AddRefrigeranteData').modal('hide');
    });

    window.addEventListener('close-modal-aceite', event => {
        $('#AddAceite').modal('hide');
    });

    window.addEventListener('close-modal-grasa', event => {
        $('#AddGrasa').modal('hide');
    });

    window.addEventListener('close-modal-man', event => {
        $('#AddMantenimiento').modal('hide');
    });

    window.addEventListener('add_agua', function(e) {
        Swal.fire(
            e.detail.title,
            e.detail.title_sub,
            'success'
        )
    });

    window.addEventListener('add_ref', function(e) {
        Swal.fire(
            e.detail.title,
            e.detail.title_sub,
            'success'
        )
    });

    window.addEventListener('add_aceite', function(e) {
        Swal.fire(
            e.detail.title,
            e.detail.title_sub,
            'success'
        )
    });

    window.addEventListener('add_grasa', function(e) {
        Swal.fire(
            e.detail.title,
            e.detail.title_sub,
            'success'
        )
    });


    window.addEventListener('add_man', function(e) {
        Swal.fire(
            e.detail.title,
            e.detail.title_sub,
            'success'
        )
    });
</script>

<style>
    .redonde{
    border-radius: 50px;
    }
    .redondee{
    border-radius: 0px;
    }

    @media(max-width:900px){
    .redondee{
    border-radius: 15px;
    }


    }
    /* From uiverse.io by @adamgiebl */
    .cssbuttons-io-button {
        background: #5e80b7;
        color: white;
        font-family: inherit;
        padding: 0.35em;
        padding-left: 1.2em;
        font-size: 17px;
        font-weight: 500;
        border-radius: 0.9em;
        border: none;
        letter-spacing: 0.05em;
        display: flex;
        align-items: center;
        box-shadow: inset 0 0 1.6em -0.6em #5e80b7;
        overflow: hidden;
        position: relative;
        height: 2.8em;
        padding-right: 3.3em;
    }

    .cssbuttons-io-button .icon {
        background: white;
        margin-left: 1em;
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 2.2em;
        width: 2.2em;
        border-radius: 0.7em;
        box-shadow: 0.1em 0.1em 0.6em 0.2em #5e80b7;
        right: 0.3em;
        transition: all 0.3s;
    }

    .cssbuttons-io-button:hover .icon {
        width: calc(100% - 0.6em);
    }

    .cssbuttons-io-button .icon svg {
        width: 1.1em;
        transition: transform 0.3s;
        color: #5e80b7;
    }

    .cssbuttons-io-button:hover .icon svg {
        transform: translateX(0.1em);
    }

    .cssbuttons-io-button:active .icon {
        transform: scale(0.95);
    }


    /* From uiverse.io by @alexruix */
    /* From uiverse.io by @alexruix */
    .input {
        line-height: 32px;
        border: 2px solid transparent;
        border-bottom-color: #777;
        padding: .2rem 0;
        outline: none;
        background-color: transparent;
        color: #0d0c22;
        transition: .3s cubic-bezier(0.645, 0.045, 0.355, 1);
    }

    .input:focus,
    input:hover {
        outline: none;
        padding: .2rem 1rem;
        border-radius: 1rem;
        border-color: #7a9cc6;
    }

    .input::placeholder {
        color: #777;
    }

    .input:focus::placeholder {
        opacity: 0;
        transition: opacity .3s;
    }
</style>
