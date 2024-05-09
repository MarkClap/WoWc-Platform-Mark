<div tabindex="0" class="text-white bg-orange-500 focus:text-neutral-400 collapse collapse-arrow rounded-md transition-all duration-300 cursor-pointer focus:cursor-default hover:bg-neutral-600 focus:bg-neutral-600">
    <div class="collapse-title">
        <div class="flex flex-row gap-2 items-center">
            <div class="text-xl grid place-items-center">{{ $icon ?? '' }}</div>
            <p>{{ $name }}</p>
        </div>
    </div>
    <ul class="text-white text-left collapse-content flex flex-col gap-2">
        {{ $items }}
    </ul>
</div>