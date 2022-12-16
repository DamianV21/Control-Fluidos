<div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap');
        .border{
            border-radius: 20px;
            position: relative;
            display:block;
            margin-top:0.5em;
        }
    </style>
    <!-- Formulario-Consulta -->
    <div class="card shadow mb-4">
        <div class="card-body text-sm">

            <div class="row">
                <div class="col-md-3">
                    <h6><strong>Elige una Planta</strong></h6>
                    <div class="form-group">
                        <select wire:model="planta" class="form-control border">
                            <option value="0">Ninguno</option>
                            @foreach ($plantas as $planta)
                                <option value="{{ $planta->id }}">{{ $planta->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6><strong>Elige una Área</strong></h6>
                    <div class="form-group">
                        <select wire:model="area" class="form-control border">
                            <option selected value="0">Ninguno</option>
                            @foreach ($areas as $area)
                                <option value="{{ $area->id }}">{{ $area->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6><strong>Fecha desde</strong></h6>
                    <div class="form-group">
                        <input type="date" wire:model="dateFrom" class="form-control flatpickr border"
                            placeholder="Click para elegir">
                    </div>
                </div>
                <div class="col-md-3">
                    <h6><strong>Fecha hasta</strong></h6>
                    <div class="form-group">
                        <input type="date" wire:model="dateTo" class="form-control flatpickr border"
                            placeholder="Click para elegir">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">



                </div>
                <div class="col-md-3">
                </div>
                <div class="col-md-3">
                </div>
                <div class="col-md-3 pt-2">
                    <button wire:click="Consulta()" class="btn  btn-block text-sm text-white"
                        style="background-color: #5e80b7;"> <i class="fa fa-search"></i>
                        Consultar
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!-- Informacion de la consulta obtenida -->
    @if ($data->count() == 0)
    @else
        <div class="card shadow mb-4">
            <div class="card-body tracking-wider" style="text-align: center; font-family: 'Roboto', sans-serif; ">

                <h1 class="text-lg" ><strong> REPORTE GENERAL ÁREA</strong></h1>
                <span>Desde: <strong>{{ \Carbon\Carbon::parse($dateFrom)->formatLocalized('%d de %B') }}</strong>   Hasta:
                    <strong>{{ \Carbon\Carbon::parse($dateTo)->formatLocalized('%d de %B') }}</strong></span>
                    <br>
                <p>Nombre de Planta: {{ $nombre_planta }}</p>
                <p>Nombre de Área: {{ $nombre_area }}</p>
            </div>
        </div>
    @endif


    <!-- Tabala general de datos -->
    <div class="card shadow mb-4">
        <div class="card-body text-sm">
            @if ($data->count() == 0)
                <center>
                    <svg class="animated" width="400px" id="freepik_stories-site-stats"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                        <style>
                            svg#freepik_stories-site-stats:not(.animated) .animable {
                                opacity: 0;
                            }

                            svg#freepik_stories-site-stats.animated #freepik--Shadows--inject-14 {
                                animation: 1.5s Infinite linear shake;
                                animation-delay: 0s;
                            }

                            svg#freepik_stories-site-stats.animated #freepik--Device--inject-14 {
                                animation: 1.6s 1 forwards ease-in fadeIn, 1.5s Infinite linear floating;
                                animation-delay: 0s, 1.6s;
                            }

                            svg#freepik_stories-site-stats.animated #freepik--window--inject-14 {
                                animation: 1.8s 1 forwards ease-in slideLeft;
                                animation-delay: 0s;
                            }

                            svg#freepik_stories-site-stats.animated #freepik--Window--inject-14 {
                                animation: 1.8s 1 forwards ease-in slideLeft, 1.5s Infinite linear floating;
                                animation-delay: 0s, 1.8s;
                            }

                            svg#freepik_stories-site-stats.animated #freepik--magnifying-glass--inject-14 {
                                animation: 1.6s 1 forwards ease-out lightSpeedRight, 1.5s Infinite linear shake;
                                animation-delay: 0s, 1.6s;
                            }

                            svg#freepik_stories-site-stats.animated #freepik--character--inject-14 {
                                animation: 1.7s 1 forwards linear zoomOut;
                                animation-delay: 0s;
                            }

                            svg#freepik_stories-site-stats.animated #freepik--Character--inject-14 {
                                animation: 1.7s 1 forwards linear zoomOut;
                                animation-delay: 0s;
                            }

                            @keyframes shake {

                                10%,
                                90% {
                                    transform: translate3d(-1px, 0, 0);
                                }

                                20%,
                                80% {
                                    transform: translate3d(2px, 0, 0);
                                }

                                30%,
                                50%,
                                70% {
                                    transform: translate3d(-4px, 0, 0);
                                }

                                40%,
                                60% {
                                    transform: translate3d(4px, 0, 0);
                                }
                            }

                            @keyframes fadeIn {
                                0% {
                                    opacity: 0;
                                }

                                100% {
                                    opacity: 1;
                                }
                            }

                            @keyframes floating {
                                0% {
                                    opacity: 1;
                                    transform: translateY(0px);
                                }

                                50% {
                                    transform: translateY(-10px);
                                }

                                100% {
                                    opacity: 1;
                                    transform: translateY(0px);
                                }
                            }

                            @keyframes slideLeft {
                                0% {
                                    opacity: 0;
                                    transform: translateX(-30px);
                                }

                                100% {
                                    opacity: 1;
                                    transform: translateX(0);
                                }
                            }

                            @keyframes lightSpeedRight {
                                from {
                                    transform: translate3d(50%, 0, 0) skewX(-20deg);
                                    opacity: 0;
                                }

                                60% {
                                    transform: skewX(10deg);
                                    opacity: 1;
                                }

                                80% {
                                    transform: skewX(-2deg);
                                }

                                to {
                                    opacity: 1;
                                    transform: translate3d(0, 0, 0);
                                }
                            }

                            @keyframes zoomOut {
                                0% {
                                    opacity: 0;
                                    transform: scale(1.5);
                                }

                                100% {
                                    opacity: 1;
                                    transform: scale(1);
                                }
                            }
                        </style>
                        <g id="freepik--Floor--inject-14" class="animable" style="transform-origin: 249.81px 348.83px;">
                            <ellipse id="freepik--floor--inject-14" cx="249.81" cy="348.83" rx="231.54"
                                ry="133.68" style="fill: rgb(240, 240, 240); transform-origin: 249.81px 348.83px;"
                                class="animable"></ellipse>
                        </g>
                        <g id="freepik--Shadows--inject-14" class="animable"
                            style="transform-origin: 245.244px 347.697px;">
                            <path id="freepik--Shadow--inject-14"
                                d="M323.9,384.07a12.67,12.67,0,0,0-1.85-6.5h0c-.25-.42-.51-.82-.79-1.21l-.05-.06a12.81,12.81,0,0,0-.86-1.06l-.09-.09a11.36,11.36,0,0,0-.93-.91l-.09-.07a9.09,9.09,0,0,0-1-.76l-.6-.33-.27-.12-.31-.14a4.43,4.43,0,0,0-.44-.14l-.12,0a3.39,3.39,0,0,0-.52-.1h0a3.27,3.27,0,0,0-1.91.3h0c-5.29,2.65-35.77,22.05-49.8,30.79l-6.95,4.22a1.58,1.58,0,0,0-.52.48.35.35,0,0,1-.05.08,2.11,2.11,0,0,0-.16.3,1.29,1.29,0,0,0-.07.21,2.13,2.13,0,0,0-.08.27l0,.18-1.15.63-1,.56a40.06,40.06,0,0,0-7.92-5.88c-9.62-5.55-22.36-8.61-35.88-8.61s-26.26,3.06-35.88,8.61c-10,5.75-15.44,13.52-15.44,21.87s5.48,16.11,15.44,21.87c9.62,5.55,22.36,8.6,35.88,8.6s26.26-3.05,35.88-8.6c10-5.76,15.44-13.52,15.44-21.87a20.11,20.11,0,0,0-3.26-10.81l.92-.49a2.07,2.07,0,0,0,2,.19l0,0c4.76-2.62,51.16-22.4,60.65-27.49h0C323.12,387.32,323.83,386,323.9,384.07Zm-82,56.74c-8.3,4.79-19.49,7.43-31.49,7.43s-23.19-2.64-31.49-7.43c-7.13-4.12-11.06-9.19-11.06-14.27s3.93-10.16,11.06-14.27c8.3-4.8,19.48-7.44,31.49-7.44s23.19,2.64,31.49,7.44c7.13,4.11,11.06,9.18,11.06,14.27S249,436.69,241.85,440.81Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 241.535px 414.803px;"
                                class="animable"></path>
                            <path id="freepik--shadow--inject-14"
                                d="M331,266.6l-47.06-27.23a9.57,9.57,0,0,0-8.66,0l-239.09,138c-2.39,1.38-2.39,3.62,0,5l47.07,27.23a9.57,9.57,0,0,0,8.66,0l89.59-51.73,13.78,8c7.29,4.21,19.11,4.21,26.41,0l41.05-23.53c7.3-4.21,7.3-11,0-15.25l-13.77-8,82-47.54C333.38,270.22,333.38,268,331,266.6Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 183.59px 324.485px;"
                                class="animable"></path>
                            <ellipse id="freepik--shadow--inject-14" cx="409.94" cy="368.86" rx="46.15"
                                ry="26.65" style="fill: rgb(224, 224, 224); transform-origin: 409.94px 368.86px;"
                                class="animable"></ellipse>
                        </g>
                        <g id="freepik--Plant--inject-14" class="animable"
                            style="transform-origin: 448.435px 329.826px;">
                            <g id="freepik--Plants--inject-14" class="animable"
                                style="transform-origin: 448.435px 329.826px;">
                                <path
                                    d="M436.16,338.77c0-6.25-1.24-17.76,4-28.56,3.84-7.83,10.69-15.43,17.07-14.67,5.93.7,6.47,9.83.79,16.08s-12.9,14.9-14.48,28.71l-4.09,10.26Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 449.013px 323.039px;"
                                    id="ell4h31004yu" class="animable"></path>
                                <g id="ela6oeyv5aibl">
                                    <g style="opacity: 0.2; transform-origin: 449.013px 323.039px;" class="animable">
                                        <path
                                            d="M436.16,338.77c0-6.25-1.24-17.76,4-28.56,3.84-7.83,10.69-15.43,17.07-14.67,5.93.7,6.47,9.83.79,16.08s-12.9,14.9-14.48,28.71l-4.09,10.26Z"
                                            id="el7ktxe0qj6l3" class="animable"
                                            style="transform-origin: 449.013px 323.039px;"></path>
                                    </g>
                                </g>
                                <path
                                    d="M438.29,343.16a.45.45,0,0,0,.36-.45c-.72-17.76,5.06-32.51,16.71-42.64a.43.43,0,1,0-.57-.65c-11.86,10.31-17.74,25.29-17,43.33a.44.44,0,0,0,.45.42Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 446.619px 321.24px;"
                                    id="eljmk7lcq83gb" class="animable"></path>
                                <path
                                    d="M435,361.1a22.06,22.06,0,0,0,11,3.06c6.69.16,9.16-3.36,9.16-3.36s-3.41-5.79-7.35-7a36.94,36.94,0,0,1,12,3.13s4-.47,4.78-6.79c0,0-2.86-3.35-11.07-4.27a26.45,26.45,0,0,1,11.87-1c.55.14,1.72-8,1.91-11.78s-1.27-3.49-4.21-3.87-12.66.44-14.23,2.24-1.75,7.26-1.75,7.26-2.11-2.8-2.06-5.55a10.26,10.26,0,0,0-6,1c-3,1.54-4,2.77-4.16,5.1s-.35,5.83.59,8.54c0,0-2.77-4.47-2.63-8.35A41.34,41.34,0,0,0,430,345.3C428.69,348.7,430.24,356.93,435,361.1Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 448.435px 346.647px;"
                                    id="elf5j0kx26q1" class="animable"></path>
                                <path
                                    d="M435.14,361.52a.42.42,0,0,0,.3-.28c3.8-11.67,21.71-27,28.55-29.34a.42.42,0,0,0,.27-.55.42.42,0,0,0-.55-.27c-7,2.35-25.22,18-29.1,29.89a.44.44,0,0,0,.28.55A.43.43,0,0,0,435.14,361.52Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 449.438px 346.296px;"
                                    id="elyh6x3p34llr" class="animable"></path>
                            </g>
                        </g>
                        <g id="freepik--Device--inject-14" class="animable"
                            style="transform-origin: 192.9px 203.081px;">
                            <g id="freepik--device--inject-14" class="animable"
                                style="transform-origin: 192.9px 203.081px;">
                                <g id="freepik--Monitor--inject-14" class="animable"
                                    style="transform-origin: 192.9px 203.081px;">
                                    <path
                                        d="M221.68,362l35.38-20.46c3.64-2.1,5.46-4.86,5.46-7.62s0-4.92,0-4.92l-33.29-18.89a7.82,7.82,0,0,1-3.52-6.1V260.34L164,296.05v43.61a7.77,7.77,0,0,0,3.53,6.1L195.27,362C202.56,366.16,214.39,366.16,221.68,362Z"
                                        style="fill: rgb(55, 71, 79); transform-origin: 213.26px 312.73px;"
                                        id="el5vublkbo02s" class="animable"></path>
                                    <path
                                        d="M178.78,347.38v4.9l-11.32-6.52a7.79,7.79,0,0,1-3.52-6.1V296.05l11.77-6.79c.24,3,.51,6.08.75,9.09l-8.25,4.77V337.2a7.73,7.73,0,0,0,3.52,6.1Z"
                                        style="fill: rgb(38, 50, 56); transform-origin: 171.36px 320.77px;"
                                        id="ell7prehx6rt" class="animable"></path>
                                    <path
                                        d="M168.21,337.21a7.79,7.79,0,0,0,3.52,6.1L195.27,357c7.29,4.21,19.11,4.21,26.41,0l35.39-20.45c7.29-4.21,7.29-11,0-15.24L233.52,307.6a7.77,7.77,0,0,1-3.53-6.1V267.42l-61.78,35.71Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 215.374px 313.789px;"
                                        id="elqzlasxrypbf" class="animable"></path>
                                    <g id="el5xuakwf9vqn">
                                        <path
                                            d="M240.69,311.75h0l-7.17-4.14a7.77,7.77,0,0,1-3.53-6.1V267.42l-61.78,35.71v34.08a7.79,7.79,0,0,0,3.52,6.1l7.05,4.06Z"
                                            style="opacity: 0.15; transform-origin: 204.45px 307.395px;"
                                            class="animable"></path>
                                    </g>
                                    <path
                                        d="M262.53,329v4.92c0,2.77-1.83,5.51-5.47,7.63l-35.38,20.44a26.47,26.47,0,0,1-12.6,3.13v-4.9a26.47,26.47,0,0,0,12.6-3.13l35.38-20.46C260.7,334.48,262.53,331.72,262.53,329Z"
                                        style="fill: rgb(55, 71, 79); transform-origin: 235.805px 347.06px;"
                                        id="elcr9nhjk29vu" class="animable"></path>
                                    <path
                                        d="M69,384.26a9.47,9.47,0,0,0,8.53-.16l239-138a9.71,9.71,0,0,0,4.4-7.62V29.37a9.43,9.43,0,0,0-4.13-7.46,9.44,9.44,0,0,0-8.53.15l-239,138a9.73,9.73,0,0,0-4.4,7.62V376.79A9.45,9.45,0,0,0,69,384.26Z"
                                        style="fill: rgb(69, 90, 100); transform-origin: 192.9px 203.081px;"
                                        id="el7ca4reqg9qh" class="animable"></path>
                                    <path
                                        d="M77.53,384.09l239-137.95a9.73,9.73,0,0,0,4.4-7.62V29.37c0-2.81-2-3.95-4.4-2.54l-238.95,138a9.73,9.73,0,0,0-4.4,7.62V381.55C73.13,384.36,75.1,385.5,77.53,384.09Z"
                                        style="fill: rgb(55, 71, 79); transform-origin: 197.055px 205.46px;"
                                        id="el9e003k7kjt" class="animable"></path>
                                    <path
                                        d="M81.39,353.92V175.14A5.83,5.83,0,0,1,84,170.57L310,40.12c1.45-.84,2.64-.16,2.64,1.52V220.43A5.8,5.8,0,0,1,310,225L84,355.45C82.57,356.29,81.39,355.61,81.39,353.92Z"
                                        style="fill: rgb(94, 128, 183); transform-origin: 197.015px 197.785px;"
                                        id="eljnwne4sn3ih" class="animable"></path>
                                    <g id="elvdy24hzxge">
                                        <path
                                            d="M81.39,353.92V175.14A5.83,5.83,0,0,1,84,170.57L310,40.12c1.45-.84,2.64-.16,2.64,1.52V220.43A5.8,5.8,0,0,1,310,225L84,355.45C82.57,356.29,81.39,355.61,81.39,353.92Z"
                                            style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 197.015px 197.785px;"
                                            class="animable"></path>
                                    </g>
                                    <path
                                        d="M196.55,306.65a2.6,2.6,0,0,1-1.32-.34,3.38,3.38,0,0,1-1.46-3.11,9.53,9.53,0,0,1,4.38-7.58h0a3,3,0,0,1,4.88,2.81,9.54,9.54,0,0,1-4.38,7.59A4.25,4.25,0,0,1,196.55,306.65ZM200.24,296a3.28,3.28,0,0,0-1.59.5h0a8.59,8.59,0,0,0-3.88,6.72,2,2,0,0,0,3.38,1.95,8.58,8.58,0,0,0,3.88-6.72,2.45,2.45,0,0,0-1-2.24A1.63,1.63,0,0,0,200.24,296Z"
                                        style="fill: rgb(94, 128, 183); transform-origin: 198.414px 300.786px;"
                                        id="el65jkjaklkf" class="animable"></path>
                                </g>
                            </g>
                        </g>
                        <g id="freepik--Window--inject-14" class="animable"
                            style="transform-origin: 232.739px 219.891px;">
                            <g id="freepik--window--inject-14" class="animable"
                                style="transform-origin: 232.739px 219.891px;">
                                <path
                                    d="M351.87,73.76,119.16,208V379.47a3,3,0,0,0,4.45,2.58l4.15-2.39L347.53,252.94a9.59,9.59,0,0,0,4.34-7.52Z"
                                    style="fill: rgb(240, 240, 240); transform-origin: 235.515px 228.092px;"
                                    id="ell21ebmh8w" class="animable"></path>
                                <path
                                    d="M350.87,75.49V245.42a8.64,8.64,0,0,1-3.84,6.65L127.26,378.79l-4.15,2.39a1.93,1.93,0,0,1-1,.27,2,2,0,0,1-1.37-.56,1.93,1.93,0,0,1-.6-1.42V208.54l230.71-133m1-1.73L119.16,208V379.47a3,3,0,0,0,3,3,2.89,2.89,0,0,0,1.48-.4l4.15-2.39L347.53,252.94a9.59,9.59,0,0,0,4.34-7.52V73.76Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 235.515px 228.115px;"
                                    id="elhyleaok6ret" class="animable"></path>
                                <g id="elukzfdoeag2n">
                                    <polygon
                                        points="346.35 70.58 113.62 204.76 119.16 207.96 351.87 73.76 346.35 70.58"
                                        style="fill: rgb(69, 90, 100); opacity: 0.8; transform-origin: 232.745px 139.27px;"
                                        class="animable"></polygon>
                                </g>
                                <path
                                    d="M120.72,382.09a3,3,0,0,1-1.56-2.62V208l-5.54-3.2V375.33a4.44,4.44,0,0,0,0,.63,4.6,4.6,0,0,0,2.26,3.36l4.57,2.65.23.12Z"
                                    style="fill: rgb(235, 235, 235); transform-origin: 117.164px 293.445px;"
                                    id="elqvt43dhgt4" class="animable"></path>
                                <path
                                    d="M113.62,204.84V193.27a4.81,4.81,0,0,1,2.16-3.76L344.19,57.83a4.77,4.77,0,0,1,4.32,0l1.19.69a4.78,4.78,0,0,1,2.17,3.75V73.85L119.16,208Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 232.745px 132.656px;"
                                    id="elacnqkb4oy3i" class="animable"></path>
                                <g id="elsrlsmajxxhi">
                                    <path
                                        d="M113.62,204.84V193.27a4.81,4.81,0,0,1,2.16-3.76L344.19,57.83a4.77,4.77,0,0,1,4.32,0l1.19.69a4.78,4.78,0,0,1,2.17,3.75V73.85L119.16,208Z"
                                        style="opacity: 0.3; transform-origin: 232.745px 132.656px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M119.16,196.46a4.8,4.8,0,0,1,2.16-3.76L349.71,61c1.19-.7,2.16-.14,2.16,1.24V73.85L119.16,208Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 235.515px 134.349px;"
                                    id="elgpusjfd31nl" class="animable"></path>
                                <g id="elwbio811uvic">
                                    <path
                                        d="M119.16,196.46a4.8,4.8,0,0,1,2.16-3.76L349.71,61c1.19-.7,2.16-.14,2.16,1.24V73.85L119.16,208Z"
                                        style="opacity: 0.4; transform-origin: 235.515px 134.349px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M119.79,194.32a4.47,4.47,0,0,0-.63,2.14V208l-5.53-3.19V193.26a4.43,4.43,0,0,1,.63-2.13Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 116.71px 199.565px;"
                                    id="el5h0qqdlzxuh" class="animable"></path>
                                <g id="eltleur9l7wvj">
                                    <path
                                        d="M119.79,194.32a4.47,4.47,0,0,0-.63,2.14V208l-5.53-3.19V193.26a4.43,4.43,0,0,1,.63-2.13Z"
                                        style="opacity: 0.5; transform-origin: 116.71px 199.565px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M341.71,73.33c0,1.29.91,1.82,2,1.17a4.48,4.48,0,0,0,2-3.52c0-1.29-.91-1.82-2-1.17A4.49,4.49,0,0,0,341.71,73.33Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 343.71px 72.155px;"
                                    id="elbngmo3fgwen" class="animable"></path>
                                <path
                                    d="M333.59,78c0,1.29.91,1.82,2,1.17a4.49,4.49,0,0,0,2-3.52c0-1.29-.91-1.82-2-1.17A4.49,4.49,0,0,0,333.59,78Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 335.59px 76.825px;"
                                    id="el747b1dptrv" class="animable"></path>
                                <path
                                    d="M325.46,82.71c0,1.29.91,1.82,2,1.17a4.49,4.49,0,0,0,2-3.52c0-1.29-.91-1.82-2-1.17A4.48,4.48,0,0,0,325.46,82.71Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 327.46px 81.535px;"
                                    id="elo03c86t8la" class="animable"></path>
                                <path
                                    d="M119.16,208V379.47a3,3,0,0,0,4.45,2.58l4.15-2.39,50.85-29.33V173.75L119.16,208Z"
                                    style="fill: rgb(250, 250, 250); transform-origin: 148.885px 278.087px;"
                                    id="elipml2zpccu8" class="animable"></path>
                                <polygon points="182.67 176.65 182.67 343.16 346.99 248.29 346.99 81.78 182.67 176.65"
                                    style="fill: rgb(250, 250, 250); transform-origin: 264.83px 212.47px;"
                                    id="elmpbgt4tn4z" class="animable"></polygon>
                                <path
                                    d="M165,193.87l-37.93,21.92a2.8,2.8,0,0,0-1.27,2.2v3.95c0,.81.57,1.13,1.27.73L165,200.75a2.8,2.8,0,0,0,1.27-2.2v-3.94C166.27,193.8,165.7,193.47,165,193.87Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 146.035px 208.271px;"
                                    id="el49i9ty30sz7" class="animable"></path>
                                <g id="elwbgk4t2cte">
                                    <path
                                        d="M165,193.87l-37.93,21.92a2.8,2.8,0,0,0-1.27,2.2v3.95c0,.81.57,1.13,1.27.73L165,200.75a2.8,2.8,0,0,0,1.27-2.2v-3.94C166.27,193.8,165.7,193.47,165,193.87Z"
                                        style="fill: rgb(250, 250, 250); opacity: 0.8; transform-origin: 146.035px 208.271px;"
                                        class="animable"></path>
                                </g>
                                <path
                                    d="M173.44,195.44l-1.11-1.08a5,5,0,0,0,.35-1.78,2.1,2.1,0,0,0-.83-1.92,1.29,1.29,0,0,0-1.36.06,4.45,4.45,0,0,0-1.76,3.63,2.1,2.1,0,0,0,.84,1.92,1.11,1.11,0,0,0,.59.16,1.53,1.53,0,0,0,.77-.22,3.13,3.13,0,0,0,1-1l.92.88a.39.39,0,0,0,.3.13.45.45,0,0,0,.32-.14A.43.43,0,0,0,173.44,195.44Zm-2.95,0a.48.48,0,0,1-.48.06c-.19-.11-.4-.48-.4-1.16a3.62,3.62,0,0,1,1.32-2.87.59.59,0,0,1,.31-.1.33.33,0,0,1,.17,0c.18.11.39.47.39,1.16A3.67,3.67,0,0,1,170.49,195.45Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 171.158px 193.462px;"
                                    id="elefcl2jpndpo" class="animable"></path>
                                <path
                                    d="M126.73,234.26l-.85.49s-.09,0-.09-.07v-2.3a.23.23,0,0,1,.09-.18l.85-.49s.09,0,.09.07v2.3A.23.23,0,0,1,126.73,234.26Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 126.305px 233.23px;"
                                    id="elq9i2ifi69pl" class="animable"></path>
                                <path
                                    d="M128,233.52l-.85.49c-.05,0-.09,0-.09-.07v-2.3a.21.21,0,0,1,.09-.17L128,231c.05,0,.09,0,.09.06v2.31A.22.22,0,0,1,128,233.52Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 127.575px 232.505px;"
                                    id="elaxr79zn30ck" class="animable"></path>
                                <path
                                    d="M129.28,232.78l-.85.5c-.05,0-.09,0-.09-.07V230.9a.22.22,0,0,1,.09-.17l.85-.49c.05,0,.09,0,.09.07v2.3A.19.19,0,0,1,129.28,232.78Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 128.855px 231.76px;"
                                    id="eljm2crtyac7" class="animable"></path>
                                <path
                                    d="M126.73,237.23l-.85.49s-.09,0-.09-.07v-2.3a.23.23,0,0,1,.09-.18l.85-.49s.09,0,.09.07v2.3A.23.23,0,0,1,126.73,237.23Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 126.305px 236.2px;"
                                    id="elic9g6exlmj" class="animable"></path>
                                <path
                                    d="M128,236.49l-.85.49c-.05,0-.09,0-.09-.07v-2.3a.21.21,0,0,1,.09-.17L128,234c.05,0,.09,0,.09.06v2.31A.22.22,0,0,1,128,236.49Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 127.575px 235.49px;"
                                    id="elhm38rauqvnm" class="animable"></path>
                                <path
                                    d="M129.28,235.75l-.85.5c-.05,0-.09,0-.09-.07v-2.31a.22.22,0,0,1,.09-.17l.85-.49c.05,0,.09,0,.09.07v2.3A.19.19,0,0,1,129.28,235.75Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 128.855px 234.73px;"
                                    id="elonhzy2x0wio" class="animable"></path>
                                <path
                                    d="M126.86,245.07l-1-.63s0-.12,0-.19l1-1.85c0-.09.13-.08.13,0v2.49C127,245,126.91,245.1,126.86,245.07Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 126.425px 243.706px;"
                                    id="elhwlrrt6ripf" class="animable"></path>
                                <path
                                    d="M126.42,243.66l1.38-.79v.65l-1.38.8c-.11.07-.21,0-.21-.21A.59.59,0,0,1,126.42,243.66Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 127.005px 243.608px;"
                                    id="elf89vz4mpryt" class="animable"></path>
                                <polygon points="128.06 242.72 128.53 242.45 128.53 243.1 128.06 243.37 128.06 242.72"
                                    style="fill: rgb(69, 90, 100); transform-origin: 128.295px 242.91px;"
                                    id="elqnhrnlelkr" class="animable"></polygon>
                                <path
                                    d="M129.8,242v2.41a.53.53,0,0,1-.22.45c-.11.07-.21,0-.21-.2v-2.08l-.58.33v-.65l.79-.46C129.7,241.77,129.8,241.86,129.8,242Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 129.295px 243.34px;"
                                    id="eldhtuglsfegn" class="animable"></path>
                                <path
                                    d="M127.27,250.48a4.54,4.54,0,0,0-1.45,3.9c.17,1.25.91,1.2,1,1.78,0,.07.05.09.09.07l.93-.53a.25.25,0,0,0,.1-.17c.1-.77,1.05-1.7,1.05-3.57C129,250.53,128.21,249.83,127.27,250.48Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 127.389px 253.237px;"
                                    id="elpiygj8s4e0q" class="animable"></path>
                                <path
                                    d="M127.83,257.2l-.9.52c-.06,0-.11,0-.11-.09v-.82a.28.28,0,0,1,.11-.22l.9-.52c.06,0,.11,0,.11.09V257A.27.27,0,0,1,127.83,257.2Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 127.38px 256.895px;"
                                    id="elm2w209dpw6" class="animable"></path>
                                <path
                                    d="M127.49,231a5.46,5.46,0,0,0-1.63,3.46,3.66,3.66,0,0,0,.23,1.88l-.3,1.58c0,.13,0,.19.12.11l.91-1a1.41,1.41,0,0,0,1.32-.38,5.46,5.46,0,0,0,1.63-3.46C130,231,128.84,229.91,127.49,231Zm.32,5.16c-.83.48-1.51-.17-1.51-1.46a4,4,0,0,1,1.51-3.2c.84-.48,1.52.17,1.52,1.46A4,4,0,0,1,127.81,236.18Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 127.795px 234.319px;"
                                    id="eld02hvqldnuu" class="animable"></path>
                                <path
                                    d="M127.49,261.37a5.43,5.43,0,0,0-1.63,3.45,3.68,3.68,0,0,0,.23,1.89l-.3,1.57c0,.13,0,.2.12.12l.91-1a1.41,1.41,0,0,0,1.32-.38,5.49,5.49,0,0,0,1.63-3.46C130,261.37,128.84,260.26,127.49,261.37Zm.32,5.16c-.83.48-1.51-.17-1.51-1.46a4,4,0,0,1,1.51-3.2c.84-.48,1.52.17,1.52,1.46A4,4,0,0,1,127.81,266.53Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 127.795px 264.684px;"
                                    id="el7lfkoe3sj0m" class="animable"></path>
                                <path
                                    d="M128.77,272.49a2.1,2.1,0,0,1-.8,1.69c-.44.26-.8-.09-.8-.77a2.13,2.13,0,0,1,.8-1.69C128.41,271.47,128.77,271.81,128.77,272.49Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 127.97px 272.952px;"
                                    id="el00sxnoq0djzi" class="animable"></path>
                                <path
                                    d="M130.14,272.73a1.41,1.41,0,0,1-.53,1.13c-.3.17-.54-.06-.54-.51a1.4,1.4,0,0,1,.54-1.13C129.9,272.05,130.14,272.28,130.14,272.73Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 129.605px 273.04px;"
                                    id="elbjehomcqu4a" class="animable"></path>
                                <path
                                    d="M128.91,277.34,127,278.42V276a1.65,1.65,0,0,1,.69-1.31l.52-.3c.37-.21.68,0,.68.52Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 127.955px 276.365px;"
                                    id="el7efqqltvv9" class="animable"></path>
                                <path
                                    d="M129.69,274.14l-.52.3v2.75l1-.57v-2.14C130.15,274.14,129.94,274,129.69,274.14Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 129.67px 275.638px;"
                                    id="eldpw3qoldnpp" class="animable"></path>
                                <path
                                    d="M125.8,275.24c0,.45.24.68.53.51a1.4,1.4,0,0,0,.53-1.12c0-.46-.24-.69-.53-.52A1.43,1.43,0,0,0,125.8,275.24Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 126.33px 274.93px;"
                                    id="elkx1w3yba1c" class="animable"></path>
                                <path d="M126.25,276.12l.51-.3v2.76l-1,.56V277A1.09,1.09,0,0,1,126.25,276.12Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 126.26px 277.48px;"
                                    id="el9bjd7i1se7t" class="animable"></path>
                                <path
                                    d="M135,228.86,157.22,216c.6-.35,1.08-.1,1.08.55a2.32,2.32,0,0,1-1.08,1.8L135,231.21c-.6.34-1.08.1-1.08-.55A2.32,2.32,0,0,1,135,228.86Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 146.11px 223.603px;"
                                    id="el7pkii90xsyv" class="animable"></path>
                                <path
                                    d="M135,239.31l22.21-12.82c.6-.34,1.08-.1,1.08.55a2.32,2.32,0,0,1-1.08,1.8L135,241.66c-.6.34-1.08.1-1.08-.55A2.32,2.32,0,0,1,135,239.31Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 146.105px 234.075px;"
                                    id="elnjvzqy3n45" class="animable"></path>
                                <path
                                    d="M135,249.77,157.22,237c.6-.35,1.08-.1,1.08.54a2.31,2.31,0,0,1-1.08,1.8L135,252.11c-.6.35-1.08.1-1.08-.55A2.3,2.3,0,0,1,135,249.77Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 146.11px 244.555px;"
                                    id="elbh1gi466hno" class="animable"></path>
                                <path
                                    d="M135,260.22l22.21-12.82c.6-.35,1.08-.1,1.08.55a2.3,2.3,0,0,1-1.08,1.79L135,262.57c-.6.34-1.08.1-1.08-.55A2.31,2.31,0,0,1,135,260.22Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 146.105px 254.983px;"
                                    id="elonlehpx18t" class="animable"></path>
                                <path
                                    d="M135,270.67l22.21-12.82c.6-.34,1.08-.1,1.08.55a2.32,2.32,0,0,1-1.08,1.8L135,273c-.6.34-1.08.1-1.08-.55A2.32,2.32,0,0,1,135,270.67Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 146.105px 265.425px;"
                                    id="elc3k6lpsyjsc" class="animable"></path>
                                <path
                                    d="M139.07,279.21l22.21-12.82c.6-.35,1.08-.1,1.08.54a2.31,2.31,0,0,1-1.08,1.8l-22.21,12.82c-.6.35-1.08.1-1.08-.54A2.31,2.31,0,0,1,139.07,279.21Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 150.175px 273.97px;"
                                    id="elaz4x4iy0oyn" class="animable"></path>
                                <path
                                    d="M139.07,286.27l22.21-12.82c.6-.35,1.08-.1,1.08.55a2.3,2.3,0,0,1-1.08,1.79l-22.21,12.82c-.6.35-1.08.1-1.08-.54A2.31,2.31,0,0,1,139.07,286.27Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 150.175px 281.03px;"
                                    id="elwblsvgb5hg" class="animable"></path>
                                <path
                                    d="M139.07,293.33l22.21-12.82c.6-.35,1.08-.1,1.08.55a2.3,2.3,0,0,1-1.08,1.79l-22.21,12.83c-.6.34-1.08.1-1.08-.55A2.32,2.32,0,0,1,139.07,293.33Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 150.175px 288.093px;"
                                    id="elar285rp13cu" class="animable"></path>
                                <path
                                    d="M143.39,297.82,165.6,285c.6-.35,1.08-.1,1.08.54a2.31,2.31,0,0,1-1.08,1.8l-22.21,12.82c-.59.35-1.08.1-1.08-.54A2.33,2.33,0,0,1,143.39,297.82Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 154.495px 292.58px;"
                                    id="el58ly7fcnbhc" class="animable"></path>
                                <path
                                    d="M138.2,303.89l1.81-3.18c.07-.12.07-.28,0-.32l-1.81-1.1c-.08-.05-.21.11-.21.28v4.28C138,304,138.12,304.05,138.2,303.89Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 139.026px 301.635px;"
                                    id="els1hgq94tb4p" class="animable"></path>
                                <path
                                    d="M143.39,304.85,165.6,292c.6-.34,1.08-.1,1.08.55a2.32,2.32,0,0,1-1.08,1.8L143.39,307.2c-.59.35-1.08.1-1.08-.55A2.35,2.35,0,0,1,143.39,304.85Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 154.495px 299.602px;"
                                    id="elfgwjjv70xpn" class="animable"></path>
                                <path
                                    d="M138.2,310.93l1.81-3.18c.07-.12.07-.28,0-.33l-1.81-1.1c-.08-.05-.21.12-.21.29v4.28C138,311.06,138.12,311.08,138.2,310.93Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 139.026px 308.671px;"
                                    id="ellnptdhpvbqa" class="animable"></path>
                                <path
                                    d="M143.39,311.89l22.21-12.82c.6-.35,1.08-.1,1.08.55a2.32,2.32,0,0,1-1.08,1.8l-22.21,12.82c-.59.34-1.08.1-1.08-.55A2.35,2.35,0,0,1,143.39,311.89Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 154.495px 306.653px;"
                                    id="elzt22uzekpxo" class="animable"></path>
                                <path
                                    d="M138.2,318l1.81-3.19c.07-.12.07-.28,0-.32l-1.81-1.1c-.08-.05-.21.12-.21.29v4.28C138,318.1,138.12,318.12,138.2,318Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 139.026px 315.73px;"
                                    id="elex8538xg6zu" class="animable"></path>
                                <path
                                    d="M143.39,318.93l22.21-12.82c.6-.35,1.08-.1,1.08.54a2.31,2.31,0,0,1-1.08,1.8l-22.21,12.82c-.59.35-1.08.1-1.08-.54A2.33,2.33,0,0,1,143.39,318.93Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 154.495px 313.69px;"
                                    id="elt52xjkjprzi" class="animable"></path>
                                <path
                                    d="M138.2,325l1.81-3.18c.07-.12.07-.28,0-.32l-1.81-1.1c-.08-.06-.21.11-.21.28V325C138,325.13,138.12,325.16,138.2,325Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 139.026px 322.748px;"
                                    id="el4hguyvip9jb" class="animable"></path>
                                <path
                                    d="M143.39,326l22.21-12.82c.6-.34,1.08-.1,1.08.55a2.32,2.32,0,0,1-1.08,1.8l-22.21,12.82c-.59.34-1.08.1-1.08-.55A2.35,2.35,0,0,1,143.39,326Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 154.495px 320.765px;"
                                    id="elgbp2kxdmp9d" class="animable"></path>
                                <path
                                    d="M138.2,332l1.81-3.18c.07-.12.07-.28,0-.33l-1.81-1.1c-.08-.05-.21.12-.21.29V332C138,332.17,138.12,332.19,138.2,332Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 139.026px 329.758px;"
                                    id="ele52ujpks1m6" class="animable"></path>
                                <path
                                    d="M143.39,333l22.21-12.82c.6-.35,1.08-.1,1.08.55a2.3,2.3,0,0,1-1.08,1.79l-22.21,12.83c-.59.34-1.08.1-1.08-.55A2.35,2.35,0,0,1,143.39,333Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 154.495px 327.763px;"
                                    id="elbos9xd3uch" class="animable"></path>
                                <path
                                    d="M138.2,339.08l1.81-3.19c.07-.12.07-.28,0-.32l-1.81-1.1c-.08-.05-.21.12-.21.29V339C138,339.21,138.12,339.23,138.2,339.08Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 139.026px 336.819px;"
                                    id="elscyvdl8jmb" class="animable"></path>
                                <path
                                    d="M143.39,340l22.21-12.82c.6-.35,1.08-.1,1.08.54a2.31,2.31,0,0,1-1.08,1.8l-22.21,12.82c-.59.35-1.08.1-1.08-.55A2.33,2.33,0,0,1,143.39,340Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 154.495px 334.76px;"
                                    id="elturf9rwiscp" class="animable"></path>
                                <path
                                    d="M138.2,346.11l1.81-3.18c.07-.12.07-.28,0-.32l-1.81-1.1c-.08-.06-.21.11-.21.28v4.28C138,346.24,138.12,346.27,138.2,346.11Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 139.026px 343.856px;"
                                    id="elf0ytfuih6q6" class="animable"></path>
                                <path
                                    d="M143.39,347.07l22.21-12.82c.6-.34,1.08-.1,1.08.55a2.32,2.32,0,0,1-1.08,1.8l-22.21,12.82c-.59.34-1.08.1-1.08-.55A2.35,2.35,0,0,1,143.39,347.07Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 154.495px 341.835px;"
                                    id="elqu4umkba5" class="animable"></path>
                                <path
                                    d="M138.2,353.15,140,350c.07-.12.07-.28,0-.33l-1.81-1.1c-.08-.05-.21.12-.21.29v4.28C138,353.28,138.12,353.3,138.2,353.15Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 139.016px 350.908px;"
                                    id="eljtpc2b4nudc" class="animable"></path>
                                <path
                                    d="M187.82,199.48l73-42.14a2.39,2.39,0,0,0,1.08-1.87V136.86c0-.69-.49-1-1.08-.62l-73,42.13a2.38,2.38,0,0,0-1.09,1.87v18.62C186.73,199.55,187.22,199.83,187.82,199.48Z"
                                    style="fill: rgb(240, 240, 240); transform-origin: 224.315px 167.853px;"
                                    id="el56hv5aypg59" class="animable"></path>
                                <path
                                    d="M194.18,186.35a.08.08,0,0,1,0,0l.48-2-.66.38h0s0,0,0-.06v-.36a.17.17,0,0,1,0-.07s0,0,0-.06l1.06-.61h0a.11.11,0,0,1,0,.06v.32a1.64,1.64,0,0,1,0,.19l-.48,2a.64.64,0,0,1,0,.07.11.11,0,0,1,0,.05l-.32.18h0A.08.08,0,0,1,194.18,186.35Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 194.53px 185.005px;"
                                    id="el1gbk07sl3gr" class="animable"></path>
                                <path
                                    d="M196,183a.46.46,0,0,1,.29-.09.3.3,0,0,1,.2.08.49.49,0,0,1,.11.23,1.63,1.63,0,0,1,0,.33v.61a2.65,2.65,0,0,1,0,.38,1.65,1.65,0,0,1-.11.36,2.14,2.14,0,0,1-.2.32,1.37,1.37,0,0,1-.29.24.6.6,0,0,1-.29.09.34.34,0,0,1-.19-.09.42.42,0,0,1-.12-.23,1.63,1.63,0,0,1,0-.33v-.6a2.32,2.32,0,0,1,0-.38,1.23,1.23,0,0,1,.12-.37,1.61,1.61,0,0,1,.19-.31A1.09,1.09,0,0,1,196,183Zm.24,1.38v-.58a.77.77,0,0,0,0-.15.3.3,0,0,0,0-.1.08.08,0,0,0-.07,0l-.11,0a.52.52,0,0,0-.11.1.47.47,0,0,0-.07.12.83.83,0,0,0,0,.15s0,.11,0,.17v.57c0,.06,0,.11,0,.15a.23.23,0,0,0,0,.1.1.1,0,0,0,.07,0,.17.17,0,0,0,.11,0,.36.36,0,0,0,.11-.1.29.29,0,0,0,.07-.12.42.42,0,0,0,0-.15A.88.88,0,0,0,196.19,184.37Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 196px 184.23px;"
                                    id="elg3swl3tjb7k" class="animable"></path>
                                <path
                                    d="M197.49,182.6v.26a1.52,1.52,0,0,1,0,.21.7.7,0,0,1-.06.19.91.91,0,0,1-.11.16.64.64,0,0,1-.15.13.37.37,0,0,1-.15,0,.14.14,0,0,1-.11,0,.17.17,0,0,1-.06-.11.48.48,0,0,1,0-.18V183a.69.69,0,0,1,0-.2.6.6,0,0,1,.06-.19.62.62,0,0,1,.11-.17.44.44,0,0,1,.15-.12.26.26,0,0,1,.15,0,.15.15,0,0,1,.11,0l.06.12A.74.74,0,0,1,197.49,182.6Zm.55-.72,0-.07a.1.1,0,0,1,.05,0l.18-.11h0a.05.05,0,0,1,0,0v0l-1.1,2.86,0,.06a.12.12,0,0,1-.05.05l-.18.1h0s0,0,0,0h0a0,0,0,0,1,0,0Zm-1,1.22a.33.33,0,0,0,0,.12s0,0,.07,0a.19.19,0,0,0,.07-.08.61.61,0,0,0,0-.15v-.22a.29.29,0,0,0,0-.12,0,0,0,0,0-.07,0,.16.16,0,0,0-.07.09.46.46,0,0,0,0,.14A.88.88,0,0,0,197.05,183.1Zm1.47.1v.26a1.52,1.52,0,0,1,0,.21,1.39,1.39,0,0,1-.06.19.91.91,0,0,1-.11.16.64.64,0,0,1-.15.13.37.37,0,0,1-.15,0,.18.18,0,0,1-.11,0,.23.23,0,0,1-.06-.12.48.48,0,0,1,0-.18v-.25a.76.76,0,0,1,0-.21.6.6,0,0,1,.06-.19A.62.62,0,0,1,198,183a.44.44,0,0,1,.15-.12.37.37,0,0,1,.15,0,.15.15,0,0,1,.11,0,.34.34,0,0,1,.06.12Zm-.44.5a.29.29,0,0,0,0,.12s0,0,.07,0,.05,0,.07-.08a.61.61,0,0,0,0-.15v-.22a.29.29,0,0,0,0-.12,0,0,0,0,0-.07,0,.16.16,0,0,0-.07.09.46.46,0,0,0,0,.14A.88.88,0,0,0,198.08,183.7Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 197.678px 183.235px;"
                                    id="elupbv7vfdu3s" class="animable"></path>
                                <path
                                    d="M194.17,180.62l-.73-1.13a14.44,14.44,0,0,0-1.73,4.67l1.18-.1A10.92,10.92,0,0,1,194.17,180.62Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 192.94px 181.825px;"
                                    id="eln9azbmxq3i" class="animable"></path>
                                <path
                                    d="M196.24,178.38v-1.91a8.16,8.16,0,0,0-2.8,3l.73,1.13A6.11,6.11,0,0,1,196.24,178.38Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 194.84px 178.535px;"
                                    id="elcdo8omjl70g" class="animable"></path>
                                <path
                                    d="M192.72,185.84a9.84,9.84,0,0,1,.17-1.78l-1.18.1a12.29,12.29,0,0,0-.24,2.4,8.67,8.67,0,0,0,.24,2.13l1.18-1.28A6.8,6.8,0,0,1,192.72,185.84Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 192.18px 186.375px;"
                                    id="elx1wtqu2njt" class="animable"></path>
                                <path
                                    d="M200.77,178.92a4,4,0,0,0-1.73-2.67,2.81,2.81,0,0,0-2.8.22v1.91a2.08,2.08,0,0,1,2.07-.15,2.93,2.93,0,0,1,1.28,2,6.8,6.8,0,0,1,.17,1.57,9.75,9.75,0,0,1-.17,1.78,11.17,11.17,0,0,1-1.28,3.44,6.28,6.28,0,0,1-2.07,2.24,2.06,2.06,0,0,1-2.07.15,2.9,2.9,0,0,1-1.28-2l-1.18,1.28a3.91,3.91,0,0,0,1.73,2.67,2.78,2.78,0,0,0,2.8-.22,8.33,8.33,0,0,0,2.8-3,14.62,14.62,0,0,0,1.73-4.66,13.11,13.11,0,0,0,.23-2.41A9.21,9.21,0,0,0,200.77,178.92Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 196.355px 183.807px;"
                                    id="eltmj9nsunrg" class="animable"></path>
                                <path
                                    d="M208.13,173.68l22.2-12.82c.6-.35,1.09-.1,1.09.54a2.32,2.32,0,0,1-1.09,1.8L208.13,176c-.6.35-1.09.1-1.09-.54A2.32,2.32,0,0,1,208.13,173.68Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 219.23px 168.43px;"
                                    id="elw4i3v72b4pi" class="animable"></path>
                                <path
                                    d="M208.13,178.41l38.45-22.2c.6-.35,1.08-.1,1.08.55a2.3,2.3,0,0,1-1.08,1.79l-38.45,22.2c-.6.35-1.09.1-1.09-.55A2.31,2.31,0,0,1,208.13,178.41Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 227.35px 168.48px;"
                                    id="elama9w8f9tvb" class="animable"></path>
                                <path
                                    d="M267,153.75l73-42.14a2.4,2.4,0,0,0,1.08-1.88V91.12c0-.69-.48-1-1.08-.62l-73,42.13a2.4,2.4,0,0,0-1.08,1.88v18.61C265.94,153.81,266.42,154.09,267,153.75Z"
                                    style="fill: rgb(240, 240, 240); transform-origin: 303.5px 122.115px;"
                                    id="elyli89fyep3" class="animable"></path>
                                <path
                                    d="M273.74,138.91a1.32,1.32,0,0,1,.06-.39,1.35,1.35,0,0,1,.14-.35,1.54,1.54,0,0,1,.21-.29,1.41,1.41,0,0,1,.24-.2,1,1,0,0,1,.24-.08.36.36,0,0,1,.21.05.45.45,0,0,1,.15.18,1,1,0,0,1,.05.33,1.15,1.15,0,0,1,0,.19,1.16,1.16,0,0,1,0,.18,1.09,1.09,0,0,1-.05.17l-.06.16-.42,1.14a.14.14,0,0,0,0,.06.12.12,0,0,1-.05.05l-.35.2h0a.06.06,0,0,1,0-.05s0,0,0,0v0l.29-.77a.5.5,0,0,1-.21,0,.26.26,0,0,1-.17-.07.41.41,0,0,1-.12-.18A.85.85,0,0,1,273.74,138.91Zm.89-.51a.37.37,0,0,0,0-.12.1.1,0,0,0-.05-.06l-.08,0a.16.16,0,0,0-.09,0l-.09.07-.07.11a.52.52,0,0,0-.06.13.59.59,0,0,0,0,.13.37.37,0,0,0,0,.12s0,.05.06.06l.07,0a.16.16,0,0,0,.09,0,.32.32,0,0,0,.09-.08.39.39,0,0,0,.08-.1.5.5,0,0,0,.05-.13A.59.59,0,0,0,274.63,138.4Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 274.392px 138.955px;"
                                    id="el1k9ezcdlvbz" class="animable"></path>
                                <path
                                    d="M275.88,136.83a.44.44,0,0,1,.28-.09.28.28,0,0,1,.2.08.62.62,0,0,1,.12.23,1.15,1.15,0,0,1,0,.33c0,.1,0,.2,0,.3s0,.21,0,.31a1.69,1.69,0,0,1,0,.38,2.53,2.53,0,0,1-.12.36,1.55,1.55,0,0,1-.2.32,1.31,1.31,0,0,1-.28.24.64.64,0,0,1-.29.09.34.34,0,0,1-.2-.09.55.55,0,0,1-.12-.23,1.55,1.55,0,0,1,0-.32c0-.1,0-.2,0-.3s0-.21,0-.31a2.33,2.33,0,0,1,0-.38,2.29,2.29,0,0,1,.12-.37,1.27,1.27,0,0,1,.2-.31A1,1,0,0,1,275.88,136.83Zm.23,1.38a5.61,5.61,0,0,0,0-.58.61.61,0,0,0,0-.14.28.28,0,0,0,0-.11.1.1,0,0,0-.07,0l-.11,0a.36.36,0,0,0-.11.1.83.83,0,0,0-.08.12s0,.1,0,.15,0,.11,0,.17a5.42,5.42,0,0,0,0,.57c0,.06,0,.11,0,.15a.51.51,0,0,0,0,.1.09.09,0,0,0,.08,0s.06,0,.11,0l.11-.09a.54.54,0,0,0,.07-.13.83.83,0,0,0,0-.15A.86.86,0,0,0,276.11,138.21Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 275.877px 138.06px;"
                                    id="elzgas7cgmfrj" class="animable"></path>
                                <path
                                    d="M277.41,136.44a1.13,1.13,0,0,1,0,.26,1.49,1.49,0,0,1,0,.21,1.46,1.46,0,0,1-.07.19.86.86,0,0,1-.1.16.65.65,0,0,1-.16.13.3.3,0,0,1-.15.05.15.15,0,0,1-.1,0,.35.35,0,0,1-.07-.12.9.9,0,0,1,0-.18.49.49,0,0,1,0-.12.71.71,0,0,1,0-.14,1.36,1.36,0,0,1,0-.2,1.07,1.07,0,0,1,.07-.19.59.59,0,0,1,.1-.17.79.79,0,0,1,.15-.12.37.37,0,0,1,.16,0,.13.13,0,0,1,.1,0,.35.35,0,0,1,.07.12A.88.88,0,0,1,277.41,136.44Zm.56-.72,0-.07.05,0,.18-.11h0s0,0,0,0v0l-1.09,2.86a.33.33,0,0,1,0,.06l0,.05-.18.1h0a.05.05,0,0,1,0,0v0a0,0,0,0,0,0,0Zm-1,1.22c0,.06,0,.1,0,.12s0,0,.06,0a.1.1,0,0,0,.07-.08l0-.15v-.22a.5.5,0,0,0,0-.12s0,0-.07,0a.15.15,0,0,0-.06.09.42.42,0,0,0,0,.14Zm1.47.1a1.13,1.13,0,0,1,0,.26,1.49,1.49,0,0,1,0,.21,1.46,1.46,0,0,1-.07.19.57.57,0,0,1-.11.16.37.37,0,0,1-.15.13.3.3,0,0,1-.15,0,.12.12,0,0,1-.1,0,.35.35,0,0,1-.07-.12.88.88,0,0,1,0-.17.85.85,0,0,1,0-.26,1.49,1.49,0,0,1,0-.21,1.07,1.07,0,0,1,.07-.19.44.44,0,0,1,.1-.16.58.58,0,0,1,.15-.13.37.37,0,0,1,.15,0,.14.14,0,0,1,.11,0,.35.35,0,0,1,.07.12A.88.88,0,0,1,278.44,137Zm-.44.5c0,.06,0,.1,0,.12s0,0,.06,0a.1.1,0,0,0,.07-.08.54.54,0,0,0,0-.15.81.81,0,0,0,0-.22.29.29,0,0,0,0-.12s0,0-.07,0a.15.15,0,0,0-.06.09.42.42,0,0,0,0,.14Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 277.601px 137.075px;"
                                    id="el3alkj9idkhz" class="animable"></path>
                                <path
                                    d="M276.1,132.26v-1.91a8.16,8.16,0,0,0-2.8,3l.73,1.13A6.11,6.11,0,0,1,276.1,132.26Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 274.7px 132.415px;"
                                    id="elj48bowqqgbe" class="animable"></path>
                                <path
                                    d="M280.63,132.8a3.94,3.94,0,0,0-1.73-2.67,2.78,2.78,0,0,0-2.8.22v1.91a2.06,2.06,0,0,1,2.07-.15,2.93,2.93,0,0,1,1.28,2,6.8,6.8,0,0,1,.17,1.57,9.84,9.84,0,0,1-.17,1.78,10.92,10.92,0,0,1-1.28,3.44,6.28,6.28,0,0,1-2.07,2.24,2.06,2.06,0,0,1-2.07.15,2.9,2.9,0,0,1-1.28-2,6.8,6.8,0,0,1-.17-1.57,9.75,9.75,0,0,1,.17-1.78A10.92,10.92,0,0,1,274,134.5l-.73-1.13a14.47,14.47,0,0,0-1.73,4.66,13.21,13.21,0,0,0-.24,2.41,9.18,9.18,0,0,0,.24,2.13,3.91,3.91,0,0,0,1.73,2.67,2.78,2.78,0,0,0,2.8-.22,8.24,8.24,0,0,0,2.8-3h0a14.71,14.71,0,0,0,1.73-4.66,13.28,13.28,0,0,0,.23-2.41A9.21,9.21,0,0,0,280.63,132.8Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 276.066px 137.685px;"
                                    id="elk4gcdnysins" class="animable"></path>
                                <path
                                    d="M288,127.56l22.21-12.83c.59-.34,1.08-.1,1.08.55a2.33,2.33,0,0,1-1.08,1.8L288,129.9c-.6.35-1.08.1-1.08-.55A2.3,2.3,0,0,1,288,127.56Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 299.105px 122.317px;"
                                    id="elh8lfmq8mwf7" class="animable"></path>
                                <path
                                    d="M288,132.28l38.45-22.19c.6-.35,1.09-.1,1.09.55a2.31,2.31,0,0,1-1.09,1.79L288,134.63c-.6.34-1.08.1-1.08-.55A2.32,2.32,0,0,1,288,132.28Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 307.23px 122.358px;"
                                    id="elcwrbhjmjlc6" class="animable"></path>
                                <path
                                    d="M195.25,204.59l15.58-9c.6-.35,1.08-.1,1.08.54a2.31,2.31,0,0,1-1.08,1.8l-15.58,9c-.6.35-1.08.1-1.08-.55A2.3,2.3,0,0,1,195.25,204.59Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 203.04px 201.26px;"
                                    id="eld5uxcmj6ka6" class="animable"></path>
                                <path
                                    d="M340.55,126.52h0m-.46.27v119a1.39,1.39,0,0,1-.58,1L187.73,334.39v-119a1.44,1.44,0,0,1,.59-1l1.89-1.09a3.39,3.39,0,0,0,1.59-2.74V203.7a1.39,1.39,0,0,1,.58-1l21.79-12.58v6.4a1.63,1.63,0,0,0,1.6,1.77,2,2,0,0,0,1-.28l123.34-71.21M214.63,189.84h0m125.86-64.31a1,1,0,0,0-.48.15L216.25,197.13a1,1,0,0,1-.48.15c-.36,0-.6-.29-.6-.77v-6.89c0-.49-.25-.77-.6-.77a1,1,0,0,0-.48.15l-22.21,12.82a2.4,2.4,0,0,0-1.08,1.88v6.88a2.38,2.38,0,0,1-1.09,1.87l-1.89,1.1a2.38,2.38,0,0,0-1.09,1.87V334.87c0,.49.25.78.6.78a1,1,0,0,0,.49-.15L340,247.63a2.38,2.38,0,0,0,1.08-1.87V126.3c0-.49-.24-.77-.6-.77Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 263.905px 230.59px;"
                                    id="elrs1mqwzkme" class="animable"></path>
                                <path
                                    d="M196.52,220.61a1.07,1.07,0,0,1-.53-.13,1.27,1.27,0,0,1-.57-1.14v-4.53a2.9,2.9,0,0,1,1.34-2.31l12.07-7a1.25,1.25,0,0,1,1.26-.08,1.27,1.27,0,0,1,.57,1.14v4.53a2.9,2.9,0,0,1-1.34,2.31l-12.06,7A1.52,1.52,0,0,1,196.52,220.61Zm.74-7.24a1.86,1.86,0,0,0-.84,1.44v4.53a.38.38,0,0,0,.07.27.39.39,0,0,0,.27-.08l12.07-6.95a1.92,1.92,0,0,0,.83-1.45V206.6a.38.38,0,0,0-.07-.27.39.39,0,0,0-.27.08Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 203.04px 212.948px;"
                                    id="elqp3via6inz" class="animable"></path>
                                <path
                                    d="M198,215.23l7.87-4.56c.4-.23.72-.07.72.36a1.53,1.53,0,0,1-.72,1.2L198,216.8c-.4.23-.72.06-.72-.37A1.55,1.55,0,0,1,198,215.23Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 201.935px 213.734px;"
                                    id="elwrcr0b04f9" class="animable"></path>
                                <path
                                    d="M207.67,209.92l.65.93s.07,0,.1-.06l.65-1.68c0-.08,0-.15,0-.12l-1.3.75A.16.16,0,0,0,207.67,209.92Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 208.369px 209.916px;"
                                    id="elxe7wnuqlmsn" class="animable"></path>
                                <path
                                    d="M194.86,264.56c.58-.33,1-.06,1,.6a2.29,2.29,0,0,1-1,1.81c-.58.33-1,.06-1-.6A2.29,2.29,0,0,1,194.86,264.56Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 194.86px 265.765px;"
                                    id="elg0tongthqkq" class="animable"></path>
                                <path
                                    d="M203,255.18c.58-.33,1.05-.06,1.05.6a2.3,2.3,0,0,1-1.05,1.81c-.57.33-1,.06-1-.6A2.31,2.31,0,0,1,203,255.18Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 203.025px 256.385px;"
                                    id="elzlddhrezhwb" class="animable"></path>
                                <path
                                    d="M211.11,250.49c.57-.33,1-.06,1,.6a2.31,2.31,0,0,1-1,1.81c-.58.33-1.05.06-1.05-.6A2.3,2.3,0,0,1,211.11,250.49Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 211.085px 251.695px;"
                                    id="el1ot8e39c4oj" class="animable"></path>
                                <path
                                    d="M219.23,247.86c.58-.33,1-.06,1,.6a2.29,2.29,0,0,1-1,1.81c-.58.33-1,.06-1-.6A2.29,2.29,0,0,1,219.23,247.86Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 219.23px 249.065px;"
                                    id="elljfwytfbm7j" class="animable"></path>
                                <path
                                    d="M227.36,239.41c.58-.33,1-.06,1,.61a2.29,2.29,0,0,1-1,1.8c-.57.34-1,.07-1-.6A2.34,2.34,0,0,1,227.36,239.41Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 227.36px 240.618px;"
                                    id="elz5jc5mzdq9a" class="animable"></path>
                                <path
                                    d="M235.48,236.42c.58-.33,1-.06,1,.6a2.29,2.29,0,0,1-1,1.81c-.58.33-1,.06-1-.6A2.29,2.29,0,0,1,235.48,236.42Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 235.48px 237.625px;"
                                    id="el8a52gyup3i" class="animable"></path>
                                <path
                                    d="M243.6,227c.58-.34,1.05-.07,1.05.6a2.31,2.31,0,0,1-1.05,1.81c-.57.33-1,.06-1-.61A2.31,2.31,0,0,1,243.6,227Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 243.625px 228.202px;"
                                    id="elmygoqnp1zl" class="animable"></path>
                                <path
                                    d="M251.73,224.69c.57-.33,1-.06,1,.61a2.31,2.31,0,0,1-1,1.8c-.58.34-1,.07-1-.6A2.31,2.31,0,0,1,251.73,224.69Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 251.73px 225.898px;"
                                    id="ellh7itlsyfdb" class="animable"></path>
                                <path
                                    d="M259.85,198.89c.58-.33,1-.06,1,.61a2.33,2.33,0,0,1-1,1.81c-.58.33-1,.06-1-.61A2.32,2.32,0,0,1,259.85,198.89Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 259.85px 200.1px;"
                                    id="eln24rqw5gtok" class="animable"></path>
                                <path
                                    d="M268,213c.57-.34,1-.07,1,.6a2.34,2.34,0,0,1-1,1.81c-.58.33-1.05.06-1.05-.61A2.29,2.29,0,0,1,268,213Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 267.975px 214.202px;"
                                    id="eliwmgfnny8m" class="animable"></path>
                                <path
                                    d="M276.1,213c.58-.34,1-.07,1,.6a2.32,2.32,0,0,1-1,1.81c-.58.33-1,.06-1-.61A2.28,2.28,0,0,1,276.1,213Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 276.1px 214.202px;"
                                    id="el7g4bqdckjrw" class="animable"></path>
                                <path
                                    d="M284.22,213c.58-.34,1-.07,1,.6a2.33,2.33,0,0,1-1,1.81c-.57.33-1,.06-1-.61A2.31,2.31,0,0,1,284.22,213Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 284.22px 214.202px;"
                                    id="elp8zkw7rtby" class="animable"></path>
                                <path
                                    d="M292.35,198.9c.57-.34,1-.07,1,.6a2.34,2.34,0,0,1-1,1.81c-.58.33-1.05.06-1.05-.61A2.29,2.29,0,0,1,292.35,198.9Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 292.325px 200.102px;"
                                    id="el14j4yhxvdom" class="animable"></path>
                                <path
                                    d="M300.47,196.2c.58-.33,1-.06,1,.6a2.29,2.29,0,0,1-1,1.81c-.58.33-1,.06-1-.6A2.29,2.29,0,0,1,300.47,196.2Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 300.47px 197.405px;"
                                    id="el08v6i70vmdbc" class="animable"></path>
                                <path
                                    d="M308.62,184.82c.58-.33,1.05-.06,1.05.61a2.29,2.29,0,0,1-1.05,1.8c-.57.34-1,.07-1-.6A2.34,2.34,0,0,1,308.62,184.82Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 308.645px 186.028px;"
                                    id="elw9gz52k0b99" class="animable"></path>
                                <g id="ele2mdn6e2lh">
                                    <ellipse cx="316.72" cy="186.03" rx="1.48" ry="0.85"
                                        style="fill: rgb(94, 128, 183); transform-origin: 316.72px 186.03px; transform: rotate(-60deg);"
                                        class="animable"></ellipse>
                                </g>
                                <g id="ellexsx8cc0hr">
                                    <ellipse cx="324.84" cy="186.03" rx="1.48" ry="0.85"
                                        style="fill: rgb(94, 128, 183); transform-origin: 324.84px 186.03px; transform: rotate(-60deg);"
                                        class="animable"></ellipse>
                                </g>
                                <path
                                    d="M333,180.13c.57-.33,1-.06,1,.61a2.31,2.31,0,0,1-1,1.8c-.58.34-1.05.07-1.05-.6A2.33,2.33,0,0,1,333,180.13Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 332.975px 181.338px;"
                                    id="elw1oq79ctg3" class="animable"></path>
                                <path
                                    d="M194.84,266a.27.27,0,0,1-.17-.06.26.26,0,0,1,0-.36l8.2-9.42.07-.06,8.06-4.65,8.11-2.63,8.08-8.41.1-.06,8.06-3,8.08-9.33a.42.42,0,0,1,.12-.08l8-2.31L259.61,200a.26.26,0,0,1,.21-.18.27.27,0,0,1,.25.13l8.05,13.94h16L292.13,200a.24.24,0,0,1,.14-.12l8.05-2.67,8.07-11.31a.27.27,0,0,1,.21-.1h16.18l8.06-4.66a.26.26,0,0,1,.35.09.26.26,0,0,1-.1.34l-8.12,4.7a.28.28,0,0,1-.13,0H308.72l-8.05,11.27a.22.22,0,0,1-.12.09l-8,2.67-8.08,14a.26.26,0,0,1-.22.12H268a.26.26,0,0,1-.21-.12l-7.84-13.58L252,226a.29.29,0,0,1-.17.17l-8.06,2.32-8.07,9.33-.1.07-8.08,3-8.08,8.41a.21.21,0,0,1-.1.06l-8.13,2.63-8,4.62L195,265.94A.25.25,0,0,1,194.84,266Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 263.908px 223.553px;"
                                    id="el9yra960sojp" class="animable"></path>
                                <path
                                    d="M194.86,271a.5.5,0,0,1-.43-.25.51.51,0,0,1,.18-.69l138.11-79.73a.5.5,0,0,1,.5.86L195.11,270.89A.47.47,0,0,1,194.86,271Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 263.894px 230.643px;"
                                    id="elsn45wb2e24n" class="animable"></path>
                                <path
                                    d="M194.86,259.87c.58-.33,1-.06,1,.6a2.29,2.29,0,0,1-1,1.81c-.58.33-1,.06-1-.6A2.29,2.29,0,0,1,194.86,259.87Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 194.86px 261.075px;"
                                    id="eldg9u8o303mr" class="animable"></path>
                                <path
                                    d="M203,245.8c.58-.33,1.05-.06,1.05.6a2.3,2.3,0,0,1-1.05,1.81c-.57.33-1,.06-1-.6A2.31,2.31,0,0,1,203,245.8Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 203.025px 247.005px;"
                                    id="eln001yfwfy4g" class="animable"></path>
                                <g id="elndj6d1yijf">
                                    <ellipse cx="211.11" cy="245.25" rx="1.48" ry="0.85"
                                        style="fill: rgb(94, 128, 183); transform-origin: 211.11px 245.25px; transform: rotate(-60deg);"
                                        class="animable"></ellipse>
                                </g>
                                <path
                                    d="M219.23,227c.58-.34,1-.07,1,.6a2.3,2.3,0,0,1-1,1.81c-.58.33-1,.06-1-.61A2.28,2.28,0,0,1,219.23,227Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 219.23px 228.202px;"
                                    id="eli67vsl1lgyj" class="animable"></path>
                                <path
                                    d="M227.36,231.73c.58-.33,1-.06,1,.6a2.3,2.3,0,0,1-1,1.81c-.57.33-1,.06-1-.6A2.31,2.31,0,0,1,227.36,231.73Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 227.36px 232.935px;"
                                    id="el15hlokgkmbg" class="animable"></path>
                                <path
                                    d="M235.48,229.38c.58-.33,1-.06,1,.61a2.28,2.28,0,0,1-1,1.8c-.58.34-1,.07-1-.6A2.32,2.32,0,0,1,235.48,229.38Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 235.48px 230.588px;"
                                    id="eluf3wm4pfwxg" class="animable"></path>
                                <path
                                    d="M243.6,222.35c.58-.34,1.05-.07,1.05.6a2.31,2.31,0,0,1-1.05,1.81c-.57.33-1,.06-1-.6A2.31,2.31,0,0,1,243.6,222.35Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 243.625px 223.552px;"
                                    id="el7bmg4hcx57w" class="animable"></path>
                                <path
                                    d="M251.73,213c.57-.34,1-.07,1,.6a2.34,2.34,0,0,1-1,1.81c-.58.33-1,.06-1-.61A2.29,2.29,0,0,1,251.73,213Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 251.73px 214.202px;"
                                    id="eliq5uiw240qk" class="animable"></path>
                                <path
                                    d="M259.85,210.62c.58-.33,1-.06,1,.6a2.3,2.3,0,0,1-1,1.81c-.58.33-1,.06-1-.6A2.29,2.29,0,0,1,259.85,210.62Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 259.85px 211.825px;"
                                    id="elgr343q1btwh" class="animable"></path>
                                <path
                                    d="M268,203.59c.58-.34,1-.07,1,.6a2.33,2.33,0,0,1-1,1.81c-.57.33-1,.06-1-.61A2.31,2.31,0,0,1,268,203.59Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 268px 204.792px;"
                                    id="elu3i9f69tc5" class="animable"></path>
                                <path
                                    d="M276.1,203.59c.58-.34,1-.07,1,.6a2.32,2.32,0,0,1-1,1.81c-.58.33-1,.06-1-.61A2.28,2.28,0,0,1,276.1,203.59Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 276.1px 204.792px;"
                                    id="elbbe02wf0ib" class="animable"></path>
                                <path
                                    d="M284.22,184.82c.58-.33,1-.06,1,.61a2.29,2.29,0,0,1-1,1.8c-.57.34-1,.07-1-.6A2.34,2.34,0,0,1,284.22,184.82Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 284.22px 186.028px;"
                                    id="elf2fc9jl2xzp" class="animable"></path>
                                <path
                                    d="M292.35,194.14c.57-.33,1-.07,1,.6a2.31,2.31,0,0,1-1,1.81c-.58.33-1.05.06-1.05-.6A2.3,2.3,0,0,1,292.35,194.14Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 292.325px 195.344px;"
                                    id="el1x9jw1ida4t" class="animable"></path>
                                <path
                                    d="M300.47,184.82c.58-.33,1-.06,1,.61a2.29,2.29,0,0,1-1,1.8c-.58.34-1,.07-1-.6A2.32,2.32,0,0,1,300.47,184.82Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 300.47px 186.028px;"
                                    id="elv67aauh9pp" class="animable"></path>
                                <path
                                    d="M308.6,180.13c.57-.33,1-.06,1,.61a2.31,2.31,0,0,1-1,1.8c-.58.34-1.05.07-1.05-.6A2.33,2.33,0,0,1,308.6,180.13Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 308.575px 181.338px;"
                                    id="el0hn05cnz34ku" class="animable"></path>
                                <path
                                    d="M316.72,180.13c.58-.33,1-.06,1,.61a2.28,2.28,0,0,1-1,1.8c-.58.34-1,.07-1-.6A2.32,2.32,0,0,1,316.72,180.13Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 316.72px 181.338px;"
                                    id="elzhfea1ybn2s" class="animable"></path>
                                <path
                                    d="M324.84,175.44c.58-.33,1.05-.06,1.05.61a2.29,2.29,0,0,1-1.05,1.8c-.57.34-1,.07-1-.6A2.34,2.34,0,0,1,324.84,175.44Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 324.865px 176.648px;"
                                    id="elfgveidy6dtb" class="animable"></path>
                                <path
                                    d="M333,175.44c.57-.33,1-.06,1,.61a2.31,2.31,0,0,1-1,1.8c-.58.34-1.05.07-1.05-.6A2.33,2.33,0,0,1,333,175.44Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 332.975px 176.648px;"
                                    id="el2shx02wa8aw" class="animable"></path>
                                <path
                                    d="M194.86,261.33a.22.22,0,0,1-.13,0,.25.25,0,0,1-.09-.34l8.18-14.1a.23.23,0,0,1,.17-.12l7.94-1.7,8.07-16.9a.26.26,0,0,1,.16-.13.24.24,0,0,1,.2,0l8,4.64,8-2.31,8.07-7,8.11-9.36a.2.2,0,0,1,.12-.08l8.07-2.33,8.08-7a.25.25,0,0,1,.17-.06h8L284,185.93a.28.28,0,0,1,.2-.15.24.24,0,0,1,.22.09l7.94,9.16,7.93-9.16a.2.2,0,0,1,.07-.06l8.15-4.7a.19.19,0,0,1,.12,0h8.06l8-4.64a.27.27,0,0,1,.12,0H333a.25.25,0,0,1,0,.5h-8.06l-8,4.64-.12,0h-8.06l-8.06,4.65-8.09,9.35a.26.26,0,0,1-.38,0l-7.87-9.08-8,18.4a.25.25,0,0,1-.23.15h-8L260,212l-.1,0-8.05,2.32-8.09,9.33-8.14,7.06-.09.05-8.12,2.35a.22.22,0,0,1-.19,0l-7.9-4.56-8,16.77a.21.21,0,0,1-.17.13l-8,1.7-8.13,14A.24.24,0,0,1,194.86,261.33Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 263.928px 218.902px;"
                                    id="eli16l4libr9" class="animable"></path>
                                <g id="el2tglm4rb2m7">
                                    <g style="opacity: 0.3; transform-origin: 263.93px 218.86px;" class="animable">
                                        <path
                                            d="M194.86,259.87c.58-.33,1-.06,1,.6a2.29,2.29,0,0,1-1,1.81c-.58.33-1,.06-1-.6A2.29,2.29,0,0,1,194.86,259.87Z"
                                            id="elu3pm57fsk1g" class="animable"
                                            style="transform-origin: 194.86px 261.075px;"></path>
                                        <path
                                            d="M203,245.8c.58-.33,1.05-.06,1.05.6a2.3,2.3,0,0,1-1.05,1.81c-.57.33-1,.06-1-.6A2.31,2.31,0,0,1,203,245.8Z"
                                            id="elxuc326l0jzm" class="animable"
                                            style="transform-origin: 203.025px 247.005px;"></path>
                                        <g id="elz32hfsicjpd">
                                            <ellipse cx="211.11" cy="245.25" rx="1.48" ry="0.85"
                                                class="animable"
                                                style="transform-origin: 211.11px 245.25px; transform: rotate(-60deg);">
                                            </ellipse>
                                        </g>
                                        <path
                                            d="M219.23,227c.58-.34,1-.07,1,.6a2.3,2.3,0,0,1-1,1.81c-.58.33-1,.06-1-.61A2.28,2.28,0,0,1,219.23,227Z"
                                            id="el0yr8ezj9xmi" class="animable"
                                            style="transform-origin: 219.23px 228.202px;"></path>
                                        <path
                                            d="M227.36,231.73c.58-.33,1-.06,1,.6a2.3,2.3,0,0,1-1,1.81c-.57.33-1,.06-1-.6A2.31,2.31,0,0,1,227.36,231.73Z"
                                            id="eldmlig0ign8e" class="animable"
                                            style="transform-origin: 227.36px 232.935px;"></path>
                                        <path
                                            d="M235.48,229.38c.58-.33,1-.06,1,.61a2.28,2.28,0,0,1-1,1.8c-.58.34-1,.07-1-.6A2.32,2.32,0,0,1,235.48,229.38Z"
                                            id="el4hokmq2dia6" class="animable"
                                            style="transform-origin: 235.48px 230.588px;"></path>
                                        <path
                                            d="M243.6,222.35c.58-.34,1.05-.07,1.05.6a2.31,2.31,0,0,1-1.05,1.81c-.57.33-1,.06-1-.6A2.31,2.31,0,0,1,243.6,222.35Z"
                                            id="ellxqjrdp364n" class="animable"
                                            style="transform-origin: 243.625px 223.552px;"></path>
                                        <path
                                            d="M251.73,213c.57-.34,1-.07,1,.6a2.34,2.34,0,0,1-1,1.81c-.58.33-1,.06-1-.61A2.29,2.29,0,0,1,251.73,213Z"
                                            id="elw24wwy7ua5" class="animable"
                                            style="transform-origin: 251.73px 214.202px;"></path>
                                        <path
                                            d="M259.85,210.62c.58-.33,1-.06,1,.6a2.3,2.3,0,0,1-1,1.81c-.58.33-1,.06-1-.6A2.29,2.29,0,0,1,259.85,210.62Z"
                                            id="elfim95yj1zdg" class="animable"
                                            style="transform-origin: 259.85px 211.825px;"></path>
                                        <path
                                            d="M268,203.59c.58-.34,1-.07,1,.6a2.33,2.33,0,0,1-1,1.81c-.57.33-1,.06-1-.61A2.31,2.31,0,0,1,268,203.59Z"
                                            id="elmz3gtreo78j" class="animable"
                                            style="transform-origin: 268px 204.792px;"></path>
                                        <path
                                            d="M276.1,203.59c.58-.34,1-.07,1,.6a2.32,2.32,0,0,1-1,1.81c-.58.33-1,.06-1-.61A2.28,2.28,0,0,1,276.1,203.59Z"
                                            id="els96k8yfkl8o" class="animable"
                                            style="transform-origin: 276.1px 204.792px;"></path>
                                        <path
                                            d="M284.22,184.82c.58-.33,1-.06,1,.61a2.29,2.29,0,0,1-1,1.8c-.57.34-1,.07-1-.6A2.34,2.34,0,0,1,284.22,184.82Z"
                                            id="elrd2o1jlnbi" class="animable"
                                            style="transform-origin: 284.22px 186.028px;"></path>
                                        <path
                                            d="M292.35,194.14c.57-.33,1-.07,1,.6a2.31,2.31,0,0,1-1,1.81c-.58.33-1.05.06-1.05-.6A2.3,2.3,0,0,1,292.35,194.14Z"
                                            id="elkqoajzovuel" class="animable"
                                            style="transform-origin: 292.325px 195.344px;"></path>
                                        <path
                                            d="M300.47,184.82c.58-.33,1-.06,1,.61a2.29,2.29,0,0,1-1,1.8c-.58.34-1,.07-1-.6A2.32,2.32,0,0,1,300.47,184.82Z"
                                            id="elmo934l7or5i" class="animable"
                                            style="transform-origin: 300.47px 186.028px;"></path>
                                        <path
                                            d="M308.6,180.13c.57-.33,1-.06,1,.61a2.31,2.31,0,0,1-1,1.8c-.58.34-1.05.07-1.05-.6A2.33,2.33,0,0,1,308.6,180.13Z"
                                            id="el3ect30xcy5i" class="animable"
                                            style="transform-origin: 308.575px 181.338px;"></path>
                                        <path
                                            d="M316.72,180.13c.58-.33,1-.06,1,.61a2.28,2.28,0,0,1-1,1.8c-.58.34-1,.07-1-.6A2.32,2.32,0,0,1,316.72,180.13Z"
                                            id="el73qh4hq923h" class="animable"
                                            style="transform-origin: 316.72px 181.338px;"></path>
                                        <path
                                            d="M324.84,175.44c.58-.33,1.05-.06,1.05.61a2.29,2.29,0,0,1-1.05,1.8c-.57.34-1,.07-1-.6A2.34,2.34,0,0,1,324.84,175.44Z"
                                            id="elyzeb9f0n2wp" class="animable"
                                            style="transform-origin: 324.865px 176.648px;"></path>
                                        <path
                                            d="M333,175.44c.57-.33,1-.06,1,.61a2.31,2.31,0,0,1-1,1.8c-.58.34-1.05.07-1.05-.6A2.33,2.33,0,0,1,333,175.44Z"
                                            id="el009njsupt28cc" class="animable"
                                            style="transform-origin: 332.975px 176.648px;"></path>
                                        <path
                                            d="M194.86,261.33a.22.22,0,0,1-.13,0,.25.25,0,0,1-.09-.34l8.18-14.1a.23.23,0,0,1,.17-.12l7.94-1.7,8.07-16.9a.26.26,0,0,1,.16-.13.24.24,0,0,1,.2,0l8,4.64,8-2.31,8.07-7,8.11-9.36a.2.2,0,0,1,.12-.08l8.07-2.33,8.08-7a.25.25,0,0,1,.17-.06h8L284,185.93a.28.28,0,0,1,.2-.15.24.24,0,0,1,.22.09l7.94,9.16,7.93-9.16a.2.2,0,0,1,.07-.06l8.15-4.7a.19.19,0,0,1,.12,0h8.06l8-4.64a.27.27,0,0,1,.12,0H333a.25.25,0,0,1,0,.5h-8.06l-8,4.64-.12,0h-8.06l-8.06,4.65-8.09,9.35a.26.26,0,0,1-.38,0l-7.87-9.08-8,18.4a.25.25,0,0,1-.23.15h-8L260,212l-.1,0-8.05,2.32-8.09,9.33-8.14,7.06-.09.05-8.12,2.35a.22.22,0,0,1-.19,0l-7.9-4.56-8,16.77a.21.21,0,0,1-.17.13l-8,1.7-8.13,14A.24.24,0,0,1,194.86,261.33Z"
                                            id="elflwhgrxm0hn" class="animable"
                                            style="transform-origin: 263.928px 218.902px;"></path>
                                    </g>
                                </g>
                                <path
                                    d="M199.11,225.07,207,220.5c.4-.23.72-.07.72.37a1.53,1.53,0,0,1-.72,1.19l-7.87,4.57c-.39.23-.72.07-.72-.37A1.56,1.56,0,0,1,199.11,225.07Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 203.065px 223.565px;"
                                    id="elvm2iuz8gdw" class="animable"></path>
                                <path
                                    d="M194.86,227c.58-.34,1-.07,1,.6a2.29,2.29,0,0,1-1,1.81c-.58.33-1.05.06-1.05-.6A2.3,2.3,0,0,1,194.86,227Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 194.835px 228.202px;"
                                    id="elyptxt474of" class="animable"></path>
                                <g id="elxcywac6fzbs">
                                    <path
                                        d="M194.86,227c.58-.34,1-.07,1,.6a2.29,2.29,0,0,1-1,1.81c-.58.33-1.05.06-1.05-.6A2.3,2.3,0,0,1,194.86,227Z"
                                        style="opacity: 0.3; transform-origin: 194.835px 228.202px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M199.11,229.74l7.87-4.56c.4-.23.72-.07.72.36a1.53,1.53,0,0,1-.72,1.2l-7.87,4.57c-.39.23-.72.06-.72-.37A1.57,1.57,0,0,1,199.11,229.74Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 203.045px 228.244px;"
                                    id="elsyxd8qtbf5q" class="animable"></path>
                                <path
                                    d="M194.86,231.73c.58-.33,1-.07,1,.6a2.29,2.29,0,0,1-1,1.81c-.58.33-1.05.06-1.05-.6A2.3,2.3,0,0,1,194.86,231.73Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 194.835px 232.934px;"
                                    id="elaa6x0496ib" class="animable"></path>
                                <path
                                    d="M194.86,294.23a.26.26,0,0,1-.17-.07.25.25,0,0,1,0-.36l4.12-4.24,4-.51,4.09-5.28,4.09.56,4-3.59,4.06-2.43,4.13-5.73,4.11,1.29,3.95-3.53a.25.25,0,0,1,.35,0,.23.23,0,0,1,0,.35l-4.16,3.72-4-1.27-4,5.55-4.06,2.43-4.11,3.72-4-.55-4,5.21L199,290l-4,4.11A.27.27,0,0,1,194.86,294.23Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 213.142px 282.249px;"
                                    id="eltktt5m7zu" class="animable"></path>
                                <path
                                    d="M196.47,280.51a.45.45,0,0,1,.1-.09.59.59,0,0,1,.11-.08,1.11,1.11,0,0,1,.61-.18.71.71,0,0,1,.49.18,1.18,1.18,0,0,1,.32.51,2.47,2.47,0,0,1,.12.81,3.71,3.71,0,0,1-.12.93,4.27,4.27,0,0,1-.32.89,3.24,3.24,0,0,1-.49.75,2.28,2.28,0,0,1-.61.52,1.23,1.23,0,0,1-.62.19.76.76,0,0,1-.48-.19,1.19,1.19,0,0,1-.33-.51,2.73,2.73,0,0,1-.11-.81,2.92,2.92,0,0,1,0-.51,3.86,3.86,0,0,1,.1-.49c0-.16.09-.31.14-.46s.1-.3.15-.44l1.08-3.08a1.07,1.07,0,0,0,.07-.15.24.24,0,0,1,.12-.14l.34-.19a.05.05,0,0,1,.08,0s0,.06,0,.12,0,.06,0,.08l0,.05Zm-.77,2.6a1.73,1.73,0,0,0,.07.48.77.77,0,0,0,.2.33.46.46,0,0,0,.3.13.79.79,0,0,0,.41-.12,1.91,1.91,0,0,0,.41-.35,2.41,2.41,0,0,0,.3-.48,2.46,2.46,0,0,0,.26-1.12,1.75,1.75,0,0,0-.06-.48.77.77,0,0,0-.2-.33.46.46,0,0,0-.3-.13.86.86,0,0,0-.41.12,1.69,1.69,0,0,0-.41.35,2.22,2.22,0,0,0-.3.49,2.58,2.58,0,0,0-.2.55A2.77,2.77,0,0,0,195.7,283.11Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 196.675px 281.445px;"
                                    id="elvkmq558z11" class="animable"></path>
                                <path
                                    d="M199.23,281.64a1.83,1.83,0,0,0,.08.25.35.35,0,0,0,.16.16.42.42,0,0,0,.28,0,1.44,1.44,0,0,0,.46-.19,1.73,1.73,0,0,0,.35-.27,1.82,1.82,0,0,0,.29-.38,2,2,0,0,0,.2-.48,2,2,0,0,0,.07-.56,1.14,1.14,0,0,0-.07-.46.38.38,0,0,0-.19-.22.47.47,0,0,0-.29,0,1.38,1.38,0,0,0-.36.16l-.49.28a.09.09,0,0,1-.12,0,.2.2,0,0,1,0-.14v-.33a.51.51,0,0,1,0-.17l.06-.16,1.07-2.4-1.71,1a.07.07,0,0,1-.11,0s-.05-.07-.05-.14v-.33a.35.35,0,0,1,.05-.2.27.27,0,0,1,.11-.14l2.34-1.35c.05,0,.08,0,.11,0a.18.18,0,0,1,0,.15V276a.62.62,0,0,1,0,.18.77.77,0,0,1-.08.19l-1.05,2.36a1.16,1.16,0,0,1,.55-.17.57.57,0,0,1,.42.13.84.84,0,0,1,.27.43,2.09,2.09,0,0,1,.1.71,3.44,3.44,0,0,1-.12.91,3.6,3.6,0,0,1-.32.81,3.43,3.43,0,0,1-.47.66,2.4,2.4,0,0,1-.57.46,1.7,1.7,0,0,1-.69.26.7.7,0,0,1-.47-.1.77.77,0,0,1-.28-.36,1.53,1.53,0,0,1-.1-.54.32.32,0,0,1,0-.16.25.25,0,0,1,.09-.11l.27-.16c.05,0,.08,0,.11,0A.23.23,0,0,1,199.23,281.64Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 200.165px 279.253px;"
                                    id="elehfd1su20qu" class="animable"></path>
                                <path
                                    d="M202.77,279.6a.73.73,0,0,0,.08.25.31.31,0,0,0,.16.16.42.42,0,0,0,.28,0,1.44,1.44,0,0,0,.46-.19,1.73,1.73,0,0,0,.35-.27,1.65,1.65,0,0,0,.29-.39,2.22,2.22,0,0,0,.2-.47,2,2,0,0,0,.07-.56,1.14,1.14,0,0,0-.07-.46.42.42,0,0,0-.19-.22.47.47,0,0,0-.29,0,1.73,1.73,0,0,0-.36.15l-.5.29a.09.09,0,0,1-.11,0,.2.2,0,0,1,0-.14v-.33a.33.33,0,0,1,0-.17,1.38,1.38,0,0,1,.06-.16l1.07-2.4-1.71,1a.09.09,0,0,1-.12,0,.2.2,0,0,1,0-.14v-.33a.45.45,0,0,1,0-.2.24.24,0,0,1,.12-.14l2.34-1.36a.09.09,0,0,1,.11,0,.21.21,0,0,1,.05.15V274a.67.67,0,0,1,0,.18c0,.06-.05.12-.08.19l-1.05,2.36a1.32,1.32,0,0,1,.54-.18.64.64,0,0,1,.43.14,1,1,0,0,1,.27.42,2.4,2.4,0,0,1,.1.72,3.5,3.5,0,0,1-.12.91,3.82,3.82,0,0,1-.32.8,2.91,2.91,0,0,1-.47.66,2.45,2.45,0,0,1-.57.47,1.75,1.75,0,0,1-.69.26.81.81,0,0,1-.48-.1.92.92,0,0,1-.28-.36,1.53,1.53,0,0,1-.09-.54.32.32,0,0,1,0-.16.23.23,0,0,1,.09-.12l.27-.15a.08.08,0,0,1,.11,0A.23.23,0,0,1,202.77,279.6Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 203.755px 277.218px;"
                                    id="el9jvtti4ykj" class="animable"></path>
                                <path
                                    d="M195.59,297.46l35.11-20.35c.39-.23.72-.06.72.37a1.57,1.57,0,0,1-.72,1.2L195.59,299c-.39.23-.72.07-.72-.37A1.56,1.56,0,0,1,195.59,297.46Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 213.145px 288.056px;"
                                    id="elz86sislh7q" class="animable"></path>
                                <path
                                    d="M195.59,274l7.87-4.56c.4-.23.72-.07.72.36a1.55,1.55,0,0,1-.72,1.2l-7.87,4.56c-.39.23-.72.07-.72-.36A1.57,1.57,0,0,1,195.59,274Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 199.525px 272.5px;"
                                    id="el8bg9mac1aq9" class="animable"></path>
                                <path
                                    d="M194.86,322.35a.23.23,0,0,1-.17-.08.24.24,0,0,1,0-.35l4.12-4.24,4.08-.51,4.1-3.59,4-1.08,4.13-8.21,4.13,2,4-3.52h.07l3.95-.75,4-6.91a.25.25,0,1,1,.43.25l-4.11,7.11-4.11.78-4.14,3.64-4-2-4,8-4.11,1.12-4.08,3.59-4.05.52-4,4.11A.27.27,0,0,1,194.86,322.35Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 213.181px 308.657px;"
                                    id="elirlst02a3qs" class="animable"></path>
                                <g id="elre35w1g5o2">
                                    <g style="opacity: 0.3; transform-origin: 213.181px 308.657px;" class="animable">
                                        <path
                                            d="M194.86,322.35a.23.23,0,0,1-.17-.08.24.24,0,0,1,0-.35l4.12-4.24,4.08-.51,4.1-3.59,4-1.08,4.13-8.21,4.13,2,4-3.52h.07l3.95-.75,4-6.91a.25.25,0,1,1,.43.25l-4.11,7.11-4.11.78-4.14,3.64-4-2-4,8-4.11,1.12-4.08,3.59-4.05.52-4,4.11A.27.27,0,0,1,194.86,322.35Z"
                                            id="el6yvsey3xfas" class="animable"
                                            style="transform-origin: 213.181px 308.657px;"></path>
                                    </g>
                                </g>
                                <path
                                    d="M196.93,312.38a.52.52,0,0,1,0,.21.26.26,0,0,1-.12.13l-.24.14a.08.08,0,0,1-.11,0,.21.21,0,0,1,0-.15v-5l-1,1.68q-.06.11-.12.12a.08.08,0,0,1-.11,0l-.14-.2a.2.2,0,0,1,0-.16.36.36,0,0,1,.06-.2l1.27-2.24a.4.4,0,0,1,.1-.12l.09-.06.24-.14a.09.09,0,0,1,.12,0,.18.18,0,0,1,0,.14Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 196.029px 309.625px;"
                                    id="elwxa5s3ldf9q" class="animable"></path>
                                <path
                                    d="M199.53,307.76a3.76,3.76,0,0,0,.27-.65,2.63,2.63,0,0,0,.09-.72,1.06,1.06,0,0,0-.19-.71c-.12-.14-.31-.14-.58,0a1.14,1.14,0,0,0-.35.3,2,2,0,0,0-.25.39,3.53,3.53,0,0,0-.15.46,4,4,0,0,0-.09.48.6.6,0,0,1-.06.19.36.36,0,0,1-.1.11l-.27.15s-.07,0-.09,0a.16.16,0,0,1,0-.12,3.52,3.52,0,0,1,.1-.75,4.1,4.1,0,0,1,.27-.79,4.48,4.48,0,0,1,.44-.72,2.07,2.07,0,0,1,.59-.52,1.13,1.13,0,0,1,.58-.18.62.62,0,0,1,.41.18,1.05,1.05,0,0,1,.26.48,3,3,0,0,1,.08.71,4.68,4.68,0,0,1,0,.55,4.54,4.54,0,0,1-.09.51c-.05.17-.11.34-.18.52s-.16.36-.26.56l-1.33,2.67,1.82-1.05a.08.08,0,0,1,.11,0s0,.07,0,.14v.33a.35.35,0,0,1,0,.2.23.23,0,0,1-.11.14l-2.56,1.48a.09.09,0,0,1-.11,0,.2.2,0,0,1-.05-.14v-.33a.58.58,0,0,1,0-.19,1.8,1.8,0,0,1,.1-.24Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 199.148px 308.399px;"
                                    id="elj10js1cj4b" class="animable"></path>
                                <path
                                    d="M204.23,304.45c0,.27,0,.52,0,.77s0,.49,0,.77a6,6,0,0,1-.09,1.05,5.38,5.38,0,0,1-.28,1,3.18,3.18,0,0,1-.47.8,2.32,2.32,0,0,1-.67.58,1.18,1.18,0,0,1-.68.2.68.68,0,0,1-.46-.26,1.51,1.51,0,0,1-.28-.64,5.11,5.11,0,0,1-.1-.94V306.2a7.46,7.46,0,0,1,.1-1.06,4.27,4.27,0,0,1,.28-1,3.7,3.7,0,0,1,.46-.8,2.39,2.39,0,0,1,.68-.59,1.13,1.13,0,0,1,.67-.19.66.66,0,0,1,.47.27,1.66,1.66,0,0,1,.28.64A4.35,4.35,0,0,1,204.23,304.45Zm-2.47,3a1.88,1.88,0,0,0,.25,1.13c.16.19.4.19.71,0a1.67,1.67,0,0,0,.7-.82,3.77,3.77,0,0,0,.26-1.43v-1.54a1.89,1.89,0,0,0-.26-1.14c-.16-.19-.39-.19-.7,0a1.69,1.69,0,0,0-.71.82,3.82,3.82,0,0,0-.25,1.43v1.55Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 202.716px 306.09px;"
                                    id="eldbsgypq2v2a" class="animable"></path>
                                <path
                                    d="M195.59,325.57l35.11-20.34c.39-.23.72-.07.72.37a1.56,1.56,0,0,1-.72,1.19l-35.11,20.35c-.39.23-.72.06-.72-.37A1.57,1.57,0,0,1,195.59,325.57Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 213.145px 316.184px;"
                                    id="elvfaq206wx3g" class="animable"></path>
                                <path
                                    d="M195.59,302.11l7.87-4.57c.4-.23.72-.06.72.37a1.55,1.55,0,0,1-.72,1.2l-7.87,4.56c-.39.23-.72.07-.72-.36A1.56,1.56,0,0,1,195.59,302.11Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 199.525px 300.606px;"
                                    id="eli6we33ubwq" class="animable"></path>
                                <path
                                    d="M243.6,266a.26.26,0,0,1-.19-.1.24.24,0,0,1,0-.35l4.06-3.24,4.09-4.67,4.15-.61,4-.89,4.11-4.84,4,.71,4-6.41,4.12.06,4-3.55a.25.25,0,0,1,.36,0,.25.25,0,0,1,0,.35l-4.13,3.69-4-.07-4.07,6.46-4.09-.72-4,4.75-4.15.94-4,.58-4,4.56L243.76,266A.25.25,0,0,1,243.6,266Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 261.853px 254.023px;"
                                    id="el7sjejy2hvq7" class="animable"></path>
                                <path
                                    d="M245.21,252.31l.1-.09.11-.08A1.14,1.14,0,0,1,246,252a.72.72,0,0,1,.49.18,1.28,1.28,0,0,1,.32.51,2.78,2.78,0,0,1,.11.81,4.22,4.22,0,0,1-.11.93,4.93,4.93,0,0,1-.32.89,3.6,3.6,0,0,1-.49.75,2.32,2.32,0,0,1-.62.52,1.2,1.2,0,0,1-.61.19.79.79,0,0,1-.49-.19A1.18,1.18,0,0,1,244,256a2.43,2.43,0,0,1-.12-.81,4.38,4.38,0,0,1,0-.51c0-.17.06-.33.1-.49l.14-.47c.05-.15.11-.29.16-.43l1.08-3.08.06-.15a.33.33,0,0,1,.12-.14l.34-.19s.07,0,.09,0a.17.17,0,0,1,0,.12.19.19,0,0,1,0,.08.08.08,0,0,1,0,.05Zm-.76,2.6a1.43,1.43,0,0,0,.07.48.76.76,0,0,0,.19.33.46.46,0,0,0,.31.13.76.76,0,0,0,.4-.12,1.69,1.69,0,0,0,.41-.35,2.71,2.71,0,0,0,.31-.49,3,3,0,0,0,.19-.55,2.68,2.68,0,0,0,.07-.56,1.73,1.73,0,0,0-.07-.48.87.87,0,0,0-.19-.33.51.51,0,0,0-.31-.13.9.9,0,0,0-.41.12,1.65,1.65,0,0,0-.4.35,1.93,1.93,0,0,0-.31.49,2.55,2.55,0,0,0-.19.55A2.2,2.2,0,0,0,244.45,254.91Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 245.396px 253.255px;"
                                    id="el2fjwwr40oe8" class="animable"></path>
                                <path
                                    d="M249.33,250.84a3.83,3.83,0,0,0,.27-.66,3.08,3.08,0,0,0,.09-.72,1.08,1.08,0,0,0-.19-.7c-.12-.15-.32-.14-.58,0a1.48,1.48,0,0,0-.36.29,2.23,2.23,0,0,0-.24.4,2.16,2.16,0,0,0-.15.45c0,.16-.07.32-.1.48a.47.47,0,0,1-.06.19.26.26,0,0,1-.09.11l-.27.16a.08.08,0,0,1-.1,0,.17.17,0,0,1,0-.12,2.91,2.91,0,0,1,.1-.74,3.88,3.88,0,0,1,.27-.79,3.31,3.31,0,0,1,.44-.72,2.11,2.11,0,0,1,.59-.53,1.1,1.1,0,0,1,.57-.17.58.58,0,0,1,.42.18,1,1,0,0,1,.25.47,2.63,2.63,0,0,1,.09.72,4.63,4.63,0,0,1,0,.54,3.06,3.06,0,0,1-.1.51,3.93,3.93,0,0,1-.17.52c-.08.18-.16.36-.26.56l-1.33,2.67,1.82-1.05a.09.09,0,0,1,.11,0,.21.21,0,0,1,.05.15v.33a.53.53,0,0,1-.05.2.4.4,0,0,1-.11.14l-2.56,1.47q-.08,0-.12,0a.21.21,0,0,1,0-.15v-.33a.58.58,0,0,1,0-.19,1.33,1.33,0,0,1,.1-.23Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 248.97px 251.475px;"
                                    id="eltccmov1qgaq" class="animable"></path>
                                <path
                                    d="M253.37,245.47a.08.08,0,0,1,.11,0,.17.17,0,0,1,.05.15V246a1.24,1.24,0,0,1,0,.18,2.07,2.07,0,0,1,0,.22l-1.32,6a1.46,1.46,0,0,1-.07.19.24.24,0,0,1-.11.13l-.27.16a.08.08,0,0,1-.1,0,.17.17,0,0,1,0-.13v0a.31.31,0,0,1,0-.08l1.32-6-2,1.13a.09.09,0,0,1-.11,0,.21.21,0,0,1-.05-.15v-.33a.53.53,0,0,1,.05-.2.33.33,0,0,1,.11-.14Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 252.176px 249.173px;"
                                    id="elrl1cyf05zyo" class="animable"></path>
                                <path
                                    d="M244.34,269.26l35.1-20.35c.4-.23.72-.06.72.37a1.55,1.55,0,0,1-.72,1.2l-35.1,20.34c-.4.23-.72.06-.72-.37A1.53,1.53,0,0,1,244.34,269.26Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 261.89px 259.865px;"
                                    id="el4l7dq4g1nk" class="animable"></path>
                                <path
                                    d="M244.34,245.79l7.86-4.56c.4-.23.73-.07.73.36a1.56,1.56,0,0,1-.73,1.2l-7.86,4.56c-.4.23-.72.07-.72-.36A1.55,1.55,0,0,1,244.34,245.79Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 248.275px 244.29px;"
                                    id="el7x576cedotu" class="animable"></path>
                                <path
                                    d="M243.6,294.14a.31.31,0,0,1-.13,0,.27.27,0,0,1-.08-.35l4.15-6.8,4.18.77,3.93-1.08,4.06-4.95,4-1,4.1-7.32,4.2,1.22,3.94-.75,4-3.56a.25.25,0,1,1,.33.37l-4.11,3.66h-.06l-4.14.78L268.1,274l-4,7.16-4.09,1-4.06,4.95-.07,0-4.12,1.13h-.06l-3.89-.72-4,6.51A.25.25,0,0,1,243.6,294.14Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 261.873px 282.19px;"
                                    id="elf3doyqgwcd" class="animable"></path>
                                <g id="el3nm2fvkjeu2">
                                    <g style="opacity: 0.3; transform-origin: 261.873px 282.19px;" class="animable">
                                        <path
                                            d="M243.6,294.14a.31.31,0,0,1-.13,0,.27.27,0,0,1-.08-.35l4.15-6.8,4.18.77,3.93-1.08,4.06-4.95,4-1,4.1-7.32,4.2,1.22,3.94-.75,4-3.56a.25.25,0,1,1,.33.37l-4.11,3.66h-.06l-4.14.78L268.1,274l-4,7.16-4.09,1-4.06,4.95-.07,0-4.12,1.13h-.06l-3.89-.72-4,6.51A.25.25,0,0,1,243.6,294.14Z"
                                            id="el36nggu3d8ca" class="animable"
                                            style="transform-origin: 261.873px 282.19px;"></path>
                                    </g>
                                </g>
                                <path
                                    d="M245.48,282.35l-.08.06-.08,0a1.23,1.23,0,0,1-.55.18.74.74,0,0,1-.48-.15A1,1,0,0,1,244,282a2.27,2.27,0,0,1-.13-.85,3.71,3.71,0,0,1,.12-.93,4.73,4.73,0,0,1,.32-.87,3.76,3.76,0,0,1,.48-.72,2.18,2.18,0,0,1,.57-.5,1.31,1.31,0,0,1,.62-.2.71.71,0,0,1,.47.19,1.15,1.15,0,0,1,.3.51,2.69,2.69,0,0,1,.1.8,2.93,2.93,0,0,1,0,.49c0,.17-.08.34-.12.52s-.1.34-.16.51-.1.32-.15.45l-1.08,3.08-.07.15a.24.24,0,0,1-.12.14l-.34.2a.06.06,0,0,1-.08,0,.22.22,0,0,1,0-.13s0,0,0-.07a.39.39,0,0,0,0-.06Zm.77-2.59a1.45,1.45,0,0,0-.07-.49A.63.63,0,0,0,246,279a.39.39,0,0,0-.29-.11.85.85,0,0,0-.38.11,1.62,1.62,0,0,0-.38.32,2,2,0,0,0-.29.45,2.38,2.38,0,0,0-.25,1.1,1.8,1.8,0,0,0,.06.5.71.71,0,0,0,.19.31.44.44,0,0,0,.29.11.66.66,0,0,0,.38-.11,1.62,1.62,0,0,0,.38-.32,2.66,2.66,0,0,0,.29-.45,2.39,2.39,0,0,0,.19-.53A2.25,2.25,0,0,0,246.25,279.76Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 245.364px 281.458px;"
                                    id="eli73b2sh0cm" class="animable"></path>
                                <path
                                    d="M247.79,281.66a1.06,1.06,0,0,0,.09.25.37.37,0,0,0,.16.17.49.49,0,0,0,.28,0,1.44,1.44,0,0,0,.46-.19,1.73,1.73,0,0,0,.35-.27,2.24,2.24,0,0,0,.29-.38,2.55,2.55,0,0,0,.2-.48,2,2,0,0,0,.07-.56,1.14,1.14,0,0,0-.07-.46.42.42,0,0,0-.19-.22.56.56,0,0,0-.29,0,1.38,1.38,0,0,0-.36.16l-.5.28a.08.08,0,0,1-.11,0,.18.18,0,0,1,0-.14v-.33a.51.51,0,0,1,0-.17l.07-.16,1.07-2.4-1.72,1a.08.08,0,0,1-.11,0,.23.23,0,0,1-.05-.15v-.33a.49.49,0,0,1,.05-.2.33.33,0,0,1,.11-.14l2.35-1.35a.08.08,0,0,1,.11,0,.2.2,0,0,1,.05.14v.33a.57.57,0,0,1,0,.18,1.54,1.54,0,0,1-.08.19l-1.05,2.36a1.16,1.16,0,0,1,.54-.17.59.59,0,0,1,.42.13.92.92,0,0,1,.28.43,2.38,2.38,0,0,1,.1.71,3.39,3.39,0,0,1-.12.91,4.14,4.14,0,0,1-.32.81,3.43,3.43,0,0,1-.47.66,2.4,2.4,0,0,1-.57.46,1.75,1.75,0,0,1-.69.26.75.75,0,0,1-.48-.1.92.92,0,0,1-.28-.36,1.51,1.51,0,0,1-.09-.53.51.51,0,0,1,0-.17.27.27,0,0,1,.1-.11l.27-.16s.08,0,.1,0A.12.12,0,0,1,247.79,281.66Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 248.797px 279.282px;"
                                    id="eld34hm4rrsol" class="animable"></path>
                                <path
                                    d="M244.34,297.37,279.44,277c.4-.23.72-.07.72.37a1.53,1.53,0,0,1-.72,1.19l-35.1,20.35c-.4.23-.72.06-.72-.37A1.55,1.55,0,0,1,244.34,297.37Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 261.89px 287.954px;"
                                    id="elvyj0epz6ml" class="animable"></path>
                                <path
                                    d="M244.34,273.91l7.86-4.57c.4-.23.73-.06.73.37a1.56,1.56,0,0,1-.73,1.2l-7.86,4.56c-.4.23-.72.07-.72-.36A1.53,1.53,0,0,1,244.34,273.91Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 248.275px 272.406px;"
                                    id="elfndx2xoeg4o" class="animable"></path>
                                <path d="M296.41,220.38A4.58,4.58,0,0,1,301,220l-4.63,12.48Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 298.685px 226.018px;"
                                    id="eljoo4w1blycn" class="animable"></path>
                                <path d="M291.78,225.38a13.76,13.76,0,0,1,4.63-5v12.14Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 294.095px 226.45px;"
                                    id="el684fkb49z1x" class="animable"></path>
                                <path d="M288.91,233.1a24.39,24.39,0,0,1,2.87-7.72l4.63,7.14Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 292.66px 229.24px;"
                                    id="elxxai2beueqk" class="animable"></path>
                                <g id="elhzup40pviq">
                                    <path
                                        d="M291.78,225.38a24.39,24.39,0,0,0-2.87,7.72l7.5-.58V220.38A13.76,13.76,0,0,0,291.78,225.38Z"
                                        style="opacity: 0.3; transform-origin: 292.66px 226.74px;" class="animable">
                                    </path>
                                </g>
                                <path d="M301,220a6.48,6.48,0,0,1,2.87,4.4l-7.5,8.08Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 300.12px 226.24px;"
                                    id="elk0di6yfvnx9" class="animable"></path>
                                <path d="M288.91,240.6a15.13,15.13,0,0,1-.39-3.53,21.45,21.45,0,0,1,.39-4l7.5-.58Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 292.465px 236.545px;"
                                    id="el3t8slhzvh0t" class="animable"></path>
                                <path d="M303.91,231.94a24.39,24.39,0,0,1-2.87,7.72l-4.63-7.14Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 300.16px 235.8px;"
                                    id="el03rimb05rtse" class="animable"></path>
                                <path d="M296.41,244.66a4.58,4.58,0,0,1-4.63.34l4.63-12.48Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 294.095px 238.996px;"
                                    id="eltg89ixul3fh" class="animable"></path>
                                <path d="M288.91,240.6l7.5-8.08L291.78,245A6.48,6.48,0,0,1,288.91,240.6Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 292.66px 238.76px;"
                                    id="elpjmoj01vpd" class="animable"></path>
                                <path d="M303.91,224.44a15.16,15.16,0,0,1,.38,3.53,21.43,21.43,0,0,1-.38,4l-7.5.58Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 300.35px 228.495px;"
                                    id="elfpx388eigjn" class="animable"></path>
                                <path d="M301,239.66a13.76,13.76,0,0,1-4.63,5V232.52Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 298.685px 238.59px;"
                                    id="el8a0izpo3hxu" class="animable"></path>
                                <path
                                    d="M292.48,250.85l7.86-4.56c.4-.23.72-.07.72.36a1.55,1.55,0,0,1-.72,1.2l-7.86,4.56c-.4.23-.72.07-.72-.36A1.55,1.55,0,0,1,292.48,250.85Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 296.41px 249.35px;"
                                    id="eljhbdialh68" class="animable"></path>
                                <path
                                    d="M290.74,256.56,302.08,250c.4-.23.72-.07.72.37a1.53,1.53,0,0,1-.72,1.19l-11.34,6.58c-.4.23-.72.07-.72-.36A1.53,1.53,0,0,1,290.74,256.56Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 296.41px 254.07px;"
                                    id="el3x6ipaj3zim" class="animable"></path>
                                <path
                                    d="M290.74,261.26l11.34-6.58c.4-.23.72-.06.72.37a1.53,1.53,0,0,1-.72,1.19l-11.34,6.58c-.4.23-.72.07-.72-.36A1.53,1.53,0,0,1,290.74,261.26Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 296.41px 258.751px;"
                                    id="elcveqzkde3t7" class="animable"></path>
                                <path
                                    d="M290.74,266l11.34-6.58c.4-.23.72-.06.72.37a1.55,1.55,0,0,1-.72,1.2l-11.34,6.57c-.4.23-.72.07-.72-.36A1.55,1.55,0,0,1,290.74,266Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 296.41px 263.491px;"
                                    id="el013alwfixe4sb" class="animable"></path>
                                <path d="M324.84,203.9a4.58,4.58,0,0,1,4.63-.34L324.84,216Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 327.155px 209.544px;"
                                    id="elpc73rsfj03q" class="animable"></path>
                                <path d="M320.21,208.9a13.85,13.85,0,0,1,4.63-5V216Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 322.525px 209.95px;"
                                    id="elangqpz2ckz" class="animable"></path>
                                <path d="M317.35,216.62a24.38,24.38,0,0,1,2.86-7.72l4.63,7.14Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 321.095px 212.76px;"
                                    id="el26emsp62uyn" class="animable"></path>
                                <path d="M329.47,203.56a6.48,6.48,0,0,1,2.87,4.4l-7.5,8.08Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 328.59px 209.8px;"
                                    id="elfmj93v5dn6j" class="animable"></path>
                                <path d="M317.35,224.12a15.13,15.13,0,0,1-.39-3.53,21.53,21.53,0,0,1,.39-4l7.49-.58Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 320.9px 220.065px;"
                                    id="elexszxm0xygm" class="animable"></path>
                                <path d="M332.34,215.46a24.3,24.3,0,0,1-2.87,7.72L324.84,216Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 328.59px 219.32px;"
                                    id="elyzkxriw7ab" class="animable"></path>
                                <path d="M324.84,228.18a4.6,4.6,0,0,1-4.63.35L324.84,216Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 322.525px 222.498px;"
                                    id="elpuglidic0ah" class="animable"></path>
                                <path d="M317.35,224.12l7.49-8.08-4.63,12.49A6.52,6.52,0,0,1,317.35,224.12Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 321.095px 222.285px;"
                                    id="el2tw70gujp5g" class="animable"></path>
                                <g id="elu6s2guz4ufp">
                                    <path
                                        d="M320.21,208.9a24.38,24.38,0,0,0-2.86,7.72,21.53,21.53,0,0,0-.39,4,15.13,15.13,0,0,0,.39,3.53,6.52,6.52,0,0,0,2.86,4.41L324.84,216V203.9A13.85,13.85,0,0,0,320.21,208.9Z"
                                        style="opacity: 0.3; transform-origin: 320.9px 216.23px;" class="animable">
                                    </path>
                                </g>
                                <path d="M332.34,208a15.13,15.13,0,0,1,.39,3.53,21.45,21.45,0,0,1-.39,4l-7.5.58Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 328.785px 212.055px;"
                                    id="elqjqdx56d25" class="animable"></path>
                                <path d="M329.47,223.18a13.68,13.68,0,0,1-4.63,5V216Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 327.155px 222.09px;"
                                    id="el1kj5pl3im0c" class="animable"></path>
                                <path
                                    d="M320.91,234.43l7.87-4.56c.4-.23.72-.07.72.36a1.53,1.53,0,0,1-.72,1.2L320.91,236c-.4.23-.72.06-.72-.37A1.55,1.55,0,0,1,320.91,234.43Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 324.845px 232.934px;"
                                    id="elkr9vc95ysih" class="animable"></path>
                                <path
                                    d="M319.18,240.14l11.33-6.58c.4-.23.72-.06.72.37a1.55,1.55,0,0,1-.72,1.2l-11.33,6.57c-.4.23-.73.07-.73-.36A1.56,1.56,0,0,1,319.18,240.14Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 324.84px 237.631px;"
                                    id="el4ag89pxdx7w" class="animable"></path>
                                <path
                                    d="M319.18,244.84l11.33-6.57c.4-.23.72-.07.72.36a1.55,1.55,0,0,1-.72,1.2l-11.33,6.57c-.4.24-.73.07-.73-.36A1.56,1.56,0,0,1,319.18,244.84Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 324.84px 242.337px;"
                                    id="elrbaqkrlsfr" class="animable"></path>
                                <path
                                    d="M319.18,249.54,330.51,243c.4-.23.72-.07.72.36a1.55,1.55,0,0,1-.72,1.2l-11.33,6.58c-.4.23-.73.06-.73-.37A1.56,1.56,0,0,1,319.18,249.54Z"
                                    style="fill: rgb(224, 224, 224); transform-origin: 324.84px 247.069px;"
                                    id="elzojn2yzx89d" class="animable"></path>
                            </g>
                        </g>
                        <g id="freepik--magnifying-glass--inject-14" class="animable"
                            style="transform-origin: 243.259px 403.063px;">
                            <g id="freepik--Glass--inject-14" class="animable"
                                style="transform-origin: 243.259px 403.063px;">
                                <path
                                    d="M324.69,366.68A13.35,13.35,0,0,0,319,356c-1.62-1-3.11-1.15-4.22-.58h0c-6.69,3.36-53.7,33.51-56.71,35l0,0a2.13,2.13,0,0,0-1,1.94,6.72,6.72,0,0,0,2.86,5.37,2.11,2.11,0,0,0,2.15.28l0,0c4.76-2.62,51.17-22.4,60.65-27.48h0C323.91,369.93,324.63,368.6,324.69,366.68Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 290.878px 376.637px;"
                                    id="elmrs57zugyoa" class="animable"></path>
                                <g id="elkczv01g1j5">
                                    <path
                                        d="M322.84,360.18A12,12,0,0,0,319,356c-1.61-1-3.1-1.15-4.2-.59l-.14.07c-6.11,3.13-41.1,25.45-52.87,32.71l-.08,0-.48.3-.14.09-.27.16-.32.19,0,0c-1.24.76-2.09,1.25-2.41,1.41l0,0a1.44,1.44,0,0,0-.27.22,2.32,2.32,0,0,0-.68,1.72,5,5,0,0,0,0,.67c0,.09,0,.18,0,.27s0,.27.08.41l.09.33c0,.13.08.25.13.38a2.47,2.47,0,0,0,.1.29s0,0,0,0Z"
                                        style="opacity: 0.1; transform-origin: 289.984px 374.858px;"
                                        class="animable"></path>
                                </g>
                                <path
                                    d="M259.94,397.75a6.67,6.67,0,0,1-2.85-5.35c.06-1.93,1.44-2.67,3.09-1.65A6.73,6.73,0,0,1,263,396.1C263,398,261.58,398.77,259.94,397.75Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 260.045px 394.247px;"
                                    id="el1t60pdx8aid" class="animable"></path>
                                <path
                                    d="M245.89,399.05a5.16,5.16,0,0,0,2.19,4.11,1.67,1.67,0,0,0,1.64.22h0l11.38-6.05h0a1.64,1.64,0,0,0,.72-1.48,5.16,5.16,0,0,0-2.19-4.11,1.64,1.64,0,0,0-1.64-.21h0l-11.37,6.05h0A1.65,1.65,0,0,0,245.89,399.05Z"
                                    style="fill: rgb(55, 71, 79); transform-origin: 253.856px 397.451px;"
                                    id="elnjbjsrtegp8" class="animable"></path>
                                <path
                                    d="M246.63,397.56a1.65,1.65,0,0,0-.74,1.49,4.43,4.43,0,0,0,.34,1.75L260.9,393a4.44,4.44,0,0,0-1.26-1.26,1.64,1.64,0,0,0-1.64-.21l-11.37,6.05Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 253.393px 396.1px;"
                                    id="elxylhdhl7cg" class="animable"></path>
                                <path
                                    d="M260.48,409.14c0-7.29-4.82-14.57-14.45-20.13-19.26-11.12-50.49-11.12-69.75,0-9.63,5.56-14.45,12.84-14.45,20.13h0v13.43c0,7.28,4.82,14.57,14.45,20.13,19.26,11.12,50.49,11.12,69.75,0,9.63-5.56,14.45-12.85,14.45-20.13V409.14Zm-81.81-16c8.6-5,20.14-7.7,32.49-7.7s23.89,2.73,32.49,7.7c7.78,4.49,12.06,10.17,12.06,16s-4.28,11.52-12.06,16c-8.6,5-20.14,7.7-32.49,7.7s-23.89-2.74-32.49-7.7c-7.78-4.49-12.07-10.18-12.07-16S170.89,397.63,178.67,393.14Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 211.155px 415.855px;"
                                    id="elqqi3p6o3i3c" class="animable"></path>
                                <g id="elrhkbzgmnan">
                                    <path
                                        d="M176.28,429.28c19.26,11.12,50.49,11.12,69.75,0s19.26-29.15,0-40.27-50.49-11.12-69.75,0S157,418.16,176.28,429.28Zm-9.68-20.14c0-5.83,4.28-11.51,12.06-16,8.6-5,20.14-7.7,32.49-7.7s23.89,2.73,32.5,7.7c7.77,4.49,12.06,10.17,12.06,16s-4.29,11.52-12.06,16c-8.61,5-20.15,7.7-32.5,7.7s-23.89-2.74-32.49-7.7C170.89,420.66,166.6,415,166.6,409.14Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 211.151px 409.145px;"
                                        class="animable"></path>
                                </g>
                                <path
                                    d="M166.6,409.14a13.34,13.34,0,0,0,1.92,6.72c2-3.39,5.4-6.57,10.15-9.3,8.59-5,20.13-7.7,32.49-7.7s23.89,2.73,32.48,7.7c4.74,2.73,8.19,5.91,10.15,9.3a13.34,13.34,0,0,0,1.92-6.72c0-5.83-4.28-11.51-12.07-16-8.59-5-20.14-7.7-32.48-7.7s-23.9,2.74-32.49,7.7C170.88,397.63,166.6,403.31,166.6,409.14Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 211.155px 400.65px;"
                                    id="eloiai8huc2ys" class="animable"></path>
                                <g id="elg9idhbhasss">
                                    <path
                                        d="M166.6,409.14a13.34,13.34,0,0,0,1.92,6.72c2-3.39,5.4-6.57,10.15-9.3,8.59-5,20.13-7.7,32.49-7.7s23.89,2.73,32.48,7.7c4.74,2.73,8.19,5.91,10.15,9.3a13.34,13.34,0,0,0,1.92-6.72c0-5.83-4.28-11.51-12.07-16-8.59-5-20.14-7.7-32.48-7.7s-23.9,2.74-32.49,7.7C170.88,397.63,166.6,403.31,166.6,409.14Z"
                                        style="opacity: 0.1; transform-origin: 211.155px 400.65px;"
                                        class="animable"></path>
                                </g>
                                <g id="el11eog84qmmgb">
                                    <path
                                        d="M178.66,399.21c8.6-5,20.14-7.7,32.49-7.7s23.89,2.74,32.5,7.7c6.41,3.71,10.44,8.23,11.66,13-1.22,4.74-5.25,9.26-11.66,13-8.61,5-20.15,7.7-32.5,7.7s-23.89-2.74-32.49-7.7c-6.42-3.71-10.45-8.23-11.66-13C168.21,407.44,172.24,402.92,178.66,399.21Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 211.155px 412.21px;"
                                        class="animable"></path>
                                </g>
                                <g id="ele58ddeoys4u">
                                    <path
                                        d="M199.53,436.83v13.41a64.43,64.43,0,0,1-23.25-7.54c-9.63-5.56-14.45-12.85-14.45-20.14V409.14a17,17,0,0,1,.59-4.4h0c-2.34,8.67,2.28,17.85,13.85,24.54A65,65,0,0,0,199.53,436.83Z"
                                        style="opacity: 0.1; transform-origin: 180.68px 427.49px;" class="animable">
                                    </path>
                                </g>
                            </g>
                        </g>
                        <g id="freepik--Character--inject-14" class="animable animator-active"
                            style="transform-origin: 394.325px 267.982px;">
                            <g id="freepik--character--inject-14" class="animable"
                                style="transform-origin: 394.325px 267.982px;">
                                <path
                                    d="M434.61,354.86c.59.24.71,1.36.75,3.59,0,1.69.32,4.65-1.66,5.19s-4.88.18-6.11-1.44c-1.54-2-2.57-3.79-4.77-6.27-1.91-2.14-4-4.15-4.71-7.11-.65-2.68,0-3.82,1.81-4.56,2.52-1,6.36,2.56,8.31,3.15C429.9,347.92,434,354.62,434.61,354.86Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 426.622px 353.979px;"
                                    id="el89ihycjxukt" class="animable"></path>
                                <path d="M434.66,352.8l-.06,2.73a6.68,6.68,0,0,1-6.92,0c-.12-.26-.63-3.93-.63-3.93Z"
                                    style="fill: rgb(255, 168, 167); transform-origin: 430.855px 354.048px;"
                                    id="elrfg0wdt5we" class="animable"></path>
                                <path
                                    d="M412.09,370.14s.73,2.4,1.11,4.49c.3,1.66.72,4.44.11,5.67s-2.89,2-6.39,1.88c-2.27-.07-5.84,1.39-8.3,2.69s-7.75,1.78-10.39,1.41c-3.11-.44-6.3-2.32-6.77-3.62s.22-2.63,7.64-5.6c.07,0,10.3-3.1,13.94-6.94Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 397.484px 378.261px;"
                                    id="elmh6ia5ut9v9" class="animable"></path>
                                <path
                                    d="M412.16,367.18s-.06,2-.08,3.19-1.42,2.86-5,2.65c-2.49-.14-4.22-.85-4.07-2.9l.07-3Z"
                                    style="fill: rgb(255, 168, 167); transform-origin: 407.58px 370.079px;"
                                    id="elpfmkkup41l" class="animable"></path>
                                <path
                                    d="M437.26,316.51a74.16,74.16,0,0,0-2.91-14.33s1.25-12.28,2-23.94c.79-12.58,1.53-19.06-.95-37.24,0,0-38.59-3.47-39.64,11.08s.44,51.67.78,58.08,1.31,12.09,2.4,22.49,4.19,34.51,4.19,34.51a9.63,9.63,0,0,0,9.05,0s3.51-29.06,3.38-36.44a63.29,63.29,0,0,0-2.44-16.18s1-12,2-22.42,1.75-15.43,2-20l.88-.41s.49,18,.83,24.44,1.21,12.57,2.79,24.49C423,331,427.24,353,427.24,353c4.59,2.61,7.42-.16,7.42-.16S438.31,325.48,437.26,316.51Z"
                                    style="fill: rgb(55, 71, 79); transform-origin: 416.42px 304.464px;"
                                    id="elb8em0dgkofg" class="animable"></path>
                                <path
                                    d="M417.07,272.17s10-4.64,15-8.91c0,0-4.72,6.35-10.8,9.08,0,0-2.65,22.34-2.63,21.89l-.74-22.07Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 424.57px 278.748px;"
                                    id="elhjheyouekaw" class="animable"></path>
                                <polygon
                                    points="410.16 189.15 411.66 202.47 424.24 201.84 422.85 186.29 410.16 189.15"
                                    style="fill: rgb(255, 168, 167); transform-origin: 417.2px 194.38px;"
                                    id="elwekkrzh5cdd" class="animable"></polygon>
                                <path
                                    d="M429,194.25c4.68-.22,7.06.49,9.17,4.53s2.92,16.11,3.66,22.34.91,10.61-1.65,11.25-12.54.92-12.54.92Z"
                                    style="fill: rgb(55, 71, 79); transform-origin: 434.974px 213.752px;"
                                    id="elvdlwfo3lb8d" class="animable"></path>
                                <path
                                    d="M436.89,201.15c-.67-3.72-5.58-7.64-10.17-6.9l-3.11.53c-.55,2.24-6.69,3.64-12.56,2.26-1.77.47-7.59,1.56-9.07,2.05-4.21,1.4-6,5.55-6.61,19.3,0,0,.34,31.15.17,37.35,10.41,4.4,21.34,4.51,27.41,3.33,12.64-2.46,14.27-7.64,14.27-7.64l-1.88-14.25S438.43,209.59,436.89,201.15Z"
                                    style="fill: rgb(69, 90, 100); transform-origin: 416.345px 226.934px;"
                                    id="eldg7qvdfukca" class="animable"></path>
                                <path
                                    d="M410.65,193.54l.1.84a18.63,18.63,0,0,0,7.72,0c4.09-.91,4.92-2.06,4.92-2.06l-.09-1s1-.37,1.55,1.19a18.37,18.37,0,0,1,.6,1.91s.47,2.87-4.34,4.33a14.89,14.89,0,0,1-12-1.31l-1.88.4s1.63-3.76,2.12-4.52a1.25,1.25,0,0,1,1.18-.66Z"
                                    style="fill: rgb(55, 71, 79); transform-origin: 416.346px 195.368px;"
                                    id="el4cig3oqzmju" class="animable"></path>
                                <polygon
                                    points="372.24 179.25 347.29 192.28 359.69 226.17 382.97 213.13 372.24 179.25"
                                    style="fill: rgb(69, 90, 100); transform-origin: 365.13px 202.71px;"
                                    id="elyci367jkxmn" class="animable"></polygon>
                                <polygon points="371.1 182.57 350.16 193.5 361.14 222.64 380.67 211.7 371.1 182.57"
                                    style="fill: rgb(245, 245, 245); transform-origin: 365.415px 202.605px;"
                                    id="eljie66mkomj9" class="animable"></polygon>
                                <g id="els1lfwe5nncr">
                                    <path
                                        d="M366.68,185.72s-.18-.47-.41-1-2-.23-3.89.76l-3.68,1.91c-1.93,1-3.31,2.26-3.08,2.83l.4,1Z"
                                        style="opacity: 0.15; transform-origin: 361.137px 187.841px;"
                                        class="animable"></path>
                                </g>
                                <path
                                    d="M366.27,181.57c-.13-.36-.89-.3-1.69.13l-1.44.78s-.89-2.24-4.21-.69-2.56,4.15-2.56,4.15l-1.53.84c-.85.47-1.45,1.14-1.35,1.5l.19.66,12.85-6.7Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 360.005px 185.092px;"
                                    id="elp0hq2ln4gvs" class="animable"></path>
                                <path
                                    d="M364.89,183.07c-1.2.59-1.67.88-1.33,1.76s.76,1.73.76,1.73l-5.68,3s-.47-1.28-.68-1.77-.63-.73-1.53-.26l-.34-.36,9-4.57Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 360.59px 186.08px;"
                                    id="el55fxbwgcys" class="animable"></path>
                                <g id="elv9r6t20951s">
                                    <path
                                        d="M364.89,183.07c-1.2.59-1.67.88-1.33,1.76s.76,1.73.76,1.73l-5.68,3s-.47-1.28-.68-1.77-.63-.73-1.53-.26l-.34-.36,9-4.57Z"
                                        style="opacity: 0.3; transform-origin: 360.59px 186.08px;" class="animable">
                                    </path>
                                </g>
                                <path
                                    d="M366.92,185.77l-.4-1c-.23-.58-2-.24-3.89.76l-3.69,1.9c-1.92,1-3.3,2.26-3.08,2.84l.41,1Z"
                                    style="fill: rgb(94, 128, 183); transform-origin: 361.378px 187.879px;"
                                    id="el9inc04af3ju" class="animable"></path>
                                <path
                                    d="M402,199.09c-5.76.5-8.21,1.55-12.53,9.34-4.7,8.47-13.72,23.78-14.86,25.72-1.59,2.69-1.89,6.78-.52,9.25,1.28,2.31,5.35,3.36,10-1.85,5.49-6.2,15.7-21.34,15.7-21.34S408.41,208.77,402,199.09Z"
                                    style="fill: rgb(255, 168, 167); transform-origin: 388.795px 222.197px;"
                                    id="elsyewl71ny" class="animable"></path>
                                <path
                                    d="M376.46,245.17c-4.42-.53-14.73-14.52-17.66-19.09a32.59,32.59,0,0,0-8.94-9.43c-4.67-3.45-4-8.76-1.95-13.62.7-1.68,3.1-.59,3.1-.59l.84,2.31,1.46,4c1,.92,1.56,1.22,1.62.95.13-.52-.72-2.67-.7-4.91,0-2.69,1.91-.92,2.47,0a32.52,32.52,0,0,1,2,4.45c.94,2.41.56,4.85,1.7,6.49s16.53,16.39,16.53,16.39Z"
                                    style="fill: rgb(255, 168, 167); transform-origin: 361.636px 223.631px;"
                                    id="elf13xqeoebqc" class="animable"></path>
                                <path
                                    d="M403.09,198.78c-3.49-.08-7.68.48-10.93,4.7s-16.25,27.16-16.25,27.16l-7.29-6.54A12.71,12.71,0,0,0,363,232a79.49,79.49,0,0,0,6.6,9c3.09,3.38,6.53,5.73,9.35,4.69s5.7-3.27,11.77-11.73,12.7-18.43,12.7-18.43S407.61,205.79,403.09,198.78Z"
                                    style="fill: rgb(55, 71, 79); transform-origin: 384.094px 222.356px;"
                                    id="elerkoktselj" class="animable"></path>
                                <path d="M401.29,172.84s-3.14,4.76-2.78,5.23,2.67.89,2.67.89Z"
                                    style="fill: rgb(242, 143, 143); transform-origin: 399.886px 175.9px;"
                                    id="elkqwc9wvmuoa" class="animable"></path>
                                <path
                                    d="M402.76,175.9a3.75,3.75,0,1,1,3.75-3.74A3.75,3.75,0,0,1,402.76,175.9Zm0-6.66a2.92,2.92,0,1,0,2.91,2.92A2.92,2.92,0,0,0,402.76,169.24Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 402.76px 172.15px;"
                                    id="el5m6u4b7c4wx" class="animable"></path>
                                <path
                                    d="M410,159.65c-6.36,1.34-8.2,4.14-8.8,14.23-.62,10.56.46,13.87,1.84,15.29.94,1,6.14,1.14,8.76.41,3.29-.9,10.71-3.53,14.18-8.84,4.09-6.24,5.16-14.71.79-18.18C420.63,157.67,412.6,159.1,410,159.65Z"
                                    style="fill: rgb(255, 168, 167); transform-origin: 415.303px 174.532px;"
                                    id="elfku3ylvssg" class="animable"></path>
                                <path
                                    d="M410.24,189.88l-.3-1.94a12.5,12.5,0,0,1-6.51,1.47C404.64,190,407.8,190.18,410.24,189.88Z"
                                    style="fill: rgb(242, 143, 143); transform-origin: 406.835px 188.981px;"
                                    id="eloiaunyz7fk" class="animable"></path>
                                <polygon
                                    points="399.37 171.37 410.67 172.84 410.22 173.63 399.37 172.22 399.37 171.37"
                                    style="fill: rgb(38, 50, 56); transform-origin: 405.02px 172.5px;"
                                    id="elz0lqwltlroo" class="animable"></polygon>
                                <path
                                    d="M400.14,163.73a3.68,3.68,0,0,0,1.44-.09,2.26,2.26,0,0,0,.77,2.65,3.22,3.22,0,0,0,2.85.38,2.74,2.74,0,0,0-.31,2,3.18,3.18,0,0,0,3.29,2.38c.07,1.48.09,2.92,1.66,3.59,0,0,1-3.9,4.3-3.41s3.75,4.71,1.67,7.28-4,1.59-4,1.58c.19.09.26,1.34.32,1.57a11.92,11.92,0,0,0,.85,2.14,10.17,10.17,0,0,0,3,3.48,7.32,7.32,0,0,0,6,1.66,6.45,6.45,0,0,0,4.35-3.49,3.66,3.66,0,0,1,.7-1.27,4.21,4.21,0,0,1,1.62-.7,4.76,4.76,0,0,0,2.7-6.72,4.37,4.37,0,0,0,1.67-7.62,5.25,5.25,0,0,0,2.25-5.68,5.33,5.33,0,0,0-3.76-3.6c-1.29-.37-.79-.57-1.19-1.83a4.69,4.69,0,0,0-1.48-2.21,4.74,4.74,0,0,0-4.37-.81,4.44,4.44,0,0,0-3.18-3.41,4.26,4.26,0,0,0-2.24-.09c-.53.13-1.61.62-1.81,1.13-.67-.66-.89-1.53-1.7-2.12a4.83,4.83,0,0,0-7.1,1.51,5.92,5.92,0,0,0-4.44-1.86,4.85,4.85,0,0,0-4.05,2.47,4.12,4.12,0,0,0,.55,4.62,4.79,4.79,0,0,0-2.46,2.12,3,3,0,0,0,.35,3.32,2.56,2.56,0,0,0,1.24.93A4,4,0,0,0,400.14,163.73Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 416.56px 169.303px;"
                                    id="eln42dn7aooal" class="animable"></path>
                                <path d="M409.78,176.83l.11-4.42a2.21,2.21,0,0,0-.11,4.42Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 408.757px 174.62px;"
                                    id="el9dkrvcr0gk7" class="animable"></path>
                            </g>
                        </g>
                        <defs>
                            <filter id="active" height="200%">
                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate"
                                    radius="2"></feMorphology>
                                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                                <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE">
                                </feComposite>
                                <feMerge>
                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                </feMerge>
                            </filter>
                            <filter id="hover" height="200%">
                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate"
                                    radius="2"></feMorphology>
                                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                                <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE">
                                </feComposite>
                                <feMerge>
                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                </feMerge>
                                <feColorMatrix type="matrix"
                                    values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                                </feColorMatrix>
                            </filter>
                        </defs>
                    </svg>
                </center>
            @else
                <div class="table-responsive">
                    <table class="table table-sm table-bordered border-primary" style="text-align: center; font-family: 'Roboto', sans-serif; ">

                        <tbody>
                            <tr>
                                <td colspan="50" class="text-center text-white text-lg"
                                    style="background-color: #7492c2; font-size: 1rem;">
                                    <strong>{{ $nombre_area }}</strong>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="{{ $count_data + 3 }}" rowspan="2"
                                    class="text-center text-white align-middle" style="background-color: #5173aa">
                                    <strong>Mes</strong>
                                </td>
                                <td style="background-color: white"></td>
                                <td class=" align-middle text-center" style="font-size: 0.40rem;">ALTA CONCENTRACION
                                </td>
                                <td class=" align-middle text-center" style="font-size: 0.50rem;">Mayor a 6 Brix
                                </td>
                            </tr>
                            <tr>
                                <td style="background-color: pink"></td>
                                <td class=" align-middle text-center" style="font-size: 0.40rem;">BAJA CONCENTRACION
                                </td>
                                <td class=" align-middle text-center" style="font-size: 0.50rem;"> Menor a 4 Brix
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" rowspan="3" style="background-color: #c5cedb"></td>
                                <td colspan="{{ $count_data }}" class="text-xs align-middle text-center"
                                    style="background-color: #c5cedb"><strong>CW</strong></td>
                                <td style="background-color: yellow"></td>
                                <td class=" align-middle text-center" style="font-size: 0.40rem;">OK LIMITE INFERIOR
                                </td>
                                <td class=" align-middle text-center" style="font-size: 0.50rem;">Entre 4 y 5 Brix
                                </td>
                            </tr>
                            <tr>
                                <td colspan="{{ $count_data }}" class="text-xs align-middle text-center"
                                    style="background-color: #c5cedb"><strong>cocentracion en %</strong> </td>
                                <td style="background-color: yellowgreen"></td>
                                <td class=" align-middle text-center" style="font-size: 0.40rem;">OK</td>
                                <td class=" align-middle text-center" style="font-size: 0.50rem;">Entrea 5 y 6 Brix
                                </td>
                            </tr>
                            <tr>
                                @foreach ($fechas as $fecha => $fech)
                                    @foreach ($fech as $date)
                                        <td class="text-xs text-center align-middle"
                                            style="background-color: #c5cedb">
                                            {{ \Carbon\Carbon::parse($date)->format('d') }}</td>
                                    @endforeach
                                @endforeach

                                <td class="text-xs text-center align-middle"
                                    style="background-color: #c5cedb; width:10px;">
                                    Pomedio pH</td>
                                <td class="text-xs text-center align-middle"
                                    style="background-color: #c5cedb; width:10px;">
                                    Promedio Concentracion</td>
                                <td class="text-xs text-center align-middle"
                                    style="background-color: #c5cedb; width:10px;">
                                    Comentarios</td>
                            </tr>



                            @foreach ($datos as $ids => $valores)
                                <tr>
                                    <td rowspan="2" class="text-xs text-center align-middle text-white"
                                        style="background-color: #5173aa"> <i class="fas fa-caret-right"></i> </td>
                                    <td rowspan="2" class="text-xs text-center align-middle text-white"
                                        style="background-color: #749ad8">{{ $ids }}</td>
                                    <td class="text-xs text-center align-middle"><strong>pH</strong></td>
                                    @foreach ($valores['value'] as $valor)
                                        <td class="text-xs text-center align-middle">{{ $valor }}</td>
                                    @endforeach
                                    @foreach ($valores['prom_ph'] as $valor)
                                        <td class="text-xs text-center align-middle"
                                        <?php if ($valor >= 8.9 && $valor <= 9.69) {
                                            echo "style='background-color: #bdd6ee'";
                                        }
                                        if ($valor >= 8.3 && $valor <= 8.89) {
                                            echo "style='background-color: #c5e0b3'";
                                        }
                                        if ($valor >= 7 && $valor <= 8.29) {
                                            echo "style='background-color: #ffff00'";
                                        }

                                        ?>>
                                            {{ round($valor, 2) }}</td>
                                    @endforeach
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-xs text-center align-middle"><strong>Con.</strong></td>
                                    @foreach ($valores['value2'] as $valor)
                                        <td class="text-xs text-center align-middle">{{ $valor }}</td>
                                    @endforeach

                                    <td></td>
                                    @foreach ($valores['prom_con'] as $valor)
                                        <td class="text-xs" <?php if ($valor > 6) {
                                            echo "style='background-color: #ffffff'";
                                        }
                                        if ($valor < 4) {
                                            echo "style='background-color: #fae3d4'";
                                        }
                                        if ($valor >= 4 && $valor <= 5) {
                                            echo "style='background-color: #ffff00'";
                                        }
                                        if ($valor > 5 && $valor <= 6) {
                                            echo "style='background-color: #92d050'";
                                        }
                                        ?>>{{ round($valor, 2) }}</td>
                                    @endforeach
                                    <td></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>


    <!-- Datos para Graficas  -->
    @foreach ($datos as $item => $i)
        @foreach ($i['prom_con'] as $info => $in)
            @if ($in < 4)
                @php
                    $concentracion_baja++;
                @endphp
            @endif

            @if ($in > 6)
                @php
                    $concentracion_alta++;
                @endphp
            @endif
            @if ($in >= 4 && $in <= 6)
                @php
                    $concentracion_ok++;
                @endphp
            @endif
        @endforeach
    @endforeach


    <!-- Graficas de Pie -->
    <div class="col-md-12">

        @if ($data->count() == 0)
            <center>

            </center>
        @else
            <div class="card shadow mb-4">
                <div class="card-body">

                    <div>
                        <div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <figure class="highcharts-figure">
                                        <div id="grafica_con"></div>
                                    </figure>
                                </div>
                                <div class="col-sm">
                                    <figure class="highcharts-figure">
                                        <div id="grafica_ph"></div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endif
    </div>
    <br>


</div>

<link rel="stylesheet" href="{{ asset('css/reportes.css') }}" />

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    window.addEventListener('data_vacia', function(e) {
        Swal.fire({
            icon: 'error',
            title: 'Lo siento...',
            text: '¡Algo salió mal!',
            footer: '<strong style="color: #5e80b7"> No hay datos para mostrar </strong>',
            confirmButtonColor: '#5e80b7',
            confirmButtonText: 'Aceptar'
        })
    });
</script>

<script>
    Highcharts.chart('grafica_con', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: '<strong>ESTATUS DE CONCENTRACION </strong>'
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
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Valor',
            data: [{
                    name: 'CON. ALTA',
                    y: <?= $concentracion_alta ?>
                },
                {
                    name: 'CON. BAJA',
                    y: <?= $concentracion_baja ?>
                },
                {
                    name: 'CON. OK',
                    y: <?= $concentracion_ok ?>
                }

            ]
        }]
    });
    Highcharts.chart('grafica_ph', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: '<strong>ESTATUS DE PH</strong>'
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
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            name: 'Valor',
            data: [{
                    name: 'PH OK',
                    y: 73.24
                },
                {
                    name: 'PH BAJO',
                    y: 13.76
                }

            ]
        }]
    });
</script>
