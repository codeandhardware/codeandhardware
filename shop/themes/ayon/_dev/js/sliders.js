import $ from 'jquery';
import { flickity } from "../node_modules/flickity/dist/flickity.pkgd.min";

$(document).on('ready', function(){

  var $sliders = $('.slideme');
  $sliders.on('dragStart.flickity', () => $sliders.find('.flickity-slider > *').css('pointer-events', 'none'));
  $sliders.on('dragEnd.flickity', () => $sliders.find('.flickity-slider > *').css('pointer-events', 'all'));

  function sliders_def() {
    // HP sliders
    $('#index .featured-products.slideme .products').each(function() {
      var hasAuto = ($(this).parent('.featured-products').attr('data-auto') === 'true') ? 4400 :false;
      $(this).flickity({
        autoPlay: hasAuto,
        contain: true,
        draggable:1,
        prevNextButtons: false,
        pageDots: false,
        cellAlign: 'left'
      })
    });

    // Specials column slider
    $('#roy_specials_col .products').flickity({
      autoPlay: 4400,
      contain: true,
      draggable:1,
      prevNextButtons: false,
      pageDots: false
    });

    // Brands slider
    $('.roy_brands_ul').flickity({
      contain: true,
      draggable:1,
      prevNextButtons: false,
      pageDots: false,
      cellAlign: 'left'
    });

    // Blog Latest posts slider
    $('.blogslider').flickity({
      contain: true,
      draggable:1,
      prevNextButtons: false,
      pageDots: false
    });

    // Product page products sliders
    $('#product .products').flickity({
      draggable:1,
      prevNextButtons: false,
      pageDots: false,
      cellAlign: 'left',
      contain: true
    });
  }

  $(window).load(function() {
    sliders_def();
  });

});
