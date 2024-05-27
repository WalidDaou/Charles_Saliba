<div class="books-carousel w-screen main-container pt-[30px]">

    <div class="main w-full relative flex flex-col justify-center items-center px-[100px]">

        <div class="carousel-container">
            <div class="carousel">
                @foreach ($books as $book)
                <div onclick="window.location.href='/info/{{$book->id}}'" class="slide h-[420px] relative cursor-pointer">
                    <div class="img-div absolute top-0 left-0">
                        <img class="img-book h-[340px]" src="/svgs/home/{{$book->img}}.svg" alt="">
                    </div>
                    <div class="rotation absolute top-[50%] left-[30%] for-rotation ">

                        <div class="relative for-rotation cursor-pointer">
                            <div class="img">
                                <img class=" logo-img h-[200px]" src="/svgs/home/second-cross.svg" alt="">
                            </div>
                            <div class="text absolute top-[35%] left-[40%]">
                                <p class="font font-bold font-20px">Positive Influence</p>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
        <div class="flex flex-row justify-between items-center w-full ">
            <button class="button button-left" onclick="prevSlide()"><img class="h-[55px] w-[55px]" src="/svgs/home/left.svg" alt=""></button>
            <button class="button button-right" onclick="nextSlide()"><img class="h-[55px] w-[55px]" src="/svgs/home/right.svg" alt=""></button>
        </div>

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






<div class="hidden books-carousel Books-carousel-2 f-carousel books-padding" id="BooksCarousell">
    @foreach($books as $book)
    <div onclick="window.location.href='/info/{{$book->id}}'" class="slide f-carousel__slide  h-[420px] relative ">
        <div class="img-div absolute top-0 left-0">
            <img class="img-book h-[340px]" src="/svgs/home/{{$book->img}}.svg" alt="">
        </div>
        <div class="rotation absolute top-[50%] left-[30%] for-rotation ">

            <div class="relative for-rotation cursor-pointer">
                <div class="img">
                    <img class=" logo-img h-[200px]" src="/svgs/home/second-cross.svg" alt="">
                </div>
                <div class="text absolute top-[30%] left-[40%]">
                    <p class="font font-bold font-20px">Positive Influence</p>
                </div>
            </div>
        </div>

    </div>
    @endforeach
</div>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.umd.js"></script>

<script>
    new Carousel(document.getElementById("BooksCarousell"));
</script>