<li class="w-full">
    <li class="w-full">
        @php
            use Illuminate\Support\Str;
            use Illuminate\Support\Facades\Route;

            $token = $token ?? null;
    
            $preparedHref = Str::startsWith($href, 'www.') ? 'http://' . $href : $href;
    
            $isRoute = Route::has($href);
            $isInternalRoute = Str::startsWith($href, '/');
            $isUrl = filter_var($preparedHref, FILTER_VALIDATE_URL) !== false;
    
            if ($isRoute) {
                // Verifica si la ruta necesita un token y lo incluye si es necesario
                try {
                    $href = route($href, ['token' => $token]);
                } catch (\InvalidArgumentException $e) {
                    // Si la ruta no requiere un token, intenta generarla sin parámetros
                    $href = route($href);
                }
            } elseif ($isInternalRoute) {
                $href = url($href);
            } elseif ($isUrl) {
                $href = $preparedHref;
            } else {
                $href = '';
            }
        @endphp
    
        <a href="{{ $href ?? '' }}">

    <a href="{{ $href ?? '' }}"
        class="p-4 gap-2 w-full flex flex-row items-center rounded-md duration-300 transition-all cursor-pointer hover:bg-white hover:bg-opacity-[0.265]">
        <div class="text-xl grid place-items-center">
            <span class="{{ $icon ?? '' }}">

            </span>
        </div>
        <span>{{ $name }}</span>
    </a>
</li>
