<div class="main-container w-screen flex flex-col gap-[40px] ">


    <div class="flex flex-row border-t-[1px] border-collapse pt-[40px] pb-[40px]">
        <div class="w-[45%] ">
            <div class="flex flex-row gap-[15px] items-center">
                <img class="w-[55px]" src="/svgs/charle/main-logo.svg" alt="">
                <p class="font font-semibold font-20px text-[#135D66] ">Previously</p>
            </div>
        </div>

        <div class="flex flex-col gap-[15px]">
            @foreach($previouslys as $previously)
            <div class="flex flex-row gap-[35px] pt-[5px]">
                <p class="font font-16px font-semibold text-[#135D66]">{{$previously->date}}</p>
                <p class="font font-16px font-normal">{{$previously->content}}</p>
            </div>
            @endforeach
        </div>


    </div>


</div>