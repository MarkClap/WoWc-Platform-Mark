<header class="shadow-md w-full">
    <nav class="bg-neutral-800 p-4 flex items-center gap-2 justify-between">
        {{ $logo }}
        <div class="flex items-center text-md ">
            <div class="text-neutral-300 dark:text-neutral-400 px-4 text-center hidden sm:block">{{ $helper_text_button }}</div>
            <button
                class="inline-flex items-center px-5 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 focus:ring-offset-neutral-800 transition ease-in-out duration-200">
                {{ $content_button }}
            </button>
        </div>
    </nav>
</header>