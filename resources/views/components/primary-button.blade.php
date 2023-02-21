@props(['contentClasses' => 'py-1 bg-white'])

@php
$classes = 'px-3 lg:px-6 py-1 lg:py-4 rounded-full border-solid border-2 backdrop-blur-[5px] ';
$classes .= $contentClasses;
@endphp
<button {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
