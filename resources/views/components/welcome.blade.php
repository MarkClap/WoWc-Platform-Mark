@props(['teacher', 'institution_courses', 'inscriptions', 'teachers_courses'])

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 space-y-10">

    <!-- Header & Actions -->
    <div class="flex flex-col md:flex-row justify-between items-center gap-4">
        <div>
            <h1 class="text-3xl font-bold text-gray-800 dark:text-white">Dashboard</h1>
            <p class="text-gray-500 dark:text-gray-400">Bienvenido a tu panel de control</p>
        </div>
        
        <button onclick="my_modal_join_class.showModal()" class="btn bg-yellow-500 hover:bg-yellow-600 text-white border-none gap-2 shadow-lg hover:shadow-yellow-500/30 transition-all">
            <span class="icon-[fluent--add-circle-24-filled] w-6 h-6"></span>
            Unirse a una Clase
        </button>
    </div>

    <!-- Student Section: Enrolled Courses -->
    <section>
        <h2 class="text-xl font-bold text-gray-800 dark:text-white mb-6 flex items-center gap-2">
            <span class="icon-[fluent--hat-graduation-24-filled] text-blue-500"></span>
            Mis Cursos (Estudiante)
        </h2>

        @if($inscriptions->isEmpty())
            <div class="bg-white dark:bg-neutral-800 rounded-xl p-8 text-center border-2 border-dashed border-gray-300 dark:border-neutral-700">
                <span class="icon-[fluent--book-question-mark-24-regular] w-12 h-12 text-gray-400 mb-2 block mx-auto"></span>
                <p class="text-gray-500 dark:text-gray-400">No estás inscrito en ningún curso.</p>
                <button onclick="my_modal_join_class.showModal()" class="text-yellow-600 hover:underline mt-2 font-medium">¡Únete a uno ahora!</button>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($inscriptions as $item)
                    @if($item->course)
                    <div class="bg-white dark:bg-neutral-800 rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 border border-gray-100 dark:border-neutral-700 flex flex-col h-full">
                        <div class="h-2 bg-gradient-to-r from-blue-500 to-cyan-400"></div>
                        <div class="p-6 flex-1 flex flex-col">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-2">{{ $item->course->name }}</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 line-clamp-3 mb-4 flex-1">
                                {{ $item->course->description ?? 'Sin descripción disponible.' }}
                            </p>
                            
                            <form action="{{ route('player', ['token' => $item->course->token]) }}" method="get" class="mt-auto">
                                <button type="submit" class="btn btn-outline btn-info w-full gap-2 group">
                                    Ingresar al Curso
                                    <span class="icon-[fluent--arrow-right-24-filled] group-hover:translate-x-1 transition-transform"></span>
                                </button>
                            </form>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        @endif
    </section>

    <!-- Teacher Section -->
    @if (count($teacher) > 0)
    <section class="pt-8 border-t border-gray-200 dark:border-neutral-700">
        <h2 class="text-xl font-bold text-gray-800 dark:text-white mb-6 flex items-center gap-2">
            <span class="icon-[fluent--book-24-filled] text-green-500"></span>
            Panel de Profesor
        </h2>

        <div class="space-y-6">
            @foreach ($teacher as $teach)
            <div class="collapse collapse-arrow bg-white dark:bg-neutral-800 border border-gray-200 dark:border-neutral-700 rounded-xl shadow-sm">
                <input type="checkbox" checked /> 
                <div class="collapse-title text-lg font-medium flex items-center gap-3">
                    <span class="icon-[fluent--building-24-filled] text-gray-400"></span>
                    {{ $teach->institution->name }}
                </div>
                
                <div class="collapse-content">
                    <div class="p-4 pt-0">
                        <div class="flex justify-between items-center mb-4">
                            <h4 class="font-semibold text-gray-600 dark:text-gray-300">Cursos Gestionados</h4>
                            <form method="GET" action="{{ route('master.create-courses', ['id' => $teach->institution->id]) }}">
                                @csrf
                                <button class="btn btn-sm btn-ghost text-green-600 hover:bg-green-50 gap-2">
                                    <span class="icon-[fluent--add-24-filled]"></span> Crear Curso
                                </button>
                            </form>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach ($institution_courses as $inst_course)
                                @if ($inst_course->teacher->institution->id == $teach->institution->id)
                                <div class="border border-gray-200 dark:border-neutral-600 rounded-lg p-4 hover:border-green-300 transition-colors bg-gray-50 dark:bg-neutral-700/30">
                                    <div class="flex justify-between items-start mb-2">
                                        <h5 class="font-bold text-gray-800 dark:text-white">{{ $inst_course->course->name }}</h5>
                                        <span class="badge badge-success text-white text-xs">Activo</span>
                                    </div>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 mb-4 line-clamp-2">
                                        {{ $inst_course->course->description }}
                                    </p>
                                    
                                    <div class="flex gap-2">
                                        <form method="GET" action="{{ route('invitation.course', ['token' => $inst_course->course->token]) }}" class="flex-1">
                                            <button type="submit" class="btn btn-xs btn-outline w-full gap-1">
                                                <span class="icon-[fluent--share-24-regular]"></span> Invitar
                                            </button>
                                        </form>
                                        {{-- Add Link to Course Management if exists --}}
                                        <!-- <a href="#" class="btn btn-xs btn-primary">Gestionar</a> -->
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @endif

</div>

<!-- Modal: Join Class -->
<dialog id="my_modal_join_class" class="modal">
    <div class="modal-box bg-white dark:bg-neutral-800 text-gray-800 dark:text-white">
        <h3 class="font-bold text-xl mb-4 flex items-center gap-2">
            <span class="icon-[fluent--ticket-24-filled] text-yellow-500"></span>
            Unirse a una Clase
        </h3>
        
        <form action="{{ route('validation.inscription') }}" method="POST" class="space-y-4">
            @csrf
            
            <div>
                <label for="code-union" class="label">
                    <span class="label-text font-medium text-gray-700 dark:text-gray-300">Código de Invitación</span>
                </label>
                <input type="text" name="code" id="code-union" 
                    class="input input-bordered w-full focus:input-warning bg-gray-50 dark:bg-neutral-900" 
                    placeholder="Ej: ABC-123-XYZ" required>
                <p class="text-xs text-gray-500 mt-1">Pide el código a tu profesor.</p>
            </div>

            <div class="modal-action">
                <button type="button" onclick="my_modal_join_class.close()" class="btn btn-ghost">Cancelar</button>
                <button type="submit" class="btn bg-yellow-500 hover:bg-yellow-600 text-white border-none">
                    Unirse
                </button>
            </div>
        </form>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>
