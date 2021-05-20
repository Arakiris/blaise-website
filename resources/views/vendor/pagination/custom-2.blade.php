@if ($paginator->hasPages())
    {{-- Previous Page Link --}}
    @if (!$paginator->onFirstPage())
        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="album_list_page"><<</a>
    @endif

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="album_list_page">>></a>
    @endif
@endif
