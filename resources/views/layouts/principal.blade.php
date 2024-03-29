<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon2.png">
    <link rel="icon" type="image/png" href="img/favicon2.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,900&display=swap" rel="stylesheet">

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="assetss/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assetss/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="assetss/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="assetss/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
    @livewireStyles
</head>

<body class="g-sidenav-show  bg-gray-100">

    <style>
        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('img/load.gif') 50% 50% no-repeat rgb(255, 255, 255);
            opacity: 100;
        }
    </style>
    <div class="loader">
    </div>

    <!-- SIDENAV -->
    @yield('templateSidenav')
    <!-- END SIDENAV -->


    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">


        <!-- NAVBAR -->
        <nav class="navbar navbar-main blur mt-4 position-sticky left-auto top-1 z-index-sticky navbar-expand-lg px-0 mx-4 shadow-blur border-radius-xl"
            id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                @yield('templatePaginacion')
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">

                    <!--    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div>
                    </div>  -->
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    </div>

                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a class="btn btn-outline-primary btn-sm mb-0 me-3" href="perfil">Mi Perfil</a>
                        </li>


                        <li class="nav-item d-xl-none px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="fas fa-stream"></i>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                                <img style="width: 30px" class="me-sm-1 rounded-circle"
                                    src="{{ asset('img/avatarr.png') }}">
                            </a>
                        </li>

                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="fas fa-sign-out-alt fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <!--<li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New message</span> from Laur
                                                </h6>
                                                <p class="text-xs text-secondary mb-0 ">
                                                    <i class="fa fa-clock me-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="../assets/img/small-logos/logo-spotify.svg"
                                                    class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New album</span> by Travis Scott
                                                </h6>
                                                <p class="text-xs text-secondary mb-0 ">
                                                    <i class="fa fa-clock me-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36"
                                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="text-xs text-secondary mb-0 ">
                                                    <i class="fa fa-clock me-1"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>-->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->


        <!-- Contenido -->
        @yield('templateBase')

        @yield('templateFooter')
        <!-- End Contenido -->


    </main>

    <!-- Barra de Cerrar Session -->

    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fas fa-sign-out-alt"></i>
        </a>

        <div class="card shadow-lg ">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Cerrar sesión</h5>
                    <p>¿Estas seguro que quieres salir <br> de la sesión?</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fas fa-times-circle"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-0 pt-0">

                <div class="w-100">
                    <svg class="animated center-block" id="freepik_stories-digital-transformation"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 550 550" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                        <style>
                            svg#freepik_stories-digital-transformation:not(.animated) .animable {
                                opacity: 0;
                            }

                            svg#freepik_stories-digital-transformation.animated #freepik--Device--inject-255 {
                                animation: 1.5s Infinite linear shake;
                                animation-delay: 0s;
                            }

                            svg#freepik_stories-digital-transformation.animated #freepik--Character--inject-255 {
                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown, 1.5s Infinite linear wind;
                                animation-delay: 0s, 1s;
                            }

                            svg#freepik_stories-digital-transformation.animated #freepik--Arrows--inject-255 {
                                animation: 1.5s Infinite linear floating;
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

                            @keyframes slideDown {
                                0% {
                                    opacity: 0;
                                    transform: translateY(-30px);
                                }

                                100% {
                                    opacity: 1;
                                    transform: translateY(0);
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
                        </style>
                        <g id="freepik--background-complete--inject-255" class="animable"
                            style="transform-origin: 252.75px 243.275px;">
                            <rect x="371.15" y="177.55" width="10.18" height="10.18"
                                style="fill: rgb(224, 224, 224); transform-origin: 376.24px 182.64px;"
                                id="ellp15qpe2338" class="animable"></rect>
                            <rect x="365.48" y="282.68" width="10.18" height="10.18"
                                style="fill: rgb(224, 224, 224); transform-origin: 370.57px 287.77px;"
                                id="elk2u5oh0snuc" class="animable"></rect>
                            <rect x="376.39" y="311.91" width="15.37" height="15.37"
                                style="fill: rgb(224, 224, 224); transform-origin: 384.075px 319.595px;"
                                id="elttbwguusf5" class="animable"></rect>
                            <rect x="124.39" y="291.61" width="15.37" height="15.37"
                                style="fill: rgb(224, 224, 224); transform-origin: 132.075px 299.295px;"
                                id="elnx5lkah9yme" class="animable"></rect>
                            <rect x="107.75" y="278.22" width="9.93" height="9.93"
                                style="fill: rgb(224, 224, 224); transform-origin: 112.715px 283.185px;"
                                id="elaukrr9ofjad" class="animable"></rect>
                            <rect x="134.8" y="338.31" width="9.93" height="9.93"
                                style="fill: rgb(224, 224, 224); transform-origin: 139.765px 343.275px;"
                                id="elbh3ddfxz4ya" class="animable"></rect>
                            <rect x="95.72" y="206.28" width="7.19" height="7.19"
                                style="fill: rgb(224, 224, 224); transform-origin: 99.315px 209.875px;"
                                id="elzoy80wc3bdc" class="animable"></rect>
                            <rect x="403.42" y="193.26" width="3.8" height="3.8"
                                style="fill: rgb(224, 224, 224); transform-origin: 405.32px 195.16px;"
                                id="eli8j6b3ipwk" class="animable"></rect>
                            <rect x="365.13" y="161.25" width="5.87" height="5.87"
                                style="fill: rgb(224, 224, 224); transform-origin: 368.065px 164.185px;"
                                id="elvxa4v17a4p" class="animable"></rect>
                            <rect x="394.92" y="277.52" width="5.87" height="5.87"
                                style="fill: rgb(224, 224, 224); transform-origin: 397.855px 280.455px;"
                                id="elckiwik25w4a" class="animable"></rect>
                            <rect x="127.09" y="185.54" width="9.98" height="9.98"
                                style="fill: rgb(224, 224, 224); transform-origin: 132.08px 190.53px;"
                                id="ell04ioqfgcuf" class="animable"></rect>
                            <path d="M35.51,182.28l34.49.58L53.2,161.25Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 52.755px 172.055px;"
                                id="el4gh04rcspi3" class="animable"></path>
                            <rect x="45.69" y="199.23" width="5.85" height="5.85"
                                style="fill: rgb(245, 245, 245); transform-origin: 48.615px 202.155px;"
                                id="elp33fq2wfsu" class="animable"></rect>
                            <rect x="51.27" y="205.63" width="5.85" height="5.85"
                                style="fill: rgb(245, 245, 245); transform-origin: 54.195px 208.555px;"
                                id="elibl6z5v6wzg" class="animable"></rect>
                            <rect x="45.69" y="213.5" width="4.49" height="4.49"
                                style="fill: rgb(245, 245, 245); transform-origin: 47.935px 215.745px;"
                                id="elxibb9zotxab" class="animable"></rect>
                            <rect x="56.54" y="200.63" width="4.49" height="4.49"
                                style="fill: rgb(245, 245, 245); transform-origin: 58.785px 202.875px;"
                                id="elobxgx73xw6" class="animable"></rect>
                            <rect x="42.48" y="206.13" width="3.21" height="3.21"
                                style="fill: rgb(245, 245, 245); transform-origin: 44.085px 207.735px;"
                                id="elv3z2f6kdr5" class="animable"></rect>
                            <path d="M55,223.64H51.25v-3.76H55Zm-3.21-.56h2.65v-2.64H51.81Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 53.125px 221.76px;"
                                id="el99ubmiw2mxi" class="animable"></path>
                            <rect x="57.19" y="211.16" width="3.21" height="3.21"
                                style="fill: rgb(245, 245, 245); transform-origin: 58.795px 212.765px;"
                                id="el5ieokcjo5ot" class="animable"></rect>
                            <path d="M60.62,179.46l-16.45.19-1.06,21.06h18ZM54.83,197h-3.2v-3.2h3.2Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 52.11px 190.085px;"
                                id="elnh0pqmlboq" class="animable"></path>
                            <path d="M43.68,389.85l55.84,1L72.31,354.65Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 71.6px 372.75px;"
                                id="el5muzuyzuqi4" class="animable"></path>
                            <rect x="60.15" y="418.22" width="9.46" height="9.78"
                                style="fill: rgb(235, 235, 235); transform-origin: 64.88px 423.11px;"
                                id="elp0ltagl1b5" class="animable"></rect>
                            <rect x="69.19" y="428.94" width="9.46" height="9.78"
                                style="fill: rgb(235, 235, 235); transform-origin: 73.92px 433.83px;"
                                id="elgw9o3lgt23t" class="animable"></rect>
                            <rect x="60.15" y="442.12" width="7.27" height="7.52"
                                style="fill: rgb(235, 235, 235); transform-origin: 63.785px 445.88px;"
                                id="el01ksgoiozhth" class="animable"></rect>
                            <rect x="77.73" y="420.57" width="7.27" height="7.52"
                                style="fill: rgb(235, 235, 235); transform-origin: 81.365px 424.33px;"
                                id="elvjeaym0sabb" class="animable"></rect>
                            <rect x="54.96" y="429.78" width="5.19" height="5.37"
                                style="fill: rgb(235, 235, 235); transform-origin: 57.555px 432.465px;"
                                id="el0rornggmnj1e" class="animable"></rect>
                            <path d="M75.26,459.09h-6.1v-6.3h6.1Zm-5.19-.93h4.28v-4.44H70.07Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 72.21px 455.94px;"
                                id="elqch1on0gj3" class="animable"></path>
                            <rect x="78.77" y="438.19" width="5.19" height="5.37"
                                style="fill: rgb(235, 235, 235); transform-origin: 81.365px 440.875px;"
                                id="eles5vg27ax6k" class="animable"></rect>
                            <path d="M84.33,385.13l-26.64.33L56,420.71H85.09ZM75,414.46H69.77V409.1H75Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 70.545px 402.92px;"
                                id="elz89j3962oae" class="animable"></path>
                            <path d="M56,76.6l57.64,1L85.58,41.45Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 84.82px 59.525px;"
                                id="el0gr807xx0p0f" class="animable"></path>
                            <rect x="73.02" y="104.92" width="9.77" height="9.77"
                                style="fill: rgb(224, 224, 224); transform-origin: 77.905px 109.805px;"
                                id="el2a0hgpmki2s" class="animable"></rect>
                            <rect x="82.35" y="115.62" width="9.77" height="9.77"
                                style="fill: rgb(224, 224, 224); transform-origin: 87.235px 120.505px;"
                                id="ely7zjt0vurxs" class="animable"></rect>
                            <rect x="73.02" y="128.78" width="7.5" height="7.5"
                                style="fill: rgb(224, 224, 224); transform-origin: 76.77px 132.53px;"
                                id="elhgnknajxzql" class="animable"></rect>
                            <rect x="91.17" y="107.27" width="7.5" height="7.5"
                                style="fill: rgb(224, 224, 224); transform-origin: 94.92px 111.02px;"
                                id="elgph8sl2r6y9" class="animable"></rect>
                            <rect x="67.66" y="116.47" width="5.36" height="5.36"
                                style="fill: rgb(224, 224, 224); transform-origin: 70.34px 119.15px;"
                                id="eljzdw1tkzuoq" class="animable"></rect>
                            <path d="M88.61,145.72H82.32v-6.29h6.29Zm-5.35-.93h4.42v-4.42H83.26Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 85.465px 142.575px;"
                                id="elp8gk6ifz1qb" class="animable"></path>
                            <rect x="92.24" y="124.86" width="5.36" height="5.36"
                                style="fill: rgb(224, 224, 224); transform-origin: 94.92px 127.54px;"
                                id="elonmqzoexpk" class="animable"></rect>
                            <path d="M98,71.89l-27.5.33-1.76,35.19H98.77Zm-9.67,29.28H83V95.81h5.36Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 83.755px 89.65px;"
                                id="el90vx61rmnbk" class="animable"></path>
                            <path d="M363,379.47l49.51.83-24.12-31Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 387.755px 364.8px;"
                                id="el0pbu09jbyltl" class="animable"></path>
                            <rect x="377.57" y="403.8" width="8.39" height="8.39"
                                style="fill: rgb(245, 245, 245); transform-origin: 381.765px 407.995px;"
                                id="elplbabes2xl" class="animable"></rect>
                            <rect x="385.58" y="412.98" width="8.39" height="8.39"
                                style="fill: rgb(245, 245, 245); transform-origin: 389.775px 417.175px;"
                                id="el3ukypc5nlve" class="animable"></rect>
                            <rect x="377.57" y="424.28" width="6.45" height="6.45"
                                style="fill: rgb(245, 245, 245); transform-origin: 380.795px 427.505px;"
                                id="elhy5mo29jq7e" class="animable"></rect>
                            <rect x="393.15" y="405.81" width="6.45" height="6.45"
                                style="fill: rgb(245, 245, 245); transform-origin: 396.375px 409.035px;"
                                id="elaku1ii1yzxj" class="animable"></rect>
                            <rect x="372.96" y="413.71" width="4.6" height="4.6"
                                style="fill: rgb(245, 245, 245); transform-origin: 375.26px 416.01px;"
                                id="el80s8c1r3ljf" class="animable"></rect>
                            <path d="M391,438.84h-5.4v-5.4H391Zm-4.6-.8h3.8v-3.8h-3.8Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 388.3px 436.14px;"
                                id="elb3rnst4heku" class="animable"></path>
                            <rect x="394.07" y="420.92" width="4.6" height="4.6"
                                style="fill: rgb(245, 245, 245); transform-origin: 396.37px 423.22px;"
                                id="el8be4ov03n9q" class="animable"></rect>
                            <path d="M399,375.42l-23.62.28-1.52,30.23h25.81Zm-8.31,25.15h-4.61V396h4.61Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 386.765px 390.675px;"
                                id="elketnowhg6b" class="animable"></path>
                            <path d="M347.13,57.63l49.51.83-24.13-31Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 371.885px 42.96px;"
                                id="eluqyccqwgbq" class="animable"></path>
                            <rect x="361.73" y="81.96" width="8.39" height="8.39"
                                style="fill: rgb(245, 245, 245); transform-origin: 365.925px 86.155px;"
                                id="elrvkqgs77g0g" class="animable"></rect>
                            <rect x="369.74" y="91.14" width="8.39" height="8.39"
                                style="fill: rgb(245, 245, 245); transform-origin: 373.935px 95.335px;"
                                id="elzw24tflswal" class="animable"></rect>
                            <rect x="361.73" y="102.44" width="6.45" height="6.45"
                                style="fill: rgb(245, 245, 245); transform-origin: 364.955px 105.665px;"
                                id="eleof1o0kxwgu" class="animable"></rect>
                            <rect x="377.32" y="83.97" width="6.45" height="6.45"
                                style="fill: rgb(245, 245, 245); transform-origin: 380.545px 87.195px;"
                                id="el12mszgfzhv" class="animable"></rect>
                            <rect x="357.13" y="91.87" width="4.6" height="4.6"
                                style="fill: rgb(245, 245, 245); transform-origin: 359.43px 94.17px;"
                                id="elcuwiohd8l3m" class="animable"></rect>
                            <path d="M375.12,117h-5.4v-5.4h5.4Zm-4.6-.8h3.8v-3.8h-3.8Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 372.42px 114.3px;"
                                id="el6qxulp2z6sn" class="animable"></path>
                            <rect x="378.24" y="99.08" width="4.6" height="4.6"
                                style="fill: rgb(245, 245, 245); transform-origin: 380.54px 101.38px;"
                                id="el0cky313e28i" class="animable"></rect>
                            <path d="M383.17,53.58l-23.62.28L358,84.09h25.82Zm-8.31,25.15h-4.6v-4.6h4.6Z"
                                style="fill: rgb(245, 245, 245); transform-origin: 370.91px 68.835px;"
                                id="el2cqf3t23avv" class="animable"></path>
                            <path d="M412.89,228.4l57.1,1-27.82-35.78Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 441.44px 211.51px;"
                                id="elutujgd7fu2" class="animable"></path>
                            <rect x="429.73" y="256.46" width="9.68" height="9.68"
                                style="fill: rgb(235, 235, 235); transform-origin: 434.57px 261.3px;"
                                id="el3ywh1w2hzbq" class="animable"></rect>
                            <rect x="438.97" y="267.06" width="9.68" height="9.68"
                                style="fill: rgb(235, 235, 235); transform-origin: 443.81px 271.9px;"
                                id="elkdc70dvdywr" class="animable"></rect>
                            <rect x="429.73" y="280.09" width="7.44" height="7.44"
                                style="fill: rgb(235, 235, 235); transform-origin: 433.45px 283.81px;"
                                id="ell75eqlravro" class="animable"></rect>
                            <rect x="447.71" y="258.78" width="7.44" height="7.44"
                                style="fill: rgb(235, 235, 235); transform-origin: 451.43px 262.5px;"
                                id="elyifn3as6n4" class="animable"></rect>
                            <rect x="424.42" y="267.9" width="5.31" height="5.31"
                                style="fill: rgb(235, 235, 235); transform-origin: 427.075px 270.555px;"
                                id="ellydxj49eidj" class="animable"></rect>
                            <path d="M445.18,296.88H439v-6.23h6.23Zm-5.31-.92h4.39v-4.39h-4.39Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 442.115px 293.765px;"
                                id="elufazz6vy3i" class="animable"></path>
                            <rect x="448.77" y="276.21" width="5.31" height="5.31"
                                style="fill: rgb(235, 235, 235); transform-origin: 451.425px 278.865px;"
                                id="el36r7lu68b2f" class="animable"></rect>
                            <path d="M454.46,223.73l-27.24.33-1.75,34.86h29.77Zm-9.58,29h-5.31v-5.31h5.31Z"
                                style="fill: rgb(235, 235, 235); transform-origin: 440.355px 241.325px;"
                                id="el9mczzsf2t3g" class="animable"></path>
                        </g>
                        <g id="freepik--Table--inject-255" class="animable"
                            style="transform-origin: 257.48px 481.38px;">
                            <path
                                d="M476.48,481.38c0,.15-98,.26-219,.26s-219-.11-219-.26,98-.26,219-.26S476.48,481.24,476.48,481.38Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 257.48px 481.38px;" id="elv4h8y515ix8"
                                class="animable"></path>
                        </g>
                        <g id="freepik--Device--inject-255" class="animable"
                            style="transform-origin: 243.63px 246.485px;">
                            <path
                                d="M317,481.38l-136-.07c-16.36,0-29.62-12.66-29.61-28.25l.06-325c0-15.6,13.28-28.25,29.65-28.24l136,.08c16.36,0,29.62,12.65,29.61,28.24l-.06,325C346.61,468.75,333.34,481.39,317,481.38Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 249.05px 290.6px;" id="elrnpjbvccht"
                                class="animable"></path>
                            <path
                                d="M316,111.33H289.65l-77,0H180.26c-11.46,0-20.76,8.84-20.76,19.77l-.07,317.22c0,10.92,9.29,19.78,20.74,19.78l135.77.08c11.46,0,20.76-8.85,20.76-19.77l.07-317.23C336.77,120.19,327.49,111.34,316,111.33Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 248.1px 289.755px;"
                                id="elo4syp1kk63l" class="animable"></path>
                            <rect x="297.06" y="139.41" width="8.98" height="8.18"
                                style="fill: rgb(94, 128, 183); transform-origin: 301.55px 143.5px;"
                                id="el6usgtd5ata3" class="animable"></rect>
                            <rect x="205.34" y="138.65" width="3.78" height="2.98"
                                style="fill: rgb(94, 128, 183); transform-origin: 207.23px 140.14px;"
                                id="el0puupwkogdcf" class="animable"></rect>
                            <rect x="293.32" y="133.14" width="3.78" height="2.98"
                                style="fill: rgb(94, 128, 183); transform-origin: 295.21px 134.63px;"
                                id="elv4j9hzyxupm" class="animable"></rect>
                            <rect x="260.85" y="118" width="5.76" height="5.33"
                                style="fill: rgb(94, 128, 183); transform-origin: 263.73px 120.665px;"
                                id="elfxxb1z2ux54" class="animable"></rect>
                            <rect x="195.36" y="147.73" width="11.21" height="9.88"
                                style="fill: rgb(94, 128, 183); transform-origin: 200.965px 152.67px;"
                                id="el0w6ekgog3gxp" class="animable"></rect>
                            <rect x="239.66" y="126.01" width="3.61" height="2.98"
                                style="fill: rgb(94, 128, 183); transform-origin: 241.465px 127.5px;"
                                id="eli4gvxceyrto" class="animable"></rect>
                            <polygon points="288.5 133.19 216.78 133.19 215.95 294.96 288.5 294.96 288.5 133.19"
                                style="fill: rgb(94, 128, 183); transform-origin: 252.225px 214.075px;"
                                id="elnydjsmguei" class="animable"></polygon>
                            <rect x="248.04" y="131.67" width="7.8" height="6.44"
                                style="fill: rgb(255, 255, 255); transform-origin: 251.94px 134.89px;"
                                id="elow41e70abje" class="animable"></rect>
                            <rect x="270.72" y="131.77" width="7.49" height="10.6"
                                style="fill: rgb(255, 255, 255); transform-origin: 274.465px 137.07px;"
                                id="elktn3a86vnt" class="animable"></rect>
                            <rect x="279.44" y="131.61" width="4.95" height="8.94"
                                style="fill: rgb(255, 255, 255); transform-origin: 281.915px 136.08px;"
                                id="eld07xpeyyeh4" class="animable"></rect>
                            <rect x="217.88" y="132.1" width="6.69" height="9.53"
                                style="fill: rgb(255, 255, 255); transform-origin: 221.225px 136.865px;"
                                id="elqfvb9ktmzm" class="animable"></rect>
                            <rect x="231.52" y="132.75" width="3.64" height="6.66"
                                style="fill: rgb(255, 255, 255); transform-origin: 233.34px 136.08px;"
                                id="elo4urw08h66k" class="animable"></rect>
                            <rect x="259.83" y="129.16" width="7.11" height="5.86"
                                style="fill: rgb(94, 128, 183); transform-origin: 263.385px 132.09px;"
                                id="elg8o3b130loe" class="animable"></rect>
                            <path d="M249.89,88.69a3,3,0,1,1-3-3.06A3,3,0,0,1,249.89,88.69Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 246.891px 88.63px;"
                                id="el9alqf56vd1b" class="animable"></path>
                            <ellipse cx="189.96" cy="75.7" rx="3.02" ry="3.06"
                                style="fill: rgb(94, 128, 183); transform-origin: 189.96px 75.7px;" id="el52zfaf8rwkt"
                                class="animable"></ellipse>
                            <path
                                d="M217.4,134.92l-1,0,.8-51.66H182.34l.8-.84c.23-.24,5.64-6,6.91-6.88l.59.8c-.83.62-3.92,3.78-6,5.92h33.55Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 200.265px 105.23px;"
                                id="elnk3b14jl21k" class="animable"></path>
                            <path d="M199.19,69.41a3,3,0,1,1-3-2.8A2.91,2.91,0,0,1,199.19,69.41Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 196.197px 69.6093px;"
                                id="elgxyvt09p4h" class="animable"></path>
                            <path d="M204.77,62.38a3,3,0,1,1-3-2.8A2.91,2.91,0,0,1,204.77,62.38Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 201.777px 62.5793px;"
                                id="elfohjgqiieca" class="animable"></path>
                            <ellipse cx="222.32" cy="46.03" rx="2.59" ry="2.8"
                                style="fill: rgb(94, 128, 183); transform-origin: 222.32px 46.03px;" id="elnfvs9kxajz"
                                class="animable"></ellipse>
                            <path d="M249.6,48.87a2.78,2.78,0,1,1-2.78-2.8A2.8,2.8,0,0,1,249.6,48.87Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 246.82px 48.85px;"
                                id="elpat1nc1976h" class="animable"></path>
                            <path d="M255.35,26a2.77,2.77,0,1,1-2.77-2.8A2.79,2.79,0,0,1,255.35,26Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 252.58px 25.97px;" id="el6o9c1ewiwc"
                                class="animable"></path>
                            <ellipse cx="270.03" cy="30.76" rx="2.71" ry="2.8"
                                style="fill: rgb(94, 128, 183); transform-origin: 270.03px 30.76px;" id="elef3rdv3zyk"
                                class="animable"></ellipse>
                            <path d="M299,56.73a2.6,2.6,0,1,1-2.6-2.81A2.7,2.7,0,0,1,299,56.73Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 296.405px 56.52px;"
                                id="el9bq4jrgjq49" class="animable"></path>
                            <path d="M260.06,63.57a2.7,2.7,0,1,1-2.7-2.8A2.75,2.75,0,0,1,260.06,63.57Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 257.361px 63.47px;"
                                id="el7zl8lm2g5iy" class="animable"></path>
                            <path d="M272.06,62.65a2.7,2.7,0,1,1-2.69-2.81A2.74,2.74,0,0,1,272.06,62.65Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 269.362px 62.54px;"
                                id="elasah7v1l1y" class="animable"></path>
                            <ellipse cx="305.21" cy="66.8" rx="2.59" ry="2.8"
                                style="fill: rgb(94, 128, 183); transform-origin: 305.21px 66.8px;" id="el5op0ohrwua"
                                class="animable"></ellipse>
                            <path d="M263.57,20a2.77,2.77,0,1,1-2.76-2.8A2.79,2.79,0,0,1,263.57,20Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 260.8px 19.97px;" id="el5m5zyqx6d6d"
                                class="animable"></path>
                            <path
                                d="M236.19,138.91h-1V106c-.84-.63-5.12-3.21-7.79-4.8l-.25-.14V75.67l-19.88-.23-9-6.12.57-.83,8.71,6,20.57.23v25.81c8,4.77,8,4.93,8,5.29Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 217.23px 103.7px;"
                                id="el6ch2zt7rkd8" class="animable"></path>
                            <path
                                d="M248.08,136.7h-1V102.59l-9.64-6.76V65.92L215.87,51.75c-4.12,3.84-10.09,9.45-10.41,9.83l-.77-.65c.45-.53,9.73-9.2,10.78-10.18l.29-.27,22.69,14.9V95.31l9.64,6.76Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 226.39px 93.59px;"
                                id="elbq4can9ojvq" class="animable"></path>
                            <polygon
                                points="247.38 89.31 246.38 89.31 246.38 58.1 260.4 49.02 260.4 22.64 261.4 22.64 261.4 49.56 247.38 58.64 247.38 89.31"
                                style="fill: rgb(94, 128, 183); transform-origin: 253.89px 55.975px;"
                                id="elkrnan5694u" class="animable"></polygon>
                            <polygon
                                points="247.32 48.87 246.32 48.87 246.32 34.89 252.08 32.04 252.08 25.96 253.08 25.96 253.08 32.66 247.32 35.51 247.32 48.87"
                                style="fill: rgb(94, 128, 183); transform-origin: 249.7px 37.415px;" id="elp222upq7bs"
                                class="animable"></polygon>
                            <polygon
                                points="256.79 137.56 255.79 137.56 255.79 99.47 263.81 92.39 263.81 87.47 257.09 81.39 257.09 65.65 258.09 65.65 258.09 80.94 264.81 87.03 264.81 92.84 256.79 99.92 256.79 137.56"
                                style="fill: rgb(94, 128, 183); transform-origin: 260.3px 101.605px;"
                                id="elrfho0qa08j" class="animable"></polygon>
                            <rect x="269.72" y="62.65" width="1" height="78.21"
                                style="fill: rgb(94, 128, 183); transform-origin: 270.22px 101.755px;"
                                id="el0wc3cxxjbn4" class="animable"></rect>
                            <polygon
                                points="279.32 142.12 278.32 142.12 278.51 74.82 291.71 66.45 305.54 66.45 305.54 67.45 292 67.45 279.51 75.38 279.32 142.12"
                                style="fill: rgb(94, 128, 183); transform-origin: 291.93px 104.285px;"
                                id="elq0cd6ep30a" class="animable"></polygon>
                            <polygon
                                points="288.6 149.48 287.6 149.48 287.6 81.72 319.24 80.91 305.87 68.69 306.54 67.96 321.75 81.85 288.6 82.69 288.6 149.48"
                                style="fill: rgb(94, 128, 183); transform-origin: 304.675px 108.72px;"
                                id="elh0h9hvsk3gm" class="animable"></polygon>
                            <path
                                d="M297,57.35l-11.81-2.18L271,40.53l0-.15c-.4-2.13-1.69-9.12-1.69-9.62h1c0,.43,1,5.87,1.64,9.3l13.83,14.19,11.5,2.13Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 283.295px 44.055px;"
                                id="elr2j6hirgrv" class="animable"></path>
                            <polygon
                                points="224.1 45.35 223.8 44.4 231.87 41.84 238.29 35.45 232.94 31.82 252.56 11.59 260.39 18.71 259.72 19.45 252.6 12.98 234.49 31.66 239.86 35.3 232.4 42.72 224.1 45.35"
                                style="fill: rgb(94, 128, 183); transform-origin: 242.095px 28.47px;"
                                id="el7pq4gycmcp" class="animable"></polygon>
                            <rect x="298.44" y="157.61" width="7.6" height="7.6"
                                style="fill: rgb(94, 128, 183); transform-origin: 302.24px 161.41px;"
                                id="elzoej9bbp58i" class="animable"></rect>
                            <path d="M191.61,145.59H183V137h8.61Zm-7.61-1h6.61V138H184Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 187.305px 141.295px;"
                                id="eli30h2amvwq" class="animable"></path>
                            <rect x="121.22" y="232.19" width="15.2" height="15.2"
                                style="fill: rgb(38, 50, 56); transform-origin: 128.82px 239.79px;" id="elmqkqwpjndx"
                                class="animable"></rect>
                            <rect x="364.28" y="234.18" width="15.2" height="15.2"
                                style="fill: rgb(38, 50, 56); transform-origin: 371.88px 241.78px;" id="elld69nzq0nk"
                                class="animable"></rect>
                            <rect x="353.18" y="203.93" width="3.8" height="3.8"
                                style="fill: rgb(38, 50, 56); transform-origin: 355.08px 205.83px;" id="elzmbqdclpfaf"
                                class="animable"></rect>
                            <rect x="310.87" y="193.23" width="7.37" height="7.37"
                                style="fill: rgb(69, 90, 100); transform-origin: 314.555px 196.915px;"
                                id="el6ji1w4knxgu" class="animable"></rect>
                            <rect x="304.54" y="186.17" width="4.5" height="4.5"
                                style="fill: rgb(69, 90, 100); transform-origin: 306.79px 188.42px;"
                                id="el794uolpi2ft" class="animable"></rect>
                            <path d="M325.11,172.26h-5.49v-5.5h5.49Zm-4.49-1h3.49v-3.5h-3.49Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 322.365px 169.51px;"
                                id="elxhni4knsos" class="animable"></path>
                            <path d="M367.56,216.15h-6.88v-6.87h6.88Zm-5.88-1h4.88v-4.87h-4.88Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 364.12px 212.715px;" id="elw70h098j6l"
                                class="animable"></path>
                            <path d="M106.48,231.53H99.61v-6.87h6.87Zm-5.87-1h4.87v-4.87h-4.87Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 103.045px 228.095px;"
                                id="el4uwwpi6hcef" class="animable"></path>
                            <rect x="175.7" y="215.96" width="9.98" height="9.98"
                                style="fill: rgb(69, 90, 100); transform-origin: 180.69px 220.95px;"
                                id="elfsc7p78q6uh" class="animable"></rect>
                            <rect x="185.67" y="199.42" width="5.07" height="5.07"
                                style="fill: rgb(69, 90, 100); transform-origin: 188.205px 201.955px;"
                                id="eldsgxjjo6r5h" class="animable"></rect>
                            <rect x="131.28" y="165.45" width="5.07" height="5.07"
                                style="fill: rgb(38, 50, 56); transform-origin: 133.815px 167.985px;" id="elr8xt157bz"
                                class="animable"></rect>
                            <rect x="382.58" y="253.33" width="5.07" height="5.07"
                                style="fill: rgb(38, 50, 56); transform-origin: 385.115px 255.865px;"
                                id="elj1g7rr9iok" class="animable"></rect>
                            <rect x="116.79" y="257.63" width="5.07" height="5.07"
                                style="fill: rgb(38, 50, 56); transform-origin: 119.325px 260.165px;"
                                id="elngappj0fqdi" class="animable"></rect>
                            <rect x="171.29" y="187.09" width="8.63" height="8.63"
                                style="fill: rgb(69, 90, 100); transform-origin: 175.605px 191.405px;"
                                id="ellxdoekeccd" class="animable"></rect>
                            <path d="M202.82,183.45H195V175.6h7.86Zm-6.86-1h5.86V176.6H196Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 198.93px 179.525px;"
                                id="elvpfkmx0k77" class="animable"></path>
                        </g>
                        <g id="freepik--Character--inject-255" class="animable animator-active"
                            style="transform-origin: 247.463px 306.65px;">
                            <polygon
                                points="213.58 271.28 170.01 292.08 178.56 399.27 177.57 468.1 312.42 468.18 311.68 408.8 315.51 384.84 333.53 292.08 282.63 269.94 272.42 263.06 221.67 263.18 213.58 271.28"
                                style="fill: rgb(224, 224, 224); transform-origin: 251.77px 365.62px;"
                                id="elrplodfgshjp" class="animable"></polygon>
                            <g id="elwgsbef64mtk">
                                <g style="opacity: 0.2; transform-origin: 248.08px 430.662px;" class="animable">
                                    <path
                                        d="M177.35,441.13c2.25,2.85,6.52,3,10.08,2.25,12-2.39,22.89-11,35-9.56,7.75.94,15.3,6,22.8,3.85,2.59-.74,4.93-2.32,7.59-2.69,3.9-.54,7.6,1.56,11.09,3.37A95.9,95.9,0,0,0,312,449l6.81-18.14-61-15.82-48.89-2.8-31.52,18.42Z"
                                        id="elaj5owp8o9q" class="animable"
                                        style="transform-origin: 248.08px 430.662px;"></path>
                                </g>
                            </g>
                            <path
                                d="M242.58,468.1c-.14,0,.59-37.12,1.64-82.89s2-82.9,2.16-82.89-.59,37.11-1.64,82.9S242.73,468.11,242.58,468.1Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 244.482px 385.21px;"
                                id="elvu7d3mt5vvn" class="animable"></path>
                            <path
                                d="M331.62,292.08h0s11.48,3.11,17.52,28.07c2.55,10.5,15.82,98,14,110.18s-20.22,24.55-47.75,20.73c-15.19-2.11-41.34-15.46-41.34-15.46l20.17-26.89H313.6l7.66-5.74-6.18-23.71S327.12,299.77,331.62,292.08Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 318.68px 371.923px;"
                                id="el5ry8gvza1sf" class="animable"></path>
                            <path
                                d="M349.14,404.17c-.05.09-1.45-.84-3.86-2a28.4,28.4,0,0,0-10-3,21.23,21.23,0,0,0-5.72.33l-1.26.29c-.4.11-.78.25-1.16.36a20.29,20.29,0,0,0-2,.79c-2.44,1.12-3.8,2.13-3.86,2a5.53,5.53,0,0,1,.93-.73,20.32,20.32,0,0,1,2.77-1.63,16.59,16.59,0,0,1,2.06-.86c.38-.13.77-.29,1.18-.4l1.28-.32a20.65,20.65,0,0,1,5.86-.38,26.43,26.43,0,0,1,10.11,3.15,29.41,29.41,0,0,1,2.75,1.66A4.9,4.9,0,0,1,349.14,404.17Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 335.21px 401.367px;"
                                id="elvprvspyvu9n" class="animable"></path>
                            <path
                                d="M300.82,408.8a3.4,3.4,0,0,1,.85-.07l2.37-.07,8.49-.09-.12,0,7.67-4.94-.07.06c.52-.61,1.05-1.27,1.67-1.87a23,23,0,0,1,3.62-3.06,25.47,25.47,0,0,1,11-4.29,23.76,23.76,0,0,1,5-.18c.59.05,1,.13,1.35.17a1.69,1.69,0,0,1,.47.1,16.65,16.65,0,0,1-1.83-.06,26.12,26.12,0,0,0-11.94,2.51,25.62,25.62,0,0,0-3.74,2.17,22.53,22.53,0,0,0-3.54,3c-.6.59-1.12,1.24-1.63,1.83l0,0,0,0L312.65,409l0,0h-.07l-8.49-.09-2.37-.06A5.3,5.3,0,0,1,300.82,408.8Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 321.97px 401.616px;"
                                id="elrb59p8vwjp8" class="animable"></path>
                            <path
                                d="M246.38,302.32a.24.24,0,0,1,0,.14.21.21,0,0,1-.1.16.33.33,0,0,1-.26,0,4.43,4.43,0,0,1-1.33-.92,51.7,51.7,0,0,1-4.12-4.37c-3.36-3.88-7.84-9.52-12.86-16.17l.37,0a10.13,10.13,0,0,0-1.21,2.19c-.37.8-.71,1.64-1,2.48-.67,1.7-1.31,3.46-1.93,5.25-1.06,3.12-2.08,6.18-2.77,9.09l-.15.62-.32-.54a52.72,52.72,0,0,1-6.85-20.42,49.7,49.7,0,0,1-.35-6.31c0-.74,0-1.31.07-1.69a3.86,3.86,0,0,1,.05-.59,2.52,2.52,0,0,1,0,.59c0,.38,0,.95,0,1.69a57.09,57.09,0,0,0,.49,6.27,53.84,53.84,0,0,0,7,20.2l-.47.07c.7-3,1.71-6,2.78-9.15.62-1.8,1.26-3.57,1.94-5.27.34-.85.68-1.68,1.05-2.5a10,10,0,0,1,1.33-2.34l.19-.22.19.25c5,6.67,9.42,12.34,12.7,16.26,1.64,2,3,3.49,4,4.45a4.9,4.9,0,0,0,1.24,1c.17.07.28,0,.3-.1S246.36,302.31,246.38,302.32Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 229.944px 286.943px;"
                                id="elmgltic5vw6" class="animable"></path>
                            <path
                                d="M282.63,269.94a2.24,2.24,0,0,1,.05.54c0,.36,0,.88,0,1.57,0,1.36-.08,3.36-.3,5.84-.4,5-1.58,11.9-2.83,19.86l-.09.59-.36-.48c-1.79-2.37-3.52-5-5.31-7.78-1.4-2.14-2.78-4.22-4.23-6.15l.35.05c-6.91,5-13.12,9.17-17.17,12.67-2.05,1.7-3.64,3.13-4.72,4.13l-1.23,1.15a3.84,3.84,0,0,1-.44.39s.11-.17.37-.45.66-.7,1.18-1.22c1-1,2.6-2.51,4.63-4.26,4-3.57,10.18-7.81,17.09-12.83l.2-.14.15.2c1.46,1.94,2.86,4,4.26,6.18,1.78,2.74,3.5,5.4,5.27,7.76l-.45.11c1.29-8,2.52-14.85,3-19.81.26-2.47.4-4.45.45-5.82,0-.68,0-1.2,0-1.56A2.77,2.77,0,0,1,282.63,269.94Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 264.515px 286.13px;"
                                id="elo5k51vlgfve" class="animable"></path>
                            <path
                                d="M308.55,345.48c0,.14-7.93-.47-17.68-1.36s-17.65-1.73-17.63-1.88,7.92.47,17.68,1.36S308.56,345.33,308.55,345.48Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 290.895px 343.859px;"
                                id="elz48x5bcp1cl" class="animable"></path>
                            <path
                                d="M220.93,224.92c-2.91-8.59-5.78-17.24-7.17-26.19s-1.22-18.31,1.83-26.84c.46-1.3,4.44-10,5.8-9.87,1,.09-1.43,8.18-.93,9,4.82,8,6.22,17.76,5.58,27.11a122.92,122.92,0,0,1-5.11,26.77"
                                style="fill: rgb(38, 50, 56); transform-origin: 219.555px 193.469px;"
                                id="elchqzmbv35ge" class="animable"></path>
                            <path
                                d="M294.72,186.83a40.64,40.64,0,0,0-38.93-39l-2.1-.08c-22.73.39-35.09,19.9-34.08,42.61l2.12,75.16,24.62,34.12,26-28.25c0-6.4,0-8.33.05-8.33s21.93-2.49,23.1-24.27C296.09,228.27,295.49,206.51,294.72,186.83Z"
                                style="fill: rgb(255, 191, 157); transform-origin: 257.645px 223.695px;"
                                id="elpzw61irgi4o" class="animable"></path>
                            <path d="M272.42,263.06s-13.77.24-28-9.56c0,0,6.15,16.66,28,15.6Z"
                                style="fill: rgb(255, 154, 108); transform-origin: 258.42px 261.324px;"
                                id="elkhaqthba5q9" class="animable"></path>
                            <path
                                d="M284.55,206.33a3.12,3.12,0,0,1-3.14,3,3,3,0,0,1-3.09-2.94,3.11,3.11,0,0,1,3.13-3A3,3,0,0,1,284.55,206.33Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 281.435px 206.36px;"
                                id="eljd4bixcplvd" class="animable"></path>
                            <path
                                d="M289.69,196.26c-.41.39-2.69-1.45-6-1.58s-5.87,1.44-6.22,1c-.17-.19.25-.91,1.36-1.64a8.58,8.58,0,0,1,5-1.32,8.22,8.22,0,0,1,4.78,1.77C289.57,195.34,289.88,196.09,289.69,196.26Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 283.588px 194.512px;"
                                id="elexl63hj845i" class="animable"></path>
                            <path
                                d="M254.7,206.33a3.11,3.11,0,0,1-3.13,3,3,3,0,0,1-3.09-2.94,3.11,3.11,0,0,1,3.12-3A3,3,0,0,1,254.7,206.33Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 251.59px 206.36px;" id="el3ilfn6di1zg"
                                class="animable"></path>
                            <path
                                d="M257.55,196.26c-.41.39-2.69-1.45-6-1.58s-5.87,1.44-6.22,1c-.17-.19.25-.91,1.36-1.64a8.58,8.58,0,0,1,5-1.32,8.22,8.22,0,0,1,4.78,1.77C257.42,195.34,257.74,196.09,257.55,196.26Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 251.448px 194.512px;"
                                id="el5zhqgmeivg" class="animable"></path>
                            <path
                                d="M267.78,221.91c0-.19,2.09-.47,5.48-.76.86-.05,1.68-.19,1.84-.77a4.32,4.32,0,0,0-.46-2.55l-2.26-6.62c-3.13-9.41-5.36-17.14-5-17.26s3.23,7.4,6.35,16.82c.76,2.32,1.47,4.53,2.16,6.65a5,5,0,0,1,.3,3.37,2.13,2.13,0,0,1-1.46,1.19,5.65,5.65,0,0,1-1.46.15C269.89,222.17,267.79,222.1,267.78,221.91Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 271.848px 208.045px;"
                                id="el35slysq15kl" class="animable"></path>
                            <path
                                d="M257.54,188.9c-.45.85-3.3-.12-6.82-.29s-6.49.37-6.8-.51c-.13-.43.51-1.18,1.79-1.84a10.47,10.47,0,0,1,5.3-1,10.16,10.16,0,0,1,5.08,1.64C257.24,187.68,257.75,188.5,257.54,188.9Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 250.745px 187.238px;"
                                id="eltcluuv38sog" class="animable"></path>
                            <path
                                d="M290.25,183.63c-.72.74-3.43-.12-6.71-.25s-6.07.36-6.68-.46c-.27-.39.18-1.14,1.42-1.83a11.21,11.21,0,0,1,10.79.57C290.2,182.47,290.56,183.26,290.25,183.63Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 283.57px 181.95px;" id="el83667o48rvw"
                                class="animable"></path>
                            <path
                                d="M220.73,206.56c-.37-.17-14.79-5-14.93,9.87s14.86,12,14.89,11.55S220.73,206.56,220.73,206.56Z"
                                style="fill: rgb(255, 191, 157); transform-origin: 213.265px 217.087px;"
                                id="el24lrr6lbi3b" class="animable"></path>
                            <path
                                d="M216.19,222.29c-.07,0-.26.18-.7.38a2.62,2.62,0,0,1-2,0c-1.57-.59-2.87-3.11-2.92-5.8a8.52,8.52,0,0,1,.77-3.71,3,3,0,0,1,2-2,1.34,1.34,0,0,1,1.53.73c.19.42.09.72.17.74s.33-.25.21-.86a1.65,1.65,0,0,0-.58-.94,2,2,0,0,0-1.43-.4,3.67,3.67,0,0,0-2.74,2.29,8.87,8.87,0,0,0-.94,4.15c.07,3,1.58,5.83,3.73,6.48a2.82,2.82,0,0,0,2.38-.37C216.16,222.65,216.24,222.32,216.19,222.29Z"
                                style="fill: rgb(255, 154, 108); transform-origin: 212.881px 216.942px;"
                                id="elfzqpu14gxfn" class="animable"></path>
                            <path
                                d="M285.08,162.11c2.41-1.33-4.83-9.15-10.76-11.84-9-4.08-22.65-6.59-30.92-4.25-10,2.82-18.23,7.77-23.23,16.82s-6.88,19.61-6.6,30c.09,3.15.41,6.44,2.1,9.11,2.08,3.3,6.07,5.38,5.9,9.93a6.24,6.24,0,0,0,1.54,4.55c2.73,2.91,6.07.18,7.61-2.55,3.28-5.84,3.65-12.82,3.94-19.51.21-4.76.4-9.62-.93-14.19-.73-2.49-1.9-4.84-2.49-7.36s-.52-5.39,1.06-7.45a9,9,0,0,1,1.21-1.22,15.54,15.54,0,0,1,15.43-2.93c8.4,3,22.74,7.42,26.49,4.57,5.4-4.09,6.69-6.77,6.69-6.77Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 249.549px 181.4px;" id="eldi8xl48tff"
                                class="animable"></path>
                            <path
                                d="M257.26,224c.52,0,.54,3.39,3.48,5.81s6.59,2,6.62,2.5c.05.22-.81.67-2.35.72a8.53,8.53,0,0,1-5.53-1.89,7.44,7.44,0,0,1-2.69-4.88C256.65,224.81,257,224,257.26,224Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 262.06px 228.516px;"
                                id="el04fjw3yq93tc" class="animable"></path>
                            <path
                                d="M170,292.08s-12.88,10.42-16.21,25.69-21.62,85.54-22.08,95.9,0,32.43,19.15,32.88,67.62-21.89,67.62-21.89l-9.25-28-30.22.83Z"
                                style="fill: rgb(224, 224, 224); transform-origin: 175.047px 369.318px;"
                                id="elphouzbr0vx" class="animable"></path>
                            <path
                                d="M209.24,396.62a3.94,3.94,0,0,1-.74.1l-2.12.16-7.83.51-11.61.68-6.85.39a57.82,57.82,0,0,0-7.29.72,12.15,12.15,0,0,1-3.81,0c-1.23-.15-2.42-.37-3.59-.48a22.25,22.25,0,0,0-6.73.59,24.45,24.45,0,0,0-10.08,5.35,29.24,29.24,0,0,0-5.14,5.84c-.52.76-.89,1.37-1.13,1.79a3.46,3.46,0,0,1-.41.63,3.31,3.31,0,0,1,.32-.68,17.46,17.46,0,0,1,1.05-1.85,28.36,28.36,0,0,1,5.06-6,24.6,24.6,0,0,1,10.22-5.53,22.51,22.51,0,0,1,6.89-.64c1.2.11,2.39.33,3.61.48a12,12,0,0,0,3.64,0,56,56,0,0,1,7.37-.72l6.85-.35,11.61-.58,7.84-.34,2.13-.07A5.27,5.27,0,0,1,209.24,396.62Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 175.575px 404.754px;"
                                id="elyshg8t47qpm" class="animable"></path>
                            <path
                                d="M179.84,397.43a3.54,3.54,0,0,1-.1-.68c-.05-.51-.12-1.16-.2-2-.16-1.77-.4-4.23-.68-7.23-.59-6.11-1.5-14.53-2.53-23.84S174.45,346,174,339.85c-.25-3.06-.43-5.53-.52-7.25,0-.81-.07-1.47-.1-2a6,6,0,0,1,0-.69,2.86,2.86,0,0,1,.11.68c.05.5.11,1.15.19,2,.17,1.76.4,4.22.69,7.23.58,6.1,1.5,14.53,2.52,23.84s1.88,17.74,2.38,23.85c.25,3.06.42,5.54.52,7.25,0,.82.07,1.47.09,2A3,3,0,0,1,179.84,397.43Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 176.627px 363.67px;"
                                id="elg4gci5dotxs" class="animable"></path>
                            <path
                                d="M216.65,425.49a3.13,3.13,0,0,1-.46.29l-1.37.74c-1.19.64-2.94,1.5-5.13,2.52-4.37,2-10.52,4.66-17.43,7.21s-13.26,4.6-17.91,5.92c-2.32.67-4.21,1.15-5.52,1.47l-1.52.34a2,2,0,0,1-.54.08,2.21,2.21,0,0,1,.52-.18l1.49-.44c1.29-.37,3.17-.91,5.47-1.62,4.61-1.41,10.93-3.5,17.83-6.06s13-5.1,17.46-7.05c2.2-1,4-1.79,5.19-2.37l1.41-.66A1.84,1.84,0,0,1,216.65,425.49Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 191.71px 434.775px;"
                                id="el89ljk29rbbt" class="animable"></path>
                            <path
                                d="M325.89,314.07a.81.81,0,0,1,0,.25c0,.19,0,.43-.07.72-.07.68-.17,1.61-.29,2.78-.26,2.41-.68,5.89-1.22,10.19-1.08,8.6-2.71,20.47-4.72,33.54s-4,24.89-5.42,33.44c-.74,4.24-1.35,7.68-1.77,10.11-.21,1.16-.38,2.08-.51,2.74-.06.29-.11.53-.14.72a1,1,0,0,1-.07.24.7.7,0,0,1,0-.25c0-.2.06-.43.1-.72.1-.68.24-1.6.41-2.76.39-2.44.93-5.89,1.6-10.14,1.37-8.56,3.28-20.38,5.28-33.46S322.77,336.55,324,328c.58-4.26,1.05-7.72,1.38-10.17.16-1.16.29-2.09.39-2.76,0-.29.08-.53.11-.72A.81.81,0,0,1,325.89,314.07Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 318.784px 361.435px;"
                                id="elp1r13z91tqq" class="animable"></path>
                            <path
                                d="M325.51,451.94a2.08,2.08,0,0,1-.55,0l-1.58-.14c-1.37-.13-3.34-.39-5.77-.78a135.1,135.1,0,0,1-18.7-4.46c-3.58-1.14-7-2.37-10-3.58s-5.69-2.43-7.89-3.53c-1.11-.53-2.1-1.05-3-1.51s-1.61-.86-2.2-1.21l-1.37-.8a2.47,2.47,0,0,1-.46-.31,2.58,2.58,0,0,1,.52.22l1.41.71c.6.33,1.35.7,2.23,1.13s1.87.93,3,1.43c2.21,1.06,4.9,2.2,7.91,3.42s6.38,2.4,9.95,3.53a152.27,152.27,0,0,0,18.6,4.59c2.42.44,4.38.76,5.74.95l1.56.24A1.87,1.87,0,0,1,325.51,451.94Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 299.75px 443.789px;"
                                id="eltzbf541rq6b" class="animable"></path>
                            <g id="el703oz1jaxgp">
                                <g style="opacity: 0.2; transform-origin: 263.48px 295.235px;" class="animable">
                                    <path
                                        d="M279.29,298.24c-3.55-4.29-5.93-9.8-8.94-14.47a135.09,135.09,0,0,0-24,18.55c7-4,14-7.69,20.81-12l12.65,16.38q.39-7.94.8-15.88Z"
                                        id="elnjfmkkdfj6" class="animable"
                                        style="transform-origin: 263.48px 295.235px;"></path>
                                </g>
                            </g>
                            <g id="elxhbt5mwy7v">
                                <g style="opacity: 0.2; transform-origin: 316.185px 380.55px;" class="animable">
                                    <path d="M316.17,381.63c.15-.7.3-1.43.45-2.16l-.87,2.16Z" id="elikthe49o3m"
                                        class="animable" style="transform-origin: 316.185px 380.55px;"></path>
                                </g>
                            </g>
                            <g id="eliqh1omf3f">
                                <g style="opacity: 0.2; transform-origin: 321.835px 350.915px;" class="animable">
                                    <path
                                        d="M324.63,322.36c-2.28,17.6-4.36,39.42-8,57.11,3.5-8.77,6.91-17.61,8.84-26.84C327.55,342.63,327.84,332.05,324.63,322.36Z"
                                        id="eli585c85yqyi" class="animable"
                                        style="transform-origin: 321.835px 350.915px;"></path>
                                </g>
                            </g>
                            <path
                                d="M212.56,379.26s-6.1,3.12-7,5.64a9,9,0,0,0,0,5.2l3.3,10.85v11.29s2.65,11.47,5.17,12.64,7,1,10-3.72a35.68,35.68,0,0,0,4-8.62l5.2-21.55,1.49-11-14.12,7.28-4,5.48-3.9-6.22s3.18-3.12,2.93-5.06S212.56,379.26,212.56,379.26Z"
                                style="fill: rgb(255, 191, 157); transform-origin: 219.948px 402.373px;"
                                id="el7bkzxahp9yp" class="animable"></path>
                            <path
                                d="M209.26,387.4c0-.15.83-.14,1.78-.34s1.69-.53,1.77-.4-.61.69-1.66.91S209.23,387.53,209.26,387.4Z"
                                style="fill: rgb(255, 154, 108); transform-origin: 211.038px 387.143px;"
                                id="elgcyk1tdylo5" class="animable"></path>
                            <path
                                d="M215.64,417.25l1-45.8a6,6,0,0,1,5.73-6l78.19-1.72a6.08,6.08,0,0,1,5.81,7.63L294.65,421.2a5.91,5.91,0,0,1-5.88,4.67l-67.47-2.32A6,6,0,0,1,215.64,417.25Z"
                                style="fill: rgb(38, 50, 56); transform-origin: 261.102px 394.8px;"
                                id="el7hb5jsa4i1m" class="animable"></path>
                            <path d="M265,377.56l-.62-.1a3.16,3.16,0,1,0,.62.1Z"
                                style="fill: rgb(255, 255, 255); transform-origin: 264.189px 380.614px;"
                                id="el1eocxmzegtj" class="animable"></path>
                            <path
                                d="M298,368.87c0,.15-16.72.55-37.35.9s-37.35.53-37.36.38,16.72-.54,37.35-.9S298,368.73,298,368.87Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 260.645px 369.511px;"
                                id="elw5mx4e22dsh" class="animable"></path>
                            <path
                                d="M236.7,379.42s4.34-4.33,9.5-1.44,22.52,15.28,28.51,16.93,12,2.9,16.52,0,7.85-6.61,8.06-10.32,2.47-11.78,7.43-12l2.48,1.86s-1,12-1,17.14S303.62,404,303.62,404l-3.33,5.71L302,416s-2.07,9.5-7.23,14.46-15.32,5.16-15.32,5.16l-33-20.65-30.77-9.09s.82-4.13,5-4.34,10.95,2.58,10.95,2.58L215.64,392a4.87,4.87,0,0,1,5.78-3.72c5,.62,22.72,11,22.72,11L226,381.08s-.41-4.75,3.93-5A8.37,8.37,0,0,1,236.7,379.42Z"
                                style="fill: rgb(255, 191, 157); transform-origin: 262.42px 404.105px;"
                                id="eluumxw43gfoj" class="animable"></path>
                            <path
                                d="M262.34,399.56a5.57,5.57,0,0,1-1.12-.63c-.71-.43-1.72-1.07-3-1.88-2.47-1.62-5.88-3.9-9.5-6.6a87.24,87.24,0,0,1-8.88-7.43c-1.06-1-1.87-1.93-2.4-2.56a6.42,6.42,0,0,1-.78-1,6.2,6.2,0,0,1,.93.9c.57.59,1.42,1.44,2.5,2.43a111.2,111.2,0,0,0,8.94,7.28c3.61,2.7,7,5,9.4,6.72l2.86,2A6,6,0,0,1,262.34,399.56Z"
                                style="fill: rgb(255, 154, 108); transform-origin: 249.5px 389.51px;"
                                id="elc527qx3n8te" class="animable"></path>
                            <path
                                d="M251.38,404.07a17.28,17.28,0,0,1-4.68-2.61,17.76,17.76,0,0,1-4-3.53c.11-.11,1.94,1.42,4.34,3.11S251.45,403.94,251.38,404.07Z"
                                style="fill: rgb(255, 154, 108); transform-origin: 247.041px 400.997px;"
                                id="elpwtdrkai2c" class="animable"></path>
                            <path
                                d="M246.44,412.31a90.57,90.57,0,0,1-8.56-4.37,86.44,86.44,0,0,1-8.3-4.82,91.17,91.17,0,0,1,8.55,4.37A85.91,85.91,0,0,1,246.44,412.31Z"
                                style="fill: rgb(255, 154, 108); transform-origin: 238.01px 407.715px;"
                                id="el1az8yu4lmvy" class="animable"></path>
                        </g>
                        <g id="freepik--Arrows--inject-255" class="animable"
                            style="transform-origin: 247.375px 264.475px;">
                            <path d="M300.47,236.79l25.31.43-12.33-15.86Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 313.125px 229.29px;"
                                id="el7laz8jao2tx" class="animable"></path>
                            <rect x="308.22" y="249.23" width="4.29" height="4.29"
                                style="fill: rgb(69, 90, 100); transform-origin: 310.365px 251.375px;"
                                id="el3peznczii8t" class="animable"></rect>
                            <rect x="312.51" y="253.76" width="3.92" height="3.82"
                                style="fill: rgb(69, 90, 100); transform-origin: 314.47px 255.67px;"
                                id="elr9y4izh0jq" class="animable"></rect>
                            <rect x="308.42" y="259.19" width="3.3" height="3.3"
                                style="fill: rgb(69, 90, 100); transform-origin: 310.07px 260.84px;"
                                id="ely14g13yywk" class="animable"></rect>
                            <rect x="316.43" y="250.26" width="3.3" height="3.3"
                                style="fill: rgb(69, 90, 100); transform-origin: 318.08px 251.91px;"
                                id="eloawpsuu9wc" class="animable"></rect>
                            <rect x="305.67" y="253.76" width="2.35" height="2.35"
                                style="fill: rgb(69, 90, 100); transform-origin: 306.845px 254.935px;"
                                id="el6qvt4axj22p" class="animable"></rect>
                            <path d="M315.56,267.44h-3.35v-3.35h3.35Zm-2.35-1h1.35v-1.35h-1.35Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 313.885px 265.765px;"
                                id="elt5zpgngog9e" class="animable"></path>
                            <rect x="316.6" y="257.81" width="2.35" height="2.35"
                                style="fill: rgb(69, 90, 100); transform-origin: 317.775px 258.985px;"
                                id="el8f0ppce0867" class="animable"></rect>
                            <path d="M319.68,234.72l-13.15.15v15.45h13.19Zm-4.2,12.86h-2.35v-2.35h2.35Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 313.125px 242.52px;"
                                id="el2kv7xdgdtdu" class="animable"></path>
                            <path d="M215.45,336.23l28.25.48L229.94,319Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 229.575px 327.855px;"
                                id="elmydmul645dk" class="animable"></path>
                            <rect x="223.78" y="350.11" width="4.79" height="4.79"
                                style="fill: rgb(94, 128, 183); transform-origin: 226.175px 352.505px;"
                                id="eliub9clrk4l9" class="animable"></rect>
                            <rect x="228.35" y="355.36" width="4.79" height="4.79"
                                style="fill: rgb(94, 128, 183); transform-origin: 230.745px 357.755px;"
                                id="elytgf6c3mbn" class="animable"></rect>
                            <rect x="223.78" y="361.81" width="3.68" height="3.68"
                                style="fill: rgb(94, 128, 183); transform-origin: 225.62px 363.65px;"
                                id="el3ha7m3xyre7" class="animable"></rect>
                            <rect x="232.68" y="351.26" width="3.68" height="3.68"
                                style="fill: rgb(94, 128, 183); transform-origin: 234.52px 353.1px;"
                                id="elab0n227p2ig" class="animable"></rect>
                            <rect x="221.16" y="355.77" width="2.63" height="2.63"
                                style="fill: rgb(94, 128, 183); transform-origin: 222.475px 357.085px;"
                                id="elal1plx32bmw" class="animable"></rect>
                            <rect x="233.2" y="359.89" width="2.63" height="2.63"
                                style="fill: rgb(94, 128, 183); transform-origin: 234.515px 361.205px;"
                                id="ello67iopqt1i" class="animable"></rect>
                            <path d="M236,333.92l-13.48.16-.87,17.25H236.4Zm-4.74,14.35h-2.63v-2.62h2.63Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 229.025px 342.625px;"
                                id="eldrohvz7b3ks" class="animable"></path>
                            <path d="M168.23,265.3l41.2.69-20.07-25.82Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 188.83px 253.08px;"
                                id="elop5qz4pm2mh" class="animable"></path>
                            <rect x="180.38" y="285.55" width="6.98" height="6.98"
                                style="fill: rgb(69, 90, 100); transform-origin: 183.87px 289.04px;"
                                id="elnoo1g5a0gcl" class="animable"></rect>
                            <rect x="187.37" y="292.61" width="5.99" height="5.99"
                                style="fill: rgb(69, 90, 100); transform-origin: 190.365px 295.605px;"
                                id="elm94sk4weuon" class="animable"></rect>
                            <rect x="180.38" y="299.92" width="5.37" height="5.37"
                                style="fill: rgb(69, 90, 100); transform-origin: 183.065px 302.605px;"
                                id="eltbzmclpacr" class="animable"></rect>
                            <rect x="193.35" y="287.22" width="5.37" height="5.37"
                                style="fill: rgb(69, 90, 100); transform-origin: 196.035px 289.905px;"
                                id="el6jfqtjhzxjw" class="animable"></rect>
                            <rect x="176.55" y="293.19" width="3.83" height="3.83"
                                style="fill: rgb(69, 90, 100); transform-origin: 178.465px 295.105px;"
                                id="el9x1g8n8aocl" class="animable"></rect>
                            <path d="M191.81,312.31H187v-4.83h4.83Zm-3.83-1h2.83v-2.83H188Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 189.415px 309.895px;"
                                id="elpb8oyjdtafa" class="animable"></path>
                            <rect x="193.35" y="299.17" width="3.83" height="3.83"
                                style="fill: rgb(69, 90, 100); transform-origin: 195.265px 301.085px;"
                                id="elnclo73bqap" class="animable"></rect>
                            <path d="M198.79,262.29l-21.32-.11-.17,25.14h21.49Zm-7.48,20.57h-3.83V279h3.83Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 188.045px 274.75px;"
                                id="elfswl9in7dga" class="animable"></path>
                            <path d="M286.3,298.8l33.22.56-16.18-20.81Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 302.91px 288.955px;"
                                id="eljeqempjsr3d" class="animable"></path>
                            <rect x="296.1" y="315.13" width="5.63" height="5.63"
                                style="fill: rgb(94, 128, 183); transform-origin: 298.915px 317.945px;"
                                id="eli8gfuw3b4gs" class="animable"></rect>
                            <rect x="301.48" y="321.29" width="5.63" height="5.63"
                                style="fill: rgb(94, 128, 183); transform-origin: 304.295px 324.105px;"
                                id="elrlxqffchwj" class="animable"></rect>
                            <rect x="296.1" y="328.87" width="4.32" height="4.32"
                                style="fill: rgb(94, 128, 183); transform-origin: 298.26px 331.03px;"
                                id="elglaqq4arwws" class="animable"></rect>
                            <rect x="306.56" y="316.48" width="4.32" height="4.32"
                                style="fill: rgb(94, 128, 183); transform-origin: 308.72px 318.64px;"
                                id="el4bj1h78o5jd" class="animable"></rect>
                            <rect x="293.01" y="321.78" width="3.09" height="3.09"
                                style="fill: rgb(94, 128, 183); transform-origin: 294.555px 323.325px;"
                                id="elueytonfy4ji" class="animable"></rect>
                            <path d="M305.32,338.87h-4.09v-4.09h4.09Zm-3.09-1h2.09v-2.09h-2.09Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 303.275px 336.825px;"
                                id="elfby54sd1is" class="animable"></path>
                            <rect x="307.18" y="326.62" width="3.09" height="3.09"
                                style="fill: rgb(94, 128, 183); transform-origin: 308.725px 328.165px;"
                                id="elggh1zhr2dsi" class="animable"></rect>
                            <path d="M310.49,296.09l-15.85.19-1,20.28h17.32Zm-4.66,17h-3.08v-3.08h3.08Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 302.3px 306.325px;"
                                id="el8f879j5yjo6" class="animable"></path>
                            <path d="M38.23,264.06l41.21.69L59.36,238.93Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 58.835px 251.84px;"
                                id="elqavbgilsgja" class="animable"></path>
                            <rect x="50.39" y="284.31" width="6.98" height="6.98"
                                style="fill: rgb(94, 128, 183); transform-origin: 53.88px 287.8px;"
                                id="elmbgoo3575vf" class="animable"></rect>
                            <rect x="57.37" y="291.37" width="5.99" height="5.99"
                                style="fill: rgb(94, 128, 183); transform-origin: 60.365px 294.365px;"
                                id="el91xgasar86l" class="animable"></rect>
                            <rect x="50.39" y="298.68" width="5.36" height="5.37"
                                style="fill: rgb(94, 128, 183); transform-origin: 53.07px 301.365px;"
                                id="ela9qns1i010t" class="animable"></rect>
                            <rect x="63.36" y="285.98" width="5.36" height="5.37"
                                style="fill: rgb(94, 128, 183); transform-origin: 66.04px 288.665px;"
                                id="elclzenw6t6ce" class="animable"></rect>
                            <rect x="46.56" y="291.95" width="3.83" height="3.83"
                                style="fill: rgb(94, 128, 183); transform-origin: 48.475px 293.865px;"
                                id="elx2t4u3vg1j" class="animable"></rect>
                            <rect x="57.48" y="306.74" width="3.83" height="3.83"
                                style="fill: rgb(94, 128, 183); transform-origin: 59.395px 308.655px;"
                                id="el4gnxl0bn7ab" class="animable"></rect>
                            <rect x="63.36" y="297.93" width="3.83" height="3.83"
                                style="fill: rgb(94, 128, 183); transform-origin: 65.275px 299.845px;"
                                id="elk2i8sy72mj" class="animable"></rect>
                            <path d="M68.79,261.05l-21.32-.11-.16,25.14H68.79Zm-7.47,20.57H57.49v-3.83h3.83Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 58.05px 273.51px;"
                                id="elr0h5k5lencb" class="animable"></path>
                            <path d="M418.65,408.32l31.84.54L435,388.91Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 434.57px 398.885px;"
                                id="elpn6u1pbjs5m" class="animable"></path>
                            <rect x="428.04" y="423.97" width="5.4" height="5.4"
                                style="fill: rgb(94, 128, 183); transform-origin: 430.74px 426.67px;"
                                id="el9yfid6y1lc5" class="animable"></rect>
                            <rect x="433.44" y="429.43" width="4.63" height="4.63"
                                style="fill: rgb(94, 128, 183); transform-origin: 435.755px 431.745px;"
                                id="elojbhg2uydjf" class="animable"></rect>
                            <rect x="428.04" y="435.07" width="4.15" height="4.15"
                                style="fill: rgb(94, 128, 183); transform-origin: 430.115px 437.145px;"
                                id="elyhlh3lzxz5" class="animable"></rect>
                            <rect x="438.07" y="425.26" width="4.15" height="4.15"
                                style="fill: rgb(94, 128, 183); transform-origin: 440.145px 427.335px;"
                                id="el0cl29kdexx1" class="animable"></rect>
                            <rect x="425.08" y="429.88" width="2.96" height="2.96"
                                style="fill: rgb(94, 128, 183); transform-origin: 426.56px 431.36px;"
                                id="elef2r9gmdccc" class="animable"></rect>
                            <rect x="433.53" y="441.3" width="2.96" height="2.96"
                                style="fill: rgb(94, 128, 183); transform-origin: 435.01px 442.78px;"
                                id="eluvesxihf618" class="animable"></rect>
                            <rect x="438.07" y="434.5" width="2.96" height="2.96"
                                style="fill: rgb(94, 128, 183); transform-origin: 439.55px 435.98px;"
                                id="elcqmndec30ln" class="animable"></rect>
                            <path d="M442.26,406l-16.47-.09-.13,19.43h16.6Zm-5.77,15.9h-3v-3h3Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 433.96px 415.625px;"
                                id="eltmh6rkfinn" class="animable"></path>
                            <path d="M415.32,109.81l41.2.7L436.45,84.69Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 435.92px 97.6px;"
                                id="elwwf8s56sqhg" class="animable"></path>
                            <rect x="427.47" y="130.06" width="6.98" height="6.98"
                                style="fill: rgb(94, 128, 183); transform-origin: 430.96px 133.55px;"
                                id="elqmq1hxherul" class="animable"></rect>
                            <rect x="434.46" y="137.12" width="5.99" height="5.99"
                                style="fill: rgb(94, 128, 183); transform-origin: 437.455px 140.115px;"
                                id="elfex4zjywtas" class="animable"></rect>
                            <rect x="427.47" y="144.43" width="5.37" height="5.37"
                                style="fill: rgb(94, 128, 183); transform-origin: 430.155px 147.115px;"
                                id="el3c05dafdt3i" class="animable"></rect>
                            <rect x="440.44" y="131.74" width="5.37" height="5.37"
                                style="fill: rgb(94, 128, 183); transform-origin: 443.125px 134.425px;"
                                id="elo4erccxfbj8" class="animable"></rect>
                            <rect x="423.64" y="137.71" width="3.83" height="3.83"
                                style="fill: rgb(94, 128, 183); transform-origin: 425.555px 139.625px;"
                                id="eluxi3x4fl7z" class="animable"></rect>
                            <rect x="434.57" y="152.49" width="3.83" height="3.83"
                                style="fill: rgb(94, 128, 183); transform-origin: 436.485px 154.405px;"
                                id="elrw3egendtuq" class="animable"></rect>
                            <rect x="440.44" y="143.69" width="3.83" height="3.83"
                                style="fill: rgb(94, 128, 183); transform-origin: 442.355px 145.605px;"
                                id="elyxgh8olxcq" class="animable"></rect>
                            <path d="M445.88,106.81l-21.32-.12-.17,25.15h21.49Zm-7.48,20.57h-3.83v-3.83h3.83Z"
                                style="fill: rgb(94, 128, 183); transform-origin: 435.135px 119.265px;"
                                id="el8djayv604re" class="animable"></path>
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
                </div>

                <hr class="horizontal dark my-sm-4">

                <div hidden class="form-check form-switch ps-0">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                        onclick="navbarFixed(this)">
                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="btn bg-gradient-dark w-100" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                this.closest('form').submit();"
                        role="button">Cerar Sesión</a>
                </form>

                <div class="w-100 text-center">
                    <h6 class="mt-3">¿Listo para salir?</h6>
                </div>

            </div>
        </div>
    </div>
    <!--End Barra de Cerrar Session -->

    @livewireScripts

    <!--   Core JS Files   -->
    <script src="assetss/js/core/popper.min.js"></script>
    <script src="assetss/js/core/bootstrap.min.js"></script>
    <script src="assetss/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assetss/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assetss/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $(".loader").fadeOut("slow");
        });
    </script>

</body>

</html>
