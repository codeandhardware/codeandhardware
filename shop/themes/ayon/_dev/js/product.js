/**
 * 2007-2019 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
import $ from 'jquery';
import prestashop from 'prestashop';
import { flickity } from "../node_modules/flickity/dist/flickity.pkgd.min";

$(document).ready(function () {
  createProductSpin();
  createInputFile();
  coverImage();
  thumbsInit();
  whiteborder();
  shareclick();

  prestashop.on('updatedProduct', function (event) {
    thumbsDestroy();
    createProductSpin()
    createInputFile();
    coverImage();
    if (event && event.product_minimal_quantity) {
      const minimalProductQuantity = parseInt(event.product_minimal_quantity, 10);
      const quantityInputSelector = '#quantity_wanted';
      let quantityInput = $(quantityInputSelector);

      // @see http://www.virtuosoft.eu/code/bootstrap-touchspin/ about Bootstrap TouchSpin
      quantityInput.trigger('touchspin.updatesettings', {min: minimalProductQuantity});
    }
    $($('.tabs .nav-link.active').attr('href')).addClass('active').removeClass('fade');
    $('.js-product-images-modal').replaceWith(event.product_images_modal);
    whiteborder();
    updateCounters();
    shareclick();
    slideqv();

    setTimeout( function(){
      thumbsInit();
    },200);

  });
  function thumbsDestroy() {
  }
  function thumbsInit() {
    var thumbs_count_lis = $('#main .product-thumbs-wrapper li.thumb-container');

    if (thumbs_count_lis.length == 1) {
      $('#main .product-thumbs-wrapper').addClass('hide_it_pls');
    } else if (thumbs_count_lis.length == 2) {
      $('#main .product-thumbs-wrapper').addClass('w50');
    } else if (thumbs_count_lis.length == 3) {
      $('#main .product-thumbs-wrapper').addClass('w33');
    } else if (thumbs_count_lis.length >= 4) {
      $('#main .product-thumbs-wrapper').addClass('w25');
    }

    setTimeout( function(){

    initslidepp();

      $(window).on('load resize', function(){
        initslidepp();
      });

      function slidepp() { // Product page lay sliders
        $('.images-container .product-images').flickity({
          draggable:1,
          pageDots: false,
          cellAlign: 'left',
          contain: true,
          imagesLoaded: true,
          arrowShape: {
            x0: 30,
            x1: 60, y1: 50,
            x2: 70, y2: 50,
            x3: 40
          }
        });
        $('.images-container .product-thumbs').flickity({
          asNavFor: '.images-container .product-images',
          draggable:1,
          prevNextButtons: false,
          pageDots: false,
          cellAlign: 'center',
          imagesLoaded: true,
          contain: true
        });
      }

      function initslidepp() {
        if (window.matchMedia('(max-width: 767px)').matches) { // slide it for mobile for all lays
            slidepp();
        } else if ($('#product .images-container').hasClass('pp_lay1')) { // slide it for 1 lay on desktop
            slidepp();
        } else { // destroy sliders here for 2 and 3 on resize to bigger resolution
          if ($('.images-container .product-images').hasClass('flickity-enabled'))
            $('.images-container .product-images').flickity('destroy');
          if ($('.images-container .product-thumbs').hasClass('flickity-enabled'))
            $('.images-container .product-thumbs').flickity('destroy');
        }
      }

    },100);

  }


  function slideqv() {
    $('.quickview .product-images').flickity({
      draggable:1,
      pageDots: false,
      cellAlign: 'left',
      contain: true,
      imagesLoaded: true,
      arrowShape: {
        x0: 30,
        x1: 60, y1: 50,
        x2: 70, y2: 50,
        x3: 40
      }
    });
  }

  function coverImage() {
    $('.js-thumb').on(
      'click',
      (event) => {
        $('.js-modal-product-cover').attr('src',$(event.target).data('image-large-src'));
        $('.selected').removeClass('selected');
        $(event.target).addClass('selected');
        $('.js-qv-product-cover').prop('src', $(event.currentTarget).data('image-large-src'));
      }
    );
  }

  function createInputFile()
  {
    $('.js-file-input').on('change', (event) => {
      let target, file;

      if ((target = $(event.currentTarget)[0]) && (file = target.files[0])) {
        $(target).prev().text(file.name);
      }
    });
  }

  function createProductSpin()
  {
    const $quantityInput = $('#quantity_wanted');

    $quantityInput.TouchSpin({
      verticalbuttons: false,
      verticalupclass: 'material-icons touchspin-up',
      verticaldownclass: 'material-icons touchspin-down',
      buttondown_class: 'btn btn-touchspin js-touchspin',
      buttonup_class: 'btn btn-touchspin js-touchspin',
      min: parseInt($quantityInput.attr('min'), 10),
      max: 1000000
    });

    $('body').on('change keyup', '#quantity_wanted', (e) => {
      $(e.currentTarget).trigger('touchspin.stopspin');
      prestashop.emit('updateProduct', {
          eventType: 'updatedProductQuantity',
          event: e
      });
    });
  }

  // white color
  function whiteborder()
  {
    $('.color').each(function() {
      if( $(this).css('background-color') === 'rgb(255, 255, 255)') {
        $(this).addClass('white');
      }
    });
  }

  // share

  function shareclick() {
    $('.share_text').click(function(e) {
      e.preventDefault;
      var share_dad = $('.share_text').parent('.social-sharing');
      if (!share_dad.hasClass('click')) {

        share_dad.addClass('click');
      }
    });
  }

  function updateCounters() {
  	$(".countcontainer").each(function(e) {
  		var $roycountdown = $(this).find(".roycountdown");
  		var $roycount = $roycountdown.find(".roycount");
  		var $dataspecificpriceto = $roycount.attr('data-specific-price-to');
  		if ($roycountdown.length) {
  			$roycountdown.county({
  				endDateTime: new Date($dataspecificpriceto.replace(/-/g, "/")) , reflection: false, animation: 'none', theme: 'black',
  				titleDays:$roycount.data('days'),titleHours:$roycount.data('hours'),titleMinutes:$roycount.data('minutes'),titleSeconds:$roycount.data('seconds')
  			});
  		}
  	});
  }

});
