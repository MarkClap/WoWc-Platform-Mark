<li tabindex="0"
    class="text-white focus:text-neutral-400 collapse collapse-arrow rounded-md transition-all duration-500 cursor-pointer focus:cursor-default hover:bg-neutral-600 focus:bg-neutral-600">
    <div class="collapse-title">
        <div class="flex flex-row gap-2 items-center">
            <div class="text-xl grid place-items-center">
                <span class="{{ $icon ?? '' }}"></span>
            </div>
            <span>
                {{ $name }}
            </span>
        </div>
    </div>
    <ul class="text-white text-left collapse-content flex flex-col gap-2">
        {{ $items }}
    </ul>
</li>
