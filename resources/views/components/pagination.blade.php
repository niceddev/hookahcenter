@if($paginator->hasPages())
<nav class="my-5">
    <ul class="pagination justify-content-end">
        @if(!$paginator->onFirstPage())
            <li class="page-item">
                <a class="page-link" href="{{$paginator->previousPageUrl()}}">Назад</a>
            </li>
        @endif
        @for($link = 1; $link <= $paginator->lastPage(); $link++)
            <li class="page-item {{ $link === $paginator->currentPage() ? 'active' : null }}">
                <a class="page-link" href="{{ $paginator->url($link) }}">{{ $link }}</a>
            </li>
        @endfor
        @if($paginator->nextPageUrl())
            <li class="page-item">
                <a class="page-link" href="{{$paginator->nextPageUrl()}}">Вперед</a>
            </li>
        @endif
    </ul>
</nav>
@endif
