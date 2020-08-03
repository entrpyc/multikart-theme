import heroSlider from '../modules/sliders/heroSlider';
import blockSlider from '../modules/sliders/blockSlider';
import instagramSlider from '../modules/sliders/instagramSlider';
import brandsSlider from '../modules/sliders/brandsSlider';
import specialOfferSlider from '../modules/sliders/specialOfferSlider';
import exclusiveProductTabs from '../modules/exclusiveProductTabs';
export default {
    init() {
      heroSlider();
      blockSlider();
      instagramSlider();
      brandsSlider();
      specialOfferSlider();
      exclusiveProductTabs();
      // JavaScript to be fired on the about us page
    },
};