<nav class="flex w-full bg-primary dark:bg-neutral-800 py-3 items-center gap-2 justify-between ">

    <div class="flex flex-row">
        <div id="menu-section" class="px-2 transition-all duration-500 flex items-center">
            <label class="swap swap-rotate text-xl text-white px-4">
                <input id="menu-button" type="checkbox" class="hidden" checked />
                <span class="icon-[ion--navicon-round] swap-on fill-white"></span>
                <span class="icon-[ion--close-round] swap-off fill-white"></span>
            </label>
        </div>

        <div class="h-12 duration-500" id="navigation-list">
            <div id="navigation-path" class="text-2xl breadcrumbs">
                <ul>
                    <li><a>2024-BDA-AB</a></li>
                    <li>Personaje</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="flex flex-row items-center justify-center text-3xl text-white gap-6 px-6 pt-2">
        <div class="dropdown dropdown-end justify-center">
            <span tabindex="0" role="button"
                class="icon-[ph--scroll-fill] transition-transform transform-growth hover:scale-110 duration-200 cursor-pointer"></span>
            <div class="bg-white dropdown-content z-[1] menu w-60 rounded-lg rounded-tr-none mt-6" tabindex="0">
                <div class="flex justify-center items-center">
                    <h1 class="text-2xl">Acciones de jugador</h1>
                </div>
            </div>
        </div>
        <div class="dropdown dropdown-end">
            <span tabindex="0" role="button"
                class="icon-[emojione-monotone--broken-heart] transition-transform transform-growth hover:scale-110 duration-200 cursor-pointer"></span>

            <div class="bg-white dropdown-content z-[1] menu w-60 rounded-lg rounded-tr-none mt-6" tabindex="0">
                <div class="flex justify-center items-center">
                    <h1 class="text-2xl">Daño inferido</h1>
                </div>
            </div>
        </div>
    </section>
    
</nav>
