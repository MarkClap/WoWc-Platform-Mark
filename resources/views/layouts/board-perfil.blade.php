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
                    <ul tabindex="0" class="dropdown-content z-[1] menu shadow bg-base-100 rounded-box w-40 mt-6">
                      <li><a>Item 1</a></li>
                      <li><a>Item 2</a></li>
                    </ul>
                </div>
                <div class="dropdown dropdown-end">
                    <span tabindex="0" role="button" class="icon-[emojione-monotone--broken-heart] transition-transform transform-growth hover:scale-110 duration-200 cursor-pointer"></span>
                        <ul tabindex="0" class="dropdown-content z-[1] menu shadow bg-base-100 rounded-box w-40 mt-6">
                          <li><a>Item 1</a></li>
                          <li><a>Item 2</a></li>
                        </ul>
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

    <main class="flex flex- flex-grow relative  ">
       
<form class="w-full max-h-full max-w-md bg-white p-8 space-y-3 rounded-sm border-r-2 border-neutral-500">
    <h2 class="text-black font-bold text-2xl ">Nombre y apellido</h2>
    <hr class="border-neutral-500">
    
    <section class="flex flex-wrap py-2">
        <h3 class="text-gray-700 text-xs font-bold uppercase">Correo electrónico</h3>
        <div class=" space-y-4 text-2xl py-3 w-full">
        <input class="w-full text-gray-700  rounded border-neutral-300" type="email" placeholder="Correo electrónico">
        <input class="w-full text-gray-700 border rounded border-neutral-300" type="email" placeholder="Confirmar Correo electrónico">
        </div>
    </section>
    
    <section class="flex flex-wrap">
        <h3 class="text-gray-700 text-xs font-bold uppercase">Información de perfil</h3>
        <div class="py-2 text-black w-full">
            <label >contraseña antigua</label>
            <input class="appearance-none  w-full  text-gray-700 border rounded border-neutral-300" type="password">
        </div>
        <div class="   py-2 text-black w-full">
            <label >contraseña nueva</label>
            <input class="appearance-none  w-full  text-gray-700 border rounded border-neutral-300" type="password">
        </div>
        <div class="   py-2 text-black w-full">
            <label >confirmar contraseña</label>
            <input class="appearance-none  w-full  text-gray-700 border rounded border-neutral-300" type="password">
        </div>
    </section>
        <button class="shadow bg-yellow-400 hover:bg-yellow-200  text-white font-bold py-2 px-4 rounded-lg" type="button">
          Guardar cambios
        </button>
      

  </form>
  
  
    
    <div class="bg-white flex text-black w-full items-center justify-center">
        <div class="flex items-center bg-red-600 rounded-md border-2 border-black">
            <div class="w-96">
                
            </div>
            <div class=" text-black flex justify-center">
                <div class="bg-white p-8 rounded-md">
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
        </div>
         

    </div>
      
        
      
    </main>

    <x-script-board>
        
    </x-script-board>
    


</body>


</html>