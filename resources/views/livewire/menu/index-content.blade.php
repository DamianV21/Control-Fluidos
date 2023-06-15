<div>
    <div class="container-fluid py-4">
        <div class="row my-1">
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                <div class="card h-100">
                    <div class="card-body p-3">
                        <div class="timeline timeline-one-side">
                            <!--  Filtro de Plantas -->
                            <div class="timeline-block mb-0">
                                <span class="timeline-step">
                                    <i class="fas fa-city text-primary text-gradient"></i>
                                </span>
                                <div class="timeline-content">

                                    <div class="form-group">
                                        <div class="mb-2 text-center">
                                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Plantas <span
                                                    class="badge text-white"
                                                    style="background-color: #444444; border-radius:50%;">{{ $p_plantas->count() }}</span>
                                            </p>
                                        </div>
                                        <select class="form-select" multiple wire:model="selectedPlanta">
                                            @foreach ($p_plantas as $planta)
                                                <option class="text-dark text-sm font-weight-bold mb-0"
                                                    value="{{ $planta->id }}">{{ $planta->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <!--  Filtro de Areas -->
                            <div class="timeline-block mb-0">
                                <span class="timeline-step">
                                    <i class="fas fa-bezier-curve text-primary text-gradient"></i>
                                </span>
                                <div class="timeline-content">

                                    <div class="form-group">
                                        <div class="mb-2 text-center">
                                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Áreas <span
                                                    class="badge text-white"
                                                    style="background-color: #444444; border-radius:50%;">{{ $numero_areas }}</span>
                                            </p>
                                        </div>
                                        <select multiple wire:model="selectedArea" class="form-select">
                                            @foreach ($a_areas as $areass)
                                                <option class="text-dark text-sm font-weight-bold mb-0"
                                                    value="{{ $areass->id }}">{{ $areass->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <!--  Filtro de Lineas -->
                            <div class="timeline-block mb-0">
                                <span class="timeline-step">
                                    <i class="fas fa-project-diagram text-primary text-gradient"></i>
                                </span>
                                <div class="timeline-content">

                                    <div class="form-group">
                                        <div class="mb-2 text-center">
                                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Líneas <span
                                                    class="badge text-white"
                                                    style="background-color: #444444; border-radius:50%;">{{ $numero_lineas }}</span>
                                            </p>
                                        </div>
                                        <select multiple wire:model="selectedLinea" class="form-select">
                                            @foreach ($l_lineas as $lineass)
                                                <option class="text-dark text-sm font-weight-bold mb-0"
                                                    value="{{ $lineass->id }}">{{ $lineass->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--  Contenido de Areas  -->
            @if ($numero_maquinas == 0 and $numero_lineas == 0)
                <div class="col-lg-8 col-md-6 mt-0 mb-0">
                    <div class="card-body">
                        @if ($numero_areas == 0)
                            <div class="card h-100">
                                <div class="mt-3 text-center">
                                    <p class="text-secondary font-weight-bold text-xs mt-0 mb-0">Total, de
                                        resultados <span class="badge text-white"
                                            style="background-color: #444444; border-radius:50%;">
                                            {{ $numero_areas }}</span>
                                    </p>
                                </div>
                                <center>
                                    <svg class="animated w-55" id="freepik_stories-load-more"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                                        <style>
                                            svg#freepik_stories-load-more:not(.animated) .animable {
                                                opacity: 0;
                                            }

                                            svg#freepik_stories-load-more.animated #freepik--Plant--inject-129 {
                                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn;
                                                animation-delay: 0s;
                                            }

                                            svg#freepik_stories-load-more.animated #freepik--Device--inject-129 {
                                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn, 1.5s Infinite linear floating;
                                                animation-delay: 0s, 1s;
                                            }

                                            svg#freepik_stories-load-more.animated #freepik--Character--inject-129 {
                                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft;
                                                animation-delay: 0s;
                                            }

                                            svg#freepik_stories-load-more.animated #freepik--speech-bubble--inject-129 {
                                                animation: 1s 1 forwards ease-in zoomOut, 1.5s Infinite linear heartbeat;
                                                animation-delay: 0s, 1s;
                                            }

                                            @keyframes zoomIn {
                                                0% {
                                                    opacity: 0;
                                                    transform: scale(0.5);
                                                }

                                                100% {
                                                    opacity: 1;
                                                    transform: scale(1);
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

                                            @keyframes heartbeat {
                                                0% {
                                                    transform: scale(1);
                                                }

                                                10% {
                                                    transform: scale(1.1);
                                                }

                                                30% {
                                                    transform: scale(1);
                                                }

                                                40% {
                                                    transform: scale(1);
                                                }

                                                50% {
                                                    transform: scale(1.1);
                                                }

                                                60% {
                                                    transform: scale(1);
                                                }

                                                100% {
                                                    transform: scale(1);
                                                }
                                            }

                                            .animator-hidden {
                                                display: none;
                                            }
                                        </style>
                                        <g id="freepik--background-complete--inject-129"
                                            class="animable animator-hidden"
                                            style="transform-origin: 251.95px 213.765px;">
                                            <path
                                                d="M407.41,365.75l13.35-.28,6.58-.11c2.19-.05,4.37,0,6.55-.06l-.45.45-.05-11.19.5.5L420.65,355c-4.42,0-8.83-.12-13.24-.17l.27-.27c0,1.83-.09,3.67-.13,5.54Zm0,0-.15-5.54c0-1.86-.11-3.75-.13-5.65v-.27h.28c4.41-.05,8.82-.16,13.24-.17l13.24-.06h.5v.5l-.06,11.19v.45h-.44c-2.23,0-4.47,0-6.7-.06l-6.66-.11Z"
                                                style="fill: rgb(235, 235, 235); transform-origin: 420.76px 360.13px;"
                                                id="elr72nnlydik" class="animable"></path>
                                            <g id="elcvkscw1jkc">
                                                <rect x="422.18" y="368.67" width="26.48" height="11.19"
                                                    style="fill: rgb(235, 235, 235); transform-origin: 435.42px 374.265px; transform: rotate(180deg);"
                                                    class="animable"></rect>
                                            </g>
                                            <path
                                                d="M342.86,228.32l13.36-.28,6.58-.11c2.19,0,4.36,0,6.54-.05l-.44.44-.06-11.19.5.5-13.24-.06c-4.41,0-8.82-.11-13.24-.16l.28-.28c0,1.83-.09,3.68-.14,5.54Zm0,0-.14-5.53c0-1.87-.11-3.76-.13-5.66v-.27h.27c4.42-.05,8.83-.16,13.24-.16l13.24-.07h.5v.5l0,11.19v.45h-.45c-2.23,0-4.47,0-6.69-.06L356,228.6Z"
                                                style="fill: rgb(235, 235, 235); transform-origin: 356.215px 222.7px;"
                                                id="el0p4zo3emoin" class="animable"></path>
                                            <path
                                                d="M357.63,242.43l13.36-.28,6.58-.11c2.19,0,4.36,0,6.54,0l-.44.44-.05-11.19.49.5-13.24-.06c-4.41,0-8.82-.11-13.24-.16l.28-.28c0,1.83-.09,3.68-.13,5.54Zm0,0-.14-5.53c0-1.87-.11-3.76-.13-5.66V231h.27c4.42-.05,8.83-.16,13.24-.16l13.24-.07h.51v.5l-.05,11.19v.45h-.45c-2.23,0-4.46,0-6.69-.06l-6.66-.11Z"
                                                style="fill: rgb(235, 235, 235); transform-origin: 370.99px 236.84px;"
                                                id="el2lpv92id0vn" class="animable"></path>
                                            <g id="elnuritw5pixo">
                                                <rect x="372.35" y="217.13" width="26.48" height="11.19"
                                                    style="fill: rgb(235, 235, 235); transform-origin: 385.59px 222.725px; transform: rotate(180deg);"
                                                    class="animable"></rect>
                                            </g>
                                            <g id="elln9e3f1omb8">
                                                <rect x="51.34" y="368.67" width="26.48" height="11.19"
                                                    style="fill: rgb(235, 235, 235); transform-origin: 64.58px 374.265px; transform: rotate(180deg);"
                                                    class="animable"></rect>
                                            </g>
                                            <path
                                                d="M66.11,67.49l13.36-.28,6.58-.11c2.19,0,4.36,0,6.54-.06l-.44.45L92.09,56.3l.5.5-13.24-.07c-4.41,0-8.82-.11-13.24-.16l.28-.27c0,1.83-.09,3.67-.14,5.53Zm0,0L66,62c0-1.87-.11-3.75-.13-5.65V56h.27c4.42-.05,8.83-.16,13.24-.16l13.24-.06h.51v.51l0,11.19v.45h-.45c-2.23,0-4.47,0-6.69-.05l-6.66-.12Z"
                                                style="fill: rgb(235, 235, 235); transform-origin: 79.5px 61.855px;"
                                                id="elgyo7hsirqus" class="animable"></path>
                                            <g id="elbsk4xh8wx5v">
                                                <rect x="51.34" y="70.41" width="26.48" height="11.19"
                                                    style="fill: rgb(235, 235, 235); transform-origin: 64.58px 76.005px; transform: rotate(180deg);"
                                                    class="animable"></rect>
                                            </g>
                                            <g id="elpbhxvyclwlm">
                                                <rect x="407.41" y="56.3" width="26.48" height="11.19"
                                                    style="fill: rgb(235, 235, 235); transform-origin: 420.65px 61.895px; transform: rotate(180deg);"
                                                    class="animable"></rect>
                                            </g>
                                            <g id="el5rv176hxtlr">
                                                <rect x="316.5" y="47.67" width="136.06" height="207.55"
                                                    style="fill: rgb(235, 235, 235); transform-origin: 384.53px 151.445px; transform: rotate(180deg);"
                                                    class="animable"></rect>
                                            </g>
                                            <g id="elhjco8p167tt">
                                                <rect x="387.67" y="55.98" width="57.51" height="92.32"
                                                    style="fill: rgb(255, 255, 255); transform-origin: 416.425px 102.14px; transform: rotate(180deg);"
                                                    class="animable"></rect>
                                            </g>
                                            <g id="el4ceja16yjfr">
                                                <rect x="323.87" y="55.98" width="57.51" height="92.32"
                                                    style="fill: rgb(255, 255, 255); transform-origin: 352.625px 102.14px; transform: rotate(180deg);"
                                                    class="animable"></rect>
                                            </g>
                                            <g id="elz9tyo35pfvp">
                                                <rect x="387.67" y="154.58" width="57.51" height="92.32"
                                                    style="fill: rgb(255, 255, 255); transform-origin: 416.425px 200.74px; transform: rotate(180deg);"
                                                    class="animable"></rect>
                                            </g>
                                            <g id="elo73sdirs6c">
                                                <rect x="323.87" y="154.58" width="57.51" height="92.32"
                                                    style="fill: rgb(255, 255, 255); transform-origin: 352.625px 200.74px; transform: rotate(180deg);"
                                                    class="animable"></rect>
                                            </g>
                                            <polygon
                                                points="368.99 47.67 316.5 47.67 316.5 344.6 346.88 344.6 325.67 193.5 368.99 47.67"
                                                style="fill: rgb(219, 219, 219); transform-origin: 342.745px 196.135px;"
                                                id="elhtlwae1n8co" class="animable"></polygon>
                                            <polygon
                                                points="359.89 55.69 351.57 90.2 343.1 124.68 326.15 193.62 326.16 193.45 334 265.5 337.92 301.53 341.67 337.57 337.43 301.58 333.34 265.58 325.18 193.56 325.17 193.47 325.19 193.38 342.46 124.52 351.1 90.09 359.89 55.69"
                                                style="fill: rgb(235, 235, 235); transform-origin: 342.53px 196.63px;"
                                                id="elfxralubqne4" class="animable"></polygon>
                                            <polygon
                                                points="319.62 61.78 319.86 91.56 320 121.34 320.12 180.9 320 240.46 319.87 270.23 319.62 300.01 319.38 270.23 319.24 240.46 319.12 180.9 319.24 121.34 319.38 91.56 319.62 61.78"
                                                style="fill: rgb(235, 235, 235); transform-origin: 319.62px 180.895px;"
                                                id="el9dp0h86t4zu" class="animable"></polygon>
                                            <path
                                                d="M329.43,67.36,327.8,99,326,130.66,322.47,194v0c.36,11.75.58,23.5.87,35.26l.83,35.26.83,35.26.67,35.26L324.5,299.7l-1-35.26-1-35.25c-.32-11.75-.71-23.5-1-35.26v0l3.88-63.27L327.34,99Z"
                                                style="fill: rgb(235, 235, 235); transform-origin: 325.465px 201.2px;"
                                                id="elmgku222y5e" class="animable"></path>
                                            <path
                                                d="M336.26,330.38l-3.44-34.16-3.32-34.17c-2.13-22.8-4.35-45.58-6.4-68.38v-.12l9.73-53.22,4.94-26.59,5-26.58-4.59,26.66-4.67,26.64L324,193.71v-.12c2.18,22.78,4.19,45.58,6.29,68.38l3,34.2Z"
                                                style="fill: rgb(235, 235, 235); transform-origin: 332.935px 208.77px;"
                                                id="eljawxfxbyjv" class="animable"></path>
                                            <g id="ellcogwgtk51">
                                                <rect x="316.5" y="191.01" width="11.85" height="6.92"
                                                    style="fill: rgb(219, 219, 219); transform-origin: 322.425px 194.47px; transform: rotate(180deg);"
                                                    class="animable"></rect>
                                            </g>
                                            <polygon
                                                points="400.07 47.67 452.56 47.67 452.56 344.6 422.18 344.6 443.38 193.5 400.07 47.67"
                                                style="fill: rgb(219, 219, 219); transform-origin: 426.315px 196.135px;"
                                                id="elubixvdvrhqe" class="animable"></polygon>
                                            <polygon
                                                points="409.16 55.69 417.95 90.09 426.59 124.52 443.87 193.38 443.89 193.47 443.88 193.56 435.71 265.58 431.63 301.58 427.38 337.57 431.14 301.53 435.05 265.5 442.89 193.45 442.9 193.62 425.95 124.68 417.48 90.2 409.16 55.69"
                                                style="fill: rgb(235, 235, 235); transform-origin: 426.525px 196.63px;"
                                                id="ellkxs8qj25j" class="animable"></polygon>
                                            <polygon
                                                points="449.43 61.78 449.68 91.56 449.82 121.34 449.93 180.9 449.82 240.46 449.68 270.23 449.43 300.01 449.19 270.23 449.05 240.46 448.94 180.9 449.05 121.34 449.19 91.56 449.43 61.78"
                                                style="fill: rgb(235, 235, 235); transform-origin: 449.435px 180.895px;"
                                                id="el3rdo5k0283q" class="animable"></polygon>
                                            <path
                                                d="M439.63,67.36,441.72,99l1.95,31.63,3.87,63.27v0c-.26,11.76-.65,23.51-1,35.26l-1,35.25-1,35.26L443.38,335l.67-35.26.83-35.26.83-35.26c.3-11.76.52-23.51.87-35.26v0L443,130.66,441.26,99Z"
                                                style="fill: rgb(235, 235, 235); transform-origin: 443.585px 201.18px;"
                                                id="elpj3db2ol1fm" class="animable"></path>
                                            <path
                                                d="M432.79,330.38l2.91-34.21,3-34.2c2.1-22.8,4.11-45.6,6.29-68.38v.12l-9.48-53.25-4.67-26.64-4.6-26.66,5,26.58,4.94,26.59L446,193.55v.12c-2.06,22.8-4.27,45.58-6.4,68.38l-3.33,34.17Z"
                                                style="fill: rgb(235, 235, 235); transform-origin: 436.12px 208.77px;"
                                                id="elo9y6a1y0bxg" class="animable"></path>
                                            <rect x="440.7" y="191.01" width="11.85" height="6.92"
                                                style="fill: rgb(219, 219, 219); transform-origin: 446.625px 194.47px;"
                                                id="elrqe9yfq30bh" class="animable"></rect>
                                            <rect x="60.55" y="86.9" width="46.65" height="46.65"
                                                style="fill: rgb(255, 255, 255); transform-origin: 83.875px 110.225px;"
                                                id="ele8at1xi0xy" class="animable"></rect>
                                            <path d="M58.13,84.47V136h51.5V84.47Zm49.08,49.08H60.55V86.9h46.66Z"
                                                style="fill: rgb(219, 219, 219); transform-origin: 83.88px 110.235px;"
                                                id="el7g3zf61wprj" class="animable"></path>
                                            <g id="el3ezwn9ktos5">
                                                <rect x="77.6" y="98.27" width="16.13" height="36.36"
                                                    style="fill: rgb(235, 235, 235); transform-origin: 85.665px 116.45px; transform: rotate(90deg);"
                                                    class="animable"></rect>
                                            </g>
                                            <g id="elr1ltxlimxnb">
                                                <rect x="74.57" y="100.91" width="18.63" height="18.63"
                                                    style="fill: rgb(199, 199, 199); transform-origin: 83.885px 110.225px; transform: rotate(90deg);"
                                                    class="animable"></rect>
                                            </g>
                                            <rect x="109.64" y="84.47" width="1.99" height="51.51"
                                                style="fill: rgb(199, 199, 199); transform-origin: 110.635px 110.225px;"
                                                id="elkfrkjp1tir" class="animable"></rect>
                                            <rect x="60.55" y="153.14" width="46.65" height="46.65"
                                                style="fill: rgb(255, 255, 255); transform-origin: 83.875px 176.465px;"
                                                id="elxus21trdyne" class="animable"></rect>
                                            <rect x="68.57" y="160.61" width="12.18" height="35.19"
                                                style="fill: rgb(199, 199, 199); transform-origin: 74.66px 178.205px;"
                                                id="elt0l5co08cl8" class="animable"></rect>
                                            <path d="M58.13,150.72v51.5h51.5v-51.5Zm49.08,49.08H60.55V153.14h46.66Z"
                                                style="fill: rgb(219, 219, 219); transform-origin: 83.88px 176.47px;"
                                                id="ele8z14idzsj6" class="animable"></path>
                                            <rect x="74.57" y="167.15" width="18.63" height="18.63"
                                                style="fill: rgb(235, 235, 235); transform-origin: 83.885px 176.465px;"
                                                id="elkkjiikv3cm" class="animable"></rect>
                                            <rect x="109.64" y="150.72" width="1.99" height="51.51"
                                                style="fill: rgb(199, 199, 199); transform-origin: 110.635px 176.475px;"
                                                id="elbkxndha0944" class="animable"></rect>
                                            <rect x="60.55" y="219.39" width="46.65" height="46.65"
                                                style="fill: rgb(255, 255, 255); transform-origin: 83.875px 242.715px;"
                                                id="eloykbqutf2j" class="animable"></rect>
                                            <rect x="65.73" y="225.75" width="25.6" height="15.3"
                                                style="fill: rgb(235, 235, 235); transform-origin: 78.53px 233.4px;"
                                                id="elj2prgxgvbgs" class="animable"></rect>
                                            <path d="M58.13,217v51.51h51.5V217ZM107.21,266H60.55V219.39h46.66Z"
                                                style="fill: rgb(219, 219, 219); transform-origin: 83.88px 242.755px;"
                                                id="elpmqzpk7cz3h" class="animable"></path>
                                            <rect x="74.57" y="233.4" width="18.63" height="18.63"
                                                style="fill: rgb(199, 199, 199); transform-origin: 83.885px 242.715px;"
                                                id="el12d44cg3v5wk" class="animable"></rect>
                                            <rect x="109.64" y="216.96" width="1.99" height="51.51"
                                                style="fill: rgb(199, 199, 199); transform-origin: 110.635px 242.715px;"
                                                id="eldoegpxxiq0b" class="animable"></rect>
                                        </g>
                                        <g id="freepik--Plant--inject-129" class="animable animator-hidden"
                                            style="transform-origin: 401.44px 371.605px;">
                                            <path
                                                d="M392.91,383.56s-17.46-4-27-12.78S351,346.17,351,346.17a150.3,150.3,0,0,1,19.58,5.14,33.35,33.35,0,0,1,5.92,8.38,41.18,41.18,0,0,0,0-6,26.78,26.78,0,0,1,6.21,3.78C390.67,364.42,392.91,383.56,392.91,383.56Z"
                                                style="fill: rgb(94, 128, 183); transform-origin: 371.955px 364.865px;"
                                                id="elrxewrmx19qq" class="animable"></path>
                                            <path
                                                d="M361.87,353.85c-2.38-1.65-4.81-3.24-7.18-4.9a.14.14,0,0,1,.15-.23c4.5,2.69,8.93,5.56,13.22,8.57,1.5,1,3,2.14,4.42,3.25l-.3-.52c-.53-.88-1.08-1.74-1.63-2.6a37,37,0,0,0-3.71-4.94c0-.06,0-.14.09-.09,1.36,1.57,2.71,3.12,4,4.79.59.79,1.13,1.61,1.65,2.44.27.44.54.88.79,1.32.08.15.17.3.26.45,2.26,1.78,4.46,3.62,6.55,5.58,1.3,1.2,2.55,2.46,3.75,3.75-.67-2.12-1.26-4.25-2-6.33a.06.06,0,1,1,.11,0c.76,2.18,1.59,4.37,2.18,6.61,1.34,1.45,2.62,2.95,3.82,4.5l-.06-.28c-.2-.82-.4-1.64-.62-2.46-.43-1.58-.89-3.15-1.43-4.7a27.36,27.36,0,0,0-4.69-8.86c-.05-.05,0-.14.09-.08a34.14,34.14,0,0,1,6.69,14c.18.75.36,1.49.53,2.24.09.4.19.8.26,1.21.53.71,1,1.43,1.54,2.17a75.48,75.48,0,0,1,7.39,14.49,166.11,166.11,0,0,1,5.59,17.44c0,.12-.14.16-.17,0-3.42-10.21-6.91-20.57-12.75-29.71q-1.86-2.88-4-5.57a33.22,33.22,0,0,1-8.49-1.69,38.4,38.4,0,0,1-8.51-4.11c-1.53-1-2.93-2.15-4.36-3.3a.06.06,0,1,1,.08-.09,34.69,34.69,0,0,0,8,4.84,43.48,43.48,0,0,0,8.81,3c1.29.28,2.59.49,3.9.66a71.2,71.2,0,0,0-5.15-5.7c-.59-.59-1.2-1.15-1.8-1.72a42.16,42.16,0,0,0-6.46-3.7c-2.86-1.38-5.67-2.84-8.5-4.28-1.6-.82-3.19-1.65-4.8-2.43-.07,0,0-.14.06-.11,2.87,1.39,5.79,2.69,8.68,4,2.73,1.25,5.49,2.5,8.1,4l.33.2c-2.36-2.06-4.81-4-7.31-5.91Q365.44,356.34,361.87,353.85Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 378.989px 379.743px;"
                                                id="elj19rwmiwq6" class="animable"></path>
                                            <path
                                                d="M362.86,362.85c1.42.62,2.87,1.17,4.27,1.83s2.82,1.47,4.19,2.28c.06,0,0,.12-.06.09-1.39-.67-2.8-1.29-4.18-2s-2.81-1.47-4.25-2.11C362.76,362.93,362.79,362.82,362.86,362.85Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 367.067px 364.95px;"
                                                id="eld85ug0lu3ku" class="animable"></path>
                                            <path
                                                d="M449.62,295.58a24.91,24.91,0,0,0-5.21,14.5c-.06,1.56.19,3.74.37,6.31a41.39,41.39,0,0,0-11.4,9.74,20.63,20.63,0,0,1,11.52-2.76,36.05,36.05,0,0,1-.67,5.22,19.55,19.55,0,0,0-7.4,1.46,16.64,16.64,0,0,1,6.67,1.33c-3.11,9.9-12.36,20.07-37.91,24.39a53.65,53.65,0,0,1,4.53-35.95C417.77,304.77,449.62,295.58,449.62,295.58Z"
                                                style="fill: rgb(94, 128, 183); transform-origin: 426.964px 325.675px;"
                                                id="elhie770qt1jb" class="animable"></path>
                                            <path
                                                d="M396.75,398.14q.67-6.34,1.66-12.65a253.76,253.76,0,0,1,5.15-25,98.9,98.9,0,0,1,3.69-11.39,17.7,17.7,0,0,1-.1-2c0-.82,0-1.63,0-2.45,0-1.64.09-3.27.23-4.9a59.63,59.63,0,0,1,1.57-9.58c.47-1.82,1-3.61,1.55-5.41a.06.06,0,1,1,.11,0,70.85,70.85,0,0,0-1.88,9.56,88,88,0,0,0-.86,9.59c0,.88-.05,1.75-.05,2.63,0,.37,0,.75,0,1.13a80.15,80.15,0,0,1,4.3-8.91,109.17,109.17,0,0,1,8.75-13.08,5.8,5.8,0,0,1,.2-1.43c.12-.57.25-1.14.38-1.71.26-1.16.55-2.33.87-3.48.63-2.31,1.47-4.55,2.19-6.84a.06.06,0,0,1,.12,0c-.68,2.26-1.12,4.6-1.64,6.91-.26,1.14-.51,2.28-.76,3.42-.12.57-.25,1.14-.36,1.71l0,.13c1-1.31,2.09-2.59,3.17-3.85,4.87-5.72,10.22-11,15.61-16.24.66-.64,1.34-1.27,2-1.91.05,0,.13,0,.08.09-5.15,5.37-10.21,10.79-15,16.48-1.14,1.35-2.26,2.71-3.36,4.1.58-.4,1.16-.78,1.74-1.16,1.49-1,3-1.92,4.54-2.79s3.11-1.71,4.71-2.5,3.39-1.47,5-2.39c.06,0,.12.07.05.1a37.79,37.79,0,0,0-4.66,2.58c-1.55.92-3.11,1.85-4.63,2.82s-3,1.89-4.5,2.86c-1.25.81-2.47,1.69-3.76,2.44a121.29,121.29,0,0,0-8.18,11.91,86.47,86.47,0,0,0-4.23,8l.91-.4,2.34-1,4.52-2c2.87-1.24,5.78-2.39,8.59-3.76a38.62,38.62,0,0,0,4.58-2.54c.07-.05.12.06.06.1-5.24,3.61-11.11,6.16-16.91,8.72L412,345.18c-.69.31-1.38.65-2.09.92a88.89,88.89,0,0,0-4.32,11.83A240.48,240.48,0,0,0,400,382.65c-1.47,8.34-2.46,16.74-3.22,25.17-.1,1.06-.19,2.11-.31,3.16a.34.34,0,0,1-.67,0C395.87,406.68,396.31,402.39,396.75,398.14Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 419.273px 356.826px;"
                                                id="elakfn6a7nddv" class="animable"></path>
                                            <path
                                                d="M412.29,327.59c.47-2.6,1.16-5.13,1.86-7.68,0-.07.14,0,.12,0-.65,2.49-1.11,5-1.58,7.57s-.9,5.18-1.26,7.78a0,0,0,0,1-.08,0A68.86,68.86,0,0,1,412.29,327.59Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 412.811px 327.569px;"
                                                id="eljwwcnmz4dya" class="animable"></path>
                                            <path
                                                d="M423.3,334.63a46.55,46.55,0,0,1,5.56-3.12c.93-.48,1.87-.94,2.82-1.4s2-.86,2.94-1.35c.07,0,.13.07.06.11-.93.47-1.82,1-2.74,1.53s-1.88,1.05-2.83,1.56c-1.87,1-3.71,2.11-5.67,2.92A.14.14,0,0,1,423.3,334.63Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 428.97px 331.829px;"
                                                id="elnf3m24aw0kd" class="animable"></path>
                                            <g id="elcy5vhw1k2z">
                                                <path
                                                    d="M392.59,353.32s-16.15-3.86-23.57-14.7c-7.09-10.35-9.38-28-9.56-29.55.29,1.43,3.63,16.85,14.63,24C382.51,338.6,390.64,343.13,392.59,353.32Z"
                                                    style="fill: rgb(38, 50, 56); opacity: 0.1; transform-origin: 376.025px 331.195px;"
                                                    class="animable"></path>
                                            </g>
                                            <path
                                                d="M377.68,325.4a20.68,20.68,0,0,1,6,9.81s0,.05-.05,0a24.18,24.18,0,0,0-6-9.74C377.55,325.44,377.63,325.35,377.68,325.4Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 380.638px 330.309px;"
                                                id="elj0bosmcpcq" class="animable"></path>
                                            <path
                                                d="M392.59,353.32s-16.15-3.86-23.57-14.7c-7.09-10.35-9.38-28-9.56-29.55a.65.65,0,0,0,0-.1s7.75,11,15.9,13.82S394.93,335.31,392.59,353.32Z"
                                                style="fill: rgb(94, 128, 183); transform-origin: 376.18px 331.145px;"
                                                id="elexasiw186xr" class="animable"></path>
                                            <path
                                                d="M362.31,315a66.13,66.13,0,0,0,5,8.54,34.21,34.21,0,0,0,6.65,6.84c2.19,1.74,4.51,3.32,6.73,5a.35.35,0,0,0-.05-.08c-.41-.62-.86-1.22-1.32-1.81-.92-1.18-1.94-2.3-2.95-3.4-2-2.18-4.06-4.31-5.86-6.67a25,25,0,0,1-2.59-4.17c0-.07.08-.11.11,0,2.62,5.46,7.86,9,11.59,13.56.53.66,1,1.34,1.49,2a8.07,8.07,0,0,1,.93,1.65,33.76,33.76,0,0,1,5.51,5.57,22.12,22.12,0,0,0-.64-3.14,15.85,15.85,0,0,0-1.72-4.09c0-.07.06-.13.1-.07a19.29,19.29,0,0,1,1.89,4.07,14.82,14.82,0,0,1,.59,3.49h0a31.09,31.09,0,0,1,2.19,3.39c-.07-.34-.14-.69-.2-1-.32-1.61-.68-3.22-1.1-4.81a28.77,28.77,0,0,0-3.88-9.1c0-.06.05-.13.1-.06a34.53,34.53,0,0,1,4.3,8.9c.52,1.59.93,3.2,1.29,4.83.18.79.34,1.59.49,2.39.08.41.17.83.24,1.26a57.69,57.69,0,0,1,3.72,10.95,160.46,160.46,0,0,1,3.45,20.43,169,169,0,0,1,1.11,21.69c0,.91-.07,1.81-.12,2.72a.19.19,0,0,1-.37,0c-.16-3.58-.25-7.17-.47-10.75s-.52-7.16-.9-10.73a191.28,191.28,0,0,0-3.37-20.89c-1.31-5.91-3-11.85-6.24-17a31.94,31.94,0,0,0-5.82-6.93c-2.27-2-4.75-3.81-7.13-5.7a39,39,0,0,1-6.55-6.29,51.21,51.21,0,0,1-5.13-8.33c-.39-.74-.78-1.46-1.16-2.19C362.17,315,362.27,315,362.31,315Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 380.85px 359.513px;"
                                                id="elo0sajdl56v" class="animable"></path>
                                            <path
                                                d="M365.1,317.41a53.46,53.46,0,0,0,3.59,6.29,0,0,0,1,1-.07.05,43.32,43.32,0,0,1-3.64-6.3C365,317.38,365.06,317.34,365.1,317.41Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 366.835px 320.562px;"
                                                id="eltem3mbixt9n" class="animable"></path>
                                            <path
                                                d="M451.88,346.17s.25,23-13.48,29.59-21.08,1.1-30.41,3.32h0c.36-.55,7-10.11,17.6-12.75C436.51,363.61,448.57,355.74,451.88,346.17Z"
                                                style="fill: rgb(94, 128, 183); transform-origin: 429.935px 362.654px;"
                                                id="elg16zb3nq9ul" class="animable"></path>
                                            <g id="elvdidc122nwi">
                                                <path
                                                    d="M451.88,346.17s.25,23-13.48,29.59-21.08,1.1-30.41,3.32h0a51.8,51.8,0,0,1,15.6-4.6C432.27,373.43,448.81,367.79,451.88,346.17Z"
                                                    style="opacity: 0.1; transform-origin: 429.935px 362.654px;"
                                                    class="animable"></path>
                                            </g>
                                            <path
                                                d="M407.09,379.49a23,23,0,0,1,5.46-3.69c.29-.15.59-.26.89-.39.15-.18.3-.35.46-.52a16.85,16.85,0,0,1,1.3-1.23,18.59,18.59,0,0,1,2.76-2c2.27-1.34,4.76-2.28,7.09-3.52a.06.06,0,0,1,.06.11c-1.15.59-2.27,1.25-3.38,1.9s-2.21,1.24-3.26,1.93a23.44,23.44,0,0,0-2.72,2l-.71.68a35.63,35.63,0,0,1,4.64-1.23c2.52-.51,5.06-.87,7.57-1.41a35.55,35.55,0,0,0,3.64-1c1.14-.92,2.28-1.83,3.35-2.82a27.07,27.07,0,0,0,3.55-3.94c0-.06.15,0,.1.07a42.39,42.39,0,0,1-5.62,6.21c.59-.23,1.17-.47,1.75-.73a28.4,28.4,0,0,0,11.7-9.73c0-.07.14,0,.1.06a32,32,0,0,1-9.46,9.08,28.44,28.44,0,0,1-6,2.83A55.71,55.71,0,0,1,423,374a53.5,53.5,0,0,0-7.28,1.73,21.73,21.73,0,0,0-6.1,3.21,28.65,28.65,0,0,0-8.23,10.2,51.41,51.41,0,0,0-4.53,16.79c0,.24-.4.24-.39,0C397.07,396.24,399.65,386.19,407.09,379.49Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 421.149px 383.13px;"
                                                id="elivm9unrao" class="animable"></path>
                                            <path
                                                d="M423,372a7.8,7.8,0,0,1,2.82-2.56,10.35,10.35,0,0,0,3.35-2.78c.05-.06.15,0,.11.06a11.42,11.42,0,0,1-3,2.66,10.43,10.43,0,0,0-3.23,2.67C423.07,372.11,423,372.06,423,372Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 426.145px 369.356px;"
                                                id="eleghogsopgcs" class="animable"></path>
                                            <polygon
                                                points="415.73 396.44 415.11 409.06 413.19 447.63 384.4 447.63 382.48 409.06 381.86 396.44 415.73 396.44"
                                                style="fill: rgb(55, 71, 79); transform-origin: 398.795px 422.035px;"
                                                id="eldg0tuyade7" class="animable"></polygon>
                                            <polygon
                                                points="415.73 396.44 415.11 409.06 382.48 409.06 381.86 396.44 415.73 396.44"
                                                style="fill: rgb(38, 50, 56); transform-origin: 398.795px 402.75px;"
                                                id="el5allmlyfnaa" class="animable"></polygon>
                                            <rect x="379.84" y="391.17" width="37.91" height="12.04"
                                                style="fill: rgb(55, 71, 79); transform-origin: 398.795px 397.19px;"
                                                id="elifjnpvkavm" class="animable"></rect>
                                        </g>
                                        <g id="freepik--Floor--inject-129" class="animable"
                                            style="transform-origin: 250px 447.63px;">
                                            <polygon
                                                points="47.44 447.63 98.08 447.39 148.72 447.3 250 447.13 351.28 447.3 401.92 447.39 452.56 447.63 401.92 447.88 351.28 447.97 250 448.13 148.72 447.96 98.08 447.88 47.44 447.63"
                                                style="fill: rgb(38, 50, 56); transform-origin: 250px 447.63px;"
                                                id="elun1i1oqdhcm" class="animable"></polygon>
                                        </g>
                                        <g id="freepik--Device--inject-129" class="animable"
                                            style="transform-origin: 250px 252.58px;">
                                            <path
                                                d="M336.12,57.53H163.86a17.58,17.58,0,0,0-17.42,17.75v354.6a17.59,17.59,0,0,0,17.42,17.75H336.12a17.6,17.6,0,0,0,17.44-17.75V75.28A17.59,17.59,0,0,0,336.12,57.53Zm6.55,361.39c0,9.33-7,16.88-15.61,16.88H173c-8.64,0-15.63-7.55-15.63-16.88V88.72c0-19,7-19.94,15.63-19.94h30.87c1.79,0,3.26,2,3.26,4.56v1.09c0,5.92,3.24,5.94,7.22,5.94h71.39c4,0,7.22,0,7.22-5.94V73.34c0-2.52,1.45-4.56,3.27-4.56h30.88c8.62,0,15.61,2.53,15.61,19.94Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 250px 252.58px;"
                                                id="eluuxh6fyxz2i" class="animable"></path>
                                            <path
                                                d="M259.73,73H240.26a1.2,1.2,0,0,1-1.2-1.2h0a1.21,1.21,0,0,1,1.2-1.21h19.47a1.2,1.2,0,0,1,1.2,1.21h0A1.2,1.2,0,0,1,259.73,73Z"
                                                style="fill: rgb(55, 71, 79); transform-origin: 249.995px 71.795px;"
                                                id="elrox86oofd5c" class="animable"></path>
                                            <path
                                                d="M342.67,88.72v330.2c0,9.33-7,16.88-15.61,16.88H173c-8.64,0-15.63-7.55-15.63-16.88V88.72c0-19,7-19.94,15.63-19.94h30.87c1.79,0,3.26,2,3.26,4.56v1.09c0,5.92,3.24,5.94,7.22,5.94h71.39c4,0,7.23,0,7.23-5.94V73.34c0-2.52,1.44-4.56,3.27-4.56h30.87C335.68,68.78,342.67,71.31,342.67,88.72Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 250.02px 252.29px;"
                                                id="elbjt0uu0kaa6" class="animable"></path>
                                            <rect x="170.33" y="88.3" width="159.46" height="85.58"
                                                style="fill: rgb(255, 255, 255); transform-origin: 250.06px 131.09px;"
                                                id="elh3q8td3662d" class="animable"></rect>
                                            <path
                                                d="M329.78,173.88l-159.45.05h-.11v-.05l-.14-85.58v-.11h.25l159.45,0h.14v.06Zm0,0-.14-85.58.14.06-159.45,0,.24-.1-.14,85.58-.1,0Z"
                                                style="fill: rgb(219, 219, 219); transform-origin: 250px 131.06px;"
                                                id="elxcs1yv2wvq" class="animable"></path>
                                            <rect x="176.35" y="165.75" width="112.36" height="1.35"
                                                style="fill: rgb(235, 235, 235); transform-origin: 232.53px 166.425px;"
                                                id="elzxacbhh7jkb" class="animable"></rect>
                                            <rect x="176.35" y="169.23" width="76.25" height="1.35"
                                                style="fill: rgb(235, 235, 235); transform-origin: 214.475px 169.905px;"
                                                id="el4pi105cjeyk" class="animable"></rect>
                                            <g id="elb0rlh74bu0c">
                                                <rect x="170.08" y="89.2" width="159.85" height="72.66"
                                                    style="fill: rgb(235, 235, 235); transform-origin: 250.005px 125.53px; transform: rotate(180deg);"
                                                    class="animable"></rect>
                                            </g>
                                            <polygon points="222.89 146.53 329.92 146.53 276.41 103.75 222.89 146.53"
                                                style="fill: rgb(219, 219, 219); transform-origin: 276.405px 125.14px;"
                                                id="elrsb9pwaaqjk" class="animable"></polygon>
                                            <polygon points="170.08 146.56 246.91 146.56 208.49 115.05 170.08 146.56"
                                                style="fill: rgb(199, 199, 199); transform-origin: 208.495px 130.805px;"
                                                id="elh21mcu1k0ss" class="animable"></polygon>
                                            <rect x="170.08" y="146.53" width="159.85" height="15.34"
                                                style="fill: rgb(199, 199, 199); transform-origin: 250.005px 154.2px;"
                                                id="eld94i05q4rz7" class="animable"></rect>
                                            <circle cx="231.29" cy="109.89" r="6.94"
                                                style="fill: rgb(219, 219, 219); transform-origin: 231.29px 109.89px;"
                                                id="elnsu8z8krwx" class="animable"></circle>
                                            <rect x="170.33" y="181" width="159.46" height="97.89"
                                                style="fill: rgb(255, 255, 255); transform-origin: 250.06px 229.945px;"
                                                id="els4ic29xbjz" class="animable"></rect>
                                            <path
                                                d="M329.78,278.88l-159.45.05h-.11v-.05L170.08,181v-.12h.25l159.45.05h.14V181Zm0,0L329.64,181l.14.06-159.45.05.24-.11-.14,97.88-.1-.05Z"
                                                style="fill: rgb(219, 219, 219); transform-origin: 250px 229.905px;"
                                                id="eltcbfdz2b7kj" class="animable"></path>
                                            <path
                                                d="M181.5,190.81a3,3,0,0,1-1,.41,3.39,3.39,0,0,1-4.09-2.48,3.38,3.38,0,1,1,5.06,2.07Z"
                                                style="fill: rgb(235, 235, 235); transform-origin: 179.693px 187.935px;"
                                                id="el8ca6k5tqj7f" class="animable"></path>
                                            <path d="M180.75,187.55a1,1,0,1,1-1-1A1,1,0,0,1,180.75,187.55Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 179.75px 187.55px;"
                                                id="elqvw8v7ie2j" class="animable"></path>
                                            <path
                                                d="M181.5,190.39v.42a3,3,0,0,1-1,.41,3.34,3.34,0,0,1-2.58-.41v-.42a1.78,1.78,0,1,1,3.55,0Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 179.707px 189.898px;"
                                                id="el5qp09l7irb" class="animable"></path>
                                            <path
                                                d="M318.46,187.56c.23,0,.43.14.43.32s-.2.31-.43.31-.42-.14-.42-.31S318.22,187.56,318.46,187.56Z"
                                                style="fill: rgb(235, 235, 235); transform-origin: 318.465px 187.875px;"
                                                id="elpn3a4usue4" class="animable"></path>
                                            <path
                                                d="M319.77,187.56c.23,0,.43.14.43.32s-.2.31-.43.31-.42-.14-.42-.31A.38.38,0,0,1,319.77,187.56Z"
                                                style="fill: rgb(235, 235, 235); transform-origin: 319.775px 187.874px;"
                                                id="el1ihzza2uzv6" class="animable"></path>
                                            <path
                                                d="M321.08,187.56c.24,0,.43.14.43.32s-.19.31-.43.31-.42-.14-.42-.31A.38.38,0,0,1,321.08,187.56Z"
                                                style="fill: rgb(235, 235, 235); transform-origin: 321.085px 187.874px;"
                                                id="elwv98v77mks" class="animable"></path>
                                            <rect x="188.24" y="187.27" width="36.11" height="1.35"
                                                style="fill: rgb(235, 235, 235); transform-origin: 206.295px 187.945px;"
                                                id="el0h7fbqhcaezm" class="animable"></rect>
                                            <rect x="176.35" y="270.76" width="112.36" height="1.35"
                                                style="fill: rgb(235, 235, 235); transform-origin: 232.53px 271.435px;"
                                                id="el210kiabro95" class="animable"></rect>
                                            <rect x="176.35" y="274.24" width="76.25" height="1.35"
                                                style="fill: rgb(235, 235, 235); transform-origin: 214.475px 274.915px;"
                                                id="elomjv0voimm" class="animable"></rect>
                                            <g id="elq510qw70g6k">
                                                <rect x="170.08" y="194.21" width="159.85" height="72.66"
                                                    style="fill: rgb(235, 235, 235); transform-origin: 250.005px 230.54px; transform: rotate(180deg);"
                                                    class="animable"></rect>
                                            </g>
                                            <polygon points="222.89 251.54 329.92 251.54 276.41 208.75 222.89 251.54"
                                                style="fill: rgb(219, 219, 219); transform-origin: 276.405px 230.145px;"
                                                id="el7qc5og6n0sj" class="animable"></polygon>
                                            <polygon points="170.08 251.57 246.91 251.57 208.49 220.05 170.08 251.57"
                                                style="fill: rgb(199, 199, 199); transform-origin: 208.495px 235.81px;"
                                                id="el73nqupjffdn" class="animable"></polygon>
                                            <rect x="170.08" y="251.54" width="159.85" height="15.34"
                                                style="fill: rgb(199, 199, 199); transform-origin: 250.005px 259.21px;"
                                                id="el4gmu84d923f" class="animable"></rect>
                                            <circle cx="231.29" cy="214.9" r="6.94"
                                                style="fill: rgb(219, 219, 219); transform-origin: 231.29px 214.9px;"
                                                id="elz147dj9v20e" class="animable"></circle>
                                            <rect x="170.33" y="286" width="159.46" height="97.89"
                                                style="fill: rgb(255, 255, 255); transform-origin: 250.06px 334.945px;"
                                                id="el47l2z1hxamm" class="animable"></rect>
                                            <path
                                                d="M329.78,383.89l-159.45.05h-.11v-.05L170.08,286v-.11h.25l159.45.05h.14V286Zm0,0L329.64,286l.14.07-159.45.05.24-.12-.14,97.89-.1-.05Z"
                                                style="fill: rgb(219, 219, 219); transform-origin: 250px 334.915px;"
                                                id="elfschhgcdqva" class="animable"></path>
                                            <path d="M181.5,295.82a3.22,3.22,0,0,1-1,.41,3.39,3.39,0,1,1,1-.41Z"
                                                style="fill: rgb(235, 235, 235); transform-origin: 179.73px 292.929px;"
                                                id="elyvs84rb8fra" class="animable"></path>
                                            <path d="M180.75,292.56a1,1,0,1,1-1-1A1,1,0,0,1,180.75,292.56Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 179.75px 292.56px;"
                                                id="elep6ihss36x" class="animable"></path>
                                            <path
                                                d="M181.5,295.4v.42a3.22,3.22,0,0,1-1,.41,3.38,3.38,0,0,1-2.58-.41v-.42a1.78,1.78,0,1,1,3.55,0Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 179.708px 294.906px;"
                                                id="el4s4yk3dcoic" class="animable"></path>
                                            <path
                                                d="M318.46,292.57c.23,0,.43.14.43.32s-.2.31-.43.31-.42-.14-.42-.31S318.22,292.57,318.46,292.57Z"
                                                style="fill: rgb(235, 235, 235); transform-origin: 318.465px 292.885px;"
                                                id="el4hpcu1n93m4" class="animable"></path>
                                            <path
                                                d="M319.77,292.57c.23,0,.43.14.43.32s-.2.31-.43.31-.42-.14-.42-.31A.38.38,0,0,1,319.77,292.57Z"
                                                style="fill: rgb(235, 235, 235); transform-origin: 319.775px 292.884px;"
                                                id="el8r4mu2x98mw" class="animable"></path>
                                            <path
                                                d="M321.08,292.57c.24,0,.43.14.43.32s-.19.31-.43.31-.42-.14-.42-.31A.38.38,0,0,1,321.08,292.57Z"
                                                style="fill: rgb(235, 235, 235); transform-origin: 321.085px 292.884px;"
                                                id="elbtor5ppmkev" class="animable"></path>
                                            <rect x="188.24" y="292.27" width="36.11" height="1.35"
                                                style="fill: rgb(235, 235, 235); transform-origin: 206.295px 292.945px;"
                                                id="elqa9t32bf1q" class="animable"></rect>
                                            <rect x="176.35" y="375.77" width="112.36" height="1.35"
                                                style="fill: rgb(235, 235, 235); transform-origin: 232.53px 376.445px;"
                                                id="el21akplfht2s" class="animable"></rect>
                                            <rect x="176.35" y="379.25" width="76.25" height="1.35"
                                                style="fill: rgb(235, 235, 235); transform-origin: 214.475px 379.925px;"
                                                id="ele143ph54nl6" class="animable"></rect>
                                            <g id="el0l1vgdi0k28m">
                                                <rect x="170.08" y="299.22" width="159.85" height="72.66"
                                                    style="fill: rgb(235, 235, 235); transform-origin: 250.005px 335.55px; transform: rotate(180deg);"
                                                    class="animable"></rect>
                                            </g>
                                            <polygon points="222.89 356.55 329.92 356.55 276.41 313.76 222.89 356.55"
                                                style="fill: rgb(219, 219, 219); transform-origin: 276.405px 335.155px;"
                                                id="elwjoakjtb74" class="animable"></polygon>
                                            <polygon points="170.08 356.58 246.91 356.58 208.49 325.06 170.08 356.58"
                                                style="fill: rgb(199, 199, 199); transform-origin: 208.495px 340.82px;"
                                                id="elx7akt1op9c9" class="animable"></polygon>
                                            <rect x="170.08" y="356.55" width="159.85" height="15.34"
                                                style="fill: rgb(199, 199, 199); transform-origin: 250.005px 364.22px;"
                                                id="ell3tidfk282o" class="animable"></rect>
                                            <circle cx="231.29" cy="319.91" r="6.94"
                                                style="fill: rgb(219, 219, 219); transform-origin: 231.29px 319.91px;"
                                                id="elot1cqil4pr" class="animable"></circle>
                                            <path
                                                d="M342.67,88.72v16.89H157.32V88.72c0-19,7-19.94,15.64-19.94h30.86c1.79,0,3.25,2,3.25,4.57v1.09c0,5.91,3.25,5.93,7.23,5.93h71.39c4,0,7.22,0,7.22-5.93V73.35c0-2.54,1.45-4.57,3.27-4.57h30.88C335.68,68.78,342.67,71.3,342.67,88.72Z"
                                                style="fill: rgb(94, 128, 183); transform-origin: 249.995px 87.195px;"
                                                id="el6l3nl1w5p7q" class="animable"></path>
                                            <g id="freepik--u5Zjqx--inject-129" class="animable"
                                                style="transform-origin: 195.155px 77.135px;">
                                                <path
                                                    d="M198.49,76.19l-.3.3-.16.17a4.07,4.07,0,0,0-5.75,0l-.17-.16-.29-.3h0l0,0c.13-.11.25-.23.38-.33a4,4,0,0,1,.87-.56,4.29,4.29,0,0,1,1.16-.39l.58-.08c.06,0,.49,0,.5,0l.4,0a4,4,0,0,1,1.06.25,5.05,5.05,0,0,1,.71.33,4.24,4.24,0,0,1,.69.48l.31.29Z"
                                                    style="fill: rgb(255, 255, 255); transform-origin: 195.155px 75.75px;"
                                                    id="elmwqhsc39u8h" class="animable"></path>
                                                <path
                                                    d="M193.22,77.6l-.47-.47a3.3,3.3,0,0,1,1.92-1,3.35,3.35,0,0,1,2.88,1l-.47.47a2.74,2.74,0,0,0-3.86,0Z"
                                                    style="fill: rgb(255, 255, 255); transform-origin: 195.15px 76.849px;"
                                                    id="ele1hwhjcxmps" class="animable"></path>
                                                <path
                                                    d="M196.61,78.07c-.16.15-.31.31-.47.47a1.35,1.35,0,0,0-1-.41,1.38,1.38,0,0,0-1,.41c-.15-.16-.31-.31-.47-.47A2.06,2.06,0,0,1,196.61,78.07Z"
                                                    style="fill: rgb(255, 255, 255); transform-origin: 195.14px 77.9966px;"
                                                    id="elrht91eslty" class="animable"></path>
                                                <path
                                                    d="M195.57,79a.42.42,0,0,1-.42.43.43.43,0,0,1,0-.85A.42.42,0,0,1,195.57,79Z"
                                                    style="fill: rgb(255, 255, 255); transform-origin: 195.178px 79.005px;"
                                                    id="elf2nts70f81v" class="animable"></path>
                                            </g>
                                            <path
                                                d="M169.41,77.1a1.23,1.23,0,1,1,1.23,1.22A1.23,1.23,0,0,1,169.41,77.1Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 170.64px 77.09px;"
                                                id="eltzff4ndd3do" class="animable"></path>
                                            <path
                                                d="M173.28,77.1a1.23,1.23,0,1,1,1.23,1.22A1.23,1.23,0,0,1,173.28,77.1Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 174.51px 77.09px;"
                                                id="ele386lkdchhe" class="animable"></path>
                                            <path
                                                d="M177.15,77.1a1.23,1.23,0,1,1,1.22,1.22A1.23,1.23,0,0,1,177.15,77.1Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 178.38px 77.09px;"
                                                id="elup820r0u75" class="animable"></path>
                                            <path d="M181,77.1a1.23,1.23,0,1,1,1.22,1.22A1.23,1.23,0,0,1,181,77.1Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 182.23px 77.09px;"
                                                id="elvz574sig8or" class="animable"></path>
                                            <path
                                                d="M184.88,77.1a1.23,1.23,0,1,1,1.23,1.22A1.23,1.23,0,0,1,184.88,77.1Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 186.11px 77.09px;"
                                                id="elcddqihest4f" class="animable"></path>
                                            <path d="M328.77,79.78h-10V75.14h10Zm-9.49-.52h9v-3.6h-9Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 323.77px 77.46px;"
                                                id="el5fo8j9vqhlp" class="animable"></path>
                                            <rect x="319.6" y="75.93" width="6.45" height="3.06"
                                                style="fill: rgb(255, 255, 255); transform-origin: 322.825px 77.46px;"
                                                id="el22ou9xzs0w1j" class="animable"></rect>
                                            <rect x="328.77" y="76.22" width="0.89" height="2.48"
                                                style="fill: rgb(255, 255, 255); transform-origin: 329.215px 77.46px;"
                                                id="elbjwqubqchvq" class="animable"></rect>
                                            <rect x="208.57" y="395.79" width="82.87" height="20.92"
                                                style="fill: rgb(94, 128, 183); transform-origin: 250.005px 406.25px;"
                                                id="elewotqjktyeg" class="animable"></rect>
                                            <path
                                                d="M224.87,409v-5.81a.53.53,0,0,1,.54-.54.55.55,0,0,1,.55.54v5.26h2.67a.55.55,0,0,1,0,1.1h-3.22A.54.54,0,0,1,224.87,409Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 227.025px 406.1px;"
                                                id="elk48gz8220bf" class="animable"></path>
                                            <path
                                                d="M230.66,408.79a2.5,2.5,0,0,1-.68-1.74,2.54,2.54,0,0,1,.68-1.72,2.26,2.26,0,0,1,1.69-.75,2.14,2.14,0,0,1,1.65.75,2.46,2.46,0,0,1,.69,1.72,2.42,2.42,0,0,1-.69,1.74,2.18,2.18,0,0,1-1.65.75A2.3,2.3,0,0,1,230.66,408.79Zm.39-1.74a1.59,1.59,0,0,0,.36,1.05,1.34,1.34,0,0,0,.94.36,1.3,1.3,0,0,0,.91-.36,1.51,1.51,0,0,0,.39-1.05,1.45,1.45,0,0,0-.39-1,1.37,1.37,0,0,0-.91-.38,1.4,1.4,0,0,0-.94.38A1.53,1.53,0,0,0,231.05,407.05Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 232.335px 407.06px;"
                                                id="elyt6gf7an8us" class="animable"></path>
                                            <path
                                                d="M240.53,407.05V409a.52.52,0,0,1-1,.1,2.23,2.23,0,0,1-1.31.43,2.31,2.31,0,0,1-1.68-.72,2.57,2.57,0,0,1-.67-1.74,2.49,2.49,0,0,1,.67-1.73,2.25,2.25,0,0,1,1.68-.74,2.3,2.3,0,0,1,1.31.43.52.52,0,0,1,1,.1Zm-1,0a1.42,1.42,0,0,0-.39-1,1.23,1.23,0,0,0-1.83,0,1.41,1.41,0,0,0-.38,1,1.47,1.47,0,0,0,.38,1,1.29,1.29,0,0,0,1.83,0A1.48,1.48,0,0,0,239.49,407.05Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 238.2px 407.065px;"
                                                id="el6vk7iv4uzwd" class="animable"></path>
                                            <path
                                                d="M246.92,409a.53.53,0,0,1-1,.11,2.4,2.4,0,0,1-1.34.43,2.47,2.47,0,0,1,0-4.93,2.4,2.4,0,0,1,1.32.41v-1.85a.54.54,0,0,1,.54-.53.53.53,0,0,1,.53.53V407h0Zm-2.39-3.32a1.27,1.27,0,0,0-.93.41,1.44,1.44,0,0,0,0,2,1.28,1.28,0,0,0,1.86,0,1.44,1.44,0,0,0,0-2A1.27,1.27,0,0,0,244.53,405.65Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 244.619px 406.09px;"
                                                id="el4wxx7ydzish" class="animable"></path>
                                            <path
                                                d="M256,406.62V409a.53.53,0,0,1-.53.53A.55.55,0,0,1,255,409v-2.36a1,1,0,0,0-1-1,1,1,0,0,0-1,1V409s0,0,0,.07v0s0,0,0,.06v.05a.58.58,0,0,1-.49.32h-.1a.54.54,0,0,1-.42-.52v-2.33h0v-1.53a.52.52,0,0,1,1-.24,2.15,2.15,0,0,1,1.05-.29,2,2,0,0,1,1.55.68,2,2,0,0,1,1.55-.68,2.06,2.06,0,0,1,2.05,2.07V409a.53.53,0,1,1-1.05,0v-2.33a1,1,0,0,0-2,0Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 255.592px 407.079px;"
                                                id="el5syoakqhp86" class="animable"></path>
                                            <path
                                                d="M261.74,408.79a2.46,2.46,0,0,1-.68-1.74,2.5,2.5,0,0,1,.68-1.72,2.26,2.26,0,0,1,1.69-.75,2.18,2.18,0,0,1,1.65.75,2.46,2.46,0,0,1,.69,1.72,2.42,2.42,0,0,1-.69,1.74,2.21,2.21,0,0,1-1.65.75A2.3,2.3,0,0,1,261.74,408.79Zm.39-1.74a1.59,1.59,0,0,0,.36,1.05,1.34,1.34,0,0,0,.94.36,1.32,1.32,0,0,0,.91-.36,1.55,1.55,0,0,0,.38-1.05,1.49,1.49,0,0,0-.38-1,1.39,1.39,0,0,0-.91-.38,1.4,1.4,0,0,0-.94.38A1.53,1.53,0,0,0,262.13,407.05Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 263.415px 407.06px;"
                                                id="elmsp6z0q55nh" class="animable"></path>
                                            <path
                                                d="M270.28,405.1a.52.52,0,0,1-.52.52,1,1,0,0,0-.6.19,1.68,1.68,0,0,0-.45.47,2.94,2.94,0,0,0-.4.83V409a.54.54,0,0,1-.55.53.53.53,0,0,1-.52-.53V405.1a.51.51,0,0,1,.52-.51.53.53,0,0,1,.55.51v.07a1.26,1.26,0,0,1,.2-.2,2.16,2.16,0,0,1,1.25-.38A.51.51,0,0,1,270.28,405.1Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 268.76px 407.06px;"
                                                id="elbc0qsc2cg5" class="animable"></path>
                                            <path
                                                d="M270.73,407a2.43,2.43,0,0,1,2.4-2.46,2.35,2.35,0,0,1,2.38,2.28v.05a.28.28,0,0,1,0,.09.48.48,0,0,1-.51.4h-3.14a1.32,1.32,0,0,0,.34.65,1.54,1.54,0,0,0,.94.44,1.6,1.6,0,0,0,1-.25.58.58,0,0,1,.74,0,.47.47,0,0,1,0,.65,2.51,2.51,0,0,1-1.77.65A2.45,2.45,0,0,1,270.73,407Zm1.07-.48h2.79a1.61,1.61,0,0,0-1.46-1.05A1.38,1.38,0,0,0,271.8,406.56Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 273.122px 407.021px;"
                                                id="elizt4mv2vhzq" class="animable"></path>
                                        </g>
                                        <g id="freepik--Lines--inject-129" class="animable"
                                            style="transform-origin: 250px 406.25px;">
                                            <path d="M291.38,408.69a5.49,5.49,0,0,1,0,4.58,5.49,5.49,0,0,1,0-4.58Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 291.38px 410.98px;"
                                                id="el21d208iiz9g" class="animable"></path>
                                            <path
                                                d="M285.72,411.08a5,5,0,0,1,2,1.27,5,5,0,0,1,1.26,2,5,5,0,0,1-2-1.27A5.08,5.08,0,0,1,285.72,411.08Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 287.35px 412.715px;"
                                                id="elg5wgz93fzr" class="animable"></path>
                                            <path
                                                d="M283.42,416.77a4.85,4.85,0,0,1,2.29-.5,4.9,4.9,0,0,1,2.29.5,5.16,5.16,0,0,1-2.29.5A5.1,5.1,0,0,1,283.42,416.77Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 285.71px 416.769px;"
                                                id="elt1xjlv3xzd" class="animable"></path>
                                            <path
                                                d="M285.81,422.42a5,5,0,0,1,1.26-2,5,5,0,0,1,2-1.27,5.55,5.55,0,0,1-3.24,3.24Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 287.44px 420.785px;"
                                                id="eltltx1im95p" class="animable"></path>
                                            <path d="M291.49,424.73a5.52,5.52,0,0,1,0-4.59,5.52,5.52,0,0,1,0,4.59Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 291.49px 422.435px;"
                                                id="elnhpr5hhsmij" class="animable"></path>
                                            <path
                                                d="M297.14,422.34a5,5,0,0,1-2-1.27,4.85,4.85,0,0,1-1.26-2,5,5,0,0,1,2,1.26A5.06,5.06,0,0,1,297.14,422.34Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 295.51px 420.705px;"
                                                id="elgo9006c5l2" class="animable"></path>
                                            <path
                                                d="M299.45,416.65a5.13,5.13,0,0,1-2.29.5,4.87,4.87,0,0,1-2.29-.5,4.87,4.87,0,0,1,2.29-.5A5.13,5.13,0,0,1,299.45,416.65Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 297.16px 416.65px;"
                                                id="elqi92qr9iiv" class="animable"></path>
                                            <path
                                                d="M297.06,411a5.07,5.07,0,0,1-1.26,2,5,5,0,0,1-2,1.27,5,5,0,0,1,1.27-2A5.07,5.07,0,0,1,297.06,411Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 295.43px 412.635px;"
                                                id="elv2gxim10cxb" class="animable"></path>
                                            <path d="M208.51,387.77a5.49,5.49,0,0,1,0,4.58,5.49,5.49,0,0,1,0-4.58Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 208.51px 390.06px;"
                                                id="elfxwaamkyo26" class="animable"></path>
                                            <path
                                                d="M202.86,390.16a5,5,0,0,1,2,1.27,4.85,4.85,0,0,1,1.26,2,5.5,5.5,0,0,1-3.23-3.24Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 204.49px 391.795px;"
                                                id="el6s6indp7yzs" class="animable"></path>
                                            <path d="M200.55,395.85a5.49,5.49,0,0,1,4.58,0,5.49,5.49,0,0,1-4.58,0Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 202.84px 395.85px;"
                                                id="elaab0w644qyt" class="animable"></path>
                                            <path
                                                d="M202.94,401.5a5.18,5.18,0,0,1,1.26-2,5,5,0,0,1,2-1.26,5.55,5.55,0,0,1-3.24,3.24Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 204.57px 399.87px;"
                                                id="ellojc3zjvsu" class="animable"></path>
                                            <path
                                                d="M208.62,403.8a5.1,5.1,0,0,1-.5-2.29,5.16,5.16,0,0,1,.5-2.29,4.9,4.9,0,0,1,.5,2.29A4.85,4.85,0,0,1,208.62,403.8Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 208.621px 401.51px;"
                                                id="el9qqnlrmhqur" class="animable"></path>
                                            <path
                                                d="M214.28,401.42a5.12,5.12,0,0,1-2-1.27,5,5,0,0,1-1.26-2,5,5,0,0,1,2,1.26A5.12,5.12,0,0,1,214.28,401.42Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 212.65px 399.785px;"
                                                id="eloq2kbwac0fp" class="animable"></path>
                                            <path
                                                d="M216.58,395.73a5.1,5.1,0,0,1-2.29.5,5,5,0,0,1-2.29-.5,4.9,4.9,0,0,1,2.29-.5A5.1,5.1,0,0,1,216.58,395.73Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 214.29px 395.73px;"
                                                id="el4ak6x04j5qe" class="animable"></path>
                                            <path
                                                d="M214.19,390.08a5,5,0,0,1-1.26,2,5,5,0,0,1-2,1.27,5,5,0,0,1,1.27-2A5.07,5.07,0,0,1,214.19,390.08Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 212.56px 391.715px;"
                                                id="elqud4dhl7a7" class="animable"></path>
                                        </g>
                                        <g id="freepik--Character--inject-129" class="animable"
                                            style="transform-origin: 114.118px 267.27px;">
                                            <path
                                                d="M135.84,346.34l26.74,31.87c5.14,6.07,9.54,11.48,11.56,14.49l0,.05a5.63,5.63,0,0,1,1.14,2.25.15.15,0,0,1,0,.07c-.76,2.75-48,45.25-50.18,46.18s-5-5.12-4.44-8.23S132,405.53,132,405.53l-26.41-32.09Z"
                                                style="fill: rgb(255, 196, 192); transform-origin: 140.437px 393.843px;"
                                                id="el44atx8poptx" class="animable"></path>
                                            <path
                                                d="M157.09,371.68l5.49,6.53c5.14,6.07,9.54,11.48,11.56,14.49l0,.05a11,11,0,0,1,1.14,2.25.15.15,0,0,1,0,.07c-.76,2.75-48,45.25-50.18,46.18s-5-5.12-4.44-8.23S132,405.53,132,405.53L126.37,399Z"
                                                style="fill: rgb(235, 235, 235); transform-origin: 147.936px 406.513px;"
                                                id="ellbwx4fepo9o" class="animable"></path>
                                            <path
                                                d="M125.12,441.25c2.15-.93,49.42-43.42,50.19-46.18.31-1.05-5.48-8.3-12.73-16.85l-.23-.27L131.55,405l.48.51S121.21,429.89,120.68,433,123,442.19,125.12,441.25Z"
                                                style="fill: rgb(94, 128, 183); transform-origin: 147.969px 409.649px;"
                                                id="el2t7qv9ukmoo" class="animable"></path>
                                            <polygon points="131.62 404.97 131.62 405.11 131.54 405.03 131.62 404.97"
                                                style="fill: rgb(2, 1, 0); transform-origin: 131.58px 405.04px;"
                                                id="elz9uqohrjggn" class="animable"></polygon>
                                            <g id="el4vtrdbd0tyl">
                                                <path
                                                    d="M120.69,433c.46-2.76,9-22.13,10.93-26.57V435.9a79.33,79.33,0,0,1-6.5,5.36C123,442.19,120.17,436.13,120.69,433Z"
                                                    style="fill: rgb(2, 1, 0); opacity: 0.1; transform-origin: 126.124px 423.893px;"
                                                    class="animable"></path>
                                            </g>
                                            <path
                                                d="M124,438.94c7.79-7.36,39.91-36.31,48.17-43,.07-.06.11,0,0,.05-7.57,7.46-39.92,36.15-48.1,43.07C124,439.22,123.84,439.09,124,438.94Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 148.085px 417.524px;"
                                                id="elk1x84fnemb" class="animable"></path>
                                            <path
                                                d="M129.55,407.93c2.61-3.4,6.87-6.37,11.28-6.29.17,0,.16.25,0,.3a59,59,0,0,0-10.94,6.38A.27.27,0,0,1,129.55,407.93Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 135.231px 404.991px;"
                                                id="elmhzd0ix1xce" class="animable"></path>
                                            <path
                                                d="M128.51,411.33c2.61-3.4,6.88-6.37,11.28-6.29.17,0,.16.24,0,.3a59.49,59.49,0,0,0-10.94,6.37A.27.27,0,0,1,128.51,411.33Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 134.195px 408.385px;"
                                                id="el7kbrhvdr5b" class="animable"></path>
                                            <path
                                                d="M127.47,414.73c2.61-3.41,6.88-6.37,11.28-6.29.17,0,.17.24,0,.3a59.91,59.91,0,0,0-10.95,6.37A.27.27,0,0,1,127.47,414.73Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 133.158px 411.782px;"
                                                id="ela09ym12y15f" class="animable"></path>
                                            <path
                                                d="M122.93,307.75c2.29,11.31,41.27,69.12,41.27,69.12l-34.62,31.69s-56.78-73.1-53.31-98.1c3-21.74,35.58-109.18,35.58-109.18h37.56S120.68,296.63,122.93,307.75Z"
                                                style="fill: rgb(55, 71, 79); transform-origin: 120.159px 304.92px;"
                                                id="eltqa2du2a27o" class="animable"></path>
                                            <path
                                                d="M126.63,398.12c5-4.8,3.51-3.5,8.58-8.24,2.48-2.32,18.81-17.55,21.5-19.3.06,0,.14.05.1.1-2,2.53-18.57,17.48-21.1,19.75-5.16,4.64-3.73,3.25-9,7.84C126.67,398.35,126.53,398.21,126.63,398.12Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 141.708px 384.437px;"
                                                id="elb50ec9kcb9e" class="animable"></path>
                                            <path
                                                d="M116.48,304c.54-2.83,1.15-5.64,1.75-8.45q1.83-8.62,3.87-17.19,4.07-17,8.82-33.79c3.21-11.24,6.59-22.46,10.49-33.48.48-1.36,1-2.72,1.47-4.07,0-.11.2-.06.17,0-3.38,11-6.86,22-10,33.15s-6.07,22.18-8.82,33.34c-1.38,5.61-2.67,11.23-3.92,16.87q-.93,4.16-1.81,8.31a58.41,58.41,0,0,0-1.57,8.57,13,13,0,0,0,2.2,7.72c1.41,2.3,31.4,53.52,32.39,54.44.08.08,0,.19-.12.12-4.1-3.69-34-55.26-34.8-57.67A15.59,15.59,0,0,1,116.48,304Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 133.793px 288.259px;"
                                                id="el3y5domm3xzj" class="animable"></path>
                                            <path
                                                d="M131.67,385.51S123.56,425,123.56,425c-.1,8-.34,14.92-.8,18.51a.13.13,0,0,1,0,.06,5.41,5.41,0,0,1-.62,2.44l0,.05c-2.38,1.58-65.94,2.56-68.17,1.85s-.38-7.12,2.06-9.12,26.61-13.27,26.61-13.27l8.5-39.45Z"
                                                style="fill: rgb(255, 196, 192); transform-origin: 92.319px 416.828px;"
                                                id="eli45c896rl4" class="animable"></path>
                                            <path
                                                d="M53.91,447.93c2.22.71,65.79-.27,68.17-1.84,0,0,0,0,0-.06a5.41,5.41,0,0,0,.62-2.44.15.15,0,0,0,0-.07c.46-3.58.69-10.55.81-18.5l1.4-6.87H84.17l-1.58,7.38S58.42,436.8,56,438.81,51.67,447.23,53.91,447.93Z"
                                                style="fill: rgb(235, 235, 235); transform-origin: 88.9124px 433.158px;"
                                                id="elmietg64wb2d" class="animable"></path>
                                            <path
                                                d="M53.91,447.93c2.23.71,65.78-.27,68.18-1.85.92-.58,1.31-9.85,1.47-21.06v-.35l-41,.18,0,.69S58.42,436.8,56,438.81,51.68,447.23,53.91,447.93Z"
                                                style="fill: rgb(94, 128, 183); transform-origin: 88.2396px 436.417px;"
                                                id="elgz5jerhb2is" class="animable"></path>
                                            <path
                                                d="M54.59,445.46c10.71-.43,53.94-1.15,64.56-.77.09,0,.09.07,0,.07-10.6.66-53.84,1-64.56.87C54.37,445.63,54.36,445.46,54.59,445.46Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 86.8194px 445.12px;"
                                                id="el5ecmoqmi793" class="animable"></path>
                                            <path
                                                d="M79.14,425.72c4.2-.85,9.37-.29,12.63,2.67.13.11,0,.29-.17.25a59.08,59.08,0,0,0-12.44-2.39A.27.27,0,0,1,79.14,425.72Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 85.3768px 427.002px;"
                                                id="elu5c9doendj" class="animable"></path>
                                            <path
                                                d="M76.12,427.6c4.21-.85,9.37-.29,12.64,2.67.13.11,0,.29-.18.25a59,59,0,0,0-12.43-2.39A.27.27,0,0,1,76.12,427.6Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 82.3636px 428.882px;"
                                                id="el5mgm8mkthun" class="animable"></path>
                                            <path
                                                d="M73.11,429.48c4.2-.85,9.37-.29,12.64,2.67.12.11,0,.29-.18.25A59.08,59.08,0,0,0,73.13,430,.27.27,0,0,1,73.11,429.48Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 79.3602px 430.762px;"
                                                id="elocbleisxug" class="animable"></path>
                                            <path
                                                d="M112.69,201.28A154.68,154.68,0,0,1,115.92,220c.78,7.86,1.76,14.81,2.81,15.68s7.12,4.79,9.12,6c0,0-18.51,56.09-23.28,74.79-6.92,27.11-23.5,108.43-23.5,108.43h44.17s13.44-77.42,19.31-103.23c5-22.13,24.32-88.5,24.32-88.5a38.53,38.53,0,0,0-1.56-31.92S112.69,201.25,112.69,201.28Z"
                                                style="fill: rgb(55, 71, 79); transform-origin: 126.336px 313.075px;"
                                                id="elj6nbxwqq81" class="animable"></path>
                                            <path
                                                d="M85,416.37c6.55,0,4.67-.12,11.22-.09,3.21,0,24.27.15,27.26.72.06,0,.06.13,0,.14-3,.48-24.07,0-27.27-.12-6.55-.17-4.67-.2-11.21-.44A.11.11,0,0,1,85,416.37Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 104.224px 416.812px;"
                                                id="el8ywr0zajbup" class="animable"></path>
                                            <path
                                                d="M115.6,233.48a84.4,84.4,0,0,1,12.19,8.16.15.15,0,0,1-.17.25c-4.13-2.59-8.36-5.1-12.34-7.92A.29.29,0,0,1,115.6,233.48Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 121.502px 237.674px;"
                                                id="elkrrfnilijno" class="animable"></path>
                                            <path
                                                d="M119,203c0-.15.31-.14.29,0a146.76,146.76,0,0,0-1.56,14.9c-.15,2.31-.27,15.19,3.83,14.89.68-.05,1.12-.65,1.38-1.63a16.29,16.29,0,0,0,.08-4c0-2.71,0-5.41.21-8.1a72.74,72.74,0,0,1,2.48-14.88.13.13,0,0,1,.25.05,137.65,137.65,0,0,0-2,20.76c0,3.35.87,8.54-2.64,8.52s-4.54-8.65-4.62-11A76.41,76.41,0,0,1,119,203Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 121.327px 218.201px;"
                                                id="eliqhsrct8wm" class="animable"></path>
                                            <path
                                                d="M121.37,233.1a19.78,19.78,0,0,1,.48,2.75,5.82,5.82,0,0,1,0,2.2.15.15,0,0,1-.28,0,7.44,7.44,0,0,1-.6-2.23c-.17-.86-.37-1.71-.52-2.57A.45.45,0,0,1,121.37,233.1Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 121.199px 235.428px;"
                                                id="elns6v2fwmj5t" class="animable"></path>
                                            <path
                                                d="M128.47,403.63c.11-1.05.25-2.11.4-3.16.27-2,.6-4,.9-6.06.61-4.06,1.28-8.11,2-12.16,1.38-8.06,3-16.1,4.67-24.11,1-4.52,2.06-9,3.23-13.46.09-.31.51-.16.46.14-.71,4.09-1.4,8.19-2.21,12.26s-1.61,8.12-2.39,12.18c-1.54,8-3,16.1-4.52,24.13-.43,2.27-.83,4.55-1.25,6.82-.22,1.13-.44,2.26-.67,3.39s-.58,2.23-.76,3.36c0,.11-.17.06-.15,0C128.33,405.83,128.35,404.72,128.47,403.63Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 134.156px 375.767px;"
                                                id="el7mf6clt2toe" class="animable"></path>
                                            <path
                                                d="M99.92,333.3c1.47-7.33,3.45-14.57,5.45-21.77,4-14.49,8.74-28.78,13.45-43.06l4.08-12.34c.68-2.06,4-13.15,4.42-14.21a.09.09,0,0,1,.18.05c-1,3.78-2.27,9.29-3.37,13s-2.28,7.37-3.43,11.05c-2.26,7.23-4.55,14.45-6.74,21.71-4.33,14.33-8.63,28.66-12.15,43.22-1,4.08-2,8.16-2.86,12.25s-3.57,14.24-4.43,18.34c0,.11-.21.08-.2,0C95.06,354.07,98.44,340.65,99.92,333.3Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 110.911px 301.732px;"
                                                id="elrfk9f56xs9" class="animable"></path>
                                            <path
                                                d="M127.38,371.65c2.43-14,5.35-27.9,8.57-41.72s6.86-27.69,10.84-41.39,8.38-27.27,13.12-40.72a170.1,170.1,0,0,0,6-19.37c1.45-6.53,2.19-13.6.67-20.19a32.74,32.74,0,0,0-1.51-4.91c0-.11.12-.2.17-.09,5.31,12.38,1.86,25.92-2.18,38.13-2.22,6.69-4.58,13.32-6.77,20q-3.36,10.3-6.45,20.71c-4.08,13.74-7.86,27.56-11.25,41.49s-6.41,27.93-9.07,42-4.91,28.32-7.18,42.51c-.3,1.85-.53,3.71-.77,5.56,0,.1-.18.1-.17,0C123.11,399.62,125,385.61,127.38,371.65Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 144.675px 308.472px;"
                                                id="el3enqh9w78w2" class="animable"></path>
                                            <path
                                                d="M84.93,105.89l7.46,30.8c.32.91-.14,1.63-1,1.63l-15.85-.15a2.57,2.57,0,0,1-2.19-1.65l-7.45-30.8c-.33-.91.14-1.64,1-1.63l15.86.15A2.57,2.57,0,0,1,84.93,105.89Z"
                                                style="fill: rgb(55, 71, 79); transform-origin: 79.143px 121.205px;"
                                                id="ellme81ymtxf9" class="animable"></path>
                                            <path
                                                d="M83.05,105.86l7.46,30.8c.32.9-.14,1.63-1,1.62l-15.85-.14a2.57,2.57,0,0,1-2.19-1.66L64,105.68c-.32-.9.14-1.63,1-1.62l15.85.14A2.57,2.57,0,0,1,83.05,105.86Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 77.255px 121.17px;"
                                                id="elwwbznkavco8" class="animable"></path>
                                            <path
                                                d="M78.69,107.22A1.35,1.35,0,1,0,80,105.86,1.34,1.34,0,0,0,78.69,107.22Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 80.0399px 107.209px;"
                                                id="elxfm0h5i0e8l" class="animable"></path>
                                            <path
                                                d="M128.07,144.83c-7,17.87-23.78,41.59-31.33,42.19-3.6.28-10,1.57-15-2.26-10.89-8.34-19-21.29-21.45-28.88-1.1-3.41,18.48-14.48,21.1-11.7,5.66,6,11.16,14.17,12.2,14,3.86-.55,16.82-13,26.8-22.6C132.54,124,130.86,137.71,128.07,144.83Z"
                                                style="fill: rgb(255, 196, 192); transform-origin: 95.1593px 159.278px;"
                                                id="eld58xfh1qtx6" class="animable"></path>
                                            <path
                                                d="M58.66,133.48c2-7.86,3.72-9.57,1.88-17.1-1.21-4.94,1.43-7.83,4.93-3.87,5.73,6.49,5.28,17.17,4.06,20.83Z"
                                                style="fill: rgb(255, 196, 192); transform-origin: 64.4781px 122.067px;"
                                                id="elp59duhvwf5d" class="animable"></path>
                                            <path
                                                d="M60.33,155.88s-3.8-10-2.5-18.56c.9-5.94,4.3-18.64,20.92-25.34,4-1.59,10.7-1.06,5.2,3.88-3.91,3.5-7.45,4.55-9.35,7,0,0,8.5,1.7,9.94,5.71a78.9,78.9,0,0,1,3,10.76,16.78,16.78,0,0,1-2,.74s1.23,3.8-1.59,9.19Z"
                                                style="fill: rgb(255, 196, 192); transform-origin: 72.5495px 133.53px;"
                                                id="elt7azqx9yn2s" class="animable"></path>
                                            <path
                                                d="M59.59,131.79c2.41-2,7.57-6.27,13-8.26,6-2.21,18.24-4.84,19.82-.37,1.17,3.27-3.41,4.69-3.41,4.69s5.28,0,5.68,3.16c.37,2.9-3.23,3.79-3.23,3.79s3.2.53,3,3.4c-.22,3.44-6.89,1.76-10.13,5.06C83.59,144,59.59,131.79,59.59,131.79Z"
                                                style="fill: rgb(255, 196, 192); transform-origin: 77.1483px 132.008px;"
                                                id="elshhfbme8m6h" class="animable"></path>
                                            <path
                                                d="M73.86,130.29a25.56,25.56,0,0,1,15-2.53c.13,0,.19.13.06.14a62.85,62.85,0,0,0-15.07,2.45S73.83,130.31,73.86,130.29Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 81.418px 128.939px;"
                                                id="eln7kewau0jyf" class="animable"></path>
                                            <path
                                                d="M76.27,136.31c2.35-1.1,9.39-2.86,15.16-1.63.13,0,.17.14,0,.14a67.93,67.93,0,0,0-15.2,1.55S76.24,136.32,76.27,136.31Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 83.8865px 135.315px;"
                                                id="elu2bae6pbqq" class="animable"></path>
                                            <path
                                                d="M106.24,146.29l2.68,3.24.55.67,10.66,12.9s9.66-15.78,11.61-24.75c1.17-5.39.33-8.57-2-9.15a3.08,3.08,0,0,0-.53-.08c-1.52-.13-3.56.67-6,2.47C116.32,136.67,106.24,146.29,106.24,146.29Z"
                                                style="fill: rgb(94, 128, 183); transform-origin: 119.252px 146.103px;"
                                                id="el32xvn7mmxmk" class="animable"></path>
                                            <path
                                                d="M129,130.24a8,8,0,0,0,.72-1,3.08,3.08,0,0,0-.53-.08A8.18,8.18,0,0,0,129,130.24Zm-20.08,19.29.55.67a10.66,10.66,0,0,0,.63-2.59A9.36,9.36,0,0,0,108.92,149.53Zm13.59-4a11.09,11.09,0,0,0,.82,3,11.26,11.26,0,0,0,1.57,2.69,11.09,11.09,0,0,0-.82-3A11.26,11.26,0,0,0,122.51,145.57Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 119.32px 140.19px;"
                                                id="eli5cxvuzvnj" class="animable"></path>
                                            <path
                                                d="M122.21,157.73c-.58-1.36-6.51-9.51-11.45-14.68a.09.09,0,0,0-.13.11c.47.64,10.27,13.73,11.4,14.72C122.13,158,122.25,157.83,122.21,157.73Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 116.421px 150.479px;"
                                                id="elawr92ntq01g" class="animable"></path>
                                            <g id="elmy19iy1anf7">
                                                <path
                                                    d="M113.31,154.85l6.82,8.24s9.66-15.77,11.61-24.75c1.35-6.19,0-9.47-3.17-9.23Z"
                                                    style="opacity: 0.05; transform-origin: 122.785px 146.094px;"
                                                    class="animable"></path>
                                            </g>
                                            <path
                                                d="M111.37,203.45c1.37,1.49,59.16,7.64,59.49,7.24.89-1.08-4.43-59.49-28.11-80.88-4.17-3.77-11.54-2.7-15-.76-1.7,1-4.67,9-7.58,18.47C118,154.72,110.51,202.51,111.37,203.45Z"
                                                style="fill: rgb(94, 128, 183); transform-origin: 141.127px 168.998px;"
                                                id="elfnedmzfsmh4" class="animable"></path>
                                            <path
                                                d="M129,130.24a10,10,0,0,0,1.34-2.23c-.33.09-.64.2-.94.31A9.35,9.35,0,0,0,129,130.24ZM122,171a10.75,10.75,0,0,0,1.54-2.71,11.05,11.05,0,0,0,.79-3,10.87,10.87,0,0,0-1.54,2.7A11.22,11.22,0,0,0,122,171Zm27.08-10.26a10.83,10.83,0,0,0,1.53-2.7,10.52,10.52,0,0,0,.79-3,11.16,11.16,0,0,0-1.53,2.7A10.52,10.52,0,0,0,149.1,160.76Zm17.71,24.5a8,8,0,0,0,.65-.91h0c-.07-.35-.15-.71-.23-1.07A9.39,9.39,0,0,0,166.81,185.26ZM135,204.14a10.87,10.87,0,0,0,1.54-2.7,11.22,11.22,0,0,0,.79-3,11.92,11.92,0,0,0-2.33,5.71ZM137.48,139a10.89,10.89,0,0,0,2.71,1.53,11.22,11.22,0,0,0,3,.79,10.89,10.89,0,0,0-2.71-1.53A10.52,10.52,0,0,0,137.48,139Zm9.19,32.06a10.93,10.93,0,0,0,2.71,1.54,11.22,11.22,0,0,0,3,.79,12,12,0,0,0-5.72-2.33ZM114,181.8a11.21,11.21,0,0,0,3,.77,10.87,10.87,0,0,0-2.7-1.54l-.13-.05C114.1,181.26,114.06,181.53,114,181.8Zm51.44,16.8a11,11,0,0,0,.82,3,10.58,10.58,0,0,0,1.57,2.69,10.75,10.75,0,0,0-.83-3A11,11,0,0,0,165.46,198.6Zm-42.95-53a11.09,11.09,0,0,0,.82,3,11.26,11.26,0,0,0,1.57,2.69,11.09,11.09,0,0,0-.82-3A11.26,11.26,0,0,0,122.51,145.57Zm11.28,32a12,12,0,0,0,2.4,5.68,10.69,10.69,0,0,0-.83-3A10.93,10.93,0,0,0,133.79,177.59Zm14.15,15.89a10.85,10.85,0,0,0,3-.83,10.7,10.7,0,0,0,2.68-1.57,12.11,12.11,0,0,0-5.68,2.4Zm-28.88,1.25a12,12,0,0,0,5.68-2.39,10.75,10.75,0,0,0-3,.83A11,11,0,0,0,119.06,194.73Zm13.12-35.63a11.09,11.09,0,0,0,3-.82,11.26,11.26,0,0,0,2.69-1.57,10.75,10.75,0,0,0-3,.83A11.22,11.22,0,0,0,132.18,159.1Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 140.915px 166.15px;"
                                                id="elfg0nvh1czo6" class="animable"></path>
                                            <path
                                                d="M149.85,136.64c14.48,17.48,26.47,39.8,24.89,45.73C173,188.89,157.57,211.56,147,220.5c-2.79,2.36-20-20.84-17.11-23.48,5.54-5.09,17.53-19.22,19.16-21.4,1.36-1.84-4.43-15.16-8.53-30.51C137.37,133.35,142.5,127.76,149.85,136.64Z"
                                                style="fill: rgb(255, 196, 192); transform-origin: 152.222px 176.471px;"
                                                id="el02ttqi0a9mnf" class="animable"></path>
                                            <path
                                                d="M100.91,216.88a4.35,4.35,0,0,0,3.66,3.36,6.48,6.48,0,0,0-.12,4.39c1,2.48,5.27,2.07,5.27,2.07a8,8,0,0,0,.62,4.66c1.15,2.28,5.56,2.49,5.56,2.49A7,7,0,0,0,119,237.6c4,2.08,9.89-1.39,13.66-3.56S145.15,222.18,147,220.5l-13.71-24.37s-19.71,4.91-23.79,8.09C106.05,206.9,100.29,213.53,100.91,216.88Z"
                                                style="fill: rgb(255, 196, 192); transform-origin: 123.932px 217.185px;"
                                                id="elm8ya5xop3uk" class="animable"></path>
                                            <path
                                                d="M104.52,219.75c3-3.72,6.88-6.37,10.63-9.23.09-.06.19.07.1.13-3.76,2.8-6.93,6.32-10.57,9.26C104.58,220,104.44,219.85,104.52,219.75Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 109.891px 215.221px;"
                                                id="elzvd0w9w5p1" class="animable"></path>
                                            <path
                                                d="M109.62,226.34a12.82,12.82,0,0,1,2.55-2c1-.65,1.91-1.28,2.88-1.9C117,221.18,119,220,121,218.84c.08-.05.18.08.09.14q-2.9,1.85-5.72,3.82c-1,.66-1.88,1.33-2.81,2a14.63,14.63,0,0,1-2.72,1.78A.16.16,0,0,1,109.62,226.34Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 115.347px 222.725px;"
                                                id="elpy5g8uf94md" class="animable"></path>
                                            <path
                                                d="M116,233.8a8.66,8.66,0,0,1,2.39-1.7l2.68-1.65c1.79-1.12,3.57-2.23,5.31-3.41.08,0,.18.07.09.13-1.76,1.21-3.51,2.43-5.28,3.62l-2.62,1.74a8.28,8.28,0,0,1-2.51,1.36C116,233.9,116,233.83,116,233.8Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 121.253px 230.465px;"
                                                id="elyd2p0a973u" class="animable"></path>
                                            <path
                                                d="M143.15,160.9l22.46-4.24s-9.59-16.85-16.84-23.18-11.7-4.44-10.52,4.43S143.15,160.9,143.15,160.9Z"
                                                style="fill: rgb(94, 128, 183); transform-origin: 151.836px 145.325px;"
                                                id="el0jbvbe92cbla" class="animable"></path>
                                            <path
                                                d="M138.25,137.92c.05.4.11.82.18,1.24,0,.19,0,.38.08.57,1.39,8.85,4.64,21.18,4.64,21.18l6.1-1.15.61-.12,15.75-3s-4.07-7.15-8.9-13.88c-.16-.22-.32-.45-.49-.67a55.25,55.25,0,0,0-7.44-8.63C141.53,127.16,137.07,129.05,138.25,137.92Z"
                                                style="fill: rgb(94, 128, 183); transform-origin: 151.836px 145.332px;"
                                                id="elk8805nuia5" class="animable"></path>
                                            <path
                                                d="M153.62,143.65a11.16,11.16,0,0,0,3-.82l.08,0c-.16-.22-.32-.45-.49-.67A10.89,10.89,0,0,0,153.62,143.65Zm-15.19-4.49c0,.19,0,.38.08.57a13,13,0,0,0,1.68.82,11.22,11.22,0,0,0,3,.79,10.89,10.89,0,0,0-2.71-1.53A13.32,13.32,0,0,0,138.43,139.16Zm10.82,20.6.61-.12a13.55,13.55,0,0,0,.77-1.58,10.52,10.52,0,0,0,.79-3,11.16,11.16,0,0,0-1.53,2.7A12.7,12.7,0,0,0,149.25,159.76Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 147.565px 149.46px;"
                                                id="el8og821p4nes" class="animable"></path>
                                            <path
                                                d="M161.74,152c-1.54-.16-12,1.16-19.26,3.08a.09.09,0,0,0,0,.17c.82-.11,17.79-2.48,19.28-3C161.91,152.23,161.85,152.05,161.74,152Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 152.135px 153.618px;"
                                                id="elw58e888m0x8" class="animable"></path>
                                            <path
                                                d="M139.09,147.58c0-.07.08-.09.11,0a20.66,20.66,0,0,1,.94,2.23c.07.17.13.35.19.52-.3-1.9-.57-3.81-.84-5.71,0-.09.13-.11.14,0,1.21,6.52,2.29,9.65,3.66,16.13l2-.22a.12.12,0,1,1,0,.23l-2.17.52a.28.28,0,0,1-.28-.15c-1.52-4.07-1.58-5.12-2.3-9.42-.26-.59-.52-1.18-.75-1.78A16.45,16.45,0,0,1,139.09,147.58Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 142.267px 152.913px;"
                                                id="elpujnai6sduq" class="animable"></path>
                                            <path
                                                d="M129.43,138.81c3.45,1.21,10.1-3.55,13-7.68.2-.29.08-3.5.11-7.42,0-2.37.12-5,.37-7.42.06-.5-15.48,2.06-15.48,2.06a38.88,38.88,0,0,1,.47,9.4,5,5,0,0,1-.21,1,1.57,1.57,0,0,0,0,.16C127.11,130.73,126.1,137.63,129.43,138.81Z"
                                                style="fill: rgb(255, 196, 192); transform-origin: 134.995px 127.613px;"
                                                id="elpsal3b4d9vs" class="animable"></path>
                                            <path
                                                d="M141.94,116.25c-1.13,4-4.71,13.56-12.78,12.89a9.35,9.35,0,0,1-1.54-.25.34.34,0,0,1,0-.16,7.06,7.06,0,0,0,.21-1,38.59,38.59,0,0,0-.48-9.4S138.6,116.5,141.94,116.25Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 134.645px 122.712px;"
                                                id="el94btrzgiag" class="animable"></path>
                                            <path
                                                d="M147,109.88a27.28,27.28,0,0,0,0,5c.28,1.29,3.11,2.72,3.11,2.72s-3.31,1-4.23.8-2.34-2.69-2.34-2.69,1.25,3.86,2.57,4.11c.82.15-2,.08-2,.08a3.84,3.84,0,0,1-2.45-1.24C140.71,117.5,147,109.88,147,109.88Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 145.836px 114.898px;"
                                                id="el2ueiv3o5amd" class="animable"></path>
                                            <path
                                                d="M145.54,97.27c1.64,5.39-1.2,20.94-5,24.41-5.55,5-14.63,5.5-18.91-1.17-4.14-6.46-.07-26.67,4.2-29.82C132.1,86.05,143.11,89.32,145.54,97.27Z"
                                                style="fill: rgb(255, 196, 192); transform-origin: 132.959px 107.017px;"
                                                id="ely213njnf14g" class="animable"></path>
                                            <path
                                                d="M130.32,106.77s.07.07.06.11c-.26,1-.39,2.26.48,2.81,0,0,0,.07,0,.06C129.73,109.34,129.9,107.71,130.32,106.77Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 130.43px 108.26px;"
                                                id="eloiwufncf3d" class="animable"></path>
                                            <path
                                                d="M131.48,105.89c1.7.24,1.1,3.62-.47,3.4S130.05,105.69,131.48,105.89Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 131.294px 107.591px;"
                                                id="el139j9kumgz2" class="animable"></path>
                                            <path
                                                d="M124.44,105.77s-.09,0-.1.08c-.15,1.05-.5,2.24-1.51,2.42,0,0,0,.06,0,.06C124,108.37,124.47,106.79,124.44,105.77Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 123.636px 107.05px;"
                                                id="ely12es8bg1b" class="animable"></path>
                                            <path
                                                d="M123.7,104.51c-1.67-.42-2.4,2.93-.85,3.33S125.09,104.87,123.7,104.51Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 123.224px 106.173px;"
                                                id="elahrmxvq338f" class="animable"></path>
                                            <path
                                                d="M133.07,104c-.44-.2-.81-.45-1.23-.69a2.3,2.3,0,0,1-1.12-.94.73.73,0,0,1,.26-.85,1.81,1.81,0,0,1,1.82.12,2.65,2.65,0,0,1,1.31,1.39A.78.78,0,0,1,133.07,104Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 132.413px 102.695px;"
                                                id="elebe04ryseo6" class="animable"></path>
                                            <path
                                                d="M122.41,102.54c.48,0,.93,0,1.41,0a2.29,2.29,0,0,0,1.44-.28.72.72,0,0,0,.18-.87,1.8,1.8,0,0,0-1.65-.78,2.65,2.65,0,0,0-1.82.58A.78.78,0,0,0,122.41,102.54Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 123.616px 101.582px;"
                                                id="elsomr7fds4fm" class="animable"></path>
                                            <path
                                                d="M130.76,116.53c-.21.29-.4.67-.77.77a2.78,2.78,0,0,1-1.18-.07,0,0,0,0,0,0,.07,1.44,1.44,0,0,0,1.43.33,1.14,1.14,0,0,0,.66-1.07A.06.06,0,0,0,130.76,116.53Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 129.856px 117.086px;"
                                                id="elov5u3w07acm" class="animable"></path>
                                            <path
                                                d="M129.8,113.49a3.6,3.6,0,0,1-2.66,1.17,4.38,4.38,0,0,1-1.3-.17,1,1,0,0,1-.24-.07l-.22-.07a.28.28,0,0,1-.17-.28h0a.45.45,0,0,1,0-.11h0l0-.09c.12-.81.41-2,.41-2-.32.09-1.94.5-1.84.09a54.36,54.36,0,0,1,3.29-10.57c0-.11.22,0,.19.07-.67,3.35-1.91,6.56-2.63,9.92a6.42,6.42,0,0,1,1.78-.22c.1.06-.62,2.34-.64,2.71v0a5,5,0,0,0,3.9-.5C129.81,113.34,129.88,113.42,129.8,113.49Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 126.805px 108.002px;"
                                                id="elmpg827kz9ul" class="animable"></path>
                                            <path
                                                d="M144.65,111c-2.79-.83-4.08-10.22-4.08-10.22l-.6,5.14a12.46,12.46,0,0,1-3.11-4.09,9.13,9.13,0,0,1-.16-5.1s-3.13,3.21-6.72,4.1c-1.32.33-10.11-.84-10.1-1.44,0-1.79,3-7.15,5.5-8.78A12.64,12.64,0,0,1,138,89.24c5.75,2.29,7.21,6,8,8.92S145.67,111.3,144.65,111Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 133.073px 99.5793px;"
                                                id="elbefes99xhko" class="animable"></path>
                                            <path
                                                d="M142.22,110s3.61-5,5.87-3.66-.53,8.53-3.23,9.48a2.73,2.73,0,0,1-3.62-1.54Z"
                                                style="fill: rgb(255, 196, 192); transform-origin: 145.08px 111.075px;"
                                                id="el5yrfakpgi2x" class="animable"></path>
                                            <path
                                                d="M147.24,108.34s0,.06,0,.08c-1.89.72-2.91,2.44-3.64,4.23a1.5,1.5,0,0,1,2.26-.36s0,.11-.06.1a1.67,1.67,0,0,0-1.85.54,8.33,8.33,0,0,0-.92,1.48c-.09.16-.39.07-.32-.12l0-.05C142.74,111.85,144.66,108.53,147.24,108.34Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 144.97px 111.416px;"
                                                id="elblt2r5dcy9v" class="animable"></path>
                                            <path
                                                d="M130.64,88.17a22.25,22.25,0,0,1,6.24-1.74c2.41-.27,10,.45,11.78,2s2.16,8.71,2.19,9.76-.54,7.36-2.86,8.84-2.35-9.25-5.91-12.88S130.64,88.17,130.64,88.17Z"
                                                style="fill: rgb(94, 128, 183); transform-origin: 140.746px 96.7718px;"
                                                id="eltys985gwxh" class="animable"></path>
                                            <g id="eleh5hrcgwey">
                                                <path
                                                    d="M130.64,88.18s7.89,2.35,11.44,6,3.6,14.36,5.91,12.87c1-.65,1.53-1.64,2-3.31-.42-3.15-1.61-8-4.17-11.46-2.4-3.2-6.58-4.87-11.09-5.45A24.41,24.41,0,0,0,130.64,88.18Z"
                                                    style="opacity: 0.1; transform-origin: 140.315px 97.0106px;"
                                                    class="animable"></path>
                                            </g>
                                            <path
                                                d="M147.26,113.4c-.16-2.87-2.94-10.58-5.92-15s-11.91-7.16-13.16-7.11c-3.05.12-4.1,1-4.58.75s2.7-2.52,3.57-3,3.19-1.67,4.51-1.61,9.48,1,12.38,4.53,6.95,13.36,6.14,15.85c-.2.59-1,1-1.27,1.81-.35,1.11-.61,2.4-1,3.17S147.27,113.65,147.26,113.4Z"
                                                style="fill: rgb(94, 128, 183); transform-origin: 136.928px 100.476px;"
                                                id="elxxo77dtchkp" class="animable"></path>
                                            <path
                                                d="M140.67,96.4a15.82,15.82,0,0,0,2-1.42,10.73,10.73,0,0,0,1.72-1.78s.12,0,.08,0a8.21,8.21,0,0,1-1.57,2,6.94,6.94,0,0,1-2.17,1.29C140.65,96.58,140.6,96.44,140.67,96.4Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 142.557px 94.8598px;"
                                                id="elqq3srpb4heg" class="animable"></path>
                                            <path
                                                d="M147.33,110.54c.09-.21.23-.39.33-.58a4.37,4.37,0,0,0,.28-.71,6.63,6.63,0,0,1,.34-1.38,5.83,5.83,0,0,1,.69-.94,1.94,1.94,0,0,0,.59-1.15,0,0,0,1,1,.09,0,4.71,4.71,0,0,1-1,2.19,8.32,8.32,0,0,0-.41,1.48,2.31,2.31,0,0,1-.78,1.19C147.4,110.67,147.3,110.61,147.33,110.54Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 148.487px 108.214px;"
                                                id="elhtzmgb5rm6f" class="animable"></path>
                                            <path
                                                d="M146.4,107.43a12.57,12.57,0,0,0,.82-1,8,8,0,0,0,.63-1.06c.19-.36.35-.73.52-1.1s.48-.83.67-1.27c0-.06.11,0,.09,0-.2.46-.32,1-.5,1.41a9.59,9.59,0,0,1-.57,1.16,7,7,0,0,1-.69,1,3.13,3.13,0,0,1-.94.8S146.38,107.45,146.4,107.43Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 147.764px 105.203px;"
                                                id="el9fgmpcmlh6k" class="animable"></path>
                                            <path
                                                d="M145.41,104.61a8.14,8.14,0,0,0,1.58-1.73c.43-.64.82-1.3,1.2-2,0,0,.11,0,.09,0a10.16,10.16,0,0,1-1,2.16,5.28,5.28,0,0,1-.75.89,5.08,5.08,0,0,1-1,.69C145.42,104.72,145.36,104.65,145.41,104.61Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 146.837px 102.776px;"
                                                id="elj6qrtksgkki" class="animable"></path>
                                            <path
                                                d="M144.32,101.92a2.93,2.93,0,0,0,.77-.76c.25-.31.5-.64.73-1l.69-.94a2.78,2.78,0,0,0,.53-1s.1,0,.09,0a2.87,2.87,0,0,1-.34,1.11,7.79,7.79,0,0,1-.67,1.11,9.46,9.46,0,0,1-.82,1,1.83,1.83,0,0,1-.93.62C144.3,102.05,144.25,102,144.32,101.92Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 145.708px 100.14px;"
                                                id="eloekx4l3fxxb" class="animable"></path>
                                            <path
                                                d="M143.56,98.51c.27-.26.53-.52.78-.79s.49-.57.72-.86.49-.6.71-.92a0,0,0,0,1,.08,0,7.3,7.3,0,0,1-.55,1,8.8,8.8,0,0,1-.7.91,10.19,10.19,0,0,1-.8.81,3.14,3.14,0,0,1-.94.64.07.07,0,0,1-.08-.1A5.16,5.16,0,0,1,143.56,98.51Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 144.311px 97.6212px;"
                                                id="el3wnj8v15r1d" class="animable"></path>
                                            <path
                                                d="M138.51,94.73c.29-.34.57-.68.89-1a11.16,11.16,0,0,1,1-.91,11.88,11.88,0,0,1,2.25-1.46s.1,0,0,.07c-1.37,1.14-2.79,2.22-4.15,3.37A0,0,0,0,1,138.51,94.73Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 140.597px 93.08px;"
                                                id="elr7ry26aeno" class="animable"></path>
                                            <path
                                                d="M136.82,92.25a5.67,5.67,0,0,1,1-.9A12.74,12.74,0,0,1,140.28,90a0,0,0,1,1,.05.08c-.75.48-1.51,1-2.23,1.47-.36.26-.71.53-1,.82s-.58.66-.89,1a0,0,0,0,1-.06,0A3.49,3.49,0,0,1,136.82,92.25Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 138.24px 91.685px;"
                                                id="elvrujuc4b6i" class="animable"></path>
                                            <path
                                                d="M134.46,91.09a6,6,0,0,1,.91-.9A7.09,7.09,0,0,1,137.48,89c.05,0,.08.06,0,.08a14,14,0,0,0-2,1.4c-.31.26-.61.54-.91.81a12,12,0,0,1-.89.86s-.05,0,0,0A6.41,6.41,0,0,1,134.46,91.09Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 135.594px 90.575px;"
                                                id="elx7ax62fsh79" class="animable"></path>
                                            <path
                                                d="M132.76,89.64c.3-.24.62-.47.94-.69a3.72,3.72,0,0,1,1-.54c.06,0,.08.06,0,.09-.6.45-1.18.92-1.77,1.39a9.63,9.63,0,0,0-1.36,1.56s-.06,0-.05,0A3.59,3.59,0,0,1,132.76,89.64Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 133.136px 89.93px;"
                                                id="elc8ibdia270g" class="animable"></path>
                                            <path
                                                d="M130.62,89.14A5.92,5.92,0,0,1,132.55,88s.08.07,0,.09a7.1,7.1,0,0,0-1.75,1.28,9.33,9.33,0,0,0-1.4,1.67s-.08,0-.06,0A4.86,4.86,0,0,1,130.62,89.14Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 130.961px 89.52px;"
                                                id="ellv0mtxeonh" class="animable"></path>
                                            <path
                                                d="M127.78,90.37a2.73,2.73,0,0,1,.26-.43,4.74,4.74,0,0,1,.65-.77A10.27,10.27,0,0,1,130.33,88s.1,0,0,.08a8.55,8.55,0,0,0-1.54,1.26,7.36,7.36,0,0,0-.63.75l-.26.4a3.38,3.38,0,0,1-.24.41s-.09,0-.08,0A1.21,1.21,0,0,1,127.78,90.37Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 128.977px 89.45px;"
                                                id="elcctbeiiafau" class="animable"></path>
                                            <path
                                                d="M126.06,90.5a6.67,6.67,0,0,1,.53-.64,8.09,8.09,0,0,1,.61-.56c.22-.18.45-.35.66-.53,0,0,.11,0,0,.07a4.85,4.85,0,0,0-.61.59l-.55.59-.54.59a8,8,0,0,1-.55.61,0,0,0,0,1-.06,0A3.53,3.53,0,0,1,126.06,90.5Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 126.729px 89.995px;"
                                                id="elgdp96uzfjja" class="animable"></path>
                                            <path
                                                d="M125.6,132.42c0,2.55-.17,6.9,2,8.16a6.37,6.37,0,0,0,4,.63,16.61,16.61,0,0,0,7.95-3.38c.67-.5,1.33-1,2-1.57a19.16,19.16,0,0,0,1.82-1.67s.09,0,.06.07c-.55.59-1.07,1.2-1.62,1.79a17.15,17.15,0,0,1-1.71,1.6,17.65,17.65,0,0,1-3.92,2.51,14.4,14.4,0,0,1-4.38,1.23,6.49,6.49,0,0,1-4.3-.72c-2.85-1.9-2.09-7.09-1.91-8.63C125.53,132.38,125.6,132.36,125.6,132.42Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 134.4px 137.137px;"
                                                id="ele4flg3rk0a" class="animable"></path>
                                        </g>
                                        <g id="freepik--speech-bubble--inject-129" class="animable animator-active"
                                            style="transform-origin: 87.2462px 71.2683px;">
                                            <path
                                                d="M59.7,73.89a25.05,25.05,0,0,0,41.87,15.85l12.54,1.84-6.27-10.84A25.07,25.07,0,1,0,59.7,73.89Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 86.8358px 71.2696px;"
                                                id="elngwyzao0yes" class="animable"></path>
                                            <path
                                                d="M67.2,53.19a25.6,25.6,0,0,1,9.67-5.92,25.47,25.47,0,0,1,22,3,25.62,25.62,0,0,1,7.85,8.36,25.33,25.33,0,0,1,1.55,22.34l0-.43,6.23,10.86.46.8-.9-.14L101.52,90.1l.3-.09a25.35,25.35,0,0,1-12.4,6.12,22.56,22.56,0,0,1-3.47.36,23.79,23.79,0,0,1-3.48-.07,24.46,24.46,0,0,1-6.75-1.61,24.73,24.73,0,0,1-6-3.36A28.15,28.15,0,0,1,67,89.21a27,27,0,0,1-2.27-2.62,25.2,25.2,0,0,1,2.44-33.4ZM64.83,86.54a22.71,22.71,0,0,0,4.93,4.79,23.08,23.08,0,0,0,6,3.26,24.89,24.89,0,0,0,6.7,1.48,24.54,24.54,0,0,0,3.43,0,21.62,21.62,0,0,0,3.4-.41,24.8,24.8,0,0,0,12-6.18l.12-.12.17,0,12.55,1.76-.44.66L107.42,81l-.12-.21.09-.22A24.75,24.75,0,0,0,106,59a25.7,25.7,0,0,0-7.5-8.17,24.41,24.41,0,0,0-10.35-4.09A25.08,25.08,0,0,0,77,47.6,24.78,24.78,0,0,0,64.83,86.54Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 87.2462px 71.2683px;"
                                                id="elxca1x3mrpyk" class="animable"></path>
                                            <circle cx="84.15" cy="71.31" r="13.78"
                                                style="fill: rgb(94, 128, 183); transform-origin: 84.15px 71.31px;"
                                                id="el4ba1uc5ejc9" class="animable"></circle>
                                            <rect x="82.87" y="64.17" width="2.56" height="14.28"
                                                style="fill: rgb(255, 255, 255); transform-origin: 84.15px 71.31px;"
                                                id="elknlsfas5d8p" class="animable"></rect>
                                            <g id="elym2w4k5u30n">
                                                <rect x="82.87" y="64.17" width="2.56"
                                                    height="14.28"
                                                    style="fill: rgb(255, 255, 255); transform-origin: 84.15px 71.31px; transform: rotate(-90deg);"
                                                    class="animable"></rect>
                                            </g>
                                        </g>
                                        <defs>
                                            <filter id="active" height="200%">
                                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate"
                                                    radius="2"></feMorphology>
                                                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK">
                                                </feFlood>
                                                <feComposite in="PINK" in2="DILATED" operator="in"
                                                    result="OUTLINE"></feComposite>
                                                <feMerge>
                                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                                </feMerge>
                                            </filter>
                                            <filter id="hover" height="200%">
                                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate"
                                                    radius="2"></feMorphology>
                                                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK">
                                                </feFlood>
                                                <feComposite in="PINK" in2="DILATED" operator="in"
                                                    result="OUTLINE"></feComposite>
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
                                <div class="text-center">
                                    <h5>¡ Debes de seleccionar una</h5>
                                    <h4>Planta !</h4>
                                </div>
                            </div>
                        @else
                            <div class="text-center">
                                <h6><strong>Áreas</strong></h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Total, de resultados
                                    <span class="badge text-white"
                                        style="background-color: #444444; border-radius:50%;">{{ $numero_areas }}</span>
                                </p>
                            </div>

                            <div class="row">
                                @foreach ($a_areas as $area)
                                    <div class="col-md-4">
                                        <div class="card my-3">
                                            <img class="card-img-top" src="img/presentacion4.png">
                                            <div class="position-relative"
                                                style="height: 50px;overflow: hidden;margin-top: -50px;z-index:2;position: relative;">
                                                <div class="position-absolute w-100 top-0" style="z-index: 1;">
                                                    <svg class="waves waves-sm" xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        viewBox="0 24 150 40" preserveAspectRatio="none"
                                                        shape-rendering="auto">
                                                        <defs>
                                                            <path id="card-wave"
                                                                d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                                                            </path>
                                                        </defs>
                                                        <g class="moving-waves">
                                                            <use xlink:href="#card-wave" x="48"
                                                                y="-1" fill="rgba(255,255,255,0.30"></use>
                                                            <use xlink:href="#card-wave" x="48"
                                                                y="3" fill="rgba(255,255,255,0.35)"></use>
                                                            <use xlink:href="#card-wave" x="48"
                                                                y="5" fill="rgba(255,255,255,0.25)"></use>
                                                            <use xlink:href="#card-wave" x="48"
                                                                y="8" fill="rgba(255,255,255,0.20)"></use>
                                                            <use xlink:href="#card-wave" x="48"
                                                                y="13" fill="rgba(255,255,255,0.15)"></use>
                                                            <use xlink:href="#card-wave" x="48"
                                                                y="16" fill="rgba(255,255,255,0.99)"></use>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>

                                            <div class="card-body pt-2">
                                                <a class="card-title h6 text-sm d-block text-darker">
                                                    Información:
                                                </a>
                                                <span
                                                    class="text-gradient text-primary text-uppercase text-sm font-weight-bold my-2">Área:
                                                    {{ $area->nombre }}</span>
                                                <div class="author align-items-center">
                                                    <img src="img/ubicacion.png" alt="..."
                                                        class="shadow w-40">
                                                    <div class="name ps-3">
                                                        <span>Planta:</span>
                                                        <div class="stats">
                                                            <small> {{ $area->plantas->nombre }}</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button type="button" wire:click="AddArea({{ $area->id }})"
                                                    class="btn btn-sm bg-gradient-dark w-100 border-radius-md mt-4 mb-2"
                                                    data-bs-toggle="modal" data-bs-target="#AddCalidadAgua">
                                                    Calidad Agua
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            @else
                <!--  Contenido de Maquinas  -->
                <div class="col-lg-8 col-md-6 mt-0 mb-0">
                    <div class="card-body">
                        @if ($numero_maquinas == 0 || $numero_lineas == 0)
                            <div class="card h-100">
                                <div class="mt-3 text-center">
                                    <p class="text-secondary font-weight-bold text-xs mt-0 mb-0">Total, de
                                        resultados <span class="badge text-white"
                                            style="background-color: #444444; border-radius:50%;">
                                            0</span>
                                    </p>
                                </div>
                                <center>
                                    <svg class="animated w-55" id="freepik_stories-update"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns:svgjs="http://svgjs.com/svgjs">
                                        <style>
                                            svg#freepik_stories-update:not(.animated) .animable {
                                                opacity: 0;
                                            }

                                            svg#freepik_stories-update.animated #freepik--background-complete--inject-318 {
                                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideUp, 1.5s Infinite linear floating;
                                                animation-delay: 0s, 1s;
                                            }

                                            svg#freepik_stories-update.animated #freepik--Screen--inject-318 {
                                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut, 1.5s Infinite linear wind;
                                                animation-delay: 0s, 1s;
                                            }

                                            svg#freepik_stories-update.animated #freepik--Character--inject-318 {
                                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft;
                                                animation-delay: 0s;
                                            }

                                            svg#freepik_stories-update.animated #freepik--Plant--inject-318 {
                                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomIn;
                                                animation-delay: 0s;
                                            }

                                            svg#freepik_stories-update.animated #freepik--Floor--inject-318 {
                                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedLeft;
                                                animation-delay: 0s;
                                            }

                                            @keyframes slideUp {
                                                0% {
                                                    opacity: 0;
                                                    transform: translateY(30px);
                                                }

                                                100% {
                                                    opacity: 1;
                                                    transform: inherit;
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

                                            @keyframes wind {
                                                0% {
                                                    transform: rotate(0deg);
                                                }

                                                25% {
                                                    transform: rotate(1deg);
                                                }

                                                75% {
                                                    transform: rotate(-1deg);
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

                                            @keyframes zoomIn {
                                                0% {
                                                    opacity: 0;
                                                    transform: scale(0.5);
                                                }

                                                100% {
                                                    opacity: 1;
                                                    transform: scale(1);
                                                }
                                            }

                                            @keyframes lightSpeedLeft {
                                                from {
                                                    transform: translate3d(-50%, 0, 0) skewX(20deg);
                                                    opacity: 0;
                                                }

                                                60% {
                                                    transform: skewX(-10deg);
                                                    opacity: 1;
                                                }

                                                80% {
                                                    transform: skewX(2deg);
                                                }

                                                to {
                                                    opacity: 1;
                                                    transform: translate3d(0, 0, 0);
                                                }
                                            }

                                            .animator-hidden {
                                                display: none;
                                            }
                                        </style>
                                        <g id="freepik--background-complete--inject-318" class="animable"
                                            style="transform-origin: 247.013px 159.788px;">
                                            <path
                                                d="M413.22,247.35a9.44,9.44,0,1,1-9.44-9.44A9.44,9.44,0,0,1,413.22,247.35Z"
                                                style="fill: rgb(235, 235, 235); transform-origin: 403.78px 247.35px;"
                                                id="elchflb4rux8" class="animable"></path>
                                            <g id="el9e9u9yn3at9">
                                                <circle cx="375.75" cy="247.35" r="10.06"
                                                    style="fill: rgb(235, 235, 235); transform-origin: 375.75px 247.35px; transform: rotate(-45deg);"
                                                    class="animable"></circle>
                                            </g>
                                            <circle cx="354.21" cy="229.56" r="10.67"
                                                style="fill: rgb(235, 235, 235); transform-origin: 354.21px 229.56px;"
                                                id="elho3qai34ajk" class="animable"></circle>
                                            <g id="el0qxg7iawmwjk">
                                                <circle cx="349.84" cy="202.21" r="11.15"
                                                    style="fill: rgb(235, 235, 235); transform-origin: 349.84px 202.21px; transform: rotate(-79.82deg);"
                                                    class="animable"></circle>
                                            </g>
                                            <circle cx="363.49" cy="178.27" r="11.52"
                                                style="fill: rgb(235, 235, 235); transform-origin: 363.49px 178.27px;"
                                                id="eli0qzouoh0pc" class="animable"></circle>
                                            <g id="eleo2uw6lnuaa">
                                                <circle cx="389.72" cy="168.81" r="12.56"
                                                    style="fill: rgb(235, 235, 235); transform-origin: 389.72px 168.81px; transform: rotate(-22.68deg);"
                                                    class="animable"></circle>
                                            </g>
                                            <g id="elbg6e8i9ap68">
                                                <circle cx="424.61" cy="229.34" r="9.12"
                                                    style="fill: rgb(235, 235, 235); transform-origin: 424.61px 229.34px; transform: rotate(-76.77deg);"
                                                    class="animable"></circle>
                                            </g>
                                            <g id="elgm7uozo5z8v">
                                                <circle cx="429.48" cy="201.91" r="8.46"
                                                    style="fill: rgb(235, 235, 235); transform-origin: 429.48px 201.91px; transform: rotate(-20.96deg);"
                                                    class="animable"></circle>
                                            </g>
                                            <g id="ely8ufng6f6n">
                                                <circle cx="415.41" cy="177.95" r="7.73"
                                                    style="fill: rgb(235, 235, 235); transform-origin: 415.41px 177.95px; transform: rotate(-80.8deg);"
                                                    class="animable"></circle>
                                            </g>
                                            <path
                                                d="M142.26,132.53a38.14,38.14,0,0,1,5.84,8.19l9.32,0,3.47,15-8.4,4.05a38,38,0,0,1-1.66,9.92l6.62,6.57-8.19,13.08-8.8-3.07a37.27,37.27,0,0,1-8.19,5.83l0,9.33-15,3.46-4-8.4a37.33,37.33,0,0,1-9.92-1.66l-6.56,6.62-13.08-8.18,3.07-8.8a38.14,38.14,0,0,1-5.84-8.19l-9.32,0-3.47-15,8.4-4.05a38.08,38.08,0,0,1,1.66-9.92l-6.61-6.57,8.18-13.08,8.8,3.07a37.85,37.85,0,0,1,8.19-5.83l0-9.33,15-3.46,4,8.4a37.67,37.67,0,0,1,9.92,1.66l6.56-6.62,13.09,8.18-3.08,8.8Zm-18.4,12.31a16.55,16.55,0,1,0,5.26,22.81A16.54,16.54,0,0,0,123.86,144.84Z"
                                                style="fill: rgb(224, 224, 224); fill-rule: evenodd; transform-origin: 114.52px 158.5px;"
                                                id="el2s49nw3yk6h" class="animable"></path>
                                            <path
                                                d="M151.35,69.3a21.33,21.33,0,0,1,3.23,4.54l5.16,0,1.92,8.32L157,84.38a20.83,20.83,0,0,1-.92,5.5l3.66,3.63-4.53,7.24-4.87-1.7a21,21,0,0,1-4.54,3.23l0,5.17-8.32,1.91-2.24-4.65a20.76,20.76,0,0,1-5.49-.92l-3.64,3.67-7.24-4.53,1.7-4.87a21,21,0,0,1-3.23-4.54l-5.16,0-1.92-8.32L114.94,83a20.83,20.83,0,0,1,.92-5.49l-3.66-3.63,4.52-7.25,4.88,1.71a20.69,20.69,0,0,1,4.53-3.23l0-5.17L134.43,58l2.25,4.66a21.16,21.16,0,0,1,5.49.91l3.64-3.66,7.24,4.53-1.7,4.87Zm-10.19,6.82a9.16,9.16,0,1,0,2.91,12.62A9.16,9.16,0,0,0,141.16,76.12Z"
                                                style="fill: rgb(224, 224, 224); fill-rule: evenodd; transform-origin: 135.96px 83.68px;"
                                                id="elm99cblm3lrp" class="animable"></path>
                                            <path
                                                d="M87.18,79.17a16.73,16.73,0,0,1,2.62,3.67l4.18,0,1.56,6.75-3.77,1.82A16.66,16.66,0,0,1,91,95.84l3,2.94-3.67,5.87-3.94-1.38a17,17,0,0,1-3.68,2.62l0,4.18L76,111.63l-1.81-3.77a17.14,17.14,0,0,1-4.46-.75l-2.94,3-5.87-3.67,1.38-4a16.73,16.73,0,0,1-2.62-3.67l-4.18,0-1.56-6.75,3.77-1.82a17.14,17.14,0,0,1,.75-4.45l-3-2.94L59.13,77l3.95,1.38a16.73,16.73,0,0,1,3.67-2.62V71.56L73.48,70l1.82,3.77a17.07,17.07,0,0,1,4.45.75l2.94-3,5.87,3.67-1.38,4Zm-8.25,5.52a7.42,7.42,0,1,0,2.36,10.23A7.41,7.41,0,0,0,78.93,84.69Z"
                                                style="fill: none; transform-origin: 74.74px 90.815px;"
                                                id="eljzca311ilve" class="animable"></path>
                                            <path
                                                d="M78.93,84.69s.15.06.42.23a6,6,0,0,1,1.06.86,7.52,7.52,0,0,1,1.67,8A7.61,7.61,0,0,1,79.7,97a7.69,7.69,0,0,1-4.14,1.62,7.58,7.58,0,0,1-7.67-4.8,7,7,0,0,1-.52-2.23,7.31,7.31,0,0,1,.16-2.2,7.66,7.66,0,0,1,1.86-3.56,7.55,7.55,0,0,1,2.92-1.93,7.41,7.41,0,0,1,5,0,5.68,5.68,0,0,1,1.24.57c.26.17.4.26.39.28s-.57-.33-1.69-.68a7.38,7.38,0,0,0-4.81.19A7.27,7.27,0,0,0,68,89.47a7.17,7.17,0,0,0,.37,4.17,7.24,7.24,0,0,0,2.86,3.44,7.32,7.32,0,0,0,4.35,1.07,6.77,6.77,0,0,0,2.1-.48,6.51,6.51,0,0,0,1.8-1,7.21,7.21,0,0,0,2.78-6.33,7.38,7.38,0,0,0-1.93-4.41C79.48,85.06,78.9,84.73,78.93,84.69Z"
                                                style="fill: rgb(224, 224, 224); transform-origin: 74.9663px 91.055px;"
                                                id="ely9d90z9xtml" class="animable"></path>
                                            <path
                                                d="M87.18,79.17s0-.09.07-.25.14-.44.25-.76l1-3,0,.09-5.89-3.63.15,0-2.93,3-.06.06-.08,0a16.68,16.68,0,0,0-4.42-.72H75.2l0-.08-1.83-3.76.19.09-6.74,1.57.14-.18c0,1.29,0,2.72,0,4.18v.12l-.11,0a16.88,16.88,0,0,0-3.62,2.6l-.09.08-.12,0-3.95-1.37.25-.09L55.65,83l0-.27,3,3,.1.09,0,.13a17,17,0,0,0-.73,4.39v.14l-.13.06L54,92.27l.13-.26c.49,2.13,1,4.42,1.56,6.74l-.23-.18,4.18,0h.14l.07.13a16.58,16.58,0,0,0,2.58,3.62h0c0,.11,0-.23.05.24h0v0l0,.06,0,.13-.09.25-.17.49-.35,1-.69,2-.09-.28,5.86,3.67-.29,0,3-3,.1-.1.13,0a16.61,16.61,0,0,0,4.39.74h.14l.06.12c.61,1.27,1.22,2.53,1.81,3.77l-.25-.12,6.75-1.55-.17.21c0-1.42,0-2.81,0-4.18v-.13l.11-.06a16.72,16.72,0,0,0,3.64-2.58l.09-.08.11,0,4,1.38-.23.09c1.29-2.07,2.52-4,3.68-5.86l0,.22-3-3-.08-.08,0-.09a16.58,16.58,0,0,0,.75-4.41v-.09l.08,0,3.78-1.81-.08.16c-.59-2.61-1.09-4.84-1.52-6.75l.1.08H89.75l0,0A17.73,17.73,0,0,0,87.89,80c-.23-.27-.4-.49-.53-.65a2.46,2.46,0,0,1-.18-.21s.08.06.21.19.32.34.56.62a16.84,16.84,0,0,1,1.92,2.83l-.07,0,4.18,0h.09l0,.08c.44,1.91,1,4.13,1.58,6.74l0,.11-.1,0-3.76,1.84.08-.14a17.22,17.22,0,0,1-.73,4.5l0-.17,3,2.93.1.11-.07.12-3.66,5.87-.08.14-.15-.06-4-1.37.2,0a17,17,0,0,1-3.71,2.65l.11-.18c0,1.37,0,2.76,0,4.18v.17l-.17,0L76,111.84l-.17,0-.08-.17c-.6-1.23-1.2-2.49-1.82-3.76l.2.13a17.11,17.11,0,0,1-4.51-.76l.23,0-2.94,3-.14.13-.15-.1-5.87-3.67-.16-.1.06-.18.69-2,.34-1,.18-.5.08-.25,0-.12,0-.06v0h0c.1.47,0,.13.05.23h0a16.59,16.59,0,0,1-2.65-3.72l.2.12-4.18,0h-.19l0-.18c-.53-2.32-1.06-4.61-1.55-6.75l0-.18.16-.08L57.58,90l-.12.2a17.44,17.44,0,0,1,.75-4.51l.06.22-3-3-.13-.12.09-.15L59,76.87l.09-.14.16,0,3.94,1.39-.2,0a17.28,17.28,0,0,1,3.72-2.64l-.1.17c0-1.46,0-2.89,0-4.18v-.15l.14,0,6.75-1.54.13,0,.06.12c.63,1.33,1.24,2.6,1.81,3.77l-.14-.08a17.13,17.13,0,0,1,4.49.77l-.14,0,3-3,.07-.07.08,0,5.84,3.7.05,0,0,0-1.06,2.92c-.12.31-.21.56-.28.75S87.19,79.16,87.18,79.17Z"
                                                style="fill: rgb(224, 224, 224); transform-origin: 74.635px 90.81px;"
                                                id="el9e9mi5vwv" class="animable"></path>
                                        </g>
                                        <g id="freepik--Screen--inject-318" class="animable animator-active"
                                            style="transform-origin: 249.948px 249.997px;">
                                            <path
                                                d="M326.56,41.68l-29.4-.14A7.31,7.31,0,0,0,290,49l0,5.33a7.3,7.3,0,0,1-7.17,7.43l-57.31-.26a7.31,7.31,0,0,1-7.11-7.5l0-5.33a7.31,7.31,0,0,0-7.11-7.5l-10.34,0L175.22,41A23.13,23.13,0,0,0,152,64l-1.57,371.08a23.14,23.14,0,0,0,23,23.24l151.34.69A23.13,23.13,0,0,0,348,436l1.57-371.08A23.12,23.12,0,0,0,326.56,41.68Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 250px 250.005px;"
                                                id="eli5q0iqe0g4c" class="animable"></path>
                                            <path
                                                d="M326.56,41.68s.27,0,.79,0a16.54,16.54,0,0,1,2.35.19,21.7,21.7,0,0,1,8.66,3,22.12,22.12,0,0,1,5.25,4.29A23.16,23.16,0,0,1,348,56.16a24.06,24.06,0,0,1,1.69,9.39c0,3.41,0,7,0,10.9-.11,30.83-.27,75.43-.47,130.53s-.47,120.73-.76,193.6q-.06,13.67-.11,27.65c0,2.34,0,4.67,0,7a25.07,25.07,0,0,1-.91,7,23.43,23.43,0,0,1-3,6.49,25.06,25.06,0,0,1-4.82,5.31,23.36,23.36,0,0,1-13.35,5.12c-1.22.08-2.42.06-3.63.05H319l-7.28,0-29.46-.14-60.47-.27-30.93-.14-15.62-.08a24.31,24.31,0,0,1-15-4.21,23.59,23.59,0,0,1-9.09-12.66,25,25,0,0,1-.93-7.82l0-7.8q.06-15.57.13-30.93.13-30.72.26-60.49c.17-39.65.34-77.9.5-114.34s.32-71.06.46-103.46q.11-24.3.21-46.89,0-2.82,0-5.61c0-.93.09-1.87.14-2.8s.24-1.86.48-2.75A23.28,23.28,0,0,1,165.89,42.7a24,24,0,0,1,10.27-1.9l20.17.1L206,41l4.75,0a7.36,7.36,0,0,1,4.53,1.29,7.61,7.61,0,0,1,2.8,3.7,12.44,12.44,0,0,1,.44,4.56c0,.75,0,1.5,0,2.25a16.12,16.12,0,0,0,.07,2.21,7.36,7.36,0,0,0,1.72,3.9,6.78,6.78,0,0,0,3.55,2.22,7.66,7.66,0,0,0,2.09.22h2.13l8.35,0,30.51.17,13.45.07c1.06,0,2.14.06,3.15,0a6.79,6.79,0,0,0,2.85-1,7.34,7.34,0,0,0,3.27-4.66,12.71,12.71,0,0,0,.19-2.82c0-.93,0-1.86,0-2.76a15.18,15.18,0,0,1,.13-2.7,7.83,7.83,0,0,1,.88-2.47,7.34,7.34,0,0,1,3.69-3.24c1.52-.65,3.13-.44,4.59-.47l15,.1,9.23.06c2.08,0,3.14,0,3.14,0h-3.14l-9.23,0-15,0a11.28,11.28,0,0,0-4.52.47,7.06,7.06,0,0,0-3.6,3.17,7.55,7.55,0,0,0-.86,2.41,15.68,15.68,0,0,0-.12,2.67c0,.91,0,1.83,0,2.76a13.23,13.23,0,0,1-.19,2.86,7.55,7.55,0,0,1-3.36,4.8,7,7,0,0,1-2.93,1c-1.07.09-2.11,0-3.18,0L267,61.78l-30.51-.12-8.35,0H226a8,8,0,0,1-2.17-.22,7.14,7.14,0,0,1-3.71-2.31,7.73,7.73,0,0,1-1.8-4.07,18.86,18.86,0,0,1-.07-2.25c0-.75,0-1.5,0-2.25a12.06,12.06,0,0,0-.43-4.45,7.35,7.35,0,0,0-2.68-3.54,7,7,0,0,0-4.34-1.22l-4.75,0-9.71,0-20.16-.09a23.05,23.05,0,0,0-18.57,8.15,23.19,23.19,0,0,0-4.8,9.61c-.24.88-.31,1.8-.48,2.7s-.12,1.83-.13,2.76q0,2.79,0,5.61-.08,22.56-.18,46.89c-.13,32.4-.27,67-.41,103.47s-.31,74.68-.47,114.34q-.12,29.73-.25,60.48-.06,15.36-.13,30.94,0,3.88,0,7.8a24.72,24.72,0,0,0,.91,7.66A23.14,23.14,0,0,0,160.48,454a23.86,23.86,0,0,0,14.72,4.11l15.62.08,30.92.14,60.47.28,29.47.14,7.28,0h3.62c1.21,0,2.42,0,3.6-.05a22.81,22.81,0,0,0,13.06-5,24.35,24.35,0,0,0,4.73-5.2,22.7,22.7,0,0,0,2.91-6.35,24.36,24.36,0,0,0,.9-6.9l0-7q.06-14,.12-27.65c.33-72.87.63-138.49.87-193.6s.49-99.7.64-130.53c0-3.85,0-7.49.06-10.9a23.84,23.84,0,0,0-1.66-9.34,23.21,23.21,0,0,0-4.32-6.89A23.21,23.21,0,0,0,329.69,42a19.38,19.38,0,0,0-2.34-.22Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 249.948px 249.997px;"
                                                id="el2wcquhtycf4" class="animable"></path>
                                            <path
                                                d="M299.39,158.51l-2.27-2.69,6.76-3.63-31.41-10.63L283.1,172l3.87-5.07s20.32,35.76,0,57.5c-20.18,21.59-44,16.91-44,16.91l4.59,15S285,259,305.09,225.16,299.39,158.51,299.39,158.51Z"
                                                style="fill: rgb(94, 128, 183); transform-origin: 277.859px 198.975px;"
                                                id="elh5d9eqpdiha" class="animable"></path>
                                            <path
                                                d="M205.21,233.55l2.27,2.69-6.77,3.63,31.41,10.63-10.63-30.44-3.86,5.07s-20.33-35.76,0-57.5c20.18-21.59,44-16.91,44-16.91l-4.59-15s-37.45-2.66-57.5,31.16S205.21,233.55,205.21,233.55Z"
                                                style="fill: rgb(94, 128, 183); transform-origin: 226.762px 193.085px;"
                                                id="elmmtqexmuamm" class="animable"></path>
                                            <path
                                                d="M299.39,158.51l-2.27-2.69,6.76-3.63-31.41-10.63L283.1,172l3.87-5.07s20.32,35.76,0,57.5c-20.18,21.59-44,16.91-44,16.91l4.59,15S285,259,305.09,225.16,299.39,158.51,299.39,158.51Z"
                                                style="fill: rgb(94, 128, 183); transform-origin: 277.859px 198.975px;"
                                                id="el0ac730eutdd" class="animable"></path>
                                            <path
                                                d="M205.21,233.55l2.27,2.69-6.77,3.63,31.41,10.63-10.63-30.44-3.86,5.07s-20.33-35.76,0-57.5c20.18-21.59,44-16.91,44-16.91l-4.59-15s-37.45-2.66-57.5,31.16S205.21,233.55,205.21,233.55Z"
                                                style="fill: rgb(94, 128, 183); transform-origin: 226.762px 193.085px;"
                                                id="elz9hawknn3c9" class="animable"></path>
                                            <g id="el43vpc9zyhep">
                                                <g style="opacity: 0.8; transform-origin: 277.859px 198.975px;"
                                                    class="animable">
                                                    <path
                                                        d="M299.39,158.51l-2.27-2.69,6.76-3.63-31.41-10.63L283.1,172l3.87-5.07s20.32,35.76,0,57.5c-20.18,21.59-44,16.91-44,16.91l4.59,15S285,259,305.09,225.16,299.39,158.51,299.39,158.51Z"
                                                        style="fill: rgb(255, 255, 255); transform-origin: 277.859px 198.975px;"
                                                        id="ely8jv2l7j229" class="animable"></path>
                                                </g>
                                            </g>
                                            <g id="elpez6ip196o">
                                                <g style="opacity: 0.8; transform-origin: 226.762px 193.085px;"
                                                    class="animable">
                                                    <path
                                                        d="M205.21,233.55l2.27,2.69-6.77,3.63,31.41,10.63-10.63-30.44-3.86,5.07s-20.33-35.76,0-57.5c20.18-21.59,44-16.91,44-16.91l-4.59-15s-37.45-2.66-57.5,31.16S205.21,233.55,205.21,233.55Z"
                                                        style="fill: rgb(255, 255, 255); transform-origin: 226.762px 193.085px;"
                                                        id="elpatwksufj8i" class="animable"></path>
                                                </g>
                                            </g>
                                            <path
                                                d="M270.21,178.27a24.42,24.42,0,0,1,3.77,5.31l6,0,2.24,9.73-5.43,2.63a24.52,24.52,0,0,1-1.08,6.42l4.29,4.25-5.3,8.46-5.7-2a24.08,24.08,0,0,1-5.3,3.78l0,6L254,225.11l-2.62-5.44A24.51,24.51,0,0,1,245,218.6l-4.25,4.28-8.47-5.29,2-5.7a24.27,24.27,0,0,1-3.77-5.3l-6,0-2.24-9.73,5.43-2.62a24.46,24.46,0,0,1,1.08-6.42l-4.28-4.25,5.29-8.47,5.7,2a24.41,24.41,0,0,1,5.3-3.78l0-6,9.73-2.25,2.62,5.44a24.12,24.12,0,0,1,6.42,1.08l4.25-4.29,8.47,5.3-2,5.69Zm-11.91,8A10.71,10.71,0,1,0,261.7,201,10.71,10.71,0,0,0,258.3,186.24Z"
                                                style="fill: rgb(94, 128, 183); fill-rule: evenodd; transform-origin: 252.245px 195.09px;"
                                                id="elx7nxirbq3p" class="animable"></path>
                                            <g id="elkujfuencs3l">
                                                <g style="opacity: 0.6; transform-origin: 252.62px 195.32px;"
                                                    class="animable">
                                                    <path
                                                        d="M258.3,186.24A10.71,10.71,0,1,0,261.7,201,10.71,10.71,0,0,0,258.3,186.24Z"
                                                        style="fill: rgb(255, 255, 255); fill-rule: evenodd; transform-origin: 252.62px 195.32px;"
                                                        id="el8xnvu9nioqv" class="animable"></path>
                                                </g>
                                            </g>
                                            <path
                                                d="M219.69,294.79v-6.41h1.18v6.36c0,2.66,1.25,3.87,3.42,3.87s3.44-1.21,3.44-3.87v-6.36h1.15v6.41c0,3.22-1.72,4.88-4.59,4.88S219.69,298,219.69,294.79Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 224.285px 294.025px;"
                                                id="eldyxw4c5k45p" class="animable"></path>
                                            <path
                                                d="M241.2,292.22c0,2.38-1.72,3.82-4.57,3.82h-3v3.53h-1.19V288.38h4.19C239.48,288.38,241.2,289.82,241.2,292.22Zm-1.18,0c0-1.79-1.18-2.82-3.42-2.82h-3V295h3C238.84,295,240,294,240,292.22Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 236.82px 293.975px;"
                                                id="elzurxhnj4py" class="animable"></path>
                                            <path
                                                d="M243.76,288.38h4.55c3.58,0,6,2.3,6,5.6s-2.42,5.59-6,5.59h-4.55Zm4.49,10.17c3,0,4.89-1.89,4.89-4.57s-1.92-4.58-4.89-4.58h-3.31v9.15Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 249.035px 293.975px;"
                                                id="elqevvrlhhxg" class="animable"></path>
                                            <path
                                                d="M263.81,296.58h-6.23l-1.35,3H255l5.12-11.19h1.17l5.11,11.19h-1.24Zm-.43-1-2.68-6-2.69,6Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 260.7px 293.985px;"
                                                id="elwc3nq4z5rgq" class="animable"></path>
                                            <path d="M269.87,289.4h-3.94v-1H275v1h-3.93v10.17h-1.18Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 270.465px 293.985px;"
                                                id="el8ex2gprfk5h" class="animable"></path>
                                            <path d="M284.78,298.55v1h-7.91V288.38h7.67v1h-6.49v4h5.79v1h-5.79v4.16Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 280.825px 293.965px;"
                                                id="el80tvrs5205w" class="animable"></path>
                                            <path
                                                d="M335.33,77.68c0,.1-4.05.22-9.05.26s-9,0-9-.11,4-.23,9-.27S335.33,77.57,335.33,77.68Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 326.305px 77.7507px;"
                                                id="elfhefgbtjtd" class="animable"></path>
                                            <path
                                                d="M335.37,82.31c0,.11-4.05.23-9.05.27s-9.05,0-9.05-.12,4.05-.22,9.05-.26S335.37,82.21,335.37,82.31Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 326.32px 82.3906px;"
                                                id="elg98thx3t1ku" class="animable"></path>
                                            <path
                                                d="M335.41,86.94c0,.11-4.05.23-9.05.27s-9.06,0-9.06-.12,4.05-.22,9.06-.26S335.41,86.84,335.41,86.94Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 326.355px 87.0206px;"
                                                id="ela56r9spcfp" class="animable"></path>
                                            <path
                                                d="M170.65,92.23l.37,0,1,0,3.87-.09-.11.11c0-.86,0-1.79,0-2.8,0-.53,0-1,0-1.62a1.49,1.49,0,0,1,1.3-1.19c.62,0,1.17,0,1.85,0a1.51,1.51,0,0,1,1.26,1.49c0,1.31,0,2.68.05,4.09l-.18-.17,4.88,0-.19.18c0-2,0-4,0-6.07,0-.52,0-1,0-1.55a1.55,1.55,0,0,0-.68-1.15l-2.13-2.1-2.06-2-1-1c-.34-.33-.61-.67-1-.75a1.34,1.34,0,0,0-1.12.21c-.3.25-.61.61-.91.9L174,80.34c-1.1,1.14-2.25,2.19-3.08,3.18a3.51,3.51,0,0,0-.25,1.82v1.72c0,1,0,2,0,2.76s0,1.29,0,1.77,0,.63,0,.64a4.72,4.72,0,0,1,0-.58c0-.48,0-1.05,0-1.75s0-1.73-.07-2.79c0-.55,0-1.13,0-1.75,0-.31,0-.63,0-1a2,2,0,0,1,.26-1c.91-1.11,2-2.08,3.09-3.26l1.74-1.78c.31-.31.57-.61.94-.93a1.65,1.65,0,0,1,1.41-.28,2.63,2.63,0,0,1,1.18.84l1,1,2.06,2,2.14,2.1a4,4,0,0,1,.54.59,1.59,1.59,0,0,1,.26.82c0,.51,0,1,0,1.55,0,2.09,0,4.12,0,6.08v.19H185l-4.88,0h-.17v-.17c0-1.42,0-2.79,0-4.09a1.18,1.18,0,0,0-1-1.19c-.56,0-1.23,0-1.77,0a1.18,1.18,0,0,0-1.05.94c0,.49,0,1.07,0,1.56V92.3h-.11l-3.93,0-1,0A2,2,0,0,1,170.65,92.23Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 177.91px 84.6784px;"
                                                id="eld59u9ziavio" class="animable"></path>
                                            <path
                                                d="M290.5,88.28c0,.14-15.24.26-34,.26s-34-.12-34-.26,15.24-.26,34-.26S290.5,88.14,290.5,88.28Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 256.5px 88.28px;"
                                                id="el6744kssoe74" class="animable"></path>
                                            <path
                                                d="M288.73,404.33H217.28a16.53,16.53,0,0,1-16.53-16.52h0a16.53,16.53,0,0,1,16.53-16.53h71.45a16.53,16.53,0,0,1,16.53,16.53h0A16.53,16.53,0,0,1,288.73,404.33Z"
                                                style="fill: rgb(94, 128, 183); transform-origin: 253.005px 387.805px;"
                                                id="elos5btujpqes" class="animable"></path>
                                            <path
                                                d="M239.37,390.22l.6-1.32a4.42,4.42,0,0,0,2.5.79c1,0,1.47-.34,1.47-.81,0-1.42-4.42-.45-4.42-3.27,0-1.29,1-2.36,3.2-2.36a5.06,5.06,0,0,1,2.64.67l-.54,1.33a4.33,4.33,0,0,0-2.11-.59c-1,0-1.44.39-1.44.87,0,1.4,4.41.43,4.41,3.22,0,1.27-1.05,2.35-3.22,2.35A5.42,5.42,0,0,1,239.37,390.22Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 242.525px 387.175px;"
                                                id="el729ezwkct6u" class="animable"></path>
                                            <path
                                                d="M250.53,390.69a2.43,2.43,0,0,1-1.38.37A1.92,1.92,0,0,1,247,389v-2.4h-.9v-1.31h.9v-1.42h1.69v1.42h1.46v1.31h-1.46v2.37a.68.68,0,0,0,.73.77,1.12,1.12,0,0,0,.68-.21Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 248.315px 387.472px;"
                                                id="el0zv3q6otf9" class="animable"></path>
                                            <path
                                                d="M256.65,387.64V391h-1.59v-.72a1.91,1.91,0,0,1-1.78.81c-1.37,0-2.18-.76-2.18-1.77s.73-1.75,2.51-1.75H255c0-.72-.43-1.15-1.34-1.15a2.77,2.77,0,0,0-1.68.55l-.61-1.19a4.52,4.52,0,0,1,2.52-.7C255.61,385.05,256.65,385.87,256.65,387.64Zm-1.7,1.49v-.6h-1.16c-.79,0-1,.29-1,.68s.36.71.95.71A1.24,1.24,0,0,0,255,389.13Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 253.875px 388.09px;"
                                                id="elc37ctqrtkhg" class="animable"></path>
                                            <path
                                                d="M261.79,385.05v1.56l-.37,0a1.44,1.44,0,0,0-1.56,1.63V391h-1.69v-5.83h1.62v.77A2.33,2.33,0,0,1,261.79,385.05Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 259.98px 388.022px;"
                                                id="elgsuqd02dxcv" class="animable"></path>
                                            <path
                                                d="M266.77,390.69a2.43,2.43,0,0,1-1.38.37,1.93,1.93,0,0,1-2.18-2.09v-2.4h-.9v-1.31h.9v-1.42h1.7v1.42h1.45v1.31h-1.45v2.37a.68.68,0,0,0,.72.77,1.17,1.17,0,0,0,.69-.21Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 264.54px 387.459px;"
                                                id="eldpwk087bwwp" class="animable"></path>
                                            <path
                                                d="M320.91,325.93c0,.14-30.72.26-68.61.26s-68.62-.12-68.62-.26,30.72-.26,68.62-.26S320.91,325.78,320.91,325.93Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 252.295px 325.93px;"
                                                id="elmxsc0nzgh6q" class="animable"></path>
                                            <path
                                                d="M293.57,334.34c0,.14-18.48.26-41.27.26s-41.28-.12-41.28-.26,18.48-.26,41.28-.26S293.57,334.19,293.57,334.34Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 252.295px 334.34px;"
                                                id="elvrpj0polif" class="animable"></path>
                                        </g>
                                        <g id="freepik--Character--inject-318" class="animable"
                                            style="transform-origin: 174.45px 298.65px;">
                                            <polygon
                                                points="103.7 458.24 97.62 480.71 117.37 482.51 121.52 461.12 103.7 458.24"
                                                style="fill: rgb(94, 128, 183); transform-origin: 109.57px 470.375px;"
                                                id="el306u7nuw13" class="animable"></polygon>
                                            <path
                                                d="M117.94,480.68a14.81,14.81,0,0,1-2.89-.1c-1.78-.14-4.23-.41-6.93-.76l-6.9-.93a15.28,15.28,0,0,1-2.85-.49,14.44,14.44,0,0,1,2.89.11c1.78.14,4.23.42,6.93.76l6.9.92A16.64,16.64,0,0,1,117.94,480.68Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 108.155px 479.541px;"
                                                id="elh0varc4e75s" class="animable"></path>
                                            <g id="el2kw4a4z5xlj">
                                                <g style="opacity: 0.6; transform-origin: 107.655px 480.445px;"
                                                    class="animable">
                                                    <polyline
                                                        points="97.62 480.71 117.37 482.51 117.69 480.86 98.19 478.38 97.64 480.48"
                                                        style="fill: rgb(255, 255, 255); transform-origin: 107.655px 480.445px;"
                                                        id="elz3io8hmhkuo" class="animable"></polyline>
                                                </g>
                                            </g>
                                            <path
                                                d="M107.43,479.71a85.93,85.93,0,0,1,1.88-8.61,81.92,81.92,0,0,1,2.33-8.5,85.93,85.93,0,0,1-1.88,8.61A85,85,0,0,1,107.43,479.71Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 109.535px 471.155px;"
                                                id="el1mpgsf8dz2wh" class="animable"></path>
                                            <path
                                                d="M116.85,480.53a9.39,9.39,0,0,0,0-4.17,8.22,8.22,0,0,0-2.16-3.91,8.08,8.08,0,0,0-4.91-2.26,8.39,8.39,0,0,0-5.29,1.2,9.14,9.14,0,0,0-3.07,3.27,11.54,11.54,0,0,0-1.25,4s0-.11,0-.3a6,6,0,0,1,0-.86,8.88,8.88,0,0,1,.94-3A9.18,9.18,0,0,1,104.3,471a8.7,8.7,0,0,1,5.56-1.3,8.13,8.13,0,0,1,7.35,6.56,7.84,7.84,0,0,1,0,3.15,5.81,5.81,0,0,1-.24.82C116.91,480.44,116.86,480.54,116.85,480.53Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 108.762px 475.092px;"
                                                id="el603xgn11yky" class="animable"></path>
                                            <path d="M185.22,452.21l-1.32,20s19.86,6.59,20,10.31l-38.81.28.78-31.18Z"
                                                style="fill: rgb(94, 128, 183); transform-origin: 184.495px 467.21px;"
                                                id="elic0p3he6dh" class="animable"></path>
                                            <g id="elo3x6va8p16f">
                                                <g style="opacity: 0.6; transform-origin: 172.328px 471.593px;"
                                                    class="animable">
                                                    <path
                                                        d="M172,470.13a1.58,1.58,0,0,0-1.15,1.77,1.52,1.52,0,0,0,1.75,1.16,1.66,1.66,0,0,0,1.2-1.89,1.58,1.58,0,0,0-1.95-1"
                                                        style="fill: rgb(255, 255, 255); transform-origin: 172.328px 471.593px;"
                                                        id="el502deyxme8p" class="animable"></path>
                                                </g>
                                            </g>
                                            <g id="elqg89cbgv5ep">
                                                <g style="opacity: 0.6; transform-origin: 184.575px 481.185px;"
                                                    class="animable">
                                                    <path
                                                        d="M165.07,482.76l.08-3.15,37.48,1a2.69,2.69,0,0,1,1.45,2.11Z"
                                                        style="fill: rgb(255, 255, 255); transform-origin: 184.575px 481.185px;"
                                                        id="elntorckvqqm" class="animable"></path>
                                                </g>
                                            </g>
                                            <path
                                                d="M184.54,472c0,.19-1,.25-1.92.83s-1.47,1.36-1.64,1.28.14-1.16,1.31-1.85S184.58,471.82,184.54,472Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 182.739px 472.96px;"
                                                id="elv5fyswh9nul" class="animable"></path>
                                            <path
                                                d="M188.55,473.8c0,.18-.79.48-1.46,1.26s-.88,1.63-1.06,1.61-.28-1.09.57-2S188.55,473.62,188.55,473.8Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 187.229px 475.201px;"
                                                id="elviavk33ak" class="animable"></path>
                                            <path
                                                d="M190.72,478.74c-.18,0-.41-.92.11-1.94s1.41-1.41,1.49-1.25-.49.7-.9,1.54S190.91,478.73,190.72,478.74Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 191.419px 477.128px;"
                                                id="el0om912jk31sj" class="animable"></path>
                                            <path
                                                d="M184.33,467.41c-.08.17-.94-.11-2-.07s-1.91.35-2,.18.73-.81,2-.84S184.43,467.27,184.33,467.41Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 182.331px 467.125px;"
                                                id="elhmklai8ah3" class="animable"></path>
                                            <path
                                                d="M184.52,463.38a3.64,3.64,0,0,1-1.94-.07,8.66,8.66,0,0,1-2-.68,11.38,11.38,0,0,1-1.1-.63,2.52,2.52,0,0,1-.57-.47.82.82,0,0,1-.06-1,1,1,0,0,1,.85-.41,2.52,2.52,0,0,1,.72.12,7.1,7.1,0,0,1,1.2.45,6.89,6.89,0,0,1,1.75,1.23c.88.86,1.16,1.58,1.1,1.61s-.51-.54-1.41-1.26a7.88,7.88,0,0,0-1.7-1,6.18,6.18,0,0,0-1.1-.37c-.41-.12-.76-.14-.87,0s0,.1,0,.22a2.08,2.08,0,0,0,.43.35,8.94,8.94,0,0,0,1,.61,10.5,10.5,0,0,0,1.86.78A12.88,12.88,0,0,1,184.52,463.38Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 181.614px 461.825px;"
                                                id="elmkym3jn2iti" class="animable"></path>
                                            <path
                                                d="M184.27,463.65a3.19,3.19,0,0,1-.46-1.9,6.26,6.26,0,0,1,.86-3.28,1.61,1.61,0,0,1,1.27-.94.89.89,0,0,1,.8.56,2.8,2.8,0,0,1,.18.72,4.73,4.73,0,0,1,0,1.31,4.54,4.54,0,0,1-.89,2c-.79,1-1.59,1.19-1.6,1.12s.61-.44,1.22-1.39a4.56,4.56,0,0,0,.67-1.81,4.2,4.2,0,0,0,0-1.12c-.05-.41-.2-.75-.35-.71s-.53.29-.7.61a5.88,5.88,0,0,0-.51,1,7,7,0,0,0-.44,1.93C184.19,462.9,184.37,463.62,184.27,463.65Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 185.383px 460.59px;"
                                                id="el07eel7xerzkr" class="animable"></path>
                                            <polygon
                                                points="185.22 278.83 126.09 278.39 97.52 466.07 122.06 469.18 153.51 314.86 162.92 469.73 162.95 470.19 189.49 469.73 185.22 278.83"
                                                style="fill: rgb(38, 50, 56); transform-origin: 143.505px 374.29px;"
                                                id="el6sk4sjqyyx8" class="animable"></polygon>
                                            <path
                                                d="M158.33,294a10.76,10.76,0,0,1,1.22-.08l3.56-.13,12.78-.36h.24v.25c0,3.71,0,7.85,0,12.26v.11l-.09.08-2.22,2-6.56,6-.18.16-.17-.15-8.75-7.8-.07-.06v-.1c0-3.72.08-6.79.11-9,0-1,0-1.81.05-2.42a4.89,4.89,0,0,1,.05-.82,8.77,8.77,0,0,1,0,.9c0,.62,0,1.45.06,2.47,0,2.17.06,5.19.11,8.86l-.07-.15,8.81,7.72h-.35l6.55-6,2.23-2-.09.2c0-4.41,0-8.55,0-12.26l.25.24-12.64.12h-4.58A1.5,1.5,0,0,1,158.33,294Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 167.11px 303.86px;"
                                                id="elz1osloubxja" class="animable"></path>
                                            <path
                                                d="M130.5,293.23a8.19,8.19,0,0,1,1.09,0l3.18.26,11.5,1,.24,0,0,.24c-.43,3.63-.93,7.76-1.45,12.17l0,.11-.08.07-2.55,2-6.29,5-.21.16-.16-.2-6.87-8.7-.06-.07v-.09c.5-3.68.91-6.71,1.2-8.9.15-1,.26-1.79.35-2.41a3.67,3.67,0,0,1,.15-.8,7.9,7.9,0,0,1-.07.9q-.09.94-.24,2.46l-1,8.81,0-.16c2,2.51,4.38,5.44,6.95,8.63l-.37,0,6.28-5,2.55-2-.1.17c.55-4.4,1.07-8.53,1.52-12.16l.21.26-11.33-1.26-3.22-.39A9.78,9.78,0,0,1,130.5,293.23Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 137.675px 303.655px;"
                                                id="el1tmyaqzy11v" class="animable"></path>
                                            <path
                                                d="M166.68,321.71a16.93,16.93,0,0,1-2.68-1.3c-1.63-.85-3.88-2-6.39-3.27s-4.79-2.34-6.45-3.13a18.32,18.32,0,0,1-2.66-1.36,14.71,14.71,0,0,1,2.81,1c1.71.7,4,1.74,6.55,3s4.74,2.49,6.32,3.43A15.86,15.86,0,0,1,166.68,321.71Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 157.59px 317.18px;"
                                                id="el3yy5c1tsyu7" class="animable"></path>
                                            <path
                                                d="M165.92,326.27a5.92,5.92,0,0,1-2-.76,17.18,17.18,0,0,1-7.33-7.22,5.93,5.93,0,0,1-.79-2,30.26,30.26,0,0,0,4.28,5.8A31.09,31.09,0,0,0,165.92,326.27Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 160.86px 321.28px;"
                                                id="elqr762l5cwdi" class="animable"></path>
                                            <path
                                                d="M182.61,380.5a3.29,3.29,0,0,1-.27,1,13.28,13.28,0,0,1-1.23,2.49,15,15,0,0,1-15.94,6.72,13.44,13.44,0,0,1-2.64-.85,3.4,3.4,0,0,1-.89-.49,37.16,37.16,0,0,0,3.6,1,15.36,15.36,0,0,0,15.55-6.55C182.08,381.86,182.51,380.46,182.61,380.5Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 172.125px 385.778px;"
                                                id="eltlhcxlbghvo" class="animable"></path>
                                            <path
                                                d="M178.72,378.9a7.07,7.07,0,0,1-2.26,1,21.89,21.89,0,0,1-5.88,1,31,31,0,0,1-5.94-.35,9.9,9.9,0,0,1-2.41-.55c0-.19,3.74.53,8.33.36a27.63,27.63,0,0,0,5.8-.8C177.81,379.17,178.69,378.82,178.72,378.9Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 170.475px 379.905px;"
                                                id="elx4jz3i2cion" class="animable"></path>
                                            <path
                                                d="M134.76,380a9.67,9.67,0,0,1-2.06,1.86,23.81,23.81,0,0,1-5.89,3.2,24.12,24.12,0,0,1-6.55,1.44,9.56,9.56,0,0,1-2.78-.07c0-.09,1.06-.1,2.74-.31a28.38,28.38,0,0,0,12.26-4.57A26.26,26.26,0,0,1,134.76,380Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 126.12px 383.285px;"
                                                id="eldpw8t6awxmb" class="animable"></path>
                                            <path
                                                d="M129.57,379.79a13.07,13.07,0,0,1-5.42.45,13.39,13.39,0,0,1-5.29-1.3c0-.16,2.38.53,5.33.76S129.55,379.63,129.57,379.79Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 124.215px 379.631px;"
                                                id="el2cj0a01fps" class="animable"></path>
                                            <path
                                                d="M153.16,316.16a12.23,12.23,0,0,1-2.66,1.2,37.09,37.09,0,0,1-6.82,1.77,36.59,36.59,0,0,1-7,.45,12.26,12.26,0,0,1-2.9-.31,21.64,21.64,0,0,1,2.9-.07,48.05,48.05,0,0,0,13.74-2.2A22,22,0,0,1,153.16,316.16Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 143.47px 317.879px;"
                                                id="elfe18o4cn03i" class="animable"></path>
                                            <path
                                                d="M151.54,310.1c.15,0,.28.46.29,1s-.11,1-.26,1-.27-.46-.28-1S151.39,310.1,151.54,310.1Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 151.56px 311.1px;"
                                                id="elx26bfis5zlm" class="animable"></path>
                                            <path
                                                d="M151.55,305.94c.15,0,.27.47.26,1s-.12,1-.27,1-.27-.47-.27-1S151.4,305.94,151.55,305.94Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 151.54px 306.94px;"
                                                id="elthq683smo8m" class="animable"></path>
                                            <path
                                                d="M151.63,301.79c.15,0,.26.47.25,1s-.15,1-.3,1-.26-.47-.24-1S151.49,301.78,151.63,301.79Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 151.609px 302.79px;"
                                                id="el9p3xsv6mj8" class="animable"></path>
                                            <path
                                                d="M151.8,297.63c.15,0,.25.48.22,1.05s-.16,1-.31,1-.25-.48-.23-1S151.65,297.62,151.8,297.63Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 151.751px 298.655px;"
                                                id="elklocxoxyfvg" class="animable"></path>
                                            <path
                                                d="M152.05,293.48c.15,0,.24.48.2,1.06s-.19,1-.34,1-.24-.49-.2-1.06S151.9,293.47,152.05,293.48Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 151.98px 294.51px;"
                                                id="elejs2k8e1qg" class="animable"></path>
                                            <path
                                                d="M152.37,289.34c.15,0,.23.48.19,1.05s-.21,1-.36,1-.23-.49-.18-1.06S152.23,289.32,152.37,289.34Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 152.288px 290.365px;"
                                                id="elqz9c2sy14w" class="animable"></path>
                                            <path
                                                d="M152.7,285.94c.15,0,.24.33.2.69s-.18.65-.33.64-.24-.33-.2-.69S152.55,285.93,152.7,285.94Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 152.635px 286.605px;"
                                                id="elkmmep00408g" class="animable"></path>
                                            <path
                                                d="M119.27,465.06c.15,0,.18.51.06,1.08s-.32,1-.47,1-.17-.51-.06-1.07S119.13,465,119.27,465.06Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 119.067px 466.098px;"
                                                id="eldxwmb7t3led" class="animable"></path>
                                            <path
                                                d="M120.09,461c.14,0,.17.51.06,1.07s-.32,1-.47,1-.17-.51-.06-1.08S119.94,461,120.09,461Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 119.883px 462.035px;"
                                                id="el9pwrtc61qco" class="animable"></path>
                                            <path
                                                d="M120.9,456.91c.15,0,.18.51.06,1.07s-.32,1-.46,1-.18-.51-.07-1.07S120.76,456.88,120.9,456.91Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 120.7px 457.944px;"
                                                id="eljja1qkjfvt" class="animable"></path>
                                            <path
                                                d="M121.72,452.83c.15,0,.17.51.06,1.08s-.32,1-.47,1-.17-.51-.06-1.07S121.57,452.81,121.72,452.83Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 121.515px 453.87px;"
                                                id="el30s1z5kx24a" class="animable"></path>
                                            <path
                                                d="M122.53,448.76c.15,0,.18.51.07,1.07s-.33,1-.47,1-.18-.51-.06-1.08S122.39,448.73,122.53,448.76Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 122.333px 449.794px;"
                                                id="elf89l08t5mzw" class="animable"></path>
                                            <path
                                                d="M123.35,444.68c.15,0,.17.51.06,1.07s-.32,1-.47,1-.17-.51-.06-1.07S123.2,444.65,123.35,444.68Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 123.145px 445.714px;"
                                                id="elud9llfptlsi" class="animable"></path>
                                            <path
                                                d="M124.17,440.61c.14,0,.17.5.06,1.07s-.33,1-.47,1-.18-.51-.06-1.07S124,440.58,124.17,440.61Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 123.963px 441.644px;"
                                                id="elys1geih23o9" class="animable"></path>
                                            <path
                                                d="M125,436.53c.15,0,.17.51.06,1.07s-.32,1-.47,1-.17-.51-.06-1.08S124.83,436.5,125,436.53Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 124.795px 437.564px;"
                                                id="eld1il7a90bmm" class="animable"></path>
                                            <path
                                                d="M125.8,432.45c.14,0,.17.51.06,1.07s-.32,1-.47,1-.18-.51-.06-1.07S125.65,432.42,125.8,432.45Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 125.591px 433.484px;"
                                                id="el9j1mmbymps" class="animable"></path>
                                            <path
                                                d="M126.61,428.38c.15,0,.18.5.06,1.07s-.32,1-.47,1-.17-.51-.06-1.07S126.47,428.35,126.61,428.38Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 126.407px 429.414px;"
                                                id="el58a69hls5jx" class="animable"></path>
                                            <path
                                                d="M127.43,424.3c.14,0,.17.51.06,1.07s-.32,1-.47,1-.17-.51-.06-1.08S127.28,424.27,127.43,424.3Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 127.223px 425.334px;"
                                                id="el5tf9dsilw5j" class="animable"></path>
                                            <path
                                                d="M128.24,420.22c.15,0,.18.51.06,1.07s-.32,1-.46,1-.18-.51-.07-1.07S128.1,420.19,128.24,420.22Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 128.04px 421.254px;"
                                                id="ely2iamc2gylh" class="animable"></path>
                                            <path
                                                d="M129.06,416.15c.14,0,.17.51.06,1.07s-.32,1-.47,1-.17-.51-.06-1.07S128.91,416.12,129.06,416.15Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 128.853px 417.184px;"
                                                id="elc09acs6yjd" class="animable"></path>
                                            <path
                                                d="M129.87,412.07c.15,0,.18.51.07,1.07s-.33,1-.47,1-.18-.51-.07-1.07S129.73,412,129.87,412.07Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 129.671px 413.102px;"
                                                id="elpdhbh5c22be" class="animable"></path>
                                            <path
                                                d="M130.69,408c.15,0,.17.51.06,1.08s-.32,1-.47,1-.17-.51-.06-1.07S130.54,408,130.69,408Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 130.485px 409.04px;"
                                                id="elk5x9e1ax09g" class="animable"></path>
                                            <path
                                                d="M131.5,403.92c.15,0,.18.51.07,1.07s-.33,1-.47,1-.18-.5-.06-1.07S131.36,403.89,131.5,403.92Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 131.303px 404.954px;"
                                                id="elrxe37gil2xr" class="animable"></path>
                                            <path
                                                d="M132.32,399.84c.15,0,.17.51.06,1.07s-.32,1-.47,1-.17-.51-.06-1.07S132.17,399.81,132.32,399.84Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 132.115px 400.874px;"
                                                id="el6rmx0xcl4kj" class="animable"></path>
                                            <path
                                                d="M133.14,395.76c.14,0,.17.51.06,1.08s-.33,1-.47,1-.18-.51-.06-1.07S133,395.73,133.14,395.76Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 132.933px 396.799px;"
                                                id="el31yz4j57h46" class="animable"></path>
                                            <path
                                                d="M134,391.69c.15,0,.18.51.06,1.07s-.32,1-.47,1-.17-.51-.06-1.08S133.8,391.66,134,391.69Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 133.797px 392.724px;"
                                                id="elfez7a75epnp" class="animable"></path>
                                            <path
                                                d="M134.77,387.61c.14,0,.17.51.06,1.07s-.32,1-.47,1-.18-.51-.06-1.07S134.62,387.58,134.77,387.61Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 134.561px 388.644px;"
                                                id="elljhwqqgsfg" class="animable"></path>
                                            <path
                                                d="M135.58,383.53c.15,0,.18.51.06,1.08s-.32,1-.47,1-.17-.51-.06-1.07S135.44,383.5,135.58,383.53Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 135.377px 384.569px;"
                                                id="elmc922waivqf" class="animable"></path>
                                            <path
                                                d="M136.4,379.46c.14,0,.17.51.06,1.07s-.32,1-.47,1-.17-.51-.06-1.08S136.25,379.43,136.4,379.46Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 136.193px 380.494px;"
                                                id="eltl38n0by3qc" class="animable"></path>
                                            <path
                                                d="M137.21,375.38c.15,0,.18.51.06,1.07s-.32,1-.46,1-.18-.51-.07-1.07S137.07,375.35,137.21,375.38Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 137.01px 376.414px;"
                                                id="elvfas61tvwa" class="animable"></path>
                                            <path
                                                d="M138,371.3c.15,0,.17.51.06,1.08s-.32,1-.47,1-.17-.51-.06-1.07S137.88,371.27,138,371.3Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 137.795px 372.339px;"
                                                id="eli3d3mlpfp8" class="animable"></path>
                                            <path
                                                d="M138.84,367.23c.15,0,.18.51.07,1.07s-.33,1-.47,1-.18-.51-.07-1.08S138.7,367.2,138.84,367.23Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 138.641px 368.264px;"
                                                id="elu9qymgbfcvl" class="animable"></path>
                                            <path
                                                d="M139.66,363.15c.15,0,.17.51.06,1.07s-.32,1-.47,1-.17-.51-.06-1.07S139.51,363.12,139.66,363.15Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 139.455px 364.184px;"
                                                id="el7a29xysuyf" class="animable"></path>
                                            <path
                                                d="M140.48,359.07c.14,0,.17.51.06,1.08s-.33,1-.47,1-.18-.51-.06-1.07S140.33,359.05,140.48,359.07Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 140.273px 360.11px;"
                                                id="elqgnfdw6ktvs" class="animable"></path>
                                            <path
                                                d="M141.29,355c.15,0,.17.51.06,1.07s-.32,1-.47,1-.17-.51-.06-1.08S141.14,355,141.29,355Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 141.085px 356.035px;"
                                                id="eln4pd7zsq4j" class="animable"></path>
                                            <path
                                                d="M142.11,350.92c.14,0,.17.51.06,1.07s-.33,1-.47,1-.18-.51-.06-1.07S142,350.89,142.11,350.92Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 141.903px 351.954px;"
                                                id="elxyvrpddpwqp" class="animable"></path>
                                            <path
                                                d="M142.92,346.85c.15,0,.18.5.06,1.07s-.32,1-.47,1-.17-.51-.06-1.07S142.78,346.82,142.92,346.85Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 142.717px 347.884px;"
                                                id="el8uytbrigzdg" class="animable"></path>
                                            <path
                                                d="M143.74,342.77c.14,0,.17.51.06,1.07s-.32,1-.47,1-.17-.51-.06-1.08S143.59,342.74,143.74,342.77Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 143.533px 343.804px;"
                                                id="elmhkg8czi1nc" class="animable"></path>
                                            <path
                                                d="M144.55,338.69c.15,0,.18.51.06,1.07s-.32,1-.47,1-.17-.51-.06-1.07S144.41,338.66,144.55,338.69Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 144.347px 339.724px;"
                                                id="el6kb8j9rxcfi" class="animable"></path>
                                            <path
                                                d="M145.37,334.62c.14,0,.17.51.06,1.07s-.32,1-.47,1-.17-.51-.06-1.07S145.22,334.59,145.37,334.62Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 145.163px 335.654px;"
                                                id="elwjqffa044m" class="animable"></path>
                                            <path
                                                d="M146.18,330.54c.15,0,.18.51.07,1.07s-.33,1-.47,1-.18-.51-.07-1.07S146,330.51,146.18,330.54Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 145.981px 331.574px;"
                                                id="eloi70t6fwty" class="animable"></path>
                                            <path
                                                d="M147,326.46c.15,0,.17.51.06,1.07s-.32,1-.47,1-.17-.51-.06-1.07S146.85,326.43,147,326.46Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 146.795px 327.494px;"
                                                id="elb9diro6ges" class="animable"></path>
                                            <path
                                                d="M147.81,322.39c.15,0,.18.51.07,1.07s-.33,1-.47,1-.18-.5-.06-1.07S147.67,322.36,147.81,322.39Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 147.613px 323.424px;"
                                                id="elg6p623gq9ru" class="animable"></path>
                                            <path
                                                d="M148.63,318.31c.15,0,.17.51.06,1.07s-.32,1-.47,1-.17-.51-.06-1.07S148.48,318.28,148.63,318.31Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 148.425px 319.344px;"
                                                id="elnlt33bgm4sg" class="animable"></path>
                                            <path
                                                d="M230.14,192.59s6.92-10.37,7.11-10.46h0s6.24-10.52,8.32-10.52,1.33,2.13-.82,5.9a15,15,0,0,0-2.07,5.37l5.13,3.09s3.43-1.32,3.57,1.87a21.72,21.72,0,0,1-.59,4.34c-.21,1.14-.72,2.35-1.8,1.92a1.33,1.33,0,0,1-.91-1.28c-.07-1.89.28-2.59,0-2.59s-3.69,9.91-3.69,9.91Z"
                                                style="fill: rgb(255, 190, 157); transform-origin: 240.76px 185.875px;"
                                                id="elamvo6v8mgbl" class="animable"></path>
                                            <path
                                                d="M244.11,184.45a9.83,9.83,0,0,1,1.65-1,3.37,3.37,0,0,1,1.87-.29,1.51,1.51,0,0,1,1.24,2.13,5.1,5.1,0,0,1-.85,1.41"
                                                style="fill: rgb(255, 190, 157); transform-origin: 246.558px 184.916px;"
                                                id="el6cy2t45bc8" class="animable"></path>
                                            <path
                                                d="M241.77,182.36a9.88,9.88,0,0,1,1.56-.93,3.2,3.2,0,0,1,1.77-.27,1.55,1.55,0,0,1,1,.52,1.58,1.58,0,0,1,.19,1.48,13.57,13.57,0,0,1-1.6,2.06"
                                                style="fill: rgb(255, 190, 157); transform-origin: 244.082px 183.176px;"
                                                id="el4332amcndp8" class="animable"></path>
                                            <path
                                                d="M232.56,186.74l-10,21.38,11,11.27,5.74-15.94s3.08.61,4.34-1.43c1.4-2.28,3.24-8.86,3.24-8.86Z"
                                                style="fill: rgb(255, 190, 157); transform-origin: 234.72px 203.065px;"
                                                id="elc02putqhcwv" class="animable"></path>
                                            <path
                                                d="M239.7,186.15a5.43,5.43,0,0,1,1.18-3,5.3,5.3,0,0,1,1.72-1.52c.51-.27.86-.37.89-.31s-1.2.8-2.17,2.15S239.87,186.22,239.7,186.15Z"
                                                style="fill: rgb(235, 153, 110); transform-origin: 241.595px 183.728px;"
                                                id="el60ilyrwi5dw" class="animable"></path>
                                            <path
                                                d="M250.79,186.24c0,.07-.39-.12-1-.22a3.35,3.35,0,0,0-2.18.34A5.32,5.32,0,0,0,246,188c-.35.5-.59.81-.66.77s.05-.4.34-1a4.41,4.41,0,0,1,1.69-1.89,3.24,3.24,0,0,1,2.54-.23C250.55,185.87,250.83,186.19,250.79,186.24Z"
                                                style="fill: rgb(235, 153, 110); transform-origin: 248.057px 187.132px;"
                                                id="elovfj8mqozqo" class="animable"></path>
                                            <path
                                                d="M247.07,183.22a14.34,14.34,0,0,0-2.35,1.38c-1.12,1-1.67,2.15-1.82,2.08a3.8,3.8,0,0,1,1.46-2.48,4.23,4.23,0,0,1,1.84-1C246.73,183.12,247.06,183.16,247.07,183.22Z"
                                                style="fill: rgb(235, 153, 110); transform-origin: 244.985px 184.919px;"
                                                id="el6e4ebhtpgr2" class="animable"></path>
                                            <path
                                                d="M249.53,187.84c.14-.05.4.78-.13,1.6s-1.38,1-1.39.81.54-.44.94-1.09S249.37,187.86,249.53,187.84Z"
                                                style="fill: rgb(235, 153, 110); transform-origin: 248.864px 189.078px;"
                                                id="elpgo4r645rj" class="animable"></path>
                                            <path d="M230.17,192.18s-.35-6.38,1.19-7.83,6,.06,6,.06"
                                                style="fill: rgb(255, 190, 157); transform-origin: 233.748px 187.95px;"
                                                id="el1t02bx5rcca" class="animable"></path>
                                            <path
                                                d="M238,181.37a17.26,17.26,0,0,1-2.29,3.63,17.52,17.52,0,0,1-2.72,3.32,33.73,33.73,0,0,1,5-6.95Z"
                                                style="fill: rgb(235, 153, 110); transform-origin: 235.495px 184.845px;"
                                                id="elfapsyqet7ee" class="animable"></path>
                                            <path
                                                d="M149.43,133l-.15,49.79,21.36,1,.62-12.11s7.59,1.51,9.54-5.54c1.26-4.5.94-39.29.94-39.29Z"
                                                style="fill: rgb(255, 190, 157); transform-origin: 165.528px 155.32px;"
                                                id="elqzcy1e642hg" class="animable"></path>
                                            <path
                                                d="M184.55,130.36c-3.36,1-4.09,6.47-4.09,6.47l-5.28,11.65c-2.69-2.1-6.3-2-7,2.75-.5,3.41,3.75,4.1,3.75,4.1-2.47,4.21-4.15,7.61-7.75,11.61-3.89,4.33-6.07,4.76-10.3,4.83h-4.65s-2.28-7.4-6.5-25.9c-4.69-20.53,19.59-17.89,24.09-23.13C174.17,114.21,195.16,127.33,184.55,130.36Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 164.81px 145.835px;"
                                                id="eledo6u5c181u" class="animable"></path>
                                            <path
                                                d="M143.19,147.8c-3.94-2.64-4.29-10-2-14.47a14.23,14.23,0,0,1,12.12-7.54,5.75,5.75,0,0,0,2-.22,5.47,5.47,0,0,0,2.12-2c3.52-4.57,7-9.06,13.53-9.06a7.46,7.46,0,0,1,4.12,1,6.43,6.43,0,0,1,2.48,3.28,13.63,13.63,0,0,1,3.83-1.38,4.74,4.74,0,0,1,3.85.93,2.9,2.9,0,0,1,.6,3.69,4.65,4.65,0,0,1,4.65,3.87c.35,2.19-2.78,3.73-3.11,3.9,0,0,1.72,3.6-2.38,5.76-1.65.86-3.8-.18-4-.31"
                                                style="fill: rgb(38, 50, 56); transform-origin: 165.144px 131.15px;"
                                                id="el0y0qwiv452vr" class="animable"></path>
                                            <path
                                                d="M158.79,152.59a7.39,7.39,0,0,1-.12,3.78,7.54,7.54,0,0,1-1.51,3.47c-.15-.07.54-1.6,1-3.59S158.63,152.59,158.79,152.59Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 158.059px 156.215px;"
                                                id="el1habdg9y59s" class="animable"></path>
                                            <path
                                                d="M161.37,150.15a8.84,8.84,0,0,1-.2,3.64,9.41,9.41,0,0,1-1.12,3.47,18.9,18.9,0,0,1,.59-3.57A20.18,20.18,0,0,1,161.37,150.15Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 160.761px 153.705px;"
                                                id="eltv1hdxxn8wd" class="animable"></path>
                                            <path
                                                d="M168.77,141.93c0,.07-.55.51-1.32,1.41a13.47,13.47,0,0,0-2.3,4,32.56,32.56,0,0,0-1.28,4.47,7.38,7.38,0,0,1-.53,1.89,6.88,6.88,0,0,1,.15-2,21.89,21.89,0,0,1,1.15-4.6,11.65,11.65,0,0,1,2.53-4A4,4,0,0,1,168.77,141.93Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 166.046px 147.815px;"
                                                id="el9scdco70evo" class="animable"></path>
                                            <path
                                                d="M171.76,136.33a3,3,0,0,1,.42,1.35,9,9,0,0,1-1.63,6.49c-.52.7-1,1-1,1a18.6,18.6,0,0,0,1.92-4.21A18.5,18.5,0,0,0,171.76,136.33Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 170.906px 140.75px;"
                                                id="elw0bo2o86ker" class="animable"></path>
                                            <path
                                                d="M146.27,148.77c-.08.13-.73-.1-1.47-.51s-1.27-.84-1.19-1,.72.09,1.46.5S146.34,148.64,146.27,148.77Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 144.939px 148.009px;"
                                                id="ely7u1vhek83" class="animable"></path>
                                            <path
                                                d="M156.59,143.45a3,3,0,0,1-.61,2.17c-.66,1.1-1.55,1.66-1.64,1.55s.57-.82,1.17-1.83S156.43,143.42,156.59,143.45Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 155.47px 145.316px;"
                                                id="el8pigpewrnvh" class="animable"></path>
                                            <path
                                                d="M159.76,141.75a4.29,4.29,0,0,1-.95,2.59c-.86,1.3-1.93,2-2,1.88a23.21,23.21,0,0,1,1.57-2.18A21.53,21.53,0,0,1,159.76,141.75Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 158.285px 143.992px;"
                                                id="el0wao5yj3eh8" class="animable"></path>
                                            <path
                                                d="M175.54,120.9s-.41-.31-1.18-.75a8,8,0,0,0-3.58-.92,9.57,9.57,0,0,0-5.25,1.41,13,13,0,0,0-4.47,5,22.84,22.84,0,0,0-1.82,4.67l-.08.31-.29-.15a10.65,10.65,0,0,0-4.76-1.22,11.27,11.27,0,0,0-3.88.59,16.5,16.5,0,0,0-3.17,1.58,3.32,3.32,0,0,1,.71-.63,10,10,0,0,1,2.35-1.26,11.11,11.11,0,0,1,4-.72,10.94,10.94,0,0,1,5,1.2l-.38.17a22.47,22.47,0,0,1,1.84-4.8,13.3,13.3,0,0,1,4.7-5.15,9.76,9.76,0,0,1,5.52-1.37,7.71,7.71,0,0,1,3.67,1.13,5.38,5.38,0,0,1,.82.65C175.47,120.79,175.55,120.88,175.54,120.9Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 161.3px 125.133px;"
                                                id="el4gpvr7ff8q7" class="animable"></path>
                                            <path
                                                d="M186.77,123.61s.59-.16,1.23.55a2.18,2.18,0,0,1,.49,1.56,2.43,2.43,0,0,1-1.24,1.77,3.53,3.53,0,0,1-2.6.36,7.4,7.4,0,0,1-2.68-1.3,26.22,26.22,0,0,0-2.62-1.79,10.62,10.62,0,0,0-3.15-1.11,13.36,13.36,0,0,0-6.44.44,17.62,17.62,0,0,0-4.76,2.42,46.35,46.35,0,0,0-3.81,3.22,5.42,5.42,0,0,1,.85-1.06,20.83,20.83,0,0,1,2.73-2.47,16.94,16.94,0,0,1,4.83-2.58,13.42,13.42,0,0,1,6.7-.5,11.14,11.14,0,0,1,3.31,1.17,24.63,24.63,0,0,1,2.65,1.86,7.24,7.24,0,0,0,2.49,1.26,3.12,3.12,0,0,0,2.31-.25,2.12,2.12,0,0,0,1.13-1.48,1.93,1.93,0,0,0-.36-1.39A1.86,1.86,0,0,0,186.77,123.61Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 174.844px 126.318px;"
                                                id="el3fysemqf0xh" class="animable"></path>
                                            <path
                                                d="M126.69,188l-19.08,32c-2.14,3.74-4.11,7.72-6,11.85a13.26,13.26,0,0,0,2,12.41l-.54-.78a11.16,11.16,0,0,0,8.67,4.14h.5a11.14,11.14,0,0,0,10.21-6.7l6.13-9.3Z"
                                                style="fill: rgb(94, 128, 183); transform-origin: 114.729px 217.81px;"
                                                id="elggme546yg2d" class="animable"></path>
                                            <path
                                                d="M184.26,181.88c-5.12-2.62-10.18-3.21-15.7-3.37-6.42-.19-15.48-1.09-22.41-.35,0,0-19.72,1.46-21.09,15l2.69,63.5-4.52,26.9,63.23,1.91L186,253.71c.78-16.51-.88-39.9-.88-39.9,1-8.88,5.83-12.87,6.52-18.65C192.25,190.06,188.83,184.21,184.26,181.88Z"
                                                style="fill: rgb(94, 128, 183); transform-origin: 157.47px 231.671px;"
                                                id="eldctva6cpmkk" class="animable"></path>
                                            <path
                                                d="M166.44,257.55a5.07,5.07,0,0,1-.93.88,20.49,20.49,0,0,1-2.88,2,23,23,0,0,1-22.21.39,20.7,20.7,0,0,1-2.95-1.87,5.46,5.46,0,0,1-1-.85c.06-.09,1.46,1.1,4.08,2.38a23.81,23.81,0,0,0,21.85-.39C165,258.7,166.37,257.47,166.44,257.55Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 151.455px 260.517px;"
                                                id="el3jglybxcgjn" class="animable"></path>
                                            <path
                                                d="M125,193.86a2.87,2.87,0,0,1,.07.62c0,.47.07,1.05.11,1.78.07,1.61.18,3.82.3,6.52.24,5.58.55,13.17.9,21.55s.73,16,1,21.54c.14,2.7.25,4.91.33,6.52,0,.73.06,1.31.08,1.78a2.71,2.71,0,0,1,0,.62,2.79,2.79,0,0,1-.1-.61c-.05-.47-.11-1.05-.18-1.77-.15-1.54-.31-3.77-.5-6.52-.38-5.51-.78-13.12-1.14-21.54s-.6-16-.74-21.55c0-2.71-.1-4.92-.13-6.54,0-.72,0-1.31,0-1.77A2.83,2.83,0,0,1,125,193.86Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 126.395px 224.325px;"
                                                id="eladubn7npz0p" class="animable"></path>
                                            <path
                                                d="M121,197.23a1.79,1.79,0,0,1-.22.49l-.71,1.37c-.64,1.18-1.59,2.87-2.81,4.93-2.4,4.15-6,9.71-9.65,16-1.83,3.16-3.37,6.28-4.71,9.13a16.83,16.83,0,0,0-1.84,8,12.94,12.94,0,0,0,1.47,5.36c.62,1.17,1.14,1.71,1.09,1.75a2.58,2.58,0,0,1-.38-.38,9.71,9.71,0,0,1-.9-1.27,12.43,12.43,0,0,1-1.66-5.44,16.86,16.86,0,0,1,1.76-8.24c1.33-2.89,2.86-6,4.7-9.2,3.66-6.34,7.31-11.85,9.79-16,1.22-2,2.22-3.62,2.95-4.84.33-.52.59-1,.81-1.31S121,197.22,121,197.23Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 110.833px 220.744px;"
                                                id="elkd2nskc4kwl" class="animable"></path>
                                            <path
                                                d="M237.3,214.66l-14.63-9.57-9.24,16s-12.8-17.79-18.61-28.21c-5.36-9.6-12.28-12.18-15.62-12.88a1.48,1.48,0,0,0-1.77,1.62l5,34.6c.64,1.8,11.2,17.11,17.1,24.81,9.85,12.86,24.36,4.63,28.34-4.37C231.08,229.51,236,218.66,237.3,214.66Z"
                                                style="fill: rgb(94, 128, 183); transform-origin: 207.36px 213.821px;"
                                                id="ellb30xh6ojj" class="animable"></path>
                                            <path
                                                d="M217.64,235.52a9.82,9.82,0,0,1-.28-2.28,43.5,43.5,0,0,0-.71-5.45,18,18,0,0,0-1.87-5.11c-.68-1.21-1.27-1.87-1.2-1.93a5.44,5.44,0,0,1,1.53,1.73,15.41,15.41,0,0,1,2.07,5.2,28.84,28.84,0,0,1,.56,5.54A9.22,9.22,0,0,1,217.64,235.52Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 215.673px 228.135px;"
                                                id="el2704w02lrt4" class="animable"></path>
                                            <path
                                                d="M221.92,228.37c-.09,0-.16-.74-.52-1.87a10.29,10.29,0,0,0-2.34-3.92,6.1,6.1,0,0,0-3.89-2.13,5.73,5.73,0,0,0-1.85.32c-.06,0,.55-.66,1.86-.7a6,6,0,0,1,4.27,2.13,9.26,9.26,0,0,1,2.32,4.19A4.23,4.23,0,0,1,221.92,228.37Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 217.645px 224.22px;"
                                                id="elbm05yttaccm" class="animable"></path>
                                            <path
                                                d="M178.25,184.27a2.25,2.25,0,0,1-.36.4l-.45.46c-.16.21-.35.43-.56.68a14.32,14.32,0,0,0-2.53,4.92,19.13,19.13,0,0,0-.55,8.16,18.07,18.07,0,0,0,1.25,4.68,51.76,51.76,0,0,0,2.37,4.7c3.58,6.29,7.27,11.73,9.93,15.66,1.32,1.9,2.41,3.46,3.22,4.61a20.59,20.59,0,0,1,1.16,1.71s-.14-.12-.37-.39-.56-.66-1-1.19c-.83-1-2-2.59-3.36-4.52A185.49,185.49,0,0,1,177,208.53a49.09,49.09,0,0,1-2.39-4.75A18.58,18.58,0,0,1,173.3,199a19.19,19.19,0,0,1,.69-8.35,13.69,13.69,0,0,1,2.73-4.94l.61-.65.49-.43C178.09,184.36,178.23,184.25,178.25,184.27Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 182.424px 207.259px;"
                                                id="ellwmuq3vxtg" class="animable"></path>
                                            <path
                                                d="M178.28,276.19a1.62,1.62,0,0,1-.44.19l-1.32.46c-.57.2-1.27.42-2.1.64s-1.77.52-2.82.74a71.09,71.09,0,0,1-7.47,1.37,73.35,73.35,0,0,1-18.57.06,74.67,74.67,0,0,1-7.47-1.33c-1.06-.22-2-.5-2.83-.73s-1.53-.43-2.11-.63l-1.31-.45c-.3-.1-.46-.17-.45-.19a2.64,2.64,0,0,1,.48.09l1.34.35c.58.16,1.29.35,2.13.54s1.77.45,2.83.64c2.1.46,4.63.87,7.45,1.21a85.15,85.15,0,0,0,9.23.51,87,87,0,0,0,9.22-.56c2.82-.35,5.34-.78,7.44-1.25,1.06-.2,2-.46,2.83-.66s1.54-.39,2.12-.55l1.34-.36A1.47,1.47,0,0,1,178.28,276.19Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 154.835px 278.2px;"
                                                id="elbzp5jqhb0nl" class="animable"></path>
                                            <g id="el7fwb6t0ihep">
                                                <g style="opacity: 0.3; transform-origin: 125.245px 219.25px;"
                                                    class="animable">
                                                    <polygon
                                                        points="123.82 238.91 126.67 234.48 125.18 199.59 123.82 238.91"
                                                        id="eldw27ygbzoob" class="animable"
                                                        style="transform-origin: 125.245px 219.25px;"></polygon>
                                                </g>
                                            </g>
                                            <g id="elmddr08wpgt">
                                                <g style="opacity: 0.3; transform-origin: 179.565px 213.754px;"
                                                    class="animable">
                                                    <path
                                                        d="M173.13,197.23s.09,12.71,3,17.75S186,230.9,186,230.25s-.39-9-.39-9S173.19,204.34,173.13,197.23Z"
                                                        id="el1lbmzeu3ecp" class="animable"
                                                        style="transform-origin: 179.565px 213.754px;"></path>
                                                </g>
                                            </g>
                                            <path
                                                d="M121.29,240a2.13,2.13,0,0,1-.91.27,5.49,5.49,0,0,1-2.58-.34,8.53,8.53,0,0,1-3.19-2.14,18.47,18.47,0,0,1-2.67-3.85,38.37,38.37,0,0,0-2.36-4,11.16,11.16,0,0,0-2.61-2.62,8.25,8.25,0,0,0-3.16-1.25,2.5,2.5,0,0,1,1,0,6.37,6.37,0,0,1,2.42.93,11.18,11.18,0,0,1,2.79,2.64,34.83,34.83,0,0,1,2.42,4,19.65,19.65,0,0,0,2.56,3.78,8.75,8.75,0,0,0,3,2.13A6.48,6.48,0,0,0,121.29,240Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 112.55px 233.161px;"
                                                id="elu2k8go08cl" class="animable"></path>
                                            <path
                                                d="M125.16,218.06c-.09,0-.31-.76-.92-1.88a11.76,11.76,0,0,0-7.7-5.82c-1.25-.28-2.06-.28-2.06-.37a5,5,0,0,1,2.12,0,10.81,10.81,0,0,1,8,6A5,5,0,0,1,125.16,218.06Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 119.82px 213.968px;"
                                                id="eliue4w7w3l5l" class="animable"></path>
                                            <path
                                                d="M173.36,199.33s-.69-.13-1.93-.23a16.58,16.58,0,0,0-5.22.47,31.57,31.57,0,0,0-7.26,2.9c-2.62,1.37-5.39,3.11-8.53,4.55a26,26,0,0,1-9.39,2.39,26.46,26.46,0,0,1-7.89-.73,23.32,23.32,0,0,1-5-1.84c-.57-.27-1-.54-1.27-.7s-.43-.27-.42-.29.64.3,1.78.8a26.27,26.27,0,0,0,5,1.67,27.08,27.08,0,0,0,7.77.61,26.39,26.39,0,0,0,9.21-2.38c3.09-1.42,5.87-3.14,8.52-4.5a29.58,29.58,0,0,1,7.39-2.83,15.37,15.37,0,0,1,5.33-.32,10.24,10.24,0,0,1,1.43.27A1.71,1.71,0,0,1,173.36,199.33Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 149.905px 204.127px;"
                                                id="else8xrpp4ft" class="animable"></path>
                                            <path
                                                d="M185.65,233.93a2.4,2.4,0,0,1-.57.19,14.93,14.93,0,0,1-1.7.42,27.14,27.14,0,0,1-6.39.51,48.84,48.84,0,0,1-9.42-1.32c-3.5-.8-7.26-1.95-11.21-3.11a76.68,76.68,0,0,0-11.3-2.51,34.91,34.91,0,0,0-9.4-.07,22.73,22.73,0,0,0-6.11,1.68c-1.37.6-2.1,1-2.12,1a2.34,2.34,0,0,1,.5-.34c.36-.18.84-.53,1.54-.83a21.87,21.87,0,0,1,6.14-1.86,34.51,34.51,0,0,1,9.51,0,73,73,0,0,1,11.38,2.49c4,1.16,7.71,2.32,11.18,3.14a49.6,49.6,0,0,0,9.32,1.42,29.84,29.84,0,0,0,6.35-.34C184.83,234.09,185.64,233.88,185.65,233.93Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 156.54px 231.216px;"
                                                id="elawd94yav6mu" class="animable"></path>
                                            <path
                                                d="M186,253.71a27.34,27.34,0,0,0-8.32-2.24,41.1,41.1,0,0,0-9.36.32c-3.51.48-7.33,1.28-11.36,2s-7.89,1.42-11.45,1.73a44.08,44.08,0,0,1-9.46-.06,27.26,27.26,0,0,1-6.21-1.49c-.71-.24-1.23-.53-1.59-.68a2.53,2.53,0,0,1-.54-.28c0-.05.78.29,2.2.77a30.19,30.19,0,0,0,6.18,1.31,45.35,45.35,0,0,0,9.38,0c3.52-.33,7.37-1,11.4-1.76s7.85-1.55,11.39-2a39.23,39.23,0,0,1,9.46-.22,23,23,0,0,1,6.19,1.56,14.16,14.16,0,0,1,1.57.75A2.79,2.79,0,0,1,186,253.71Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 156.855px 253.334px;"
                                                id="el61y5x3dlr79" class="animable"></path>
                                            <path
                                                d="M153.5,279.21a5.2,5.2,0,0,1-1-.63c-.62-.44-1.52-1.06-2.65-1.8a81.2,81.2,0,0,0-9.14-5.23,82.13,82.13,0,0,0-9.77-4c-1.28-.43-2.32-.75-3-1a4.62,4.62,0,0,1-1.11-.4,5.65,5.65,0,0,1,1.16.2c.75.16,1.81.44,3.11.82a65.32,65.32,0,0,1,19,9.25c1.11.78,2,1.45,2.56,1.94A5,5,0,0,1,153.5,279.21Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 140.165px 272.68px;"
                                                id="el5jda9w9d9dq" class="animable"></path>
                                            <path
                                                d="M184.28,278.87a6.51,6.51,0,0,1-2.1,1.05,15.36,15.36,0,0,1-11.16-.34,6.81,6.81,0,0,1-2-1.18,23,23,0,0,1,2.17.84,18.41,18.41,0,0,0,5.43,1,17.87,17.87,0,0,0,5.48-.71C183.43,279.17,184.24,278.79,184.28,278.87Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 176.65px 279.604px;"
                                                id="el1jrqbrl0xekj" class="animable"></path>
                                            <path
                                                d="M206.17,212.85a2.23,2.23,0,0,1-.12.89,6,6,0,0,1-1.17,2.15,10.07,10.07,0,0,1-2.81,2.28,32.43,32.43,0,0,1-4,1.8,17.16,17.16,0,0,0-3.8,2,7.79,7.79,0,0,0-2.26,2.6,5.88,5.88,0,0,0-.64,3.1,1.7,1.7,0,0,1-.2-.87,5,5,0,0,1,.51-2.4,7.8,7.8,0,0,1,2.29-2.81,16.24,16.24,0,0,1,3.9-2.09,39.78,39.78,0,0,0,4-1.74,10.67,10.67,0,0,0,2.76-2.1A7.86,7.86,0,0,0,206.17,212.85Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 198.671px 220.26px;"
                                                id="elfo1tjhauls9" class="animable"></path>
                                            <path
                                                d="M193.88,191.63a3.06,3.06,0,0,1-.17.91,6.69,6.69,0,0,1-.31,1,12.28,12.28,0,0,1-.51,1.34,20,20,0,0,1-1.8,3.28,22.82,22.82,0,0,1-3,3.48,22.24,22.24,0,0,1-3.66,2.76,19.74,19.74,0,0,1-3.38,1.6,13.1,13.1,0,0,1-1.37.43,7.19,7.19,0,0,1-1,.24,3.48,3.48,0,0,1-.92.12c0-.1,1.27-.35,3.21-1.14A22.37,22.37,0,0,0,184.2,204a22.51,22.51,0,0,0,6.49-6.11,21.2,21.2,0,0,0,1.86-3.15C193.46,192.87,193.78,191.6,193.88,191.63Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 185.82px 199.21px;"
                                                id="elz98o7jlezy" class="animable"></path>
                                            <path
                                                d="M174.63,178.51a10.07,10.07,0,0,1-1.45.65c-.94.4-2.34.9-4.09,1.45s-3.86,1.09-6.24,1.58a64,64,0,0,1-15.7,1.15,62.43,62.43,0,0,1-6.41-.65c-1.81-.29-3.26-.58-4.26-.84a8.68,8.68,0,0,1-1.53-.43,9.76,9.76,0,0,1,1.58.24c1,.19,2.46.43,4.26.66s4,.44,6.38.54a74.65,74.65,0,0,0,7.83-.13,75.62,75.62,0,0,0,7.76-1c2.36-.46,4.48-1,6.23-1.47s3.16-.94,4.12-1.28A9.71,9.71,0,0,1,174.63,178.51Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 154.79px 180.965px;"
                                                id="el0umah0998pso" class="animable"></path>
                                            <path
                                                d="M213.92,222a3.4,3.4,0,0,1,.36,1,14.64,14.64,0,0,1,.43,2.89,41.82,41.82,0,0,1-1,9.57,25.56,25.56,0,0,1-1.36,5.14,11.45,11.45,0,0,1-2.32,3.69,7.68,7.68,0,0,1-2.38,1.73,2.74,2.74,0,0,1-1,.32,10.27,10.27,0,0,0,3.13-2.3,11.68,11.68,0,0,0,2.15-3.62,27.67,27.67,0,0,0,1.29-5.06,49.2,49.2,0,0,0,1.13-9.45A34.45,34.45,0,0,0,213.92,222Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 210.681px 234.17px;"
                                                id="elh8jh60r6zea" class="animable"></path>
                                            <path
                                                d="M234,224.6c-.09,0-.56-1-1.6-2.54a20.8,20.8,0,0,0-5.06-5.08,20.54,20.54,0,0,0-6.51-3c-1.79-.46-3-.54-2.94-.63a2.2,2.2,0,0,1,.82,0,13,13,0,0,1,2.2.3,17.5,17.5,0,0,1,3.17,1,18.65,18.65,0,0,1,6.61,4.62,18.28,18.28,0,0,1,2,2.63,12.55,12.55,0,0,1,1,2A2.53,2.53,0,0,1,234,224.6Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 225.944px 218.956px;"
                                                id="elsedxsl6h9t" class="animable"></path>
                                            <g id="elesyl0ickulr">
                                                <g style="opacity: 0.3; transform-origin: 153.76px 276.522px;"
                                                    class="animable">
                                                    <path
                                                        d="M175.21,277a1.85,1.85,0,0,0,.7-2.72,3.49,3.49,0,0,0-2.88-1c-5.17.1-9.68,3.56-14.76,4.49-3.86.7-7.85-.09-11.61-1.23s-7.43-2.63-11.29-3.36a5.44,5.44,0,0,0-2.44-.06,2.13,2.13,0,0,0-1.63,1.66c-.1.81.09,1.42,1.31,1.83,0,0,12.79,3.56,22,3.42A98.14,98.14,0,0,0,175.21,277Z"
                                                        id="elqndjrqk4jf8" class="animable"
                                                        style="transform-origin: 153.76px 276.522px;"></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="freepik--Plant--inject-318" class="animable animator-hidden"
                                            style="transform-origin: 404.913px 387.798px;">
                                            <rect x="371.93" y="423.77" width="69.76" height="9.59"
                                                style="fill: rgb(38, 50, 56); transform-origin: 406.81px 428.565px;"
                                                id="elg6vrch93uu8" class="animable"></rect>
                                            <path d="M441.81,433.48h-70v-9.83h70Zm-69.76-.24h69.52v-9.35H372.05Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 406.81px 428.565px;"
                                                id="eltj05ujhv66" class="animable"></path>
                                            <polygon
                                                points="378.4 430.17 388.44 479.7 425.6 479.7 435.3 433.36 378.4 430.17"
                                                style="fill: rgb(38, 50, 56); transform-origin: 406.85px 454.935px;"
                                                id="elh1uonngm4xs" class="animable"></polygon>
                                            <polygon
                                                points="378.4 475.02 383.76 482.38 428.92 482.38 435.3 475.02 378.4 475.02"
                                                style="fill: rgb(69, 90, 100); transform-origin: 406.85px 478.7px;"
                                                id="elephu4mt2l9" class="animable"></polygon>
                                            <path
                                                d="M404.19,431.61c-.13,0-.31-22.95-.39-51.25s0-51.26.11-51.26.31,22.94.39,51.26S404.33,431.61,404.19,431.61Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 404.053px 380.355px;"
                                                id="elswwca6iblfj" class="animable"></path>
                                            <path
                                                d="M419.73,374.18a2.24,2.24,0,0,1-.18.53c-.17.39-.37.89-.63,1.49l-.45,1.07c-.15.4-.3.84-.47,1.3s-.34,1-.53,1.5-.34,1.1-.52,1.7a69.45,69.45,0,0,0-1.95,8.54A103,103,0,0,0,413.92,401a143.92,143.92,0,0,0,.55,19.51c.22,2.49.45,4.51.62,5.9.07.65.13,1.18.17,1.6a2,2,0,0,1,0,.56,2.06,2.06,0,0,1-.13-.55l-.27-1.59c-.22-1.38-.5-3.39-.77-5.88a128.6,128.6,0,0,1-.7-19.57,95.36,95.36,0,0,1,1.13-10.73,64.11,64.11,0,0,1,2.06-8.57c.2-.6.36-1.18.56-1.71l.57-1.49.51-1.29c.17-.39.35-.74.5-1.06l.71-1.45A2.41,2.41,0,0,1,419.73,374.18Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 416.507px 401.375px;"
                                                id="el0muyqp042lx" class="animable"></path>
                                            <path
                                                d="M418,355.62a4.06,4.06,0,0,1-.22.76c-.18.53-.42,1.24-.73,2.13l-.53,1.54c-.18.57-.36,1.19-.56,1.85-.41,1.33-.88,2.84-1.3,4.54-.23.84-.46,1.73-.7,2.65s-.43,1.9-.66,2.9c-.49,2-.84,4.17-1.29,6.44-.77,4.55-1.44,9.59-1.91,14.91s-.63,10.4-.7,15,0,8.79.24,12.29c.06,1.75.17,3.33.26,4.71s.17,2.58.25,3.56.13,1.69.18,2.25a4.18,4.18,0,0,1,0,.78,3.75,3.75,0,0,1-.12-.77c-.07-.56-.16-1.31-.27-2.24s-.23-2.17-.34-3.56-.25-3-.34-4.71c-.23-3.5-.33-7.67-.34-12.31s.22-9.73.67-15.06,1.16-10.39,1.95-14.95c.47-2.28.83-4.45,1.34-6.45.24-1,.46-2,.68-2.9s.5-1.81.74-2.66c.44-1.69.94-3.2,1.37-4.52.22-.66.42-1.28.6-1.85s.4-1.06.58-1.52l.81-2.11A4.53,4.53,0,0,1,418,355.62Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 413.46px 393.775px;"
                                                id="eltsxk5mvf7xj" class="animable"></path>
                                            <path
                                                d="M399.78,435.67a1.14,1.14,0,0,1,0-.27c0-.2,0-.46-.06-.79l-.21-3c-.17-2.68-.4-6.49-.7-11.18-.6-9.44-1.48-22.48-3.07-36.82-.81-7.16-1.75-14-2.73-20.14-.52-3.09-1-6-1.53-8.75s-1-5.26-1.5-7.58-1-4.39-1.38-6.22-.8-3.41-1.12-4.69l-.73-3c-.07-.31-.13-.57-.17-.77a1,1,0,0,1-.05-.27,1.1,1.1,0,0,1,.09.26c.06.2.14.45.23.76.19.7.47,1.69.81,2.93s.78,2.84,1.21,4.67,1,3.9,1.45,6.22,1.06,4.84,1.57,7.58,1,5.66,1.57,8.74c1,6.18,2,13,2.78,20.17,1.59,14.35,2.41,27.4,2.92,36.85.26,4.72.44,8.54.54,11.19,0,1.29.09,2.31.12,3,0,.32,0,.58,0,.79A1.1,1.1,0,0,1,399.78,435.67Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 393.175px 383.93px;"
                                                id="el1zjf52rw5ug" class="animable"></path>
                                            <path
                                                d="M403.62,340.13c-.3-3.25-3.58-5.7-6.85-5.73s-6.31,1.92-8.3,4.5a26,26,0,0,0-4,8.88c-2.2,7.66-3.4,15.71-2.46,23.62s4.15,15.7,9.82,21.3c.93.91,2.12,1.81,3.39,1.54a4,4,0,0,0,1.79-1.1,52.89,52.89,0,0,0,17.15-40.2c-.09-3-.48-6.14-2.15-8.64s-5.55-5.17-8.39-4.17"
                                                style="fill: rgb(94, 128, 183); transform-origin: 397.93px 364.344px;"
                                                id="el1ojh9fkby8c" class="animable"></path>
                                            <path
                                                d="M379.24,314.09l-4.6,8.33c-.1.19-.25.41-.47.43s-.42-.21-.55-.41l-12.16-18.66,2.8-1.59Z"
                                                style="fill: rgb(94, 128, 183); transform-origin: 370.35px 312.521px;"
                                                id="eljynzlndspuj" class="animable"></path>
                                            <g id="el02q6ahldgt4j">
                                                <g style="opacity: 0.2; transform-origin: 370.35px 312.521px;"
                                                    class="animable">
                                                    <path
                                                        d="M379.24,314.09l-4.6,8.33c-.1.19-.25.41-.47.43s-.42-.21-.55-.41l-12.16-18.66,2.8-1.59Z"
                                                        id="elgialoviz5ba" class="animable"
                                                        style="transform-origin: 370.35px 312.521px;"></path>
                                                </g>
                                            </g>
                                            <path
                                                d="M403.91,329.1l-41.48-24.47a2,2,0,0,1-1-1,1.93,1.93,0,0,1,.74-1.67,28.58,28.58,0,0,1,22.16-8.7,25.32,25.32,0,0,1,20,12.46c4,7.15,4.14,16.61-.45,23.4"
                                                style="fill: rgb(94, 128, 183); transform-origin: 384.376px 311.168px;"
                                                id="elt9z15gzwtjb" class="animable"></path>
                                            <path
                                                d="M368.41,296.81a2.5,2.5,0,0,1,.54-.06c.36,0,.89-.09,1.57-.08a31.59,31.59,0,0,1,5.75.46,33.51,33.51,0,0,1,8.2,2.49,33.67,33.67,0,0,1,18.65,21.8,31.81,31.81,0,0,1,1,5.68c.07.68.06,1.21.08,1.57a1.75,1.75,0,0,1,0,.54s-.09-.75-.26-2.09a34,34,0,0,0-27.74-29.65,36,36,0,0,0-5.69-.61C369.16,296.83,368.41,296.86,368.41,296.81Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 386.315px 312.939px;"
                                                id="el95fzjasyux8" class="animable"></path>
                                            <path
                                                d="M398.29,312.21a9.86,9.86,0,0,1-2.1,1c-1.32.52-3.16,1.19-5.23,1.84s-4,1.18-5.34,1.52a10.06,10.06,0,0,1-2.26.43,10.91,10.91,0,0,1,2.17-.77l5.28-1.65,5.27-1.7A10.5,10.5,0,0,1,398.29,312.21Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 390.825px 314.605px;"
                                                id="el83piqbdswaq" class="animable"></path>
                                            <path
                                                d="M391.76,294.66a17.67,17.67,0,0,1,.49,4.63,17.87,17.87,0,0,1-.25,4.65,27.63,27.63,0,0,1-.25-4.64A29.14,29.14,0,0,1,391.76,294.66Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 391.983px 299.3px;"
                                                id="elt3gunmmyxod" class="animable"></path>
                                            <path
                                                d="M362.07,304.16a19,19,0,0,1,3-1.06c1.89-.58,4.51-1.32,7.43-2s5.6-1.25,7.54-1.59a17.69,17.69,0,0,1,3.17-.42,23.17,23.17,0,0,1-3.1.77c-1.92.43-4.57,1-7.49,1.72s-5.55,1.39-7.45,1.88A22.43,22.43,0,0,1,362.07,304.16Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 372.64px 301.625px;"
                                                id="elvf6dwlduejp" class="animable"></path>
                                            <path
                                                d="M384.78,332.44c-3.57-2.71-7.34-3.24-11.81-3.06A36.09,36.09,0,0,0,360,332.71c-7,3.07-13.57,7.58-17.74,14s-5.64,14.85-2.51,21.81a3.09,3.09,0,0,0,1.42,1.72,3.35,3.35,0,0,0,2.34-.18c7.95-2.59,16-5.21,23.28-9.27s14-9.72,17.89-17.11a14.8,14.8,0,0,0,1.89-5.67,7,7,0,0,0-1.83-5.54"
                                                style="fill: rgb(94, 128, 183); transform-origin: 362.341px 349.86px;"
                                                id="eleqlmot33ai4" class="animable"></path>
                                            <path
                                                d="M384.85,331.6a3.73,3.73,0,0,1-.57.23l-1.67.57-1.2.41c-.44.15-.91.35-1.41.55-1,.4-2.18.81-3.41,1.41l-1.95.88c-.68.32-1.35.7-2.07,1.07-1.44.7-2.9,1.61-4.45,2.53a75.72,75.72,0,0,0-9.42,7,77.61,77.61,0,0,0-8.13,8.45c-1.1,1.43-2.19,2.76-3.07,4.1-.46.66-.92,1.28-1.32,1.91l-1.13,1.83c-.75,1.14-1.3,2.25-1.83,3.19l-.73,1.33-.55,1.15-.78,1.58a2.71,2.71,0,0,1-.3.53,2.25,2.25,0,0,1,.21-.57l.7-1.63c.15-.35.33-.74.51-1.16s.44-.87.69-1.36c.51-1,1-2.08,1.78-3.24l1.11-1.85c.39-.64.85-1.27,1.3-1.95.87-1.35,1.95-2.7,3.06-4.14a67.85,67.85,0,0,1,17.66-15.54c1.57-.92,3.05-1.81,4.5-2.51.73-.36,1.41-.74,2.1-1l2-.87c1.25-.58,2.43-1,3.45-1.35l1.43-.51,1.22-.36,1.7-.49A2.74,2.74,0,0,1,384.85,331.6Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 362.855px 350.96px;"
                                                id="elgitutx3l00h" class="animable"></path>
                                            <path
                                                d="M357,346.69a83.89,83.89,0,0,1-8.67,2.79,82,82,0,0,1-8.82,2.32,84.62,84.62,0,0,1,8.68-2.79A82.91,82.91,0,0,1,357,346.69Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 348.255px 349.245px;"
                                                id="el7w5brycz54e" class="animable"></path>
                                            <path
                                                d="M356.63,365.84a13.27,13.27,0,0,1-.19-2.71c-.05-1.67-.06-4,0-6.53s.21-4.86.35-6.53a14.65,14.65,0,0,1,.34-2.68,15.21,15.21,0,0,1,0,2.7c0,1.84-.12,4.06-.2,6.52s-.12,4.69-.16,6.52A16.52,16.52,0,0,1,356.63,365.84Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 356.794px 356.615px;"
                                                id="elv27o8k5cz3" class="animable"></path>
                                            <path
                                                d="M373,357.48c-.14,0-.57-4.69-1-10.49s-.62-10.51-.48-10.52.57,4.69,1,10.49S373.17,357.47,373,357.48Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 372.266px 346.975px;"
                                                id="elb5xzo0uv58p" class="animable"></path>
                                            <path
                                                d="M352.61,336a15.15,15.15,0,0,1,2.78-.09c1.72,0,4.09.07,6.7.15s5,.19,6.69.3a15.7,15.7,0,0,1,2.77.26,15,15,0,0,1-2.78.09c-1.71,0-4.08-.06-6.7-.15s-5-.19-6.69-.3A15.7,15.7,0,0,1,352.61,336Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 362.08px 336.31px;"
                                                id="elgagu150ri8m" class="animable"></path>
                                            <path
                                                d="M393.61,394.93a4.15,4.15,0,0,1-.06-.57c0-.42,0-1-.07-1.63-.06-1.41-.08-3.46,0-6s.21-5.54.51-8.88.79-7,1.46-10.8,1.51-7.41,2.36-10.65,1.76-6.12,2.59-8.51,1.54-4.32,2.09-5.63l.63-1.5a2.87,2.87,0,0,1,.25-.51,2.48,2.48,0,0,1-.15.55c-.15.4-.33.91-.55,1.53-.49,1.33-1.16,3.26-1.94,5.67s-1.63,5.29-2.48,8.52-1.63,6.82-2.31,10.61-1.15,7.44-1.49,10.76-.53,6.33-.62,8.86-.14,4.57-.14,6c0,.66,0,1.2,0,1.63A2.34,2.34,0,0,1,393.61,394.93Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 398.399px 367.59px;"
                                                id="el41jrz8tc747" class="animable"></path>
                                            <path
                                                d="M395.8,366.63a11,11,0,0,1-1.65,1.82c-1.08,1.07-2.6,2.5-4.34,4s-3.36,2.85-4.56,3.77a11.68,11.68,0,0,1-2,1.4A13.18,13.18,0,0,1,385,376l4.45-3.88,4.43-3.91A13,13,0,0,1,395.8,366.63Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 389.525px 372.125px;"
                                                id="elhxag1v4ex0c" class="animable"></path>
                                            <path
                                                d="M408.93,377.21a20.27,20.27,0,0,1-1.76-2.44l-4.1-6-4.19-5.92a19.3,19.3,0,0,1-1.67-2.5,17.11,17.11,0,0,1,2,2.29c1.15,1.46,2.69,3.52,4.31,5.85s3,4.49,4,6.08A16.2,16.2,0,0,1,408.93,377.21Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 403.07px 368.78px;"
                                                id="elzmd3zq2zh1" class="animable"></path>
                                            <path
                                                d="M402.05,344c.08.11-4.28,3.05-9.74,6.56s-9.93,6.25-10,6.13,4.29-3.05,9.74-6.55S402,343.83,402.05,344Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 392.18px 350.343px;"
                                                id="elgdznec5rld" class="animable"></path>
                                            <path
                                                d="M414.35,357.22a80.61,80.61,0,0,1-6.6-6.09,81.94,81.94,0,0,1-6.25-6.46,84.26,84.26,0,0,1,6.6,6.1A80.9,80.9,0,0,1,414.35,357.22Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 407.925px 350.945px;"
                                                id="elujbn6bf1l2f" class="animable"></path>
                                            <path
                                                d="M417.44,357l3.74-.31a18.46,18.46,0,0,0,7.56-2.31,29.84,29.84,0,0,1,3.53-1.77c4.63-1.86,9.79-1.53,14.77-1.78a61.08,61.08,0,0,0,23.5-6,2.33,2.33,0,0,0,1-.93c.77-1.4-.66-2.65-1.89-3.41-6.31-3.89-12.73-7.82-19.88-9.75s-15.27-1.6-21.37,2.6c-7.17,4.93-9.78,15-11,23.66"
                                                style="fill: rgb(94, 128, 183); transform-origin: 444.579px 343.304px;"
                                                id="elwucjbphqx1e" class="animable"></path>
                                            <path
                                                d="M471.65,343.39a4,4,0,0,1-.63-.3l-1.78-.93c-1.54-.81-3.75-2-6.55-3.34a60.83,60.83,0,0,0-10.15-3.91,33.31,33.31,0,0,0-13.14-1.07,22.47,22.47,0,0,0-12,5.15,26.61,26.61,0,0,0-6.24,8.76,73.16,73.16,0,0,0-2.72,6.83c-.27.78-.5,1.41-.66,1.89a3.57,3.57,0,0,1-.27.65,5.78,5.78,0,0,1,.17-.68l.58-1.92a59.48,59.48,0,0,1,2.58-6.91,26.43,26.43,0,0,1,6.26-9,22.72,22.72,0,0,1,12.22-5.29,33.67,33.67,0,0,1,13.34,1.11,59.27,59.27,0,0,1,10.17,4c2.79,1.39,5,2.63,6.5,3.49l1.73,1A3.07,3.07,0,0,1,471.65,343.39Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 444.58px 345.105px;"
                                                id="elz0ypcegx5oo" class="animable"></path>
                                            <path
                                                d="M462.66,348.22c-.08.11-5-3.06-10.93-7.08s-10.74-7.37-10.66-7.48,5,3,10.93,7.07S462.74,348.1,462.66,348.22Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 451.865px 340.94px;"
                                                id="el4xqxnr53upt" class="animable"></path>
                                            <path
                                                d="M458,333.19a11.69,11.69,0,0,1-3.82.76,11.55,11.55,0,0,1-3.9-.05,23.06,23.06,0,0,1,3.85-.44A22.82,22.82,0,0,1,458,333.19Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 454.14px 333.64px;"
                                                id="elhfss02gukv" class="animable"></path>
                                            <path
                                                d="M436,329.25a13.94,13.94,0,0,1-1.61,3.22,13.27,13.27,0,0,1-2,3,13.94,13.94,0,0,1,1.61-3.22A13.58,13.58,0,0,1,436,329.25Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 434.195px 332.36px;"
                                                id="els4ojdt1ne2n" class="animable"></path>
                                            <path
                                                d="M440.39,351.1a12.73,12.73,0,0,1-2.35-1.28c-1.42-.86-3.33-2.11-5.37-3.6s-3.85-2.88-5.14-3.91a15.46,15.46,0,0,1-2-1.74,13.47,13.47,0,0,1,2.24,1.46l5.22,3.79c2,1.48,3.91,2.78,5.27,3.71A15.7,15.7,0,0,1,440.39,351.1Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 432.96px 345.835px;"
                                                id="elsl24i5ixawj" class="animable"></path>
                                            <path
                                                d="M423,372.86c-3.57-.94-7.82,2.53-8.56,6.15s.62,7.32,2.21,10.65A54.28,54.28,0,0,0,431.37,409c6.39,5.1,14.4,8.36,22.57,8.31-1.51-7,.4-14.33-.44-21.45a27.89,27.89,0,0,0-24.72-24.48c-2.28-.25-4.92-.61-5.83,1.5"
                                                style="fill: rgb(94, 128, 183); transform-origin: 434.086px 394.249px;"
                                                id="ellr4unf7dva" class="animable"></path>
                                            <path
                                                d="M453.94,417.29a2,2,0,0,1-.5-.23,9.12,9.12,0,0,1-1.34-.9,13.94,13.94,0,0,1-3.53-4.71c-.57-1.11-1.2-2.31-1.82-3.64s-1.25-2.75-1.92-4.25a42.74,42.74,0,0,0-2.36-4.53,35.75,35.75,0,0,0-3.25-4.42c-2.45-2.87-5.07-5.36-7.34-7.73a50.29,50.29,0,0,1-5.6-6.72,24.71,24.71,0,0,1-2.74-5.22,15.08,15.08,0,0,1-.47-1.53,3.8,3.8,0,0,1-.12-.55c.05,0,.25.73.77,2a27.2,27.2,0,0,0,2.85,5.09,53.39,53.39,0,0,0,5.63,6.6c2.29,2.35,4.93,4.83,7.4,7.73a35.83,35.83,0,0,1,3.28,4.48,40.27,40.27,0,0,1,2.36,4.61l1.88,4.26c.6,1.32,1.22,2.53,1.77,3.64a14.36,14.36,0,0,0,3.33,4.73C453.27,416.91,454,417.25,453.94,417.29Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 438.447px 395.075px;"
                                                id="elqnzompv7a8g" class="animable"></path>
                                            <path
                                                d="M435.48,411.47a10.44,10.44,0,0,1,.33-2.41c.28-1.47.74-3.49,1.35-5.68s1.29-4.17,1.82-5.57a10.54,10.54,0,0,1,1-2.22,12.66,12.66,0,0,1-.64,2.34c-.44,1.42-1.05,3.39-1.67,5.58s-1.12,4.18-1.49,5.63A13.45,13.45,0,0,1,435.48,411.47Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 437.73px 403.53px;"
                                                id="el3m08olts67r" class="animable"></path>
                                            <path
                                                d="M453.27,394.26a15,15,0,0,1-2.52-.58c-1.54-.4-3.66-.95-6-1.49s-4.52-.94-6.08-1.24a14.63,14.63,0,0,1-2.52-.55,12,12,0,0,1,2.58.2c1.58.21,3.76.57,6.13,1.11s4.5,1.14,6,1.63A11.43,11.43,0,0,1,453.27,394.26Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 444.71px 392.327px;"
                                                id="elpm8k9wzkcg" class="animable"></path>
                                            <path
                                                d="M422.23,399.26a13.61,13.61,0,0,1,.39-2.78c.31-1.71.81-4.05,1.48-6.61s1.38-4.85,1.93-6.49a13.82,13.82,0,0,1,1-2.62,18.77,18.77,0,0,1-.69,2.72c-.47,1.67-1.13,4-1.79,6.51s-1.22,4.88-1.62,6.56A17.17,17.17,0,0,1,422.23,399.26Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 424.63px 390.01px;"
                                                id="elrmk0usl42oo" class="animable"></path>
                                            <path
                                                d="M445.08,379.26c0,.14-4.48-.23-10-.81a98.49,98.49,0,0,1-9.9-1.3c0-.13,4.47.23,9.95.81A99,99,0,0,1,445.08,379.26Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 435.13px 378.207px;"
                                                id="eluun4xor1t3i" class="animable"></path>
                                            <path
                                                d="M441.81,433.32c0,.13-15.67.24-35,.24s-35-.11-35-.24,15.66-.25,35-.25S441.81,433.18,441.81,433.32Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 406.81px 433.315px;"
                                                id="elnh7hodfhj2" class="animable"></path>
                                            <path
                                                d="M430.91,453.48c0,.14-10.56.25-23.58.25s-23.58-.11-23.58-.25,10.55-.25,23.58-.25S430.91,453.34,430.91,453.48Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 407.33px 453.48px;"
                                                id="elj9ncilu6d7e" class="animable"></path>
                                            <path
                                                d="M431.32,456.36c0,.14-10.56.25-23.58.25s-23.58-.11-23.58-.25,10.56-.25,23.58-.25S431.32,456.23,431.32,456.36Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 407.74px 456.36px;"
                                                id="elyizdo9d0ql" class="animable"></path>
                                            <path
                                                d="M431.32,451.1c0,.14-10.92.25-24.39.25s-24.39-.11-24.39-.25,10.92-.24,24.39-.24S431.32,451,431.32,451.1Z"
                                                style="fill: rgb(69, 90, 100); transform-origin: 406.93px 451.105px;"
                                                id="el2hk26z0o2vt" class="animable"></path>
                                        </g>
                                        <g id="freepik--Floor--inject-318" class="animable"
                                            style="transform-origin: 250px 482.38px;">
                                            <path
                                                d="M461.23,482.38c0,.15-94.58.26-211.22.26s-211.24-.11-211.24-.26,94.56-.26,211.24-.26S461.23,482.24,461.23,482.38Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 250px 482.38px;"
                                                id="el94afzzt0dtb" class="animable"></path>
                                        </g>
                                        <defs>
                                            <filter id="active" height="200%">
                                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate"
                                                    radius="2"></feMorphology>
                                                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK">
                                                </feFlood>
                                                <feComposite in="PINK" in2="DILATED" operator="in"
                                                    result="OUTLINE"></feComposite>
                                                <feMerge>
                                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                                </feMerge>
                                            </filter>
                                            <filter id="hover" height="200%">
                                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate"
                                                    radius="2"></feMorphology>
                                                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK">
                                                </feFlood>
                                                <feComposite in="PINK" in2="DILATED" operator="in"
                                                    result="OUTLINE"></feComposite>
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
                                <div class="text-center">
                                    <h5>¡ Debes de seleccionar una</h5>
                                    <h4>Línea !</h4>
                                </div>
                            </div>
                        @else
                            <div class="text-center">
                                <h6><strong>Maquinas</strong></h6>
                                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Total, de resultados
                                    <span class="badge text-white"
                                        style="background-color: #444444; border-radius:50%;">{{ $m_maquinas->count() }}</span>
                                </p>
                            </div>
                        @endif

                        @if ($numero_lineas == 0)
                            @php
                                $maquinas = [];
                            @endphp
                        @endif

                        <div class="row">

                            @foreach ($m_maquinas as $maquina)
                                <div class="col-md-4">
                                    <div class="card my-3">
                                        <img class="card-img-top" src="img/presentacion1.png">
                                        <div class="position-relative"
                                            style="height: 50px;overflow: hidden;margin-top: -50px;z-index:2;position: relative;">
                                            <div class="position-absolute w-100 top-0" style="z-index: 1;">
                                                <svg class="waves waves-sm" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40"
                                                    preserveAspectRatio="none" shape-rendering="auto">
                                                    <defs>
                                                        <path id="card-wave"
                                                            d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                                                        </path>
                                                    </defs>
                                                    <g class="moving-waves">
                                                        <use xlink:href="#card-wave" x="48" y="-1"
                                                            fill="rgba(255,255,255,0.30"></use>
                                                        <use xlink:href="#card-wave" x="48" y="3"
                                                            fill="rgba(255,255,255,0.35)"></use>
                                                        <use xlink:href="#card-wave" x="48" y="5"
                                                            fill="rgba(255,255,255,0.25)"></use>
                                                        <use xlink:href="#card-wave" x="48" y="8"
                                                            fill="rgba(255,255,255,0.20)"></use>
                                                        <use xlink:href="#card-wave" x="48" y="13"
                                                            fill="rgba(255,255,255,0.15)"></use>
                                                        <use xlink:href="#card-wave" x="48" y="16"
                                                            fill="rgba(255,255,255,0.99)"></use>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>

                                        <div class="card-body pt-2">
                                            <a class="card-title h6 text-sm d-block text-darker">
                                                Información:
                                            </a>
                                            <span
                                                class="text-gradient text-primary text-uppercase text-sm font-weight-bold my-0">ID:
                                                {{ $maquina->ids }}</span> <br>
                                            <span
                                                class="text-gradient text-primary text-uppercase text-sm font-weight-bold my-0">MOD:
                                                {{ $maquina->marca }}</span>

                                            <div class="author align-items-center mt-2">
                                                <img src="img/ubicacion.png" alt="..." class=" shadow w-30">
                                                <div class="name ps-1">
                                                    <span><small>Tanque:</small></span>
                                                    <span class="stats">
                                                        <small> {{ $maquina->capacidad_tanque }}ltrs.</small>
                                                    </span>
                                                </div>
                                                <div class="name ps-1">
                                                    <span><small>Min.</small></span>
                                                    <span class="stats">
                                                        <small> {{ $maquina->reco_min }}brix.</small>
                                                    </span>
                                                </div>
                                                <div class="name ps-1">
                                                    <span><small>Max.</small></span>
                                                    <span class="stats">
                                                        <small> {{ $maquina->reco_max }}brix.</small>
                                                    </span>
                                                </div>
                                            </div>

                                            <!-- Button trigger modal Refrigerante -->
                                            <button type="button"
                                                wire:click="AddRefrigerante({{ $maquina->id }})"
                                                class="btn btn-sm bg-gradient-dark w-100 border-radius-md mt-4 mb-0"
                                                data-bs-toggle="modal" data-bs-target="#AddRefrigeranteData">
                                                <small>Refrigerante</small>
                                            </button>

                                            <!-- Button trigger modal Aceites -->
                                            <button type="button"
                                                wire:click="AddRefrigerante({{ $maquina->id }})"
                                                class="btn btn-sm bg-gradient-dark w-100 border-radius-md mt-2 mb-0"
                                                data-bs-toggle="modal" data-bs-target="#AddAceite">
                                                <small>Aceites</small>
                                            </button>

                                            <!-- Button trigger modal Grasas -->
                                            <button type="button"
                                                wire:click="AddRefrigerante({{ $maquina->id }})"
                                                class="btn btn-sm bg-gradient-dark w-100 border-radius-md mt-2 mb-0"
                                                data-bs-toggle="modal" data-bs-target="#AddGrasa">
                                                <small>Grasas</small>
                                            </button>

                                            <!-- Button trigger modal Mantenimiento -->
                                            <button type="button"
                                                wire:click="AddRefrigerante({{ $maquina->id }})"
                                                class="btn btn-sm bg-gradient-dark w-100 border-radius-md mt-2 mb-2"
                                                data-bs-toggle="modal" data-bs-target="#AddMantenimiento">
                                                <small>Mantenimiento</small>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>


    <!-- Modal Calidad del Agua -->
    <div wire:ignore.self class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"
        id="AddCalidadAgua" tabindex="-1" role="dialog" aria-labelledby="calidadAgua" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="font-weight-bolder text-dark text-gradient">
                        <i class="fas fa-coins"></i> Registrar Calidad de Agua
                    </h6>
                    <a type="button" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fas fa-times"></i></a>
                </div>
                <div class="modal-body ">
                    <div class="form-group">
                        <div class="container-fluid">
                            <div class="text-center">
                                <label class="form-check-label" for="flexCheckDefault">
                                    "Registra los datos de <a
                                        class="text-dark font-weight-bolder">{{ $view_area_nombre }}</a>
                                    de forma segura."</label>
                            </div>
                            <div class="row pt-3">
                                <div class="col-md-4">
                                    <a class="text-dark font-weight-bolder text-sm">Origen del Agua</a>
                                </div>
                                <div class="col-md-8 ">
                                    <select class="form-control text-center" id="origen_agua"
                                        wire:model="origen_agua">
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
                            <div class="row pt-3">
                                <div class="col-md-4">
                                    <a class="text-dark font-weight-bolder text-sm">Dureza</a>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" step="0.01" id="dureza"
                                        class="form-control text-center" wire:model="dureza">
                                    @error('dureza')
                                        <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-md-4">
                                    <a class="text-dark font-weight-bolder text-sm">pH</a>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" step="0.01" id="ph"
                                        class="form-control text-center" wire:model="ph">
                                    @error('ph')
                                        <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-md-4">
                                    <a class="text-dark font-weight-bolder text-sm">Conductividad</a>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" step="0.01" id="conductividad"
                                        class="form-control text-center" wire:model="conductividad">
                                    @error('conductividad')
                                        <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-md-4">
                                    <a class="text-dark font-weight-bolder text-sm">Cloruros</a>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" step="0.01" id="cloruros"
                                        class="form-control text-center" wire:model="cloruros">
                                    @error('cloruros')
                                        <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-md-4">
                                    <a class="text-dark font-weight-bolder text-sm">Sulfatos</a>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" step="0.01" id="sulfatos"
                                        class="form-control text-center" wire:model="sulfatos">
                                    @error('sulfatos')
                                        <span class="text-danger" style="font-size 12px;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-center mt-2">
                                <button type="button" wire:click="storeAreaData"
                                    class="btn bg-gradient-primary btn-lg btn-rounded w-100 mt-4 mb-0">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Modal Calidad del Agua -->

    <!-- Modal Refrigerante -->
    <div wire:ignore.self class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"
        id="AddRefrigeranteData" tabindex="-1" role="dialog" aria-labelledby="AddRefrigerante"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="font-weight-bolder text-dark text-gradient">
                        <i class="fas fa-coins"></i> Registrar Datos de Refrigerante
                    </h6>
                    <a type="button" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fas fa-times"></i></a>
                </div>
                <div class="modal-body ">
                    <form id="refrigerante" wire:submit.prevent="AddRefrigeranteData">
                        <div class="form-group">
                            <div class="container-fluid">
                                <div class="text-center">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        "Registra los datos de <a
                                            class="text-dark font-weight-bolder">{{ $view_maquina_nombre }}</a>
                                        de forma segura."</label>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <a class="text-dark font-weight-bolder text-sm">Concentración inicial</a>
                                    </div>
                                    <div class="col-md-8 ">
                                        <input type="number" step="0.01" id="concentracion_ini"
                                            class="form-control text-center" wire:model="concentracion_ini">
                                        @error('concentracion_ini')
                                            <span class="text-danger"
                                                style="font-size 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <a class="text-dark font-weight-bolder text-sm">Volumen inicial</a>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" step="0.01" id="volumen_ini"
                                            class="form-control text-center" wire:model="volumen_ini">
                                        @error('volumen_ini')
                                            <span class="text-danger"
                                                style="font-size 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <a class="text-dark font-weight-bolder text-sm">Litros de recarga</a>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" step="0.01" id="litros_rec"
                                            class="form-control text-center" wire:model="litros_rec">
                                        @error('litros_rec')
                                            <span class="text-danger"
                                                style="font-size 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <a class="text-dark font-weight-bolder text-sm">Concentración recarga</a>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" step="0.01" id="concentracion_rec"
                                            class="form-control text-center" wire:model="concentracion_rec">
                                        @error('concentracion_rec')
                                            <span class="text-danger"
                                                style="font-size 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <a class="text-dark font-weight-bolder text-sm">Concentración final</a>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" step="0.01" id="concentracion_fin"
                                            class="form-control text-center" wire:model="concentracion_fin">
                                        @error('concentracion_fin')
                                            <span class="text-danger"
                                                style="font-size 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <a class="text-dark font-weight-bolder text-sm">pH</a>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" step="0.01" id="refrigerante_ph"
                                            class="form-control text-center" wire:model="refrigerante_ph">
                                        @error('refrigerante_ph')
                                            <span class="text-danger"
                                                style="font-size 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <a class="text-dark font-weight-bolder text-sm">Aroma</a>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control text-center" id="aroma"
                                            wire:model="aroma">
                                            <option selected>Elige un valor</option>
                                            <option value="Malo">Malo</option>
                                            <option value="Regular">Regular</option>
                                            <option value="Bueno">Bueno</option>
                                        </select>
                                        @error('aroma')
                                            <span class="text-danger"
                                                style="font-size 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <a class="text-dark font-weight-bolder text-sm">Aceites entrampados</a>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control text-center" id="aceites"
                                            wire:model="aceites">
                                            <option selected>Elige un valor</option>
                                            <option value="Sí">Si</option>
                                            <option value="No">No</option>
                                        </select>
                                        @error('aceites')
                                            <span class="text-danger"
                                                style="font-size 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <a class="text-dark font-weight-bolder text-sm">Color</a>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control text-center" id="color"
                                            wire:model="color">
                                            <option selected>Elige un valor</option>
                                            <option value="Beige">Beige</option>
                                            <option value="Marrón">Marrón</option>
                                            <option value="Blanco">Blanco</option>
                                            <option value="Amarillo">Amarillo</option>
                                            <option value="Amarillo claro">Amarillo claro</option>
                                            <option value="Amarillo oscuro">Amarillo oscuro</option>
                                            <option value="Bronceado">Bronceado</option>
                                            <option value="Bronceado suave">Bronceado claro</option>
                                            <option value="Bronceado oscuro">Bronceado oscuro</option>
                                            <option value="Verde">Verde</option>
                                            <option value="Verde claro">Verde claro</option>
                                            <option value="Verde oscuro">Verde oscuro</option>
                                        </select>
                                        @error('color')
                                            <span class="text-danger"
                                                style="font-size 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <a class="text-dark font-weight-bolder text-sm">Exceso de espuma</a>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control text-center" id="exceso_es"
                                            wire:model="exceso_es">
                                            <option selected>Elige un valor</option>
                                            <option value="Sí">Si</option>
                                            <option value="No">No</option>
                                        </select>
                                        @error('exceso_es')
                                            <span class="text-danger"
                                                style="font-size 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <a class="text-dark font-weight-bolder text-sm">Comentarios</a>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea placeholder="Escribe un comentario" class="form-control" rows="3" id="comentarios"
                                            wire:model="comentarios"></textarea>
                                        @error('comentarios')
                                            <span class="text-danger"
                                                style="font-size 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-center mt-2">
                                    <button type="button" wire:click="AddRefrigeranteData"
                                        class="btn bg-gradient-primary btn-lg btn-rounded w-100 mt-4 mb-0">Registrar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- End Modal Refrigerante -->

    <!-- Modal Aceites -->
    <div wire:ignore.self class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="AddAceite"
        tabindex="-1" role="dialog" aria-labelledby="AddAceite" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="font-weight-bolder text-dark text-gradient">
                        <i class="fas fa-coins"></i> Registrar Aceites agregados
                    </h6>
                    <a type="button" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fas fa-times"></i></a>
                </div>
                <div class="modal-body ">
                    <form id="aceite" wire:submit.prevent="AddAceiteData">
                        <div class="form-group">
                            <div class="container-fluid">
                                <div class="text-center">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        "Registra los datos de <a
                                            class="text-dark font-weight-bolder">{{ $view_maquina_nombre }}</a>
                                        de forma segura."</label>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <a class="text-dark font-weight-bolder text-sm">Aspecto</a>
                                    </div>
                                    <div class="col-md-8 ">
                                        <select class="form-control text-center" id="aspecto"
                                            wire:model="aspecto">
                                            <option selected>Elige un valor</option>
                                            <option value="Transparente">Transparente</option>
                                            <option value="Turbio">Turbio</option>
                                            <option value="Semitransparente">Semitransparente</option>
                                        </select>
                                        @error('aspecto')
                                            <span class="text-danger"
                                                style="font-size 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <a class="text-dark font-weight-bolder text-sm">Color</a>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control text-center" id="aceite_color"
                                            wire:model="aceite_color">
                                            <option selected>Elige un valor</option>
                                            <option value="Amarillo">Amarillo</option>
                                            <option value="Ámbar">Ámbar</option>
                                            <option value="Café">Café</option>
                                            <option value="Variantes claros">Variantes claros</option>
                                            <option value="Variantes oscuros">Variantes oscuros</option>
                                        </select>
                                        @error('aceite_color')
                                            <span class="text-danger"
                                                style="font-size 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <a class="text-dark font-weight-bolder text-sm">Aroma</a>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control text-center" id="aceite_aroma"
                                            wire:model="aceite_aroma">
                                            <option selected>Elige un valor</option>
                                            <option value="Bien">Bien</option>
                                            <option value="Dulce">Dulce</option>
                                            <option value="Aceite quemado">Aceite quemado</option>
                                        </select>
                                        @error('aceite_aroma')
                                            <span class="text-danger"
                                                style="font-size 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <a class="text-dark font-weight-bolder text-sm">Litros de recarga</a>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" step="0.01" id="acaeite_litros_rec"
                                            class="form-control text-center" wire:model="acaeite_litros_rec">
                                        @error('acaeite_litros_rec')
                                            <span class="text-danger"
                                                style="font-size 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="text-center mt-2">
                                    <button type="button" wire:click="AddAceiteData"
                                        class="btn bg-gradient-primary btn-lg btn-rounded w-100 mt-4 mb-0">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- End Modal Aceites -->

    <!-- Modal Grasas -->
    <div wire:ignore.self class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="AddGrasa"
        tabindex="-1" role="dialog" aria-labelledby="AddGrasa" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="font-weight-bolder text-dark text-gradient">
                        <i class="fas fa-coins"></i> Registrar Grasas agregados
                    </h6>
                    <a type="button" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fas fa-times"></i></a>
                </div>
                <div class="modal-body ">
                    <form id="grasa" wire:submit.prevent="AddGrasaData">
                        <div class="form-group">
                            <div class="container-fluid">
                                <div class="text-center">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        "Registra los datos de <a
                                            class="text-dark font-weight-bolder">{{ $view_maquina_nombre }}</a>
                                        de forma segura."</label>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <a class="text-dark font-weight-bolder text-sm">Litros de recarga</a>
                                    </div>
                                    <div class="col-md-8 ">
                                        <input type="number" step="0.01" id="grasa_litros_rec"
                                            class="form-control text-center" wire:model="grasa_litros_rec">
                                        @error('grasa_litros_rec')
                                            <span class="text-danger"
                                                style="font-size 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="text-center mt-2">
                                    <button type="button" wire:click="AddGrasaData"
                                        class="btn bg-gradient-primary btn-lg btn-rounded w-100 mt-4 mb-0">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- End Modal Grasas -->

    <!-- Modal Aceites -->
    <div wire:ignore.self class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false"
        id="AddMantenimiento" tabindex="-1" role="dialog" aria-labelledby="AddMantenimiento"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="font-weight-bolder text-dark text-gradient">
                        <i class="fas fa-coins"></i> Registrar Mantenimientos
                    </h6>
                    <a type="button" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fas fa-times"></i></a>
                </div>
                <div class="modal-body ">
                    <form id="mantenimiento" wire:submit.prevent="AddMantenimientoData">
                        <div class="form-group">
                            <div class="container-fluid">
                                <div class="text-center">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        "Registra los datos de <a
                                            class="text-dark font-weight-bolder">{{ $view_maquina_nombre }}</a>
                                        de forma segura."</label>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <a class="text-dark font-weight-bolder text-sm">Tipo</a>
                                    </div>
                                    <div class="col-md-8 ">
                                        <select class="form-control text-center" id="man_tipo"
                                            wire:model="man_tipo">
                                            <option selected>Elige un valor</option>
                                            <option value="Filtración">Filtración</option>
                                            <option value="Mantenimiento">Mantenimiento</option>
                                        </select>
                                        @error('man_tipo')
                                            <span class="text-danger"
                                                style="font-size 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <a class="text-dark font-weight-bolder text-sm">Litros de recarga de agua</a>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" step="0.01" id="man_litros_agua"
                                            class="form-control text-center" wire:model="man_litros_agua">
                                        @error('man_litros_agua')
                                            <span class="text-danger"
                                                style="font-size 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <a class="text-dark font-weight-bolder text-sm">Litros de recarga de
                                            concentrado</a>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" step="0.01" id="man_litros_con"
                                            class="form-control text-center" wire:model="man_litros_con">
                                        @error('man_litros_con')
                                            <span class="text-danger"
                                                style="font-size 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-md-4">
                                        <a class="text-dark font-weight-bolder text-sm">Observaciones</a>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea class="form-control" rows="3" placeholder="Escribe una observacion" style="heigh:auto;"
                                            id="man_observaciones" wire:model="man_observaciones"></textarea>
                                        @error('man_observaciones')
                                            <span class="text-danger"
                                                style="font-size 12px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="text-center mt-2">
                                    <button type="button" wire:click="AddMantenimientoData"
                                        class="btn bg-gradient-primary btn-lg btn-rounded w-100 mt-4 mb-0">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- End Modal Aceites -->
</div>




<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
</script>
<script>
    Toast.fire({
        icon: 'info',
        title: 'Asegúrate de registrar correctamente tu información'
    })
</script>

<script>
    window.addEventListener('close-modal-agua', event => {
        var myModalEl = document.getElementById('AddCalidadAgua');
        var modal = bootstrap.Modal.getInstance(myModalEl)
        modal.hide();

    });

    window.addEventListener('close-modal-refrigerante', event => {
        var myModalEl = document.getElementById('AddRefrigeranteData');
        var modal = bootstrap.Modal.getInstance(myModalEl)
        modal.hide();
    });

    window.addEventListener('close-modal-aceite', event => {
        var myModalEl = document.getElementById('AddAceite');
        var modal = bootstrap.Modal.getInstance(myModalEl)
        modal.hide();
    });

    window.addEventListener('close-modal-grasa', event => {
        var myModalEl = document.getElementById('AddGrasa');
        var modal = bootstrap.Modal.getInstance(myModalEl)
        modal.hide();
    });

    window.addEventListener('close-modal-man', event => {
        var myModalEl = document.getElementById('AddMantenimiento');
        var modal = bootstrap.Modal.getInstance(myModalEl)
        modal.hide();
    });

    window.addEventListener('add_agua', function(e) {

        let timerInterval
        Swal.fire({
            title: '¡ Guardando información !',
            text: 'Se agrego la información de calidad de agua!',
            html: 'Espera unos <b></b> milisegundos.',
            timer: 1000,
            timerProgressBar: true,
            icon: 'success',
            didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft()
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('Estaba cerrado por el temporizador')
            }
        })

    });

    window.addEventListener('add_ref', function(e) {
        let timerInterval
        Swal.fire({
            title: '¡ Guardando información !',
            html: 'Espera unos <b></b> milisegundos.',
            timer: 1000,
            timerProgressBar: true,
            icon: 'success',
            didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft()
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('Estaba cerrado por el temporizador')
            }
        })
    });

    window.addEventListener('add_aceite', function(e) {
        let timerInterval
        Swal.fire({
            title: '¡ Guardando información !',
            html: 'Espera unos <b></b> milisegundos.',
            timer: 1000,
            timerProgressBar: true,
            icon: 'success',
            didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft()
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('Estaba cerrado por el temporizador')
            }
        })
    });

    window.addEventListener('add_grasa', function(e) {
        let timerInterval
        Swal.fire({
            title: '¡ Guardando información !',
            text: 'Se agrego la información de GRASA!',
            html: 'Espera unos <b></b> milisegundos.',
            timer: 1000,
            timerProgressBar: true,
            icon: 'success',
            didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft()
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('Estaba cerrado por el temporizador')
            }
        })
    });


    window.addEventListener('add_man', function(e) {
        let timerInterval
        Swal.fire({
            title: '¡ Guardando información !',
            text: 'Se agrego la información de MANTENIMIENTO!',
            html: 'Espera unos <b></b> milisegundos.',
            timer: 1000,
            timerProgressBar: true,
            icon: 'success',
            didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft()
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('Estaba cerrado por el temporizador')
            }
        })
    });
</script>
