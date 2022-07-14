<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <style>
        body{margin: 0;}
        .container{
            display: grid;
            grid-template-columns: 1fr 1fr;
            background:white;
            background-size: cover;
            height: 100vh ;
        }
        .left{
            background: white;
            display: flex ;
            justify-content: center;
            place-items: center;
            text-align: left;
        }
        .left h1{
            color: black; font-size: 20px;
        }

        .right{
            display: flex ;
            justify-content: center;
            place-items: center;
            text-align: left;
        }

        @media(max-width:900px){
            .container{
                grid-template-columns: 3fr 0fr;
            }
        }

    </style>

</head>
<body>


    <div class="container">
        <div class="left">

            <div>
                <img width="350px" src="{{ asset('img/logo7.png') }}" alt="">
                <br>
                <br>
                <h1 > <strong>Ingresa a tu cuenta</strong> </h1>
                <br>
                {{ $slot }}
            </div>



        </div>

        <div class="right">
            <img width="625px" src="{{ asset('img/inicio_login1.png') }}" alt="">

        </div>
    </div>
</body>
</html>

