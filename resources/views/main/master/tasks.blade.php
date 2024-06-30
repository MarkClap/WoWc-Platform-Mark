@extends('layouts.main.master')

@section('content')
<div class="bg-white w-full flex justify-center text-black flex-col gap-2 items-center">
    <section class=" w-3/6 flex py-2 px-4 flex-col space-y-2">
        <div class=" p-2">
            <h2 class="text-2xl font-bold">Nombre de mision</h2>
        </div>
        <div class=" p-2 border-y-2 border-black h-16">
            <h2 class="text-neutral-400 text-xl">Aca va algo.......</h2>
        </div>
    </section>
    
    <section class=" w-3/6 flex py-2 px-4 flex-col space-y-2 border-2 border-black">
        <div class=" p-2 font-semibold">
            <h2 class="text-xl">Instruciones</h2>
        </div>
        <div class=" p-2">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum provident minima reiciendis at ab, rerum pariatur accusantium, blanditiis quo consequuntur neque? Totam, eos ducimus. Quod similique eaque vitae sit dolorem!</p>
        </div>
        <div class=" p-2 space-y-2">
            <hr class="border-2 border-black w-3/6">
            <hr class="border-2 border-black w-3/6">
            <hr class="border-2 border-black w-3/6">
        </div>

    </section>
    
    <section class=" w-3/6 flex py-2 px-4 flex-col space-y-2 border-2 border-black">
        <div class=" p-2 font-semibold">
            <h2 class="text-xl">Carge link</h2>
        </div>
        <div class=" p-2 space-y-1">
            <p>Despues de relizar la mission carge el link</p>
            <input type="file" class="file-input file-input-bordered file-input-warning w-full bg-slate-50 h-10" />
        </div>
        <div class=" p-2 flex justify-end">
            <button class="btn bg-yellow-500">
                <p class="text-lg">Entregar</p>
            </button>
        </div>

    </section>
</div>

@endsection