@props(['teacher', 'institution_courses'])

<div class="flex justify-center flex-col w-full my-20 mx-10 p-5 rounded-md  ">

    <section class=" flex px-4">

        <button
            class="btn btn-warning rounded-3xl text-xl text-white"
            onclick="my_modal_1.showModal()">
            <span class="icon-[fluent-mdl2--circle-addition-solid]"></span>
            <p class="font-bold">Unirse a una clase</p>
        </button>

        <dialog id="my_modal_1" class="modal">
            <div class="modal-box p-8 text-black bg-white ">
                <h3 class="font-bold text-2xl justify-center flex w-ful">Introduce el código del Alumno</h3>
                <div class="modal-action">
                    <form method="dialog" class="flex flex-col w-full justify-center items-center gap-4">
                        <div class="flex flex-col w-full gap-4">
                            <label for="code-union" class="text-lg font-semibold">Código de alumno: </label>
                            <input type="text" id="code-union" class="text-neutral-700 rounded-lg flex w-full"
                                placeholder="Introduce código">
                        </div>

                        <button
                            class="btn w-full bg-yellow-500 flex justify-center hover:bg-yellow-400 hover:border-red-800 hover:text-neutral-300">Confirmar</button>
                    </form>
                </div>
            </div>
        </dialog>
    </section>

    <section class="text-black flex gap-3 flex-col flex-wrap">
        <div tabindex="0" class="collapse collapse-arrow duration-300 rounded-md shadow-neutral-400 shadow-lg dark:shadow-neutral-800">
            <input type="checkbox" class="w-full" />
            <div class="collapse-title text-yellow-500">
               <p class="text-2xl font-semibold dark:text-white text-neutral-700"> Instituciones de Trabajo:</p>
            </div>
            <div class="collapse-content flex flex-wrap flex-col gap-2 ">

                @foreach ($teacher as $teachers)
                    <div tabindex="0" class="collapse collapse-arrow duration-500 bg-neutral-300 dark:bg-neutral-800">
                        <input type="checkbox" class="w-full " />

                        <div class="collapse-title">
                            <h2 class=" text-2xl font-bold text-yellow-500 underline">
                                {{ $teachers->institution->name }}
                            </h2>
                            
                        </div>

                        <div class="collapse-content flex gap-3 flex-col flex-wrap">
                            <form class="w-full" method="GET"
                                action="{{ route('master.create-courses', ['id' => $teachers->institution->id]) }}">
                                @csrf
                                <button class="btn btn-outline">Crear Clase</button>
                            </form>

                            @foreach ($institution_courses as $institution_course)
                                @if ($institution_course->teacher->institution->id == $teachers->institution->id)
                                    <div class=" rounded-lg">


                                        <div class="bg-red-600 p-4 flex justify-between rounded-t-lg items-center">

                                            <p class="text-xl font-semibold text-white">
                                                {{ $institution_course->course->name }}
                                            </p>

                                            <div class=" flex justify-between gap-3 items-center text-white">
                                                <div class="dropdown dropdown-bottom dropdown-end flex">
                                                    <span
                                                        class=" icon-[material-symbols--colors] text-4xl hover:bg-red-300"
                                                        tabindex="0" role="button"
                                                        onclick="my_modal_1.showModal()"></span>
                                                </div>

                                                <a href="/main/master"
                                                    class="cursor-pointer rounded-3xl border-[3px] py-1 px-2 hover:border-yellow-400 hover:bg-red-700">
                                                    <p class="mx-3 font-semibold text-xl">Jugar</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class="p-2 h-32 bg-neutral-100 flex justify-center items-center rounded-b-lg">
                                            <p class="text-lg text-neutral-400">
                                                {{ $institution_course->course->description }}
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </section>



</div>

</div>
