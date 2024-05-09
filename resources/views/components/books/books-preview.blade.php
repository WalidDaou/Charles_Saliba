<div class="h-full main-container  grid gap-[0px]" style="grid-template-columns: repeat(3, minmax(0, 1fr));">



    @foreach ($books as $book)

    <div onclick="window.location.href='/info/{{$book->id}}'" class="h-[420px] w-[400px] relative cursor-pointer">
        <div class="absolute top-0 left-0">
            <img class="h-[340px]" src="/svgs/home/{{$book->img}}.svg" alt="">
        </div>
        <div class="absolute top-[50%] left-[30%] for-rotation ">

            <div class="relative for-rotation cursor-pointer">
                <div class="img">
                    <img class="h-[200px]" src="/svgs/home/second-cross.svg" alt="">
                </div>
                <div class="absolute top-[30%] left-[40%]">
                    <p class="font font-bold font-20px">Positive Influence</p>
                </div>
            </div>
        </div>
    </div>

    @endforeach



</div>




<!-- {{ $books->onEachSide(2)->links() }} -->

<!-- {{ $books->links() }} -->


<div class="pt-[60px] flex justify-center items-center">

    @if ($books->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation">
        <ul class="pagination flex space-x-2">

            {{-- Pagination Elements --}}
            @foreach ($books->getUrlRange(1, $books->lastPage()) as $page => $url)
            <li class="page-item">
                <a href="{{ $url }}">
                    <div class="flex items-center justify-center w-[22px] h-[22px] font font-12px font-medium {{ $page == $books->currentPage() ? 'bg-[#135D66] text-white rounded-full' : '' }}">{{ $page }}</div>
                </a>
            </li>
            @endforeach

        </ul>
    </nav>
    @endif


</div>