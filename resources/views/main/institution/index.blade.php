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

<body class="bg-base-300 flex flex-col min-h-screen w-full font-semibold">
    @livewire('navigation-menu')
    <main class="flex flex-row flex-grow relative items-center justify-center bg-neutral-100">
        <div class="bg-white-400 flex w-full justify-center items-center flex-col">

            <h1 class="text-black text-5xl py-10 text-center">Panel Administrativo</h1>
            <div class="px-3 py-4 flex w-8/12 border-2 border-black flex-col items-center">

                {{-- content-title --}}
                <div class="p-3 flex justify-between w-11/12 items-center border-b-2 border-black">

                    <span class="text-2xl text-black ">
                        {{ __('Teachers') }}
                    </span>
                    <section class=" py-1 flex justify-end">



                        <dialog id="my_modal_1" class="modal">
                            <div class="modal-box p-8 text-black bg-white border">
                                <h3 class="font-bold text-2xl justify-center flex w-ful">Introduce el correo del usuario
                                </h3>
                                <div class="modal-action">
                                    <form method="POST" class="w-full p-3" action="{{ route('teachers.store') }}">
                                        @csrf
                                        <div class="mb-4">
                                            <label class="block text-gray-700 mb-2"
                                                for="email">{{ __('Email') }}</label>
                                            <input type="text" name="email" id="email"
                                                class="form-input w-full text-black" placeholder="user@example.com">
                                        </div>
                                        <input type="text" name="id_institution" value=" {{$institution->id}} " class="hidden">
                                        <button type="submit"
                                            class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-700">
                                            {{ __('Submit') }}
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </dialog>


                    </section>

                    <div class="" onclick="my_modal_1.showModal()">
                        <p class=" btn bg-yellow-500 hover:bg-yellow-400 text-black border-2">
                            {{ __('Create New') }}
                        </p>
                    </div>



                </div>

                {{-- content-title --}}
                {!! $errors->first('email', '<div class="text-red-500" role="alert"><strong>:message</strong></div>') !!}
                @if ($message = Session::get('success'))
                    <div role="alert" class="alert alert-success">
                        <span class="icon-[ep--success-filled] text-2xl"></span>
                        <p class="text-xl text-black">{{ $message }}</p>

                    </div>
                @endif

                <div class="rounded-sm flex w-full items-center overflow-x-scroll">

                    <table class="w-full text-md shadow-md">
                        <thead class="border-b text-black">
                            <tr>

                                <th class="text-left p-3 px-5">Teacher</th>
                                <th class="text-left p-3 px-5">Email</th>
                                <th class="text-left p-3 px-5">Institution</th>
                                <th class="text-left p-3 px-5">Eliminar</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody class=" text-black space-y-2 ">
                            @foreach ($teachers as $teacher)
                                <tr>

                                    <td class="text-left p-3 px-5">{{ $teacher->user->name }}</td>
                                    <td class="text-left p-3 px-5">{{ $teacher->user->email }}</td>
                                    <td class="text-left p-3 px-5">{{ $teacher->institution->name }}</td>
                                    <td class="p-3 px-5 flex justify-start">
                                        <form action="{{ route('teachers.destroy', $teacher->id) }}" method="get"
                                            class="flex flex-row justify-center items-center mb-0">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-700 border-2 border-black rounded-md p-2"
                                                onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><span
                                                    class="icon-[mi--delete]"></span></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {!! $teachers->withQueryString()->links() !!}

        </div>
    </main>
</body>

</html>
