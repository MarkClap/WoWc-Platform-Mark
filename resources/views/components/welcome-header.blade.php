<header class="shadow-md w-full">
    <nav class="h-16 xl:h-20 w-full text-white bg-neutral-900 flex justify-center items-center">
        <p>¿Deseas unirte como una institución?  <a class="link link-accent font-semibold">¡Contáctanos!</a></p>
        
    </nav>
    @if (Route::has('login'))
        <nav class="h-16 xl:h-20 bg-base-100 py-4 px-8 flex items-center gap-2 justify-between" data-theme="wowc_neutral">

            <section class="h-full w-auto xl:py-2 flex justify-center items-center">
                <x-authentication-card-logo />
            </section>

            <section class="flex items-center text-primary-content text-xl gap-4 h-full font-extrabold">

                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        {{ __('Dashboard') }}
                    </a>
                @else
                    <a href="{{ route('login') }}" class="uppercase relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-full after:origin-bottom-right after:scale-x-0 after:bg-primary-content after:transition-transform after:duration-300 after:ease-[cubic-bezier(0.65_0.05_0.36_1)] hover:after:origin-bottom-left hover:after:scale-x-100">
                            <p>{{ __('Login') }}</p>
                    </a>

                    @if (Route::has('register'))
                        <div class="w-0.5 self-stretch bg-primary"></div>
                        <a href="/type-users" class="uppercase relative after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-full after:origin-bottom-right after:scale-x-0 after:bg-primary-content after:transition-transform after:duration-300 after:ease-[cubic-bezier(0.65_0.05_0.36_1)] hover:after:origin-bottom-left hover:after:scale-x-100">
                            <p>{{ __('Register') }}</p>
                        </a>
                    @endif
                @endauth
            </section>

        </nav>
    @endif

    {{ $slot }}

</header>
