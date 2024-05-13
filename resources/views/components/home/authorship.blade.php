<div class="authorship w-screen h-[auto] pt-[20px]">
    @component('components.title')
    <x-slot name='title'>Authorship</x-slot>
    <x-slot name='content'></x-slot>
    @endcomponent


    <div class="main-container main-auth w-full h-[auto] flex flex-row gap-[20px] ">
        @foreach($authorships as $authorship)

        <div onclick="window.location.href='/authorship/{{$authorship->id}}'" class="slide-auth w-full h-[320px]  flex flex-col cursor-pointer" style="box-shadow: 0px 0px 30px #00000012;">
            <div class="flex flex-row gap-[20px] h-[26%] py-[15px] bg-[#135D66] px-[20px] items-center">
                <div class="w-[55px] h-[55px]">


                    <img class="w-full h-full" src="/svgs/home/{{$authorship->logo}}.svg" alt="">

                </div>
                <p class="text-white font font-normal font-semibold font-20px">{{$authorship->title}}</p>
            </div>
            <div class="flex flex-col px-[20px] pt-[10px]">
                @php
                $list = explode( "," , $authorship->types);
                $list = collect($list) -> filter() -> values();
                @endphp
                @foreach($list as $item)
                <div class="flex flex-row gap-[5px]  justify-between h-[45px] relative pt-[10px] items-center pb-[10px]">
                    <p class="font font-normal font-16px">{{$item}}</p>
                    <div class="w-[15px] h-[15px]">
                        <img class="w-full h-full" src="/svgs/home/arow-more.svg" alt="">
                    </div>
                    <div class="absolute bottom-0 right-0 w-full h-full border-b-[1px] border-[#333333] opacity-[0.15]"></div>
                </div>
                @endforeach
            </div>
        </div>




        @endforeach
    </div>
</div>