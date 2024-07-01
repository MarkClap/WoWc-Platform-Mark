@extends('layouts.main.player')

@section('content')
<div class="bg-white text-black dark:text-white dark:bg-neutral-900 w-full flex justify-center  flex-col gap-2 items-center">
    <section class=" w-3/6 flex py-2 px-4 flex-col space-y-2">
        <div class=" p-2">
            <h2 class="text-2xl font-bold">Quizzes    </h2>
        </div>
        
    </section>
    
    <section class=" w-3/6 flex py-2 px-4 flex-col space-y-2 border-2 border-black dark:border-white">
        <div class=" p-2 font-semibold">
            <h2 class="text-xl">Instruciones</h2>
        </div>
        <div class=" p-2">
            <p>Lee atentamente las preguntas y selecciona una respuesta, el resultado del examen saldra al terminar el terminar</p>
        </div>
        <div class=" p-2 space-y-2">
            <hr class="border-2 border-black w-3/6 dark:border-white">
            <hr class="border-2 border-black w-3/6 dark:border-white">
            <hr class="border-2 border-black w-3/6 dark:border-white">
        </div>

    </section>

    <section class=" w-3/6 flex py-2 px-4 flex-col space-y-2 border-2 border-black dark:border-white">
        <h1 class="text-2xl font-bold">Quizzes Disponibles</h1>

        <div class="p-1 flex justify-between border-b-2 items-center text-xl font-semibold">
            <p>Examen 1</p>
            <a class="btn bg-yellow-500" href="/quizzes" >Realizar</a>
        </div>

        <div class="p-1 flex justify-between border-b-2 items-center text-xl font-semibold">
            <p>Examen 1</p>
            <button class="btn bg-yellow-500">
                <p class="text-lg">Realizar</p>
            </button>
        </div>

        <div class="p-1 flex justify-between border-b-2 items-center text-xl font-semibold">
            <p>Examen 1</p>
            <button class="btn bg-yellow-500">
                <p class="text-lg">Realizar</p>
            </button>
        </div>
        

    </section>
    
    
</div>
@endsection