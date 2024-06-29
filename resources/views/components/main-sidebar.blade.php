<aside id="menu"
    class="z-20 text-white absolute bottom-0 left-0 duration-500 p-2 w-52 h-full max-h-full text-center bg-neutral-700 shadow">
    <div class="text-lg flex flex-row justify-between h-full w-full max-h-full max-w-full ">
        <ul class="flex flex-col gap-2 h-full w-full max-h-full max-w-full justify-between board-sidebar-content">
            {{ $slot }}
        </ul>
    </div>
</aside>
