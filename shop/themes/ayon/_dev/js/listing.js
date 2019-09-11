/**
 * 2007-2017 PrestaShop
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
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
import $ from 'jquery';
import prestashop from 'prestashop';
import 'velocity-animate';

import ProductMinitature from './components/product-miniature';

$(document).ready(() => {
  prestashop.on('clickQuickView', function (elm) {
    let data = {
      'action': 'quickview',
      'id_product': elm.dataset.idProduct,
      'id_product_attribute': elm.dataset.idProductAttribute,
    };
    $.post(prestashop.urls.pages.product, data, null, 'json').then(function (resp) {
      $('body').append(resp.quickview_html);
      let productModal = $(`#quickview-modal-${resp.product.id}-${resp.product.id_product_attribute}`);
      productModal.modal('show');
      productConfig(productModal);
      productModal.on('hidden.bs.modal', function () {
        productModal.remove();
      });
    }).fail((resp) => {
      prestashop.emit('handleError', {eventType: 'clickQuickView', resp: resp});
    });
  });

  var productConfig = (qv) => {
    const MAX_THUMBS = 4;
    var $arrows = $('.js-arrows');
    var $thumbnails = qv.find('.js-qv-product-images');
    $('.js-thumb').on('click', (event) => {
      if ($('.js-thumb').hasClass('selected')) {
        $('.js-thumb').removeClass('selected');
      }
      $(event.currentTarget).addClass('selected');
      $('.js-qv-product-cover').attr('src', $(event.target).data('image-large-src'));
    });
    if ($thumbnails.find('li').length <= MAX_THUMBS) {
      $arrows.hide();
    } else {
      $arrows.on('click', (event) => {
        if ($(event.target).hasClass('arrow-up') && $('.js-qv-product-images').position().top < 0) {
          move('up');
          $('.arrow-down').css('opacity', '1');
        } else if ($(event.target).hasClass('arrow-down') && $thumbnails.position().top + $thumbnails.height() > $('.js-qv-mask').height()) {
          move('down');
          $('.arrow-up').css('opacity', '1');
        }
      });
    }
    qv.find('#quantity_wanted').TouchSpin({
      verticalbuttons: false,
      verticalupclass: 'material-icons touchspin-up',
      verticaldownclass: 'material-icons touchspin-down',
      buttondown_class: 'btn btn-touchspin js-touchspin',
      buttonup_class: 'btn btn-touchspin js-touchspin',
      min: 1,
      max: 1000000
    });
    setTimeout(function() {
      qv.find('.product-images').flickity({
          draggable:1,
          pageDots: false,
          cellAlign: 'left',
          contain: true,
          arrowShape: {
            x0: 30,
            x1: 60, y1: 50,
            x2: 70, y2: 50,
            x3: 40
          }
      });
    },300);
  };
  var move = (direction) => {
    const THUMB_MARGIN = 20;
    var $thumbnails = $('.js-qv-product-images');
    var thumbHeight = $('.js-qv-product-images li img').height() + THUMB_MARGIN;
    var currentPosition = $thumbnails.position().top;
    $thumbnails.velocity({
      translateY: (direction === 'up') ? currentPosition + thumbHeight : currentPosition - thumbHeight
    }, function () {
      if ($thumbnails.position().top >= 0) {
        $('.arrow-up').css('opacity', '.2');
      } else if ($thumbnails.position().top + $thumbnails.height() <= $('.js-qv-mask').height()) {
        $('.arrow-down').css('opacity', '.2');
      }
    });
  };
  $('body').on('click', '#search_filter_toggler', function () {
    $('#search_filters_wrapper').removeClass('hidden-sm-down');
    $('#content-wrapper').addClass('hidden-sm-down');
    $('#footer').addClass('hidden-sm-down');
  });
  $('#search_filter_controls .clear').on('click', function () {
    $('#search_filters_wrapper').addClass('hidden-sm-down');
    $('#content-wrapper').removeClass('hidden-sm-down');
    $('#footer').removeClass('hidden-sm-down');
  });
  $('#search_filter_controls .ok').on('click', function () {
    $('#search_filters_wrapper').addClass('hidden-sm-down');
    $('#content-wrapper').removeClass('hidden-sm-down');
    $('#footer').removeClass('hidden-sm-down');
  });

  const parseSearchUrl = function (event) {
    if (event.target.dataset.searchUrl !== undefined) {
      return event.target.dataset.searchUrl;
    }

    if ($(event.target).parent()[0].dataset.searchUrl === undefined) {
      throw new Error('Can not parse search URL');
    }

    return $(event.target).parent()[0].dataset.searchUrl;
  };

  $('body').on('change', '#search_filters input[data-search-url]', function (event) {
    prestashop.emit('updateFacets', parseSearchUrl(event));
  });

  $('body').on('click', '.js-search-filters-clear-all', function (event) {
    prestashop.emit('updateFacets', parseSearchUrl(event));
  });

  $('body').on('click', '.js-search-link', function (event) {
    event.preventDefault();
    prestashop.emit('updateFacets', $(event.target).closest('a').get(0).href);
  });

  $('body').on('change', '#search_filters select', function (event) {
    const form = $(event.target).closest('form');
    prestashop.emit('updateFacets', '?' + form.serialize());
  });

  prestashop.on('updateProductList', (data) => {
    updateProductListDOM(data);
    updateCounters();
    hideProds();
    showProds();
  });

  // Grid - list

  $('.show_list').click(function(){
      document.cookie = "show_list=true; expires=Thu, 30 Jan 2100 12:00:00 UTC; path=/";
      $('#main #js-product-list .product-item').addClass('product_show_list');
      $(this).addClass('active');
      $('.show_grid').removeClass('active');
      hideProds();
      showProds();
  });

  $('.show_grid').click(function(){
      document.cookie = "show_list=; expires=Thu, 30 Jan 1970 12:00:00 UTC; path=/";
      $('#main #js-product-list .product-item').removeClass('product_show_list');
      $(this).addClass('active');
      $('.show_list').removeClass('active');
      hideProds();
      showProds();
  });

  prestashop.on('updateProductList', function (event) {
      $('.show_list').click(function(){
          $('#main #js-product-list .product-item').addClass('product_show_list');
          $(this).addClass('active');
          $('.show_grid').removeClass('active');
          hideProds();
          showProds();
      });

      $('.show_grid').click(function(){
          $('#main #js-product-list .product-item').removeClass('product_show_list');
          $(this).addClass('active');
          $('.show_list').removeClass('active');
          hideProds();
          showProds();
      });
  });

  // roythemes show prods

  function showProds() {
    $('#products #js-product-list').find('.products > .product-item').each(function(i){
      var row = $(this);
      setTimeout(function(){
        row.addClass('show');
      }, 360 + i * 140);
    });
  }
  showProds();

  function hideProds() {
    $('#products #js-product-list').find('.products > .product-item').each(function(i){
      $(this).removeClass('show')
    });
  }

  // modez fastview

  class Details {
      constructor() {
          this.DOM = {};

          const detailsTmpl = `
          <div class="details__bg details__bg--up"></div>
          <div class="details__bg details__bg--down"></div>
          <div class="details__close"></div>
          <img class="details__img" src="" alt="img 01"/>
          <h2 class="details__title"></h2>
          <div class="details__price"></div>
          <p class="details__description"></p>
          <button class="details__addtocart">Add to cart</button>
          <button class="details__magnifier"><svg class="icon icon--magnifier"><use xlink:href="#icon-magnifier"></use></svg></button>
          `;

          this.DOM.details = document.createElement('div');
          this.DOM.details.className = 'details';
          this.DOM.details.innerHTML = detailsTmpl;
          DOM.content.appendChild(this.DOM.details);
          this.init();
      }
      init() {
          this.DOM.bgUp = this.DOM.details.querySelector('.details__bg--up');
          this.DOM.bgDown = this.DOM.details.querySelector('.details__bg--down');
          this.DOM.img = this.DOM.details.querySelector('.details__img');
          this.DOM.title = this.DOM.details.querySelector('.details__title');
          this.DOM.price = this.DOM.details.querySelector('.details__price');
          this.DOM.description = this.DOM.details.querySelector('.details__description');
          this.DOM.cart = this.DOM.details.querySelector('.details__addtocart');
          this.DOM.close = this.DOM.details.querySelector('.details__close');
          this.DOM.magnifier = this.DOM.details.querySelector('.details__magnifier');

          this.initEvents();
      }
      initEvents() {
          this.DOM.close.addEventListener('click', () => this.isZoomed ? this.zoomOut() : this.close());
          this.DOM.magnifier.addEventListener('click', () => this.zoomIn());
      }
      fill(info) {
          this.DOM.img.src = info.img;
          this.DOM.title.innerHTML = info.title;
          this.DOM.price.innerHTML = info.price;
          this.DOM.description.innerHTML = info.description;
      }
      getProductDetailsRect() {
          return {
              productBgRect: this.DOM.productBg.getBoundingClientRect(),
              detailsBgRect: this.DOM.bgDown.getBoundingClientRect(),
              productImgRect: this.DOM.productImg.getBoundingClientRect(),
              detailsImgRect: this.DOM.img.getBoundingClientRect()
          };
      }
      open(data) {
          if ( this.isAnimating ) return false;
          this.isAnimating = true;

          this.DOM.details.classList.add('details--open');

          this.DOM.productBg = data.productBg;
          this.DOM.productImg = data.productImg;

          this.DOM.productBg.style.opacity = 0;
          this.DOM.productImg.style.opacity = 0;

          const rect = this.getProductDetailsRect();

          this.DOM.bgDown.style.transform = `translateX(${rect.productBgRect.left-rect.detailsBgRect.left}px) translateY(${rect.productBgRect.top-rect.detailsBgRect.top}px) scaleX(${rect.productBgRect.width/rect.detailsBgRect.width}) scaleY(${rect.productBgRect.height/rect.detailsBgRect.height})`;
          this.DOM.bgDown.style.opacity = 1;

          this.DOM.img.style.transform = `translateX(${rect.productImgRect.left-rect.detailsImgRect.left}px) translateY(${rect.productImgRect.top-rect.detailsImgRect.top}px) scaleX(${rect.productImgRect.width/rect.detailsImgRect.width}) scaleY(${rect.productImgRect.height/rect.detailsImgRect.height})`;
          this.DOM.img.style.opacity = 1;

          anime({
              targets: [this.DOM.bgDown,this.DOM.img],
              duration: (target, index) => index ? 800 : 250,
              easing: (target, index) => index ? 'easeOutElastic' : 'easeOutSine',
              elasticity: 250,
              translateX: 0,
              translateY: 0,
              scaleX: 1,
              scaleY: 1,
              complete: () => this.isAnimating = false
          });

          anime({
              targets: [this.DOM.title, this.DOM.price, this.DOM.description, this.DOM.cart, this.DOM.magnifier],
              duration: 600,
              easing: 'easeOutExpo',
              delay: (target, index) => {
                  return index*60;
              },
              translateY: (target, index, total) => {
                  return index !== total - 1 ? [50,0] : 0;
              },
              scale:  (target, index, total) => {
                  return index === total - 1 ? [0,1] : 1;
              },
              opacity: 1
          });

          anime({
              targets: this.DOM.bgUp,
              duration: 100,
              easing: 'linear',
              opacity: 0.8
          });

          anime({
              targets: this.DOM.close,
              duration: 250,
              easing: 'easeOutSine',
              translateY: ['100%',0],
              opacity: 1
          });

      }
      close() {
          if ( this.isAnimating ) return false;
          this.isAnimating = true;

          this.DOM.details.classList.remove('details--open');


          anime({
              targets: this.DOM.close,
              duration: 250,
              easing: 'easeOutSine',
              translateY: '100%',
              opacity: 0
          });

          anime({
              targets: this.DOM.bgUp,
              duration: 100,
              easing: 'linear',
              opacity: 0
          });

          anime({
              targets: [this.DOM.title, this.DOM.price, this.DOM.description, this.DOM.cart, this.DOM.magnifier],
              duration: 20,
              easing: 'linear',
              opacity: 0
          });

          const rect = this.getProductDetailsRect();
          anime({
              targets: [this.DOM.bgDown,this.DOM.img],
              duration: 250,
              easing: 'easeOutSine',
              translateX: (target, index) => {
                  return index ? rect.productImgRect.left-rect.detailsImgRect.left : rect.productBgRect.left-rect.detailsBgRect.left;
              },
              translateY: (target, index) => {
                  return index ? rect.productImgRect.top-rect.detailsImgRect.top : rect.productBgRect.top-rect.detailsBgRect.top;
              },
              scaleX: (target, index) => {
                  return index ? rect.productImgRect.width/rect.detailsImgRect.width : rect.productBgRect.width/rect.detailsBgRect.width;
              },
              scaleY: (target, index) => {
                  return index ? rect.productImgRect.height/rect.detailsImgRect.height : rect.productBgRect.height/rect.detailsBgRect.height;
              },
              complete: () => {
                  this.DOM.bgDown.style.opacity = 0;
                  this.DOM.img.style.opacity = 0;
                  this.DOM.bgDown.style.transform = 'none';
                  this.DOM.img.style.transform = 'none';
                  this.DOM.productBg.style.opacity = 1;
                  this.DOM.productImg.style.opacity = 1;
                  this.isAnimating = false;
              }
          });
      }
      zoomIn() {
          this.isZoomed = true;

          anime({
              targets: [this.DOM.title, this.DOM.price, this.DOM.description, this.DOM.cart, this.DOM.magnifier],
              duration: 100,
              easing: 'easeOutSine',
              translateY: (target, index, total) => {
                  return index !== total - 1 ? [0, index === 0 || index === 1 ? -50 : 50] : 0;
              },
              scale:  (target, index, total) => {
                  return index === total - 1 ? [1,0] : 1;
              },
              opacity: 0
          });

          const imgrect = this.DOM.img.getBoundingClientRect();
          const win = {w: window.innerWidth, h: window.innerHeight};

          const imgAnimeOpts = {
              targets: this.DOM.img,
              duration: 250,
              easing: 'easeOutCubic',
              translateX: win.w/2 - (imgrect.left+imgrect.width/2),
              translateY: win.h/2 - (imgrect.top+imgrect.height/2)
          };

          if ( win.w > 0.8*win.h ) {
              this.DOM.img.style.transformOrigin = '50% 50%';
              Object.assign(imgAnimeOpts, {
                  scaleX: 0.95*win.w/parseInt(0.8*win.h),
                  scaleY: 0.95*win.w/parseInt(0.8*win.h),
                  rotate: 90
              });
          }
          anime(imgAnimeOpts);

          anime({
              targets: this.DOM.close,
              duration: 250,
              easing: 'easeInOutCubic',
              scale: 1.8,
              rotate: 180
          });
      }
      zoomOut() {
          this.isZoomed = false;

          anime({
              targets: [this.DOM.title, this.DOM.price, this.DOM.description, this.DOM.cart, this.DOM.magnifier],
              duration: 250,
              easing: 'easeOutCubic',
              translateY: 0,
              scale: 1,
              opacity: 1
          });

          anime({
              targets: this.DOM.img,
              duration: 250,
              easing: 'easeOutCubic',
              translateX: 0,
              translateY: 0,
              scaleX: 1,
              scaleY: 1,
              rotate: 0,
              complete: () => this.DOM.img.style.transformOrigin = '0 0'
          });

          anime({
              targets: this.DOM.close,
              duration: 250,
              easing: 'easeInOutCubic',
              scale: 1,
              rotate: 0
          });
      }
  };

  class Item {
	constructor(el) {
		this.DOM = {};
          this.DOM.el = el;
          this.DOM.product = this.DOM.el.querySelector('.thumbnail-container');
          this.DOM.productBg = this.DOM.product.querySelector('.product-description');
          this.DOM.productImg = this.DOM.product.querySelector('.product-image img');
          this.DOM.fw = this.DOM.product.querySelector('.fast-view');

          this.info = {
              img: this.DOM.productImg.src,
              title: this.DOM.product.querySelector('.product-title').innerHTML,
              description: this.DOM.product.querySelector('.prod-short-desc').innerHTML,
              price: this.DOM.product.querySelector('.product-price-and-shipping').innerHTML
          };

		this.initEvents();
	}
      initEvents() {
          console.log(this.DOM.fw);
          this.DOM.fw.addEventListener('click', () => this.open());
      }
      open() {
          DOM.details.fill(this.info);
          DOM.details.open({
              productBg: this.DOM.productBg,
              productImg: this.DOM.productImg
          });
      }
  };

  if ( $('product-item ').length){
    const DOM = {};
    DOM.grid = document.querySelector('#main .products');
    DOM.content = DOM.grid.parentNode;
    DOM.gridItems = Array.from(DOM.grid.querySelectorAll('.product-item'));
    let items = [];
    DOM.gridItems.forEach(item => items.push(new Item(item)));

    DOM.details = new Details();
 }

});

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

function updateProductListDOM (data) {
  $('#search_filters').replaceWith(data.rendered_facets);
  $('#js-active-search-filters').replaceWith(data.rendered_active_filters);
  $('#js-product-list-top').replaceWith(data.rendered_products_top);
  $('#js-product-list').replaceWith(data.rendered_products);
  $('#js-product-list-bottom').replaceWith(data.rendered_products_bottom);

  let productMinitature = new ProductMinitature();
  productMinitature.init();

}
