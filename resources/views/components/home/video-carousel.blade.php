<div  class="flex flex-col gap-[20px] w-screen ">


    <div class="horizontal-carousel w-full f-carousel" id="horizontalCarousel">
        @foreach($videos as $video)
        <div class="f-carousel__slide relative background" style="background-image:url('/images/home/{{$video->image_path}}.jpg');">

            <div class="bg-black opacity-[0.4] h-full w-full absolute top-0 left-0">
            </div>

            <div class="absolute w-full h-full top-0 left-0 justify-center items-center flex">
                <img src="/svgs/home/play-video.svg" alt="">
            </div>
            <div class="text-holder absolute ml-[10px] mb-[20px] bottom-[0%] left-0 min-w-[220px] h-[28px] bg-[#EBEBEB] flex justify-center items-center ">

                <p class="font font-medium font-12px">
                    {{$video->title}}
                </p>

            </div>
        </div>

        @endforeach
    </div>



    <div class="horizontal-carousel-2 w-full f-carousel" id="horizontalCarouselTwo">
        @foreach($videos as $video)
        <div class="f-carousel__slide relative background" style="background-image:url('/images/home/{{$video->image_path}}.jpg');">

            <div class="bg-black opacity-[0.4] h-full w-full absolute top-0 left-0">
            </div>

            <div class="absolute w-full h-full top-0 left-0 justify-center items-center flex">
                <img src="/svgs/home/play-video.svg" alt="">
            </div>
            <div class="text-holder absolute ml-[10px] mb-[20px] bottom-[0%] left-0 w-[220px] h-[28px] bg-[#EBEBEB] flex justify-center items-center ">

                <p class="font font-medium font-12px">
                    {{$video->title}}
                </p>

            </div>
        </div>

        @endforeach
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.umd.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.autoplay.umd.js">
</script>

<script>
    new Carousel(document.getElementById("horizontalCarousel"), {
        Autoplay: {
            progressParentEl: (autoplay) => {
                return autoplay.instance.viewport;
            }
        }
    }, {
        Autoplay
    });

    const container_2 = document.getElementById("horizontalCarouselTwo");
    const options_2 = {
        Autoplay: {
            autoStart: true, // Autoplay starts automatically after initialization
            timeout: 600,

        },
    };

    new Carousel(container_2, options_2, {
        Autoplay
    });
</script>

