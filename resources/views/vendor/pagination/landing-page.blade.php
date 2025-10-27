@if ($paginator->hasPages())
    <div class="mt-16 flex justify-center items-center gap-2">
        @if(!$paginator->onFirstPage())
            <a
                href="{{ $paginator->previousPageUrl() }}"
                class="px-4 py-2 rounded-2xl border-2 border-sage/20 text-sage hover:bg-sage hover:text-cream transition-colors">
                Previous
            </a>
        @endif

        @foreach($elements as $element)
            @foreach($element as $page => $url)
                @if ($page == $paginator->currentPage())
                        <a class="px-4 py-2 rounded-2xl bg-sage text-cream font-medium">{{ $page }}</a>
                    @else
                        <a
                            href="{{ $url }}"
                            class="px-4 py-2 rounded-2xl border-2 border-sage/20 text-sage hover:bg-sage hover:text-cream transition-colors">
                            {{ $page }}
                        </a>
                    @endif
            @endforeach
        @endforeach

        @if($paginator->hasMorePages())
            <a
                href="{{ $paginator->nextPageUrl() }}"
                class="px-4 py-2 rounded-2xl border-2 border-sage/20 text-sage hover:bg-sage hover:text-cream transition-colors">
                Next
            </a>
        @endif
    </div>
@endif
