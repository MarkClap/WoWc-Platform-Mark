<header class="shadow-md w-full">
    <nav class="bg-neutral-800 p-4 flex items-center gap-2 justify-between">
        <section class="w-12 flex justify-center items-center">
            <x-authentication-card-logo />
        </section>
        <section class="flex items-center text-md gap-4">
            <p>XD</p>
            <div class="@empty($helper_text_button) hidden @endempty">
                <div class="text-neutral-300 dark:text-neutral-400 text-center hidden sm:block">
                    {{ $helper_text_button ?? '' }}
                </div>
            </div>
            <a href="{{ $routeButton ?? '#' }}"
                class="inline-flex items-center px-5 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 focus:ring-offset-neutral-800 transition ease-in-out duration-200">
                {{ $content_button ?? '' }}
            </a>
        </section>
    </nav>
</header>
