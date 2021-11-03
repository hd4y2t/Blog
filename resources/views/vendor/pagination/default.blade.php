@if ($paginator->hasPages())
<nav>
 
    <ul class="page-pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li class="disabled" aria-disabled="true">
            <span aria-hidden="true"></span>
        </li>
        @else
        <li>
            <a class="next" href="{{ $paginator->previousPageUrl() }}" rel="prev"><span
                    class="fa fa-angle-left"></span></a>
        </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li aria-current="page"><span class="page-numbers current">{{ $page }}</span></li>
        @else
        <li><a class="page-numbers" href="{{ $url }}">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li>
            <a class="next" href="{{ $paginator->nextPageUrl() }}" rel="next"><span class="fa fa-angle-right"></span></>
        </li>
        @else
        <li class="disabled" aria-disabled="true">
            <span aria-hidden="true"></span>
        </li>
        @endif
    </ul>
</nav>
@endif