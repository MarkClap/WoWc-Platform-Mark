<li tabindex="0" id="{{ $id }}"
    class="text-white collapse collapse-arrow cursor-default rounded-md transition-all duration-500">
    <input type="checkbox" class="w-full h-full rounded-md" />
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
