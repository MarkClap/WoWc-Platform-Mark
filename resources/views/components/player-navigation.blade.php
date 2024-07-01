<nav class="flex w-full bg-neutral-800  dark:bg-neutral-800 py-3 items-center gap-2 justify-between ">

    <div class="flex flex-row">
        <div id="menu-section" class="px-2 transition-all duration-500 flex items-center opacity-0">
            <label class="swap swap-rotate text-xl text-white px-4">
                <input id="menu-button" type="checkbox" class="hidden" checked />
                <span class="icon-[ion--navicon-round] swap-on fill-white"></span>
                <span class="icon-[ion--close-round] swap-off fill-white"></span>
            </label>
        </div>

        <div class="h-12 opacity-0 duration-500" id="navigation-list">
            <div id="navigation-path" class="text-2xl breadcrumbs text-white">
                <ul>
                    <li><a href="{{ route("player") }}">2024-BDA-AB</a></li>
                    <li>{{ $name ?? 'Undefined' }}</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="flex flex-row items-center justify-center text-3xl text-white gap-6 px-6 pt-2">
        <div class="dropdown dropdown-end justify-center">
            <span tabindex="0" role="button"
                class="icon-[ph--scroll-fill] transition-transform transform-growth hover:scale-110 duration-200 cursor-pointer"></span>
            <div class="bg-neutral-700 dark:bg-white dark:text-black font-bold dropdown-content z-[1] menu w-[20rem] rounded-lg rounded-tr-none mt-6 max-h-[40rem] overflow-x-auto" tabindex="0">
                <div class="w-full flex flex-col border-2 border-black pb-1 rounded-md">
                    {{$slot}}

                </div>
            </div>
        </div>
        <div class="dropdown dropdown-end">
            <span tabindex="0" role="button"
                class="icon-[emojione-monotone--broken-heart] transition-transform transform-growth hover:scale-110 duration-font-bold00 cursor-pointer"></span>

            <div class="bg-neutral-700 dark:bg-white dark:text-black font-bold dropdown-content z-[1] menu w-60 rounded-lg rounded-tr-none mt-6" tabindex="0">
                <div class="flex justify-center items-center">
                    <h1 class="text-xl">Daño inferido</h1>
                </div>
            </div>
        </div>
    </section>
    
</nav>
