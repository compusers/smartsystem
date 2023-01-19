<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart-System</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .video-container {
            position: absolute;
            z-index: -100;
            top: 0;
            left: 0;
            width: 100%;
            height: calc(100vw * 0.4840);
            overflow: hidden;
        }

        .video-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100vw;
        }

        * {
            font-family: 'Nunito', sans-serif;
            margin: 0
        }

        a {
            text-decoration: none;
            color: white;
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="container p-3">
        @if (Route::has('login'))
            <div class="">
                @auth
                    <a href="{{ url('/admin') }}" class="d-flex justify-content-center align-items-center">Adminstrador</a>
                @else
                    <a href="{{ route('login') }}" class="d-flex justify-content-center align-items-center">Iniciar
                        Sección</a>
                    {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Nuevo Usuario</a>
                        @endif --}}
                @endauth
            </div>
        @endif
        <div class="video-container">
            <video src="img/video.mp4" autoplay loop muted poster="img/logo.png"></video>
        </div>
        {{-- <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid" src="img/logo.png" alt="Smart-System">
        </div> --}}
    </div>
</body>

</html>
