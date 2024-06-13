<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="bg-base-300 flex flex-col min-h-screen w-full">
    <header class="shadow-md w-full">
        <nav class="bg-primary dark:bg-neutral-800 p-3 flex items-center gap-2 justify-between">
            <label class="swap swap-rotate grid place-items-center text-xl text-white">
                <input id="menu-button" type="checkbox" class="hidden" checked/>
                <span class="icon-[ion--navicon-round] swap-on fill-white"></span>               
                <span class="icon-[ion--close-round] swap-off fill-white"></span>
            </label>

            <section class="flex flex-row items-center text-3xl text-white gap-6 ">
                
                <div class="dropdown dropdown-end">
                <span tabindex="0" role="button" class="icon-[ph--scroll-fill] transition-transform transform-growth hover:scale-110 duration-200 cursor-pointer"></span>
                <div class="bg-white w-72 h-[91vh] dropdown-content z-[1] menu mt-3  -mr-[17vh]" tabindex="0">
                    <div class="flex justify-center items-center bg-yellow-600 h-10 w-full">
                        <h1 class="text-2xl">Acciones de jugador</h1>
                    </div>
                </div>
                </div>
                <div class="dropdown dropdown-end">
                    <span tabindex="0" role="button" class="icon-[emojione-monotone--broken-heart] transition-transform transform-growth hover:scale-110 duration-200 cursor-pointer"></span>
                        
                        <div class="bg-white w-72 h-[91vh] dropdown-content z-[1] menu mt-3  -mr-16" tabindex="0">
                            <div class="flex justify-center items-center bg-red-700 h-10 w-full">
                                <h1 class="text-2xl">Daño inferido</h1>
                            </div>
                        </div>
                </div>
                <div class="dropdown dropdown-end">
                    <span tabindex="0" role="button" class="icon-[heroicons--user-circle-solid] transition-transform transform-growth hover:scale-110 duration-200 cursor-pointer "></span>
                        <ul tabindex="0" class="text-slate-950 dropdown-content z-[1] menu rounded-md bg-yellow-500 w-32 mt-6">
                          <li><a>Mi perfil</a></li>
                          <li><a>Salir</a></li>
                        </ul>
                </div>
                  
            </section>
        </nav>
    </header>

    <main class="flex flex-row flex-grow relative  ">
        
        <nav id="menu" class=" text-white absolute h-full bottom-0 left-0 duration-500 p-2 w-52 text-center bg-neutral-700 shadow">

            <div class="text-lg flex flex-row h-full justify-between w-full ">
                <ul class="flex flex-col gap-2 w-full justify-between">
                    <div >
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

                            <x-sidebar-subitem name="Miembros">
                                <x-slot name="icon">
                                    <span class="icon-[heroicons--user-group-solid]"></span>
                                </x-slot>
                            </x-sidebar-subitem>

                            <x-sidebar-subitem name="Grupo">
                                <x-slot name="icon">
                                    <span class="icon-[heroicons--users-solid]"></span>
                                </x-slot>
                            </x-sidebar-subitem>

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
                </ul>
                
                
            </div>
        </nav>
        
        
    </main>

    <x-script-board>
        
    </x-script-board>
    
</body>

</html>