<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero</title>
    <!-- Scripts -->

    @vite(['resources/css/app.css', 'resources/css/board.css', 'resources/js/app.js', 'resources/js/main-dashboard.js', 'resources/js/main-master.js'])
    @stack('scripts')

    <!-- Styles -->
    @livewireStyles

</head>

<body class="bg-base-100 flex flex-col h-screen w-screen overflow-hidden">

    <header class="shadow-md w-full">
        <x-master-navigation name="{{ $name ?? 'Master' }}" />
    </header>

    <main class="flex flex-row flex-grow relative h-full w-full max-h-full max-w-full">
        <x-main-sidebar>
            <div>
                
                <x-sidebar-item href="master.groups" name="Hogar" icon="icon-[material-symbols--home]" />
                <x-sidebar-collapse id="gremio-collapse" name="Gremio" icon="icon-[material-symbols--home]">
                    <x-slot name="items">
                        <x-sidebar-item href="master.members" name="members" icon="icon-[heroicons--users-solid]" />
                        <x-sidebar-item href="master.groups" name="groups" icon="icon-[heroicons--user-group-solid]" />
                    </x-slot>
                </x-sidebar-collapse>

                <x-sidebar-collapse id="quests-collapse" name="Misiones" icon="icon-[mingcute--task-2-fill]">
                    <x-slot name="items">
                        <x-sidebar-item href="master.tasks" name="Tarreas" icon="icon-[icomoon-free--books]" />
                        <x-sidebar-item href="master.quizzes" name="Examenes" icon="icon-[material-symbols--quiz]" />
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
