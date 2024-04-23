<a
    {{ $attributes->merge(['class' => 'inline-flex items-center gap-1 px-5 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 focus:ring-offset-neutral-800 transition ease-in-out duration-200']) }}>
    {{ $slot }}
</a>
