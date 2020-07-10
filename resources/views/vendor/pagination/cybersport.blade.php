@if ($paginator->hasPages())
    <div class="col-lg-12 col-md-12">
        <div class="pagination-area text-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a class="prev page-numbers" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <i class="bx bx-chevrons-left"></i>
                </a>
            @else

                    <a class="page-numbers" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>

            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="page-numbers">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="page-numbers current">{{ $page }}</span>
                        @else
                            <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())

                    <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="bx bx-chevrons-right"></i></a>

            @else
                <li class="next page-numbers" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="next page-numbers" aria-hidden="true"><i class="bx bx-chevrons-right"></i></span>
                </li>
            @endif
        </div>
    </div>
@endif
