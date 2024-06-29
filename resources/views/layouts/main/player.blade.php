<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero</title>
    <!-- Scripts -->

    @vite(['resources/css/app.css', 'resources/css/board.css', 'resources/js/app.js', 'resources/js/board.js'])
    @stack('scripts')

    <!-- Styles -->
    @livewireStyles

</head>

<body class="bg-base-100 flex flex-col h-screen w-screen overflow-hidden">

    <header class="shadow-md w-full">
        <x-player-navigation />
    </header>

    <main class="flex flex-row flex-grow relative h-full w-full max-h-full max-w-full">
        <x-main-sidebar>
            <div>
                <x-sidebar-item name="Personaje">
                    <x-slot name="icon">
                        <span class="icon-[heroicons--user-solid]"></span>
                    </x-slot>
                </x-sidebar-item>

                <x-sidebar-item name="Misiones">
                    <x-slot name="icon">
                        <span class="icon-[mingcute--task-2-fill]"></span>
                    </x-slot>
                </x-sidebar-item>

                <x-sidebar-collapse name="Gremio">
                    <x-slot name="icon">
                        <span class="icon-[game-icons--vertical-banner]"></span>
                    </x-slot>

                    <x-slot name="items">

                        <x-sidebar-item name="Miembros">
                            <x-slot name="icon">
                                <span class="icon-[heroicons--user-group-solid]"></span>
                            </x-slot>
                        </x-sidebar-item>

                        <x-sidebar-item name="Grupo">
                            <x-slot name="icon">
                                <span class="icon-[heroicons--users-solid]"></span>
                            </x-slot>
                        </x-sidebar-item>

                    </x-slot>
                </x-sidebar-collapse>
            </div>
            <div class="justify-between ">

                <x-sidebar-item name="Salida">
                    <x-slot name="icon">
                        <span class="icon-[material-symbols--exit-to-app]"></span>
                    </x-slot>
                </x-sidebar-item>
            </div>
        </x-main-sidebar>

        @yield('content')

    </main>

</body>

</html>
