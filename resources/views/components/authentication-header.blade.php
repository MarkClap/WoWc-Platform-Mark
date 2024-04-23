<header class="shadow-md w-full">
    <nav class="h-16 xl:h-20 bg-neutral-800 p-4 flex items-center gap-2 justify-between">

        {{ $slot }}

        <section class="h-full w-auto xl:py-2 flex justify-center items-center">
            <x-authentication-card-logo />
        </section>

        <section class="flex items-center text-md gap-4">

            <div class="@empty($helper_text_button) hidden @endempty">
                <div class="text-neutral-300 dark:text-neutral-400 text-center hidden sm:block">
                    {{ $helper_text_button ?? '' }}
                </div>
            </div>

            {{ $button ?? '' }}
            
        </section>

    </nav>
</header>
