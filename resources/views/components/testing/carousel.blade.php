<style>
    #myCarousel {

        height: 300px;
    }

    #myCarousel .f-carousel__slide {
        padding: 50px;
        background: #eee;
    }

    .vertical-carousel {

        height: 300px;
        /* Adjust height as needed */
    }

    .horizontal-carousel {
        --f-carousel-spacing: 10px;
        --f-carousel-slide-width: 60%;

        /* Adjust width as needed */
        margin: auto;
        /* Center horizontally */
    }

    /* Custom styles for the carousel slides */
    .f-carousel__slide {
        padding: 50px;
        background: #eee;
    }
</style>

<div>
    <div class="f-carousel" id="myCarousel">
        <div class="f-carousel__slide">1</div>
        <div class="f-carousel__slide">2</div>
        <div class="f-carousel__slide">3</div>
    </div>
</div>


<div class="vertical-carousel f-carousel" id="verticalCarousel">
    <div class="f-carousel__slide">1</div>
    <div class="f-carousel__slide">2</div>
    <div class="f-carousel__slide">3</div>
</div>

<!-- Horizontal Carousel -->
<div class="horizontal-carousel f-carousel" id="horizontalCarousel">
    <div class="f-carousel__slide">A</div>
    <div class="f-carousel__slide">B</div>
    <div class="f-carousel__slide">C</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.umd.js"></script>
<script>
    new Carousel(document.getElementById("myCarousel"), {
        axis: 'y', // Set the axis option to 'y' for vertical carousel
    });

    new Carousel(document.getElementById("verticalCarousel"), {
        axis: 'y', // Set the axis option to 'y' for vertical carousel
    });

    // Initialize Horizontal Carousel
    new Carousel(document.getElementById("horizontalCarousel"));
</script>



<div class="horizontal-carousel f-carousel" id="horizontalCarousel">
    <div class="f-carousel__slide">1</div>
    <div class="f-carousel__slide">2</div>
    <div class="f-carousel__slide">3</div>
    <div class="f-carousel__slide">4</div>
    <div class="f-carousel__slide">5</div>
    <div class="f-carousel__slide">6</div>
    <div class="f-carousel__slide">6</div>
    <div class="f-carousel__slide">6</div>
    <div class="f-carousel__slide">6</div>
    <div class="f-carousel__slide">6</div>
</div>

<style>
    .horizontal-carousel {
        --f-carousel-spacing: 4%;

    }

    /* Custom styles for the carousel slides */
    .f-carousel__slide {
        height: 300px;
        width: 30%;

        background: #eee;
    }
</style>



<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.umd.js"></script>
<script>
    new Carousel(document.getElementById("horizontalCarousel"), {
        perpage: 3,
        slidesInView: 3,

    });
</script>


