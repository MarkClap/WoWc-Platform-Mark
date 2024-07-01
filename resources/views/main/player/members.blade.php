@extends('layouts.main.player')

@section('content')
    <section class="mx-auto px-4 sm:px-6 lg:px-6 py-14">

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">

           <div
                class="w-full h-full  hover:bg-neutral-200 dark:hover:bg-neutral-700 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-3 ">
                    <img class="object-center object-cover rounded-full h-16 w-16"
                        src="{{ asset('/img/user01.jpeg') }}"
                        alt="photo">
                </div>
                <div class="text-center text-xs">
                    <p class=" text-black dark:text-white font-bold mb-2">Chooce Marcos -<span class="text-pink-600"> Nvl 35</span>
                    </p>
                    <progress class="progress progress-success" value="50" max="100"></progress>
                    <progress class="progress progress-error" value="50" max="100"></progress>
                </div>
            </div>
            <div
                class="w-full h-full  hover:bg-neutral-200 dark:hover:bg-neutral-700 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-3 ">
                    <img class="object-center object-cover rounded-full h-16 w-16"
                        src="{{ asset('/img/user02.jpg') }}"
                        alt="photo">
                </div>
                <div class="text-center text-xs">
                    <p class=" text-black dark:text-white font-bold mb-2">Torres Ismael -<span class="text-pink-600"> Nvl 20</span>
                    </p>
                    <progress class="progress progress-success" value="75" max="100"></progress>
                    <progress class="progress progress-error" value="30" max="100"></progress>
                </div>
            </div>

            <div
                class="w-full h-full  hover:bg-neutral-200 dark:hover:bg-neutral-700 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-3 ">
                    <img class="object-center object-cover rounded-full h-16 w-16"
                        src="{{ asset('/img/user03.jpg') }}"
                        alt="photo">
                </div>
                <div class="text-center text-xs">
                    <p class=" text-black dark:text-white font-bold mb-2">Rojas Cristian -<span class="text-pink-600"> Nvl 20</span>
                    </p>
                    <progress class="progress progress-success" value="75" max="100"></progress>
                    <progress class="progress progress-error" value="30" max="100"></progress>
                </div>
            </div>
            <div
                class="w-full h-full  hover:bg-neutral-200 dark:hover:bg-neutral-700 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-3 ">
                    <img class="object-center object-cover rounded-full h-16 w-16"
                        src="{{ asset('/img/user04.jpg') }}"
                        alt="photo">
                </div>
                <div class="text-center text-xs">
                    <p class=" text-black dark:text-white font-bold mb-2">Jimenez Pedro -<span class="text-pink-600"> Nvl 20</span>
                    </p>
                    <progress class="progress progress-success" value="75" max="100"></progress>
                    <progress class="progress progress-error" value="30" max="100"></progress>
                </div>
            </div>
            <div
                class="w-full h-full  hover:bg-neutral-200 dark:hover:bg-neutral-700 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-3 ">
                    <img class="object-center object-cover rounded-full h-16 w-16"
                        src="{{ asset('/img/user05.jpg') }}"
                        alt="photo">
                </div>
                <div class="text-center text-xs">
                    <p class=" text-black dark:text-white font-bold mb-2">Lopez Tomas -<span class="text-pink-600"> Nvl 15</span>
                    </p>
                    <progress class="progress progress-success" value="20" max="100"></progress>
                    <progress class="progress progress-error" value="100" max="100"></progress>
                </div>
            </div>
            <div
                class="w-full h-full  hover:bg-neutral-200 dark:hover:bg-neutral-700 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-3 ">
                    <img class="object-center object-cover rounded-full h-16 w-16"
                        src="{{ asset('/img/user06.jpeg') }}"
                        alt="photo">
                </div>
                <div class="text-center text-xs">
                    <p class=" text-black dark:text-white font-bold mb-2">Sanches Karen -<span class="text-pink-600"> Nvl 40</span>
                    </p>
                    <progress class="progress progress-success" value="90" max="100"></progress>
                    <progress class="progress progress-error" value="60" max="100"></progress>
                </div>
            </div>
            
        </div>
    </section>
@endsection
