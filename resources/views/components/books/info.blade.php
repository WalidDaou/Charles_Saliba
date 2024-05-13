<div class="infos-book flex flex-row  gap-[60px] w-screen main-container h-[620px] pt-[50px]">

    <div class="the-left w-[50%] h-full flex justify-center pt-[60px] ">
        <img class="h-[450px]" src="/svgs/home/{{$book->img}}.svg" alt="">
    </div>

    <div class="the-right w-[50%] h-full fex flex-col">

        <div>
            <p class="font font-40px font-bold ">Positive Influence</p>
        </div>
        <div class="flex flex-row pt-[30px]">
            <div class="flex flex-col">
                <div class="flex flow-row gap-[15px] items-center text-center">
                    <div class="w-[100px] h-[3px] border-t-[3px] border-[#135D66]"></div>
                    <p class="font font-semibold font-16px">Subject</p>
                </div>
                <p class="font font-12px opacity-[0.6] font-normal pl-[115px]">{{$book->subject}}</p>
            </div>
        </div>
        
        <div class="flex flex-row pt-[30px]">
            <div class="flex flex-col">
                <div class="flex flow-row gap-[15px] items-center text-center">
                    <div class="w-[100px] h-[3px] border-t-[3px] border-[#135D66]"></div>
                    <p class="font font-semibold font-16px">Date</p>
                </div>
                <p class="font font-12px opacity-[0.6] font-normal pl-[115px]">{{$book->date}}</p>
            </div>
        </div>

        <div class="py-[40px]">
            <p class="font font-normal font-16px">
                {{$book->content}}
            </p>
        </div>
        <div class="flex flex-row gap-[20px]">

            <button class="hovered">Contact Us</button>
            <button class="hovered">Buy Now</button>

        </div>

    </div>

</div>