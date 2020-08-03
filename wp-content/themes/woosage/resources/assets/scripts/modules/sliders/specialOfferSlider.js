import Swiper from 'swiper';
export default function blockSlider() {
    const sliderName = '.special-listing-slider';
    if($(sliderName).length > 0) {        
        var specialOfferSlider = new Swiper(sliderName, {
            loop: true,
            slidesPerView: 4,
            spaceBetween: 30,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
               1440: {
                    slidesPerView: 4,
                },
            },
        });
        setTimeout(() => {
            specialOfferSlider.update();
        }, 2000);
    }
}