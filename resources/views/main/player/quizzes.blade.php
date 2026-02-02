@extends('layouts.main.player')

@section('content')
<div class="bg-gray-100 dark:bg-neutral-900 min-h-screen w-full flex flex-col items-center py-10 gap-6">
    
    <!-- Title Section -->
    <section class="max-w-4xl w-full px-4">
        <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-2">Mis Quizzes</h2>
        <p class="text-gray-600 dark:text-gray-400">Demuestra tus conocimientos en las evaluaciones disponibles.</p>
    </section>

    <!-- Instructions Section -->
    <section class="max-w-4xl w-full px-4">
        <div class="bg-white dark:bg-neutral-800 rounded-xl shadow-sm border border-gray-200 dark:border-neutral-700 p-6">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-3">Instrucciones</h3>
            <p class="text-gray-600 dark:text-gray-300 mb-4">
                Lee atentamente cada pregunta antes de responder. Al finalizar el examen, obtendrás tu calificación automáticamente. ¡Buena suerte!
            </p>
            <div class="flex gap-2">
                <div class="h-1 flex-1 bg-yellow-500 rounded-full opacity-80"></div>
                <div class="h-1 flex-1 bg-blue-500 rounded-full opacity-80"></div>
                <div class="h-1 flex-1 bg-pink-500 rounded-full opacity-80"></div>
            </div>
        </div>
    </section>

    <!-- Quizzes List Section -->
    <section class="max-w-4xl w-full px-4 grid grid-cols-1 md:grid-cols-2 gap-6">
        @php
            $quizzes_mock = [
                ['id' => 1, 'title' => 'Examen Parcial 1', 'icon' => 'icon-[fluent--quiz-new-24-regular]', 'status' => 'Disponible', 'color' => 'text-green-500', 'btn_text' => 'Comenzar'],
                ['id' => 2, 'title' => 'Prueba de Conocimiento', 'icon' => 'icon-[fluent--clipboard-clock-24-regular]', 'status' => 'Próximamente', 'color' => 'text-gray-400', 'btn_text' => 'Bloqueado'],
            ];
        @endphp

        <!-- Functional Quiz Card (Examen 1) -->
        <div class="bg-white dark:bg-neutral-800 rounded-xl shadow-md border border-gray-200 dark:border-neutral-700 overflow-hidden hover:shadow-lg transition-transform hover:-translate-y-1 duration-300">
            <div class="h-2 bg-yellow-500 w-full"></div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-4">
                    <span class="icon-[fluent--quiz-new-24-regular] w-10 h-10 text-yellow-600 bg-yellow-100 dark:bg-yellow-900/30 rounded-lg p-2"></span>
                    <span class="badge badge-success gap-2 text-white">Disponible</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Examen Parcial 1</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">
                    Evaluación sobre los temas vistos en la unidad 1. Tiempo estimado: 20 min.
                </p>
                <form method="get" action="{{ route('player.quizzes.start', ['token' => $token]) }}" class="w-full">
                    <button type="submit" class="btn bg-yellow-500 hover:bg-yellow-600 text-white border-none w-full gap-2">
                        Comenzar Ahora
                        <span class="icon-[fluent--arrow-right-24-filled]"></span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Mock Locked Quiz Card -->
        <div class="bg-white dark:bg-neutral-800 rounded-xl shadow-md border border-gray-200 dark:border-neutral-700 overflow-hidden opacity-75 grayscale-[50%]">
            <div class="h-2 bg-gray-300 dark:bg-neutral-600 w-full"></div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-4">
                    <span class="icon-[fluent--lock-closed-24-regular] w-10 h-10 text-gray-500 bg-gray-100 dark:bg-neutral-700 rounded-lg p-2"></span>
                    <span class="badge badge-ghost gap-2">Bloqueado</span>
                </div>
                <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2">Examen Final</h3>
                <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">
                    Se habilitará al completar todas las tareas. Tiempo estimado: 45 min.
                </p>
                <button disabled class="btn btn-disabled w-full gap-2">
                    No Disponible
                    <span class="icon-[fluent--lock-closed-24-filled]"></span>
                </button>
            </div>
        </div>

    </section>
</div>
@endsection
