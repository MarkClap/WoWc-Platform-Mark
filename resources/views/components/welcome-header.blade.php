<header class="shadow-md w-full">
    @if (Route::has('login'))
        <nav class="h-16 xl:h-20 bg-base-100 p-4 flex items-center gap-2 justify-between" data-theme="wowc_neutral">

            <section class="h-full w-auto xl:py-2 flex justify-center items-center">
                <x-authentication-card-logo />
            </section>


            <section class="flex items-center text-md gap-4 h-full">

                <label class="swap swap-rotate h-full xl:py-2">

                    <input type="checkbox" class="theme-controller hidden" />

                    <!-- sun icon -->
                    <span
                        class="icon-[material-symbols--sunny-outline] swap-off fill-current text-2xl flex justify-center items-center"></span>
                    <!-- moon icon -->
                    <span class="icon-[ph--moon] swap-on fill-current text-2xl flex justify-center items-center"></span>

                </label>

                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        {{ __('Dashboard') }}
                    </a>
                @else
                    <a href="{{ route('login') }}">
                        <p class="uppercase bold">{{ __('Login') }}</p>
                    </a>

                    @if (Route::has('register'))
                        <div class="w-0.5 self-stretch bg-primary"></div>
                        <a href="{{ route('register') }}">
                            <p class="uppercase bold">{{ __('Register') }}</p>
                        </a>
                    @endif
                @endauth
            </section>

        </nav>
    @endif

    {{ $slot }}
</header>
