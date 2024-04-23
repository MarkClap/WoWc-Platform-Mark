<header class="shadow-md w-full">
    <nav class="bg-neutral-800 p-4 flex items-center gap-2 justify-between">
        <div class="w-12 flex justify-center items-center">
            <x-authentication-card-logo />
        </div>
        <div class="flex items-center text-md ">
            <div class="text-neutral-300 dark:text-neutral-400 px-4 text-center hidden sm:block">{{ $helper_text_button }}</div>
            {{ $button }}
        </div>
    </nav>
</header>