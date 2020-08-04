import Swiper from 'swiper';
export default function blockSlider() {
    const sliderName = '.brands-slider';
    if($(sliderName).length > 0) {        
        var brandsSlider = new Swiper(sliderName, {
            loop: true,
            slidesPerView: 6,
            spaceBetween: 30,
            centeredSlides: true,
            freeMode: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 6,
                },
            },
        });
        setTimeout(() => {
          brandsSlider.update();
        }, 2000);
    }
}