@extends('layouts.main.player')

@section('content')


    <div class="bg-white dark:bg-black  w-full flex flex-col items-center justify-center">
        
        <section class="dark:bg-black  w-8/12 flex flex-col items-center overflow-x-scroll h-[40rem] border-2 border-neutral-500">
        <div class="w-full h-full  px-4 py-2  shadow-lg rounded-sm  text-black ">
            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-bold text-2xl text-yellow-600 ">Grupo 1</h2>
            </header>
            <div class="p-3 ">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full space-x-3 text-white border-2">
                        <thead class="text-xs font-semibold uppercase text-yellow-500 bg-neutral-700">
                            <tr class="border-2 border-black">
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-left">Alumno</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-left">Personaje</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-left">Nivel</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Oro</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Experiencia</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Energía</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Vida</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100 text-neutral-600 dark:text-white border-2 border-black">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>     
    </section>
    </div>
@endsection


