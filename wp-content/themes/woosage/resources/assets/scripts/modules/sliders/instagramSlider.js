import Swiper from 'swiper';
export default function blockSlider() {
    const sliderName = '.inst-slider';
    if($(sliderName).length > 0) {        
        var instagramSlider = new Swiper(sliderName, {
            loop: true,
            slidesPerView: 7,
            spaceBetween: 30,
            centeredSlides: true,
            freeMode: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                767: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 7,
                },
            },
        });
        setTimeout(() => {
          instagramSlider.update();
        }, 2000);
    }
}