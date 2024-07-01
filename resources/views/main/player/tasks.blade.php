@extends('layouts.main.player')

@section('content')
<div class="bg-white text-black dark:text-white dark:bg-neutral-900 w-full flex justify-center flex-col gap-2 items-center">
    <section class=" w-3/6 flex py-2 px-4 flex-col space-y-2">
        <div class=" p-2 ">
            <h2 class="text-2xl font-bold ">Tareas</h2>
        </div>
        
    </section>
    
    <section class=" w-3/6 flex py-2 px-4 flex-col space-y-2 border-2 border-black dark:border-white">
        <div class=" p-2 font-semibold">
            <h2 class="text-xl">Instruciones</h2>
        </div>
        <div class=" p-2">
            <p>SIgue las instrucciones del profesor y cargar el enlace de la actividad puesta por el profesor</p>
        </div>
        <div class=" p-2 space-y-2">
            <hr class="border-2  border-black dark:border-white w-3/6">
            <hr class="border-2  border-black dark:border-white w-3/6">
            <hr class="border-2  border-black dark:border-white w-3/6">
        </div>

    </section>
    
    <section class=" w-3/6 flex py-2 px-4 flex-col space-y-2 border-2 border-black dark:border-white h-[20rem] overflow-x-scroll">
        <div class="border-b-2">
            <div class=" p-2 font-semibold">
                <h2 class="text-xl">Carge link de la Tarea</h2>
            </div>
            <div class=" p-2 space-y-1 flex justify-between items-center">
                
                <input type="text" placeholder="Carge link de la tarea" class="input input-bordered input-warning w-full " />
                <div class=" p-2 flex justify-end">
                    <button class="btn bg-yellow-500">
                        <p class="text-lg">Entregar</p>
                    </button>
                </div>
            </div>
        </div>

        <div class="border-b-2">
            <div class=" p-2 font-semibold">
                <h2 class="text-xl">Carge link de la Tarea</h2>
            </div>
            <div class=" p-2 space-y-1 flex justify-between items-center">
                
                <input type="text" placeholder="Carge link de la tarea" class="input input-bordered input-warning w-full " />
                <div class=" p-2 flex justify-end">
                    <button class="btn bg-yellow-500">
                        <p class="text-lg">Entregar</p>
                    </button>
                </div>
            </div>
        </div>

        <div class="border-b-2">
            <div class=" p-2 font-semibold">
                <h2 class="text-xl">Carge link de la Tarea</h2>
            </div>
            <div class=" p-2 space-y-1 flex justify-between items-center">
                
                <input type="text" placeholder="Carge link de la tarea" class="input input-bordered input-warning w-full " />
                <div class=" p-2 flex justify-end">
                    <button class="btn bg-yellow-500">
                        <p class="text-lg">Entregar</p>
                    </button>
                </div>
            </div>
        </div>

            

    </section>

    
</div>

@endsection