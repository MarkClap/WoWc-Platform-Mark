@extends('layouts.main.master')

@section('content')
    <section class="mx-auto px-4 sm:px-6 lg:px-6 py-14">

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">

           <div
                class="w-full h-full  hover:bg-neutral-200 dark:hover:bg-neutral-700 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-3 ">
                    <span class="icon-[twemoji--man-pouting-medium-light-skin-tone] object-center object-cover rounded-full h-16 w-16"></span>
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
                    <span class="icon-[twemoji--man-pouting-medium-light-skin-tone] object-center object-cover rounded-full h-16 w-16"></span>
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
                        
                        <span class="icon-[twemoji--man-pouting-medium-light-skin-tone] object-center object-cover rounded-full h-16 w-16"></span>
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
                    <span class="icon-[twemoji--man-pouting-medium-light-skin-tone] object-center object-cover rounded-full h-16 w-16"></span>
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
                    <span class="icon-[twemoji--man-pouting-medium-light-skin-tone] object-center object-cover rounded-full h-16 w-16"></span>
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
                    <span class="icon-[twemoji--woman-pouting-medium-light-skin-tone] object-center object-cover rounded-full h-16 w-16"></span>
                </div>
                <div class="text-center text-xs">
                    <p class=" text-black dark:text-white font-bold mb-2">Sanches Karen -<span class="text-pink-600"> Nvl 40</span>
                    </p>
                    <progress class="progress progress-success" value="90" max="100"></progress>
                    <progress class="progress progress-error" value="60" max="100"></progress>
                </div>
            </div>

            <div
                class="btn btn-ghost w-full h-full  hover:bg-neutral-200 dark:hover:bg-neutral-700 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-3 flex flex-col items-center gap-2">
                    <span class="icon-[subway--add] object-center object-cover rounded-full h-16 w-16"></span>
                    <p class="text-xl font-bold text-center dark:text-neutral-200">add new players</p>
                </div>
                
            </div>
            
        </div>
    </section>
@endsection
