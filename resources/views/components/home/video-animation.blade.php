<div class="w-screen video-animated flex flex-col gap-[20px] overflow-x-hidden">


    <div class="w-[fit-content] flex flex-row gap-[20px] px-[20px] slide-animation" id="sliderContainer">
        @foreach($videos as $index => $video)
        <div class="cursor-pointer w-[350px] h-[200px] relative background bg-[#EDEDED] video-slide" id="{{$index}}" style="background-image:url('/images/home/{{$video->image_path}}.jpg');">
            <div class="bg-black opacity-[0.4] h-full w-full absolute top-0 left-0"></div>
            <div class="absolute w-full h-full top-0 left-0 justify-center items-center flex">
                <img src="/svgs/home/play-video.svg" alt="">
            </div>
            <div class="text text-holder absolute ml-[10px] mb-[20px] bottom-[0%] left-0 w-[220px] h-[28px] bg-[#EBEBEB] flex justify-center items-center">
                <p class="font font-medium font-12px">{{$video->title}}</p>
            </div>
        </div>
        @endforeach
    </div>

    <div class="w-[fit-content] flex flex-row gap-[20px] px-[20px] slide-animation-2" id="sliderContainer">
        @foreach($videos as $index => $video)
        <div class="cursor-pointer w-[350px] h-[200px] relative background bg-[#EDEDED] video-slide" id="{{$index}}" style="background-image:url('/images/home/{{$video->image_path}}.jpg');">
            <div class="bg-black opacity-[0.4] h-full w-full absolute top-0 left-0"></div>
            <div class="absolute w-full h-full top-0 left-0 justify-center items-center flex">
                <img src="/svgs/home/play-video.svg" alt="">
            </div>
            <div class="text text-holder absolute ml-[10px] mb-[20px] bottom-[0%] left-0 w-[220px] h-[28px] bg-[#EBEBEB] flex justify-center items-center">
                <p class="font font-medium font-12px">{{$video->title}}</p>
            </div>
        </div>
        @endforeach
    </div>


</div>

