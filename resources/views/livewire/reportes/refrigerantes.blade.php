<div>

    <!-- Formulario-Consulta -->
    <div class="card shadow mb-4">
        <div class="card-body text-sm">

            <div class="row">
                <div class="col-md-3">
                    <h6><strong>Elige una planta</strong></h6>
                    <div class="form-group">
                        <select wire:model="planta" class="form-control">
                            <option value="0">Ninguno</option>
                            @foreach ($plantas as $planta)
                                <option value="{{ $planta->id }}">{{ $planta->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6><strong>Elige una maquina</strong></h6>
                    <div class="form-group">
                        <select wire:model="maquina" class="form-control">
                            <option selected value="0">Ninguno</option>
                            @foreach ($maquinas as $maquina)
                                <option value="{{ $maquina->id }}">{{ $maquina->ids }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6><strong>Fecha desde</strong></h6>
                    <div class="form-group">
                        <input type="date" wire:model="dateFrom" class="form-control flatpickr"
                            placeholder="Click para elegir">
                    </div>
                </div>
                <div class="col-md-3">
                    <h6><strong>Fecha hasta</strong></h6>
                    <div class="form-group">
                        <input type="date" wire:model="dateTo" class="form-control flatpickr"
                            placeholder="Click para elegir">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <a class="btn btn-danger text-sm btn-block {{ count($data) < 1 ? 'disabled' : '' }}"
                        href="{{ url('report/pdf' . '/' . $valor . '/' . $dateFrom . '/' . $dateTo) }}" target="_blank">
                        <i class="fa fa-file-pdf"></i> Generar PDF </a>

                    <!-- <a class="btn btn-success btn-block {{ count($data) < 1 ? 'disabled' : '' }}"
                        href="{{ url('report/excel' . '/' . $valor . '/' . $dateFrom . '/' . $dateTo) }}"
                        target="_blank">
                        <i class="fa fa-calculator"></i> Exportar a Excel </a>-->
                </div>
                <div class="col-md-3">
                </div>
                <div class="col-md-3">
                </div>
                <div class="col-md-3">
                    <button wire:click="Consulta()"
                        class="btn  btn-block text-sm text-white {{ count($data) > 1 ? 'disabled' : '' }}"
                        style="background-color: #5e80b7;"> <i class="fa fa-search"></i>
                        Consultar
                    </button>

                    <a class="btn btn-block text-sm text-white {{ count($data) < 1 ? 'disabled' : '' }}"
                        href="/reportes" style="background-color: #383838">
                        <i class="fas fa-paper-plane"></i> Nuevo reporte
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Graficas -->
    <div class="col-md-12">

        @if ($data->count() == 0)
            <center>

            </center>
        @else
            <div class="container mt-5">
                <div class="card ">
                    <div style="text-align: center" class="card-body ">

                        <strong> Reporte General</strong>
                        <br>
                        <span>Desde: {{ \Carbon\Carbon::parse($dateFrom)->formatLocalized('%d de %B') }} Hasta:
                            {{ \Carbon\Carbon::parse($dateTo)->formatLocalized('%d de %B') }}</span>
                        <br>
                        <span>{{ $nombre_maquina }}</span>
                        <br>
                        <span>{{ $nombre_empresa }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <figure class="highcharts-figure">
                            <div id="grafica"></div>

                        </figure>
                    </div>
                </div>
        @endif
    </div>
    <br>

    <!-- Datos Generales -->
    <div class="col-md-12">

        @if ($data->count() == 0)
            <center>

                <div style="width: 400px"><svg class="animated" id="freepik_stories-data-report" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><style>svg#freepik_stories-data-report:not(.animated) .animable {opacity: 0;}svg#freepik_stories-data-report.animated #freepik--Charts--inject-8 {animation: 1s 1 forwards ease-out slideDown,1.5s Infinite  linear heartbeat;animation-delay: 0s,1s;}svg#freepik_stories-data-report.animated #freepik--Character--inject-8 {animation: 1s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) lightSpeedLeft;animation-delay: 0s;}            @keyframes slideDown {                0% {                    opacity: 0;                    transform: translateY(-30px);                }                100% {                    opacity: 1;                    transform: translateY(0);                }            }                    @keyframes heartbeat {                0% {                    transform: scale(1);                }                10% {                    transform: scale(1.1);                }                30% {                    transform: scale(1);                }                40% {                    transform: scale(1);                }                50% {                    transform: scale(1.1);                }                60% {                    transform: scale(1);                }                100% {                    transform: scale(1);                }            }                    @keyframes lightSpeedLeft {              from {                transform: translate3d(-50%, 0, 0) skewX(20deg);                opacity: 0;              }              60% {                transform: skewX(-10deg);                opacity: 1;              }              80% {                transform: skewX(2deg);              }              to {                opacity: 1;                transform: translate3d(0, 0, 0);              }            }        </style><g id="freepik--background-simple--inject-8" class="animable" style="transform-origin: 247.472px 212.352px;"><path d="M358.82,83C311.06,48.7,229.53,39.83,187,54.17,110.3,80.05,98,130.34,98.83,175.3s58.46,83.57,73.8,122.87,43.47,92.13,97.8,75.95,52-74.68,68.46-114.18,59.51-80,57.17-116.26C394.43,118.36,379.92,98.21,358.82,83Z" style="fill: rgb(94, 128, 183); transform-origin: 247.472px 212.352px;" id="ellanqjlf1apl" class="animable"></path><g id="ellqjisugsg7"><path d="M358.82,83C311.06,48.7,229.53,39.83,187,54.17,110.3,80.05,98,130.34,98.83,175.3s58.46,83.57,73.8,122.87,43.47,92.13,97.8,75.95,52-74.68,68.46-114.18,59.51-80,57.17-116.26C394.43,118.36,379.92,98.21,358.82,83Z" style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 247.472px 212.352px;" class="animable"></path></g></g><g id="freepik--Charts--inject-8" class="animable" style="transform-origin: 249.25px 218.465px;"><g id="elw613b3c5wws"><rect x="88.68" y="116.71" width="148.47" height="111.9" rx="8.55" style="opacity: 0.2; transform-origin: 162.915px 172.66px;" class="animable"></rect></g><rect x="85" y="110.82" width="148.47" height="111.9" rx="8.55" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 159.235px 166.77px;" id="elnf510djsw88" class="animable"></rect><path d="M133,162,101.26,172.3a33.4,33.4,0,0,1,21.44-42.08A31.71,31.71,0,0,1,133,128.58Z" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 116.313px 150.44px;" id="eler0ou7nnd2h" class="animable"></path><path d="M133,162l19.63,27A33.39,33.39,0,0,1,106,181.61a31.75,31.75,0,0,1-4.74-9.31Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 126.945px 178.686px;" id="elf8sqiqnbe5" class="animable"></path><path d="M133,162l31.76-10.32A32.87,32.87,0,0,1,152.65,189Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 149.744px 170.34px;" id="elphptsj3bjoj" class="animable"></path><path d="M133,162v-33.4a32.88,32.88,0,0,1,31.76,23.08Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 148.88px 145.299px;" id="elngx3xy2b16r" class="animable"></path><circle cx="133.05" cy="161.98" r="20.82" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 133.05px 161.98px;" id="elkmud4wlpb7h" class="animable"></circle><rect x="175.8" y="126.56" width="45.75" height="3.79" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 198.675px 128.455px;" id="eldjjcpoc1pio" class="animable"></rect><rect x="175.8" y="134.67" width="35.91" height="3.79" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 193.755px 136.565px;" id="eluuf4yrk7als" class="animable"></rect><rect x="175.8" y="142.78" width="26.39" height="3.79" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 188.995px 144.675px;" id="elscij7dnxo6m" class="animable"></rect><rect x="175.8" y="150.89" width="37.5" height="3.79" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 194.55px 152.785px;" id="elgzjgzmftlv" class="animable"></rect><rect x="175.8" y="159" width="17.82" height="3.79" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 184.71px 160.895px;" id="elnccjz76kxve" class="animable"></rect><rect x="175.8" y="167.12" width="45.75" height="3.79" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 198.675px 169.015px;" id="elceg7hqs41la" class="animable"></rect><rect x="175.8" y="175.23" width="33.69" height="3.79" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 192.645px 177.125px;" id="elgt25jhd2ab6" class="animable"></rect><rect x="175.8" y="183.34" width="29.44" height="3.79" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 190.52px 185.235px;" id="elkvv4rnsephj" class="animable"></rect><rect x="175.8" y="191.45" width="45.75" height="3.79" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 198.675px 193.345px;" id="elbxxfs6mivwn" class="animable"></rect><line x1="116.02" y1="202.5" x2="151.48" y2="202.5" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 133.75px 202.5px;" id="elbz22t0ij3t" class="animable"></line><line x1="111" y1="207.5" x2="156.5" y2="207.5" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 133.75px 207.5px;" id="elwd6pyu2cpil" class="animable"></line><line x1="177.02" y1="202.5" x2="212.48" y2="202.5" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 194.75px 202.5px;" id="elrk55j5klcgc" class="animable"></line><line x1="172" y1="207.5" x2="217.5" y2="207.5" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 194.75px 207.5px;" id="eltjgkvtqquum" class="animable"></line><g id="elmvg67648c2g"><rect x="107.96" y="275.28" width="129.92" height="97.92" rx="8.55" style="opacity: 0.2; transform-origin: 172.92px 324.24px;" class="animable"></rect></g><rect x="103.54" y="270.14" width="129.92" height="97.92" rx="8.55" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 168.5px 319.1px;" id="elgz6v78nf6xp" class="animable"></rect><line x1="112.44" y1="316.69" x2="129.77" y2="316.69" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 121.105px 316.69px;" id="eltecm89ly5nc" class="animable"></line><line x1="112.44" y1="320.61" x2="139.85" y2="320.61" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 126.145px 320.61px;" id="ellfx76gnlirj" class="animable"></line><line x1="112.44" y1="324.52" x2="129.77" y2="324.52" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 121.105px 324.52px;" id="elqsdngbp7f2" class="animable"></line><line x1="112.44" y1="328.43" x2="137.44" y2="328.43" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 124.94px 328.43px;" id="elmm6e7mmure" class="animable"></line><line x1="112.44" y1="332.35" x2="129.77" y2="332.35" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 121.105px 332.35px;" id="el89yykxf66d9" class="animable"></line><line x1="112.44" y1="336.26" x2="143.06" y2="336.26" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 127.75px 336.26px;" id="el3atqegn4e3l" class="animable"></line><line x1="155.84" y1="316.69" x2="173.17" y2="316.69" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 164.505px 316.69px;" id="el2v8kr1t98q7" class="animable"></line><line x1="155.84" y1="320.61" x2="183.25" y2="320.61" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 169.545px 320.61px;" id="elt5k3j19cv2" class="animable"></line><line x1="155.84" y1="324.52" x2="173.17" y2="324.52" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 164.505px 324.52px;" id="elocuilsjjeq" class="animable"></line><line x1="155.84" y1="328.43" x2="180.84" y2="328.43" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 168.34px 328.43px;" id="elkp59zno00p" class="animable"></line><line x1="155.84" y1="332.35" x2="173.17" y2="332.35" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 164.505px 332.35px;" id="elankirmatiw6" class="animable"></line><line x1="155.84" y1="336.26" x2="186.46" y2="336.26" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 171.15px 336.26px;" id="elqy680cvk7bg" class="animable"></line><line x1="199.24" y1="316.69" x2="216.57" y2="316.69" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 207.905px 316.69px;" id="eltin1bj0gmo" class="animable"></line><line x1="199.24" y1="320.61" x2="226.64" y2="320.61" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 212.94px 320.61px;" id="elq6g9komrook" class="animable"></line><line x1="199.24" y1="324.52" x2="216.57" y2="324.52" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 207.905px 324.52px;" id="elvwv418tvmid" class="animable"></line><line x1="199.24" y1="328.43" x2="224.23" y2="328.43" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 211.735px 328.43px;" id="elyze1m0a0fae" class="animable"></line><line x1="199.24" y1="332.35" x2="216.57" y2="332.35" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 207.905px 332.35px;" id="elmpi6ilky69" class="animable"></line><line x1="199.24" y1="336.26" x2="229.86" y2="336.26" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 214.55px 336.26px;" id="elyt7dzcdl61l" class="animable"></line><rect x="111.33" y="303.83" width="33.54" height="6.71" style="fill: rgb(38, 50, 56); transform-origin: 128.1px 307.185px;" id="elm2uvtq2ygv" class="animable"></rect><rect x="155.49" y="303.83" width="33.54" height="6.71" style="fill: rgb(38, 50, 56); transform-origin: 172.26px 307.185px;" id="elpbrkbso7afr" class="animable"></rect><rect x="199.65" y="303.83" width="33.54" height="6.71" style="fill: rgb(38, 50, 56); transform-origin: 216.42px 307.185px;" id="eld64rqsg92y" class="animable"></rect><line x1="150.1" y1="303.44" x2="150.1" y2="337.39" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 150.1px 320.415px;" id="eljqo63661f9q" class="animable"></line><line x1="193.9" y1="303.44" x2="193.9" y2="337.39" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 193.9px 320.415px;" id="elwl1nx13rhoa" class="animable"></line><path d="M125,287.93l7.26-2.36a7.63,7.63,0,1,1-9.62-4.9,7.28,7.28,0,0,1,2.36-.37Z" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 125.003px 287.927px;" id="elctnzo35uzqb" class="animable"></path><path d="M125,287.93V280.3a7.51,7.51,0,0,1,7.26,5.27Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 128.63px 284.115px;" id="eld7p2wyh7ikk" class="animable"></path><path d="M198.5,287.93l7.26-2.36a7.63,7.63,0,1,1-9.61-4.9,7.22,7.22,0,0,1,2.35-.37Z" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 198.503px 287.929px;" id="elf5mpul1bksk" class="animable"></path><path d="M198.5,287.93V280.3a7.5,7.5,0,0,1,7.26,5.27Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 202.13px 284.115px;" id="el12ubeydzxsu" class="animable"></path><path d="M149.52,287.93v7.63a7.63,7.63,0,1,1,0-15.26h0Z" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 145.705px 287.93px;" id="elsa68841giz" class="animable"></path><path d="M149.52,287.93V280.3a7.63,7.63,0,1,1,0,15.26h0Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 153.335px 287.93px;" id="elopdhi126kua" class="animable"></path><path d="M174,287.93l7.26,2.36a7.63,7.63,0,1,1-14.52-4.72A7.51,7.51,0,0,1,174,280.3Z" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 173.812px 287.935px;" id="eld3a8c3li4og" class="animable"></path><path d="M174,287.93V280.3a7.63,7.63,0,0,1,7.64,7.63,7.29,7.29,0,0,1-.38,2.36Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 177.82px 285.295px;" id="eldsjvqjwr8gf" class="animable"></path><path d="M223,287.93l7.26,2.36a7.63,7.63,0,1,1-14.52-4.72A7.51,7.51,0,0,1,223,280.3Z" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 222.813px 287.932px;" id="el8eo2f84m1k7" class="animable"></path><path d="M223,287.93V280.3a7.62,7.62,0,0,1,7.63,7.63,7.28,7.28,0,0,1-.37,2.36Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 226.815px 285.295px;" id="elqcqmrz1bkr" class="animable"></path><rect x="217.82" y="357.2" width="6.68" height="2.26" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 221.16px 358.33px;" id="elwuhwz0ipdug" class="animable"></rect><rect x="210.4" y="345.91" width="6.68" height="13.55" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 213.74px 352.685px;" id="elkvd6g4zqm1j" class="animable"></rect><rect x="202.99" y="350.78" width="6.68" height="8.69" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 206.33px 355.125px;" id="el9wao96ua44t" class="animable"></rect><rect x="195.57" y="344" width="6.68" height="15.46" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 198.91px 351.73px;" id="elr5gleaznkfb" class="animable"></rect><rect x="188.15" y="355.47" width="6.68" height="4" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 191.49px 357.47px;" id="elwuon90eww2f" class="animable"></rect><rect x="180.73" y="354.25" width="6.68" height="5.21" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 184.07px 356.855px;" id="el6at4qiw0yfj" class="animable"></rect><rect x="173.31" y="349.04" width="6.68" height="10.43" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 176.65px 354.255px;" id="elq6ndea2m4yj" class="animable"></rect><rect x="165.89" y="357.73" width="6.68" height="1.74" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 169.23px 358.6px;" id="el400qfdb30bx" class="animable"></rect><rect x="158.47" y="345.91" width="6.68" height="13.55" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 161.81px 352.685px;" id="elmnse9mkg16" class="animable"></rect><rect x="151.05" y="348.52" width="6.68" height="10.95" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 154.39px 353.995px;" id="elyvxaob2e2vi" class="animable"></rect><rect x="143.64" y="358.94" width="6.68" height="0.52" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 146.98px 359.2px;" id="el8w061fbi3hr" class="animable"></rect><rect x="136.22" y="358.77" width="6.68" height="0.69" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 139.56px 359.115px;" id="elmguakqj7nx" class="animable"></rect><rect x="128.8" y="350.78" width="6.68" height="8.69" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 132.14px 355.125px;" id="elkqbyrx4tzfq" class="animable"></rect><rect x="121.38" y="357.73" width="6.68" height="1.74" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 124.72px 358.6px;" id="elhemsgl0ka2m" class="animable"></rect><rect x="113.96" y="355.99" width="6.68" height="3.48" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 117.3px 357.73px;" id="ellv6jqinyc7i" class="animable"></rect><g id="elnv7x7blujnb"><rect x="265.03" y="190.5" width="148.47" height="111.9" rx="8.55" style="opacity: 0.2; transform-origin: 339.265px 246.45px;" class="animable"></rect></g><rect x="259.88" y="184.62" width="148.47" height="111.9" rx="8.55" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 334.115px 240.57px;" id="el2rxwihyizq2" class="animable"></rect><rect x="391.3" y="272.17" width="7.7" height="8.54" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 395.15px 276.44px;" id="elt1omeah1dd" class="animable"></rect><rect x="382.74" y="229.47" width="7.7" height="51.23" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 386.59px 255.085px;" id="eldj30xk7oi0r" class="animable"></rect><rect x="374.18" y="247.87" width="7.7" height="32.84" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 378.03px 264.29px;" id="el3pgoff7t3an" class="animable"></rect><rect x="365.63" y="222.25" width="7.7" height="58.46" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 369.48px 251.48px;" id="elu0hzqf7sja" class="animable"></rect><rect x="357.07" y="265.6" width="7.7" height="15.11" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 360.92px 273.155px;" id="el55lovue6gm" class="animable"></rect><rect x="348.51" y="261" width="7.7" height="19.7" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 352.36px 270.85px;" id="eltd5uws6ybx" class="animable"></rect><rect x="339.96" y="241.3" width="7.7" height="39.41" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 343.81px 261.005px;" id="ellpd285alssr" class="animable"></rect><rect x="331.4" y="274.14" width="7.7" height="6.57" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 335.25px 277.425px;" id="el9cm71rh5ca8" class="animable"></rect><rect x="322.84" y="229.47" width="7.7" height="51.23" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 326.69px 255.085px;" id="el1axfylimbix" class="animable"></rect><rect x="314.29" y="239.33" width="7.7" height="41.38" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 318.14px 260.02px;" id="el56i1p9f0lhh" class="animable"></rect><rect x="305.73" y="278.73" width="7.7" height="1.97" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 309.58px 279.715px;" id="el62tqvb9pjh3" class="animable"></rect><rect x="297.17" y="278.08" width="7.7" height="2.63" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 301.02px 279.395px;" id="elnk3cm2tib3" class="animable"></rect><rect x="288.61" y="247.87" width="7.7" height="32.84" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 292.46px 264.29px;" id="el4bwmluuaglo" class="animable"></rect><rect x="280.06" y="274.14" width="7.7" height="6.57" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 283.91px 277.425px;" id="elydfkumpqyms" class="animable"></rect><rect x="271.5" y="267.57" width="7.7" height="13.14" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 0.75px; transform-origin: 275.35px 274.14px;" id="eli9z8gx9jyka" class="animable"></rect><rect x="272.5" y="208" width="127" height="6.5" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 336px 211.25px;" id="elboqv1okyw6i" class="animable"></rect><rect x="305.96" y="208.47" width="20.6" height="5.55" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 316.26px 211.245px;" id="elyvp5xa31abr" class="animable"></rect><rect x="327.39" y="208.47" width="38.69" height="5.55" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 346.735px 211.245px;" id="eldl5y6oxt31e" class="animable"></rect><g id="elljjwuknjad"><rect x="277.16" y="69.61" width="120.14" height="90.55" rx="8.55" style="opacity: 0.2; transform-origin: 337.23px 114.885px;" class="animable"></rect></g><rect x="272.74" y="63.73" width="120.14" height="90.55" rx="8.55" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 332.81px 109.005px;" id="elhdo1np01rv" class="animable"></rect><line x1="278.32" y1="145.8" x2="391.12" y2="145.8" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 334.72px 145.8px;" id="el7ynerwvamo9" class="animable"></line><line x1="278.32" y1="145.8" x2="278.32" y2="147.47" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 278.32px 146.635px;" id="elkt587k9w1u" class="animable"></line><line x1="285.84" y1="145.8" x2="285.84" y2="147.47" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 285.84px 146.635px;" id="ell22z5rhai7g" class="animable"></line><line x1="293.36" y1="145.8" x2="293.36" y2="147.47" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 293.36px 146.635px;" id="elued71geaqsg" class="animable"></line><line x1="300.88" y1="145.8" x2="300.88" y2="147.47" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 300.88px 146.635px;" id="el8ls9ickn60b" class="animable"></line><line x1="308.4" y1="145.8" x2="308.4" y2="147.47" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 308.4px 146.635px;" id="elaip9hvgr91l" class="animable"></line><line x1="315.92" y1="145.8" x2="315.92" y2="147.47" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 315.92px 146.635px;" id="elzk2pfii4i3" class="animable"></line><line x1="323.44" y1="145.8" x2="323.44" y2="147.47" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 323.44px 146.635px;" id="el1y5aa5wfhna" class="animable"></line><line x1="330.96" y1="145.8" x2="330.96" y2="147.47" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 330.96px 146.635px;" id="elq7piaynvzh" class="animable"></line><line x1="338.48" y1="145.8" x2="338.48" y2="147.47" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 338.48px 146.635px;" id="elkksdnskaoj7" class="animable"></line><line x1="346" y1="145.8" x2="346" y2="147.47" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 346px 146.635px;" id="elfp0qk8z27p" class="animable"></line><line x1="353.52" y1="145.8" x2="353.52" y2="147.47" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 353.52px 146.635px;" id="elj1fz10qif7q" class="animable"></line><line x1="361.04" y1="145.8" x2="361.04" y2="147.47" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 361.04px 146.635px;" id="el2e53wt4spar" class="animable"></line><line x1="368.56" y1="145.8" x2="368.56" y2="147.47" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 368.56px 146.635px;" id="elg4uftf40ng" class="animable"></line><line x1="376.08" y1="145.8" x2="376.08" y2="147.47" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 376.08px 146.635px;" id="elws0bczf63z" class="animable"></line><line x1="383.6" y1="145.8" x2="383.6" y2="147.47" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 383.6px 146.635px;" id="elvuuq2zfz7lr" class="animable"></line><line x1="391.12" y1="145.8" x2="391.12" y2="147.47" style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-width: 0.5px; transform-origin: 391.12px 146.635px;" id="el3ozb71tq0pi" class="animable"></line><path d="M282.08,144.44H387.36V129.89l-7.45-14.4a1.19,1.19,0,0,1-.1-.32l-6.62-42.71a.8.8,0,0,0-1.6,0l-6.74,52.14a1,1,0,0,1-.35.64l-6.49,5a.76.76,0,0,1-1.16-.33l-6.54-13.49a.75.75,0,0,0-1.31-.17L342.24,125l-7.52,9.7L327.2,125l-6.63-8.55a.76.76,0,0,0-1.36.3l-7,21.83-7.52-38.91-7.52,42.79-7.52-5.82-6-16.9c-.34-1-1.56-.68-1.56.36Z" style="fill: rgb(94, 128, 183); transform-origin: 334.72px 108.05px;" id="eledploddomj8" class="animable"></path><path d="M387.36,144.47H282.08V132l7.44-12.38a.73.73,0,0,0,.1-.28l6.62-36.73a.82.82,0,0,1,1.61,0l6.73,44.84a.86.86,0,0,0,.36.55l6.49,4.32a.81.81,0,0,0,1.16-.28l6.53-11.6a.81.81,0,0,1,1.31-.14l6.77,7.5,7.52,8.34,7.52-8.34,6.62-7.35a.82.82,0,0,1,1.37.26l7,18.77h7.52l7.52,3.34,7.52-5,6-14.53a.81.81,0,0,1,1.57.31Z" style="fill: rgb(38, 50, 56); transform-origin: 334.72px 113.208px;" id="elnf8vkgfur9a" class="animable"></path><line x1="339.09" y1="75.8" x2="362.39" y2="75.8" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 350.74px 75.8px;" id="elhy5cfybyx89" class="animable"></line><line x1="339.09" y1="81.26" x2="362.39" y2="81.26" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 350.74px 81.26px;" id="el8vbur378c6j" class="animable"></line><line x1="339.09" y1="86.71" x2="362.39" y2="86.71" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 350.74px 86.71px;" id="elpu2xacqszal" class="animable"></line><line x1="339.09" y1="92.17" x2="362.39" y2="92.17" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 350.74px 92.17px;" id="elbswo88r2zho" class="animable"></line><line x1="339.09" y1="97.62" x2="362.39" y2="97.62" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 350.74px 97.62px;" id="el4bd9papgedc" class="animable"></line><line x1="339.09" y1="103.08" x2="362.39" y2="103.08" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 350.74px 103.08px;" id="el1974bkg1529" class="animable"></line><line x1="333.79" y1="75.8" x2="336.71" y2="75.8" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 335.25px 75.8px;" id="elcc2yz9htst" class="animable"></line><line x1="333.79" y1="81.26" x2="336.71" y2="81.26" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 335.25px 81.26px;" id="elhp0jkiqr2hn" class="animable"></line><line x1="333.79" y1="86.71" x2="336.71" y2="86.71" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 335.25px 86.71px;" id="elyaxpb7gq3xo" class="animable"></line><line x1="333.79" y1="92.17" x2="336.71" y2="92.17" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 335.25px 92.17px;" id="el7yvxhrhni73" class="animable"></line><line x1="333.79" y1="97.62" x2="336.71" y2="97.62" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 335.25px 97.62px;" id="eleepnco8bjsj" class="animable"></line><line x1="333.79" y1="103.08" x2="336.71" y2="103.08" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 335.25px 103.08px;" id="el1trq02rf3oj" class="animable"></line></g><g id="freepik--Shadow--inject-8" class="animable" style="transform-origin: 247.5px 418.5px;"><ellipse cx="247.5" cy="418.5" rx="59.44" ry="29.5" style="fill: rgb(94, 128, 183); transform-origin: 247.5px 418.5px;" id="ele2lyxrpxh3n" class="animable"></ellipse><g id="elthkg2h7w8f"><ellipse cx="247.5" cy="418.5" rx="59.44" ry="29.5" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 247.5px 418.5px;" class="animable"></ellipse></g></g><g id="freepik--Character--inject-8" class="animable animator-active" style="transform-origin: 254.651px 291.484px;"><path d="M227.53,196.12s-15.26,54.43-15.26,58.62c0,3.57,5,10.7,10.52,7.84s6.77-11.76,6.77-11.76Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 220.915px 229.681px;" id="eljchibjwgm8" class="animable"></path><path d="M268.35,419.08s-7.81,10.55-8.4,15,5.45,4.8,8.11,2.73,8.2-15.57,8.2-15.57Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 268.085px 428.555px;" id="elgebapol0gor" class="animable"></path><path d="M225.73,393.68s-13.37,5.62-13.37,8.83,6.95,2.4,12,.53,13.1-5.08,13.1-5.08S229.74,392.88,225.73,393.68Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 224.91px 399.138px;" id="el4gsn7szfegd" class="animable"></path><path d="M229.92,266.68l-.45,17.38S226,315.88,224.39,333s3.48,56.42,3.48,56.42l-2.41,2.4v2.41l12,3.74a52.93,52.93,0,0,0,1.07-7.49v-4l12.57-75.13s9.89,75.94,11.5,84.76,4,18.18,4,18.18l-.8,2.67,1.06,4.82,8.29,2.14a15.24,15.24,0,0,0,2.41-7.22c.53-4.82.8-16.05.8-16.05s-.53-39,1.34-65.5a309.07,309.07,0,0,0-.54-48.93l-1.33-17.64A65.7,65.7,0,0,1,229.92,266.68Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 252.247px 345.3px;" id="el40h62v6b5k7" class="animable"></path><polyline points="251.13 311.33 249.79 301.44 244.45 295.83" style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 247.79px 303.58px;" id="elu4h2rusgvih" class="animable"></polyline><path d="M269.85,276.31s-3.75,6.95,6.41,10.16" style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 272.717px 281.39px;" id="elmneml4cw6vg" class="animable"></path><line x1="276.26" y1="289.68" x2="276.26" y2="413.2" style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 276.26px 351.44px;" id="el0p5ro1o6i7h" class="animable"></line><path d="M242.57,277.91l1.07,6.42s-2.67,4.81-1.6,6.95" style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 242.714px 284.595px;" id="elsccey9h38h9" class="animable"></path><path d="M247.93,189.18s-20.05,5.87-20.4,6.94,2.39,70.56,2.39,70.56,5.35,8.2,20,9.45,28.52-6.42,28.52-6.42L288,206.44s-23-15.69-24.6-16.05S252.39,187.93,247.93,189.18Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 257.75px 232.527px;" id="elazietzgcpnc" class="animable"></path><path d="M246.55,202.54l4.76,11.68,8.14-9.22s-.61-5.84-6-6.45A6.3,6.3,0,0,0,246.55,202.54Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 253px 206.344px;" id="elv0q2f2hdsml" class="animable"></path><path d="M247.93,189.18l-8.45,13.36s4.92-1.23,7.22.77,4.92,4.15,4.92,4.15,4-3.23,7.22-2.15a23.36,23.36,0,0,1,6.14,3.38s2-13.21-.61-19.2S253.46,181.34,247.93,189.18Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 252.596px 196.399px;" id="elnfvaqy2rlnn" class="animable"></path><path d="M250.08,190.71a109.83,109.83,0,0,0-.15,11.68c.3,4.92,1.84,6,3.68,2.77s6-13.06,6-15.83a48.6,48.6,0,0,1,.3-5.22S253.46,191,250.08,190.71Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 254.875px 195.556px;" id="elc49kqiwpk6" class="animable"></path><polygon points="251.31 214.22 243.32 254.93 248.7 268.45 255.31 257.39 251.31 214.22" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 249.315px 241.335px;" id="elshrtg2kuqt" class="animable"></polygon><path d="M267,251.35s-18-10.87-19.6-12.29-1.61-.36-2.86.35-5.88,6.24-6.77,8-2.32,4.28-.53,4.64,3.21-3,3.21-3.57,2.67-3.56,2.67-3.56-2.67,6.41-1.78,6.95,6.95,3,8.2,3,2.13-2.32,2.13-2.32,1.79,2.32,3.57,2.14a6.91,6.91,0,0,0,3-1.07l6.06,4.81Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 251.691px 248.394px;" id="elclztrs31yav" class="animable"></path><path d="M267,251.35s-2.24-1.35-5.2-3.16l-2.64,6.19,5.17,4.1Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 263.08px 253.335px;" id="el8wi70yinopd" class="animable"></path><path d="M243.64,253.14s.54-5.71,2.86-8.92" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 245.07px 248.68px;" id="eluv433e6cufk" class="animable"></path><path d="M246.67,253.85s1.25-5,3.75-7.84" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 248.545px 249.93px;" id="el6viayfihcdx" class="animable"></path><path d="M280.54,209.65a26.47,26.47,0,0,0-8.38,14.43L283.39,256s-13.37-5.53-15-5.7-7.31,7.66-5.7,9.44,33,19.43,34.93,17.11-8-65.41-9.09-67.73-.35-3.56-4.1-4.1" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 280.137px 241.04px;" id="el5d9ov8mhjpk" class="animable"></path><path d="M283.39,256s6.42,1.43,8.2,4.81" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 287.49px 258.405px;" id="eltqmpq52mm8" class="animable"></path><path d="M211.63,229.71l14.32,32a1.44,1.44,0,0,0,.73.71l20.49,8.4A1.37,1.37,0,0,0,249,269.1l-11.47-31a4,4,0,0,0-2.38-2.37l-21.78-7.89A1.37,1.37,0,0,0,211.63,229.71Z" style="fill: rgb(94, 128, 183); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 230.286px 249.337px;" id="elklzenqoedm" class="animable"></path><path d="M217,246.77a1.31,1.31,0,0,0-1.57,1.4,1.77,1.77,0,0,0,.49,1.24c.79.56,6.72,1,6.49-.12C222.26,248.42,219.2,247.2,217,246.77Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 218.921px 248.364px;" id="elpmkz5pyzlp" class="animable"></path><path d="M215.15,244.61a1.56,1.56,0,0,0-1.87,1.66,2.08,2.08,0,0,0,.59,1.47c.93.66,8,1.19,7.7-.14C221.36,246.57,217.73,245.12,215.15,244.61Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 217.427px 246.5px;" id="elwlcwompeswm" class="animable"></path><path d="M214.59,241.43a1.7,1.7,0,0,0-2,1.81,2.28,2.28,0,0,0,.64,1.6c1,.72,8.66,1.3,8.37-.14C221.35,243.57,217.4,242,214.59,241.43Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 217.096px 243.495px;" id="eljg3tqiz21h" class="animable"></path><path d="M213.44,238.4a1.7,1.7,0,0,0-2,1.81,2.19,2.19,0,0,0,.64,1.6c1,.72,8.66,1.3,8.37-.14C220.19,240.54,216.25,239,213.44,238.4Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 215.946px 240.465px;" id="el71ktqjwsv3a" class="animable"></path><path d="M240.33,167.6s1.2,12.24,3.88,17.91,3.58,8.35,6.27,8.35,7.76-3.88,10.14-7.46a58.2,58.2,0,0,0,3.29-5.37l.59-1.49s4.18-3,5.08-5.07-.9-3.58-4.18-1.79c0,0,1.19-9.25-1.2-14.92S243.62,157.46,240.33,167.6Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 255.071px 174.658px;" id="el4r1fxmm7wdr" class="animable"></path><path d="M237.08,172.25l20.16,4.11s.14,3.13-2,4.12a6.09,6.09,0,0,1-6.39-1c-1.56-1.42-1.56-4.12-1.56-4.12s-1.28-1-1.42,0a3.85,3.85,0,0,1-3.94,3.26,4.74,4.74,0,0,1-4.24-3.16A12.08,12.08,0,0,1,237.08,172.25Z" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 247.161px 176.611px;" id="eld3io3dlbajd" class="animable"></path><line x1="257.24" y1="176.36" x2="265.62" y2="171.96" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 261.43px 174.16px;" id="el8m3abjfqwl" class="animable"></line><line x1="237.08" y1="172.25" x2="240.34" y2="170.97" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 238.71px 171.61px;" id="el1e9v63mslm7" class="animable"></line><polyline points="246.02 176.22 244.6 181.48 246.31 181.9 246.73 186.02 249.43 185.31" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 247.015px 181.12px;" id="elata9itxwaw" class="animable"></polyline><path d="M249,147.91s-11.94,9.25-13.13,14.92,6.56,8.06,11.64,7.16S260,164.32,260,164.32s-4.18,6.57-.9,6.86a15.68,15.68,0,0,0,4.48,0s-1.79,3.59-.3,3.59,2.09-2.09,2.09-2.09,4.18-9.85,3-18.8S256.15,142.24,249,147.91Z" style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 252.164px 159.854px;" id="elyme5fewlx8g" class="animable"></path></g><defs>     <filter id="active" height="200%">         <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>        <feMerge>            <feMergeNode in="OUTLINE"></feMergeNode>            <feMergeNode in="SourceGraphic"></feMergeNode>        </feMerge>    </filter>    <filter id="hover" height="200%">        <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>        <feMerge>            <feMergeNode in="OUTLINE"></feMergeNode>            <feMergeNode in="SourceGraphic"></feMergeNode>        </feMerge>            <feColorMatrix type="matrix" values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 "></feColorMatrix>    </filter></defs></svg></div>
                <p class="font-serif text-lg text-black ">¡ Realiza una consulta para generar el
                    reporte !</p>
            </center>
        @else
            <div class="card ">
                <div style="text-align: center" class="card-body ">

                    <div class="table-responsive">

                        <table class="table table-striped table-sm table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-white " style="background: #5b80b7">Datos generales</th>
                                    @foreach ($data as $d)
                                        <th class="text-white text-center" style="background: #5b80b7">
                                            {{ \Carbon\Carbon::parse($d->created_at)->format('d') }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <!-- DATOS A EXTRAER DE BD.REFRIGERANTES -->
                            <tbody>

                                <tr>
                                    <td class="text-white" style="background: #7099da"><strong>Conc. Inicial
                                            °Brix</strong>
                                    </td>

                                    @foreach ($data as $d)
                                        <td class="text-center">{{ $d->concentracion_inicial }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td class="text-white" style="background: #7099da"><strong>Volumen Inicial
                                            (lts)</strong>
                                    </td>
                                    @foreach ($data as $d)
                                        <td class="text-center">{{ $d->volumen_inicial }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td class="text-white" style="background: #7099da"><strong>Volume de Recargas
                                            (lts)</strong>
                                    </td>
                                    @foreach ($data as $d)
                                        <td class="text-center">{{ $d->litros_recarga }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td class="text-white" style="background: #7099da"><strong>Conc. de Recarga
                                            °Brix</strong>
                                    </td>
                                    @foreach ($data as $d)
                                        <td class="text-center">{{ $d->concentracion_recarga }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td class="text-white" style="background: #7099da"><strong>Conc. Final
                                            °Brix</strong>
                                    </td>
                                    @foreach ($data as $d)
                                        <td class="text-center">{{ $d->concentracion_final }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td class="text-white" style="background: #7099da"><strong>pH</strong>
                                    </td>
                                    @foreach ($data as $d)
                                        <td class="text-center">{{ $d->ph }}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td class="text-white" style="background: #7099da"><strong>Litros de
                                            concentrado(Lts/día)</strong></td>
                                    @foreach ($data as $d)
                                        <td class="text-center">
                                            {{ ($d->litros_recarga * $d->concentracion_recarga * $d->maquinas->fac_refractor) / 100 }}
                                        </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td class="text-white" style="background: #7099da"><strong>Total de concentrado
                                            acumulado</strong></td>
                                    @foreach ($data as $d)
                                        <td class="text-center">{{ $num1 += $d->concentracion_recarga }}</td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <br>
    <br>
    <!-- Datos Estadisticos -->
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-5">

                @if ($data->count() == 0)
                    <center>

                    </center>
                @else
                    <div class="card ">
                        <div style="text-align: center" class="card-body ">
                            <div class="table-responsive">
                                <table class="table table-striped table-sm table-bordered table-hover">
                                    <thead>

                                    </thead>
                                    <!-- DATOS A EXTRAER DE BD.REFRIGERANTES -->
                                    <tbody>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Días
                                                    totales</strong>
                                            </td>

                                            <td class="text-center">{{ $data->count() }}</td>

                                        </tr>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Conc. Inicial
                                                    °Brix</strong>
                                            </td>

                                            <td class="text-center">{{ round($prom_con_ini, 2) }}</td>

                                        </tr>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Volumen Inicial
                                                    (lts)</strong>
                                            </td>

                                            <td class="text-center">{{ round($prom_vol_ini, 2) }}</td>

                                        </tr>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Volumen de
                                                    Recargas
                                                    (lts)</strong>
                                            </td>

                                            <td class="text-center">{{ $suma_vol_rec }}</td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif


            </div>


            <div class="col-md-2">
            </div>

            <div class="col-md-5">

                @if ($data->count() == 0)
                    <center>

                    </center>
                @else
                    <div class="card ">
                        <div style="text-align: center" class="card-body ">

                            <div class="table-responsive">
                                <table class="table table-striped table-sm table-bordered table-hover">
                                    <thead>

                                    </thead>
                                    <!-- DATOS A EXTRAER DE BD.REFRIGERANTES -->
                                    <tbody>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Conc. de
                                                    Recarga
                                                    °Brix</strong></td>

                                            <td class="text-center">{{ round($prom_con_rec, 2) }}</td>

                                        </tr>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Conc. Final
                                                    °Brix</strong>
                                            </td>

                                            <td class="text-center">{{ round($prom_con_fin, 2) }}</td>

                                        </tr>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>pH </strong>
                                            </td>

                                            <td class="text-center">{{ round($promedio_ph, 2) }}</td>

                                        </tr>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Litros de
                                                    Concentrado
                                                    (Lts/días)</strong>
                                            </td>

                                            <td class="text-center">{{ round($promedio_concentrado, 2) }}</td>

                                        </tr>
                                        <tr>
                                            <td class="text-white" style="background: #5e80b7"><strong>Total de
                                                    concentrado
                                                    acumulado</strong>
                                            </td>

                                            <td class="text-center">{{ $num1 }}</td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif


            </div>
        </div>
    </div>

    <?php
    $arr_espuma_aceite = [
        'Si' => 'red',
        'No' => 'green',
        'si' => 'red',
        'no' => 'green',
    ];

    $arr_aroma = [
        'Regular' => 'yellow',
        'Malo' => 'red',
        'Bueno' => 'green',
        'regular' => 'yellow',
        'malo' => 'red',
        'bueno' => 'green',
    ];
    ?>

    <br>

    <!-- Tabla comentarios -->
    <div class="col-md-12">
        @if ($data->count() == 0)
        @else
            <div class="card ">
                <div style="text-align: center" class="card-body ">
                    <strong>Observaciones</strong>
                </div>
            </div>
            <div class="card ">
                <div style="text-align: center" class="card-body ">

                    <div id="columnas" class="table-responsive">
                        @foreach ($data as $da)
                            <table class="table table-bordered table-sm"
                                style="border: 2px solid rgb(119, 119, 119);">
                                <tbody>
                                    <tr>
                                        <td style="border: 2px solid rgb(119, 119, 119);"><strong>Dia:</strong>
                                            {{ \Carbon\Carbon::parse($da->created_at)->format('d') }}
                                        </td>
                                        <td style="border: 2px solid rgb(119, 119, 119);" colspan="6"
                                            rowspan="2">{{ $da->comentarios }}</td>
                                    </tr>
                                    <tr>
                                        <td style="border: 2px solid rgb(119, 119, 119);">
                                            <strong>Mes:</strong>{{ \Carbon\Carbon::parse($da->created_at)->format('m') }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border: 2px solid rgb(119, 119, 119);" rowspan="2">
                                            <strong>Año:</strong>
                                            {{ \Carbon\Carbon::parse($da->created_at)->format('Y') }}
                                        </td>
                                        <td style="border: 2px solid rgb(119, 119, 119);"><strong>Espuma</strong></td>
                                        <td style="border: 2px solid rgb(119, 119, 119);" class="<?php echo $arr_espuma_aceite[$da->exceso_espuma]; ?>">
                                            {{ $da->exceso_espuma }}</td>
                                        <td style="border: 2px solid rgb(119, 119, 119);"><strong>Mal olor</strong>
                                        </td>
                                        <td style="border: 2px solid rgb(119, 119, 119);" class="<?php echo $arr_aroma[$da->aroma]; ?>">
                                            {{ $da->aroma }}</td>
                                        <td style="border: 2px solid rgb(119, 119, 119);"><strong>A.Entramp.</strong>
                                        </td>
                                        <td style="border: 2px solid rgb(119, 119, 119);" class="<?php echo $arr_espuma_aceite[$da->aceites_entrampados]; ?>">
                                            {{ $da->aceites_entrampados }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="6"><strong>Técnico:</strong>
                                            {{ $da->usuarios->name ?? 'No existe' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        @endforeach
                    </div>
                </div>
            </div>


        @endif
    </div>

    <br>
    <!-- Graficas 2 -->
    <div class="col-md-12">

        @if ($data->count() == 0)
            <center>

            </center>
        @else
            <div class="card ">
                <div style="text-align: center" class="card-body ">
                    <strong>Estado del soluble</strong>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <figure class="highcharts-figure">
                            <div id="grafica_espuma"></div>
                        </figure>
                    </div>
                    <div class="col-sm">
                        <figure class="highcharts-figure">
                            <div id="grafica_olor"></div>
                        </figure>
                    </div>
                    <div class="col-sm">
                        <figure class="highcharts-figure">
                            <div id="grafica_entram"></div>
                        </figure>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <br>

</div>






<link rel="stylesheet" href="{{ asset('css/reportes.css') }}" />


<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    window.addEventListener('data_vacia', function(e) {
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: '¡Algo salió mal!',
            footer: 'No hay datos para mostrar'
        })
    });
</script>

<script>
    Highcharts.chart('grafica', {

        title: {
            text: 'Estado general de la maquina'
        },



        yAxis: {
            title: {
                text: 'Concentración'
            }
        },

        xAxis: {
            accessibility: {
                rangeDescription: 'Range: 1 to 30 '
            }
        },

        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        plotOptions: {
            series: {
                label: {
                    connectorAllowed: true
                },
                pointStart: 1
            }
        },

        series: [{
            name: 'Concentración Inicial',
            data: <?= $resul ?>
        }, {
            name: 'Minimo',
            data: <?= $resul3 ?>
        }, {
            name: 'Maximo',
            data: <?= $resul4 ?>
        }, {
            name: 'Concentración Final',
            data: <?= $resul2 ?>
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }

    });

    Highcharts.chart('grafica_espuma', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Espuma'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -180,
                endAngle: 180,
                center: ['50%', '50%'],
                size: '100%'
            }
        },
        series: [{
            type: 'pie',
            name: 'Espuma',
            innerSize: '50%',
            data: [
                ['Si', <?= $espuma_si ?>],
                ['', 0],
                ['No', <?= $espuma_no ?>],
            ]
        }]
    });

    Highcharts.chart('grafica_olor', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Mal olor'

        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -180,
                endAngle: 180,
                center: ['50%', '50%'],
                size: '100%'
            }
        },
        series: [{
            type: 'pie',
            name: 'Mal olor',
            innerSize: '50%',
            data: [
                ['Malo', <?= $olor_malo ?>],
                ['', 0],
                ['Regular', <?= $olor_regular ?>],
                ['Bueno', <?= $olor_bueno ?>],
            ]
        }]
    });

    Highcharts.chart('grafica_entram', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Aceite entrampado'

        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white'
                    }
                },
                startAngle: -180,
                endAngle: 180,
                center: ['50%', '50%'],
                size: '100%'
            }
        },
        series: [{
            type: 'pie',
            name: 'Aceite entrampado',
            innerSize: '50%',
            data: [

                ['Si', <?= $aceite_si ?>],
                ['', 0],
                ['No', <?= $aceite_no ?>],
            ]
        }]
    });
</script>
