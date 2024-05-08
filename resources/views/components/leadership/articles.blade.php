<div class="w-screen h-screen main-container bg-[#EDEDED] flex flex-row gap-[15px] pt-[40px]">

    <div class="w-[70%] h-full flex flex-row bg-white px-[50px]" style="box-shadow: 0px 0px 30px #00000012;">
        <div class="w-full h-full flex flex-col gap-[40px] ">

            <div class="flex flex-col gap-[15px] pt-[30px] ">
                <p class="font font-bold font-30px">Articles</p>
                <div class="flex flex-row gap-[15px]">
                    <button class="w-[150px] h-[35px] border-[1px] border-black">English</button>
                    <button class="w-[150px] h-[35px] border-[1px] border-black">Arabic</button>
                </div>
            </div>

            <div class="fex flex-col gap-[30px]">

                @foreach($articles as $article )
                <div class="flex flex-row justify-between border-t-[1px] border-black pt-[10px]">
                    <p>The Global Leader Of Today</p>
                    <p>18-4-2024</p>
                    <button class="w-[150px] h-[32px] flex justify-center items-center text-[#135D66]">Download</button>
                </div>
                @endforeach

            </div>

        </div>

        <div class="w-full h-full flex flex-row hidden">

            <div class="flex flex-col gap-[15px] pt-[30px] ">
                <p class="font font-bold font-30px">Articles</p>
                <div class="flex flex-row gap-[15px]">
                    <button class="w-[150px] h-[35px] border-[1px] border-black">English</button>
                    <button class="w-[150px] h-[35px] border-[1px] border-black">Arabic</button>
                </div>
            </div>

        </div>

    </div>

    <div class="w-[30%] h-full flex flex-col bg-white px-[20px]" style="box-shadow: 0px 0px 30px #00000012;">

    </div>

</div>