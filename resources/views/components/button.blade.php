@props([
    'type',
    'link'
])

@if(isset($link))
    <a class="btn btn-lg mx-2 text-white fw-normal btn-primary" {{ $attributes }}>
        {{ $slot }}
    </a>
@elseif(isset($type))
    @switch($type)
        @case('danger')
            <button class="btn btn-lg mx-2 text-white fw-normal btn-{{ $type }}" >
                {{ $slot }}
            </button>
            @break
        @case('primary')
            <button class="btn btn-lg mx-2 text-white fw-normal btn-{{ $type }}" >
                {{ $slot }}
            </button>
            @break
        @case('success')
            <button class="btn btn-lg mx-2 text-white fw-normal btn-{{ $type }}" >
                {{ $slot }}
            </button>
            @break
        @case('warning')
            <button class="btn btn-lg mx-2 text-white fw-normal btn-{{ $type }}" >
                {{ $slot }}
            </button>
            @break
        @default
            <button class="btn btn-lg mx-2 text-white fw-normal btn-primary" >
                {{ $slot }}
            </button>
    @endswitch
@endif

