import { TweenMax, TimelineMax, Power2 } from 'gsap'
import * as ScrollMagic from 'scrollmagic'
import { ScrollMagicPluginGsap } from 'scrollmagic-plugin-gsap'
ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax)
export default function animatedSections() {
    var ctrl = new ScrollMagic.Controller();
    // Create scenes in jQuery each() loop
    $('.section').each(function() {
        let animatedItem = $(this).find('.animated-item')
        
        let timeLine = new TimelineMax();
        timeLine.staggerFromTo(animatedItem, 0.4, { opacity: 0 }, {opacity: 1, ease: Power2.easeInOut}, .1, .15);
        
        new ScrollMagic.Scene({
            triggerElement: this,
            triggerHook: 0.7,
            reverse: !1,
        }).setTween(timeLine).addTo(ctrl);
    });
}