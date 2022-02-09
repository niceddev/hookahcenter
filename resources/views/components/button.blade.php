@props([
    'type',
    'link'
])

@if(isset($link))
    <a {{ $attributes->class(['btn btn-lg mx-2 text-white fw-normal'])->merge(['class' => 'btn-primary']) }}>
        {{ $slot }}
    </a>
@elseif(isset($type) && $type === 'danger')
    <button {{ $attributes->class(['btn btn-lg mx-2 text-white fw-normal'])->merge(['class' => 'btn-danger']) }}>
        {{ $slot }}
    </button>
@endif

