<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen w-screen max-h-screen max-w-full flex items-center justify-center">

    <section class="flex flex-col items-center justify-center gap-4">
        <h1>Ingresa tu código</h1>
        <form class="flex flex-col bg-white p-4 rounded-lg gap-2" method="post" action="{{ route('validation.inscription', ['token' => $course->token]) }}">
            @csrf
            <input type="text" name="code" class="rounded-lg font-medium text-neutral-500">
            <input type="number" name="id_course" value="{{ $course->id }}">
            <input type="text" name="token" value="{{ $course->token }}">
            <input type="text" name="id_user" value="{{ Auth::user()->id }}">
            <button type="submit" class="btn">Entrar</button>
        </form>
    </section>
</body>

</html>
