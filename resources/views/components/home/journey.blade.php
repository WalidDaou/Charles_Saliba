<div class="w-screen h-[auto] bg-[#EDEDED] ">


    <div class="w-full main-container pt-[45px] flex justify-between">
        <p class="font font-bold font-40px">My Journey</p>
        <div class="flex gap-[20px]">
            <button class=""><img class="h-[35px] w-[35px]" src="/svgs/home/left.svg" alt=""></button>
            <button class=""><img class="h-[35px] w-[35px]" src="/svgs/home/right.svg" alt=""></button>
        </div>
    </div>


    <div id="bigContainer" class="relative h-[550px] mt-[80px]">


        <div id="smallContainer" class="flex flex-row w-screen overflow-x-scroll absolute top-0 left-0 z-[10]">


            @foreach($journey as $index => $item)
            @if($index % 2 == 0)
            <div class="main-container-left flex flex-row gap-[20px] h-[200px] justify-start items-start">
                <div class="flex flex-col gap-[5px] justify-center items-center h-full">
                    <div class="w-[25px] h-[25px] flex justify-center items-center relative">
                        <img class="w-full h-full" src="/svgs/home/journay-white.svg" alt="">
                        <div class="w-full h-full justify-center items-center flex absolute top-0 left-0">
                            <img class="w-[8px]" src="/svgs/home/journey-green.svg" alt="">
                        </div>
                    </div>
                    <div class="w-[1px] h-full border-[0.8px] border-black opacity-[0.2]">
                    </div>
                    <div>
                        <img class="w-[12px]" src="/svgs/home/journey-green.svg" alt="">
                    </div>
                </div>
                <div class="flex flex-col gap-[15px] h-full">
                    <p class="font font-semibold font-18px text-[#135D66]">
                        {{ $item->date }}
                    </p>
                    <p class="font font-normal font-16px min-w-[200px] max-w-[250px]">
                        {{ $item->content }}
                    </p>
                </div>

            </div>

            @else
            <div class="main-container-right flex flex-row gap-[20px] h-[350px] mt-[190px] justify-start items-start">
                <div class="flex flex-col gap-[5px] justify-center items-center h-[200px]">

                    <div>
                        <img class="w-[12px]" src="/svgs/home/journey-green.svg" alt="">
                    </div>
                    <div class="w-[1px] h-full border-[0.8px] border-black opacity-[0.2]">
                    </div>
                    <div class="w-[25px] h-[25px] flex justify-center items-center relative">
                        <img class="w-full h-full" src="/svgs/home/journay-white.svg" alt="">
                        <div class="w-full h-full justify-center items-center flex absolute top-0 left-0">
                            <img class="w-[8px]" src="/svgs/home/journey-green.svg" alt="">
                        </div>
                    </div>

                </div>
                <div class="flex flex-col gap-[15px] h-full pt-[180px]">
                    <p class="font font-semibold font-18px text-[red]">
                        {{ $item->date }}
                    </p>
                    <p class="font font-normal font-16px min-w-[200px] max-w-[250px]">
                        {{ $item->content }}
                    </p>
                </div>

            </div>
            @endif


            @endforeach


        </div>

        <div class="w-full absolute top-[195px] left-0 z-[8] h-[1px] border-dashed border-t-[2px] border-black opacity-[0.4]" style="border-spacing: 10px;"></div>

    </div>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the smallContainer element
        var smallContainer = document.getElementById('smallContainer');

        // Get its height
        var smallContainerHeight = smallContainer.offsetHeight;

        // Set the same height to the bigContainer element
        var bigContainer = document.getElementById('bigContainer');
        bigContainer.style.height = smallContainerHeight + 'px';
    });
</script>