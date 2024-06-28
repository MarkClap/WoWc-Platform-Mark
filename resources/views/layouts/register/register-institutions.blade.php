<x-authentication-header>

        @section('helper_text_button', __('Already have an account?'))
            
        <x-slot name="button">
            <x-anchor-button href="{{ route('login') }}">
                <p>{{ __('Log in') }}</p>
            </x-anchor-button>
        </x-slot>
</x-authentication-header>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="">
        <div class="flex place-content-center p-4">
            <div class="text-center border w-2/3 rounded-sm p-2">
                <h1 class="text-xl p-5">Solicitar cuenta de institución</h1>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=world.of.warclass@gmail.com&su=Solicitar%20cuenta%20de%20institucion"target="_blank" class="btn bg-red-500">Enviar correo</a>
            </div>
        </div>
</body>
</html>

