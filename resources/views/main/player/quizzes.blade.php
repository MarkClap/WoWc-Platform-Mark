@extends('layouts.main.player')

@section('content')
<div class="bg-white text-black dark:text-white dark:bg-neutral-900 w-full flex justify-center  flex-col gap-2 items-center">
    <section class=" w-3/6 flex py-2 px-4 flex-col space-y-2">
        <div class=" p-2">
            <h2 class="text-2xl font-bold">Nombre de Quizzes    </h2>
        </div>
        <div class=" p-2 border-y-2 border-black h-32 dark:border-white">
            <h2 class="text-neutral-400 text-2xl">Aca va algo.......</h2>
        </div>
    </section>
    
    <section class=" w-3/6 flex py-2 px-4 flex-col space-y-2 border-2 border-black dark:border-white">
        <div class=" p-2 font-semibold">
            <h2 class="text-xl">Instruciones</h2>
        </div>
        <div class=" p-2">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum provident minima reiciendis at ab, rerum pariatur accusantium, blanditiis quo consequuntur neque? Totam, eos ducimus. Quod similique eaque vitae sit dolorem!</p>
        </div>
        <div class=" p-2 space-y-2">
            <hr class="border-2 border-black w-3/6 dark:border-white">
            <hr class="border-2 border-black w-3/6 dark:border-white">
            <hr class="border-2 border-black w-3/6 dark:border-white">
        </div>

    </section>
    
    <section class=" w-3/6 flex py-2 px-4 flex-col space-y-2">
        <div class=" p-2 flex justify-end">
            <a class="btn bg-yellow-500" href="/quizzes" >
                <p class="text-lg">Realizar</p>
            </a>
        </div>
        

    </section>
</di
v>
@endsection