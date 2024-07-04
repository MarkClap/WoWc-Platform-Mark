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
    <main class="flex flex-row flex-grow relative items-center justify-center ">
        <div class="bg-white-400 flex w-full justify-center items-center flex-col">

            <h1 class="text-yellow-500 text-5xl py-10 text-center underline">Panel Administrativo</h1>
            <div class="px-3 py-4 flex w-8/12 border-2 border-black dark:border-white flex-col items-center">

                {{-- content-title --}}
                <div class="p-3 flex justify-between w-11/12 items-center border-b-2 border-black">

                    <span class="text-2xl text-neutral-700 dark: dark:text-neutral-300">
                        {{ __('Teachers') }}
                    </span>
                    <section class=" py-1 flex justify-end">



                        <dialog id="my_modal_1" class="modal">
                            <div class="modal-box p-8 text-neutral-700 bg-white border">
                                <h3 class="font-bold text-2xl justify-center flex w-ful">Introduce el correo del usuario
                                </h3>
                                <div class="modal-action">
                                    <form method="POST" class="w-full flex gap-4 flex-col " action="{{ route('teachers.store') }}">
                                        @csrf
                                        <div class="flex flex-col gap-2">
                                            <label class=" text-neutral-700 text-xl justify-start"
                                                for="email">{{ __('Email') }} :
                                            </label>
                                        
                                            <input
                                                type="text"
                                                name="email"
                                                name="email"
                                                placeholder="user@example.com"
                                                class="input input-bordered input-warning w-full bg-white" />
                                        </div>
                                        <input type="text" name="id_institution" value=" {{$institution->id}} " class="hidden">
                                        
                                        <button type="submit"
                                            class="btn btn-success text-neutral-100 w-2/6  text-lg hover:border-green-700 border-2">
                                            {{ __('Submit') }}
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </dialog>


                    </section>

                    <div class="" onclick="my_modal_1.showModal()">
                        <button class="btn btn-warning text-neutral-100 text-base">
                        <span class="icon-[mdi--plus-circle-outline] text-2xl"></span>
                        <p >
                            {{ __('Create New') }}
                        </p>
                        </button>
                </div>



                </div>

                {{-- content-title --}}
                {!! $errors->first('email', '<div class="text-red-500" role="alert"><strong>:message</strong></div>') !!}
                

                <div class="rounded-sm flex w-full items-center overflow-x-scroll">

                    <table class="w-full text-md shadow-md">
                        
                        <thead class="border-b p-2 text-black dark:text-yellow-500">
                            <tr>

                                <th class="text-left p-3 px-5">Teacher</th>
                                <th class="text-left p-3 px-5">Email</th>
                                <th class="text-left p-3 px-5">Institution</th>
                                <th class=" p-3 px-5">Eliminar</th>

                                  
                            </tr>
                            
                        </thead>
                        <tbody class=" text-black space-y-2 dark:text-neutral-100">
                            @foreach ($teachers as $teacher)
                                <tr>

                                    <td class="text-left p-3 px-5">{{ $teacher->user->name }}</td>
                                    <td class="text-left p-3 px-5">{{ $teacher->user->email }}</td>
                                    <td class="text-left p-3 px-5">{{ $teacher->institution->name }}</td>
                                    <td class="flex justify-center mt-2">
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
    @if ($message = Session::get('success'))
                    
        <div class="toast" id="alert">
            <div class="alert alert-success">
                <span class="icon-[wpf--approval] text-2xl"></span>
                <p class="text-xl">{{ $message }}</p>
            </div>
            
        </div>
    @endif
</body>
<script>
    const toast = document.getElementById('alert');
    if (toast) {
        toast.classList.add('transition-opacity', 'duration-300', 'ease-out');
        setTimeout(() => {
            toast.classList.add('opacity-0');
            setTimeout(() => {
                toast.remove();
            }, 300);
        }, 4000);
    }
</script>
</html>
