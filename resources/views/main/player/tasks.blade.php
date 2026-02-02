@extends('layouts.main.player')

@section('content')
<div class="bg-gray-100 dark:bg-neutral-900 min-h-screen w-full flex flex-col items-center py-10 gap-6">
    
    <!-- Title Section -->
    <section class="max-w-4xl w-full px-4">
        <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-2">Mis Tareas</h2>
        <p class="text-gray-600 dark:text-gray-400">Gestiona y entrega tus actividades pendientes.</p>
    </section>
    
    <!-- Instructions Section -->
    <section class="max-w-4xl w-full px-4">
        <div class="bg-white dark:bg-neutral-800 rounded-xl shadow-sm border border-gray-200 dark:border-neutral-700 p-6">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-3">Instrucciones Generales</h3>
            <p class="text-gray-600 dark:text-gray-300 mb-4">
                Sigue las indicaciones del profesor para cada actividad. Carga el enlace de tu trabajo en el campo correspondiente y pulsa "Entregar".
            </p>
            <div class="flex gap-2">
                <div class="h-1 flex-1 bg-yellow-500 rounded-full opacity-80"></div>
                <div class="h-1 flex-1 bg-blue-500 rounded-full opacity-80"></div>
                <div class="h-1 flex-1 bg-pink-500 rounded-full opacity-80"></div>
            </div>
        </div>
    </section>

    <!-- Tasks List Section -->
    <section class="max-w-4xl w-full px-4 flex flex-col gap-4">
        @php
            // Mock tasks since no Task model exists yet
            $tasks = [
                ['id' => 1, 'title' => 'Investigación de Historia', 'description' => 'Cargue el enlace al documento PDF.'],
                ['id' => 2, 'title' => 'Ensayo de Literatura', 'description' => 'Enlace al Google Doc con permisos de lectura.']
            ];
        @endphp

        @foreach($tasks as $task)
        <div class="bg-white dark:bg-neutral-800 rounded-xl shadow-md border border-gray-200 dark:border-neutral-700 overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="p-6 border-b border-gray-100 dark:border-neutral-700 bg-gray-50 dark:bg-neutral-800/50">
                <div class="flex items-center gap-3">
                    <span class="icon-[fluent--clipboard-task-24-regular] w-6 h-6 text-yellow-600"></span>
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">{{ $task['title'] }}</h3>
                </div>
            </div>
            
            <div class="p-6 flex flex-col md:flex-row gap-4 items-center justify-between">
                <div class="flex-1 w-full">
                    <label class="block text-sm font-medium text-gray-500 dark:text-gray-400 mb-1">
                        {{ $task['description'] }}
                    </label>
                    <input type="text" 
                        placeholder="Pegar enlace de la tarea aquí..." 
                        class="input input-bordered w-full bg-gray-50 dark:bg-neutral-900 focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500" />
                </div>
                
                <div class="w-full md:w-auto">
                    <button class="btn bg-yellow-500 hover:bg-yellow-600 text-white border-none w-full md:w-auto px-6 gap-2">
                        <span class="icon-[fluent--send-24-filled]"></span>
                        Entregar
                    </button>
                </div>
            </div>
        </div>
        @endforeach

    </section>
</div>
@endsection