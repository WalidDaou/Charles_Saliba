<div class="article-container w-screen h-[120vh]  main-container flex flex-row gap-[15px] pt-[40px]">

    <div class="left-article w-[70%] h-full flex flex-row bg-white " style="box-shadow: 0px 0px 30px #00000012;">


        <div x-data="{ showFirst: true }" class="w-full h-full flex flex-col gap-[40px] ">

            <div class="flex flex-col gap-[15px] pt-[30px] px-50px">
                <p class="font font-bold font-30px">Articles</p>
                <div class="flex flex-row gap-[15px]">
                    <button :class="{ 'active': showFirst ,'button-articale': !showFirst }" @click="showFirst = true" class="w-[150px] h-[35px] border-[1px] font-semibold font fonnt-16px border-black">English</button>
                    <button :class="{ 'active': !showFirst ,'button-articale': showFirst }" @click="showFirst = false" class="w-[150px] h-[35px] border-[1px] font-semibold font fonnt-16px border-black">Arabic</button>
                </div>
            </div>

            <div class="flex flex-row w-full h-full">

                <div x-show="showFirst" class="w-full h-full fex flex-col gap-[30px] ">

                    @foreach($articles as $article )
                    <div class="article relative h-[55px] px-50px border-t-[1px] border-collapse">
                        <div class="hovering w-full h-full absolute top-0 left-0 bg-black opacity-[0.03]"></div>
                        <div class="text-container asolute top-0 left-0 w-full h-full  flex flex-row justify-between gap-[15px] items-center">
                            <p class="font font-16px font-semibold text-[#135D66]">The Global Leader Of Today</p>
                            <p class="date-article font font-normal font-16px">18-4-2024</p>

                            <div class="download w-[150px] h-[32px]  relative ">

                                <div class="w-full h-full absolute top-0 left-0 bg-[#135D66] opacity-[0.1]"></div>

                                <div class="absolute top-0 left-0 w-full h-full flex flex-row gap-[10px] justify-center items-center cursor-pointer">
                                    <img class="w-[12px]" src="/svgs/leadership/download.svg" alt="">
                                    <p class="text-dow text-[#135D66] flex justify-center items-center font font-14px font-medium">
                                        Download
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

                <div x-show="!showFirst" class="w-full h-full fex flex-col gap-[30px] ">
                    @foreach($articles as $article )
                    <div class="article relative h-[55px] px-50px border-t-[1px] border-collapse">
                        <div class="hovering w-full h-full absolute top-0 left-0 bg-black opacity-[0.03]"></div>
                        <div class="text-container asolute top-0 left-0 w-full h-full  flex flex-row justify-between items-center text-right">

                            <div class="download w-[150px] h-[32px]  relative ">
                                <div class="w-full h-full absolute top-0 left-0 bg-[#135D66] opacity-[0.1]"></div>
                                <div class="absolute top-0 left-0 w-full h-full flex flex-row gap-[10px] justify-center items-center cursor-pointer">
                                    <img class="w-[12px]" src="/svgs/leadership/download.svg" alt="">
                                    <p class="text-dow text-[#135D66] flex justify-center items-center font font-14px font-medium">
                                        Download
                                    </p>
                                </div>
                            </div>
                            <p class="date-article font font-normal font-16px">18-4-2024</p>
                            <p class="font font-16px font-semibold text-[#135D66] text-rigth">مزايا وتحدّيات استقلالية المصارف المركزية: حالة مصرف لبنان</p>
                        </div>
                    </div>
                    @endforeach
                </div>



            </div>


        </div>

    </div>



    <div class="right-article w-[30%] h-full flex flex-col pt-[20px] px-[20px] gap-[40px] bg-white " style="box-shadow: 0px 0px 30px #00000012;">

        @foreach($leaderships as $leadership)
        <div class="w-full h-[auto]  flex flex-col  ">
            <div class="title-article flex flex-row gap-[20px] h-[26%]  items-center">
                <div class="w-[35px] h-[35px]">


                    <img class="w-full h-full" src="/svgs/home/{{$leadership->logo}}.svg" alt="">

                </div>
                <p class="text-[#135D66] font font-normal font-semibold font-16px">{{$leadership->title}}</p>
            </div>
            <div class=" flex flex-col  pt-[10px]">
                @php
                $list = explode( "," , $leadership->types);
                $list = collect($list) -> filter() -> values();
                @endphp
                @foreach($list as $item)
                <div class="infos flex flex-row justify-between h-[45px] relative pt-[10px] items-center pb-[10px]">
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