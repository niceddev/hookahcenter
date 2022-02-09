@props([
    'active'
])

@php
    $class = $active ? 'active' : null;
@endphp

<li class="nav-item">
    <a {{ $attributes->class(['nav-link text-white'])->merge(['class' => $class]) }} >
        {{ $slot }}
    </a>
</li>
