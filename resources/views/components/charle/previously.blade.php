<div class=" main-container w-screen flex flex-col gap-[40px] ">

<!-- border-t-[1px] border-collapse -->
    <div class="charles-container flex flex-row  pt-[40px] pb-[40px]">
        <div class="charles-right w-[40%] ">
            <div class="flex flex-row gap-[15px] items-center">
                <img class="w-[55px]" src="/svgs/charle/main-logo.svg" alt="">
                <p class="font font-semibold font-20px text-[#135D66] ">Previously</p>
            </div>
        </div>

        <div class="charles-left w-[60%]  flex flex-col gap-[15px]">
            @foreach($previouslys as $previously)
            <div class="flex flex-row gap-[20px] pt-[5px]">
                <p class="previously-text min-w-[100px] font font-16px font-semibold text-[#135D66]">{{$previously->date}}</p>
                <p class="font font-16px font-normal">{{$previously->content}}</p>
            </div>
            @endforeach
        </div>


    </div>


</div>