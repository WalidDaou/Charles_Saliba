<div class="w-screen main-container pt-[30px]">

    <div class="w-full relative px-[100px]">

        <div class="carousel-container">
            <div class="carousel">
                @foreach ($books as $book)
                <div onclick="window.location.href='/info/{{$book->id}}'" class="slide h-[420px] relative cursor-pointer">
                    <div class="absolute top-0 left-0">
                        <img class="h-[340px]" src="/svgs/home/{{$book->img}}.svg" alt="">
                    </div>
                    <div class="absolute top-[50%] left-[30%] for-rotation ">

                        <div class="relative for-rotation cursor-pointer">
                            <div class="img">
                                <img class="h-[200px]" src="/svgs/home/second-cross.svg" alt="">
                            </div>
                            <div class="absolute top-[30%] left-[40%]">
                                <p class="font font-bold font-20px">Positive Influence</p>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
        <button class="button button-left" onclick="prevSlide()"><img class="h-[55px] w-[55px]" src="/svgs/home/left.svg" alt=""></button>
        <button class="button button-right" onclick="nextSlide()"><img class="h-[55px] w-[55px]" src="/svgs/home/right.svg" alt=""></button>

    </div>
</div>


<script>
    let currentIndex = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;
    const carousel = document.querySelector('.carousel');

    function nextSlide() {
        if (currentIndex < totalSlides - 3) { // Display three slides at a time
            currentIndex++;
        } else {
            currentIndex = 0; // Loop back to the first slide
        }
        updateCarousel();
    }

    function prevSlide() {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = totalSlides - 3; // Set to the last slide index
        }
        updateCarousel();
    }

    function updateCarousel() {
        const slideWidth = slides[0].offsetWidth;
        carousel.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    }
</script>


<style>
    .carousel-container {
        width: 100%;
        margin: auto;
        overflow: hidden;
        position: relative;
    }

    .carousel {
        display: flex;
        transition: transform 0.5s ease;
    }

    .slide {
        flex: 1 0 33.33%;
        /* Display three slides at a time */
        /* min-width: 300px; */
        /* Minimum width for each slide */
    }

    .button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        padding: 10px;
        color: white;
        border: none;
        outline: none;
    }

    .button-left {
        left: 0;
    }

    .button-right {
        right: 0;
    }
</style>

<!-- <div class="Books-carousel f-carousel main-container" id="BooksCarousell">
    @foreach($books as $book)
    <div class="f-carousel__slide"><img src="/svgs/home/{{$book->img}}.svg" alt=""></div>
    @endforeach
</div>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.umd.js"></script>
<script>
    new Carousel(document.getElementById("BooksCarousell"));
</script> -->

<!-- <style>
     .Books-carousel {
         --f-carousel-spacing: 10px;
         width: 100vw;
         margin-bottom: 0px !important;

         .f-carousel__slide {
             width: calc((100% - var(--f-carousel-spacing) * 3) / 3);
             height: 395px;
             background-color: #EDEDED;

         }

         .f-carousel__dots{
             display: none;
         }
     }


     .Books-carousel {
         .f-button {
             @apply main-container
         }
     }
</style> -->