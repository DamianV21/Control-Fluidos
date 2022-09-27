<div>

    <div class="row">
        <div class="col-md-4">

            <div class="card shadow mb-4">
                <div class="card-body">

                    <!--  Filtro de Plantas -->
                    <div class="form-group">
                        <h5 class="text-sm"><label style="color: #5e80b7"><i class="fa fa-filter"></i>
                            </label><strong>Plantas </strong>
                            <span class="badge text-white"
                                style="background-color: #5e80b7">{{ $p_plantas->count() }}</span>
                        </h5>
                        <select class="form-control" multiple wire:model="selectedPlanta">
                            @foreach ($p_plantas as $planta)
                                <option value="{{ $planta->id }}">{{ $planta->nombre }}</option>
                            @endforeach
                        </select>
                    </div>


                    <!--  Filtro de Areas -->
                    <div class="form-group">
                        <h5 class="text-sm"><label style="color: #5e80b7"><i class="fa fa-filter"></i>
                            </label><strong>Áreas</strong>
                            <span class="badge text-white" style="background-color: #5e80b7">{{ $numero_areas }}</span>
                        </h5>
                        <select multiple wire:model="selectedArea" class="form-control">
                            @foreach ($a_areas as $areass)
                                <option value="{{ $areass->id }}">{{ $areass->nombre }}</option>
                            @endforeach
                        </select>
                    </div>


                    <!--  Filtro de Lineas -->
                    <div class="form-group">
                        <h5 class="text-sm"><label style="color: #5e80b7"><i class="fa fa-filter"></i>
                            </label><strong>Líneas</strong>
                            <span class="badge text-white" style="background-color: #5e80b7">{{ $numero_lineas }}</span>
                        </h5>
                        <select multiple wire:model="selectedLinea" class="form-control">
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
                                <img width="400px" src="{{ asset('img/seleccionplanta.png') }}" alt="logo">
                            </center>
                        @else
                            <center>

                                <h1><strong>Áreas</strong></h1>

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
                                <img width="400px" src="{{ asset('img/seleccionlinea.png') }}" alt="logo">

                            </center>
                        @else
                            <center>
                                <h1><strong>Máquinas</strong></h1>
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
                                        <div class="card-footer text-sm" style="background: inherit; border-color: inherit;">


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
                    <h5 class="modal-title" id="exampleModalLongTitle">Calidad de Agua</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">


                    <div class="form-group row">
                        <label for="origen_agua" class="col-3">Origen de Agua</label>
                        <div class="col-9">
                            <select class="form-control" id="origen_agua" wire:model="origen_agua">
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
                        <label for="dureza" class="col-3">Dureza</label>
                        <div class="col-9">
                            <input type="number" step="0.01" id="dureza" class="form-control"
                                wire:model="dureza">
                            @error('dureza')
                                <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="ph" class="col-3">pH</label>
                        <div class="col-9">
                            <input type="number" step="0.01" id="ph" class="form-control"
                                wire:model="ph">
                            @error('ph')
                                <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="conductividad" class="col-3">Conductividad</label>
                        <div class="col-9">
                            <input type="number" step="0.01" id="conductividad" class="form-control"
                                wire:model="conductividad">
                            @error('conductividad')
                                <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cloruros" class="col-3">Cloruros</label>
                        <div class="col-9">
                            <input type="number" step="0.01" id="cloruros" class="form-control"
                                wire:model="cloruros">
                            @error('cloruros')
                                <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sulfatos" class="col-3">Sulfatos</label>
                        <div class="col-9">
                            <input type="number" step="0.01" id="sulfatos" class="form-control"
                                wire:model="sulfatos">
                            @error('sulfatos')
                                <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-12">
                            <button wire:click="storeAreaData"
                                class="btn btn-primary btn-lg btn-block">Registar</button>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Refrigerante</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form id="refrigerante" wire:submit.prevent="AddRefrigeranteData">

                        <div class="form-group row">
                            <label for="concentracion_ini" class="col-3">Concentración inicial</label>
                            <div class="col-9">
                                <input type="number" step="0.01" id="concentracion_ini" class="form-control"
                                    wire:model="concentracion_ini">
                                @error('concentracion_ini')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="volumen_ini" class="col-3">Volumen inicial</label>
                            <div class="col-9">
                                <input type="number" step="0.01" id="volumen_ini" class="form-control"
                                    wire:model="volumen_ini">
                                @error('volumen_ini')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="litros_rec" class="col-3">Litros de recarga</label>
                            <div class="col-9">
                                <input type="number" step="0.01" id="litros_rec" class="form-control"
                                    wire:model="litros_rec">
                                @error('litros_rec')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="concentracion_rec" class="col-3">Concentración de recarga</label>
                            <div class="col-9">
                                <input type="number" step="0.01" id="concentracion_rec" class="form-control"
                                    wire:model="concentracion_rec">
                                @error('concentracion_rec')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="concentracion_fin" class="col-3">Concentración final</label>
                            <div class="col-9">
                                <input type="number" step="0.01" id="concentracion_fin" class="form-control"
                                    wire:model="concentracion_fin">
                                @error('concentracion_fin')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="refrigerante_ph" class="col-3">pH</label>
                            <div class="col-9">
                                <!--<input type="number" step="0.01" id="refrigerante_ph" class="form-control" wire:model="refrigerante_ph">-->

                                <input type="number" step="0.01" id="refrigerante_ph" class="form-control"
                                wire:model="refrigerante_ph">


                                @error('refrigerante_ph')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="aroma" class="col-3">Aroma</label>
                            <div class="col-9">
                                <select class="form-control" id="aroma" wire:model="aroma">

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
                            <label for="aceites" class="col-3">Aceites entrampados</label>
                            <div class="col-9">
                                <select class="form-control" id="aceites" wire:model="aceites">

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
                            <label for="color" class="col-3">Color</label>
                            <div class="col-9">
                                <select class="form-control" id="color" wire:model="color">

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
                            <label for="exceso_es" class="col-3">Exceso de espuma</label>
                            <div class="col-9">
                                <select class="form-control" id="exceso_es" wire:model="exceso_es">

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
                            <label for="comentarios" class="col-3">Comentarios</label>
                            <div class="col-9">
                                <textarea placeholder="Escribe un comentario" style="heigh:auto;" id="comentarios" wire:model="comentarios"></textarea>
                                @error('comentarios')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-12">
                                <button wire:click="AddRefrigeranteData"
                                    class="btn btn-primary btn-lg btn-block">Registar</button>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Aceite</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form id="aceite" wire:submit.prevent="AddAceiteData">


                        <div class="form-group row">
                            <label for="aspecto" class="col-3">Aspecto</label>
                            <div class="col-9">
                                <select class="form-control" id="aspecto" wire:model="aspecto">
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
                            <label for="aceite_color" class="col-3">Color</label>
                            <div class="col-9">
                                <select class="form-control" id="aceite_color" wire:model="aceite_color">
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
                            <label for="aceite_aroma" class="col-3">Aroma</label>
                            <div class="col-9">
                                <select class="form-control" id="aceite_aroma" wire:model="aceite_aroma">
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
                            <label for="aceite_litros_rec" class="col-3">Litros de recarga
                            </label>
                            <div class="col-9">
                                <input type="number" step="0.01" id="acaeite_litros_rec" class="form-control"
                                    wire:model="acaeite_litros_rec">
                                @error('acaeite_litros_rec')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-12">
                                <button wire:click="AddAceiteData"
                                    class="btn btn-primary btn-lg btn-block">Registar</button>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Grasas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="grasa" wire:submit.prevent="AddGrasaData">


                        <div class="form-group row">
                            <label for="grasa_litros_rec" class="col-3">Litros de Recarga</label>
                            <div class="col-9">
                                <input type="number" step="0.01" id="grasa_litros_rec" class="form-control"
                                    wire:model="grasa_litros_rec">
                                @error('grasa_litros_rec')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">

                            <div class="col-12">
                                <button wire:click="AddGrasaData"
                                    class="btn btn-primary btn-lg btn-block">Registar</button>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Mantenimiento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form id="mantenimiento" wire:submit.prevent="AddMantenimientoData">


                        <div class="form-group row">
                            <label for="man_tipo" class="col-3">Tipo</label>
                            <div class="col-9">
                                <select class="form-control" id="man_tipo" wire:model="man_tipo">
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
                            <label for="man_litros_agua" class="col-3">Litros de recarga de agua</label>
                            <div class="col-9">
                                <input type="number" step="0.01" id="man_litros_agua" class="form-control"
                                    wire:model="man_litros_agua">
                                @error('man_litros_agua')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="man_litros_con" class="col-3">Litros de recarga de concentrado
                            </label>
                            <div class="col-9">
                                <input type="number" step="0.01" id="man_litros_con" class="form-control"
                                    wire:model="man_litros_con">
                                @error('man_litros_con')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="man_observaciones" class="col-3">Observaciones</label>
                            <div class="col-9">
                                <textarea placeholder="Escribe una observacion" style="heigh:auto;" id="man_observaciones"
                                    wire:model="man_observaciones"></textarea>
                                @error('man_observaciones')
                                    <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">

                            <div class="col-12">
                                <button wire:click="AddMantenimientoData"
                                    class="btn btn-primary btn-lg btn-block">Registar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

</div>
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

<link rel="stylesheet" href="{{ asset('css/registros.css') }}">
