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
        prevNextButtons: true,
        pageDots: false,
        cellAlign: 'left',
        arrowShape: {
          x0: 20,
          x1: 60, y1: 50,
          x2: 75, y2: 50,
          x3: 35
        }
      })
    });

    // Specials column slider
    $('#roy_specials_col .products').flickity({
      autoPlay: 4400,
      contain: true,
      draggable:1,
      prevNextButtons: true,
      imagesLoaded: true,
      pageDots: false,
      arrowShape: {
        x0: 20,
        x1: 60, y1: 50,
        x2: 75, y2: 50,
        x3: 35
      }
    });

    // Brands slider
    $('.roy_brands_ul').flickity({
      contain: true,
      draggable:1,
      prevNextButtons: true,
      pageDots: false,
      cellAlign: 'left',
      arrowShape: {
        x0: 20,
        x1: 60, y1: 50,
        x2: 75, y2: 50,
        x3: 35
      }
    });

    // Blog Latest posts slider
    $('.blogslider').flickity({
      contain: true,
      draggable:1,
      prevNextButtons: true,
      pageDots: false,
      arrowShape: {
        x0: 20,
        x1: 60, y1: 50,
        x2: 75, y2: 50,
        x3: 35
      }
    });

    // Product page products sliders
    $('#product .products').flickity({
      draggable:1,
      prevNextButtons: true,
      pageDots: false,
      cellAlign: 'center',
      contain: true,
      arrowShape: {
        x0: 20,
        x1: 60, y1: 50,
        x2: 75, y2: 50,
        x3: 35
      }
    });
  }

  $(window).load(function() {
    sliders_def();
  });

});
