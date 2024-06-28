<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero</title>
    <!-- Scripts -->
    
    @vite(['resources/css/app.css', 'resources/css/board.css', 'resources/js/app.js', 'resources/js/board.js', 'resources/js/three/character_scene/main.js'])

    <!-- Styles -->
    @livewireStyles

</head>

<body class="bg-base-100 flex flex-col h-screen w-screen overflow-hidden">

    <header class="shadow-md w-full">
        <x-player-navigation />
    </header>

    @livewire('player-content')

</body>

</html>
