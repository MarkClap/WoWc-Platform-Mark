<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear curso</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen w-screen max-h-screen max-w-full flex items-center justify-center">

    <section class="flex flex-col items-center justify-center gap-4">
        <h1 class="text-2xl font-bold">{{ $id_institution -> name }} | Crear Clase</h1>
        <form class="flex flex-col p-4 rounded-lg gap-2" method="post"
            action="{{ route('course.store') }}">
            @csrf
            <label class="font-medium">Nombre:</label>
            <input type="text" name="name" placeholder="Nombre del curso" class="input input-bordered w-full max-w-xs" />

            <label class="font-medium">Descripción:</label>
            <textarea class="textarea textarea-bordered" name="description" placeholder="Descripción del curso"></textarea>
            <input type="hidden" name="id_institution" value="{{ $id_institution->id }}">

            <button type="submit" class="btn bg-base-200 dark:bg-accent hover:bg-primary duration-300">Guardar</button>
        </form>
    </section>
</body>

</html>
