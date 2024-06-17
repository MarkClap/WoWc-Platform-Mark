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
        <nav class="bg-primary dark:bg-neutral-800 p-3 flex items-center gap-2 justify-between ">
            
            <div class="flex flex-row">
            <label class="swap swap-rotate grid place-items-center text-xl text-white">
                <input id="menu-button" type="checkbox" class="hidden" checked/>
                <span class="icon-[ion--navicon-round] swap-on fill-white"></span>               
                <span class="icon-[ion--close-round] swap-off fill-white"></span>
                
            </label>
            <div class=" ml-52 h-12  duration-500 pl-4 border-l-2" id="list-navegation">
                <div class="text-2xl breadcrumbs">
                    <ul>
                      <li><a>2024-BDA-AB</a></li> 
                      <li>Avatar</li>
                    </ul>
                </div>
            </div>
              </div>
            
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
        
            <div class=" text-black flex justify-center items-center h-full  w-full  p-5">
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
                        <progress class="progress progress-success w-56" value="50" max="100"></progress>

                      </section>
                      
      
                      <section class="mt-4 mb-5">
                        <p class="text-gray-600">Maná:</p>
                        <div class="justify-between flex flex-row"><p>10</p><p>XP</p></div>
                        <progress class="progress progress-info w-56" value="40" max="100"></progress>
                      </section>
      
                      <section class="mt-4 mb-5">
                        <p class="text-gray-600">Salud:</p>
                        <div class="justify-between flex flex-row"><p>100</p><span class="icon-[material-symbols--heart-broken] bg-red-600"></span></div>
                        <progress class="progress progress-error w-56" value="40" max="100"></progress>
                      </section>
      
                      <section class="mt-4 mb-5">
                        <p class="text-gray-600">Oro:</p>
                        <div class="justify-between flex flex-row"><p>100000000000000000000</p><span class="icon-[mingcute--coin-3-fill] text-yellow-400"></span></div>
                      </section>
                    </div>
                </div>
                  
                </div>
            </div>
                
        
    </main>

    <x-script-board>
        {{-- script componente --}}
    </x-script-board>
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