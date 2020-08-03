import Swiper from 'swiper';
export default function blockSlider() {
    const sliderName = '.related-stories';
    if($(sliderName).length > 0) {        
        var blocksSlider = new Swiper(sliderName, {
            loop: true,
            slidesPerView: 3,
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
            },
        });
        setTimeout(() => {
            blocksSlider.update();
        }, 2000);
    }
}