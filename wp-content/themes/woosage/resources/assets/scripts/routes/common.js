import header from '../modules/header';
import footer from '../modules/footer';
import aosAnimations from '../modules/aosAnimations';
import animatedSections from '../modules/animatedSections';
import forms from '../modules/forms';
import map from '../modules/map';

// import AOS from 'aos';
export default {
  init() {
        // img to svg
    $('img.svg').each(function () {
      var $img = jQuery(this);
      var imgID = $img.attr('id');
      var imgClass = $img.attr('class');
      var imgURL = $img.attr('src');
      $.get(imgURL, function (data) {
        var $svg = jQuery(data).find('svg');
        if (typeof imgID !== 'undefined') {
          $svg = $svg.attr('id', imgID);
        }
        if (typeof imgClass !== 'undefined') {
          $svg = $svg.attr('class', imgClass + ' replaced-svg');
        }
        $svg = $svg.removeAttr('xmlns:a');
        $img.replaceWith($svg);
      }, 'xml');
    });

    /** AOS */
    // asoAnimations();
    // window.addEventListener('load', AOS.refresh);
    $( document ).ready(function(){
      aosAnimations();
      animatedSections();
      header();
      footer();
      forms();
      map();
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
