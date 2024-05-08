<style>
    #myCarousel {
        --f-carousel-spacing: 0px;
        --f-carousel-slide-width: 100%;

    }

    #myCarousel .f-carousel__slide {
        padding: 0px;
        background: transparent;
        overflow: hidden;

    }

    /* .f-carousel__nav {
        display: none !important;
        /* Hide the arrow buttons */
    /* } */



    /* Hide only the arrow buttons */
    .f-carousel__nav button {
        display: none !important;
    }


    .f-carousel__slide video {

        object-fit: cover;
        pointer-events: none;
        /* Maintain aspect ratio and cover container */
    }


    /* Example custom styles for FancyApps UI Carousel dots */
    .f-carousel__dots {
        position: absolute;
        bottom: 0px;
        top: 65%;
        /* Adjust as needed */
        left: 0;
        right: 0;
        margin: auto;
        /* This will center the dots horizontally */

        height: fit-content;
        width: fit-content;

        .f-carousel__dot {
            background-color: white;
        }
    }

    .f-carousel.has-dots {
        margin-bottom: 0px;
    }
</style>


<div>
    <div class="f-carousel h-[fit-content] relative" id="myCarousel">

        <!-- @foreach() -->


        <div class="f-carousel__slide carousel header_video relative overflow-hidden ">

            <!-- @if() -->
            <video class="video flex" autoplay loop muted>
                <source src="/{{->file_name}}.mp4" type="video/mp4">
            </video>
            <!-- @endif -->

            <div class="vide_container absolute top-[45%] left-[50%] transform -translate-x-1/2 -translate-y-1/2 flex flex-col justify-center items-center gap-[70px] ">

                <div class="first-components flex flex-col justify-center items-center gap-[25px] ">
                    <h1 class=" text-with-bold text-white title">Creating Performance</h1>
                    <button class="button text-with-bold  px-4 py-2 w-[248px] h-[55px]">Discover Our Services</button>
                </div>

            </div>



        </div>
        <!-- @endforeach -->

        <div class="social-media absolute bottom-[14%] left-[8%] flex flex-col gap-[30px] ">

            <img src="svgs/insta.svg" alt="">
            <img src="svgs/linkedin.svg" alt="">
            <img src="svgs/twitter.svg" alt="">

        </div>

    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/l10n/de.umd.js"></script>
<script>
    new Carousel(document.getElementById("myCarousel"), {
        l10n: Carousel.l10n.de,
        slidesToShow: 1,
        arrows: false
    });
</script>


<!-- 
 <div>
    <div class="f-carousel" id="myCarousel">
        <div class="f-carousel__slide">1</div>
        <div class="f-carousel__slide">2</div>
        <div class="f-carousel__slide">3</div>
        @foreach($images as $index => $image)
        <div class="f-carousel__slide" class="image-position w-full stuff" style="background-image: url('/images/{{$image->label}}.png');"></div>
        @endforeach
    </div>
</div>  -->