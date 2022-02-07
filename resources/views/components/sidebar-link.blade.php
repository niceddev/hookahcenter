@props([
    'activee'
])

@php
    $class = $activee ? 'nav-link text-white active' : 'nav-link text-white';
@endphp

<li class="nav-item">
    <a {{ $attributes->class(['fs-6'])->merge(['class' => $class]) }} >
        {{ $slot }}
    </a>
</li>
