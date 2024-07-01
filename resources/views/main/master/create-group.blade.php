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
    
    

    <main class="flex flex-row flex-grow relative  ">
        
        

        <div class="bg-white dark:bg-neutral-800 w-full flex flex-col">
            
            <section class=" h-30 p-2 justify-center items-center">
                <div class="p-2 space-y-2 flex flex-col items-center">
                    <h2 class=" text-black dark:text-white font-semibold text-2xl">Crear grupos</h2>
                    <p class=" text-neutral-600 dark:text-neutral-200">Arastar y soltar alumnos en los grupos</p>
                </div>
            </section>


            <section class=" h-full flex w-full flex-col gap-2 p-2 overflow-auto
            ">   

                <div class=" h-full flex w-full flex-row gap-2 px-2 border-2 border-yellow-600 p-2 rounded-md">

                    <div class=" w-4/12 flex flex-col gap-2 p-2  border-r-2 border-yellow-500">
                        <div class="flex h-20 items-center justify-center">
                            <p class="text-2xl text-black dark:text-white font-semibold">Alumnos no asignados</p>
                        </div>

                        <div class="flex h-full flex-col gap-2 overflow-auto  justify-center p-2">
                            <p class="rounded-md p-2 w-full border-2 border-black bg-white text-black">nombre alumno</p>
                            <p class="rounded-md p-2 w-full border-2 border-black bg-white text-black">nombre alumno</p>
                            <p class="rounded-md p-2 w-full border-2 border-black bg-white text-black">nombre alumno</p>
                            <p class="rounded-md p-2 w-full border-2 border-black bg-white text-black">nombre alumno</p>
                            <p class="rounded-md p-2 w-full border-2 border-black bg-white text-black">nombre alumno</p>
                        </div>
                    </div>

                    <div class=" w-full grid grid-cols-2 text-black dark:text-neutral-100 items-center gap-2  p-2 overflow-auto h-[32rem]">
                        <div class="bg-white dark:bg-neutral dark:border-neutral-300 w-full gap-2 flex flex-col p-2  border-2 border-black rounded-md min-h-60">
                            <div class=" flex flex-row items-center justify-between ">
                                <div class="avatar">
                                    <div class="w-16 rounded-full">
                                        <img class="object-center object-cover rounded-full h-16 w-16"
                                        src="{{ asset('/img/insignia1.jpg') }}"
                                        alt="photo">
                                    </div>
                                  </div>
                                <div class=" p-2 gap-2 flex w-full">
                                    <input type="text" placeholder="nombre de equipo" class="border-0 border-b-2 bg-transparent focus:border-transparent w-full " />
                                    <span class="btn text-neutral-600 icon-[ooui--edit] dark:hover:bg-neutral-100"></span>
                                </div>
                            </div>
                            <div class="gap-2 p-2 flex flex-col justify-center items-center h-full flex-grow text-neutral-500">
                                <p class="rounded-md p-2 w-full border-2 border-black bg-white text-black">nombre alumno</p>
                                <p class="rounded-md p-2 w-full border-2 border-black bg-white text-black">nombre alumno</p>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-neutral dark:border-neutral-300 w-full gap-2 flex flex-col p-2  border-2 border-black rounded-md min-h-60">
                            <div class=" flex flex-row items-center justify-between ">
                                <img class="object-center object-cover rounded-full h-16 w-16"
                                        src="{{ asset('/img/insignia1.jpg') }}"
                                        alt="photo">
                                <div class=" p-2 gap-2 flex w-full">
                                    <input type="text" placeholder="nombre de equipo" class="border-0 border-b-2 bg-transparent focus:border-transparent w-full" />
                                    <span class="btn text-neutral-600 icon-[ooui--edit] dark:hover:bg-neutral-100"></span>
                                </div>
                            </div>
                            <div class="gap-2 p-2 flex flex-col justify-center items-center h-full flex-grow text-neutral-500">
                                <p>Arastrar un jugador</p>
                            </div>
                        </div>

                        <div class="btn dark:hover:bg-neutral-600 dark:hover:border-neutral-300 hover:bg-slate-100 hover:border-yellow-500 bg-white dark:bg-neutral dark:border-neutral-300 w-full gap-2 flex flex-col p-2  border-2 border-black rounded-md min-h-60">
                            
                            <div class="gap-2 p-2 flex flex-row justify-center items-center h-full flex-grow text-neutral-500">
                                <span class="icon-[gridicons--add] text-4xl"></span>
                                <p class="text-xl">Arastrar un jugador</p>
                            </div>
                        </div>
                        
                    </div>

                </div>

                <div class="flex justify-between pr-2">
                    <a class="btn btn-error" href="{{route('master.groups')}}"><p class="text-lg font-semibold">Salir</p></a>

                    <button class="btn btn-success"><p class="text-lg font-semibold">Confirmar</p></button>
                </div>

            </section>

        </div>
        
    </main>
    
    <x-script-board>
        
    </x-script-board>
    
</body>

</html>