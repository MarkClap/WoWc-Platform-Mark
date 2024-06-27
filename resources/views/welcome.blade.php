<x-guest-layout>
    <div class="max-h-screen overflow-hidden relative">

        <x-welcome-header />

        <div class="w-full">
            <div class="absolute bottom-0 right-36 p-8 rounded-t-3xl bg-accent flex flex-col gap-4">
                <h1 class="text-7xl font-extrabold">World of Warclass</h1>
                <p class="text-3xl font-medium">Transformando tareas en verdadero aprendizaje</p>
            </div>

            <img src="{{ asset('/img/img1.png') }}"
                class="min-h-96 w-screen h-full" alt="Teacher and student smiling at each other in the classroom"
                loading="auto">
        </div>

    </div>

    <section class="bg-base-100 p-32 mx-auto flex flex-col gap-16 w-full">

        <article class="flex flex-col-reverse lg:flex-row gap-x-0 gap-y-8 lg:gap-x-16 lg:gap-y-0 text-3xl items-center">
            <div class="flex-1 flex flex-col gap-8">
                <section class="flex flex-col gap-4">
                    <h2 class="text-5xl font-bold">¿Qué es "World of Warclass"?</h2>
                    <p>Es una plataforma educativa innovadora que motiva a los estudiantes mediante
                        misiones temáticas,
                        recompensas y competencias, fomentando un clima escolar positivo.</p>
                </section>

                <section class="flex flex-col gap-4">
                    <h2 class="text-5xl font-bold">Nuestros Objetivos</h2>
                    <ul>
                        <li>Conectar a los alumnos a través de principios recreativos para incentivar el aprendizaje.
                        </li>
                        <li>Facilitar la administración del proceso educativo y maximizando su eficiencia.</li>
                    </ul>
                </section>
            </div>
            <div class="flex-1">
                <img src="https://cdn.discordapp.com/attachments/1224189197406044311/1239651035543240714/Home-WC.png?ex=6643b27e&is=664260fe&hm=de9dda3ed995cfad5bcd80821f9be167fc7cdf7120e8ef80870771907d19670e&"
                    alt="">
            </div>
        </article>
    </section>

    <section class="flex flex-col gap-4 bg-accent p-32 mx-auto w-full text-3xl text-center">
        <h1 class="text-5xl font-bold">Nuestra misión</h1>
        <p class="">Mejorar la experiencia educativa mediante la integración de elementos de gamificación,
            aventuras de
            aprendizaje personalizadas y aprendizaje socioemocional en el entorno del aula, lo que en última instancia
            conduce a estudiantes más felices y comprometidos.</p>
    </section>

    <section class="flex flex-col gap-16 items-center bg-base-100 w-full p-32 mx-auto text-3xl text-center">
        <div class="flex flex-col gap-4">
            <h1 class="text-5xl font-bold text-center">Tenemos esto para ti</h1>
            <p class="text-center">Sé parte de la nueva comunidad educativa del país y accede a todos los servicios
                digitales que te
                ofrecemos en nuestra plataforma online.</p>
        </div>

        <article id="image-carousel" class="splide card w-[40rem] bg-accent shadow-xl">
            <div class="splide__track card-body">
                <ul class="splide__list">
                    <li class="splide__slide px-32 flex flex-col gap-4">
                        <div class="bg-red-500 w-full h-40">Image</div>
                        <p class="">
                            Conectamos a los alumnos a través de principios recreativos para incentivar el aprendizaje y
                            lograr desarrollar su habilidad cognitiva.
                        </p>
                    </li>


                    <li class="splide__slide px-32 flex flex-col gap-4">
                        <div class="bg-red-500 w-full h-40">Image</div>
                        <div>
                            Los estudiantes acceden a una metodología de aprendizaje competitivo junto al sistema de
                            apoyo de múltiples niveles.
                        </div>
                    </li>
                </ul>
            </div>
            </div>

    </section>

    <footer class="footer p-8 text-base-content mt-auto" data-theme="wowc_neutral">
        <nav>
            <h6 class="footer-title">Team</h6>
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
        </nav>
        <nav>
            <h6 class="footer-title">Useful Links</h6>
            <a class="link link-hover" href="https://github.com/World-of-Warclass" target="_blank">Github</a>
            <a class="link link-hover">Special Thanks</a>

        </nav>
        <nav>
            <h6 class="footer-title">Social</h6>
            <div class="grid grid-flow-col gap-6 place-items-center text-2xl">
                <a href="https://github.com/World-of-Warclass" target="_blank"
                    class="transition-transform transform-growth hover:scale-110 duration-200"><span
                        class="icon-[ri--github-fill]"></span></a>
                <a href="#" class="transition-transform transform-growth hover:scale-110 duration-200"><span
                        class="icon-[ri--facebook-circle-fill]"></span></a>
                <a href="#" class="transition-transform transform-growth hover:scale-110 duration-200"><span
                        class="icon-[ri--twitter-x-line]"></span></a>
                <a href="#" class="transition-transform transform-growth hover:scale-110 duration-200"><span
                        class="icon-[ri--youtube-fill]"></span></a>
                <a href="#" class="transition-transform transform-growth hover:scale-110 duration-200"><span
                        class="icon-[ri--soundcloud-line]"></span></a>
            </div>
        </nav>
    </footer>

    @push('scripts')
        @vite('resources/js/welcome.js')
    @endpush
</x-guest-layout>
