<header class="shadow-md w-full">
    <nav class="h-16 xl:h-20 bg-base-100 py-4 px-8 flex items-center gap-2 justify-between" data-theme="wowc_neutral">

        <section class="h-full w-auto xl:py-2 flex justify-center items-center">
            <x-authentication-card-logo />
        </section>

        <section class="flex items-center text-md gap-4">

            @yield('navigation-content')

            @if (isset($button))
                @if (View::hasSection('helper_text_button'))
                    <p class="text-neutral-content text-center hidden sm:block">
                        @yield('helper_text_button')
                    </p>
                @endif
                {{ $button }}
            @endif

        </section>

    </nav>
    {{ $slot }}
</header>
