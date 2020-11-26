@props(['active'])

@php
$classes = ($active ?? false)
            ? 'w-full py-3 pl-3 flex items-center text-sm font-medium leading-5 text-gray-100 focus:outline-none bg-gray-800 transition duration-150 ease-in-out'
            : 'w-full py-3 pl-3 flex items-center text-sm font-medium leading-5 text-gray-400 hover:text-gray-100 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
