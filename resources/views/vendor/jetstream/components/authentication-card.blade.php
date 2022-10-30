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

                background-image: url("/img/bg1.jpg");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }


            .bg-glass {
                background-color: hsla(0, 0%, 100%, 0.541) !important;
                backdrop-filter: saturate(200%) blur(10px);
                width: 430px;
                border-radius: 15px;
            }

            .cssFont_1 {
                font-family: 'Oswald', sans-serif;
                font-size: 65px;
                letter-spacing: 5px;
                word-spacing: 0px;
                color: #ffffffbd;
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
                }
                .cssFont_1{
                    font-size: 0px;
                }
                .image{
                    width: 0px;
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
                                <center><img width="300px" src="{{ asset('img/logo9.png') }}" alt=""></center>
                                <br>
                                <br>
                                <h4 class="text-left"> Entra a tu cuenta</h4>
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <center><img class="image opacity-50" src="/img/logo_cf.png" width="170px" alt="CF"></center>

                    <h1 class="cssFont_1 opacity-40" style="font-family:'Oswald', sans-sans">
                        ¡ Te damos la bienvenida !<br />

                    </h1>


                </div>
            </div>
        </div>

    </section>
    <!-- Section: Design Block -->
</body>

</html>
