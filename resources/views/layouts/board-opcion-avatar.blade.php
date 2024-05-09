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
        
            <div class=" text-black flex justify-center items-center h-screen  w-full flex-col">
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <section class="flex flex-row gap-4 items-center ">
                        <div class="avatar">
                            <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                              <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                            </div>
                          </div>
                        <div class="flex flex-col gap-2">
                            <h1 class="text-2xl font-bold">Marcos Chocce</h1> 
                            <p class=" text-neutral-400 text-xl font-bold">Nivel: <span class="text-xl text-pink-500">500</span></p>
                            <p class=" text-neutral-400 text-xl font-bold">Tipo: <span class="text-xl text-blue-600">Curandero</span></p>
                        </div>
                    </section>
                    
                    <section class="flex flex-row justify-between mb-2 mt-4">
                        
                            <div class="focus:bg-slate-400 w-full h-full text-center"><h1>Puntos</h1></div>
                            <div class="focus:bg-slate-400 w-full h-full text-center"><h1>Poderes</h1></div>
                        
                    </section>
                    <hr>
                  <div>
                  <section class="mt-4 mb-5">
                    <p class="text-gray-600">Puntos de experiencia:</p>
                    <div class="justify-between flex flex-row"><p>10</p><p>XP</p></div>
                    <div class="bg-gray-400 w-full h-3 rounded-lg mt-2 overflow-hidden">
                      <div class="bg-green-600 w-3/4 h-full rounded-lg shadow-md"></div>
                    </div>
                  </section>

                  <section class="mt-4 mb-5">
                    
                    
                        <div class="flex justify-between mb-1">
                        <span class="text-base font-medium text-blue-700 dark:text-black">Flowbite</span>
                        <span class="text-sm font-medium text-blue-700 dark:text-black">45%</span>
                        
                        </div>
                        <div class="justify-between flex flex-row"><p>10</p><span class="icon-[ant-design--thunderbolt-filled] bg-yellow-400"></span></div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 50%"></div>
                        </div>

                  </section>

                  <section class="mt-4 mb-5">
                    <p class="text-gray-600">Salud:</p>
                    <div class="justify-between flex flex-row"><p>100</p><span class="icon-[material-symbols--heart-broken] bg-red-600"></span></div>
                    <div class="bg-gray-400 w-full h-3 rounded-lg mt-2 overflow-hidden">
                      <div class="bg-red-700 w-2/4 h-full rounded-lg shadow-md"></div>
                    </div>
                  </section>

                  <section class="mt-4 mb-5">
                    <p class="text-gray-600">Oro:</p>
                    <div class="justify-between flex flex-row"><p>100000000000000000000</p><span class="icon-[mingcute--coin-3-fill] text-yellow-400"></span></div>
                  </section>
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



{{-- <h3 class="text-xs uppercase">Current lesson:</h3>
                  <h2 class="tracking-wide">
                    Object in JavaScript
                    <br />
                    (Challenge)
                  </h2>
                  <button class="bg-orange-400 py-3 px-8 mt-4 rounded text-sm font-semibold hover:bg-opacity-75">Go to lesson</button>
                </div> --}}