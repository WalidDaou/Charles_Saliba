<div class=" main-container w-screen flex flex-col gap-[40px]">

    @foreach($expertises as $expertise)

    <div class="charles-container flex flex-row gap-[15px] border-t-[1px] pt-[40px] border-collapse ">
        <div class="charles-right w-[40%] ">
            <div class="flex flex-row gap-[15px] items-center">
                <img class="w-[55px]" src="/svgs/charle/main-logo.svg" alt="">
                <p class="font font-semibold font-20px text-[#135D66] ">{{$expertise->title}}</p>
            </div>
        </div>


        <div class="functional-container flex flex-row ">


            <div class="left-f charles-left w-[50%] flex flex-col gap-[10px]  pt-[5px]">
                @php
                $list = explode( "," , $expertise->content);
                $list = collect($list) -> filter() -> values();
                @endphp
                @foreach($list as $item)

                <ul class="custom-list font font-16px font-normal  ">
                    <li>{{$item}}</li>
                </ul>

                @endforeach
            </div>


            @if($expertise->second_content)
            <div class="right-f w-[50%] flex flex-col gap-[10px] pt-[5px]">
                @php
                $list_2 = explode(",", $expertise->second_content);
                $list_2 = collect($list_2)->filter()->values();
                @endphp
                @foreach($list_2 as $item)
                <ul class="custom-list font font-16px font-normal">
                    <li>{{$item}}</li>
                </ul>
                @endforeach
            </div>
            @endif


        </div>

    </div>

    @endforeach


</div>