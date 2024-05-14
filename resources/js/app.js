import './bootstrap';

new Carousel(document.getElementById("horizontalCarousel"), {
    Autoplay: {
        progressParentEl: (autoplay) => {
            return autoplay.instance.viewport;
        },
        direction: 'left' // Change this to 'left' if you want autoplay from right to left
    }
}, {
    Autoplay
});


const container_2 = document.getElementById("horizontalCarouselTwo");
const options_2 = {
    Autoplay: {
        autoStart: true, // Autoplay starts automatically after initialization
        timeout: 1000,
        // playSpeed: 1000,
        // autoPlay: true,
        direction: {
            next: 'right',
            prev: 'left'
        }
    },
};

new Carousel(container_2, options_2, {
    Autoplay
});