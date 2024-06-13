<div tabindex="0" class="text-black bg-slate-100 focus:text-yellow-500 collapse collapse-arrow rounded-lg transition-all duration-300 cursor-pointer focus:cursor-default hover:bg-neutral-200 focus:bg-neutral-700  border-2 border-gray-900">
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