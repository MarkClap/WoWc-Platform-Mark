<div tabindex="0" class="text-black bg-white focus:text-neutral-400 collapse collapse-arrow rounded-md transition-all duration-300 cursor-pointer focus:cursor-default hover:bg-neutral-600 focus:bg-neutral-600">
    <div class="collapse-title">
        <div class="flex flex-row gap-2 items-center ">
            
            <p>{{ $title }} - <span>{{ $text }}</span></p>
                        
        </div>
    </div>
    <ul class="text-white text-left collapse-content flex flex-col gap-2">
        {{ $description }}
        {{ $button }}
        
    </ul>
</div>