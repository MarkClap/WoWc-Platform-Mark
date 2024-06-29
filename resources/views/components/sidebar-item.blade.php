<li class="w-full">
    @php
        use Illuminate\Support\Str;

        $preparedHref = Str::startsWith($href, 'www.') ? 'http://' . $href : $href;

        $isRoute = Route::has($href);
        $isInternalRoute = Str::startsWith($href, '/');
        $isUrl = filter_var($preparedHref, FILTER_VALIDATE_URL) !== false;

        if ($isRoute) {
            $href = route($href);
        } elseif ($isInternalRoute) {
            $href = url($href);
        } elseif ($isUrl) {
            $href = $preparedHref;
        } else {
            $href = '';
        }
    @endphp

    <a href="{{ $href ?? '' }}"
        class="p-4 gap-2 w-full flex flex-row items-center rounded-md duration-300 transition-all cursor-pointer hover:bg-white hover:bg-opacity-[0.265]">
        <div class="text-xl grid place-items-center">
            <span class="{{ $icon ?? '' }}">

            </span>
        </div>
        <span>{{ $name }}</span>
    </a>
</li>
