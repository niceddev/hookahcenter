@if(isset($link))
    <a class="btn btn-lg mx-2 text-white fw-normal btn-primary" {{ $attributes }}>
        {{ $slot }}
    </a>
@elseif(isset($type))
    <button {{ $attributes->class('btn btn-lg mx-2 text-white fw-normal')->merge(['class' => 'btn-'.$type]) }}>
        {{ $slot }}
    </button>
@endif

