
<ul class="page__nav">
    <!-- Previous Page Link -->
    @if ($paginator->onFirstPage())
        <li class="page__item disabled"><span class="page__link ">Пред</span></li>
    @else
        <li class="page__item"><a class="page__link page__link--active" href="{{ $paginator->previousPageUrl() }}" rel="prev">Пред</a></li>
    @endif

    <!-- Pagination Elements -->
    @foreach ($elements as $element)
        <!-- "Three Dots" Separator -->
        @if (is_string($element))
            <li  class="disabled page__item"><span class="page__link" >{{ $element }}</span></li>
        @endif

        <!-- Array Of Links -->
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="page__item"><span class="page__link page__link--active">{{ $page }}</span></li>
                @else
                    <li class="page__item" ><a class="page__link" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    <!-- Next Page Link -->
    @if ($paginator->hasMorePages())
        <li class="page__item"><a class="page__link page__link--active" href="{{ $paginator->nextPageUrl() }}" rel="next">След</a></li>
    @else
        <li class="disabled page__item"><span class="page__link">След</span></li>
    @endif
</ul>