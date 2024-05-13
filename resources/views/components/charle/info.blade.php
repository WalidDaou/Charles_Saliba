<div class="main-container w-screen flex flex-col pt-[5px] ">

    @foreach($charles as $charle)

    <div class="charles-container flex flex-row border-b-[1px] pt-[40px] gap-[15px] border-collapse pb-[10px]">
        <div class="charles-right w-[40%] ">
            <div class="flex flex-row gap-[15px] items-center">
                <img class="w-[55px]" src="/svgs/charle/main-logo.svg" alt="">
                <p class="font font-semibold font-20px text-[#135D66] ">{{$charle->title}}</p>
            </div>
        </div>
        <div class="charles-left flex flex-col gap-[10px] w-[55%]  pt-[5px]">
            @php
            $list = explode( "separator" , $charle->info);
            $list = collect($list) -> filter() -> values();
            @endphp
            @foreach($list as $item)

            <ul class="custom-list font font-16px font-normal  ">
                <li>{{$item}}</li>
            </ul>

            @endforeach
        </div>


    </div>

    @endforeach


</div>
