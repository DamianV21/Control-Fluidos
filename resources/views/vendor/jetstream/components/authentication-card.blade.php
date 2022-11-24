<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden">
        <style>
            .background-radial-gradient {

                background-image: url("/img/bg4.jpg");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;

            }


            .bg-glass {
                background-color: hsla(0, 0%, 100%, 0.678) !important;
                backdrop-filter: saturate(200%) blur(0px);
                width: 430px;
                border-radius: 15px;
            }

            #radius-shape-1 {
                height: 220px;
                border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
                width: 220px;
                top: -150px;
                left: 570px;
                background: radial-gradient(#95bdfd71, #93b0cc8a);
                overflow: hidden;
            }

            #radius-shape-2 {
                border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
                bottom: -60px;
                right: -800px;
                width: 300px;
                height: 300px;
                background: radial-gradient(#95bdfd71, #93b0cc8a);
                overflow: hidden;
            }

            .cssFont_1 {
                font-family: 'Oswald', sans-serif;
                font-size: 65px;
                letter-spacing: 5px;
                word-spacing: 0px;
                color: #ffffffd5;
                font-weight: bold;
                text-decoration: none;
                font-style: normal;
                font-variant: normal;
                text-transform: none;

            }

            @media(max-width:900px) {
                .animated {
                    width: 0px;
                }

                .bg-glass {
                    width: auto;
                    background-color: hsla(0, 0%, 75%, 0.027) !important;
                    backdrop-filter: saturate(200%) blur(0px);
                    border-radius: 15px;

                }

                .cssFont_1 {
                    font-size: 0px;
                }

                .image {
                    width: 0px;
                }



                .background-radial-gradient {
                    background-image: url("/img/bg3.jpg");
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;

                }
            }
        </style>

        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5">


                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <div>
                                <center><img width="350px" src="{{ asset('img/admon_logo2.png') }}" alt="">
                                </center>
                                <br>
                                <h4 class="text-left"> Entra a tu cuenta</h4>
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <br>


                    <center><svg class="animated" id="freepik_stories-digital-transformation"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 750 500" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                            <style>
                                svg#freepik_stories-digital-transformation:not(.animated) .animable {
                                    opacity: 0;
                                }

                                svg#freepik_stories-digital-transformation.animated #freepik--background-simple--inject-124 {
                                    animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-digital-transformation.animated #freepik--Chart--inject-124 {
                                    animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut, 1.5s Infinite linear wind;
                                    animation-delay: 0s, 1s;
                                }

                                svg#freepik_stories-digital-transformation.animated #freepik--Tab--inject-124 {
                                    animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft, 1.5s Infinite linear heartbeat;
                                    animation-delay: 0s, 1s;
                                }

                                svg#freepik_stories-digital-transformation.animated #freepik--wifi-icon--inject-124 {
                                    animation: 1.5s Infinite linear heartbeat;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-digital-transformation.animated #freepik--world-icon--inject-124 {
                                    animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideRight, 1.5s Infinite linear heartbeat;
                                    animation-delay: 0s, 1s;
                                }

                                svg#freepik_stories-digital-transformation.animated #freepik--share-icon--inject-124 {
                                    animation: 1.5s Infinite linear heartbeat;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-digital-transformation.animated #freepik--Locators--inject-124 {
                                    animation: 1.5s Infinite linear heartbeat;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-digital-transformation.animated #freepik--Device--inject-124 {
                                    animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown, 1.5s Infinite linear heartbeat;
                                    animation-delay: 0s, 1s;
                                }

                                svg#freepik_stories-digital-transformation.animated #freepik--cloud-2--inject-124 {
                                    animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft, 1.5s Infinite linear heartbeat;
                                    animation-delay: 0s, 1s;
                                }

                                svg#freepik_stories-digital-transformation.animated #freepik--clouds-1--inject-124 {
                                    animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedRight, 1.5s Infinite linear wind;
                                    animation-delay: 0s, 1s;
                                }

                                svg#freepik_stories-digital-transformation.animated #freepik--Character--inject-124 {
                                    animation: 1s 1 forwards ease-in slideUp, 1.5s Infinite linear floating;
                                    animation-delay: 0s, 1s;
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

                                @keyframes slideRight {
                                    0% {
                                        opacity: 0;
                                        transform: translateX(30px);
                                    }

                                    100% {
                                        opacity: 1;
                                        transform: translateX(0);
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
                            </style>
                            <g id="freepik--background-simple--inject-124" class="animable"
                                style="transform-origin: 374.35px 266.355px;">
                                <path
                                    d="M633.59,92.48C583.1,56.87,518.48,40.71,455.39,45.3c-40.31,2.94-80.12,16.3-111.46,43.31-33.15,28.57-67,44.16-110.89,45.17-55.39,1.26-115.28-12-161.62,27.5-32.13,27.35-47.34,70.24-49.56,112.27C19.77,313,28.36,353.68,47.37,388c13.85,25,32.71,47.28,55.83,63.52,38.56,27.05,86.26,35.48,132.11,32.63,44.16-2.75,89-23.37,133.25-19.71,53.64,4.44,144.75,42.49,230.52,12C700,440.62,748,312.66,718.59,211.22A221.33,221.33,0,0,0,633.59,92.48Z"
                                    style="fill: rgb(87, 128, 183); transform-origin: 374.35px 266.355px;"
                                    id="elxhlphqu69yn" class="animable"></path>
                                <g id="el6un7099qkx">
                                    <path
                                        d="M633.59,92.48C583.1,56.87,518.48,40.71,455.39,45.3c-40.31,2.94-80.12,16.3-111.46,43.31-33.15,28.57-67,44.16-110.89,45.17-55.39,1.26-115.28-12-161.62,27.5-32.13,27.35-47.34,70.24-49.56,112.27C19.77,313,28.36,353.68,47.37,388c13.85,25,32.71,47.28,55.83,63.52,38.56,27.05,86.26,35.48,132.11,32.63,44.16-2.75,89-23.37,133.25-19.71,53.64,4.44,144.75,42.49,230.52,12C700,440.62,748,312.66,718.59,211.22A221.33,221.33,0,0,0,633.59,92.48Z"
                                        style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 374.35px 266.355px;"
                                        class="animable"></path>
                                </g>
                            </g>
                            <g id="freepik--Chart--inject-124" class="animable"
                                style="transform-origin: 201.635px 440.47px;">
                                <path
                                    d="M330,487.15H291.23a.5.5,0,0,1-.5-.5V394.29a.51.51,0,0,1,.5-.5H330a.5.5,0,0,1,.5.5v92.36A.5.5,0,0,1,330,487.15Zm-38.29-1h37.79V394.79H291.73Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 310.615px 440.47px;"
                                    id="elahzmu17ztt" class="animable"></path>
                                <path
                                    d="M275.53,487.15H236.74a.5.5,0,0,1-.5-.5v-71a.5.5,0,0,1,.5-.5h38.79a.5.5,0,0,1,.5.5v71A.5.5,0,0,1,275.53,487.15Zm-38.29-1H275v-70H237.24Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 256.135px 451.15px;"
                                    id="ello9rx4m2ijg" class="animable"></path>
                                <path
                                    d="M221,487.15H182.25a.5.5,0,0,1-.5-.5V445.19a.51.51,0,0,1,.5-.5H221a.5.5,0,0,1,.5.5v41.46A.5.5,0,0,1,221,487.15Zm-38.29-1h37.79V445.69H182.75Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 201.625px 465.92px;"
                                    id="el4asufs6stnn" class="animable"></path>
                                <path
                                    d="M166.55,487.15H127.76a.5.5,0,0,1-.5-.5V471.91a.5.5,0,0,1,.5-.5h38.79a.5.5,0,0,1,.5.5v14.74A.5.5,0,0,1,166.55,487.15Zm-38.29-1h37.79V472.41H128.26Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 147.155px 479.28px;"
                                    id="el9ummite7l3v" class="animable"></path>
                                <path
                                    d="M112.06,487.15H73.27a.5.5,0,0,1-.5-.5V479.8a.51.51,0,0,1,.5-.5h38.79a.5.5,0,0,1,.5.5v6.85A.5.5,0,0,1,112.06,487.15Zm-38.29-1h37.79V480.3H73.77Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 92.665px 483.225px;"
                                    id="elrd5h584dt2" class="animable"></path>
                            </g>
                            <g id="freepik--Tab--inject-124" class="animable"
                                style="transform-origin: 662.04px 266.255px;">
                                <rect x="613.71" y="224.76" width="99.82" height="87.75" rx="4.37"
                                    style="fill: rgb(38, 50, 56); transform-origin: 663.62px 268.635px;"
                                    id="elsint5t2e4f" class="animable"></rect>
                                <path
                                    d="M709.16,313H618.08a4.88,4.88,0,0,1-4.87-4.87v-79a4.88,4.88,0,0,1,4.87-4.87h91.08a4.88,4.88,0,0,1,4.87,4.87v79A4.88,4.88,0,0,1,709.16,313Zm-91.08-87.76a3.88,3.88,0,0,0-3.87,3.87v79a3.88,3.88,0,0,0,3.87,3.87h91.08a3.87,3.87,0,0,0,3.87-3.87v-79a3.87,3.87,0,0,0-3.87-3.87Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 663.62px 268.63px;"
                                    id="ellqhoi5ejgco" class="animable"></path>
                                <rect x="610.55" y="220.01" width="99.82" height="87.75" rx="4.37"
                                    style="fill: rgb(255, 255, 255); transform-origin: 660.46px 263.885px;"
                                    id="el5a3i5uwfmnu" class="animable"></rect>
                                <path
                                    d="M706,308.27H614.92a4.88,4.88,0,0,1-4.87-4.88v-79a4.88,4.88,0,0,1,4.87-4.87H706a4.88,4.88,0,0,1,4.88,4.87v79A4.89,4.89,0,0,1,706,308.27Zm-91.07-87.76a3.87,3.87,0,0,0-3.87,3.87v79a3.88,3.88,0,0,0,3.87,3.88H706a3.88,3.88,0,0,0,3.88-3.88v-79a3.88,3.88,0,0,0-3.88-3.87Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 660.465px 263.895px;"
                                    id="elhnjoy63yidb" class="animable"></path>
                                <path
                                    d="M710.37,231.11v-6.73A4.38,4.38,0,0,0,706,220H614.92a4.37,4.37,0,0,0-4.37,4.37v6.73Z"
                                    style="fill: rgb(87, 128, 183); transform-origin: 660.46px 225.555px;"
                                    id="elilja1ucj0gt" class="animable"></path>
                                <path
                                    d="M710.37,231.61H610.55a.5.5,0,0,1-.5-.5v-6.73a4.88,4.88,0,0,1,4.87-4.87H706a4.88,4.88,0,0,1,4.88,4.87v6.73A.51.51,0,0,1,710.37,231.61Zm-99.32-1h98.82v-6.23a3.88,3.88,0,0,0-3.88-3.87H614.92a3.87,3.87,0,0,0-3.87,3.87Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 660.465px 225.56px;"
                                    id="el7w54ag4iaw" class="animable"></path>
                                <circle cx="684.03" cy="225.84" r="2.67"
                                    style="fill: rgb(255, 255, 255); transform-origin: 684.03px 225.84px;"
                                    id="el9wygkjei01m" class="animable"></circle>
                                <path
                                    d="M684,229a3.18,3.18,0,1,1,3.18-3.18A3.18,3.18,0,0,1,684,229Zm0-5.35a2.18,2.18,0,1,0,2.18,2.17A2.18,2.18,0,0,0,684,223.67Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 684px 225.82px;" id="el9n90txr2cr"
                                    class="animable"></path>
                                <path d="M695.17,225.84a2.67,2.67,0,1,0-2.67,2.68A2.67,2.67,0,0,0,695.17,225.84Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 692.5px 225.85px;"
                                    id="elknnmjblpn8" class="animable"></path>
                                <path
                                    d="M692.5,229a3.18,3.18,0,1,1,3.17-3.18A3.18,3.18,0,0,1,692.5,229Zm0-5.35a2.18,2.18,0,1,0,2.17,2.17A2.17,2.17,0,0,0,692.5,223.67Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 692.49px 225.82px;"
                                    id="elpknmfdlmiu9" class="animable"></path>
                                <circle cx="700.96" cy="225.84" r="2.67"
                                    style="fill: rgb(255, 255, 255); transform-origin: 700.96px 225.84px;"
                                    id="elezi72k6wfek" class="animable"></circle>
                                <path
                                    d="M701,229a3.18,3.18,0,1,1,3.18-3.18A3.18,3.18,0,0,1,701,229Zm0-5.35a2.18,2.18,0,1,0,2.18,2.17A2.18,2.18,0,0,0,701,223.67Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 701px 225.82px;" id="elyd4gdeu8xn"
                                    class="animable"></path>
                                <path
                                    d="M621.32,269.17V239.42a2.79,2.79,0,0,1,2.79-2.79H698a2.79,2.79,0,0,1,2.79,2.79v17.4a2.79,2.79,0,0,1-2.79,2.79H627.43Zm2.79-31.54a1.79,1.79,0,0,0-1.79,1.79v26.32l4.56-7.13H698a1.8,1.8,0,0,0,1.79-1.79v-17.4a1.79,1.79,0,0,0-1.79-1.79Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 661.055px 252.9px;"
                                    id="el2ofnveyqjmk" class="animable"></path>
                                <path
                                    d="M700.79,304.23l-6.11-9.56H624.11a2.79,2.79,0,0,1-2.79-2.79V274.47a2.79,2.79,0,0,1,2.79-2.78H698a2.79,2.79,0,0,1,2.79,2.78Zm-76.68-31.54a1.79,1.79,0,0,0-1.79,1.78v17.41a1.79,1.79,0,0,0,1.79,1.79h71.12l4.56,7.13V274.47a1.79,1.79,0,0,0-1.79-1.78Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 661.055px 287.96px;"
                                    id="elby6cjhkvhyf" class="animable"></path>
                                <circle cx="635.32" cy="247.98" r="6.68"
                                    style="fill: rgb(87, 128, 183); transform-origin: 635.32px 247.98px;"
                                    id="elqf4da0bzlnt" class="animable"></circle>
                                <path
                                    d="M635.32,255.16a7.18,7.18,0,1,1,7.17-7.18A7.19,7.19,0,0,1,635.32,255.16Zm0-13.36a6.18,6.18,0,1,0,6.17,6.18A6.18,6.18,0,0,0,635.32,241.8Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 635.31px 247.98px;"
                                    id="elhm9jfqycvmv" class="animable"></path>
                                <circle cx="635.32" cy="246.03" r="2.78"
                                    style="fill: rgb(255, 255, 255); transform-origin: 635.32px 246.03px;"
                                    id="elxo92tdp6rzl" class="animable"></circle>
                                <path
                                    d="M635.32,249.31A3.28,3.28,0,1,1,638.6,246,3.29,3.29,0,0,1,635.32,249.31Zm0-5.56A2.28,2.28,0,1,0,637.6,246,2.29,2.29,0,0,0,635.32,243.75Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 635.32px 246.03px;"
                                    id="elsk5uric2wp9" class="animable"></path>
                                <path
                                    d="M635.32,254.66a6.68,6.68,0,0,0,3.9-1.27,3.91,3.91,0,0,0-7.81,0A6.69,6.69,0,0,0,635.32,254.66Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 635.315px 252.169px;"
                                    id="el3i7rqnrvjgw" class="animable"></path>
                                <path
                                    d="M635.32,255.16a7.13,7.13,0,0,1-4.2-1.37.49.49,0,0,1-.21-.41,4.41,4.41,0,0,1,8.81,0,.49.49,0,0,1-.21.41A7.12,7.12,0,0,1,635.32,255.16Zm-3.39-2a6.26,6.26,0,0,0,6.78,0,3.4,3.4,0,0,0-6.78,0Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 635.315px 252.17px;"
                                    id="el8sw9eggd0sc" class="animable"></path>
                                <rect x="646.73" y="241.92" width="22.69" height="1"
                                    style="fill: rgb(38, 50, 56); transform-origin: 658.075px 242.42px;"
                                    id="elxbuy10075ym" class="animable"></rect>
                                <rect x="647.2" y="248.38" width="46.81" height="1"
                                    style="fill: rgb(38, 50, 56); transform-origin: 670.605px 248.88px;"
                                    id="elmx8ukmvb26s" class="animable"></rect>
                                <rect x="647.2" y="252.48" width="46.81" height="1"
                                    style="fill: rgb(38, 50, 56); transform-origin: 670.605px 252.98px;"
                                    id="elji1ccalcxy" class="animable"></rect>
                                <circle cx="635.32" cy="283.75" r="6.68"
                                    style="fill: rgb(38, 50, 56); transform-origin: 635.32px 283.75px;"
                                    id="els1yyaeu353g" class="animable"></circle>
                                <path
                                    d="M635.32,290.93a7.18,7.18,0,1,1,7.17-7.18A7.19,7.19,0,0,1,635.32,290.93Zm0-13.35a6.18,6.18,0,1,0,6.17,6.17A6.18,6.18,0,0,0,635.32,277.58Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 635.31px 283.75px;"
                                    id="el333jv5oode7" class="animable"></path>
                                <circle cx="635.32" cy="281.81" r="2.78"
                                    style="fill: rgb(255, 255, 255); transform-origin: 635.32px 281.81px;"
                                    id="eln2h47zwimph" class="animable"></circle>
                                <path
                                    d="M635.32,285.09a3.29,3.29,0,1,1,3.28-3.28A3.29,3.29,0,0,1,635.32,285.09Zm0-5.57a2.29,2.29,0,1,0,2.28,2.29A2.3,2.3,0,0,0,635.32,279.52Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 635.31px 281.8px;"
                                    id="elzrf2x341cc" class="animable"></path>
                                <path
                                    d="M635.32,290.43a6.61,6.61,0,0,0,3.9-1.27,3.91,3.91,0,0,0-7.81,0A6.62,6.62,0,0,0,635.32,290.43Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 635.315px 287.939px;"
                                    id="el9ucy02w5rtv" class="animable"></path>
                                <path
                                    d="M635.32,290.93a7.12,7.12,0,0,1-4.2-1.36.51.51,0,0,1-.21-.41,4.41,4.41,0,0,1,8.81,0,.51.51,0,0,1-.21.41A7.11,7.11,0,0,1,635.32,290.93Zm-3.39-2a6.22,6.22,0,0,0,6.78,0,3.4,3.4,0,0,0-6.78,0Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 635.315px 287.945px;"
                                    id="el2uj3lxn3ehq" class="animable"></path>
                                <rect x="646.73" y="277.69" width="22.69" height="1"
                                    style="fill: rgb(38, 50, 56); transform-origin: 658.075px 278.19px;"
                                    id="elejk2533af08" class="animable"></rect>
                                <rect x="647.2" y="284.15" width="46.81" height="1"
                                    style="fill: rgb(38, 50, 56); transform-origin: 670.605px 284.65px;"
                                    id="el2wr9099jhhc" class="animable"></rect>
                                <rect x="647.2" y="288.25" width="46.81" height="1"
                                    style="fill: rgb(38, 50, 56); transform-origin: 670.605px 288.75px;"
                                    id="el89igjft7b47" class="animable"></rect>
                            </g>
                            <g id="freepik--wifi-icon--inject-124" class="animable"
                                style="transform-origin: 687.042px 142.481px;">
                                <path
                                    d="M687.07,111.21c16.8.26,30.83,6.63,41.87,19.38a3.89,3.89,0,0,1-.36,5.6,3.83,3.83,0,0,1-5.47-.51A47.86,47.86,0,0,0,709,124.3,46.78,46.78,0,0,0,656.72,130a72,72,0,0,0-5.67,5.65,4,4,0,0,1-5.6.51,3.91,3.91,0,0,1-.27-5.61,54.59,54.59,0,0,1,34.93-19c1.1-.15,2.21-.27,3.31-.32S685.85,111.21,687.07,111.21Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 687.042px 124.154px;"
                                    id="elxf5rn9tz22" class="animable"></path>
                                <path
                                    d="M688.46,126.79c10.62.27,20.6,4.81,28.46,13.89a3.79,3.79,0,0,1-.35,5.58,3.84,3.84,0,0,1-5.52-.53,30.28,30.28,0,0,0-15.13-9.87c-12.35-3.33-23-.29-32,8.85-.33.34-.64.7-1,1.06a3.89,3.89,0,1,1-5.87-5.09,39,39,0,0,1,12.52-9.81C675.16,128.14,681,126.81,688.46,126.79Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 686.972px 137.029px;"
                                    id="elm9qve4za34" class="animable"></path>
                                <path
                                    d="M705.93,153.36a3.88,3.88,0,0,1-6.81,2.55,16.44,16.44,0,0,0-5.93-4.41A15.66,15.66,0,0,0,675,155.83a3.77,3.77,0,0,1-4.15,1.24,3.88,3.88,0,0,1-1.8-6.23,23.28,23.28,0,0,1,35.9.07,11,11,0,0,1,1.15,2.36Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 687.109px 149.841px;"
                                    id="el2wd3zh8nown" class="animable"></path>
                                <path d="M687.06,173.76a7.8,7.8,0,1,1,7.77-7.76A7.77,7.77,0,0,1,687.06,173.76Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 687.03px 165.96px;"
                                    id="el4y65zmcvfku" class="animable"></path>
                            </g>
                            <g id="freepik--world-icon--inject-124" class="animable"
                                style="transform-origin: 578.39px 384.935px;">
                                <path
                                    d="M578.39,453a68,68,0,1,1,68-68A68.11,68.11,0,0,1,578.39,453Zm0-134.08a66,66,0,1,0,66,66A66.11,66.11,0,0,0,578.39,318.87Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 578.39px 385px;" id="ela1sz5co1h3"
                                    class="animable"></path>
                                <path
                                    d="M578.39,453c-18.84,0-34.17-30.52-34.17-68s15.33-68,34.17-68,34.16,30.53,34.16,68S597.22,453,578.39,453Zm0-134.08c-17.74,0-32.17,29.63-32.17,66s14.43,66,32.17,66,32.16-29.62,32.16-66S596.12,318.87,578.39,318.87Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 578.385px 385px;"
                                    id="elrb01t755jjp" class="animable"></path>
                                <path
                                    d="M578.39,356.89a67.75,67.75,0,0,1-46.82-18.67,1,1,0,0,1,0-1.41,1,1,0,0,1,1.42,0,66,66,0,0,0,91.51-.6,1,1,0,0,1,1.39,1.43A67.66,67.66,0,0,1,578.39,356.89Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 578.71px 346.434px;"
                                    id="elgddmhzkvbi" class="animable"></path>
                                <path
                                    d="M531.39,434.17a1,1,0,0,1-.71-.3,1,1,0,0,1,0-1.42,68.06,68.06,0,0,1,94.71-.66,1,1,0,0,1-1.38,1.45,66,66,0,0,0-91.93.64A1,1,0,0,1,531.39,434.17Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 578.041px 423.556px;"
                                    id="el14ned8qprz1" class="animable"></path>
                                <path d="M645.43,385.91H511.35a1,1,0,0,1,0-2H645.43a1,1,0,0,1,0,2Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 578.39px 384.91px;"
                                    id="el8lf957d7qw5" class="animable"></path>
                                <path d="M578.39,453a1,1,0,0,1-1-1V317.87a1,1,0,0,1,2,0V452A1,1,0,0,1,578.39,453Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 578.39px 384.935px;"
                                    id="eltrrrm9xej4e" class="animable"></path>
                            </g>
                            <g id="freepik--share-icon--inject-124" class="animable"
                                style="transform-origin: 566.561px 262.726px;">
                                <path
                                    d="M580.83,255.54a7.18,7.18,0,0,0-4.36,1.47l-17.33-13a7.26,7.26,0,1,0-2.38,3.17l17.32,13a7.15,7.15,0,0,0,0,5.15l-17.32,13a7.12,7.12,0,0,0-4.36-1.48,7.23,7.23,0,1,0,7.23,7.23,7.13,7.13,0,0,0-.49-2.58l17.33-13a7.22,7.22,0,1,0,4.36-13Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 566.561px 262.726px;"
                                    id="elz1tluyo5oka" class="animable"></path>
                            </g>
                            <g id="freepik--Locators--inject-124" class="animable"
                                style="transform-origin: 582.04px 243.442px;">
                                <path
                                    d="M491.4,105.2a18.21,18.21,0,0,0-18.21,18.21c0,10.07,18.21,30.64,18.21,30.64s18.22-20.57,18.22-30.64A18.21,18.21,0,0,0,491.4,105.2Zm0,26.5a8.29,8.29,0,1,1,8.28-8.29A8.29,8.29,0,0,1,491.4,131.7Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 491.405px 129.625px;"
                                    id="elg280vgwiz1v" class="animable"></path>
                                <path
                                    d="M491.4,154.55a.48.48,0,0,1-.37-.17c-.75-.84-18.34-20.83-18.34-31a18.72,18.72,0,0,1,37.43,0c0,10.14-17.59,30.13-18.34,31A.5.5,0,0,1,491.4,154.55Zm0-48.85a17.73,17.73,0,0,0-17.71,17.71c0,9,15.12,26.88,17.71,29.88,2.6-3,17.72-20.91,17.72-29.88A17.74,17.74,0,0,0,491.4,105.7Zm0,26.5a8.79,8.79,0,1,1,8.78-8.79A8.79,8.79,0,0,1,491.4,132.2Zm0-16.57a7.79,7.79,0,1,0,7.78,7.78A7.79,7.79,0,0,0,491.4,115.63Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 491.405px 129.821px;"
                                    id="eljkpfotxdelc" class="animable"></path>
                                <path
                                    d="M679.38,350.48A11.49,11.49,0,0,0,667.89,362c0,6.35,11.49,19.32,11.49,19.32s11.48-13,11.48-19.32A11.49,11.49,0,0,0,679.38,350.48Zm0,16.71A5.22,5.22,0,1,1,684.6,362,5.22,5.22,0,0,1,679.38,367.19Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 679.375px 365.9px;"
                                    id="elulk10238y9i" class="animable"></path>
                                <path
                                    d="M679.38,381.79a.5.5,0,0,1-.38-.17c-.47-.53-11.61-13.19-11.61-19.65a12,12,0,1,1,24,0c0,6.46-11.14,19.12-11.61,19.65A.48.48,0,0,1,679.38,381.79Zm0-30.81a11,11,0,0,0-11,11c0,5.45,9,16.27,11,18.56,2-2.29,11-13.11,11-18.56A11,11,0,0,0,679.38,351Zm0,16.71A5.72,5.72,0,1,1,685.1,362,5.73,5.73,0,0,1,679.38,367.69Zm0-10.44A4.72,4.72,0,1,0,684.1,362,4.73,4.73,0,0,0,679.38,357.25Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 679.39px 365.881px;"
                                    id="elitwg2q788js" class="animable"></path>
                            </g>
                            <g id="freepik--Device--inject-124" class="animable"
                                style="transform-origin: 578.565px 118.935px;">
                                <path
                                    d="M613.68,208.17H543a9,9,0,0,1-8.74-9.16V38.81A9,9,0,0,1,543,29.65h70.7a9,9,0,0,1,8.75,9.16V199A9,9,0,0,1,613.68,208.17ZM543,30.65a8,8,0,0,0-7.74,8.16V199a8,8,0,0,0,7.74,8.16h70.7a8,8,0,0,0,7.75-8.16V38.81a8,8,0,0,0-7.75-8.16Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 578.355px 118.91px;"
                                    id="eldd1rrkqcw6r" class="animable"></path>
                                <path
                                    d="M621.93,42.35V38.81a8.46,8.46,0,0,0-8.24-8.66H543a8.46,8.46,0,0,0-8.24,8.66v3.54Z"
                                    style="fill: rgb(87, 128, 183); transform-origin: 578.345px 36.25px;"
                                    id="elacqacfn8tpa" class="animable"></path>
                                <path
                                    d="M621.93,42.85H534.74a.5.5,0,0,1-.5-.5V38.81A9,9,0,0,1,543,29.65h70.7a9,9,0,0,1,8.75,9.16v3.54A.5.5,0,0,1,621.93,42.85Zm-86.69-1h86.19v-3a8,8,0,0,0-7.75-8.16H543a8,8,0,0,0-7.74,8.16Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 578.345px 36.2502px;"
                                    id="elr23cml09ru" class="animable"></path>
                                <path
                                    d="M624.27,36.46v5.46h1.62V57.41h-1.62v3.52h1.62v15.5h-1.62V80h1.62v15.5h-1.62V201.36a9.86,9.86,0,0,1-9.61,10.09H542a9.87,9.87,0,0,1-9.61-10.09V69.81h-1.15V54.31h1.15V36.46A9.87,9.87,0,0,1,542,26.37h72.66A9.86,9.86,0,0,1,624.27,36.46Zm-25.12-6.31-2.84,4.43a4.52,4.52,0,0,1-3.8,2.13H564.16a4.55,4.55,0,0,1-3.81-2.13l-2.83-4.43H544.35a9.86,9.86,0,0,0-9.61,10.09V197.58a9.86,9.86,0,0,0,9.61,10.09h68a9.86,9.86,0,0,0,9.61-10.09V40.24a9.86,9.86,0,0,0-9.61-10.09Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 578.565px 118.91px;"
                                    id="el7hya56y4phf" class="animable"></path>
                                <path
                                    d="M614.66,212H542a10.38,10.38,0,0,1-10.11-10.59v-131h-1.15V53.81h1.15V36.46A10.38,10.38,0,0,1,542,25.87h72.66a10.37,10.37,0,0,1,10.11,10.59v5h1.62V57.91h-1.62v2.52h1.62v16.5h-1.62v2.52h1.62V96h-1.62V201.36A10.37,10.37,0,0,1,614.66,212ZM531.74,69.31h1.15V201.36A9.38,9.38,0,0,0,542,211h72.66a9.37,9.37,0,0,0,9.11-9.59V95h1.62V80.45h-1.62V75.93h1.62V61.43h-1.62V56.91h1.62V42.42h-1.62v-6a9.37,9.37,0,0,0-9.11-9.59H542a9.38,9.38,0,0,0-9.11,9.59V54.81h-1.15Zm80.58,138.86h-68a10.37,10.37,0,0,1-10.11-10.59V40.24a10.37,10.37,0,0,1,10.11-10.59h13.44l3,4.66a4,4,0,0,0,3.38,1.9h28.35a4,4,0,0,0,3.38-1.9l3-4.66h13.44a10.37,10.37,0,0,1,10.11,10.59V197.58A10.37,10.37,0,0,1,612.32,208.17Zm-68-177.52a9.36,9.36,0,0,0-9.11,9.59V197.58a9.36,9.36,0,0,0,9.11,9.59h68a9.37,9.37,0,0,0,9.11-9.59V40.24a9.37,9.37,0,0,0-9.11-9.59h-12.9l-2.69,4.2a5,5,0,0,1-4.22,2.36H564.16a5,5,0,0,1-4.23-2.36l-2.68-4.2Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 578.565px 118.935px;"
                                    id="elm9s1o0k1hg" class="animable"></path>
                                <path
                                    d="M534.74,196.53V199a8.46,8.46,0,0,0,8.24,8.66h70.71a8.46,8.46,0,0,0,8.24-8.66v-2.48Z"
                                    style="fill: rgb(87, 128, 183); transform-origin: 578.335px 202.09px;"
                                    id="eluge7pzgyb8" class="animable"></path>
                                <path
                                    d="M613.68,208.17H543a9,9,0,0,1-8.74-9.16v-2.48a.5.5,0,0,1,.5-.5h87.19a.5.5,0,0,1,.5.5V199A9,9,0,0,1,613.68,208.17ZM535.24,197v2a8,8,0,0,0,7.74,8.16h70.7a8,8,0,0,0,7.75-8.16v-2Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 578.355px 202.1px;"
                                    id="el8x0ojcldlko" class="animable"></path>
                            </g>
                            <g id="freepik--cloud-2--inject-124" class="animable"
                                style="transform-origin: 476.264px 261.259px;">
                                <path
                                    d="M511.68,242.81a35,35,0,0,0-65.14,6.32c-.55,0-1.11-.09-1.68-.09A21.21,21.21,0,0,0,442,291.32v.2h65.43c13.84,0,25.06-11,25.06-24.53A24.68,24.68,0,0,0,511.68,242.81Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 477.833px 257.425px;"
                                    id="elef2efom3psf" class="animable"></path>
                                <path
                                    d="M507.45,292H442a.48.48,0,0,1-.43-.26,21.7,21.7,0,0,1,3.27-43.22c.44,0,.87,0,1.31.06a35.1,35.1,0,0,1,34.1-25.69A35.57,35.57,0,0,1,512,242.36,25.09,25.09,0,0,1,533,267C533,280.79,521.55,292,507.45,292Zm-65-1h65C521,291,532,280.24,532,267A24.11,24.11,0,0,0,511.6,243.3a.52.52,0,0,1-.37-.27,34.53,34.53,0,0,0-31-19.12A34.1,34.1,0,0,0,447,249.25a.48.48,0,0,1-.52.37c-.55,0-1.1-.08-1.65-.08a20.71,20.71,0,0,0-2.77,41.28A.5.5,0,0,1,442.43,291Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 477.804px 257.444px;"
                                    id="elnoxvr96b01s" class="animable"></path>
                                <path
                                    d="M508.58,239.19a35.05,35.05,0,0,0-65.14,6.32c-.55,0-1.11-.08-1.68-.08a21.2,21.2,0,0,0-2.83,42.27v.2h65.42c13.84,0,25.06-11,25.06-24.53A24.69,24.69,0,0,0,508.58,239.19Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 474.709px 253.85px;"
                                    id="elb5phaeiioev" class="animable"></path>
                                <path
                                    d="M504.35,288.4H438.93a.5.5,0,0,1-.44-.25,21.7,21.7,0,0,1,3.27-43.22c.44,0,.87,0,1.31,0a35.12,35.12,0,0,1,34.11-25.69,35.57,35.57,0,0,1,31.74,19.45,25.1,25.1,0,0,1,21,24.63C529.91,277.17,518.45,288.4,504.35,288.4Zm-65-1h65c13.54,0,24.56-10.78,24.56-24a24.11,24.11,0,0,0-20.41-23.69.47.47,0,0,1-.37-.27,34.55,34.55,0,0,0-30.95-19.12,34.12,34.12,0,0,0-33.25,25.35.5.5,0,0,1-.52.37c-.55,0-1.09-.08-1.65-.08A20.71,20.71,0,0,0,439,287.21.49.49,0,0,1,439.33,287.4Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 474.724px 253.819px;"
                                    id="elhng0yvykeos" class="animable"></path>
                                <polygon
                                    points="498.5 277.67 475.79 238.34 453.08 277.67 459.8 277.67 459.8 302.78 491.78 302.78 491.78 277.67 498.5 277.67"
                                    style="fill: rgb(38, 50, 56); transform-origin: 475.79px 270.56px;"
                                    id="el33ccdt6yv3x" class="animable"></polygon>
                                <path
                                    d="M491.78,303.28h-32a.5.5,0,0,1-.5-.5V278.17h-6.22a.48.48,0,0,1-.43-.25.5.5,0,0,1,0-.5l22.71-39.33a.51.51,0,0,1,.86,0l22.71,39.33a.5.5,0,0,1-.43.75h-6.22v24.61A.5.5,0,0,1,491.78,303.28Zm-31.48-1h31V277.67a.5.5,0,0,1,.5-.5h5.85l-21.84-37.83L454,277.17h5.85a.5.5,0,0,1,.5.5Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 475.77px 270.567px;"
                                    id="el3xdcjanextl" class="animable"></path>
                                <polygon
                                    points="496.43 275.61 473.72 236.28 451.01 275.61 457.73 275.61 457.73 300.72 489.71 300.72 489.71 275.61 496.43 275.61"
                                    style="fill: rgb(87, 128, 183); transform-origin: 473.72px 268.5px;"
                                    id="elhj2lcfscz6g" class="animable"></polygon>
                                <path
                                    d="M489.71,301.22h-32a.51.51,0,0,1-.5-.5V276.11H451a.52.52,0,0,1-.44-.25.5.5,0,0,1,0-.5L473.29,236a.51.51,0,0,1,.86,0l22.71,39.33a.5.5,0,0,1,0,.5.5.5,0,0,1-.43.25h-6.22v24.61A.5.5,0,0,1,489.71,301.22Zm-31.48-1h31V275.61a.5.5,0,0,1,.5-.5h5.85l-21.84-37.83-21.84,37.83h5.85a.5.5,0,0,1,.5.5Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 473.71px 268.492px;"
                                    id="el3qjlrknole6" class="animable"></path>
                            </g>
                            <g id="freepik--clouds-1--inject-124" class="animable"
                                style="transform-origin: 191.637px 229.921px;">
                                <path
                                    d="M332.21,91.18H220a.5.5,0,0,1-.35-.85c.64-.64,2.36-2.53,2.61-3.54.39-1.55,5.16-2,7.27-2.1a7.72,7.72,0,0,0,4.76-4.48c1.15-3.15,6.34-3.67,10.13-4a29.33,29.33,0,0,0,2.94-.38,7.38,7.38,0,0,0,2.88-1.42.5.5,0,1,1,.61.79,8.34,8.34,0,0,1-3.28,1.6,28.88,28.88,0,0,1-3.05.41c-3.53.35-8.35.83-9.29,3.4a8.61,8.61,0,0,1-5.48,5.11l-.11,0c-3.18.17-6.23.81-6.41,1.34a9.49,9.49,0,0,1-2.07,3.15H331.92c.6-1.1,2.72-5.86-2.45-10.45-2.47-2.2-6.05-1.68-9.2-1.22-3.47.51-6.74,1-7.47-2.5a.5.5,0,0,1,1-.2c.51,2.44,2.63,2.26,6.34,1.71,3.38-.49,7.2-1,10,1.46,6.42,5.71,2.53,11.91,2.49,12A.49.49,0,0,1,332.21,91.18Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 276.671px 82.7342px;"
                                    id="eli9j9x3gfn1j" class="animable"></path>
                                <path
                                    d="M253.45,72a.51.51,0,0,1-.28-.09.49.49,0,0,1-.13-.69,27.39,27.39,0,0,0,2.5-4.76,7.64,7.64,0,0,1,4.69-4.56c3.43-1.19,8.11-.26,13.18,2.6,3.12,1.77,5.28,2.34,6.8,1.81,1.8-.63,2.69-2.86,3.82-5.68a13.38,13.38,0,0,1,7.29-7,15,15,0,0,1,11.9.23c5.5,2.33,8.22,8.47,9.53,13.21a.5.5,0,0,1-1,.26c-1.26-4.52-3.83-10.38-9-12.54a14,14,0,0,0-11.12-.23A12.55,12.55,0,0,0,285,61c-1.17,2.94-2.18,5.47-4.41,6.25-1.8.64-4.23,0-7.62-1.88-4.82-2.72-9.21-3.62-12.36-2.53a6.73,6.73,0,0,0-4.1,4,27.74,27.74,0,0,1-2.59,4.94A.52.52,0,0,1,253.45,72Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 282.859px 62.2566px;"
                                    id="eledfzyljmlz" class="animable"></path>
                                <path
                                    d="M123.49,135.1h-39a.5.5,0,0,1-.5-.5.5.5,0,0,1,.5-.5H123.2c.39-.78,1.38-3.42-1.49-6-1.43-1.27-3.54-1-5.41-.69-1.65.24-3.21.47-4.12-.45-.65-.65-.85-1.73-.61-3.4-.09-.74-1.08-8.49-5.92-10.53a8.21,8.21,0,0,0-8.14.73.5.5,0,0,1-.69-.12.51.51,0,0,1,.11-.7,9.2,9.2,0,0,1,9.11-.83c5.61,2.37,6.5,11,6.53,11.41v.12c-.2,1.33-.09,2.21.31,2.62.56.56,1.88.36,3.28.16,2-.29,4.44-.65,6.21.93,4,3.57,1.57,7.46,1.54,7.5A.5.5,0,0,1,123.49,135.1Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 104.329px 123.187px;"
                                    id="el5m0i8mv3p6b" class="animable"></path>
                                <path
                                    d="M78.39,135.1H55.6a.49.49,0,0,1-.46-.3.5.5,0,0,1,.1-.55,6.79,6.79,0,0,0,1.53-2.05c.25-1,2.6-1.31,4.55-1.41a4.5,4.5,0,0,0,2.74-2.58c.73-2,3.94-2.35,6.28-2.59.72-.07,1.33-.13,1.76-.22,1.82-.41,3.54-2.37,4.84-5.52a4.89,4.89,0,0,1,3-2.87c2.13-.74,5-.17,8.14,1.59,1.81,1,3.1,1.37,4,1.08s1.52-1.67,2.19-3.32a.49.49,0,0,1,.65-.28.51.51,0,0,1,.28.65c-.73,1.82-1.36,3.39-2.79,3.89-1.15.4-2.67,0-4.78-1.15-2.86-1.62-5.46-2.16-7.31-1.52a3.9,3.9,0,0,0-2.36,2.31c-1.83,4.44-4,5.77-5.54,6.11a18.55,18.55,0,0,1-1.88.25c-2.08.21-4.92.49-5.44,1.93a5.44,5.44,0,0,1-3.46,3.22h-.1a9.25,9.25,0,0,0-3.72.72,4.78,4.78,0,0,1-1,1.6H78.39a.5.5,0,0,1,.5.5A.5.5,0,0,1,78.39,135.1Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 75.1653px 125.571px;"
                                    id="el64mqzj4xyk9" class="animable"></path>
                                <path
                                    d="M117.83,407.32H99.42a.5.5,0,0,1-.5-.5.5.5,0,0,1,.5-.5h18.12c.4-.79,1.38-3.43-1.49-6-1.43-1.27-3.54-1-5.41-.69-1.65.24-3.21.47-4.12-.45-.65-.65-.85-1.73-.61-3.4-.08-.74-1.08-8.49-5.92-10.53a8.29,8.29,0,0,0-6.58-.14,7.38,7.38,0,0,0-4,3.81c-.73,1.82-1.36,3.39-2.79,3.89-1.15.41-2.67,0-4.77-1.15-2.87-1.62-5.46-2.16-7.32-1.51a3.86,3.86,0,0,0-2.36,2.3c-1.83,4.44-4,5.78-5.54,6.11a16.17,16.17,0,0,1-1.87.25c-2.08.21-4.93.49-5.45,1.93A5.44,5.44,0,0,1,55.88,404h-.1a9.25,9.25,0,0,0-3.72.72,4.91,4.91,0,0,1-1,1.61H93.3a.5.5,0,0,1,.5.5.5.5,0,0,1-.5.5H49.94a.51.51,0,0,1-.36-.86,6.79,6.79,0,0,0,1.53-2c.25-1,2.6-1.3,4.55-1.41a4.5,4.5,0,0,0,2.74-2.58c.73-2,3.94-2.35,6.29-2.59.71-.07,1.32-.13,1.75-.22,1.82-.41,3.54-2.37,4.84-5.52a4.89,4.89,0,0,1,3-2.87c2.13-.74,5-.17,8.14,1.59,1.81,1,3.1,1.37,3.95,1.08,1-.36,1.53-1.67,2.19-3.32A8.27,8.27,0,0,1,93,384.21a9.25,9.25,0,0,1,7.35.14c5.61,2.37,6.5,11,6.53,11.41a.48.48,0,0,1,0,.12c-.2,1.33-.09,2.21.31,2.62.56.56,1.88.37,3.28.16,2-.29,4.44-.65,6.21.93,4,3.57,1.57,7.46,1.54,7.5A.5.5,0,0,1,117.83,407.32Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 84.2096px 395.423px;"
                                    id="el27urbtkhl0s" class="animable"></path>
                                <path
                                    d="M255.56,272.48H224.43a.5.5,0,0,1-.5-.5.5.5,0,0,1,.5-.5h30.84c.61-1.11,2.8-6-2.5-10.71-2.53-2.25-6.19-1.71-9.42-1.24-2.82.41-5.26.76-6.68-.66-1-1-1.32-2.77-.92-5.5-.11-1-1.76-14.56-10.22-18.14a14.36,14.36,0,0,0-11.39-.23,12.88,12.88,0,0,0-6.91,6.63c-1.2,3-2.23,5.58-4.51,6.38-1.84.65-4.32,0-7.78-1.92-4.93-2.78-9.42-3.7-12.65-2.58a6.87,6.87,0,0,0-4.2,4.09c-2.36,5.75-5.61,9.35-9.13,10.13-.79.17-1.87.28-3.12.41-3.61.36-8.55.86-9.5,3.48a8.85,8.85,0,0,1-5.61,5.23h-.1c-3.28.18-6.41.83-6.56,1.38a9.81,9.81,0,0,1-2.14,3.24h72.16a.51.51,0,0,1,.5.5.5.5,0,0,1-.5.5H140.77a.5.5,0,0,1-.35-.85c.66-.66,2.42-2.59,2.68-3.63.39-1.58,5.27-2,7.42-2.13a8,8,0,0,0,4.88-4.59c1.17-3.22,6.47-3.75,10.34-4.14a27.25,27.25,0,0,0,3-.39c3.19-.71,6.18-4.09,8.42-9.53a7.85,7.85,0,0,1,4.79-4.66c3.51-1.21,8.29-.27,13.47,2.66,3.2,1.81,5.41,2.39,7,1.85,1.85-.65,2.76-2.93,3.91-5.81a13.66,13.66,0,0,1,7.46-7.18,15.37,15.37,0,0,1,12.16.23c9.29,3.94,10.77,18.41,10.83,19v.12c-.36,2.39-.15,3.93.63,4.71,1.07,1.07,3.27.75,5.82.38,3.45-.5,7.35-1.07,10.23,1.48,6.57,5.84,2.59,12.17,2.55,12.23A.49.49,0,0,1,255.56,272.48Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 198.759px 252.704px;"
                                    id="elrg1jfileisc" class="animable"></path>
                            </g>
                            <g id="freepik--Squares--inject-124" class="animable"
                                style="transform-origin: 412.615px 256.991px;">
                                <path
                                    d="M388.82,86.52H361.23a.5.5,0,0,1-.5-.5V58.43a.5.5,0,0,1,.5-.5h27.59a.5.5,0,0,1,.5.5V86A.5.5,0,0,1,388.82,86.52Zm-27.09-1h26.59V58.93H361.73Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 375.025px 72.225px;"
                                    id="el4v1cudo455d" class="animable"></path>
                                <path
                                    d="M415.57,98.22H402.2a.5.5,0,0,1-.5-.5V84.34a.5.5,0,0,1,.5-.5h13.37a.5.5,0,0,1,.5.5V97.72A.5.5,0,0,1,415.57,98.22Zm-12.87-1h12.37V84.84H402.7Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 408.885px 91.03px;"
                                    id="elgxoib31yjom" class="animable"></path>
                                <path
                                    d="M388.82,121.63h-8.36a.5.5,0,0,1-.5-.5v-8.36a.5.5,0,0,1,.5-.5h8.36a.5.5,0,0,1,.5.5v8.36A.5.5,0,0,1,388.82,121.63Zm-7.86-1h7.36v-7.36H381Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 384.64px 116.95px;"
                                    id="elrwq8yokquo8" class="animable"></path>
                                <path
                                    d="M406.38,125.81h-5.85a.5.5,0,0,1-.5-.5v-5.85a.5.5,0,0,1,.5-.5h5.85a.5.5,0,0,1,.5.5v5.85A.5.5,0,0,1,406.38,125.81Zm-5.35-1h4.85V120H401Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 403.455px 122.385px;"
                                    id="elrayn4cpdgzk" class="animable"></path>
                                <path
                                    d="M405.41,349.19h-6.69a.5.5,0,0,1-.5-.5V342a.5.5,0,0,1,.5-.5h6.69a.5.5,0,0,1,.5.5v6.69A.51.51,0,0,1,405.41,349.19Zm-6.19-1h5.69V342.5h-5.69Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 402.065px 345.345px;"
                                    id="eltj965nmz3" class="animable"></path>
                                <path
                                    d="M481.62,206.07h-9.2a.5.5,0,0,1-.5-.5v-9.2a.51.51,0,0,1,.5-.5h9.2a.5.5,0,0,1,.5.5v9.2A.5.5,0,0,1,481.62,206.07Zm-8.7-1h8.2v-8.2h-8.2Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 477.02px 200.97px;"
                                    id="ela93pzxqt2lb" class="animable"></path>
                                <path
                                    d="M405.54,229.48h-8.36a.5.5,0,0,1-.5-.5v-8.36a.5.5,0,0,1,.5-.5h8.36a.5.5,0,0,1,.5.5V229A.5.5,0,0,1,405.54,229.48Zm-7.86-1H405v-7.36h-7.36Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 401.36px 224.8px;"
                                    id="elyuhvth6uqy" class="animable"></path>
                                <path
                                    d="M387.29,267.26h-18.4a.5.5,0,0,1-.5-.5V248.37a.5.5,0,0,1,.5-.5h18.4a.5.5,0,0,1,.5.5v18.39A.5.5,0,0,1,387.29,267.26Zm-17.9-1h17.4V248.87h-17.4Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 378.09px 257.565px;"
                                    id="el7yeqcwnf849" class="animable"></path>
                                <path
                                    d="M432.3,328.13h-7.53a.5.5,0,0,1-.5-.5v-7.52a.5.5,0,0,1,.5-.5h7.53a.5.5,0,0,1,.5.5v7.52A.5.5,0,0,1,432.3,328.13Zm-7-1h6.53v-6.52h-6.53Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 428.535px 323.87px;"
                                    id="elkpgujkoain" class="animable"></path>
                                <path
                                    d="M379.62,415.92H357.05a.5.5,0,0,1-.5-.5V392.84a.5.5,0,0,1,.5-.5h22.57a.5.5,0,0,1,.5.5v22.58A.5.5,0,0,1,379.62,415.92Zm-22.07-1h21.57V393.34H357.55Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 368.335px 404.13px;"
                                    id="elu4frg9qesyj" class="animable"></path>
                                <path
                                    d="M418.92,445.18H407.21a.5.5,0,0,1-.5-.5V433a.51.51,0,0,1,.5-.5h11.71a.51.51,0,0,1,.5.5v11.71A.5.5,0,0,1,418.92,445.18Zm-11.21-1h10.71V433.47H407.71Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 413.065px 438.84px;"
                                    id="elfrnpsytpqur" class="animable"></path>
                                <path
                                    d="M387.15,376.62H370.43a.5.5,0,0,1-.5-.5V359.4a.5.5,0,0,1,.5-.5h16.72a.51.51,0,0,1,.5.5v16.72A.5.5,0,0,1,387.15,376.62Zm-16.22-1h15.72V359.9H370.93Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 378.79px 367.76px;"
                                    id="ell5y9ek3klmq" class="animable"></path>
                                <path
                                    d="M408.89,398.36h-8.36a.5.5,0,0,1-.5-.5V389.5a.5.5,0,0,1,.5-.5h8.36a.5.5,0,0,1,.5.5v8.36A.5.5,0,0,1,408.89,398.36Zm-7.86-1h7.36V390H401Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 404.71px 393.68px;"
                                    id="elsu56pvkw24n" class="animable"></path>
                                <path
                                    d="M387.15,443.51h-8.36a.5.5,0,0,1-.5-.5v-8.36a.5.5,0,0,1,.5-.5h8.36a.5.5,0,0,1,.5.5V443A.51.51,0,0,1,387.15,443.51Zm-7.86-1h7.36v-7.36h-7.36Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 382.97px 438.83px;"
                                    id="el2u9wcz4m4tu" class="animable"></path>
                                <path
                                    d="M434,433.47H423.1a.5.5,0,0,1-.5-.5V422.11a.5.5,0,0,1,.5-.5H434a.5.5,0,0,1,.5.5V433A.5.5,0,0,1,434,433.47Zm-10.37-1h9.87v-9.86H423.6Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 428.55px 427.54px;"
                                    id="el2golzkmzb8j" class="animable"></path>
                                <path
                                    d="M476.61,439.33h-5a.5.5,0,0,1-.5-.5v-5a.5.5,0,0,1,.5-.5h5a.5.5,0,0,1,.5.5v5A.51.51,0,0,1,476.61,439.33Zm-4.52-1h4v-4h-4Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 474.11px 436.33px;"
                                    id="el4zl2c265qtw" class="animable"></path>
                                <path
                                    d="M447.34,469.42H439a.5.5,0,0,1-.5-.5v-8.36a.51.51,0,0,1,.5-.5h8.36a.5.5,0,0,1,.5.5v8.36A.5.5,0,0,1,447.34,469.42Zm-7.86-1h7.36v-7.36h-7.36Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 443.18px 464.74px;"
                                    id="elxvop01kl7z" class="animable"></path>
                                <path
                                    d="M481.62,348.2h-6.69a.51.51,0,0,1-.5-.5V341a.5.5,0,0,1,.5-.5h6.69a.5.5,0,0,1,.5.5v6.69A.5.5,0,0,1,481.62,348.2Zm-6.19-1h5.69v-5.69h-5.69Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 478.275px 344.35px;"
                                    id="el5kovy39x6mm" class="animable"></path>
                                <path
                                    d="M442.33,57.25H434a.5.5,0,0,1-.5-.5V48.39a.5.5,0,0,1,.5-.5h8.36a.51.51,0,0,1,.5.5v8.36A.5.5,0,0,1,442.33,57.25Zm-7.86-1h7.36V48.89h-7.36Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 438.18px 52.5705px;"
                                    id="elvqs3oefsbm" class="animable"></path>
                                <path
                                    d="M398.85,48.89H383.8a.5.5,0,0,1-.5-.5v-15a.51.51,0,0,1,.5-.5h15.05a.5.5,0,0,1,.5.5v15A.5.5,0,0,1,398.85,48.89Zm-14.55-1h14.05v-14H384.3Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 391.325px 40.89px;"
                                    id="elud9soigzlcn" class="animable"></path>
                                <path
                                    d="M354.11,487.77a.5.5,0,0,1-.5-.5V475h-10a.5.5,0,0,1-.5-.5v-15a.51.51,0,0,1,.5-.5h19.76V437.13H353.13a.5.5,0,0,1-.5-.5V409.57h-6.9a.5.5,0,0,1-.5-.5V386a.5.5,0,0,1,.5-.5h8.73v-11H344.8a.5.5,0,0,1-.5-.5V352.73a.51.51,0,0,1,.5-.5h11.51V294.12H345.73a.5.5,0,0,1-.5-.5v-15.7a.5.5,0,0,1,.5-.5H357V240.06a.5.5,0,0,1,.5-.5h13.63v-8.24H345.26a.5.5,0,0,1-.5-.5V147.7a.5.5,0,0,1,.5-.5h10.12v-8.74a.51.51,0,0,1,.5-.5h9.66V116.8H343.93a.5.5,0,0,1-.5-.5V87.67a.5.5,0,0,1,.5-.5h11.45V70.62h-8.73a.5.5,0,0,1-.5-.5V26.71a.5.5,0,0,1,.5-.5.51.51,0,0,1,.5.5V69.62h8.73a.5.5,0,0,1,.5.5V87.67a.5.5,0,0,1-.5.5H344.43V115.8H366a.5.5,0,0,1,.5.5v22.16a.5.5,0,0,1-.5.5h-9.66v8.74a.5.5,0,0,1-.5.5H345.76v82.12h25.83a.5.5,0,0,1,.5.5v9.24a.51.51,0,0,1-.5.5H358v37.36a.5.5,0,0,1-.5.5H346.23v14.7h10.58a.51.51,0,0,1,.5.5v59.11a.5.5,0,0,1-.5.5H345.3v20.24H355a.5.5,0,0,1,.5.5v12a.5.5,0,0,1-.5.5h-8.73v22.09h6.9a.5.5,0,0,1,.5.5v27.06h10.28a.51.51,0,0,1,.5.5V459.5a.5.5,0,0,1-.5.5H344.15v14h10a.51.51,0,0,1,.5.5v12.74A.5.5,0,0,1,354.11,487.77Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 357.6px 256.991px;"
                                    id="elcujnlnywqll" class="animable"></path>
                            </g>
                            <g id="freepik--Character--inject-124" class="animable"
                                style="transform-origin: 320.831px 225.516px;">
                                <path
                                    d="M207.7,320.87s-5.43-3.16-6.55-4.29-10.39-11.75-12.65-11.07-5.2,5.65-7.68,9.94-10.17,13.32-12.2,19.42.9,5.2,2,4.29a150.18,150.18,0,0,1,16-9.26,64.61,64.61,0,0,1,7.23-2.93l8.81,3.84Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 187.811px 322.646px;"
                                    id="elk8ed4gtgy2" class="animable"></path>
                                <path
                                    d="M169.05,340.31a1.55,1.55,0,0,1-.89-.26c-1-.68-1-2.43,0-5.34,1.37-4.12,5.28-9.55,8.41-13.92,1.61-2.24,3-4.17,3.82-5.59,3-5.15,5.64-9.47,8-10.17,1.58-.48,5.1,2.46,12.16,10.13.47.52.82.9,1,1.06a57.77,57.77,0,0,0,6.45,4.22.49.49,0,0,1,.19.65l-5,9.94a.49.49,0,0,1-.64.23l-8.64-3.76a71.76,71.76,0,0,0-7,2.86A145.12,145.12,0,0,0,171,339.55,3.26,3.26,0,0,1,169.05,340.31ZM188.79,306a.34.34,0,0,0-.15,0c-2.14.64-5.3,6.1-7.39,9.71-.85,1.46-2.25,3.41-3.87,5.67-3.1,4.31-7,9.68-8.28,13.66-1.15,3.44-.51,4.1-.37,4.2.33.23,1.1-.05,1.61-.46a151.24,151.24,0,0,1,16.14-9.32,64.35,64.35,0,0,1,7.29-3,.47.47,0,0,1,.35,0l8.37,3.65,4.55-9.1a51.62,51.62,0,0,1-6.25-4.13c-.17-.17-.53-.56-1-1.09C192.37,307.79,189.69,306,188.79,306Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 187.828px 322.645px;"
                                    id="elxtkf6ij2crk" class="animable"></path>
                                <path
                                    d="M198.42,313.65c-3.24-3.47-8.33-8.62-9.92-8.14-2.26.68-5.2,5.65-7.68,9.94s-10.17,13.32-12.2,19.42.9,5.2,2,4.29a150.18,150.18,0,0,1,16-9.26c2.12-1,3.74-1.63,4.91-2.09l-4.23-4.23S193.65,316.7,198.42,313.65Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 183.171px 322.646px;"
                                    id="elt36p1ga5ci" class="animable"></path>
                                <path
                                    d="M169.05,340.31a1.55,1.55,0,0,1-.89-.26c-1-.68-1-2.43,0-5.34,1.37-4.12,5.28-9.55,8.41-13.92,1.61-2.24,3-4.17,3.82-5.59,3-5.15,5.64-9.47,8-10.17,1-.3,3,.38,10.44,8.28a.48.48,0,0,1,.13.4.49.49,0,0,1-.23.36c-4.05,2.59-9.28,8.06-10.63,9.49l3.89,3.89a.53.53,0,0,1,.14.46.49.49,0,0,1-.31.36c-1.43.57-3.08,1.27-4.88,2.09A145.12,145.12,0,0,0,171,339.55,3.26,3.26,0,0,1,169.05,340.31ZM188.75,306l-.11,0c-2.14.64-5.3,6.1-7.39,9.71-.85,1.46-2.25,3.41-3.87,5.67-3.1,4.31-7,9.68-8.28,13.66-1.15,3.44-.51,4.1-.37,4.2.33.23,1.1-.05,1.61-.46a151.24,151.24,0,0,1,16.14-9.32q2.31-1.05,4.23-1.83l-3.7-3.69a.51.51,0,0,1,0-.69c.25-.27,6-6.51,10.65-9.68C191.22,306.74,189.29,306,188.75,306Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 183.187px 322.643px;"
                                    id="eldv6w5knn4h4" class="animable"></path>
                                <path
                                    d="M191.26,306.79l-.35-.26-.07,0-.52-.35-.13-.08-.38-.22-.11-.06-.43-.18-.08,0a1.09,1.09,0,0,0-.3-.07h-.09a.74.74,0,0,0-.3,0c-2.26.68-5.2,5.65-7.68,9.94s-10.17,13.32-12.2,19.42c-.87,2.63-.83,3.95-.4,4.54,2-6.14,8.94-15.17,14.86-22.38C187.38,311.79,189.91,308.56,191.26,306.79Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 179.591px 322.512px;"
                                    id="el4rhxsls76nt" class="animable"></path>
                                <path
                                    d="M168.22,339.91a.49.49,0,0,1-.4-.21c-.62-.85-.51-2.48.33-5,1.37-4.12,5.28-9.55,8.41-13.92,1.61-2.24,3-4.17,3.82-5.59,3-5.15,5.64-9.47,8-10.17a1.27,1.27,0,0,1,.49,0H189l.37.09a4.37,4.37,0,0,1,.58.23l.1.06.43.24.14.09.54.36.38.28a.61.61,0,0,1,.22.36.53.53,0,0,1-.07.39c-1.38,1.79-3.91,5-8.2,10.24-5.39,6.58-12.79,16-14.76,22.22a.5.5,0,0,1-.4.34ZM188.69,306h-.05c-2.14.64-5.3,6.1-7.39,9.71-.85,1.46-2.25,3.41-3.87,5.67-3.1,4.31-7,9.68-8.28,13.66a15.25,15.25,0,0,0-.59,2.21c2.67-6.11,8.88-14.07,14.18-20.53,4-4.84,6.44-8,7.86-9.82-.2-.15-.35-.25-.49-.34l-.13-.07a2.57,2.57,0,0,0-.35-.2l.11-.51-.22.45-.36-.16-.28-.07Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 179.598px 322.458px;"
                                    id="eldzdp8b1z10a" class="animable"></path>
                                <path
                                    d="M451.26,339s11.52-7.45,14.45-9.94,6.78-5.19,7.68-3.38.23,7.22-2.93,14.22-11.3,16.94-12,17.85-1.36,3.61-4.75,3.84-10.16-7.91-10.16-7.91Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 458.654px 343.342px;"
                                    id="elxdxetvi22u" class="animable"></path>
                                <path
                                    d="M453.61,362.07c-3.57,0-9.72-7.25-10.42-8.09a.5.5,0,0,1-.06-.55l7.68-14.68a.47.47,0,0,1,.18-.19c.11-.07,11.52-7.46,14.4-9.9,5.3-4.48,6.87-4.16,7.38-4.05a1.47,1.47,0,0,1,1.07.82c.93,1.87.42,7.25-2.93,14.66-1.88,4.17-5.77,10-11.56,17.34l-.46.6a6.1,6.1,0,0,0-.38.63,5.47,5.47,0,0,1-4.73,3.41Zm-9.43-8.47c2,2.36,7,7.65,9.53,7.47a4.51,4.51,0,0,0,3.92-2.88,5.8,5.8,0,0,1,.46-.76l.48-.62c5.73-7.27,9.58-13,11.43-17.13,3-6.72,3.78-12.13,2.95-13.8a.49.49,0,0,0-.38-.29c-.48-.1-2.09.07-6.53,3.83-2.81,2.38-13.14,9.09-14.4,9.91Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 458.663px 343.314px;"
                                    id="elhgtwrorqs" class="animable"></path>
                                <path
                                    d="M453.74,361.57c3.39-.23,4.07-2.94,4.75-3.84s8.8-10.84,12-17.85,3.84-12.42,2.93-14.22a1,1,0,0,0-.83-.58A47.1,47.1,0,0,1,469.33,337c-2.34,5.77-11.24,17.66-16.53,24.48A2.68,2.68,0,0,0,453.74,361.57Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 463.299px 343.329px;"
                                    id="elyb6we3qrj2t" class="animable"></path>
                                <path
                                    d="M453.63,362.07a3.36,3.36,0,0,1-1-.16.49.49,0,0,1-.35-.32.5.5,0,0,1,.08-.46c5.15-6.64,14.14-18.63,16.46-24.37A46.57,46.57,0,0,0,472.07,325a.45.45,0,0,1,.19-.33.48.48,0,0,1,.37-.1,1.5,1.5,0,0,1,1.21.84c.93,1.87.42,7.25-2.93,14.66-1.89,4.18-5.78,10-11.56,17.35-.23.29-.39.49-.46.59a6.1,6.1,0,0,0-.38.63,5.47,5.47,0,0,1-4.73,3.41ZM473,325.91a48.57,48.57,0,0,1-3.17,11.23c-2.29,5.65-10.83,17.14-16.08,23.93a4.5,4.5,0,0,0,3.92-2.88,5.8,5.8,0,0,1,.46-.76c.07-.1.23-.31.47-.61,5.74-7.27,9.59-13,11.44-17.14C473,333,473.77,327.62,473,325.91Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 463.254px 343.317px;"
                                    id="el3x05qeu2aw6" class="animable"></path>
                                <path
                                    d="M260.77,249.32a17.59,17.59,0,0,0-3.34,11.6c.52,6.86,14.94,19.69,14.94,19.69s5.8-8.79,11.43-13.36,14.59-8.09,14.59-8.09l41.14,13.54s16.35-10.37,19.16-20.74-3.87-33.76-7.39-39.21a66.51,66.51,0,0,1-5.45-10.37l-56.25,7.73s1.23,8.27-7,17.59S260.77,249.32,260.77,249.32Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 308.375px 241.495px;"
                                    id="eljqj5mj4bful" class="animable"></path>
                                <path
                                    d="M272.37,281.11A.5.5,0,0,1,272,281c-.6-.53-14.58-13.05-15.11-20a17.88,17.88,0,0,1,3.45-12s0,0,.05-.05,13.61-12.4,21.76-21.59c8-9,6.92-17.09,6.91-17.17a.52.52,0,0,1,.1-.38.53.53,0,0,1,.33-.19l56.26-7.74a.5.5,0,0,1,.53.32,66.33,66.33,0,0,0,5.4,10.28c3.59,5.56,10.26,29.24,7.45,39.61s-18.7,20.61-19.38,21a.52.52,0,0,1-.42.06l-41-13.48c-1.24.5-9.21,3.81-14.29,7.94-5.5,4.47-11.27,13.16-11.32,13.25a.51.51,0,0,1-.36.22Zm-11.24-31.45a17.32,17.32,0,0,0-3.21,11.22c.46,5.93,12,16.79,14.36,19,1.31-1.92,6.27-9,11.2-13,5.62-4.56,14.63-8.13,14.73-8.16a.47.47,0,0,1,.33,0l40.91,13.46c1.86-1.21,16.19-10.87,18.76-20.32,2.75-10.14-3.81-33.35-7.33-38.81a69,69,0,0,1-5.34-10.09l-55.4,7.61c.14,2,.06,9.3-7.2,17.49C274.94,237,261.86,249,261.13,249.66Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 308.32px 241.494px;"
                                    id="eldzdqljrhrz" class="animable"></path>
                                <path
                                    d="M291.05,259.1s-4.52,17.61-3.39,24.61a34.85,34.85,0,0,0,4.29,12l-9.88,38.9-76.18-15.76-5,14.46s48.18,11.91,66.25,17.56,28,9.48,29.81,8.81A11.54,11.54,0,0,0,300.6,357l22.3-54,52.81,3.69s16,13.77,28.46,23,39.63,26.74,39.63,26.74a10.77,10.77,0,0,0,5.2-6.55A102.69,102.69,0,0,0,451.26,339a23.05,23.05,0,0,0-4.29-3.39c-1.81-.9-4.29-.22-5.88-.67s-37.15-34.87-41.21-38.71-9.26-12.88-15.13-15.14-45.82-12-45.82-12l-.67-5.87Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 326.075px 309.428px;"
                                    id="eljz5vwbdn3ao" class="animable"></path>
                                <path
                                    d="M296.43,360.23c-1.87,0-6.12-1.36-14.74-4.19-4-1.3-9-2.93-14.67-4.71-17.85-5.58-65.74-17.44-66.22-17.55a.54.54,0,0,1-.32-.25.47.47,0,0,1,0-.4l5-14.46a.49.49,0,0,1,.57-.32L281.71,334l9.71-38.23a35.41,35.41,0,0,1-4.25-12c-1.13-7,3.21-24.09,3.4-24.82a.49.49,0,0,1,.52-.37l47.21,4.06a.51.51,0,0,1,.45.44l.64,5.53c4.14,1,39.92,9.82,45.54,12,4.05,1.56,7.71,6.14,10.94,10.19a53.32,53.32,0,0,0,4.35,5l5.63,5.4c10.12,9.71,33.81,32.46,35.41,33.2a8.27,8.27,0,0,0,2.16.15,8.13,8.13,0,0,1,3.77.56,22,22,0,0,1,4.42,3.48.48.48,0,0,1,.14.42A101.62,101.62,0,0,1,449.48,350a11.18,11.18,0,0,1-5.46,6.86.48.48,0,0,1-.49,0c-.27-.17-27.37-17.59-39.66-26.76-11.71-8.73-26.82-21.63-28.36-22.95l-52.29-3.64-22.16,53.7a.42.42,0,0,1-.09.14,11.81,11.81,0,0,1-3.81,2.84A2.12,2.12,0,0,1,296.43,360.23Zm-94.86-27.29c5.32,1.32,48.89,12.16,65.75,17.43,5.71,1.78,10.68,3.42,14.69,4.72,8,2.61,13.72,4.5,14.8,4.1a10.78,10.78,0,0,0,3.36-2.52l22.26-53.95a.5.5,0,0,1,.5-.31l52.82,3.69a.53.53,0,0,1,.29.12c.16.14,16.16,13.87,28.43,23,11.64,8.68,36.6,24.78,39.36,26.56a10.44,10.44,0,0,0,4.69-6.11,96.49,96.49,0,0,0,2.2-10.52,20.4,20.4,0,0,0-4-3.12,7.47,7.47,0,0,0-3.31-.45,9.19,9.19,0,0,1-2.47-.19c-1-.29-10.72-9.36-35.8-33.44-2.77-2.67-4.82-4.63-5.63-5.39a54.88,54.88,0,0,1-4.44-5.14c-3.15-3.95-6.72-8.43-10.52-9.89-5.78-2.22-45.36-11.92-45.76-12a.49.49,0,0,1-.37-.43l-.63-5.47-46.38-4c-.66,2.68-4.28,17.77-3.27,24a34.31,34.31,0,0,0,4.22,11.79.52.52,0,0,1,.06.39l-9.88,38.9a.5.5,0,0,1-.59.37l-75.75-15.67Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 326.096px 309.411px;"
                                    id="el37h8zuk4qx9" class="animable"></path>
                                <path
                                    d="M291.28,225.22s.9,23,.67,23.71-2,9.26-.9,10.17S332.61,265,334.64,265s3.39.45,3.62-1.81.45-4.52.45-4.52l12.19-47.43-3.38-34.1-54,4.29Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 320.796px 221.088px;"
                                    id="elr0k7afh3h8c" class="animable"></path>
                                <path
                                    d="M336.18,265.5h-.68l-.86,0c-.36,0-42.41-4.79-43.9-6s.71-10.63.74-10.72c.13-.8-.35-14.52-.7-23.53v-.05L293,181.37a.5.5,0,0,1,.46-.47l54-4.29a.5.5,0,0,1,.53.45l3.39,34.1a.55.55,0,0,1,0,.18l-12.2,47.43-.44,4.44C338.55,265.24,337.46,265.5,336.18,265.5Zm-44.4-40.28c.27,7,.88,23.18.65,23.87-.37,1.12-1.78,8.83-1.06,9.62,1.61.82,41,5.76,43.27,5.76l.89,0c1.56.05,2.08.07,2.23-1.38l.45-4.52,12.19-47.42-3.33-33.52L294,181.86Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 320.805px 221.054px;"
                                    id="elvojk0a5ugxj" class="animable"></path>
                                <path
                                    d="M323.64,231.17a.51.51,0,0,1-.4-.2.5.5,0,0,1,.11-.7l2.65-2a.5.5,0,1,1,.59.8l-2.65,2A.47.47,0,0,1,323.64,231.17Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 324.991px 229.654px;"
                                    id="elhf8pj0ims3v" class="animable"></path>
                                <path
                                    d="M292.32,254.13A.5.5,0,0,1,292,254a.51.51,0,0,1,.05-.71,91.26,91.26,0,0,1,9.39-7.17c2.23-1.31,13.09-9.27,19.37-13.9a.5.5,0,1,1,.59.8c-7.68,5.67-17.3,12.7-19.46,14a91.15,91.15,0,0,0-9.24,7.07A.5.5,0,0,1,292.32,254.13Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 306.764px 243.119px;"
                                    id="elnk0ft7gjjc" class="animable"></path>
                                <path
                                    d="M303.83,242.35a.52.52,0,0,1-.38-.17.51.51,0,0,1,.06-.71c7.29-6.21,22-21.72,22.15-21.88a.5.5,0,1,1,.72.69c-.14.16-14.89,15.71-22.23,21.95A.47.47,0,0,1,303.83,242.35Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 314.94px 230.879px;"
                                    id="elig3zf9bvg8o" class="animable"></path>
                                <path
                                    d="M306,258.52a.5.5,0,0,1-.48-.38.5.5,0,0,1,.35-.61c5-1.33,11.83-3.18,16.66-4.5a.5.5,0,0,1,.61.35.51.51,0,0,1-.35.62c-4.83,1.32-11.63,3.17-16.66,4.5Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 314.33px 255.767px;"
                                    id="el4fi6zzqy6tq" class="animable"></path>
                                <path
                                    d="M325.88,253.14a.52.52,0,0,1-.49-.37.5.5,0,0,1,.35-.61l5.35-1.47a.5.5,0,0,1,.62.34.5.5,0,0,1-.35.62L326,253.12Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 328.551px 251.905px;"
                                    id="el7pu2upo8uf5" class="animable"></path>
                                <path
                                    d="M428.66,113.6l10.55-17.41s4.57-7.91,4.92-6.68a2.73,2.73,0,0,1-.18,2.82c-.7,1.4-3.16,9.31-3.16,9.31l7.73-7.91s2.29-1.23,1.94.35-5.45,8.27-5.45,8.27,9.14-3.7,9.49-2.64-8.61,6.86-8.61,6.86,9.14.35,9,1.4-7.91,1.76-7.91,1.76-1.05,2.29-5.27,5.27a30.64,30.64,0,0,1-7.56,4Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 441.776px 104.19px;"
                                    id="elhi177choibw" class="animable"></path>
                                <path
                                    d="M434.11,119.55a.47.47,0,0,1-.35-.15L428.3,114a.5.5,0,0,1-.07-.61l10.55-17.41c4.16-7.19,5-7.08,5.29-7a.64.64,0,0,1,.54.49l.1.33a3,3,0,0,1-.31,2.84c-.46.92-1.73,4.81-2.5,7.25l6.27-6.42.12-.09c.48-.26,1.68-.81,2.34-.31a1.09,1.09,0,0,1,.32,1.21c-.28,1.23-2.93,5-4.48,7,2.88-1.1,7.1-2.57,8.11-2.1a.75.75,0,0,1,.4.42c.11.34.44,1.32-7.53,6.59,2.86.16,7.07.53,7.74,1.35a.73.73,0,0,1,.16.56c-.06.36-.24,1.42-8.09,2.15a18.27,18.27,0,0,1-5.3,5.21,30.58,30.58,0,0,1-7.7,4.11A.4.4,0,0,1,434.11,119.55Zm-4.82-6,4.95,5a31.86,31.86,0,0,0,7.14-3.87c4-2.86,5.1-5.06,5.11-5.08a.52.52,0,0,1,.41-.29,33.47,33.47,0,0,0,7.22-1.25,41.46,41.46,0,0,0-8.25-.91.51.51,0,0,1-.47-.37.5.5,0,0,1,.22-.55c3.49-2.26,7.34-5.06,8.22-6.14-1.28.09-5.25,1.43-8.64,2.8a.51.51,0,0,1-.59-.16.5.5,0,0,1,0-.61c2-2.65,5.12-7,5.36-8.06a.59.59,0,0,0,0-.25,3.68,3.68,0,0,0-1.16.41L441.15,102a.5.5,0,0,1-.84-.49c.1-.33,2.48-8,3.2-9.4.51-1,.5-1.21.28-2a49.29,49.29,0,0,0-4.15,6.31Zm14.36-23.87Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 441.757px 104.266px;"
                                    id="el2i5c1kf1n5d" class="animable"></path>
                                <path
                                    d="M433.41,109.2a26,26,0,0,0,8.43-3.34c3.7-2.46,7-4.57,7-3.34s-4.22,4.75-4.75,5.1-1.41,3-3.17,5.28-6.5,4.21-6.5,4.21"
                                    style="fill: rgb(255, 255, 255); transform-origin: 441.125px 109.634px;"
                                    id="elxspltoy85ln" class="animable"></path>
                                <path
                                    d="M434.46,117.61a.48.48,0,0,1-.46-.31.5.5,0,0,1,.27-.65c.05,0,4.64-1.91,6.3-4.06a23,23,0,0,0,2.19-3.67c.51-1,.77-1.5,1.09-1.71.91-.61,4.17-3.55,4.5-4.54-1.06.16-4.78,2.64-6.23,3.61a26,26,0,0,1-8.62,3.41.49.49,0,0,1-.59-.4.5.5,0,0,1,.4-.58,25.68,25.68,0,0,0,8.26-3.26c4.92-3.29,6.58-4.12,7.39-3.68a.83.83,0,0,1,.42.75c0,1.66-4.92,5.48-5,5.52a7.57,7.57,0,0,0-.76,1.33,22.74,22.74,0,0,1-2.29,3.83c-1.82,2.36-6.51,4.3-6.71,4.38A.63.63,0,0,1,434.46,117.61Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 441.141px 109.636px;"
                                    id="elkto3wl9hczj" class="animable"></path>
                                <polygon points="423.91 116.76 429.54 111.84 436.22 120.45 431.12 124.85 423.91 116.76"
                                    style="fill: rgb(255, 255, 255); transform-origin: 430.065px 118.345px;"
                                    id="elpbyisrm62p" class="animable"></polygon>
                                <path
                                    d="M431.12,125.35a.5.5,0,0,1-.37-.17l-7.21-8.08a.51.51,0,0,1-.13-.37.49.49,0,0,1,.17-.34l5.63-4.93a.51.51,0,0,1,.38-.12.55.55,0,0,1,.34.19l6.68,8.62a.48.48,0,0,1-.07.68l-5.09,4.4A.52.52,0,0,1,431.12,125.35Zm-6.5-8.54,6.55,7.34,4.36-3.76-6.06-7.82Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 430.064px 118.344px;"
                                    id="el94n6gp12yx" class="animable"></path>
                                <path
                                    d="M342,188.31s-.18,3.35,4.22,15.3a391.72,391.72,0,0,1,11.25,38.85,52.43,52.43,0,0,1,1.23,9.5s5.45-13.72,5.27-27.78-8.26-33.76-8.26-33.76,30.24-20.39,35.51-24.78,41-39.38,41-39.38l-8.26-9.5-40.78,28.66L348.49,163s-7,4-8.09,6-2.63,8.26-2.28,10.19S342,188.31,342,188.31Z"
                                    style="fill: rgb(87, 128, 183); transform-origin: 385.145px 184.36px;"
                                    id="eletzvoiydydo" class="animable"></path>
                                <path
                                    d="M358.69,252.46h-.1a.5.5,0,0,1-.4-.49,53,53,0,0,0-1.22-9.4,393.55,393.55,0,0,0-11.23-38.78c-4-10.75-4.24-14.6-4.25-15.35-.46-.93-3.52-7.3-3.86-9.17-.39-2.1,1.28-8.59,2.34-10.52s7.54-5.75,8.27-6.17L382.9,145l40.72-28.62a.52.52,0,0,1,.67.08l8.26,9.5a.49.49,0,0,1,0,.68c-.35.35-35.76,35.05-41,39.41-5,4.16-31.73,22.24-35.22,24.59,1.12,2.82,8,20.64,8.15,33.56.18,14-5.25,27.83-5.31,28A.5.5,0,0,1,358.69,252.46Zm-16.2-64.12s-.08,3.49,4.19,15.1A392.42,392.42,0,0,1,358,242.36a65.56,65.56,0,0,1,1.09,7.13c1.51-4.47,4.55-14.85,4.42-25.3-.17-13.81-8.14-33.38-8.22-33.58a.49.49,0,0,1,.18-.6c.3-.2,30.28-20.43,35.47-24.76,4.93-4.1,36.94-35.44,40.6-39l-7.66-8.8-40.42,28.4-34.69,17.61c-1.9,1.1-7.07,4.29-7.88,5.78-1,1.9-2.55,8.12-2.23,9.86s3.79,8.94,3.83,9A.6.6,0,0,1,342.49,188.34Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 385.13px 184.377px;"
                                    id="el1gu1gh8op2v" class="animable"></path>
                                <path
                                    d="M351.48,209.74a.5.5,0,0,1-.48-.38c0-.1-.21-.43-.36-.72-.25-.46-.59-1.09-.91-1.84a.5.5,0,1,1,.91-.4c.31.72.64,1.32.88,1.76a6,6,0,0,1,.45,1,.51.51,0,0,1-.37.61Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 350.823px 207.91px;"
                                    id="elkvmoo7gyfag" class="animable"></path>
                                <path
                                    d="M349.62,205.61a.49.49,0,0,1-.47-.35,13,13,0,0,1-.63-3.94,43.9,43.9,0,0,1,1.17-8.95l-6.44-5.43a.5.5,0,0,1,.42-.87l4.86,1-5.95-13.88a.5.5,0,0,1,.92-.4l6.33,14.77a.5.5,0,0,1-.56.69l-3.85-.82,5.15,4.34a.48.48,0,0,1,.16.5,45,45,0,0,0-1.21,9,11.92,11.92,0,0,0,.58,3.64.49.49,0,0,1-.33.62Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 346.643px 189.049px;"
                                    id="eln2i10fiead" class="animable"></path>
                                <path
                                    d="M367,164.28a.48.48,0,0,1-.2,0,.49.49,0,0,1-.26-.65l1.52-3.6a.5.5,0,0,1,.66-.26.49.49,0,0,1,.26.65l-1.52,3.6A.5.5,0,0,1,367,164.28Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 367.76px 162.009px;"
                                    id="elttljhk04khc" class="animable"></path>
                                <path
                                    d="M355.7,190.92h-.1a.5.5,0,0,1-.4-.49l-.35-23.56a.5.5,0,0,1,1,0l.31,21.19,8.92-21a.5.5,0,0,1,.92.39l-9.84,23.18A.49.49,0,0,1,355.7,190.92Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 360.441px 178.645px;"
                                    id="elumf0d7gtztf" class="animable"></path>
                                <path
                                    d="M326.06,189.78l6.07,7.87a11,11,0,0,0,4.27-3c2.46-2.46,4.92-7.71,5.25-8.7s-3.11-3.94-3.11-3.94l-16.42.66Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 331.896px 189.83px;"
                                    id="elem17sus91ya" class="animable"></path>
                                <path
                                    d="M332.13,198.15a.51.51,0,0,1-.39-.19l-6.07-7.88a.21.21,0,0,1,0-.06L321.69,183a.48.48,0,0,1,0-.49.49.49,0,0,1,.41-.25l16.42-.66a.47.47,0,0,1,.34.12c1.38,1.19,3.65,3.34,3.27,4.48s-2.89,6.4-5.37,8.89a11.67,11.67,0,0,1-4.49,3.09Zm-5.65-8.65,5.83,7.56a12.46,12.46,0,0,0,3.74-2.71c2.33-2.34,4.79-7.51,5.13-8.51,0-.4-1.27-1.91-2.82-3.27l-15.4.62Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 331.898px 189.89px;"
                                    id="elhval9syc6wi" class="animable"></path>
                                <path
                                    d="M328.38,131.15s9.36,3.84,10,5.53a35.14,35.14,0,0,1,1.07,5.37s10.29,3.38,9.83,5.52-4,4.45-4,4.45a61.51,61.51,0,0,1,2.45,8.29c.62,3.38.31,5.07-.77,7.06a11.1,11.1,0,0,1-3.06,3.38s-4,8.9-5.53,13.5-2.3,6.91-4.6,6a7.86,7.86,0,0,1-3.38-2.46s-4-8.59-7.06-11.66a37.51,37.51,0,0,0-6.29-5.07c-.46-.3-2.76-1.53-2.76-3.53s2.76-3.83,2.76-3.83-7.52-.16-8.75-9.52,7.52-17.95,10.74-20.56S328.38,131.15,328.38,131.15Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 328.734px 160.797px;"
                                    id="ela7qv7hkgddn" class="animable"></path>
                                <path
                                    d="M334.66,190.94a3,3,0,0,1-1.1-.24,8.37,8.37,0,0,1-3.6-2.63c-.08-.16-4-8.63-7-11.6a37.33,37.33,0,0,0-6-4.89l-.33-.21c-.77-.48-2.82-1.76-2.82-3.85,0-1.42,1.16-2.73,2-3.51-2.28-.5-7.06-2.42-8-9.77-1.41-10.7,9.65-20,10.92-21,3.33-2.69,9.43-2.57,9.69-2.57l.18,0c1.59.66,9.59,4,10.25,5.82a31.82,31.82,0,0,1,1.06,5.16c2.8.94,10.35,3.7,9.85,6-.41,1.93-3,3.88-3.87,4.54a57.88,57.88,0,0,1,2.34,8c.6,3.28.39,5.14-.82,7.39a11.32,11.32,0,0,1-3.1,3.46c-.49,1.09-4,9.1-5.46,13.34-1.18,3.55-1.89,5.69-3.28,6.34A2.21,2.21,0,0,1,334.66,190.94Zm-3.84-3.37a7.87,7.87,0,0,0,3.11,2.2,1.41,1.41,0,0,0,1.19.07c1-.46,1.73-2.68,2.76-5.75,1.52-4.57,5.5-13.46,5.54-13.55a.55.55,0,0,1,.17-.2,10.89,10.89,0,0,0,2.91-3.21c1-1.78,1.34-3.31.72-6.73a61.47,61.47,0,0,0-2.43-8.2.5.5,0,0,1,.19-.59c.94-.61,3.44-2.55,3.78-4.14.19-.91-4.24-3.22-9.49-4.95a.5.5,0,0,1-.34-.41,35,35,0,0,0-1.05-5.26c-.33-.92-5.13-3.36-9.61-5.2-.74,0-6.1,0-8.94,2.35-1.22,1-11.89,9.95-10.56,20.11,1.15,8.8,8,9.07,8.26,9.08a.5.5,0,0,1,.27.91c-.71.48-2.54,2-2.54,3.42s1.71,2.6,2.35,3l.35.22a37.32,37.32,0,0,1,6.2,5c3.1,3.1,7,11.43,7.16,11.81Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 328.735px 160.805px;"
                                    id="elz4u37h5ze6a" class="animable"></path>
                                <path
                                    d="M337.47,143.62c.55.95.68,1.91.28,2.15s-1.18-.35-1.74-1.3-.68-1.91-.28-2.15S336.91,142.67,337.47,143.62Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 336.739px 144.045px;"
                                    id="elw0r6h9ac4ps" class="animable"></path>
                                <path
                                    d="M332.67,142.55h-.09a.5.5,0,0,1-.4-.58,4.3,4.3,0,0,1,4-3.32.5.5,0,1,1,.1,1,3.3,3.3,0,0,0-3.09,2.51A.49.49,0,0,1,332.67,142.55Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 334.452px 140.6px;"
                                    id="elonpij3puoc" class="animable"></path>
                                <path
                                    d="M332.67,129.16s.16.92-2,2a34.93,34.93,0,0,0-9.06,6.14c-3.07,3.07-.61,2.61.62,3.23s1.84,1.22.3,4.14-1.53,4-1.53,4,9.67,8.29,11.36,9.67a4.3,4.3,0,0,0,3.53.92s6.29-5.68,7.82-6.45l1.54-.77s2.3,1.39,3.53,5.84,3.07,10.58,1.84,12-8.14,1.53-15,.61-8.75-5.52-9.52-7.67-4.29-9.36-6.29-10.44-4.76.92-3.22,5.07,7.52,5.06,7.67,5.67-1.38,3.23-4.6,4.61-4.76.46-5.37-.16-3.38,1.08-11.51-9.2-7.68-11.82-6.91-14.28,8.9-15.8,14-19.33,7.52-3.68,8-2.15a4.69,4.69,0,0,1,0,2.76s4.14-6.29,11.2-3.22S332.67,129.16,332.67,129.16Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 323.253px 146.195px;"
                                    id="elwuvm6buzu68" class="animable"></path>
                                <path
                                    d="M343.81,171.52a65,65,0,0,1-8.29-.58c-7.41-1-9.23-6.09-9.92-8-.88-2.48-4.35-9.25-6.05-10.17a1.83,1.83,0,0,0-2.1.24c-.94.81-1.1,2.39-.42,4.21,1,2.76,4.19,4,6.08,4.73,1,.4,1.5.58,1.61,1,.24,1-1.61,3.78-4.89,5.19-3.45,1.48-5.2.47-5.93-.26l-.34-.06c-1.36-.23-4.52-.75-11.2-9.19-8.32-10.51-7.82-12.1-7-14.73s9.11-16.08,14.16-19.6c3.62-2.52,6.2-3.54,7.65-3a1.69,1.69,0,0,1,1.1,1.16,5.59,5.59,0,0,1,.22,1.32,9.24,9.24,0,0,1,10.7-2.1c2.71,1.18,4.29,2.65,4.69,4.37a4.18,4.18,0,0,1-.71,3.32c-.06.45-.42,1.35-2.27,2.27a33.77,33.77,0,0,0-8.92,6.05c-1.41,1.4-1.34,1.78-1.34,1.79a2.2,2.2,0,0,0,.81.29,5.22,5.22,0,0,1,1,.34,2.41,2.41,0,0,1,1.4,1.35c.26.78,0,1.82-.87,3.47a13.89,13.89,0,0,0-1.45,3.55c1.41,1.21,9.61,8.24,11.14,9.49a3.86,3.86,0,0,0,3,.84c.86-.76,6.35-5.68,7.84-6.43l1.53-.76a.48.48,0,0,1,.48,0c.1.06,2.49,1.53,3.76,6.12l.29,1c1.61,5.81,2.66,10,1.44,11.4C350.15,171.12,347.31,171.52,343.81,171.52Zm-25.15-20a2.89,2.89,0,0,1,1.36.34c2.27,1.22,5.9,9,6.52,10.71s2.3,6.44,9.11,7.34c7.6,1,13.68.59,14.6-.45s-.62-6.72-1.66-10.46l-.29-1a10.19,10.19,0,0,0-3.09-5.38l-1.26.63c-1.21.6-6,4.8-7.72,6.37a.53.53,0,0,1-.21.11,4.76,4.76,0,0,1-4-1c-1.67-1.37-11.27-9.59-11.37-9.67a.52.52,0,0,1-.17-.38c0-.12,0-1.28,1.59-4.22.7-1.34,1-2.22.81-2.71-.09-.27-.32-.47-.9-.76a4.83,4.83,0,0,0-.81-.26c-.63-.16-1.34-.34-1.52-1s.28-1.46,1.59-2.77a34.87,34.87,0,0,1,9.18-6.23c1.69-.85,1.72-1.5,1.72-1.51a.44.44,0,0,1,.12-.36h0a3.23,3.23,0,0,0,.61-2.61c-.33-1.39-1.71-2.63-4.11-3.67-6.58-2.86-10.43,2.8-10.59,3a.5.5,0,0,1-.88-.45,4.33,4.33,0,0,0,0-2.45.7.7,0,0,0-.47-.49c-.51-.19-2.2-.26-6.75,2.91-4.91,3.42-13,16.51-13.77,19.07-.7,2.24-1.16,3.72,6.82,13.82,6.44,8.14,9.45,8.63,10.58,8.82a1.54,1.54,0,0,1,.89.34c.55.55,1.91,1.29,4.82.05a7.79,7.79,0,0,0,4.3-3.94c-.2-.1-.61-.26-1-.4-1.92-.75-5.48-2.13-6.66-5.31-.83-2.23-.56-4.22.7-5.32A2.88,2.88,0,0,1,318.66,151.55Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 323.237px 146.165px;"
                                    id="el6w6m9rcuko" class="animable"></path>
                                <path
                                    d="M344,159.61a6.08,6.08,0,0,1-4-1.23.5.5,0,0,1,0-.71.5.5,0,0,1,.7,0c.09.08,1.9,1.63,5.68.65a.5.5,0,0,1,.25,1A10.11,10.11,0,0,1,344,159.61Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 343.436px 158.573px;"
                                    id="ellk9k52mtgpk" class="animable"></path>
                                <path
                                    d="M312.28,171.56l-5.1,3.22s-20.57,0-22,1.4-40.61,36.22-41,38-12.83,44.12-12.83,44.12l13.36,5.28,18.28-40.44,22.5-11.42s-.35,5.62-4.92,13.36-19.86,24.26-19.86,24.26,15.64-13.19,25.14-17.58,15.47-1.94,23-11.43,11.77-17.23,11.6-24.79S312.28,171.56,312.28,171.56Z"
                                    style="fill: rgb(87, 128, 183); transform-origin: 275.902px 217.57px;"
                                    id="el9y533b5b1vm" class="animable"></path>
                                <path
                                    d="M244.77,264.06a.43.43,0,0,1-.19,0l-13.36-5.27a.49.49,0,0,1-.29-.61c.12-.42,12.48-42.36,12.82-44.08.22-1.11,9.3-9.6,34.7-32.44,3.53-3.17,6.07-5.46,6.4-5.79,1.43-1.43,17.14-1.55,22.18-1.55l5-3.14a.48.48,0,0,1,.4-.06.52.52,0,0,1,.32.26c.33.67,8.13,16.59,8.31,24.17.16,7.09-3.34,14.6-11.71,25.11-5.09,6.39-9.5,7.49-14.62,8.75a44.55,44.55,0,0,0-8.59,2.82c-9.33,4.32-24.88,17.38-25,17.51a.5.5,0,0,1-.69-.72c.15-.17,15.31-16.58,19.8-24.18a36,36,0,0,0,4.74-12.23l-21.51,10.92-18.21,40.28A.49.49,0,0,1,244.77,264.06ZM232,258l12.49,4.93,18.09-40a.43.43,0,0,1,.22-.24l22.51-11.43a.5.5,0,0,1,.72.48c0,.23-.41,5.83-5,13.58-3.05,5.17-10.72,14.08-15.61,19.58,5.43-4.28,14.14-10.78,20.25-13.61a46.78,46.78,0,0,1,8.77-2.88c4.94-1.22,9.2-2.28,14.07-8.4,8.22-10.32,11.66-17.63,11.5-24.47-.16-6.63-6.63-20.45-8-23.25l-4.63,2.92a.5.5,0,0,1-.26.08c-9.92,0-20.72.47-21.63,1.26-.34.34-2.76,2.52-6.43,5.82-10.06,9-33.61,30.23-34.4,31.95C244.39,215.94,233.41,253.24,232,258Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 275.985px 217.586px;"
                                    id="elojuh15oank" class="animable"></path>
                                <path
                                    d="M285.55,212.2l-.12,0a.5.5,0,0,1-.36-.61s1.19-4.76.16-12.47a.5.5,0,0,1,1-.13c1,7.92-.14,12.65-.19,12.85A.5.5,0,0,1,285.55,212.2Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 285.847px 205.375px;"
                                    id="elmqvw1o5zn8l" class="animable"></path>
                                <path
                                    d="M306,221.87a.56.56,0,0,1-.27-.08.51.51,0,0,1-.16-.69s.74-1.19,1.8-3a.5.5,0,0,1,.87.5c-1.08,1.85-1.82,3-1.82,3A.5.5,0,0,1,306,221.87Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 306.902px 219.86px;"
                                    id="el4mn6miqf7b7" class="animable"></path>
                                <path
                                    d="M309,216.62a.45.45,0,0,1-.25-.07.49.49,0,0,1-.19-.68c1.78-3.18,3.22-6,4.29-8.42,2.7-6.07-1.2-16.21-1.24-16.32a.51.51,0,0,1,0-.4.51.51,0,0,1,.3-.26l2.89-.88-4.21-2.24a.51.51,0,0,1-.25-.34l-2.29-11.25a.5.5,0,0,1,.39-.59.49.49,0,0,1,.59.39l2.24,11,5.07,2.7a.5.5,0,0,1,.26.49.51.51,0,0,1-.35.43l-3.54,1.08c.79,2.19,3.58,10.86,1,16.58-1.08,2.43-2.54,5.29-4.34,8.5A.51.51,0,0,1,309,216.62Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 312.321px 195.889px;"
                                    id="elzn0iprktvlr" class="animable"></path>
                                <polygon points="231.41 258.29 229.29 264.75 241.14 269.62 242.62 263.06 231.41 258.29"
                                    style="fill: rgb(255, 255, 255); transform-origin: 235.955px 263.955px;"
                                    id="elpm22a4s1cg" class="animable"></polygon>
                                <path
                                    d="M241.14,270.12a.41.41,0,0,1-.19,0l-11.85-4.86a.51.51,0,0,1-.29-.62l2.12-6.47a.5.5,0,0,1,.27-.3.47.47,0,0,1,.4,0l11.21,4.77a.51.51,0,0,1,.3.57l-1.49,6.56a.47.47,0,0,1-.25.33A.46.46,0,0,1,241.14,270.12Zm-11.23-5.65,10.87,4.46,1.26-5.57L231.71,259Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 235.954px 263.978px;"
                                    id="el29s40gna1sm" class="animable"></path>
                                <polygon
                                    points="224.49 275.58 221.16 281.96 223.28 283.07 225.24 279.32 240.3 287.19 238.34 290.94 240.47 292.05 243.8 285.68 224.49 275.58"
                                    style="fill: rgb(38, 50, 56); transform-origin: 232.48px 283.815px;"
                                    id="elz4hjm1097k" class="animable"></polygon>
                                <path
                                    d="M240.47,292.55a.59.59,0,0,1-.23-.05l-2.13-1.12a.5.5,0,0,1-.21-.67l1.73-3.31L225.45,280l-1.72,3.31a.53.53,0,0,1-.3.25.51.51,0,0,1-.38,0l-2.13-1.11a.51.51,0,0,1-.21-.67l3.33-6.38a.53.53,0,0,1,.3-.25.55.55,0,0,1,.38,0L244,285.23a.5.5,0,0,1,.21.68l-3.33,6.37a.51.51,0,0,1-.29.25ZM239,290.73l1.24.65,2.87-5.49-18.43-9.63-2.87,5.49,1.24.64,1.73-3.3a.49.49,0,0,1,.67-.21l15.06,7.87a.48.48,0,0,1,.25.29.5.5,0,0,1,0,.38Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 232.464px 283.833px;"
                                    id="elld52rusgoo" class="animable"></path>
                                <g id="eluzjtrs0doc">
                                    <rect x="179.44" y="283.21" width="75.74" height="59.24"
                                        rx="6.01"
                                        style="fill: rgb(163, 163, 163); transform-origin: 217.31px 312.83px; transform: rotate(27.59deg);"
                                        class="animable"></rect>
                                </g>
                                <path
                                    d="M234.61,355a6.53,6.53,0,0,1-3-.74l-56.47-29.52a6.51,6.51,0,0,1-2.76-8.78l21.88-41.85a6.5,6.5,0,0,1,8.78-2.75l56.48,29.51a6.52,6.52,0,0,1,2.75,8.79l-21.87,41.85a6.55,6.55,0,0,1-5.78,3.49ZM200,271.64a5.51,5.51,0,0,0-4.89,2.95l-21.87,41.85a5.52,5.52,0,0,0,2.33,7.44l56.48,29.51h0a5.49,5.49,0,0,0,7.43-2.33l21.87-41.85a5.51,5.51,0,0,0-2.33-7.43l-56.47-29.52A5.57,5.57,0,0,0,200,271.64Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 217.326px 312.809px;"
                                    id="el0fybz5qdt50h" class="animable"></path>
                                <path
                                    d="M241.14,269.62l2.32,8s-.42,4.44-.42,5.71,2.75,4.23,1.27,4.87-3,.84-3.6-.42a27.7,27.7,0,0,1-1.27-3.39l-1.9,5.92a25.17,25.17,0,0,1-4.44-2.11c-1.06-.85-.85-4.23-.85-4.23s-6.56-3-7.19-4.23,0-5.51,0-5.51l4.23-9.52Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 234.764px 277.51px;"
                                    id="el33ge2ox8p32" class="animable"></path>
                                <path
                                    d="M237.54,290.85l-.18,0a25.21,25.21,0,0,1-4.58-2.19c-1-.84-1.08-3.29-1-4.31-1.6-.73-6.5-3.06-7.13-4.32s-.11-5.35-.05-5.8a.65.65,0,0,1,0-.13l4.23-9.52a.5.5,0,0,1,.65-.26l11.85,4.87a.51.51,0,0,1,.29.32l2.32,8a.4.4,0,0,1,0,.19s-.42,4.43-.42,5.66a5.55,5.55,0,0,0,.75,1.73c.6,1.09,1.16,2.11.89,2.9a1.16,1.16,0,0,1-.67.7c-2.66,1.14-3.78.27-4.24-.66a17.07,17.07,0,0,1-.82-2L238,290.51a.5.5,0,0,1-.26.29A.44.44,0,0,1,237.54,290.85Zm-12-16.43c-.23,1.58-.44,4.32,0,5.13s3.81,2.58,7,4a.51.51,0,0,1,.29.49c-.08,1.3.07,3.34.66,3.81a20.63,20.63,0,0,0,3.82,1.85l1.74-5.42a.54.54,0,0,1,.48-.35.49.49,0,0,1,.47.36,26.68,26.68,0,0,0,1.24,3.3c.15.3.6,1.2,3,.19.1,0,.12-.08.12-.11.13-.36-.44-1.4-.81-2.09a5.53,5.53,0,0,1-.88-2.21c0-1.19.35-5,.42-5.66L240.72,270l-11.17-4.59Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 234.786px 277.566px;"
                                    id="elce8vr26k3d6" class="animable"></path>
                                <path d="M315.07,169.1l-2.79,2.46,9.84,25.11L332,186S321.47,170.57,315.07,169.1Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 322.14px 182.885px;"
                                    id="elsi3lkzmm1nh" class="animable"></path>
                                <path
                                    d="M322.12,197.17H322a.49.49,0,0,1-.37-.31l-9.85-25.11a.5.5,0,0,1,.14-.56l2.79-2.46a.53.53,0,0,1,.44-.11c6.52,1.5,16.77,16.47,17.2,17.11a.48.48,0,0,1,0,.62L322.49,197A.51.51,0,0,1,322.12,197.17Zm-9.25-25.47,9.43,24,9-9.78c-1.53-2.19-10.48-14.71-16.13-16.31Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 322.105px 182.89px;"
                                    id="elvowcdgvwgcn" class="animable"></path>
                                <path d="M338,186.17l4.76,7.71s-.49-9-2.3-15.26Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 340.38px 186.25px;"
                                    id="el8c2hfkg51fi" class="animable"></path>
                                <path
                                    d="M342.8,194.38a.49.49,0,0,1-.42-.24l-4.76-7.71a.48.48,0,0,1-.05-.42l2.46-7.55a.44.44,0,0,1,.48-.34.49.49,0,0,1,.47.36c1.8,6.22,2.32,15.28,2.32,15.37a.51.51,0,0,1-.35.51Zm-4.21-8.28,3.56,5.78a83.28,83.28,0,0,0-1.7-11.49Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 340.422px 186.249px;"
                                    id="elep1yvgfbgz" class="animable"></path>
                                <path
                                    d="M332.13,197.65s-1.57,3-9.83,1.74-18.11-11.95-26-13.18-20.92,7.2-31.12,5.27a78,78,0,0,1-19.87-7.21l-16.52,9.67s16.17,7.21,17.76,7.38,22.67,2.82,29.18.18,15.29-9,22-6.68,14.6,12.13,22.68,11.08S332.13,197.65,332.13,197.65Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 280.46px 195.124px;"
                                    id="el6ik0cs3gdg9" class="animable"></path>
                                <path
                                    d="M319.12,206.48c-4.76,0-9.3-3.27-13.7-6.43-2.8-2-5.45-3.92-7.9-4.76-4.8-1.64-10.91,1.44-16.31,4.16-1.88,1-3.66,1.84-5.31,2.51-5.7,2.31-22.22.7-29.07-.1l-.36,0c-1.61-.18-16.24-6.68-17.9-7.42a.49.49,0,0,1-.3-.43.48.48,0,0,1,.25-.46L245,183.84a.5.5,0,0,1,.49,0A78.76,78.76,0,0,0,265.25,191c5.39,1,11.55-.91,17.51-2.78,5.06-1.58,9.85-3.08,13.59-2.5,4,.62,8.33,3.5,12.89,6.55s9.05,6,13.13,6.64c7.71,1.15,9.31-1.46,9.33-1.49a.5.5,0,0,1,.88.47c-.16.3-3.9,7.43-12.15,8.51A9.72,9.72,0,0,1,319.12,206.48Zm-24.53-12.65a10,10,0,0,1,3.26.52c2.59.88,5.29,2.83,8.15,4.88,4.65,3.35,9.45,6.8,14.3,6.17a15.48,15.48,0,0,0,9.95-5.86c-1.55.57-4.05.94-8,.35-4.3-.65-9-3.78-13.53-6.8-4.28-2.85-8.7-5.8-12.49-6.39-3.52-.55-8.19.92-13.14,2.47-6.08,1.9-12.36,3.87-18,2.8a78.66,78.66,0,0,1-19.76-7.13l-15.45,9c6.47,2.87,15.67,6.83,16.72,7l.37,0c6.77.79,23.09,2.39,28.57.17,1.62-.66,3.38-1.55,5.24-2.48C285.21,196.31,290.14,193.83,294.59,193.83Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 280.446px 195.128px;"
                                    id="elaf690fh02e" class="animable"></path>
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
                        </svg></center>




                </div>
            </div>
        </div>

    </section>
    <!-- Section: Design Block -->
</body>

</html>
