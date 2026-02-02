<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Quiz</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-gray-100 dark:bg-neutral-900 min-h-screen font-sans">
    
    <!-- Header -->
    <header class="bg-white dark:bg-neutral-800 shadow-sm sticky top-0 z-50">
        <div class="max-w-4xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-gray-800 dark:text-white flex items-center gap-2">
                <span class="icon-[fluent--quiz-new-24-regular] text-yellow-500 w-6 h-6"></span>
                Evaluación en Curso
            </h1>
            <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                Preguntas: <span class="text-gray-900 dark:text-white">{{ $quizzes->count() }}</span>
            </div>
        </div>
    </header>

    <main class="max-w-3xl mx-auto px-4 py-8">
        
        <form method="POST" action="{{ route('check.quiz', ['token' => $token]) }}" class="space-y-8">
            @csrf
            
            @foreach ($quizzes as $index => $quiz)
            <div class="bg-white dark:bg-neutral-800 rounded-xl shadow-md border border-gray-200 dark:border-neutral-700 overflow-hidden">
                
                <!-- Question Header -->
                <div class="bg-gray-50 dark:bg-neutral-900/50 p-6 border-b border-gray-200 dark:border-neutral-700 flex justify-between items-start">
                    <div>
                        <span class="text-xs font-bold text-yellow-600 dark:text-yellow-500 uppercase tracking-wide">Pregunta {{ $index + 1 }}</span>
                        <h3 class="text-lg font-bold text-gray-800 dark:text-white mt-1 leading-snug">
                            {{ $quiz->question }}
                        </h3>
                    </div>
                    <span class="badge badge-warning text-white whitespace-nowrap">2 pts</span>
                </div>

                <!-- Answers Options -->
                <div class="p-6 space-y-3">
                    @foreach ($quiz->answers as $ansIndex => $answer)
                    @php 
                        $optionId = "q{$quiz->id}_opt{$ansIndex}"; 
                    @endphp
                    <label for="{{ $optionId }}" class="flex items-center p-4 border rounded-xl cursor-pointer hover:bg-yellow-50 dark:hover:bg-yellow-900/10 hover:border-yellow-200 dark:hover:border-yellow-700 transition-all group">
                        <input type="radio" 
                            id="{{ $optionId }}" 
                            name="answerselected[{{ $quiz->id }}]" 
                            value="{{ $answer }}" 
                            required
                            class="radio radio-warning mr-4 group-hover:scale-110 transition-transform">
                        <span class="text-gray-700 dark:text-gray-200 font-medium select-none group-hover:text-yellow-700 dark:group-hover:text-yellow-400 transition-colors">
                            {{ $answer }}
                        </span>
                    </label>
                    @endforeach
                </div>

            </div>
            @endforeach

            <!-- Action Buttons -->
            <div class="flex flex-col gap-4 pt-4 pb-12 items-center">
                <input type="hidden" name="token" value="{{ $token }}">
                <button type="submit" class="btn bg-yellow-500 hover:bg-yellow-600 text-white border-none w-full max-w-sm text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all">
                    Terminar y Enviar Examen
                    <span class="icon-[fluent--send-24-filled] ml-2"></span>
                </button>
                <p class="text-sm text-gray-500 dark:text-gray-400 text-center">
                    Asegúrate de responder todas las preguntas antes de enviar.
                </p>
            </div>

        </form>
    </main>

</body>
</html>
