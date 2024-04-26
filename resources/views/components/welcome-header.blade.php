<header class="shadow-md w-full">
    @if (Route::has('login'))
        <nav class="h-16 xl:h-20 bg-neutral-800 p-4 flex items-center gap-2 justify-between">

            <section class="h-full w-auto xl:py-2 flex justify-center items-center">
                <x-authentication-card-logo />
            </section>

            <section class="flex items-center text-md gap-4">

                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        {{ __('Dashboard') }}
                    </a>
                @else
                    <x-anchor-button href="{{ route('login') }}">
                        <p>{{ __('Login') }}</p>
                    </x-anchor-button>

                    @if (Route::has('register'))
                        <x-anchor-button href="{{ route('register') }}">
                            <p>{{ __('Register') }}</p>
                        </x-anchor-button>
                    @endif
                @endauth
            </section>

        </nav>
    @endif

    {{ $slot }}
</header>
