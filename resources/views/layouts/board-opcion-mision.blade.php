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

<body class="bg-base-100 flex flex-col min-h-screen w-full">
    <header class="shadow-md w-full">
        <nav class="bg-primary dark:bg-neutral-800 p-6 flex items-center gap-2 justify-between">
            <label class="swap swap-rotate grid place-items-center text-xl text-white">
                <input id="menu-button" type="checkbox" class="hidden" checked/>
                <span class="icon-[ion--navicon-round] swap-on fill-white"></span>               
                <span class="icon-[ion--close-round] swap-off fill-white"></span>
            </label>

            <section class="flex flex-row items-center text-3xl text-white gap-6 ">
                <span class="icon-[ph--scroll-fill] transition-transform transform-growth hover:scale-110 duration-200 cursor-pointer"></span>
                <span class="icon-[emojione-monotone--broken-heart] transition-transform transform-growth hover:scale-110 duration-200 cursor-pointer"></span>
                <span class="icon-[heroicons--user-circle-solid] transition-transform transform-growth hover:scale-110 duration-200 cursor-pointer"></span>
            </section>
        </nav>
    </header>

    <main class="flex flex-row flex-grow relative">
        <nav id="menu" class="text-white absolute h-full bottom-0 left-0 duration-500 p-2 w-52 text-center bg-neutral-700 shadow">

            <div class="text-lg flex flex-row h-full justify-between w-full">
                <ul class="flex flex-col gap-2 w-full">
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

                </ul>

            </div>
        </nav>
        <div class="bg-black  w-full flex flex-col items-center">
            <div>
                
        </div>
        <!-- component -->
<div class="m-10 p-5 space-y-3  bg-neutral-900">

    <div class="group flex flex-col gap-2 rounded-lg bg-white p-5 text-black " tabindex="1" >
      <div class="flex cursor-pointer items-center justify-between">
        <span> Misión 1 - CRUD BDA</span>
            <span class="icon-[ls--dropdown] transition-all duration-500 group-focus:-rotate-180 text-black " ></span>
           
      </div>
      <div class=" invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000 ">
        <p>Se tendra que realizar 5 ejemplos por cada CRUD. </p>
        <div class="border-t px-4 py-2 flex justify-between">
            <span>500 XP</span>
            <button x-on:click="open = false" class="px-3 py-1 bg-indigo-500 text-white  rounded-md w-full sm:w-auto"> Accept </button>
          </div>
      </div>
    </div>
    
  
    <div class="group flex flex-col gap-2 rounded-lg bg-white p-5 text-black " tabindex="2" >
      <div class="flex cursor-pointer items-center justify-between">
        <span> Misión 2 - Shell MongoDB</span>
        <span class="icon-[ls--dropdown] transition-all duration-500 group-focus:-rotate-180 text-black"></span>
      </div>
      <div class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000" >
        <p>Realizar la instalación de mongoDB y documentarlo </p>
        <div class="border-t px-4 py-2 flex justify-between">
            <span>500 XP</span>
            <button x-on:click="open = false" class="px-3 py-1 bg-indigo-500 text-white  rounded-md w-full sm:w-auto"> Accept </button>
          </div>
      </div>
    </div>
  
    <div class="group flex flex-col gap-2 rounded-lg bg-white p-5 text-black " tabindex="3" >
      <div class="flex cursor-pointer items-center justify-between">
        <span> Misión 3 - Base de datos NoSql</span>
        
        <span class="icon-[ls--dropdown] transition-all duration-500 group-focus:-rotate-180 text-black"></span>
      </div>
      <div class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
        <p>Realizar una lista de NoSql y una breve descripción.</p>
        <div class="border-t px-4 py-2 flex justify-between">
            <span>500 XP</span>
            <button x-on:click="open = false" class="px-3 py-1 bg-indigo-500 text-white  rounded-md w-full sm:w-auto"> Accept </button>
          </div>
      </div>
    </div>

    <div class="group flex flex-col gap-2 rounded-lg bg-white p-5 text-black " tabindex="4" >
        <div class="flex cursor-pointer items-center justify-between">
          <span> Misión 4 - Base de datos NoSql</span>
          
          <span class="icon-[ls--dropdown] transition-all duration-500 group-focus:-rotate-180 text-black"></span>
        </div>
        <div class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
          <p>Realizar una lista de NoSql y una breve descripción.</p>
          <div class="border-t px-4 py-2 flex justify-between">
            <span>500 XP</span>
            <button x-on:click="open = false" class="px-3 py-1 bg-indigo-500 text-white  rounded-md w-full sm:w-auto"> Accept </button>
          </div>
        </div>
      </div>

      <div class="group flex flex-col gap-2 rounded-lg bg-white p-5 text-black " tabindex="5" >
        <div class="flex cursor-pointer items-center justify-between">
          <span> Misión 5 - Base de datos NoSql</span>
          
          <span class="icon-[ls--dropdown] transition-all duration-500 group-focus:-rotate-180 text-black"></span>
        </div>
        <div class="invisible h-auto max-h-0 items-center opacity-0 transition-all group-focus:visible group-focus:max-h-screen group-focus:opacity-100 group-focus:duration-1000">
          <p>Realizar una lista de NoSql y una breve descripción.</p>
          <div class="border-t px-4 py-2 flex justify-between">
            <span>500 XP</span>
            <button x-on:click="open = false" class="px-3 py-1 bg-indigo-500 text-white  rounded-md w-full sm:w-auto"> Accept </button>
          </div>
        </div>
      </div>
  </div>

  
</main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            updateMenu();
            document.getElementById('menu-button').addEventListener('change', function() {
                updateMenu();
            });
        });

        function updateMenu() {
            const menu = document.getElementById('menu');
            const menu_button = document.getElementById('menu-button');

            if (menu_button.checked) {
                menu.classList.remove('left-0');
                menu.classList.add('-left-52');
            } else {
                menu.classList.remove('-left-52');
                menu.classList.add('left-0');
            }
        }
    </script>
</body>

</html>