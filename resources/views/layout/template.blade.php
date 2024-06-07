<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/js/app.js', 'resources/css/app.css', 'resources/sass/app.scss'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/5a8ab06af1.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/pagedone@1.1.2/src/css/pagedone.css"/>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/pagedone@1.1.2/src/js/pagedone.js"></script>
        <div class="flex flex-col justify-between h-screen">
            @include('components.header')
            <div class="flex flex-col mr-36 ml-36">
                @yield('content')
            </div>
            @include('components.footer')
        </div>
    </body>
    </html>