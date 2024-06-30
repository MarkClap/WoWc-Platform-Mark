<nav class="flex w-full bg-primary dark:bg-neutral-800 py-3 items-center gap-2 justify-between ">

    <div class="flex flex-row">
        <div id="menu-section" class="px-2 transition-all duration-500 flex items-center opacity-0">
            <label class="swap swap-rotate text-xl text-white px-4">
                <input id="menu-button" type="checkbox" class="hidden" checked />
                <span class="icon-[ion--navicon-round] swap-on fill-white"></span>
                <span class="icon-[ion--close-round] swap-off fill-white"></span>
            </label>
        </div>

        <div class="h-12 opacity-0 duration-500" id="navigation-list">
            <div id="navigation-path" class="text-2xl breadcrumbs">
                <ul>
                    <li><a href="{{ route("master") }}">2024-BDA-AB</a></li>
                    <li>{{ $name ?? 'Undefined' }}</li>
                </ul>
            </div>
        </div>
    </div>

    
    
</nav>
