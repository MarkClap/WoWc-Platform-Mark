@props(['teacher', 'institution_courses', 'inscriptions', 'teachers_courses'])

<div class="flex justify-center flex-col w-full gap-3 bg-white my-20 mx-10 p-5 rounded-md">

    <section class=" py-1 flex justify-end">

        <button
            class="flex bg-yellow-500 py-1 px-3 gap-3 border-[3px] rounded-3xl items-center text-xl hover:border-yellow-600 text-white"
            onclick="my_modal_1.showModal()">
            <span class="icon-[fluent-mdl2--circle-addition-solid]"></span>
            <p class="font-bold">Unirse a una clase</p>
        </button>

        <dialog id="my_modal_1" class="modal">
            <div class="modal-box p-8 text-black bg-white border">
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

    @foreach ($inscriptions as $item)
        <p>{{ $item->course->name }}</p>
        <form action="{{ route('player', ['token' => $item->course->token]) }}" method="get">
            <input type="text" name="token" value="{{ $item->course->token }}">
            <button class="btn w-full bg-yellow-500 flex justify-center hover:bg-yellow-400 hover:border-red-800 hover:text-neutral-300" type="submit">Unirse</button>
        </form>
        
    @endforeach

    @if (count($teacher) > 0)
        <section class="text-black flex gap-3 flex-col flex-wrap">
            <div tabindex="0" class="collapse collapse-arrow border-base-300 bg-neutral-300 duration-300 rounded-md">
                <input type="checkbox" class="w-full" />
                <div class="collapse-title text-xl font-medium">Teacher</div>
                <div class="collapse-content flex flex-wrap flex-col gap-2 ">

                    @foreach ($teacher as $teachers)
                        <div tabindex="0" class="collapse collapse-arrow duration-500 border-base-300 bg-neutral-50">
                            <input type="checkbox" class="w-full" />
                            <div class="collapse-title text-xl font-medium">
                                <h2>{{ $teachers->institution->name }}
                                </h2>
                            </div>

                            <div class="collapse-content flex gap-3 flex-col flex-wrap">
                                <form class="w-full" method="GET"
                                    action="{{ route('master.create-courses', ['id' => $teachers->institution->id]) }}">
                                    @csrf
                                    <button class="btn">Crear Clase</button>
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

                                                    <form method="GET"
                                                        action="{{ route('invitation.course', ['token' => $institution_course->course->token]) }}"
                                                        class="cursor-pointer rounded-3xl border-[3px] py-1 px-2 hover:border-yellow-400 hover:bg-red-700">
                                                        <button type="submit"
                                                            class="mx-3 font-semibold text-xl">Invitar
                                                            alumno</button>
                                                    </form>
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

    @endif

</div>

</div>
