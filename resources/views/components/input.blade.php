@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-neutral-300 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300 focus:border-yellow-500 dark:focus:border-yellow-600 focus:ring-yellow-500 dark:focus:ring-yellow-600 rounded-md shadow-sm']) !!}>
