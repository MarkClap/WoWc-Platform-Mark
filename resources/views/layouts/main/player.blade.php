<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero</title>
    <!-- Scripts -->

    @vite(['resources/css/app.css', 'resources/css/board.css', 'resources/js/app.js', 'resources/js/main-dashboard.js', 'resources/js/main-player.js'])
    @stack('scripts')

    <!-- Styles -->
    @livewireStyles

</head>

<body class="bg-base-100 flex flex-col h-screen w-screen overflow-hidden">

    <header class="shadow-md w-full">
        <x-player-navigation name="{{ $name ?? 'Player' }}" />
    </header>

    <main class="flex flex-row flex-grow relative h-full w-full max-h-full max-w-full">
        <x-main-sidebar>
            <div>
                <x-sidebar-item href="player.character" name="Personaje" icon="icon-[heroicons--user-solid]" />

                <x-sidebar-item href="player.quests" name="Misiones" icon="icon-[mingcute--task-2-fill]" />

                <x-sidebar-collapse id="guild-collapse" name="Gremio" icon="icon-[game-icons--vertical-banner]">
                    <x-slot name="items">
                        <x-sidebar-item href="player.members" name="Miembros"
                            icon="icon-[heroicons--user-group-solid]" />

                        <x-sidebar-item href="player.groups" name="Grupo" icon="icon-[heroicons--users-solid]" />
                    </x-slot>
                </x-sidebar-collapse>
            </div>

            <div>
                <x-sidebar-item href="/dashboard" name="Salida" icon="icon-[material-symbols--exit-to-app]" />
            </div>

        </x-main-sidebar>

        @yield('content')

    </main>

</body>

</html>
