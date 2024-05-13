<div class="media-page h-full main-container  grid grid-cols-2 gap-[15px]">



    @foreach ($videos as $video)
    <div class="video h-[50vh] relative background" style="background-image:url('/images/home/{{$video->image_path}}.jpg');">

        <div class="bg-black opacity-[0.4] h-full w-full absolute top-0 left-0">
        </div>

        <div class="absolute w-full h-full top-0 left-0 justify-center items-center flex">
            <img src="/svgs/home/play-video.svg" alt="">
        </div>
        <div class="text-video absolute ml-[10px] mb-[20px] bottom-[0%] left-0 min-w-[220px] h-[28px] bg-[#EBEBEB] flex justify-center items-center ">

            <p class="font font-medium font-12px">
                {{$video->title}}
            </p>

        </div>
    </div>
    @endforeach



</div>




<!-- {{ $videos->onEachSide(2)->links() }} -->

<!-- {{ $videos->links() }} -->


<div class="pt-[60px] flex justify-center items-center">

    @if ($videos->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation">
        <ul class="pagination flex space-x-2">
            {{-- Previous Page Link --}}
            @if ($videos->onFirstPage())
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="page-link" aria-hidden="true">&lsaquo;</span>
            </li>
            @else
            <li class="page-item">
                <a class="page-link" href="{{ $videos->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
            </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($videos->getUrlRange(1, $videos->lastPage()) as $page => $url)
            <li class="page-item">
                <a href="{{ $url }}">
                    <div class="flex items-center justify-center w-[22px] h-[22px] font font-12px font-medium {{ $page == $videos->currentPage() ? 'bg-[#135D66] text-white rounded-full' : '' }}">{{ $page }}</div>
                </a>
            </li>
            @endforeach

            {{-- Next Page Link --}}
            @if ($videos->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $videos->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
            </li>
            @else
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="page-link" aria-hidden="true">&rsaquo;</span>
            </li>
            @endif
        </ul>
    </nav>
    @endif


</div>