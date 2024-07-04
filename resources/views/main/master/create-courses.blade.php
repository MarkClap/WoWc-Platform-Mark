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
    
    <main class="flex flex-row flex-grow relative">
        
        {{-- <pre>
            {{ $teacher }}
        </pre> --}}
        <div class="text-neutral-700 flex flex-col justify-center items-center w-full gap-4 dark:text-neutral-100">
            <h1 class="text-5xl font-semibold">Create Course</h1>
            <form data-theme="wowc_light" method="POST" action="{{ route('course.store') }}" class="text-neutral-500 dark:text-neutral-200 p-10 w-2/5 flex flex-col items-center rounded-md justify-center gap-3 dark:bg-neutral-800">
                @csrf
                <h1 class="text-3xl font-bold text-yellow-500 pb-3">Detalles de Curso</h1>

                <div class="flex flex-col gap-2 w-full text-xl ">
                    <label for="name">Course name:</label>
                    <input
                            type="text"
                            name="name"
                            placeholder="Ingrese el nombre del curso"
                            class="input input-bordered input-warning w-full" />
                </div>
                <div class="flex flex-col gap-2 w-full text-xl ">
                    <p>Description:</p>
                    
                    <textarea class="textarea textarea-warning h-32" placeholder="Ingrese Descripcion del curso" name="description"></textarea>
                    
                </div>
                <input type="type" name="id_institution" value="{{$id_institution->id}}" class="hidden">

                <button class="btn btn-accent" type="submit"><p class="text-xl text-white">Guardar</p></button>
            </form>
        </div>
    </main>
    
    
</body>

</html>
