@if ($paginator->hasPages())
<div class="flex justify-end">
    <div class="btn-group">
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="btn btn-sm btn-active no-animation">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}" class="btn btn-sm btn-ghost bg-base-300 no-animation">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach
    </div>
</div>
@endif