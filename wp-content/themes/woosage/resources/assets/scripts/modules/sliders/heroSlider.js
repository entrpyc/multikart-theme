import Swiper from 'swiper';
export default function heroSlider() {
    const sliderName = '.hero-slider';
    if($(sliderName).length > 0) {        
        var heroSlider = new Swiper(sliderName, {
            loop: true,
            slidesPerView: 1,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
        setTimeout(() => {
            heroSlider.update();
        }, 2000);
    }
}