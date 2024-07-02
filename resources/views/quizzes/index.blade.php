<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzes</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body>
<pre>
    {{ Auth::user()}}
</pre>
    <div class="bg-white w-full flex justify-center text-black flex-col gap-2 items-center p-2 h-screen">
        <div class="flex w-4/5 flex-col border-2 border-black max-h-[40rem]">
        <section class=" w-full flex p-2">
            <div class="
             p-2 w-full flex flex-col">
                <h1 class="text-4xl font-bold text-center text-yellow-500">EXAM QUIZ</h1>
                <hr class="border border-black">
            </div>
        </section>

        <section class=" w-full flex p-2 flex-col gap-2 items-center">
            <section class="w-full space-y-2 p-2">
                
                    <form method="POST" action="{{ route('quizzes.check') }}" class="flex flex-col gap-y-2 overflow-auto h-[30rem]">
                            @csrf
                        @foreach($quizzes as $quiz)
                        <div class="p-5">
                            <div class=" border-2 border-black border-b-0 flex flex-row justify-between bg-red-500 p-2">
                                <h3 class="text-2xl font-semibold text-neutral-100">Pregunta {{$i++}} </h3>
                                <h2 class="text-2xl font-semibold text-neutral-100">2 pts</h2>
                        
                            </div>

                            <div class="bg-white flex flex-col justify-betwee p-2  flex-grow border-2 border-black">
                                <h2 class="text-2xl py-4 px-2 font-semibold">
                                    {{ $quiz->question }}
                                </h2>
                            @foreach($quiz->answers as $answer)
                                <div class="flex flex-col justify-between p-2 gap-1">
                                    <div class="flex flex-row gap-1 items-center">
                                        <input type="radio" required name="answerselected[{{ $quiz->id }}]" value="{{ $answer }}">
                                        
                                        <label for="{{ $answer }}{{ $quiz->id }}">{{ $answer }}</label>
                                        
                                    </div>
                                    <hr class="border-2 border-neutral-300 w-3/4">
                                </div>

                            @endforeach

                            </div>
                        </div>
                        @endforeach

            </section>
                        <button class="btn btn-warning w-2/4" type="submit">
                            <p class="text-xl text-white font-bold">Entregar</p>
                        </button>
                    </form>
                </div>
            
        </section>
        
    
</div>  

</body>
</html>