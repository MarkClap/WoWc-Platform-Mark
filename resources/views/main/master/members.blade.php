@extends('layouts.main.master')

@section('content')
    <section class="mx-auto px-4 sm:px-6 lg:px-6 py-14">

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">

            @foreach ($characters as $character)
                <div
                    class="w-full h-full  hover:bg-neutral-200 dark:hover:bg-neutral-700 rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-3 ">
                        <span
                            class="icon-[game-icons--helmet] text-neutral-500 dark:text-neutral-400 object-center object-cover rounded-full h-16 w-16"></span>
                    </div>
                    <div class="text-center text-xs">
                        <p class=" text-black dark:text-white font-bold mb-2">{{ $character->name }} -<span
                                class="text-pink-600"> Nvl {{ intval($character->experience / 100) }}</span>
                        </p>
                        <progress class="progress progress-success" value="{{ $character->experience % 100 }}"
                            max="100"></progress>
                        <progress class="progress progress-error" value="100" max="100"></progress>
                    </div>
                </div>
            @endforeach

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
