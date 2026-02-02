<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convocar Leyendas - WoWc Platform</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Almendra:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: url('/img/invitation-bg.png') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Almendra', serif;
        }

        .fantasy-panel {
            background: rgba(20, 20, 25, 0.85);
            backdrop-filter: blur(8px);
            border: 2px solid #c59b6d;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.8), inset 0 0 15px rgba(197, 155, 109, 0.2);
            border-radius: 4px;
            position: relative;
        }

        .fantasy-panel::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            border: 1px solid rgba(197, 155, 109, 0.3);
            pointer-events: none;
        }

        h1 {
            font-family: 'Cinzel', serif;
            color: #f7e0b5;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            letter-spacing: 2px;
        }

        .btn-fantasy {
            background: linear-gradient(to bottom, #7d5a3c 0%, #4a3422 100%);
            border: 1px solid #c59b6d;
            color: #f7e0b5;
            font-family: 'Cinzel', serif;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: bold;
        }

        .btn-fantasy:hover {
            background: linear-gradient(to bottom, #966b47 0%, #5e422b 100%);
            box-shadow: 0 0 15px rgba(197, 155, 109, 0.4);
            transform: translateY(-1px);
        }

        .input-fantasy {
            background: rgba(0, 0, 0, 0.4);
            border: 1px solid #4a3422;
            color: #f7e0b5;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .input-fantasy:focus {
            border-color: #c59b6d;
            box-shadow: 0 0 8px rgba(197, 155, 109, 0.2);
        }

        .label-fantasy {
            color: #f7e0b5;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.8rem;
            font-weight: bold;
        }
    </style>
</head>

<body class="h-screen w-screen flex items-center justify-center p-4">

    <div class="fantasy-panel max-w-lg w-full p-8 flex flex-col items-center gap-6 animate-in fade-in zoom-in duration-700">
        <header class="text-center">
            <h1 class="text-3xl font-bold mb-2">Las Leyendas de {{ $course->name }}</h1>
            <p class="text-[#c59b6d] italic text-lg">Convoca a nuevos héroes para tu causa.</p>
        </header>

        <form method="post" action="{{ route('invitations.generate', ['token' => $course->token]) }}" class="flex flex-col w-full gap-5">
            @csrf
            
            <div class="flex flex-col gap-1">
                <label for="name" class="label-fantasy">Nombre del Invitado</label>
                <input type="text" id="name" name="name" required 
                       placeholder="Ej: Thrall, Hijo de Durotan"
                       class="input-fantasy p-3 rounded">
            </div>

            <div class="flex flex-col gap-1">
                <label for="email" class="label-fantasy">Correo Electrónico</label>
                <input type="email" id="email" name="email" required 
                       placeholder="heroe@azeroth.com"
                       class="input-fantasy p-3 rounded">
            </div>

            <input type="hidden" name="id_course" value="{{ $course->id }}">

            <button type="submit" class="btn-fantasy py-4 px-8 rounded cursor-pointer text-lg mt-2">
                Enviar Convocatoria
            </button>
        </form>

        <footer class="mt-2 text-center">
            <p class="text-[#c59b6d] text-sm opacity-60">"Por la Alianza... ¡Por la Horda!"</p>
        </footer>
    </div>

</body>

</html>
