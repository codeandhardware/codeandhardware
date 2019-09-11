webpackHotUpdate(0,[
/* 0 */,
/* 1 */,
/* 2 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = getBody;
function getBody() {
  var doc = document,
      body = doc.body;

  if (!body) {
    body = doc.createElement('body');
    body.fake = true;
  }

  return body;
}

/***/ }),
/* 3 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = setFakeBody;
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__docElement_js__ = __webpack_require__(15);


function setFakeBody(body) {
  var docOverflow = '';
  if (body.fake) {
    docOverflow = __WEBPACK_IMPORTED_MODULE_0__docElement_js__["a" /* docElement */].style.overflow;
    //avoid crashing IE8, if background image is used
    body.style.background = '';
    //Safari 5.13/5.1.4 OSX stops loading if ::-webkit-scrollbar is used and scrollbars are visible
    body.style.overflow = __WEBPACK_IMPORTED_MODULE_0__docElement_js__["a" /* docElement */].style.overflow = 'hidden';
    __WEBPACK_IMPORTED_MODULE_0__docElement_js__["a" /* docElement */].appendChild(body);
  }

  return docOverflow;
}

/***/ }),
/* 4 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = resetFakeBody;
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__docElement_js__ = __webpack_require__(15);


function resetFakeBody(body, docOverflow) {
  if (body.fake) {
    body.remove();
    __WEBPACK_IMPORTED_MODULE_0__docElement_js__["a" /* docElement */].style.overflow = docOverflow;
    // Trigger layout so kinetic scrolling isn't disabled in iOS6+
    // eslint-disable-next-line
    __WEBPACK_IMPORTED_MODULE_0__docElement_js__["a" /* docElement */].offsetHeight;
  }
}

/***/ }),
/* 5 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return raf; });
var win = window;

var raf = win.requestAnimationFrame || win.webkitRequestAnimationFrame || win.mozRequestAnimationFrame || win.msRequestAnimationFrame || function (cb) {
  return setTimeout(cb, 16);
};

/***/ }),
/* 6 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "b", function() { return hasClass; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__classListSupport_js__ = __webpack_require__(63);
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return __WEBPACK_IMPORTED_MODULE_0__classListSupport_js__["a"]; });


var hasClass = __WEBPACK_IMPORTED_MODULE_0__classListSupport_js__["a" /* classListSupport */] ? function (el, str) {
    return el.classList.contains(str);
} : function (el, str) {
    return el.className.indexOf(str) >= 0;
};



/***/ }),
/* 7 */,
/* 8 */,
/* 9 */,
/* 10 */,
/* 11 */,
/* 12 */,
/* 13 */,
/* 14 */,
/* 15 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return docElement; });
var docElement = document.documentElement;

/***/ }),
/* 16 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = isNodeList;
function isNodeList(el) {
  // Only NodeList has the "item()" function
  return typeof el.item !== "undefined";
}

/***/ }),
/* 17 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return passiveOption; });
// Test via a getter in the options object to see if the passive property is accessed
var supportsPassive = false;
try {
  var opts = Object.defineProperty({}, 'passive', {
    get: function () {
      supportsPassive = true;
    }
  });
  window.addEventListener("test", null, opts);
} catch (e) {}
var passiveOption = supportsPassive ? { passive: true } : false;

/***/ }),
/* 18 */,
/* 19 */,
/* 20 */,
/* 21 */,
/* 22 */,
/* 23 */,
/* 24 */,
/* 25 */,
/* 26 */,
/* 27 */,
/* 28 */,
/* 29 */,
/* 30 */,
/* 31 */,
/* 32 */,
/* 33 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_expose_loader_Tether_tether__ = __webpack_require__(34);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_expose_loader_Tether_tether___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_expose_loader_Tether_tether__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_bootstrap_dist_js_bootstrap_min__ = __webpack_require__(36);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_bootstrap_dist_js_bootstrap_min___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1_bootstrap_dist_js_bootstrap_min__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_flexibility__ = __webpack_require__(37);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2_flexibility___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2_flexibility__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3_bootstrap_touchspin__ = __webpack_require__(38);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3_bootstrap_touchspin___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_3_bootstrap_touchspin__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__responsive__ = __webpack_require__(39);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__checkout__ = __webpack_require__(40);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__customer__ = __webpack_require__(41);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_7__listing__ = __webpack_require__(42);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_8__product__ = __webpack_require__(43);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_9__cart__ = __webpack_require__(44);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_10__rts_icons__ = __webpack_require__(45);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_11__sliders__ = __webpack_require__(46);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_12__county__ = __webpack_require__(81);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_13__components_drop_down__ = __webpack_require__(18);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_14__components_form__ = __webpack_require__(82);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_15__components_product_miniature__ = __webpack_require__(14);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_16__components_product_select__ = __webpack_require__(83);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_17__components_top_menu__ = __webpack_require__(84);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_18_prestashop__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_18_prestashop___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_18_prestashop__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_19_events__ = __webpack_require__(10);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_19_events___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_19_events__);
throw new Error("Cannot find module \"./node_modules/tiny-slider/src/tiny-slider\"");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_21__lib_bootstrap_filestyle_min__ = __webpack_require__(85);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_21__lib_bootstrap_filestyle_min___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_21__lib_bootstrap_filestyle_min__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_22__lib_jquery_scrollbox_min__ = __webpack_require__(86);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_22__lib_jquery_scrollbox_min___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_22__lib_jquery_scrollbox_min__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_23__lib_jquery_sticky_kit_min_js__ = __webpack_require__(87);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_23__lib_jquery_sticky_kit_min_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_23__lib_jquery_sticky_kit_min_js__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_24__lib_animsition_min__ = __webpack_require__(88);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_24__lib_animsition_min___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_24__lib_animsition_min__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_25__components_block_cart__ = __webpack_require__(89);
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
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
































// "inherit" EventEmitter
for (var i in __WEBPACK_IMPORTED_MODULE_19_events___default.a.prototype) {
  __WEBPACK_IMPORTED_MODULE_18_prestashop___default.a[i] = __WEBPACK_IMPORTED_MODULE_19_events___default.a.prototype[i];
}

$(document).ready(() => {
  let dropDownEl = $('.js-dropdown');
  const form = new __WEBPACK_IMPORTED_MODULE_14__components_form__["a" /* default */]();
  let topMenuEl = $('.js-top-menu ul[data-depth="0"]');
  let dropDown = new __WEBPACK_IMPORTED_MODULE_13__components_drop_down__["a" /* default */](dropDownEl);
  let topMenu = new __WEBPACK_IMPORTED_MODULE_17__components_top_menu__["a" /* default */](topMenuEl);
  let productMinitature = new __WEBPACK_IMPORTED_MODULE_15__components_product_miniature__["a" /* default */]();
  let productSelect = new __WEBPACK_IMPORTED_MODULE_16__components_product_select__["a" /* default */]();
  dropDown.init();
  form.init();
  topMenu.init();
  productMinitature.init();
  productSelect.init();

  $('.form-control-select').change(function () {
    this.blur();
  });

  if ($('.page-footer').children().length == 0) {
    $('.page-footer').addClass('hidden');
  }

  // Sticky header
  if ($('#header').attr('data-trans') == 'normal') {
    setTimeout(function () {
      var header_height = $('#header').height();
      $('main').css('padding-top', header_height);
    }, 250);
    var sticky_classes = 'sticky';
  } else {
    var sticky_classes = 'sticky normal';
    var header_height = $('#header').height();
    $('#top_column').css('min-height', header_height);
  }

  var sticky = function () {
    $('#header').addClass(sticky_classes);
  };

  var stickyfrom = 0;

  if ($(window).scrollTop() > stickyfrom) sticky();
  if (window.matchMedia('(max-width: 991px)').matches) sticky();

  $(window).scroll(function () {
    if ($(this).scrollTop() > stickyfrom) {
      sticky();
    } else {
      if (window.matchMedia('(min-width: 992px)').matches) {
        $('#header').removeClass(sticky_classes);
      }
    }
  });

  $(window).on('resize', function () {
    if (window.matchMedia('(max-width: 991px)').matches) {
      sticky();
    } else {
      if ($(this).scrollTop() == stickyfrom) {
        $('#header').removeClass(sticky_classes);
      }
    }
  });

  // Hide header on scroll
  if ($('#header').attr('data-hide') == 'yes') {

    var didScroll;
    var lastScrollTop = 500;
    var delta = 5;

    $(window).scroll(function (event) {
      didScroll = true;
    });

    setInterval(function () {
      if (didScroll) {
        hasScrolled();
        didScroll = false;
      }
    }, 250);

    function hasScrolled() {
      var st = $(window).scrollTop();
      if (Math.abs(lastScrollTop - st) <= delta) return;

      if (st > lastScrollTop && st > 500) {
        // Scroll Down
        $('#header').addClass('hide_up');
      } else {
        // Scroll Up
        if (st + $(window).height() < $(document).height()) {
          $('#header').removeClass('hide_up');
        }
      }
      lastScrollTop = st;
    }
  }

  // page reload
  $(".animsition").animsition({
    inClass: 'fade-in-down-sm',
    outClass: 'fade-out-up-sm',
    inDuration: 600,
    outDuration: 600,
    linkElement: 'a:not([target="_blank"]):not([href^="#"]):not(.cart_nogo)',
    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
    loading: false,
    loadingParentElement: 'body', //animsition wrapper element
    loadingClass: 'animsition-loading',
    loadingInner: '', // e.g '<img src="loading.svg" />'
    timeout: true,
    timeoutCountdown: 300,
    onLoadEvent: true,
    browser: ['animation-duration', '-webkit-animation-duration'],
    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    overlay: false,
    overlayClass: 'animsition-overlay-slide',
    overlayParentElement: 'body',
    transition: function (url) {
      window.location.href = url;
    }
  });

  $('.animsition').on('animsition.outStart', function () {
    var exitDiv = $('.roy-loader');
    exitDiv.fadeIn('slow');
  });
  $('.animsition').on('animsition.inStart', function () {
    var exitDiv = $('.roy-loader');
    exitDiv.fadeOut(400);
  });

  // side
  // side: reopen function for mobile and open for desktop
  var reopen = function () {
    if ($('body').hasClass('side_open')) {

      $('body').removeClass('side_content');
      $('.side_menu').removeClass('reopen_go').addClass('reopen_hide');
      setTimeout(function () {
        $('body').addClass('side_content');
      }, 320);
      setTimeout(function () {
        $('.side_menu').removeClass('reopen_hide').addClass('reopen_go');
      }, 600);
    } else {
      $('body').addClass('side_open side_content was_open');
    }
  };

  var searchtoside = function () {
    $('.action .search-widget').attr("id", "");
    $('.side_menu .search-widget').attr("id", "search_widget");
  };

  searchtoside();

  // side: close
  $('.side_close, .close_cross, .return').click(function () {
    $('body').removeClass('side_open side_content');
    cartprodshide();
    accsidehide();
    setTimeout(function () {
      $('body').removeClass('was_open');
    }, 440);
  });

  var cartprodshide = function () {
    $('.side_menu').find('.cart-prods > li').each(function (i) {
      $(this).removeClass('show');
    });
  };
  var cartprodsshow = function () {
    $('.side_menu').find('.cart-prods > li').each(function (i) {
      var row = $(this);
      setTimeout(function () {
        row.addClass('show');
      }, 300 + i * 220);
    });
  };
  var accsidehide = function () {
    $('.side_menu').find('.acc_ul > *').each(function (i) {
      $(this).removeClass('show');
    });
  };
  var accsideshow = function () {
    $('.side_menu').find('.acc_ul > *').each(function (i) {
      var row = $(this);
      setTimeout(function () {
        row.addClass('show');
      }, 300 + i * 120);
    });
  };
  var scrollsidetop = function () {
    setTimeout(function () {
      $('html, body').animate({
        scrollTop: $(".side_menu").offset().top
      }, 1000);
    }, 980);
  };

  // action on click
  var sm = $('.side_menu');
  var aoc_m = sm.attr('data-menu'),
      aoc_s = sm.attr('data-search'),
      aoc_c = sm.attr('data-cart'),
      aoc_a = sm.attr('data-acc');

  $('.menu_top').hover(function () {
    $('body').removeClass('side_lay1 side_lay2 side_lay3').addClass('side_lay' + aoc_m);
  });
  $('.search-widget').hover(function () {
    $('body').removeClass('side_lay1 side_lay2 side_lay3').addClass('side_lay' + aoc_s);
  });
  $('.cart_widget').hover(function () {
    $('body').removeClass('side_lay1 side_lay2 side_lay3').addClass('side_lay' + aoc_c);
  });
  $('.acc_top').hover(function () {
    $('body').removeClass('side_lay1 side_lay2 side_lay3').addClass('side_lay' + aoc_a);
  });

  // side: open, levibox clicks
  var cart_click = function (e) {
    e.preventDefault();
    accsidehide();
    reopen();
    $('.side_menu .side_menu_rel > div').removeClass('show');
    $('#side_cart_wrap').addClass('show');
    $('.side_close').removeClass('search_close menu_close acc_close').addClass('cart_close');
    $('.side_close i').toggleClass('rotateit');
    if ($('.side_menu').hasClass('reopen_hide')) {
      setTimeout(function () {
        cartprodsshow();
      }, 320);
    } else {
      cartprodsshow();
    }
  };
  var search_click = function (e) {
    e.preventDefault();
    accsidehide();
    cartprodshide();
    $('.side_menu').removeClass('side_lay1 side_lay2 side_lay3').addClass('side_lay' + aoc_s);
    reopen();
    searchtoside();
    $('.side_menu .side_menu_rel > div').removeClass('show');
    $('#side_search_wrap').addClass('show');

    $('.side_close').removeClass('cart_close menu_close acc_close').addClass('search_close');
    $('.side_close i').toggleClass('rotateit');

    setTimeout(function () {
      $('.side_menu .search-widget form input[type=text]').focus();
    }, 1000);
  };
  var menu_click = function (e) {
    e.preventDefault();
    accsidehide();
    cartprodshide();
    $('.side_menu').removeClass('side_lay1 side_lay2 side_lay3').addClass('side_lay' + aoc_m);
    reopen();
    $('.side_menu .side_menu_rel > div').removeClass('show');
    $('#side_menu_wrap').addClass('show');
    $('.side_close').removeClass('cart_close search_close acc_close').addClass('menu_close');
    $('.side_close i').toggleClass('rotateit');
  };
  var acc_click = function (e) {
    e.preventDefault();
    cartprodshide();
    $('.side_menu').removeClass('side_lay1 side_lay2 side_lay3').addClass('side_lay' + aoc_a);
    reopen();
    $('.side_menu .side_menu_rel > div').removeClass('show');
    $('#side_acc_wrap').addClass('show');
    $('.side_close').removeClass('cart_close search_close menu_close').addClass('acc_close');
    $('.side_close i').toggleClass('rotateit');
    if ($('.side_menu').hasClass('reopen_hide')) {
      setTimeout(function () {
        accsideshow();
      }, 320);
    } else {
      accsideshow();
    }
  };

  $('.box-cart').off("click", cart_click).on("click", cart_click);
  $('.box-search').off("click", search_click).on("click", search_click);
  $('.box-menu').off("click", menu_click).on("click", menu_click);
  $('.box-acc').off("click", acc_click).on("click", acc_click);

  $('#header .row.action .blockcart a.cart_nogo').off("click", cart_click).on("click", cart_click);
  $('#header .row.action .search_nogo').off("click", search_click).on("click", search_click);

  // mobile - desktop swittch
  if ($('#is_media').css('float') == 'left') {

    $('body').addClass('mob_enabled');
  } else {
    $('body').removeClass('mob_enabled');
    $('body').removeClass('side_open side_content');
  }

  $(window).on('resize', function () {
    if ($('#is_media').css('float') == 'left') {
      $('body').addClass('mob_enabled');
    } else {
      // $('body').removeClass('mob_enabled');
      // $('body').removeClass('side_open side_content');
    }
  });
});

// special label height
$(window).load(function () {

  var specialbtn = $('#roy_specials_col .product-item .discount-product');
  var specialtimer = $('#roy_specials_col .product-item .count_icon');
  var pimg = $('#roy_specials_col .product-item .product-image');
  var pimgheight = pimg.height();
  specialbtn.css('top', pimgheight);
  specialtimer.css('top', pimgheight);
});

// tooltip
var $uiEl = $('.tip_inside');
$('body').append('<div id="ui_tip"><div class="ui_wrapper"><span class="ui_title"></span></div></div>');
var $uiTip = $('#ui_tip');
var $uiTipTitle = $uiTip.find('.ui_title');

$uiEl.on('mousemove', function (e) {
  $uiTip.css({
    top: e.clientY,
    left: e.clientX
  });

  var winwidth = $(window).width(),
      tipwidth = $('#ui_tip').width(),
      tiprightdot = e.clientX + tipwidth + 14 + 40; // plus 40 padding compensation

  if (tiprightdot > winwidth) {
    $('#ui_tip').addClass('align-right');
  } else {
    $('#ui_tip').removeClass('align-right');
  }
});

$uiEl.on('mouseover', function (e) {
  $uiTipTitle.text($(this).find('.tip').text());
  setTimeout(function () {
    $uiTip.addClass('active');
  }, 10);
}).on('mouseout', function (e) {
  $uiTip.removeClass('active');
});

// product 3rd lay
$('body').append('<div id="ui_prod"><div class="ui_wrapper"><span class="ui_name"><span></span></span><div><span class="ui_price"></span></div></div></div>');
var $uiProd = $('article.pl_lay3'),
    $uiProdTip = $('#ui_prod'),
    $uiProdName = $uiProdTip.find('.ui_name > span'),
    $uiProdPrice = $uiProdTip.find('.ui_price');

$uiProd.on('mousemove', function (e) {
  $uiProdTip.css({
    top: e.clientY,
    left: e.clientX
  });
  var winwidth = $(window).width(),
      tipwidth = $('#ui_prod').width(),
      tiprightdot = e.clientX + tipwidth + 54;
  if (tiprightdot > winwidth) {
    $('#ui_prod').addClass('align-right');
  } else {
    $('#ui_prod').removeClass('align-right');
  }
});

$uiProd.find('.product-thumbnail').on('mouseover', function (e) {

  $uiProdName.text($(this).closest('article').find('.product-title').text());
  $uiProdPrice.html($(this).closest('article').find('.product-price-and-shipping').html());
  setTimeout(function () {
    $uiProdTip.addClass('active');
  }, 10);

  $(this).closest('article').find('.tip_inside').on('mouseover', function (e) {
    console.log('inner');
    $uiProdTip.removeClass('active');
  }).on('mouseout', function (e) {
    $uiProdTip.addClass('active');
  });
}).on('mouseleave', function (e) {
  $uiProdTip.removeClass('active');
});

// Roy Countdowns
$(document).ready(function ($) {
  $(".roycount").each(function (e) {
    var $roycount = $(this);
    var $dataspecificpriceto = $roycount.attr('data-specific-price-to');
    $roycount.closest('.roycountdown').county({
      endDateTime: new Date($dataspecificpriceto.replace(/-/g, "/")), reflection: false, animation: 'none', theme: 'black',
      titleDays: $roycount.data('days'), titleHours: $roycount.data('hours'), titleMinutes: $roycount.data('minutes'), titleSeconds: $roycount.data('seconds')
    });
  });
});

// Youtube responsive
$(function () {

  var $allVideos = $(".page-cms iframe[src^='//player.vimeo.com'], .page-cms iframe[src^='https://player.vimeo.com'], .page-cms iframe[src^='//www.youtube.com'], .page-cms iframe[src^='https://www.youtube.com'], .page-cms iframe[src^='http://www.youtube.com'], .page-cms object, .page-cms embed"),
      $allVideosPPS = $("#short_description_content iframe[src^='//player.vimeo.com'], #short_description_content iframe[src^='https://player.vimeo.com'], #short_description_content iframe[src^='//www.youtube.com'], #short_description_content iframe[src^='https://www.youtube.com'], #short_description_content iframe[src^='http://www.youtube.com'], #short_description_content object, #short_description_content embed"),
      $fluidElPPS = $("#short_description_content"),
      $allVideosPPF = $("#idTab1 iframe[src^='//player.vimeo.com'], #idTab1 iframe[src^='https://player.vimeo.com'], #idTab1 iframe[src^='//www.youtube.com'], #idTab1 iframe[src^='https://www.youtube.com'], #idTab1 iframe[src^='http://www.youtube.com'], #idTab1 object, #idTab1 embed"),
      $fluidElPPF = $("#idTab1"),
      $allVideosB = $("#module-smartblog-details iframe[src^='//player.vimeo.com'], #module-smartblog-details iframe[src^='https://player.vimeo.com'], #module-smartblog-details iframe[src^='//www.youtube.com'], #module-smartblog-details iframe[src^='https://www.youtube.com'], #module-smartblog-details iframe[src^='http://www.youtube.com'], #module-smartblog-details object, #module-smartblog-details embed"),
      $fluidElB = $("#module-smartblog-details #content"),
      $allVideosRC = $(".video_banner iframe[src^='//player.vimeo.com'], .video_banner iframe[src^='https://player.vimeo.com'], .video_banner iframe[src^='//www.youtube.com'], .video_banner iframe[src^='https://www.youtube.com'], .video_banner iframe[src^='http://www.youtube.com'], .video_banner object, .video_banner embed");

  $allVideos.each(function () {

    $(this)
    // jQuery .data does not work on object/embed elements
    .attr('data-aspectRatio', this.height / this.width).removeAttr('height').removeAttr('width');
  });

  $(window).resize(function () {

    var newWidthPPS = $fluidElPPS.width();
    var newWidthPPF = $fluidElPPF.width();
    var newWidthB = $fluidElB.width();

    $allVideos.each(function () {

      var $el = $(this);
      var $fluidEl = $el.parent();
      var newWidth = $fluidEl.width();
      $el.width(newWidth).height(newWidth * $el.attr('data-aspectRatio'));
    });

    $allVideosB.each(function () {
      var $el = $(this);
      $el.width(newWidthB).height(newWidthB * $el.attr('data-aspectRatio'));
    });
    $allVideosPPS.each(function () {
      var $el = $(this);
      $el.width(newWidthPPS).height(newWidthPPS * $el.attr('data-aspectRatio'));
    });
    $allVideosPPF.each(function () {
      var $el = $(this);
      $el.width(newWidthPPF).height(newWidthPPF * $el.attr('data-aspectRatio'));
    });
    $allVideosRC.each(function () {

      var $el = $(this);
      var $fluidElRC = $el.closest('.video_banner');
      var newWidthRC = $fluidElRC.width();
      $el.width(newWidthRC).height(newWidthRC * $el.attr('data-aspectRatio'));
    });
  }).resize();
});

/***/ }),
/* 34 */,
/* 35 */,
/* 36 */,
/* 37 */,
/* 38 */,
/* 39 */,
/* 40 */,
/* 41 */,
/* 42 */,
/* 43 */,
/* 44 */,
/* 45 */,
/* 46 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_jquery__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_jquery___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_jquery__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__node_modules_tiny_slider_src_tiny_slider__ = __webpack_require__(47);




// add carousel classes to products and wrapper
__WEBPACK_IMPORTED_MODULE_0_jquery___default()('#index #main .slider-on .products, #product .products, #roy_specials_col .products').addClass('owl-carousel');

__WEBPACK_IMPORTED_MODULE_0_jquery___default()(document).on('ready', function () {

  // Sliders configuration
  // var ulFeatured = $(".roy_featured"),
  //     autoFeatured = ulFeatured.attr('data-auto') === "true" ? true : false,
  //     maxslidesFeatured = parseInt(ulFeatured.attr('data-max-slides')),
  //     maxslidesFeaturedRes = 3,
  //     maxslidesFeaturedResSmall = 3,
  //     ulBest = $(".roy_best"),
  //     autoBest = ulBest.attr('data-auto') === "true" ? true : false,
  //     maxslidesBest = parseInt(ulBest.attr('data-max-slides')),
  //     maxslidesBestRes = 3,
  //     maxslidesBestResSmall = 3,
  //     ulNew = $(".roy_new"),
  //     autoNew = ulNew.attr('data-auto') === "true" ? true : false,
  //     maxslidesNew = parseInt(ulNew.attr('data-max-slides')),
  //     maxslidesNewRes = 3,
  //     maxslidesNewResSmall = 3,
  //     ulSale = $(".roy_specials"),
  //     autoSale = ulSale.attr('data-auto') === "true" ? true : false,
  //     maxslidesSale = parseInt(ulSale.attr('data-max-slides')),
  //     maxslidesSaleRes = 3,
  //     maxslidesSaleResSmall = 3,
  //     ulCustom1 = $(".roy_cc1"),
  //     autoCustom1 = ulCustom1.attr('data-auto') === "true" ? true : false,
  //     maxslidesCustom1 = parseInt(ulCustom1.attr('data-max-slides')),
  //     maxslidesCustom1Res = 3,
  //     maxslidesCustom1ResSmall = 3,
  //     ulCustom2 = $(".roy_cc2"),
  //     autoCustom2 = ulCustom2.attr('data-auto') === "true" ? true : false,
  //     maxslidesCustom2 = parseInt(ulCustom2.attr('data-max-slides')),
  //     maxslidesCustom2Res = 3,
  //     maxslidesCustom2ResSmall = 3,
  //     ulCustom3 = $(".roy_cc3"),
  //     autoCustom3 = ulCustom3.attr('data-auto') === "true" ? true : false,
  //     maxslidesCustom3 = parseInt(ulCustom3.attr('data-max-slides')),
  //     maxslidesCustom3Res = 3,
  //     maxslidesCustom3ResSmall = 3,
  //     ulBlogHome = $(".roy_blog"),
  //     maxslidesBlogHome = parseInt(ulBlogHome.attr('data-in-row')),
  //     ulBrands = $("#roy_brands"),
  //     maxslidesBrands = parseInt(ulBrands.attr('data-in-row')),
  //     maxslidesBrandsTablet = maxslidesBrands - 1,
  //     hpMobile = $(".page-home"),
  //     maxslideshpMobile = parseInt(hpMobile.attr('data-mob-row'))
  // ;
  //
  // if (maxslidesFeatured > 3) { maxslidesFeaturedRes = 4 } else if (maxslidesFeatured == 2) { maxslidesFeaturedRes = 2, maxslidesFeaturedResSmall = 2}
  // if (maxslidesBest > 3) { maxslidesBestRes = 4 } else if (maxslidesBest == 2) { maxslidesBestRes = 2, maxslidesBestResSmall = 2}
  // if (maxslidesNew > 3) { maxslidesNewRes = 4 } else if (maxslidesNew == 2) { maxslidesNewRes = 2, maxslidesNewResSmall = 2}
  // if (maxslidesSale > 3) { maxslidesSaleRes = 4 } else if (maxslidesSale == 2) { maxslidesSaleRes = 2, maxslidesSaleResSmall = 2}
  // if (maxslidesCustom1 > 3) { maxslidesCustom1Res = 4 } else if (maxslidesCustom1 == 2) { maxslidesCustom1Res = 2, maxslidesCustom1ResSmall = 2}
  // if (maxslidesCustom2 > 3) { maxslidesCustom2Res = 4 } else if (maxslidesCustom2 == 2) { maxslidesCustom2Res = 2, maxslidesCustom2ResSmall = 2}
  // if (maxslidesCustom3 > 3) { maxslidesCustom3Res = 4 } else if (maxslidesCustom3 == 2) { maxslidesCustom3Res = 2, maxslidesCustom3ResSmall = 2}
  //
  // // Home page products sliders
  // // Featured
  // $('#index #main .roy_featured.slider-on .products').owlCarousel({
  //     loop:false,
  //     margin:12,
  //     autoplay:autoFeatured,
  //     autoplayTimeout:7000,
  //     autoplayHoverPause:true,
  //     mouseDrag:true,
  //     touchDrag:true,
  //     navText:'  ',
  //     nav:true,
  //     navSpeed:400,
  //     autoplaySpeed:1100,
  //     dots:false,
  //     responsive:{
  //         0:{
  //             items:maxslideshpMobile,
  //             margin:12,
  //             nav:false
  //         },
  //         480:{
  //             items:maxslidesFeaturedResSmall,
  //             nav:false
  //         },
  //         768:{
  //             items:maxslidesFeaturedRes
  //         },
  //         992:{
  //             items:maxslidesFeatured
  //         }
  //     }
  // });
  // // Best
  // $('#index #main .roy_best.slider-on .products').owlCarousel({
  //     loop:false,
  //     margin:12,
  //     autoplay:autoBest,
  //     autoplayTimeout:7000,
  //     autoplayHoverPause:true,
  //     mouseDrag:true,
  //     touchDrag:true,
  //     navText:'  ',
  //     nav:true,
  //     navSpeed:400,
  //     autoplaySpeed:1100,
  //     dots:false,
  //     responsive:{
  //         0:{
  //             items:maxslideshpMobile,
  //             margin:12,
  //             nav:false
  //         },
  //         480:{
  //             items:maxslidesBestResSmall,
  //             nav:false
  //         },
  //         768:{
  //             items:maxslidesBestRes
  //         },
  //         992:{
  //             items:maxslidesBest
  //         }
  //     }
  // });
  // // New
  // $('#index #main .roy_new.slider-on .products').owlCarousel({
  //     loop:false,
  //     margin:12,
  //     autoplay:autoNew,
  //     autoplayTimeout:7000,
  //     autoplayHoverPause:true,
  //     mouseDrag:true,
  //     touchDrag:true,
  //     navText:'  ',
  //     nav:true,
  //     navSpeed:400,
  //     autoplaySpeed:1100,
  //     dots:false,
  //     responsive:{
  //         0:{
  //             items:maxslideshpMobile,
  //             margin:12,
  //             nav:false
  //         },
  //         480:{
  //             items:maxslidesNewResSmall,
  //             nav:false
  //         },
  //         768:{
  //             items:maxslidesNewRes
  //         },
  //         992:{
  //             items:maxslidesNew
  //         }
  //     }
  // });
  // // Sale/specials
  // $('#index #main .roy_specials.slider-on .products').owlCarousel({
  //     loop:false,
  //     margin:12,
  //     autoplay:autoSale,
  //     autoplayTimeout:7000,
  //     autoplayHoverPause:true,
  //     mouseDrag:true,
  //     touchDrag:true,
  //     navText:'  ',
  //     nav:true,
  //     navSpeed:400,
  //     autoplaySpeed:1100,
  //     dots:false,
  //     responsive:{
  //         0:{
  //             items:maxslideshpMobile,
  //             margin:12,
  //             nav:false
  //         },
  //         480:{
  //             items:maxslidesSaleResSmall,
  //             nav:false
  //         },
  //         768:{
  //             items:maxslidesSaleRes
  //         },
  //         992:{
  //             items:maxslidesSale
  //         }
  //     }
  // });
  // // CC1
  // $('#index #main .roy_cc1.slider-on .products').owlCarousel({
  //     loop:false,
  //     margin:12,
  //     autoplay:autoCustom1,
  //     autoplayTimeout:7000,
  //     autoplayHoverPause:true,
  //     mouseDrag:true,
  //     touchDrag:true,
  //     navText:'  ',
  //     nav:true,
  //     navSpeed:400,
  //     autoplaySpeed:1100,
  //     dots:false,
  //     responsive:{
  //         0:{
  //             items:maxslideshpMobile,
  //             margin:12,
  //             nav:false
  //         },
  //         480:{
  //             items:maxslidesCustom1ResSmall,
  //             nav:false
  //         },
  //         768:{
  //             items:maxslidesCustom1Res
  //         },
  //         992:{
  //             items:maxslidesCustom1
  //         }
  //     }
  // });
  // // CC2
  // $('#index #main .roy_cc2.slider-on .products').owlCarousel({
  //     loop:false,
  //     margin:12,
  //     autoplay:autoCustom2,
  //     autoplayTimeout:7000,
  //     autoplayHoverPause:true,
  //     mouseDrag:true,
  //     touchDrag:true,
  //     navText:'  ',
  //     nav:true,
  //     navSpeed:400,
  //     autoplaySpeed:1100,
  //     dots:false,
  //     responsive:{
  //         0:{
  //             items:maxslideshpMobile,
  //             margin:12,
  //             nav:false
  //         },
  //         480:{
  //             items:maxslidesCustom2ResSmall,
  //             nav:false
  //         },
  //         768:{
  //             items:maxslidesCustom2Res
  //         },
  //         992:{
  //             items:maxslidesCustom2
  //         }
  //     }
  // });
  // // CC3
  // $('#index #main .roy_cc3.slider-on .products').owlCarousel({
  //     loop:false,
  //     margin:12,
  //     autoplay:autoCustom3,
  //     autoplayTimeout:7000,
  //     autoplayHoverPause:true,
  //     mouseDrag:true,
  //     touchDrag:true,
  //     navText:'  ',
  //     nav:true,
  //     navSpeed:400,
  //     autoplaySpeed:1100,
  //     dots:false,
  //     responsive:{
  //         0:{
  //             items:maxslideshpMobile,
  //             margin:12,
  //             nav:false
  //         },
  //         480:{
  //             items:maxslidesCustom3ResSmall,
  //             nav:false
  //         },
  //         768:{
  //             items:maxslidesCustom3Res
  //         },
  //         992:{
  //             items:maxslidesCustom3
  //         }
  //     }
  // });
  //
  //
  // // Blog Latest posts slider
  // $('.sdsblog-box-content').owlCarousel({
  //   loop:false,
  //   margin:22,
  //   mouseDrag:true,
  //   touchDrag:true,
  //   navText:'  ',
  //   nav:true,
  //   navSpeed:400,
  //   dots:false,
  //   responsive:{
  //     0:{
  //       items:1,
  //       nav:false
  //     },
  //     480:{
  //       items:2,
  //       nav:false
  //     },
  //     992:{
  //       items:maxslidesBlogHome
  //     }
  //   }
  // });
  //
  // // Product page products sliders
  // $('#product .products').owlCarousel({
  //     loop:false,
  //     margin:12,
  //     autoplay:true,
  //     autoplayTimeout:7000,
  //     autoplayHoverPause:true,
  //     mouseDrag:true,
  //     touchDrag:true,
  //     navText:'  ',
  //     nav:true,
  //     navSpeed:400,
  //     autoplaySpeed:1100,
  //     dots:false,
  //     responsive:{
  //         0:{
  //             items:1,
  //             margin:13,
  //             nav:false
  //         },
  //         480:{
  //             items:2,
  //             nav:false
  //         },
  //         768:{
  //             items:2
  //         },
  //         992:{
  //             items:4
  //         }
  //     }
  // });
  //
  // // Specials column slider
  // $('#roy_specials_col .products').owlCarousel({
  //   items:1,
  //   loop:true,
  //   margin:28,
  //   autoplay:300,
  //   smartSpeed:300,
  //   slideSpeed: 300,
  //   autoplayTimeout:4000,
  //   autoplayHoverPause:true,
  //   mouseDrag:true,
  //   touchDrag:true,
  //   autoHeight : true,
  //   navText:' ',
  //   nav:true,
  //   navSpeed:400,
  //   autoplaySpeed:1100,
  //   dots:false
  // });
  //
  // // Brands slider
  // $('#roy_brands .roy_slider').owlCarousel({
  //   loop:false,
  //   margin:60,
  //   autoplay:true,
  //   autoplayTimeout:3400,
  //   autoplayHoverPause:true,
  //   mouseDrag:true,
  //   touchDrag:true,
  //   navText:'  ',
  //   nav:true,
  //   navSpeed:600,
  //   autoplaySpeed:600,
  //   dots:false,
  //   responsive:{
  //     0:{
  //       items:2,
  //       margin:15,
  //       nav:false
  //     },
  //     480:{
  //       items:3,
  //       nav:false
  //     },
  //     680:{
  //       items:maxslidesBrandsTablet
  //     },
  //     992:{
  //       items:maxslidesBrands
  //     }
  //   }
  // });
  //

});

/***/ }),
/* 47 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* unused harmony export tns */
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__helpers_raf_js__ = __webpack_require__(5);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__helpers_caf_js__ = __webpack_require__(48);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__helpers_extend_js__ = __webpack_require__(49);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__helpers_checkStorageValue_js__ = __webpack_require__(50);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__helpers_setLocalStorage_js__ = __webpack_require__(51);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__helpers_getSlideId_js__ = __webpack_require__(52);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__helpers_calc_js__ = __webpack_require__(53);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_7__helpers_percentageLayout_js__ = __webpack_require__(54);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_8__helpers_mediaquerySupport_js__ = __webpack_require__(55);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_9__helpers_createStyleSheet_js__ = __webpack_require__(56);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_10__helpers_addCSSRule_js__ = __webpack_require__(57);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_11__helpers_removeCSSRule_js__ = __webpack_require__(58);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_12__helpers_getCssRulesLength_js__ = __webpack_require__(59);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_13__helpers_toDegree_js__ = __webpack_require__(60);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_14__helpers_getTouchDirection_js__ = __webpack_require__(61);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_15__helpers_forEach_js__ = __webpack_require__(120);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_16__helpers_hasClass_js__ = __webpack_require__(6);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_17__helpers_addClass_js__ = __webpack_require__(64);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_18__helpers_removeClass_js__ = __webpack_require__(65);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_19__helpers_hasAttr_js__ = __webpack_require__(66);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_20__helpers_getAttr_js__ = __webpack_require__(67);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_21__helpers_setAttrs_js__ = __webpack_require__(68);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_22__helpers_removeAttrs_js__ = __webpack_require__(69);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_23__helpers_arrayFromNodeList_js__ = __webpack_require__(70);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_24__helpers_hideElement_js__ = __webpack_require__(71);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_25__helpers_showElement_js__ = __webpack_require__(72);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_26__helpers_isVisible_js__ = __webpack_require__(73);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_27__helpers_whichProperty_js__ = __webpack_require__(74);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_28__helpers_has3DTransforms_js__ = __webpack_require__(75);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_29__helpers_getEndProperty_js__ = __webpack_require__(76);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_30__helpers_addEvents_js__ = __webpack_require__(77);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_31__helpers_removeEvents_js__ = __webpack_require__(78);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_32__helpers_events_js__ = __webpack_require__(79);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_33__helpers_jsTransform_js__ = __webpack_require__(80);



































// polyfill
if (!Object.keys) {
  Object.keys = function (object) {
    var keys = [];
    for (var name in object) {
      if (Object.prototype.hasOwnProperty.call(object, name)) {
        keys.push(name);
      }
    }
    return keys;
  };
}
if (!("remove" in Element.prototype)) {
  Element.prototype.remove = function () {
    if (this.parentNode) {
      this.parentNode.removeChild(this);
    }
  };
}

var tns = function (options) {
  options = Object(__WEBPACK_IMPORTED_MODULE_2__helpers_extend_js__["a" /* extend */])({
    container: '.slider',
    mode: 'carousel',
    axis: 'horizontal',
    items: 1,
    gutter: 0,
    edgePadding: 0,
    fixedWidth: false,
    autoWidth: false,
    viewportMax: false,
    slideBy: 1,
    center: false,
    controls: true,
    controlsPosition: 'top',
    controlsText: ['prev', 'next'],
    controlsContainer: false,
    prevButton: false,
    nextButton: false,
    nav: true,
    navPosition: 'top',
    navContainer: false,
    navAsThumbnails: false,
    arrowKeys: false,
    speed: 300,
    autoplay: false,
    autoplayPosition: 'top',
    autoplayTimeout: 5000,
    autoplayDirection: 'forward',
    autoplayText: ['start', 'stop'],
    autoplayHoverPause: false,
    autoplayButton: false,
    autoplayButtonOutput: true,
    autoplayResetOnVisibility: true,
    animateIn: 'tns-fadeIn',
    animateOut: 'tns-fadeOut',
    animateNormal: 'tns-normal',
    animateDelay: false,
    loop: true,
    rewind: false,
    autoHeight: false,
    responsive: false,
    lazyload: false,
    lazyloadSelector: '.tns-lazy-img',
    touch: true,
    mouseDrag: false,
    swipeAngle: 15,
    nested: false,
    preventActionWhenRunning: false,
    preventScrollOnTouch: false,
    freezable: true,
    onInit: false,
    useLocalStorage: true
  }, options || {});

  var doc = document,
      win = window,
      KEYS = {
    ENTER: 13,
    SPACE: 32,
    LEFT: 37,
    RIGHT: 39
  },
      tnsStorage = {},
      localStorageAccess = options.useLocalStorage;

  if (localStorageAccess) {
    // check browser version and local storage access
    var browserInfo = navigator.userAgent;
    var uid = new Date();

    try {
      tnsStorage = win.localStorage;
      if (tnsStorage) {
        tnsStorage.setItem(uid, uid);
        localStorageAccess = tnsStorage.getItem(uid) == uid;
        tnsStorage.removeItem(uid);
      } else {
        localStorageAccess = false;
      }
      if (!localStorageAccess) {
        tnsStorage = {};
      }
    } catch (e) {
      localStorageAccess = false;
    }

    if (localStorageAccess) {
      // remove storage when browser version changes
      if (tnsStorage['tnsApp'] && tnsStorage['tnsApp'] !== browserInfo) {
        ['tC', 'tPL', 'tMQ', 'tTf', 't3D', 'tTDu', 'tTDe', 'tADu', 'tADe', 'tTE', 'tAE'].forEach(function (item) {
          tnsStorage.removeItem(item);
        });
      }
      // update browserInfo
      localStorage['tnsApp'] = browserInfo;
    }
  }

  var CALC = tnsStorage['tC'] ? Object(__WEBPACK_IMPORTED_MODULE_3__helpers_checkStorageValue_js__["a" /* checkStorageValue */])(tnsStorage['tC']) : Object(__WEBPACK_IMPORTED_MODULE_4__helpers_setLocalStorage_js__["a" /* setLocalStorage */])(tnsStorage, 'tC', Object(__WEBPACK_IMPORTED_MODULE_6__helpers_calc_js__["a" /* calc */])(), localStorageAccess),
      PERCENTAGELAYOUT = tnsStorage['tPL'] ? Object(__WEBPACK_IMPORTED_MODULE_3__helpers_checkStorageValue_js__["a" /* checkStorageValue */])(tnsStorage['tPL']) : Object(__WEBPACK_IMPORTED_MODULE_4__helpers_setLocalStorage_js__["a" /* setLocalStorage */])(tnsStorage, 'tPL', Object(__WEBPACK_IMPORTED_MODULE_7__helpers_percentageLayout_js__["a" /* percentageLayout */])(), localStorageAccess),
      CSSMQ = tnsStorage['tMQ'] ? Object(__WEBPACK_IMPORTED_MODULE_3__helpers_checkStorageValue_js__["a" /* checkStorageValue */])(tnsStorage['tMQ']) : Object(__WEBPACK_IMPORTED_MODULE_4__helpers_setLocalStorage_js__["a" /* setLocalStorage */])(tnsStorage, 'tMQ', Object(__WEBPACK_IMPORTED_MODULE_8__helpers_mediaquerySupport_js__["a" /* mediaquerySupport */])(), localStorageAccess),
      TRANSFORM = tnsStorage['tTf'] ? Object(__WEBPACK_IMPORTED_MODULE_3__helpers_checkStorageValue_js__["a" /* checkStorageValue */])(tnsStorage['tTf']) : Object(__WEBPACK_IMPORTED_MODULE_4__helpers_setLocalStorage_js__["a" /* setLocalStorage */])(tnsStorage, 'tTf', Object(__WEBPACK_IMPORTED_MODULE_27__helpers_whichProperty_js__["a" /* whichProperty */])('transform'), localStorageAccess),
      HAS3DTRANSFORMS = tnsStorage['t3D'] ? Object(__WEBPACK_IMPORTED_MODULE_3__helpers_checkStorageValue_js__["a" /* checkStorageValue */])(tnsStorage['t3D']) : Object(__WEBPACK_IMPORTED_MODULE_4__helpers_setLocalStorage_js__["a" /* setLocalStorage */])(tnsStorage, 't3D', Object(__WEBPACK_IMPORTED_MODULE_28__helpers_has3DTransforms_js__["a" /* has3DTransforms */])(TRANSFORM), localStorageAccess),
      TRANSITIONDURATION = tnsStorage['tTDu'] ? Object(__WEBPACK_IMPORTED_MODULE_3__helpers_checkStorageValue_js__["a" /* checkStorageValue */])(tnsStorage['tTDu']) : Object(__WEBPACK_IMPORTED_MODULE_4__helpers_setLocalStorage_js__["a" /* setLocalStorage */])(tnsStorage, 'tTDu', Object(__WEBPACK_IMPORTED_MODULE_27__helpers_whichProperty_js__["a" /* whichProperty */])('transitionDuration'), localStorageAccess),
      TRANSITIONDELAY = tnsStorage['tTDe'] ? Object(__WEBPACK_IMPORTED_MODULE_3__helpers_checkStorageValue_js__["a" /* checkStorageValue */])(tnsStorage['tTDe']) : Object(__WEBPACK_IMPORTED_MODULE_4__helpers_setLocalStorage_js__["a" /* setLocalStorage */])(tnsStorage, 'tTDe', Object(__WEBPACK_IMPORTED_MODULE_27__helpers_whichProperty_js__["a" /* whichProperty */])('transitionDelay'), localStorageAccess),
      ANIMATIONDURATION = tnsStorage['tADu'] ? Object(__WEBPACK_IMPORTED_MODULE_3__helpers_checkStorageValue_js__["a" /* checkStorageValue */])(tnsStorage['tADu']) : Object(__WEBPACK_IMPORTED_MODULE_4__helpers_setLocalStorage_js__["a" /* setLocalStorage */])(tnsStorage, 'tADu', Object(__WEBPACK_IMPORTED_MODULE_27__helpers_whichProperty_js__["a" /* whichProperty */])('animationDuration'), localStorageAccess),
      ANIMATIONDELAY = tnsStorage['tADe'] ? Object(__WEBPACK_IMPORTED_MODULE_3__helpers_checkStorageValue_js__["a" /* checkStorageValue */])(tnsStorage['tADe']) : Object(__WEBPACK_IMPORTED_MODULE_4__helpers_setLocalStorage_js__["a" /* setLocalStorage */])(tnsStorage, 'tADe', Object(__WEBPACK_IMPORTED_MODULE_27__helpers_whichProperty_js__["a" /* whichProperty */])('animationDelay'), localStorageAccess),
      TRANSITIONEND = tnsStorage['tTE'] ? Object(__WEBPACK_IMPORTED_MODULE_3__helpers_checkStorageValue_js__["a" /* checkStorageValue */])(tnsStorage['tTE']) : Object(__WEBPACK_IMPORTED_MODULE_4__helpers_setLocalStorage_js__["a" /* setLocalStorage */])(tnsStorage, 'tTE', Object(__WEBPACK_IMPORTED_MODULE_29__helpers_getEndProperty_js__["a" /* getEndProperty */])(TRANSITIONDURATION, 'Transition'), localStorageAccess),
      ANIMATIONEND = tnsStorage['tAE'] ? Object(__WEBPACK_IMPORTED_MODULE_3__helpers_checkStorageValue_js__["a" /* checkStorageValue */])(tnsStorage['tAE']) : Object(__WEBPACK_IMPORTED_MODULE_4__helpers_setLocalStorage_js__["a" /* setLocalStorage */])(tnsStorage, 'tAE', Object(__WEBPACK_IMPORTED_MODULE_29__helpers_getEndProperty_js__["a" /* getEndProperty */])(ANIMATIONDURATION, 'Animation'), localStorageAccess);

  // get element nodes from selectors
  var supportConsoleWarn = win.console && typeof win.console.warn === "function",
      tnsList = ['container', 'controlsContainer', 'prevButton', 'nextButton', 'navContainer', 'autoplayButton'],
      optionsElements = {};

  tnsList.forEach(function (item) {
    if (typeof options[item] === 'string') {
      var str = options[item],
          el = doc.querySelector(str);
      optionsElements[item] = str;

      if (el && el.nodeName) {
        options[item] = el;
      } else {
        if (supportConsoleWarn) {
          console.warn('Can\'t find', options[item]);
        }
        return;
      }
    }
  });

  // make sure at least 1 slide
  if (options.container.children.length < 1) {
    if (supportConsoleWarn) {
      console.warn('No slides found in', options.container);
    }
    return;
  }

  // update options
  var responsive = options.responsive,
      nested = options.nested,
      carousel = options.mode === 'carousel' ? true : false;

  if (responsive) {
    // apply responsive[0] to options and remove it
    if (0 in responsive) {
      options = Object(__WEBPACK_IMPORTED_MODULE_2__helpers_extend_js__["a" /* extend */])(options, responsive[0]);
      delete responsive[0];
    }

    var responsiveTem = {};
    for (var key in responsive) {
      var val = responsive[key];
      // update responsive
      // from: 300: 2
      // to: 
      //   300: { 
      //     items: 2 
      //   } 
      val = typeof val === 'number' ? { items: val } : val;
      responsiveTem[key] = val;
    }
    responsive = responsiveTem;
    responsiveTem = null;
  }

  // update options
  function updateOptions(obj) {
    for (var key in obj) {
      if (!carousel) {
        if (key === 'slideBy') {
          obj[key] = 'page';
        }
        if (key === 'edgePadding') {
          obj[key] = false;
        }
        if (key === 'autoHeight') {
          obj[key] = false;
        }
      }

      // update responsive options
      if (key === 'responsive') {
        updateOptions(obj[key]);
      }
    }
  }
  if (!carousel) {
    updateOptions(options);
  }

  // === define and set variables ===
  if (!carousel) {
    options.axis = 'horizontal';
    options.slideBy = 'page';
    options.edgePadding = false;

    var animateIn = options.animateIn,
        animateOut = options.animateOut,
        animateDelay = options.animateDelay,
        animateNormal = options.animateNormal;
  }

  var horizontal = options.axis === 'horizontal' ? true : false,
      outerWrapper = doc.createElement('div'),
      innerWrapper = doc.createElement('div'),
      middleWrapper,
      container = options.container,
      containerParent = container.parentNode,
      containerHTML = container.outerHTML,
      slideItems = container.children,
      slideCount = slideItems.length,
      breakpointZone,
      windowWidth = getWindowWidth(),
      isOn = false;
  if (responsive) {
    setBreakpointZone();
  }
  if (carousel) {
    container.className += ' tns-vpfix';
  }

  // fixedWidth: viewport > rightBoundary > indexMax
  var autoWidth = options.autoWidth,
      fixedWidth = getOption('fixedWidth'),
      edgePadding = getOption('edgePadding'),
      gutter = getOption('gutter'),
      viewport = getViewportWidth(),
      center = getOption('center'),
      items = !autoWidth ? Math.floor(getOption('items')) : 1,
      slideBy = getOption('slideBy'),
      viewportMax = options.viewportMax || options.fixedWidthViewportWidth,
      arrowKeys = getOption('arrowKeys'),
      speed = getOption('speed'),
      rewind = options.rewind,
      loop = rewind ? false : options.loop,
      autoHeight = getOption('autoHeight'),
      controls = getOption('controls'),
      controlsText = getOption('controlsText'),
      nav = getOption('nav'),
      touch = getOption('touch'),
      mouseDrag = getOption('mouseDrag'),
      autoplay = getOption('autoplay'),
      autoplayTimeout = getOption('autoplayTimeout'),
      autoplayText = getOption('autoplayText'),
      autoplayHoverPause = getOption('autoplayHoverPause'),
      autoplayResetOnVisibility = getOption('autoplayResetOnVisibility'),
      sheet = Object(__WEBPACK_IMPORTED_MODULE_9__helpers_createStyleSheet_js__["a" /* createStyleSheet */])(),
      lazyload = options.lazyload,
      lazyloadSelector = options.lazyloadSelector,
      slidePositions,
      // collection of slide positions
  slideItemsOut = [],
      cloneCount = loop ? getCloneCountForLoop() : 0,
      slideCountNew = !carousel ? slideCount + cloneCount : slideCount + cloneCount * 2,
      hasRightDeadZone = (fixedWidth || autoWidth) && !loop ? true : false,
      rightBoundary = fixedWidth ? getRightBoundary() : null,
      updateIndexBeforeTransform = !carousel || !loop ? true : false,

  // transform
  transformAttr = horizontal ? 'left' : 'top',
      transformPrefix = '',
      transformPostfix = '',

  // index
  getIndexMax = function () {
    if (fixedWidth) {
      return function () {
        return center && !loop ? slideCount - 1 : Math.ceil(-rightBoundary / (fixedWidth + gutter));
      };
    } else if (autoWidth) {
      return function () {
        for (var i = slideCountNew, result = i - 1; i--;) {
          if (slidePositions[i] > -rightBoundary) {
            return i;
          }
        }
      };
    } else {
      return function () {
        if (center && carousel && !loop) {
          return slideCount - 1;
        } else {
          return loop || carousel ? Math.max(0, slideCountNew - Math.ceil(items)) : slideCountNew - 1;
        }
      };
    }
  }(),
      index = getStartIndex(getOption('startIndex')),
      indexCached = index,
      displayIndex = getCurrentSlide(),
      indexMin = 0,
      indexMax = !autoWidth ? getIndexMax() : null,

  // resize
  resizeTimer,
      preventActionWhenRunning = options.preventActionWhenRunning,
      swipeAngle = options.swipeAngle,
      moveDirectionExpected = swipeAngle ? '?' : true,
      running = false,
      onInit = options.onInit,
      events = new __WEBPACK_IMPORTED_MODULE_32__helpers_events_js__["a" /* Events */](),

  // id, class
  newContainerClasses = ' tns-slider tns-' + options.mode,
      slideId = container.id || Object(__WEBPACK_IMPORTED_MODULE_5__helpers_getSlideId_js__["a" /* getSlideId */])(),
      disable = getOption('disable'),
      disabled = false,
      freezable = options.freezable,
      freeze = freezable && !autoWidth ? getFreeze() : false,
      frozen = false,
      controlsEvents = {
    'click': onControlsClick,
    'keydown': onControlsKeydown
  },
      navEvents = {
    'click': onNavClick,
    'keydown': onNavKeydown
  },
      hoverEvents = {
    'mouseover': mouseoverPause,
    'mouseout': mouseoutRestart
  },
      visibilityEvent = { 'visibilitychange': onVisibilityChange },
      docmentKeydownEvent = { 'keydown': onDocumentKeydown },
      touchEvents = {
    'touchstart': onPanStart,
    'touchmove': onPanMove,
    'touchend': onPanEnd,
    'touchcancel': onPanEnd
  },
      dragEvents = {
    'mousedown': onPanStart,
    'mousemove': onPanMove,
    'mouseup': onPanEnd,
    'mouseleave': onPanEnd
  },
      hasControls = hasOption('controls'),
      hasNav = hasOption('nav'),
      navAsThumbnails = autoWidth ? true : options.navAsThumbnails,
      hasAutoplay = hasOption('autoplay'),
      hasTouch = hasOption('touch'),
      hasMouseDrag = hasOption('mouseDrag'),
      slideActiveClass = 'tns-slide-active',
      imgCompleteClass = 'tns-complete',
      imgEvents = {
    'load': onImgLoaded,
    'error': onImgFailed
  },
      imgsComplete,
      liveregionCurrent,
      preventScroll = options.preventScrollOnTouch === 'force' ? true : false;

  // controls
  if (hasControls) {
    var controlsContainer = options.controlsContainer,
        controlsContainerHTML = options.controlsContainer ? options.controlsContainer.outerHTML : '',
        prevButton = options.prevButton,
        nextButton = options.nextButton,
        prevButtonHTML = options.prevButton ? options.prevButton.outerHTML : '',
        nextButtonHTML = options.nextButton ? options.nextButton.outerHTML : '',
        prevIsButton,
        nextIsButton;
  }

  // nav
  if (hasNav) {
    var navContainer = options.navContainer,
        navContainerHTML = options.navContainer ? options.navContainer.outerHTML : '',
        navItems,
        pages = autoWidth ? slideCount : getPages(),
        pagesCached = 0,
        navClicked = -1,
        navCurrentIndex = getCurrentNavIndex(),
        navCurrentIndexCached = navCurrentIndex,
        navActiveClass = 'tns-nav-active',
        navStr = 'Carousel Page ',
        navStrCurrent = ' (Current Slide)';
  }

  // autoplay
  if (hasAutoplay) {
    var autoplayDirection = options.autoplayDirection === 'forward' ? 1 : -1,
        autoplayButton = options.autoplayButton,
        autoplayButtonHTML = options.autoplayButton ? options.autoplayButton.outerHTML : '',
        autoplayHtmlStrings = ['<span class=\'tns-visually-hidden\'>', ' animation</span>'],
        autoplayTimer,
        animating,
        autoplayHoverPaused,
        autoplayUserPaused,
        autoplayVisibilityPaused;
  }

  if (hasTouch || hasMouseDrag) {
    var initPosition = {},
        lastPosition = {},
        translateInit,
        disX,
        disY,
        panStart = false,
        rafIndex,
        getDist = horizontal ? function (a, b) {
      return a.x - b.x;
    } : function (a, b) {
      return a.y - b.y;
    };
  }

  // disable slider when slidecount <= items
  if (!autoWidth) {
    resetVariblesWhenDisable(disable || freeze);
  }

  if (TRANSFORM) {
    transformAttr = TRANSFORM;
    transformPrefix = 'translate';

    if (HAS3DTRANSFORMS) {
      transformPrefix += horizontal ? '3d(' : '3d(0px, ';
      transformPostfix = horizontal ? ', 0px, 0px)' : ', 0px)';
    } else {
      transformPrefix += horizontal ? 'X(' : 'Y(';
      transformPostfix = ')';
    }
  }

  if (carousel) {
    container.className = container.className.replace('tns-vpfix', '');
  }
  initStructure();
  initSheet();
  initSliderTransform();

  // === COMMON FUNCTIONS === //
  function resetVariblesWhenDisable(condition) {
    if (condition) {
      controls = nav = touch = mouseDrag = arrowKeys = autoplay = autoplayHoverPause = autoplayResetOnVisibility = false;
    }
  }

  function getCurrentSlide() {
    var tem = carousel ? index - cloneCount : index;
    while (tem < 0) {
      tem += slideCount;
    }
    return tem % slideCount + 1;
  }

  function getStartIndex(ind) {
    ind = ind ? Math.max(0, Math.min(loop ? slideCount - 1 : slideCount - items, ind)) : 0;
    return carousel ? ind + cloneCount : ind;
  }

  function getAbsIndex(i) {
    if (i == null) {
      i = index;
    }

    if (carousel) {
      i -= cloneCount;
    }
    while (i < 0) {
      i += slideCount;
    }

    return Math.floor(i % slideCount);
  }

  function getCurrentNavIndex() {
    var absIndex = getAbsIndex(),
        result;

    result = navAsThumbnails ? absIndex : fixedWidth || autoWidth ? Math.ceil((absIndex + 1) * pages / slideCount - 1) : Math.floor(absIndex / items);

    // set active nav to the last one when reaches the right edge
    if (!loop && carousel && index === indexMax) {
      result = pages - 1;
    }

    return result;
  }

  function getItemsMax() {
    // fixedWidth or autoWidth while viewportMax is not available
    if (autoWidth || fixedWidth && !viewportMax) {
      return slideCount - 1;
      // most cases
    } else {
      var str = fixedWidth ? 'fixedWidth' : 'items',
          arr = [];

      if (fixedWidth || options[str] < slideCount) {
        arr.push(options[str]);
      }

      if (responsive) {
        for (var bp in responsive) {
          var tem = responsive[bp][str];
          if (tem && (fixedWidth || tem < slideCount)) {
            arr.push(tem);
          }
        }
      }

      if (!arr.length) {
        arr.push(0);
      }

      return Math.ceil(fixedWidth ? viewportMax / Math.min.apply(null, arr) : Math.max.apply(null, arr));
    }
  }

  function getCloneCountForLoop() {
    var itemsMax = getItemsMax(),
        result = carousel ? Math.ceil((itemsMax * 5 - slideCount) / 2) : itemsMax * 4 - slideCount;
    result = Math.max(itemsMax, result);

    return hasOption('edgePadding') ? result + 1 : result;
  }

  function getWindowWidth() {
    return win.innerWidth || doc.documentElement.clientWidth || doc.body.clientWidth;
  }

  function getInsertPosition(pos) {
    return pos === 'top' ? 'afterbegin' : 'beforeend';
  }

  function getClientWidth(el) {
    var div = doc.createElement('div'),
        rect,
        width;
    el.appendChild(div);
    rect = div.getBoundingClientRect();
    width = rect.right - rect.left;
    div.remove();
    return width || getClientWidth(el.parentNode);
  }

  function getViewportWidth() {
    var gap = edgePadding ? edgePadding * 2 - gutter : 0;
    return getClientWidth(containerParent) - gap;
  }

  function hasOption(item) {
    if (options[item]) {
      return true;
    } else {
      if (responsive) {
        for (var bp in responsive) {
          if (responsive[bp][item]) {
            return true;
          }
        }
      }
      return false;
    }
  }

  // get option:
  // fixed width: viewport, fixedWidth, gutter => items
  // others: window width => all variables
  // all: items => slideBy
  function getOption(item, ww) {
    if (ww == null) {
      ww = windowWidth;
    }

    if (item === 'items' && fixedWidth) {
      return Math.floor((viewport + gutter) / (fixedWidth + gutter)) || 1;
    } else {
      var result = options[item];

      if (responsive) {
        for (var bp in responsive) {
          // bp: convert string to number
          if (ww >= parseInt(bp)) {
            if (item in responsive[bp]) {
              result = responsive[bp][item];
            }
          }
        }
      }

      if (item === 'slideBy' && result === 'page') {
        result = getOption('items');
      }
      if (!carousel && (item === 'slideBy' || item === 'items')) {
        result = Math.floor(result);
      }

      return result;
    }
  }

  function getSlideMarginLeft(i) {
    return CALC ? CALC + '(' + i * 100 + '% / ' + slideCountNew + ')' : i * 100 / slideCountNew + '%';
  }

  function getInnerWrapperStyles(edgePaddingTem, gutterTem, fixedWidthTem, speedTem, autoHeightBP) {
    var str = '';

    if (edgePaddingTem !== undefined) {
      var gap = edgePaddingTem;
      if (gutterTem) {
        gap -= gutterTem;
      }
      str = horizontal ? 'margin: 0 ' + gap + 'px 0 ' + edgePaddingTem + 'px;' : 'margin: ' + edgePaddingTem + 'px 0 ' + gap + 'px 0;';
    } else if (gutterTem && !fixedWidthTem) {
      var gutterTemUnit = '-' + gutterTem + 'px',
          dir = horizontal ? gutterTemUnit + ' 0 0' : '0 ' + gutterTemUnit + ' 0';
      str = 'margin: 0 ' + dir + ';';
    }

    if (!carousel && autoHeightBP && TRANSITIONDURATION && speedTem) {
      str += getTransitionDurationStyle(speedTem);
    }
    return str;
  }

  function getContainerWidth(fixedWidthTem, gutterTem, itemsTem) {
    if (fixedWidthTem) {
      return (fixedWidthTem + gutterTem) * slideCountNew + 'px';
    } else {
      return CALC ? CALC + '(' + slideCountNew * 100 + '% / ' + itemsTem + ')' : slideCountNew * 100 / itemsTem + '%';
    }
  }

  function getSlideWidthStyle(fixedWidthTem, gutterTem, itemsTem) {
    var width;

    if (fixedWidthTem) {
      width = fixedWidthTem + gutterTem + 'px';
    } else {
      if (!carousel) {
        itemsTem = Math.floor(itemsTem);
      }
      var dividend = carousel ? slideCountNew : itemsTem;
      width = CALC ? CALC + '(100% / ' + dividend + ')' : 100 / dividend + '%';
    }

    width = 'width:' + width;

    // inner slider: overwrite outer slider styles
    return nested !== 'inner' ? width + ';' : width + ' !important;';
  }

  function getSlideGutterStyle(gutterTem) {
    var str = '';

    // gutter maybe interger || 0
    // so can't use 'if (gutter)'
    if (gutterTem !== false) {
      var prop = horizontal ? 'padding-' : 'margin-',
          dir = horizontal ? 'right' : 'bottom';
      str = prop + dir + ': ' + gutterTem + 'px;';
    }

    return str;
  }

  function getCSSPrefix(name, num) {
    var prefix = name.substring(0, name.length - num).toLowerCase();
    if (prefix) {
      prefix = '-' + prefix + '-';
    }

    return prefix;
  }

  function getTransitionDurationStyle(speed) {
    return getCSSPrefix(TRANSITIONDURATION, 18) + 'transition-duration:' + speed / 1000 + 's;';
  }

  function getAnimationDurationStyle(speed) {
    return getCSSPrefix(ANIMATIONDURATION, 17) + 'animation-duration:' + speed / 1000 + 's;';
  }

  function initStructure() {
    var classOuter = 'tns-outer',
        classInner = 'tns-inner',
        hasGutter = hasOption('gutter');

    outerWrapper.className = classOuter;
    innerWrapper.className = classInner;
    outerWrapper.id = slideId + '-ow';
    innerWrapper.id = slideId + '-iw';

    // set container properties
    if (container.id === '') {
      container.id = slideId;
    }
    newContainerClasses += PERCENTAGELAYOUT || autoWidth ? ' tns-subpixel' : ' tns-no-subpixel';
    newContainerClasses += CALC ? ' tns-calc' : ' tns-no-calc';
    if (autoWidth) {
      newContainerClasses += ' tns-autowidth';
    }
    newContainerClasses += ' tns-' + options.axis;
    container.className += newContainerClasses;

    // add constrain layer for carousel
    if (carousel) {
      middleWrapper = doc.createElement('div');
      middleWrapper.id = slideId + '-mw';
      middleWrapper.className = 'tns-ovh';

      outerWrapper.appendChild(middleWrapper);
      middleWrapper.appendChild(innerWrapper);
    } else {
      outerWrapper.appendChild(innerWrapper);
    }

    if (autoHeight) {
      var wp = middleWrapper ? middleWrapper : innerWrapper;
      wp.className += ' tns-ah';
    }

    containerParent.insertBefore(outerWrapper, container);
    innerWrapper.appendChild(container);

    // add id, class, aria attributes 
    // before clone slides
    Object(__WEBPACK_IMPORTED_MODULE_15__helpers_forEach_js__["a" /* forEach */])(slideItems, function (item, i) {
      Object(__WEBPACK_IMPORTED_MODULE_17__helpers_addClass_js__["a" /* addClass */])(item, 'tns-item');
      if (!item.id) {
        item.id = slideId + '-item' + i;
      }
      if (!carousel && animateNormal) {
        Object(__WEBPACK_IMPORTED_MODULE_17__helpers_addClass_js__["a" /* addClass */])(item, animateNormal);
      }
      Object(__WEBPACK_IMPORTED_MODULE_21__helpers_setAttrs_js__["a" /* setAttrs */])(item, {
        'aria-hidden': 'true',
        'tabindex': '-1'
      });
    });

    // ## clone slides
    // carousel: n + slides + n
    // gallery:      slides + n
    if (cloneCount) {
      var fragmentBefore = doc.createDocumentFragment(),
          fragmentAfter = doc.createDocumentFragment();

      for (var j = cloneCount; j--;) {
        var num = j % slideCount,
            cloneFirst = slideItems[num].cloneNode(true);
        Object(__WEBPACK_IMPORTED_MODULE_22__helpers_removeAttrs_js__["a" /* removeAttrs */])(cloneFirst, 'id');
        fragmentAfter.insertBefore(cloneFirst, fragmentAfter.firstChild);

        if (carousel) {
          var cloneLast = slideItems[slideCount - 1 - num].cloneNode(true);
          Object(__WEBPACK_IMPORTED_MODULE_22__helpers_removeAttrs_js__["a" /* removeAttrs */])(cloneLast, 'id');
          fragmentBefore.appendChild(cloneLast);
        }
      }

      container.insertBefore(fragmentBefore, container.firstChild);
      container.appendChild(fragmentAfter);
      slideItems = container.children;
    }
  }

  function initSliderTransform() {
    // ## images loaded/failed
    if (hasOption('autoHeight') || autoWidth || !horizontal) {
      var imgs = container.querySelectorAll('img');

      // add complete class if all images are loaded/failed
      Object(__WEBPACK_IMPORTED_MODULE_15__helpers_forEach_js__["a" /* forEach */])(imgs, function (img) {
        var src = img.src;

        if (src && src.indexOf('data:image') < 0) {
          Object(__WEBPACK_IMPORTED_MODULE_30__helpers_addEvents_js__["a" /* addEvents */])(img, imgEvents);
          img.src = '';
          img.src = src;
          Object(__WEBPACK_IMPORTED_MODULE_17__helpers_addClass_js__["a" /* addClass */])(img, 'loading');
        } else if (!lazyload) {
          imgLoaded(img);
        }
      });

      // All imgs are completed
      Object(__WEBPACK_IMPORTED_MODULE_0__helpers_raf_js__["a" /* raf */])(function () {
        imgsLoadedCheck(Object(__WEBPACK_IMPORTED_MODULE_23__helpers_arrayFromNodeList_js__["a" /* arrayFromNodeList */])(imgs), function () {
          imgsComplete = true;
        });
      });

      // Check imgs in window only for auto height
      if (!autoWidth && horizontal) {
        imgs = getImageArray(index, Math.min(index + items - 1, slideCountNew - 1));
      }

      lazyload ? initSliderTransformStyleCheck() : Object(__WEBPACK_IMPORTED_MODULE_0__helpers_raf_js__["a" /* raf */])(function () {
        imgsLoadedCheck(Object(__WEBPACK_IMPORTED_MODULE_23__helpers_arrayFromNodeList_js__["a" /* arrayFromNodeList */])(imgs), initSliderTransformStyleCheck);
      });
    } else {
      // set container transform property
      if (carousel) {
        doContainerTransformSilent();
      }

      // update slider tools and events
      initTools();
      initEvents();
    }
  }

  function initSliderTransformStyleCheck() {
    if (autoWidth) {
      // check styles application
      var num = loop ? index : slideCount - 1;
      (function stylesApplicationCheck() {
        slideItems[num - 1].getBoundingClientRect().right.toFixed(2) === slideItems[num].getBoundingClientRect().left.toFixed(2) ? initSliderTransformCore() : setTimeout(function () {
          stylesApplicationCheck();
        }, 16);
      })();
    } else {
      initSliderTransformCore();
    }
  }

  function initSliderTransformCore() {
    // run Fn()s which are rely on image loading
    if (!horizontal || autoWidth) {
      setSlidePositions();

      if (autoWidth) {
        rightBoundary = getRightBoundary();
        if (freezable) {
          freeze = getFreeze();
        }
        indexMax = getIndexMax(); // <= slidePositions, rightBoundary <=
        resetVariblesWhenDisable(disable || freeze);
      } else {
        updateContentWrapperHeight();
      }
    }

    // set container transform property
    if (carousel) {
      doContainerTransformSilent();
    }

    // update slider tools and events
    initTools();
    initEvents();
  }

  function initSheet() {
    // gallery:
    // set animation classes and left value for gallery slider
    if (!carousel) {
      for (var i = index, l = index + Math.min(slideCount, items); i < l; i++) {
        var item = slideItems[i];
        item.style.left = (i - index) * 100 / items + '%';
        Object(__WEBPACK_IMPORTED_MODULE_17__helpers_addClass_js__["a" /* addClass */])(item, animateIn);
        Object(__WEBPACK_IMPORTED_MODULE_18__helpers_removeClass_js__["a" /* removeClass */])(item, animateNormal);
      }
    }

    // #### LAYOUT

    // ## INLINE-BLOCK VS FLOAT

    // ## PercentageLayout:
    // slides: inline-block
    // remove blank space between slides by set font-size: 0

    // ## Non PercentageLayout:
    // slides: float
    //         margin-right: -100%
    //         margin-left: ~

    // Resource: https://docs.google.com/spreadsheets/d/147up245wwTXeQYve3BRSAD4oVcvQmuGsFteJOeA5xNQ/edit?usp=sharing
    if (horizontal) {
      if (PERCENTAGELAYOUT || autoWidth) {
        Object(__WEBPACK_IMPORTED_MODULE_10__helpers_addCSSRule_js__["a" /* addCSSRule */])(sheet, '#' + slideId + ' > .tns-item', 'font-size:' + win.getComputedStyle(slideItems[0]).fontSize + ';', Object(__WEBPACK_IMPORTED_MODULE_12__helpers_getCssRulesLength_js__["a" /* getCssRulesLength */])(sheet));
        Object(__WEBPACK_IMPORTED_MODULE_10__helpers_addCSSRule_js__["a" /* addCSSRule */])(sheet, '#' + slideId, 'font-size:0;', Object(__WEBPACK_IMPORTED_MODULE_12__helpers_getCssRulesLength_js__["a" /* getCssRulesLength */])(sheet));
      } else if (carousel) {
        Object(__WEBPACK_IMPORTED_MODULE_15__helpers_forEach_js__["a" /* forEach */])(slideItems, function (slide, i) {
          slide.style.marginLeft = getSlideMarginLeft(i);
        });
      }
    }

    // ## BASIC STYLES
    if (CSSMQ) {
      // middle wrapper style
      if (TRANSITIONDURATION) {
        var str = middleWrapper && options.autoHeight ? getTransitionDurationStyle(options.speed) : '';
        Object(__WEBPACK_IMPORTED_MODULE_10__helpers_addCSSRule_js__["a" /* addCSSRule */])(sheet, '#' + slideId + '-mw', str, Object(__WEBPACK_IMPORTED_MODULE_12__helpers_getCssRulesLength_js__["a" /* getCssRulesLength */])(sheet));
      }

      // inner wrapper styles
      str = getInnerWrapperStyles(options.edgePadding, options.gutter, options.fixedWidth, options.speed, options.autoHeight);
      Object(__WEBPACK_IMPORTED_MODULE_10__helpers_addCSSRule_js__["a" /* addCSSRule */])(sheet, '#' + slideId + '-iw', str, Object(__WEBPACK_IMPORTED_MODULE_12__helpers_getCssRulesLength_js__["a" /* getCssRulesLength */])(sheet));

      // container styles
      if (carousel) {
        str = horizontal && !autoWidth ? 'width:' + getContainerWidth(options.fixedWidth, options.gutter, options.items) + ';' : '';
        if (TRANSITIONDURATION) {
          str += getTransitionDurationStyle(speed);
        }
        Object(__WEBPACK_IMPORTED_MODULE_10__helpers_addCSSRule_js__["a" /* addCSSRule */])(sheet, '#' + slideId, str, Object(__WEBPACK_IMPORTED_MODULE_12__helpers_getCssRulesLength_js__["a" /* getCssRulesLength */])(sheet));
      }

      // slide styles
      str = horizontal && !autoWidth ? getSlideWidthStyle(options.fixedWidth, options.gutter, options.items) : '';
      if (options.gutter) {
        str += getSlideGutterStyle(options.gutter);
      }
      // set gallery items transition-duration
      if (!carousel) {
        if (TRANSITIONDURATION) {
          str += getTransitionDurationStyle(speed);
        }
        if (ANIMATIONDURATION) {
          str += getAnimationDurationStyle(speed);
        }
      }
      if (str) {
        Object(__WEBPACK_IMPORTED_MODULE_10__helpers_addCSSRule_js__["a" /* addCSSRule */])(sheet, '#' + slideId + ' > .tns-item', str, Object(__WEBPACK_IMPORTED_MODULE_12__helpers_getCssRulesLength_js__["a" /* getCssRulesLength */])(sheet));
      }

      // non CSS mediaqueries: IE8
      // ## update inner wrapper, container, slides if needed
      // set inline styles for inner wrapper & container
      // insert stylesheet (one line) for slides only (since slides are many)
    } else {
      // middle wrapper styles
      update_carousel_transition_duration();

      // inner wrapper styles
      innerWrapper.style.cssText = getInnerWrapperStyles(edgePadding, gutter, fixedWidth, autoHeight);

      // container styles
      if (carousel && horizontal && !autoWidth) {
        container.style.width = getContainerWidth(fixedWidth, gutter, items);
      }

      // slide styles
      var str = horizontal && !autoWidth ? getSlideWidthStyle(fixedWidth, gutter, items) : '';
      if (gutter) {
        str += getSlideGutterStyle(gutter);
      }

      // append to the last line
      if (str) {
        Object(__WEBPACK_IMPORTED_MODULE_10__helpers_addCSSRule_js__["a" /* addCSSRule */])(sheet, '#' + slideId + ' > .tns-item', str, Object(__WEBPACK_IMPORTED_MODULE_12__helpers_getCssRulesLength_js__["a" /* getCssRulesLength */])(sheet));
      }
    }

    // ## MEDIAQUERIES
    if (responsive && CSSMQ) {
      for (var bp in responsive) {
        // bp: convert string to number
        bp = parseInt(bp);

        var opts = responsive[bp],
            str = '',
            middleWrapperStr = '',
            innerWrapperStr = '',
            containerStr = '',
            slideStr = '',
            itemsBP = !autoWidth ? getOption('items', bp) : null,
            fixedWidthBP = getOption('fixedWidth', bp),
            speedBP = getOption('speed', bp),
            edgePaddingBP = getOption('edgePadding', bp),
            autoHeightBP = getOption('autoHeight', bp),
            gutterBP = getOption('gutter', bp);

        // middle wrapper string
        if (TRANSITIONDURATION && middleWrapper && getOption('autoHeight', bp) && 'speed' in opts) {
          middleWrapperStr = '#' + slideId + '-mw{' + getTransitionDurationStyle(speedBP) + '}';
        }

        // inner wrapper string
        if ('edgePadding' in opts || 'gutter' in opts) {
          innerWrapperStr = '#' + slideId + '-iw{' + getInnerWrapperStyles(edgePaddingBP, gutterBP, fixedWidthBP, speedBP, autoHeightBP) + '}';
        }

        // container string
        if (carousel && horizontal && !autoWidth && ('fixedWidth' in opts || 'items' in opts || fixedWidth && 'gutter' in opts)) {
          containerStr = 'width:' + getContainerWidth(fixedWidthBP, gutterBP, itemsBP) + ';';
        }
        if (TRANSITIONDURATION && 'speed' in opts) {
          containerStr += getTransitionDurationStyle(speedBP);
        }
        if (containerStr) {
          containerStr = '#' + slideId + '{' + containerStr + '}';
        }

        // slide string
        if ('fixedWidth' in opts || fixedWidth && 'gutter' in opts || !carousel && 'items' in opts) {
          slideStr += getSlideWidthStyle(fixedWidthBP, gutterBP, itemsBP);
        }
        if ('gutter' in opts) {
          slideStr += getSlideGutterStyle(gutterBP);
        }
        // set gallery items transition-duration
        if (!carousel && 'speed' in opts) {
          if (TRANSITIONDURATION) {
            slideStr += getTransitionDurationStyle(speedBP);
          }
          if (ANIMATIONDURATION) {
            slideStr += getAnimationDurationStyle(speedBP);
          }
        }
        if (slideStr) {
          slideStr = '#' + slideId + ' > .tns-item{' + slideStr + '}';
        }

        // add up
        str = middleWrapperStr + innerWrapperStr + containerStr + slideStr;

        if (str) {
          sheet.insertRule('@media (min-width: ' + bp / 16 + 'em) {' + str + '}', sheet.cssRules.length);
        }
      }
    }
  }

  function initTools() {
    // == slides ==
    updateSlideStatus();

    // == live region ==
    outerWrapper.insertAdjacentHTML('afterbegin', '<div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">' + getLiveRegionStr() + '</span>  of ' + slideCount + '</div>');
    liveregionCurrent = outerWrapper.querySelector('.tns-liveregion .current');

    // == autoplayInit ==
    if (hasAutoplay) {
      var txt = autoplay ? 'stop' : 'start';
      if (autoplayButton) {
        Object(__WEBPACK_IMPORTED_MODULE_21__helpers_setAttrs_js__["a" /* setAttrs */])(autoplayButton, { 'data-action': txt });
      } else if (options.autoplayButtonOutput) {
        outerWrapper.insertAdjacentHTML(getInsertPosition(options.autoplayPosition), '<button data-action="' + txt + '">' + autoplayHtmlStrings[0] + txt + autoplayHtmlStrings[1] + autoplayText[0] + '</button>');
        autoplayButton = outerWrapper.querySelector('[data-action]');
      }

      // add event
      if (autoplayButton) {
        Object(__WEBPACK_IMPORTED_MODULE_30__helpers_addEvents_js__["a" /* addEvents */])(autoplayButton, { 'click': toggleAutoplay });
      }

      if (autoplay) {
        startAutoplay();
        if (autoplayHoverPause) {
          Object(__WEBPACK_IMPORTED_MODULE_30__helpers_addEvents_js__["a" /* addEvents */])(container, hoverEvents);
        }
        if (autoplayResetOnVisibility) {
          Object(__WEBPACK_IMPORTED_MODULE_30__helpers_addEvents_js__["a" /* addEvents */])(container, visibilityEvent);
        }
      }
    }

    // == navInit ==
    if (hasNav) {
      var initIndex = !carousel ? 0 : cloneCount;
      // customized nav
      // will not hide the navs in case they're thumbnails
      if (navContainer) {
        Object(__WEBPACK_IMPORTED_MODULE_21__helpers_setAttrs_js__["a" /* setAttrs */])(navContainer, { 'aria-label': 'Carousel Pagination' });
        navItems = navContainer.children;
        Object(__WEBPACK_IMPORTED_MODULE_15__helpers_forEach_js__["a" /* forEach */])(navItems, function (item, i) {
          Object(__WEBPACK_IMPORTED_MODULE_21__helpers_setAttrs_js__["a" /* setAttrs */])(item, {
            'data-nav': i,
            'tabindex': '-1',
            'aria-label': navStr + (i + 1),
            'aria-controls': slideId
          });
        });

        // generated nav 
      } else {
        var navHtml = '',
            hiddenStr = navAsThumbnails ? '' : 'style="display:none"';
        for (var i = 0; i < slideCount; i++) {
          // hide nav items by default
          navHtml += '<button data-nav="' + i + '" tabindex="-1" aria-controls="' + slideId + '" ' + hiddenStr + ' aria-label="' + navStr + (i + 1) + '"></button>';
        }
        navHtml = '<div class="tns-nav" aria-label="Carousel Pagination">' + navHtml + '</div>';
        outerWrapper.insertAdjacentHTML(getInsertPosition(options.navPosition), navHtml);

        navContainer = outerWrapper.querySelector('.tns-nav');
        navItems = navContainer.children;
      }

      updateNavVisibility();

      // add transition
      if (TRANSITIONDURATION) {
        var prefix = TRANSITIONDURATION.substring(0, TRANSITIONDURATION.length - 18).toLowerCase(),
            str = 'transition: all ' + speed / 1000 + 's';

        if (prefix) {
          str = '-' + prefix + '-' + str;
        }

        Object(__WEBPACK_IMPORTED_MODULE_10__helpers_addCSSRule_js__["a" /* addCSSRule */])(sheet, '[aria-controls^=' + slideId + '-item]', str, Object(__WEBPACK_IMPORTED_MODULE_12__helpers_getCssRulesLength_js__["a" /* getCssRulesLength */])(sheet));
      }

      Object(__WEBPACK_IMPORTED_MODULE_21__helpers_setAttrs_js__["a" /* setAttrs */])(navItems[navCurrentIndex], { 'aria-label': navStr + (navCurrentIndex + 1) + navStrCurrent });
      Object(__WEBPACK_IMPORTED_MODULE_22__helpers_removeAttrs_js__["a" /* removeAttrs */])(navItems[navCurrentIndex], 'tabindex');
      Object(__WEBPACK_IMPORTED_MODULE_17__helpers_addClass_js__["a" /* addClass */])(navItems[navCurrentIndex], navActiveClass);

      // add events
      Object(__WEBPACK_IMPORTED_MODULE_30__helpers_addEvents_js__["a" /* addEvents */])(navContainer, navEvents);
    }

    // == controlsInit ==
    if (hasControls) {
      if (!controlsContainer && (!prevButton || !nextButton)) {
        outerWrapper.insertAdjacentHTML(getInsertPosition(options.controlsPosition), '<div class="tns-controls" aria-label="Carousel Navigation" tabindex="0"><button data-controls="prev" tabindex="-1" aria-controls="' + slideId + '">' + controlsText[0] + '</button><button data-controls="next" tabindex="-1" aria-controls="' + slideId + '">' + controlsText[1] + '</button></div>');

        controlsContainer = outerWrapper.querySelector('.tns-controls');
      }

      if (!prevButton || !nextButton) {
        prevButton = controlsContainer.children[0];
        nextButton = controlsContainer.children[1];
      }

      if (options.controlsContainer) {
        Object(__WEBPACK_IMPORTED_MODULE_21__helpers_setAttrs_js__["a" /* setAttrs */])(controlsContainer, {
          'aria-label': 'Carousel Navigation',
          'tabindex': '0'
        });
      }

      if (options.controlsContainer || options.prevButton && options.nextButton) {
        Object(__WEBPACK_IMPORTED_MODULE_21__helpers_setAttrs_js__["a" /* setAttrs */])([prevButton, nextButton], {
          'aria-controls': slideId,
          'tabindex': '-1'
        });
      }

      if (options.controlsContainer || options.prevButton && options.nextButton) {
        Object(__WEBPACK_IMPORTED_MODULE_21__helpers_setAttrs_js__["a" /* setAttrs */])(prevButton, { 'data-controls': 'prev' });
        Object(__WEBPACK_IMPORTED_MODULE_21__helpers_setAttrs_js__["a" /* setAttrs */])(nextButton, { 'data-controls': 'next' });
      }

      prevIsButton = isButton(prevButton);
      nextIsButton = isButton(nextButton);

      updateControlsStatus();

      // add events
      if (controlsContainer) {
        Object(__WEBPACK_IMPORTED_MODULE_30__helpers_addEvents_js__["a" /* addEvents */])(controlsContainer, controlsEvents);
      } else {
        Object(__WEBPACK_IMPORTED_MODULE_30__helpers_addEvents_js__["a" /* addEvents */])(prevButton, controlsEvents);
        Object(__WEBPACK_IMPORTED_MODULE_30__helpers_addEvents_js__["a" /* addEvents */])(nextButton, controlsEvents);
      }
    }

    // hide tools if needed
    disableUI();
  }

  function initEvents() {
    // add events
    if (carousel && TRANSITIONEND) {
      var eve = {};
      eve[TRANSITIONEND] = onTransitionEnd;
      Object(__WEBPACK_IMPORTED_MODULE_30__helpers_addEvents_js__["a" /* addEvents */])(container, eve);
    }

    if (touch) {
      Object(__WEBPACK_IMPORTED_MODULE_30__helpers_addEvents_js__["a" /* addEvents */])(container, touchEvents, options.preventScrollOnTouch);
    }
    if (mouseDrag) {
      Object(__WEBPACK_IMPORTED_MODULE_30__helpers_addEvents_js__["a" /* addEvents */])(container, dragEvents);
    }
    if (arrowKeys) {
      Object(__WEBPACK_IMPORTED_MODULE_30__helpers_addEvents_js__["a" /* addEvents */])(doc, docmentKeydownEvent);
    }

    if (nested === 'inner') {
      events.on('outerResized', function () {
        resizeTasks();
        events.emit('innerLoaded', info());
      });
    } else if (responsive || fixedWidth || autoWidth || autoHeight || !horizontal) {
      Object(__WEBPACK_IMPORTED_MODULE_30__helpers_addEvents_js__["a" /* addEvents */])(win, { 'resize': onResize });
    }

    if (autoHeight) {
      if (nested === 'outer') {
        events.on('innerLoaded', doAutoHeight);
      } else if (!disable) {
        doAutoHeight();
      }
    }

    doLazyLoad();
    if (disable) {
      disableSlider();
    } else if (freeze) {
      freezeSlider();
    }

    events.on('indexChanged', additionalUpdates);
    if (nested === 'inner') {
      events.emit('innerLoaded', info());
    }
    if (typeof onInit === 'function') {
      onInit(info());
    }
    isOn = true;
  }

  function destroy() {
    // sheet
    sheet.disabled = true;
    if (sheet.ownerNode) {
      sheet.ownerNode.remove();
    }

    // remove win event listeners
    Object(__WEBPACK_IMPORTED_MODULE_31__helpers_removeEvents_js__["a" /* removeEvents */])(win, { 'resize': onResize });

    // arrowKeys, controls, nav
    if (arrowKeys) {
      Object(__WEBPACK_IMPORTED_MODULE_31__helpers_removeEvents_js__["a" /* removeEvents */])(doc, docmentKeydownEvent);
    }
    if (controlsContainer) {
      Object(__WEBPACK_IMPORTED_MODULE_31__helpers_removeEvents_js__["a" /* removeEvents */])(controlsContainer, controlsEvents);
    }
    if (navContainer) {
      Object(__WEBPACK_IMPORTED_MODULE_31__helpers_removeEvents_js__["a" /* removeEvents */])(navContainer, navEvents);
    }

    // autoplay
    Object(__WEBPACK_IMPORTED_MODULE_31__helpers_removeEvents_js__["a" /* removeEvents */])(container, hoverEvents);
    Object(__WEBPACK_IMPORTED_MODULE_31__helpers_removeEvents_js__["a" /* removeEvents */])(container, visibilityEvent);
    if (autoplayButton) {
      Object(__WEBPACK_IMPORTED_MODULE_31__helpers_removeEvents_js__["a" /* removeEvents */])(autoplayButton, { 'click': toggleAutoplay });
    }
    if (autoplay) {
      clearInterval(autoplayTimer);
    }

    // container
    if (carousel && TRANSITIONEND) {
      var eve = {};
      eve[TRANSITIONEND] = onTransitionEnd;
      Object(__WEBPACK_IMPORTED_MODULE_31__helpers_removeEvents_js__["a" /* removeEvents */])(container, eve);
    }
    if (touch) {
      Object(__WEBPACK_IMPORTED_MODULE_31__helpers_removeEvents_js__["a" /* removeEvents */])(container, touchEvents);
    }
    if (mouseDrag) {
      Object(__WEBPACK_IMPORTED_MODULE_31__helpers_removeEvents_js__["a" /* removeEvents */])(container, dragEvents);
    }

    // cache Object values in options && reset HTML
    var htmlList = [containerHTML, controlsContainerHTML, prevButtonHTML, nextButtonHTML, navContainerHTML, autoplayButtonHTML];

    tnsList.forEach(function (item, i) {
      var el = item === 'container' ? outerWrapper : options[item];

      if (typeof el === 'object') {
        var prevEl = el.previousElementSibling ? el.previousElementSibling : false,
            parentEl = el.parentNode;
        el.outerHTML = htmlList[i];
        options[item] = prevEl ? prevEl.nextElementSibling : parentEl.firstElementChild;
      }
    });

    // reset variables
    tnsList = animateIn = animateOut = animateDelay = animateNormal = horizontal = outerWrapper = innerWrapper = container = containerParent = containerHTML = slideItems = slideCount = breakpointZone = windowWidth = autoWidth = fixedWidth = edgePadding = gutter = viewport = items = slideBy = viewportMax = arrowKeys = speed = rewind = loop = autoHeight = sheet = lazyload = slidePositions = slideItemsOut = cloneCount = slideCountNew = hasRightDeadZone = rightBoundary = updateIndexBeforeTransform = transformAttr = transformPrefix = transformPostfix = getIndexMax = index = indexCached = indexMin = indexMax = resizeTimer = swipeAngle = moveDirectionExpected = running = onInit = events = newContainerClasses = slideId = disable = disabled = freezable = freeze = frozen = controlsEvents = navEvents = hoverEvents = visibilityEvent = docmentKeydownEvent = touchEvents = dragEvents = hasControls = hasNav = navAsThumbnails = hasAutoplay = hasTouch = hasMouseDrag = slideActiveClass = imgCompleteClass = imgEvents = imgsComplete = controls = controlsText = controlsContainer = controlsContainerHTML = prevButton = nextButton = prevIsButton = nextIsButton = nav = navContainer = navContainerHTML = navItems = pages = pagesCached = navClicked = navCurrentIndex = navCurrentIndexCached = navActiveClass = navStr = navStrCurrent = autoplay = autoplayTimeout = autoplayDirection = autoplayText = autoplayHoverPause = autoplayButton = autoplayButtonHTML = autoplayResetOnVisibility = autoplayHtmlStrings = autoplayTimer = animating = autoplayHoverPaused = autoplayUserPaused = autoplayVisibilityPaused = initPosition = lastPosition = translateInit = disX = disY = panStart = rafIndex = getDist = touch = mouseDrag = null;
    // check variables
    // [animateIn, animateOut, animateDelay, animateNormal, horizontal, outerWrapper, innerWrapper, container, containerParent, containerHTML, slideItems, slideCount, breakpointZone, windowWidth, autoWidth, fixedWidth, edgePadding, gutter, viewport, items, slideBy, viewportMax, arrowKeys, speed, rewind, loop, autoHeight, sheet, lazyload, slidePositions, slideItemsOut, cloneCount, slideCountNew, hasRightDeadZone, rightBoundary, updateIndexBeforeTransform, transformAttr, transformPrefix, transformPostfix, getIndexMax, index, indexCached, indexMin, indexMax, resizeTimer, swipeAngle, moveDirectionExpected, running, onInit, events, newContainerClasses, slideId, disable, disabled, freezable, freeze, frozen, controlsEvents, navEvents, hoverEvents, visibilityEvent, docmentKeydownEvent, touchEvents, dragEvents, hasControls, hasNav, navAsThumbnails, hasAutoplay, hasTouch, hasMouseDrag, slideActiveClass, imgCompleteClass, imgEvents, imgsComplete, controls, controlsText, controlsContainer, controlsContainerHTML, prevButton, nextButton, prevIsButton, nextIsButton, nav, navContainer, navContainerHTML, navItems, pages, pagesCached, navClicked, navCurrentIndex, navCurrentIndexCached, navActiveClass, navStr, navStrCurrent, autoplay, autoplayTimeout, autoplayDirection, autoplayText, autoplayHoverPause, autoplayButton, autoplayButtonHTML, autoplayResetOnVisibility, autoplayHtmlStrings, autoplayTimer, animating, autoplayHoverPaused, autoplayUserPaused, autoplayVisibilityPaused, initPosition, lastPosition, translateInit, disX, disY, panStart, rafIndex, getDist, touch, mouseDrag ].forEach(function(item) { if (item !== null) { console.log(item); } });

    for (var a in this) {
      if (a !== 'rebuild') {
        this[a] = null;
      }
    }
    isOn = false;
  }

  // === ON RESIZE ===
  // responsive || fixedWidth || autoWidth || !horizontal
  function onResize(e) {
    Object(__WEBPACK_IMPORTED_MODULE_0__helpers_raf_js__["a" /* raf */])(function () {
      resizeTasks(getEvent(e));
    });
  }

  function resizeTasks(e) {
    if (!isOn) {
      return;
    }
    if (nested === 'outer') {
      events.emit('outerResized', info(e));
    }
    windowWidth = getWindowWidth();
    var bpChanged,
        breakpointZoneTem = breakpointZone,
        needContainerTransform = false;

    if (responsive) {
      setBreakpointZone();
      bpChanged = breakpointZoneTem !== breakpointZone;
      // if (hasRightDeadZone) { needContainerTransform = true; } // *?
      if (bpChanged) {
        events.emit('newBreakpointStart', info(e));
      }
    }

    var indChanged,
        itemsChanged,
        itemsTem = items,
        disableTem = disable,
        freezeTem = freeze,
        arrowKeysTem = arrowKeys,
        controlsTem = controls,
        navTem = nav,
        touchTem = touch,
        mouseDragTem = mouseDrag,
        autoplayTem = autoplay,
        autoplayHoverPauseTem = autoplayHoverPause,
        autoplayResetOnVisibilityTem = autoplayResetOnVisibility,
        indexTem = index;

    if (bpChanged) {
      var fixedWidthTem = fixedWidth,
          autoHeightTem = autoHeight,
          controlsTextTem = controlsText,
          centerTem = center,
          autoplayTextTem = autoplayText;

      if (!CSSMQ) {
        var gutterTem = gutter,
            edgePaddingTem = edgePadding;
      }
    }

    // get option:
    // fixed width: viewport, fixedWidth, gutter => items
    // others: window width => all variables
    // all: items => slideBy
    arrowKeys = getOption('arrowKeys');
    controls = getOption('controls');
    nav = getOption('nav');
    touch = getOption('touch');
    center = getOption('center');
    mouseDrag = getOption('mouseDrag');
    autoplay = getOption('autoplay');
    autoplayHoverPause = getOption('autoplayHoverPause');
    autoplayResetOnVisibility = getOption('autoplayResetOnVisibility');

    if (bpChanged) {
      disable = getOption('disable');
      fixedWidth = getOption('fixedWidth');
      speed = getOption('speed');
      autoHeight = getOption('autoHeight');
      controlsText = getOption('controlsText');
      autoplayText = getOption('autoplayText');
      autoplayTimeout = getOption('autoplayTimeout');

      if (!CSSMQ) {
        edgePadding = getOption('edgePadding');
        gutter = getOption('gutter');
      }
    }
    // update options
    resetVariblesWhenDisable(disable);

    viewport = getViewportWidth(); // <= edgePadding, gutter
    if ((!horizontal || autoWidth) && !disable) {
      setSlidePositions();
      if (!horizontal) {
        updateContentWrapperHeight(); // <= setSlidePositions
        needContainerTransform = true;
      }
    }
    if (fixedWidth || autoWidth) {
      rightBoundary = getRightBoundary(); // autoWidth: <= viewport, slidePositions, gutter
      // fixedWidth: <= viewport, fixedWidth, gutter
      indexMax = getIndexMax(); // autoWidth: <= rightBoundary, slidePositions
      // fixedWidth: <= rightBoundary, fixedWidth, gutter
    }

    if (bpChanged || fixedWidth) {
      items = getOption('items');
      slideBy = getOption('slideBy');
      itemsChanged = items !== itemsTem;

      if (itemsChanged) {
        if (!fixedWidth && !autoWidth) {
          indexMax = getIndexMax();
        } // <= items
        // check index before transform in case
        // slider reach the right edge then items become bigger
        updateIndex();
      }
    }

    if (bpChanged) {
      if (disable !== disableTem) {
        if (disable) {
          disableSlider();
        } else {
          enableSlider(); // <= slidePositions, rightBoundary, indexMax
        }
      }
    }

    if (freezable && (bpChanged || fixedWidth || autoWidth)) {
      freeze = getFreeze(); // <= autoWidth: slidePositions, gutter, viewport, rightBoundary
      // <= fixedWidth: fixedWidth, gutter, rightBoundary
      // <= others: items

      if (freeze !== freezeTem) {
        if (freeze) {
          doContainerTransform(getContainerTransformValue(getStartIndex(0)));
          freezeSlider();
        } else {
          unfreezeSlider();
          needContainerTransform = true;
        }
      }
    }

    resetVariblesWhenDisable(disable || freeze); // controls, nav, touch, mouseDrag, arrowKeys, autoplay, autoplayHoverPause, autoplayResetOnVisibility
    if (!autoplay) {
      autoplayHoverPause = autoplayResetOnVisibility = false;
    }

    if (arrowKeys !== arrowKeysTem) {
      arrowKeys ? Object(__WEBPACK_IMPORTED_MODULE_30__helpers_addEvents_js__["a" /* addEvents */])(doc, docmentKeydownEvent) : Object(__WEBPACK_IMPORTED_MODULE_31__helpers_removeEvents_js__["a" /* removeEvents */])(doc, docmentKeydownEvent);
    }
    if (controls !== controlsTem) {
      if (controls) {
        if (controlsContainer) {
          Object(__WEBPACK_IMPORTED_MODULE_25__helpers_showElement_js__["a" /* showElement */])(controlsContainer);
        } else {
          if (prevButton) {
            Object(__WEBPACK_IMPORTED_MODULE_25__helpers_showElement_js__["a" /* showElement */])(prevButton);
          }
          if (nextButton) {
            Object(__WEBPACK_IMPORTED_MODULE_25__helpers_showElement_js__["a" /* showElement */])(nextButton);
          }
        }
      } else {
        if (controlsContainer) {
          Object(__WEBPACK_IMPORTED_MODULE_24__helpers_hideElement_js__["a" /* hideElement */])(controlsContainer);
        } else {
          if (prevButton) {
            Object(__WEBPACK_IMPORTED_MODULE_24__helpers_hideElement_js__["a" /* hideElement */])(prevButton);
          }
          if (nextButton) {
            Object(__WEBPACK_IMPORTED_MODULE_24__helpers_hideElement_js__["a" /* hideElement */])(nextButton);
          }
        }
      }
    }
    if (nav !== navTem) {
      nav ? Object(__WEBPACK_IMPORTED_MODULE_25__helpers_showElement_js__["a" /* showElement */])(navContainer) : Object(__WEBPACK_IMPORTED_MODULE_24__helpers_hideElement_js__["a" /* hideElement */])(navContainer);
    }
    if (touch !== touchTem) {
      touch ? Object(__WEBPACK_IMPORTED_MODULE_30__helpers_addEvents_js__["a" /* addEvents */])(container, touchEvents, options.preventScrollOnTouch) : Object(__WEBPACK_IMPORTED_MODULE_31__helpers_removeEvents_js__["a" /* removeEvents */])(container, touchEvents);
    }
    if (mouseDrag !== mouseDragTem) {
      mouseDrag ? Object(__WEBPACK_IMPORTED_MODULE_30__helpers_addEvents_js__["a" /* addEvents */])(container, dragEvents) : Object(__WEBPACK_IMPORTED_MODULE_31__helpers_removeEvents_js__["a" /* removeEvents */])(container, dragEvents);
    }
    if (autoplay !== autoplayTem) {
      if (autoplay) {
        if (autoplayButton) {
          Object(__WEBPACK_IMPORTED_MODULE_25__helpers_showElement_js__["a" /* showElement */])(autoplayButton);
        }
        if (!animating && !autoplayUserPaused) {
          startAutoplay();
        }
      } else {
        if (autoplayButton) {
          Object(__WEBPACK_IMPORTED_MODULE_24__helpers_hideElement_js__["a" /* hideElement */])(autoplayButton);
        }
        if (animating) {
          stopAutoplay();
        }
      }
    }
    if (autoplayHoverPause !== autoplayHoverPauseTem) {
      autoplayHoverPause ? Object(__WEBPACK_IMPORTED_MODULE_30__helpers_addEvents_js__["a" /* addEvents */])(container, hoverEvents) : Object(__WEBPACK_IMPORTED_MODULE_31__helpers_removeEvents_js__["a" /* removeEvents */])(container, hoverEvents);
    }
    if (autoplayResetOnVisibility !== autoplayResetOnVisibilityTem) {
      autoplayResetOnVisibility ? Object(__WEBPACK_IMPORTED_MODULE_30__helpers_addEvents_js__["a" /* addEvents */])(doc, visibilityEvent) : Object(__WEBPACK_IMPORTED_MODULE_31__helpers_removeEvents_js__["a" /* removeEvents */])(doc, visibilityEvent);
    }

    if (bpChanged) {
      if (fixedWidth !== fixedWidthTem || center !== centerTem) {
        needContainerTransform = true;
      }

      if (autoHeight !== autoHeightTem) {
        if (!autoHeight) {
          innerWrapper.style.height = '';
        }
      }

      if (controls && controlsText !== controlsTextTem) {
        prevButton.innerHTML = controlsText[0];
        nextButton.innerHTML = controlsText[1];
      }

      if (autoplayButton && autoplayText !== autoplayTextTem) {
        var i = autoplay ? 1 : 0,
            html = autoplayButton.innerHTML,
            len = html.length - autoplayTextTem[i].length;
        if (html.substring(len) === autoplayTextTem[i]) {
          autoplayButton.innerHTML = html.substring(0, len) + autoplayText[i];
        }
      }
    } else {
      if (center && (fixedWidth || autoWidth)) {
        needContainerTransform = true;
      }
    }

    if (itemsChanged || fixedWidth && !autoWidth) {
      pages = getPages();
      updateNavVisibility();
    }

    indChanged = index !== indexTem;
    if (indChanged) {
      events.emit('indexChanged', info());
      needContainerTransform = true;
    } else if (itemsChanged) {
      if (!indChanged) {
        additionalUpdates();
      }
    } else if (fixedWidth || autoWidth) {
      doLazyLoad();
      updateSlideStatus();
      updateLiveRegion();
    }

    if (itemsChanged || !carousel) {
      updateGallerySlidePositions();
    }

    if (!disable && !freeze) {
      // non-meduaqueries: IE8
      if (bpChanged && !CSSMQ) {
        // middle wrapper styles
        if (autoHeight !== autoheightTem || speed !== speedTem) {
          update_carousel_transition_duration();
        }

        // inner wrapper styles
        if (edgePadding !== edgePaddingTem || gutter !== gutterTem) {
          innerWrapper.style.cssText = getInnerWrapperStyles(edgePadding, gutter, fixedWidth, speed, autoHeight);
        }

        if (horizontal) {
          // container styles
          if (carousel) {
            container.style.width = getContainerWidth(fixedWidth, gutter, items);
          }

          // slide styles
          var str = getSlideWidthStyle(fixedWidth, gutter, items) + getSlideGutterStyle(gutter);

          // remove the last line and
          // add new styles
          Object(__WEBPACK_IMPORTED_MODULE_11__helpers_removeCSSRule_js__["a" /* removeCSSRule */])(sheet, Object(__WEBPACK_IMPORTED_MODULE_12__helpers_getCssRulesLength_js__["a" /* getCssRulesLength */])(sheet) - 1);
          Object(__WEBPACK_IMPORTED_MODULE_10__helpers_addCSSRule_js__["a" /* addCSSRule */])(sheet, '#' + slideId + ' > .tns-item', str, Object(__WEBPACK_IMPORTED_MODULE_12__helpers_getCssRulesLength_js__["a" /* getCssRulesLength */])(sheet));
        }
      }

      // auto height
      if (autoHeight) {
        doAutoHeight();
      }

      if (needContainerTransform) {
        doContainerTransformSilent();
        indexCached = index;
      }
    }

    if (bpChanged) {
      events.emit('newBreakpointEnd', info(e));
    }
  }

  // === INITIALIZATION FUNCTIONS === //
  function getFreeze() {
    if (!fixedWidth && !autoWidth) {
      var a = center ? items - (items - 1) / 2 : items;
      return slideCount <= a;
    }

    var width = fixedWidth ? (fixedWidth + gutter) * slideCount : slidePositions[slideCount],
        vp = edgePadding ? viewport + edgePadding * 2 : viewport + gutter;

    if (center) {
      vp -= fixedWidth ? (viewport - fixedWidth) / 2 : (viewport - (slidePositions[index + 1] - slidePositions[index] - gutter)) / 2;
    }

    return width <= vp;
  }

  function setBreakpointZone() {
    breakpointZone = 0;
    for (var bp in responsive) {
      bp = parseInt(bp); // convert string to number
      if (windowWidth >= bp) {
        breakpointZone = bp;
      }
    }
  }

  // (slideBy, indexMin, indexMax) => index
  var updateIndex = function () {
    return loop ? carousel ?
    // loop + carousel
    function () {
      var leftEdge = indexMin,
          rightEdge = indexMax;

      leftEdge += slideBy;
      rightEdge -= slideBy;

      // adjust edges when has edge paddings
      // or fixed-width slider with extra space on the right side
      if (edgePadding) {
        leftEdge += 1;
        rightEdge -= 1;
      } else if (fixedWidth) {
        if ((viewport + gutter) % (fixedWidth + gutter)) {
          rightEdge -= 1;
        }
      }

      if (cloneCount) {
        if (index > rightEdge) {
          index -= slideCount;
        } else if (index < leftEdge) {
          index += slideCount;
        }
      }
    } :
    // loop + gallery
    function () {
      if (index > indexMax) {
        while (index >= indexMin + slideCount) {
          index -= slideCount;
        }
      } else if (index < indexMin) {
        while (index <= indexMax - slideCount) {
          index += slideCount;
        }
      }
    } :
    // non-loop
    function () {
      index = Math.max(indexMin, Math.min(indexMax, index));
    };
  }();

  function disableUI() {
    if (!autoplay && autoplayButton) {
      Object(__WEBPACK_IMPORTED_MODULE_24__helpers_hideElement_js__["a" /* hideElement */])(autoplayButton);
    }
    if (!nav && navContainer) {
      Object(__WEBPACK_IMPORTED_MODULE_24__helpers_hideElement_js__["a" /* hideElement */])(navContainer);
    }
    if (!controls) {
      if (controlsContainer) {
        Object(__WEBPACK_IMPORTED_MODULE_24__helpers_hideElement_js__["a" /* hideElement */])(controlsContainer);
      } else {
        if (prevButton) {
          Object(__WEBPACK_IMPORTED_MODULE_24__helpers_hideElement_js__["a" /* hideElement */])(prevButton);
        }
        if (nextButton) {
          Object(__WEBPACK_IMPORTED_MODULE_24__helpers_hideElement_js__["a" /* hideElement */])(nextButton);
        }
      }
    }
  }

  function enableUI() {
    if (autoplay && autoplayButton) {
      Object(__WEBPACK_IMPORTED_MODULE_25__helpers_showElement_js__["a" /* showElement */])(autoplayButton);
    }
    if (nav && navContainer) {
      Object(__WEBPACK_IMPORTED_MODULE_25__helpers_showElement_js__["a" /* showElement */])(navContainer);
    }
    if (controls) {
      if (controlsContainer) {
        Object(__WEBPACK_IMPORTED_MODULE_25__helpers_showElement_js__["a" /* showElement */])(controlsContainer);
      } else {
        if (prevButton) {
          Object(__WEBPACK_IMPORTED_MODULE_25__helpers_showElement_js__["a" /* showElement */])(prevButton);
        }
        if (nextButton) {
          Object(__WEBPACK_IMPORTED_MODULE_25__helpers_showElement_js__["a" /* showElement */])(nextButton);
        }
      }
    }
  }

  function freezeSlider() {
    if (frozen) {
      return;
    }

    // remove edge padding from inner wrapper
    if (edgePadding) {
      innerWrapper.style.margin = '0px';
    }

    // add class tns-transparent to cloned slides
    if (cloneCount) {
      var str = 'tns-transparent';
      for (var i = cloneCount; i--;) {
        if (carousel) {
          Object(__WEBPACK_IMPORTED_MODULE_17__helpers_addClass_js__["a" /* addClass */])(slideItems[i], str);
        }
        Object(__WEBPACK_IMPORTED_MODULE_17__helpers_addClass_js__["a" /* addClass */])(slideItems[slideCountNew - i - 1], str);
      }
    }

    // update tools
    disableUI();

    frozen = true;
  }

  function unfreezeSlider() {
    if (!frozen) {
      return;
    }

    // restore edge padding for inner wrapper
    // for mordern browsers
    if (edgePadding && CSSMQ) {
      innerWrapper.style.margin = '';
    }

    // remove class tns-transparent to cloned slides
    if (cloneCount) {
      var str = 'tns-transparent';
      for (var i = cloneCount; i--;) {
        if (carousel) {
          Object(__WEBPACK_IMPORTED_MODULE_18__helpers_removeClass_js__["a" /* removeClass */])(slideItems[i], str);
        }
        Object(__WEBPACK_IMPORTED_MODULE_18__helpers_removeClass_js__["a" /* removeClass */])(slideItems[slideCountNew - i - 1], str);
      }
    }

    // update tools
    enableUI();

    frozen = false;
  }

  function disableSlider() {
    if (disabled) {
      return;
    }

    sheet.disabled = true;
    container.className = container.className.replace(newContainerClasses.substring(1), '');
    Object(__WEBPACK_IMPORTED_MODULE_22__helpers_removeAttrs_js__["a" /* removeAttrs */])(container, ['style']);
    if (loop) {
      for (var j = cloneCount; j--;) {
        if (carousel) {
          Object(__WEBPACK_IMPORTED_MODULE_24__helpers_hideElement_js__["a" /* hideElement */])(slideItems[j]);
        }
        Object(__WEBPACK_IMPORTED_MODULE_24__helpers_hideElement_js__["a" /* hideElement */])(slideItems[slideCountNew - j - 1]);
      }
    }

    // vertical slider
    if (!horizontal || !carousel) {
      Object(__WEBPACK_IMPORTED_MODULE_22__helpers_removeAttrs_js__["a" /* removeAttrs */])(innerWrapper, ['style']);
    }

    // gallery
    if (!carousel) {
      for (var i = index, l = index + slideCount; i < l; i++) {
        var item = slideItems[i];
        Object(__WEBPACK_IMPORTED_MODULE_22__helpers_removeAttrs_js__["a" /* removeAttrs */])(item, ['style']);
        Object(__WEBPACK_IMPORTED_MODULE_18__helpers_removeClass_js__["a" /* removeClass */])(item, animateIn);
        Object(__WEBPACK_IMPORTED_MODULE_18__helpers_removeClass_js__["a" /* removeClass */])(item, animateNormal);
      }
    }

    // update tools
    disableUI();

    disabled = true;
  }

  function enableSlider() {
    if (!disabled) {
      return;
    }

    sheet.disabled = false;
    container.className += newContainerClasses;
    doContainerTransformSilent();

    if (loop) {
      for (var j = cloneCount; j--;) {
        if (carousel) {
          Object(__WEBPACK_IMPORTED_MODULE_25__helpers_showElement_js__["a" /* showElement */])(slideItems[j]);
        }
        Object(__WEBPACK_IMPORTED_MODULE_25__helpers_showElement_js__["a" /* showElement */])(slideItems[slideCountNew - j - 1]);
      }
    }

    // gallery
    if (!carousel) {
      for (var i = index, l = index + slideCount; i < l; i++) {
        var item = slideItems[i],
            classN = i < index + items ? animateIn : animateNormal;
        item.style.left = (i - index) * 100 / items + '%';
        Object(__WEBPACK_IMPORTED_MODULE_17__helpers_addClass_js__["a" /* addClass */])(item, classN);
      }
    }

    // update tools
    enableUI();

    disabled = false;
  }

  function updateLiveRegion() {
    var str = getLiveRegionStr();
    if (liveregionCurrent.innerHTML !== str) {
      liveregionCurrent.innerHTML = str;
    }
  }

  function getLiveRegionStr() {
    var arr = getVisibleSlideRange(),
        start = arr[0] + 1,
        end = arr[1] + 1;
    return start === end ? start + '' : start + ' to ' + end;
  }

  function getVisibleSlideRange(val) {
    if (val == null) {
      val = getContainerTransformValue();
    }
    var start = index,
        end,
        rangestart,
        rangeend;

    // get range start, range end for autoWidth and fixedWidth
    if (center || edgePadding) {
      if (autoWidth || fixedWidth) {
        rangestart = -(parseFloat(val) + edgePadding);
        rangeend = rangestart + viewport + edgePadding * 2;
      }
    } else {
      if (autoWidth) {
        rangestart = slidePositions[index];
        rangeend = rangestart + viewport;
      }
    }

    // get start, end
    // - check auto width
    if (autoWidth) {
      slidePositions.forEach(function (point, i) {
        if (i < slideCountNew) {
          if ((center || edgePadding) && point <= rangestart + 0.5) {
            start = i;
          }
          if (rangeend - point >= 0.5) {
            end = i;
          }
        }
      });

      // - check percentage width, fixed width
    } else {

      if (fixedWidth) {
        var cell = fixedWidth + gutter;
        if (center || edgePadding) {
          start = Math.floor(rangestart / cell);
          end = Math.ceil(rangeend / cell - 1);
        } else {
          end = start + Math.ceil(viewport / cell) - 1;
        }
      } else {
        if (center || edgePadding) {
          var a = items - 1;
          if (center) {
            start -= a / 2;
            end = index + a / 2;
          } else {
            end = index + a;
          }

          if (edgePadding) {
            var b = edgePadding * items / viewport;
            start -= b;
            end += b;
          }

          start = Math.floor(start);
          end = Math.ceil(end);
        } else {
          end = start + items - 1;
        }
      }

      start = Math.max(start, 0);
      end = Math.min(end, slideCountNew - 1);
    }

    return [start, end];
  }

  function doLazyLoad() {
    if (lazyload && !disable) {
      getImageArray.apply(null, getVisibleSlideRange()).forEach(function (img) {
        if (!Object(__WEBPACK_IMPORTED_MODULE_16__helpers_hasClass_js__["b" /* hasClass */])(img, imgCompleteClass)) {
          // stop propagation transitionend event to container
          var eve = {};
          eve[TRANSITIONEND] = function (e) {
            e.stopPropagation();
          };
          Object(__WEBPACK_IMPORTED_MODULE_30__helpers_addEvents_js__["a" /* addEvents */])(img, eve);

          Object(__WEBPACK_IMPORTED_MODULE_30__helpers_addEvents_js__["a" /* addEvents */])(img, imgEvents);

          // update src
          img.src = Object(__WEBPACK_IMPORTED_MODULE_20__helpers_getAttr_js__["a" /* getAttr */])(img, 'data-src');

          // update srcset
          var srcset = Object(__WEBPACK_IMPORTED_MODULE_20__helpers_getAttr_js__["a" /* getAttr */])(img, 'data-srcset');
          if (srcset) {
            img.srcset = srcset;
          }

          Object(__WEBPACK_IMPORTED_MODULE_17__helpers_addClass_js__["a" /* addClass */])(img, 'loading');
        }
      });
    }
  }

  function onImgLoaded(e) {
    imgLoaded(getTarget(e));
  }

  function onImgFailed(e) {
    imgFailed(getTarget(e));
  }

  function imgLoaded(img) {
    Object(__WEBPACK_IMPORTED_MODULE_17__helpers_addClass_js__["a" /* addClass */])(img, 'loaded');
    imgCompleted(img);
  }

  function imgFailed(img) {
    Object(__WEBPACK_IMPORTED_MODULE_17__helpers_addClass_js__["a" /* addClass */])(img, 'failed');
    imgCompleted(img);
  }

  function imgCompleted(img) {
    Object(__WEBPACK_IMPORTED_MODULE_17__helpers_addClass_js__["a" /* addClass */])(img, 'tns-complete');
    Object(__WEBPACK_IMPORTED_MODULE_18__helpers_removeClass_js__["a" /* removeClass */])(img, 'loading');
    Object(__WEBPACK_IMPORTED_MODULE_31__helpers_removeEvents_js__["a" /* removeEvents */])(img, imgEvents);
  }

  function getImageArray(start, end) {
    var imgs = [];
    while (start <= end) {
      Object(__WEBPACK_IMPORTED_MODULE_15__helpers_forEach_js__["a" /* forEach */])(slideItems[start].querySelectorAll('img'), function (img) {
        imgs.push(img);
      });
      start++;
    }

    return imgs;
  }

  // check if all visible images are loaded
  // and update container height if it's done
  function doAutoHeight() {
    var imgs = getImageArray.apply(null, getVisibleSlideRange());
    Object(__WEBPACK_IMPORTED_MODULE_0__helpers_raf_js__["a" /* raf */])(function () {
      imgsLoadedCheck(imgs, updateInnerWrapperHeight);
    });
  }

  function imgsLoadedCheck(imgs, cb) {
    // directly execute callback function if all images are complete
    if (imgsComplete) {
      return cb();
    }

    // check selected image classes otherwise
    imgs.forEach(function (img, index) {
      if (Object(__WEBPACK_IMPORTED_MODULE_16__helpers_hasClass_js__["b" /* hasClass */])(img, imgCompleteClass)) {
        imgs.splice(index, 1);
      }
    });

    // execute callback function if selected images are all complete
    if (!imgs.length) {
      return cb();
    }

    // otherwise execute this functiona again
    Object(__WEBPACK_IMPORTED_MODULE_0__helpers_raf_js__["a" /* raf */])(function () {
      imgsLoadedCheck(imgs, cb);
    });
  }

  function additionalUpdates() {
    doLazyLoad();
    updateSlideStatus();
    updateLiveRegion();
    updateControlsStatus();
    updateNavStatus();
  }

  function update_carousel_transition_duration() {
    if (carousel && autoHeight) {
      middleWrapper.style[TRANSITIONDURATION] = speed / 1000 + 's';
    }
  }

  function getMaxSlideHeight(slideStart, slideRange) {
    var heights = [];
    for (var i = slideStart, l = Math.min(slideStart + slideRange, slideCountNew); i < l; i++) {
      heights.push(slideItems[i].offsetHeight);
    }

    return Math.max.apply(null, heights);
  }

  // update inner wrapper height
  // 1. get the max-height of the visible slides
  // 2. set transitionDuration to speed
  // 3. update inner wrapper height to max-height
  // 4. set transitionDuration to 0s after transition done
  function updateInnerWrapperHeight() {
    var maxHeight = autoHeight ? getMaxSlideHeight(index, items) : getMaxSlideHeight(cloneCount, slideCount),
        wp = middleWrapper ? middleWrapper : innerWrapper;

    if (wp.style.height !== maxHeight) {
      wp.style.height = maxHeight + 'px';
    }
  }

  // get the distance from the top edge of the first slide to each slide
  // (init) => slidePositions
  function setSlidePositions() {
    slidePositions = [0];
    var attr = horizontal ? 'left' : 'top',
        attr2 = horizontal ? 'right' : 'bottom',
        base = slideItems[0].getBoundingClientRect()[attr];

    Object(__WEBPACK_IMPORTED_MODULE_15__helpers_forEach_js__["a" /* forEach */])(slideItems, function (item, i) {
      // skip the first slide
      if (i) {
        slidePositions.push(item.getBoundingClientRect()[attr] - base);
      }
      // add the end edge
      if (i === slideCountNew - 1) {
        slidePositions.push(item.getBoundingClientRect()[attr2] - base);
      }
    });
  }

  // update slide
  function updateSlideStatus() {
    var range = getVisibleSlideRange(),
        start = range[0],
        end = range[1];

    Object(__WEBPACK_IMPORTED_MODULE_15__helpers_forEach_js__["a" /* forEach */])(slideItems, function (item, i) {
      // show slides
      if (i >= start && i <= end) {
        if (Object(__WEBPACK_IMPORTED_MODULE_19__helpers_hasAttr_js__["a" /* hasAttr */])(item, 'aria-hidden')) {
          Object(__WEBPACK_IMPORTED_MODULE_22__helpers_removeAttrs_js__["a" /* removeAttrs */])(item, ['aria-hidden', 'tabindex']);
          Object(__WEBPACK_IMPORTED_MODULE_17__helpers_addClass_js__["a" /* addClass */])(item, slideActiveClass);
        }
        // hide slides
      } else {
        if (!Object(__WEBPACK_IMPORTED_MODULE_19__helpers_hasAttr_js__["a" /* hasAttr */])(item, 'aria-hidden')) {
          Object(__WEBPACK_IMPORTED_MODULE_21__helpers_setAttrs_js__["a" /* setAttrs */])(item, {
            'aria-hidden': 'true',
            'tabindex': '-1'
          });
          Object(__WEBPACK_IMPORTED_MODULE_18__helpers_removeClass_js__["a" /* removeClass */])(item, slideActiveClass);
        }
      }
    });
  }

  // gallery: update slide position
  function updateGallerySlidePositions() {
    var l = index + Math.min(slideCount, items);
    for (var i = slideCountNew; i--;) {
      var item = slideItems[i];

      if (i >= index && i < l) {
        // add transitions to visible slides when adjusting their positions
        Object(__WEBPACK_IMPORTED_MODULE_17__helpers_addClass_js__["a" /* addClass */])(item, 'tns-moving');

        item.style.left = (i - index) * 100 / items + '%';
        Object(__WEBPACK_IMPORTED_MODULE_17__helpers_addClass_js__["a" /* addClass */])(item, animateIn);
        Object(__WEBPACK_IMPORTED_MODULE_18__helpers_removeClass_js__["a" /* removeClass */])(item, animateNormal);
      } else if (item.style.left) {
        item.style.left = '';
        Object(__WEBPACK_IMPORTED_MODULE_17__helpers_addClass_js__["a" /* addClass */])(item, animateNormal);
        Object(__WEBPACK_IMPORTED_MODULE_18__helpers_removeClass_js__["a" /* removeClass */])(item, animateIn);
      }

      // remove outlet animation
      Object(__WEBPACK_IMPORTED_MODULE_18__helpers_removeClass_js__["a" /* removeClass */])(item, animateOut);
    }

    // removing '.tns-moving'
    setTimeout(function () {
      Object(__WEBPACK_IMPORTED_MODULE_15__helpers_forEach_js__["a" /* forEach */])(slideItems, function (el) {
        Object(__WEBPACK_IMPORTED_MODULE_18__helpers_removeClass_js__["a" /* removeClass */])(el, 'tns-moving');
      });
    }, 300);
  }

  // set tabindex on Nav
  function updateNavStatus() {
    // get current nav
    if (nav) {
      navCurrentIndex = navClicked >= 0 ? navClicked : getCurrentNavIndex();
      navClicked = -1;

      if (navCurrentIndex !== navCurrentIndexCached) {
        var navPrev = navItems[navCurrentIndexCached],
            navCurrent = navItems[navCurrentIndex];

        Object(__WEBPACK_IMPORTED_MODULE_21__helpers_setAttrs_js__["a" /* setAttrs */])(navPrev, {
          'tabindex': '-1',
          'aria-label': navStr + (navCurrentIndexCached + 1)
        });
        Object(__WEBPACK_IMPORTED_MODULE_18__helpers_removeClass_js__["a" /* removeClass */])(navPrev, navActiveClass);

        Object(__WEBPACK_IMPORTED_MODULE_21__helpers_setAttrs_js__["a" /* setAttrs */])(navCurrent, { 'aria-label': navStr + (navCurrentIndex + 1) + navStrCurrent });
        Object(__WEBPACK_IMPORTED_MODULE_22__helpers_removeAttrs_js__["a" /* removeAttrs */])(navCurrent, 'tabindex');
        Object(__WEBPACK_IMPORTED_MODULE_17__helpers_addClass_js__["a" /* addClass */])(navCurrent, navActiveClass);

        navCurrentIndexCached = navCurrentIndex;
      }
    }
  }

  function getLowerCaseNodeName(el) {
    return el.nodeName.toLowerCase();
  }

  function isButton(el) {
    return getLowerCaseNodeName(el) === 'button';
  }

  function isAriaDisabled(el) {
    return el.getAttribute('aria-disabled') === 'true';
  }

  function disEnableElement(isButton, el, val) {
    if (isButton) {
      el.disabled = val;
    } else {
      el.setAttribute('aria-disabled', val.toString());
    }
  }

  // set 'disabled' to true on controls when reach the edges
  function updateControlsStatus() {
    if (!controls || rewind || loop) {
      return;
    }

    var prevDisabled = prevIsButton ? prevButton.disabled : isAriaDisabled(prevButton),
        nextDisabled = nextIsButton ? nextButton.disabled : isAriaDisabled(nextButton),
        disablePrev = index <= indexMin ? true : false,
        disableNext = !rewind && index >= indexMax ? true : false;

    if (disablePrev && !prevDisabled) {
      disEnableElement(prevIsButton, prevButton, true);
    }
    if (!disablePrev && prevDisabled) {
      disEnableElement(prevIsButton, prevButton, false);
    }
    if (disableNext && !nextDisabled) {
      disEnableElement(nextIsButton, nextButton, true);
    }
    if (!disableNext && nextDisabled) {
      disEnableElement(nextIsButton, nextButton, false);
    }
  }

  // set duration
  function resetDuration(el, str) {
    if (TRANSITIONDURATION) {
      el.style[TRANSITIONDURATION] = str;
    }
  }

  function getSliderWidth() {
    return fixedWidth ? (fixedWidth + gutter) * slideCountNew : slidePositions[slideCountNew];
  }

  function getCenterGap(num) {
    if (num == null) {
      num = index;
    }

    var gap = edgePadding ? gutter : 0;
    return autoWidth ? (viewport - gap - (slidePositions[num + 1] - slidePositions[num] - gutter)) / 2 : fixedWidth ? (viewport - fixedWidth) / 2 : (items - 1) / 2;
  }

  function getRightBoundary() {
    var gap = edgePadding ? gutter : 0,
        result = viewport + gap - getSliderWidth();

    if (center && !loop) {
      result = fixedWidth ? -(fixedWidth + gutter) * (slideCountNew - 1) - getCenterGap() : getCenterGap(slideCountNew - 1) - slidePositions[slideCountNew - 1];
    }
    if (result > 0) {
      result = 0;
    }

    return result;
  }

  function getContainerTransformValue(num) {
    if (num == null) {
      num = index;
    }

    var val;
    if (horizontal && !autoWidth) {
      if (fixedWidth) {
        val = -(fixedWidth + gutter) * num;
        if (center) {
          val += getCenterGap();
        }
      } else {
        var denominator = TRANSFORM ? slideCountNew : items;
        if (center) {
          num -= getCenterGap();
        }
        val = -num * 100 / denominator;
      }
    } else {
      val = -slidePositions[num];
      if (center && autoWidth) {
        val += getCenterGap();
      }
    }

    if (hasRightDeadZone) {
      val = Math.max(val, rightBoundary);
    }

    val += horizontal && !autoWidth && !fixedWidth ? '%' : 'px';

    return val;
  }

  function doContainerTransformSilent(val) {
    resetDuration(container, '0s');
    doContainerTransform(val);
  }

  function doContainerTransform(val) {
    if (val == null) {
      val = getContainerTransformValue();
    }
    container.style[transformAttr] = transformPrefix + val + transformPostfix;
  }

  function animateSlide(number, classOut, classIn, isOut) {
    var l = number + items;
    if (!loop) {
      l = Math.min(l, slideCountNew);
    }

    for (var i = number; i < l; i++) {
      var item = slideItems[i];

      // set item positions
      if (!isOut) {
        item.style.left = (i - index) * 100 / items + '%';
      }

      if (animateDelay && TRANSITIONDELAY) {
        item.style[TRANSITIONDELAY] = item.style[ANIMATIONDELAY] = animateDelay * (i - number) / 1000 + 's';
      }
      Object(__WEBPACK_IMPORTED_MODULE_18__helpers_removeClass_js__["a" /* removeClass */])(item, classOut);
      Object(__WEBPACK_IMPORTED_MODULE_17__helpers_addClass_js__["a" /* addClass */])(item, classIn);

      if (isOut) {
        slideItemsOut.push(item);
      }
    }
  }

  // make transfer after click/drag:
  // 1. change 'transform' property for mordern browsers
  // 2. change 'left' property for legacy browsers
  var transformCore = function () {
    return carousel ? function () {
      resetDuration(container, '');
      if (TRANSITIONDURATION || !speed) {
        // for morden browsers with non-zero duration or 
        // zero duration for all browsers
        doContainerTransform();
        // run fallback function manually 
        // when duration is 0 / container is hidden
        if (!speed || !Object(__WEBPACK_IMPORTED_MODULE_26__helpers_isVisible_js__["a" /* isVisible */])(container)) {
          onTransitionEnd();
        }
      } else {
        // for old browser with non-zero duration
        Object(__WEBPACK_IMPORTED_MODULE_33__helpers_jsTransform_js__["a" /* jsTransform */])(container, transformAttr, transformPrefix, transformPostfix, getContainerTransformValue(), speed, onTransitionEnd);
      }

      if (!horizontal) {
        updateContentWrapperHeight();
      }
    } : function () {
      slideItemsOut = [];

      var eve = {};
      eve[TRANSITIONEND] = eve[ANIMATIONEND] = onTransitionEnd;
      Object(__WEBPACK_IMPORTED_MODULE_31__helpers_removeEvents_js__["a" /* removeEvents */])(slideItems[indexCached], eve);
      Object(__WEBPACK_IMPORTED_MODULE_30__helpers_addEvents_js__["a" /* addEvents */])(slideItems[index], eve);

      animateSlide(indexCached, animateIn, animateOut, true);
      animateSlide(index, animateNormal, animateIn);

      // run fallback function manually 
      // when transition or animation not supported / duration is 0
      if (!TRANSITIONEND || !ANIMATIONEND || !speed || !Object(__WEBPACK_IMPORTED_MODULE_26__helpers_isVisible_js__["a" /* isVisible */])(container)) {
        onTransitionEnd();
      }
    };
  }();

  function render(e, sliderMoved) {
    if (updateIndexBeforeTransform) {
      updateIndex();
    }

    // render when slider was moved (touch or drag) even though index may not change
    if (index !== indexCached || sliderMoved) {
      // events
      events.emit('indexChanged', info());
      events.emit('transitionStart', info());
      if (autoHeight) {
        doAutoHeight();
      }

      // pause autoplay when click or keydown from user
      if (animating && e && ['click', 'keydown'].indexOf(e.type) >= 0) {
        stopAutoplay();
      }

      running = true;
      transformCore();
    }
  }

  /*
   * Transfer prefixed properties to the same format
   * CSS: -Webkit-Transform => webkittransform
   * JS: WebkitTransform => webkittransform
   * @param {string} str - property
   *
   */
  function strTrans(str) {
    return str.toLowerCase().replace(/-/g, '');
  }

  // AFTER TRANSFORM
  // Things need to be done after a transfer:
  // 1. check index
  // 2. add classes to visible slide
  // 3. disable controls buttons when reach the first/last slide in non-loop slider
  // 4. update nav status
  // 5. lazyload images
  // 6. update container height
  function onTransitionEnd(event) {
    // check running on gallery mode
    // make sure trantionend/animationend events run only once
    if (carousel || running) {
      events.emit('transitionEnd', info(event));

      if (!carousel && slideItemsOut.length > 0) {
        for (var i = 0; i < slideItemsOut.length; i++) {
          var item = slideItemsOut[i];
          // set item positions
          item.style.left = '';

          if (ANIMATIONDELAY && TRANSITIONDELAY) {
            item.style[ANIMATIONDELAY] = '';
            item.style[TRANSITIONDELAY] = '';
          }
          Object(__WEBPACK_IMPORTED_MODULE_18__helpers_removeClass_js__["a" /* removeClass */])(item, animateOut);
          Object(__WEBPACK_IMPORTED_MODULE_17__helpers_addClass_js__["a" /* addClass */])(item, animateNormal);
        }
      }

      /* update slides, nav, controls after checking ...
       * => legacy browsers who don't support 'event' 
       *    have to check event first, otherwise event.target will cause an error 
       * => or 'gallery' mode: 
       *   + event target is slide item
       * => or 'carousel' mode: 
       *   + event target is container, 
       *   + event.property is the same with transform attribute
       */
      if (!event || !carousel && event.target.parentNode === container || event.target === container && strTrans(event.propertyName) === strTrans(transformAttr)) {

        if (!updateIndexBeforeTransform) {
          var indexTem = index;
          updateIndex();
          if (index !== indexTem) {
            events.emit('indexChanged', info());

            doContainerTransformSilent();
          }
        }

        if (nested === 'inner') {
          events.emit('innerLoaded', info());
        }
        running = false;
        indexCached = index;
      }
    }
  }

  // # ACTIONS
  function goTo(targetIndex, e) {
    if (freeze) {
      return;
    }

    // prev slideBy
    if (targetIndex === 'prev') {
      onControlsClick(e, -1);

      // next slideBy
    } else if (targetIndex === 'next') {
      onControlsClick(e, 1);

      // go to exact slide
    } else {
      if (running) {
        if (preventActionWhenRunning) {
          return;
        } else {
          onTransitionEnd();
        }
      }

      var absIndex = getAbsIndex(),
          indexGap = 0;

      if (targetIndex === 'first') {
        indexGap = -absIndex;
      } else if (targetIndex === 'last') {
        indexGap = carousel ? slideCount - items - absIndex : slideCount - 1 - absIndex;
      } else {
        if (typeof targetIndex !== 'number') {
          targetIndex = parseInt(targetIndex);
        }

        if (!isNaN(targetIndex)) {
          // from directly called goTo function
          if (!e) {
            targetIndex = Math.max(0, Math.min(slideCount - 1, targetIndex));
          }

          indexGap = targetIndex - absIndex;
        }
      }

      // gallery: make sure new page won't overlap with current page
      if (!carousel && indexGap && Math.abs(indexGap) < items) {
        var factor = indexGap > 0 ? 1 : -1;
        indexGap += index + indexGap - slideCount >= indexMin ? slideCount * factor : slideCount * 2 * factor * -1;
      }

      index += indexGap;

      // make sure index is in range
      if (carousel && loop) {
        if (index < indexMin) {
          index += slideCount;
        }
        if (index > indexMax) {
          index -= slideCount;
        }
      }

      // if index is changed, start rendering
      if (getAbsIndex(index) !== getAbsIndex(indexCached)) {
        render(e);
      }
    }
  }

  // on controls click
  function onControlsClick(e, dir) {
    if (running) {
      if (preventActionWhenRunning) {
        return;
      } else {
        onTransitionEnd();
      }
    }
    var passEventObject;

    if (!dir) {
      e = getEvent(e);
      var target = getTarget(e);

      while (target !== controlsContainer && [prevButton, nextButton].indexOf(target) < 0) {
        target = target.parentNode;
      }

      var targetIn = [prevButton, nextButton].indexOf(target);
      if (targetIn >= 0) {
        passEventObject = true;
        dir = targetIn === 0 ? -1 : 1;
      }
    }

    if (rewind) {
      if (index === indexMin && dir === -1) {
        goTo('last', e);
        return;
      } else if (index === indexMax && dir === 1) {
        goTo('first', e);
        return;
      }
    }

    if (dir) {
      index += slideBy * dir;
      if (autoWidth) {
        index = Math.floor(index);
      }
      // pass e when click control buttons or keydown
      render(passEventObject || e && e.type === 'keydown' ? e : null);
    }
  }

  // on nav click
  function onNavClick(e) {
    if (running) {
      if (preventActionWhenRunning) {
        return;
      } else {
        onTransitionEnd();
      }
    }

    e = getEvent(e);
    var target = getTarget(e),
        navIndex;

    // find the clicked nav item
    while (target !== navContainer && !Object(__WEBPACK_IMPORTED_MODULE_19__helpers_hasAttr_js__["a" /* hasAttr */])(target, 'data-nav')) {
      target = target.parentNode;
    }
    if (Object(__WEBPACK_IMPORTED_MODULE_19__helpers_hasAttr_js__["a" /* hasAttr */])(target, 'data-nav')) {
      var navIndex = navClicked = Number(Object(__WEBPACK_IMPORTED_MODULE_20__helpers_getAttr_js__["a" /* getAttr */])(target, 'data-nav')),
          targetIndexBase = fixedWidth || autoWidth ? navIndex * slideCount / pages : navIndex * items,
          targetIndex = navAsThumbnails ? navIndex : Math.min(Math.ceil(targetIndexBase), slideCount - 1);
      goTo(targetIndex, e);

      if (navCurrentIndex === navIndex) {
        if (animating) {
          stopAutoplay();
        }
        navClicked = -1; // reset navClicked
      }
    }
  }

  // autoplay functions
  function setAutoplayTimer() {
    autoplayTimer = setInterval(function () {
      onControlsClick(null, autoplayDirection);
    }, autoplayTimeout);

    animating = true;
  }

  function stopAutoplayTimer() {
    clearInterval(autoplayTimer);
    animating = false;
  }

  function updateAutoplayButton(action, txt) {
    Object(__WEBPACK_IMPORTED_MODULE_21__helpers_setAttrs_js__["a" /* setAttrs */])(autoplayButton, { 'data-action': action });
    autoplayButton.innerHTML = autoplayHtmlStrings[0] + action + autoplayHtmlStrings[1] + txt;
  }

  function startAutoplay() {
    setAutoplayTimer();
    if (autoplayButton) {
      updateAutoplayButton('stop', autoplayText[1]);
    }
  }

  function stopAutoplay() {
    stopAutoplayTimer();
    if (autoplayButton) {
      updateAutoplayButton('start', autoplayText[0]);
    }
  }

  // programaitcally play/pause the slider
  function play() {
    if (autoplay && !animating) {
      startAutoplay();
      autoplayUserPaused = false;
    }
  }
  function pause() {
    if (animating) {
      stopAutoplay();
      autoplayUserPaused = true;
    }
  }

  function toggleAutoplay() {
    if (animating) {
      stopAutoplay();
      autoplayUserPaused = true;
    } else {
      startAutoplay();
      autoplayUserPaused = false;
    }
  }

  function onVisibilityChange() {
    if (doc.hidden) {
      if (animating) {
        stopAutoplayTimer();
        autoplayVisibilityPaused = true;
      }
    } else if (autoplayVisibilityPaused) {
      setAutoplayTimer();
      autoplayVisibilityPaused = false;
    }
  }

  function mouseoverPause() {
    if (animating) {
      stopAutoplayTimer();
      autoplayHoverPaused = true;
    }
  }

  function mouseoutRestart() {
    if (autoplayHoverPaused) {
      setAutoplayTimer();
      autoplayHoverPaused = false;
    }
  }

  // keydown events on document 
  function onDocumentKeydown(e) {
    e = getEvent(e);
    var keyIndex = [KEYS.LEFT, KEYS.RIGHT].indexOf(e.keyCode);

    if (keyIndex >= 0) {
      onControlsClick(e, keyIndex === 0 ? -1 : 1);
    }
  }

  // on key control
  function onControlsKeydown(e) {
    e = getEvent(e);
    var keyIndex = [KEYS.LEFT, KEYS.RIGHT].indexOf(e.keyCode);

    if (keyIndex >= 0) {
      if (keyIndex === 0) {
        if (!prevButton.disabled) {
          onControlsClick(e, -1);
        }
      } else if (!nextButton.disabled) {
        onControlsClick(e, 1);
      }
    }
  }

  // set focus
  function setFocus(el) {
    el.focus();
  }

  // on key nav
  function onNavKeydown(e) {
    e = getEvent(e);
    var curElement = doc.activeElement;
    if (!Object(__WEBPACK_IMPORTED_MODULE_19__helpers_hasAttr_js__["a" /* hasAttr */])(curElement, 'data-nav')) {
      return;
    }

    // var code = e.keyCode,
    var keyIndex = [KEYS.LEFT, KEYS.RIGHT, KEYS.ENTER, KEYS.SPACE].indexOf(e.keyCode),
        navIndex = Number(Object(__WEBPACK_IMPORTED_MODULE_20__helpers_getAttr_js__["a" /* getAttr */])(curElement, 'data-nav'));

    if (keyIndex >= 0) {
      if (keyIndex === 0) {
        if (navIndex > 0) {
          setFocus(navItems[navIndex - 1]);
        }
      } else if (keyIndex === 1) {
        if (navIndex < pages - 1) {
          setFocus(navItems[navIndex + 1]);
        }
      } else {
        navClicked = navIndex;
        goTo(navIndex, e);
      }
    }
  }

  function getEvent(e) {
    e = e || win.event;
    return isTouchEvent(e) ? e.changedTouches[0] : e;
  }
  function getTarget(e) {
    return e.target || win.event.srcElement;
  }

  function isTouchEvent(e) {
    return e.type.indexOf('touch') >= 0;
  }

  function preventDefaultBehavior(e) {
    e.preventDefault ? e.preventDefault() : e.returnValue = false;
  }

  function getMoveDirectionExpected() {
    return Object(__WEBPACK_IMPORTED_MODULE_14__helpers_getTouchDirection_js__["a" /* getTouchDirection */])(Object(__WEBPACK_IMPORTED_MODULE_13__helpers_toDegree_js__["a" /* toDegree */])(lastPosition.y - initPosition.y, lastPosition.x - initPosition.x), swipeAngle) === options.axis;
  }

  function onPanStart(e) {
    if (running) {
      if (preventActionWhenRunning) {
        return;
      } else {
        onTransitionEnd();
      }
    }

    if (autoplay && animating) {
      stopAutoplayTimer();
    }

    panStart = true;
    if (rafIndex) {
      Object(__WEBPACK_IMPORTED_MODULE_1__helpers_caf_js__["a" /* caf */])(rafIndex);
      rafIndex = null;
    }

    var $ = getEvent(e);
    events.emit(isTouchEvent(e) ? 'touchStart' : 'dragStart', info(e));

    if (!isTouchEvent(e) && ['img', 'a'].indexOf(getLowerCaseNodeName(getTarget(e))) >= 0) {
      preventDefaultBehavior(e);
    }

    lastPosition.x = initPosition.x = $.clientX;
    lastPosition.y = initPosition.y = $.clientY;
    if (carousel) {
      translateInit = parseFloat(container.style[transformAttr].replace(transformPrefix, ''));
      resetDuration(container, '0s');
    }
  }

  function onPanMove(e) {
    if (panStart) {
      var $ = getEvent(e);
      lastPosition.x = $.clientX;
      lastPosition.y = $.clientY;

      if (carousel) {
        if (!rafIndex) {
          rafIndex = Object(__WEBPACK_IMPORTED_MODULE_0__helpers_raf_js__["a" /* raf */])(function () {
            panUpdate(e);
          });
        }
      } else {
        if (moveDirectionExpected === '?') {
          moveDirectionExpected = getMoveDirectionExpected();
        }
        if (moveDirectionExpected) {
          preventScroll = true;
        }
      }

      if (preventScroll) {
        e.preventDefault();
      }
    }
  }

  function panUpdate(e) {
    if (!moveDirectionExpected) {
      panStart = false;
      return;
    }
    Object(__WEBPACK_IMPORTED_MODULE_1__helpers_caf_js__["a" /* caf */])(rafIndex);
    if (panStart) {
      rafIndex = Object(__WEBPACK_IMPORTED_MODULE_0__helpers_raf_js__["a" /* raf */])(function () {
        panUpdate(e);
      });
    }

    if (moveDirectionExpected === '?') {
      moveDirectionExpected = getMoveDirectionExpected();
    }
    if (moveDirectionExpected) {
      if (!preventScroll && isTouchEvent(e)) {
        preventScroll = true;
      }

      try {
        if (e.type) {
          events.emit(isTouchEvent(e) ? 'touchMove' : 'dragMove', info(e));
        }
      } catch (err) {}

      var x = translateInit,
          dist = getDist(lastPosition, initPosition);
      if (!horizontal || fixedWidth || autoWidth) {
        x += dist;
        x += 'px';
      } else {
        var percentageX = TRANSFORM ? dist * items * 100 / ((viewport + gutter) * slideCountNew) : dist * 100 / (viewport + gutter);
        x += percentageX;
        x += '%';
      }

      container.style[transformAttr] = transformPrefix + x + transformPostfix;
    }
  }

  function onPanEnd(e) {
    if (panStart) {
      if (rafIndex) {
        Object(__WEBPACK_IMPORTED_MODULE_1__helpers_caf_js__["a" /* caf */])(rafIndex);
        rafIndex = null;
      }
      if (carousel) {
        resetDuration(container, '');
      }
      panStart = false;

      var $ = getEvent(e);
      lastPosition.x = $.clientX;
      lastPosition.y = $.clientY;
      var dist = getDist(lastPosition, initPosition);

      if (Math.abs(dist)) {
        // drag vs click
        if (!isTouchEvent(e)) {
          // prevent "click"
          var target = getTarget(e);
          Object(__WEBPACK_IMPORTED_MODULE_30__helpers_addEvents_js__["a" /* addEvents */])(target, { 'click': function preventClick(e) {
              preventDefaultBehavior(e);
              Object(__WEBPACK_IMPORTED_MODULE_31__helpers_removeEvents_js__["a" /* removeEvents */])(target, { 'click': preventClick });
            } });
        }

        if (carousel) {
          rafIndex = Object(__WEBPACK_IMPORTED_MODULE_0__helpers_raf_js__["a" /* raf */])(function () {
            if (horizontal && !autoWidth) {
              var indexMoved = -dist * items / (viewport + gutter);
              indexMoved = dist > 0 ? Math.floor(indexMoved) : Math.ceil(indexMoved);
              index += indexMoved;
            } else {
              var moved = -(translateInit + dist);
              if (moved <= 0) {
                index = indexMin;
              } else if (moved >= slidePositions[slideCountNew - 1]) {
                index = indexMax;
              } else {
                var i = 0;
                while (i < slideCountNew && moved >= slidePositions[i]) {
                  index = i;
                  if (moved > slidePositions[i] && dist < 0) {
                    index += 1;
                  }
                  i++;
                }
              }
            }

            render(e, dist);
            events.emit(isTouchEvent(e) ? 'touchEnd' : 'dragEnd', info(e));
          });
        } else {
          if (moveDirectionExpected) {
            onControlsClick(e, dist > 0 ? -1 : 1);
          }
        }
      }
    }

    // reset
    if (options.preventScrollOnTouch === 'auto') {
      preventScroll = false;
    }
    if (swipeAngle) {
      moveDirectionExpected = '?';
    }
    if (autoplay && !animating) {
      setAutoplayTimer();
    }
  }

  // === RESIZE FUNCTIONS === //
  // (slidePositions, index, items) => vertical_conentWrapper.height
  function updateContentWrapperHeight() {
    var wp = middleWrapper ? middleWrapper : innerWrapper;
    wp.style.height = slidePositions[index + items] - slidePositions[index] + 'px';
  }

  function getPages() {
    var rough = fixedWidth ? (fixedWidth + gutter) * slideCount / viewport : slideCount / items;
    return Math.min(Math.ceil(rough), slideCount);
  }

  /*
   * 1. update visible nav items list
   * 2. add "hidden" attributes to previous visible nav items
   * 3. remove "hidden" attrubutes to new visible nav items
   */
  function updateNavVisibility() {
    if (!nav || navAsThumbnails) {
      return;
    }

    if (pages !== pagesCached) {
      var min = pagesCached,
          max = pages,
          fn = __WEBPACK_IMPORTED_MODULE_25__helpers_showElement_js__["a" /* showElement */];

      if (pagesCached > pages) {
        min = pages;
        max = pagesCached;
        fn = __WEBPACK_IMPORTED_MODULE_24__helpers_hideElement_js__["a" /* hideElement */];
      }

      while (min < max) {
        fn(navItems[min]);
        min++;
      }

      // cache pages
      pagesCached = pages;
    }
  }

  function info(e) {
    return {
      container: container,
      slideItems: slideItems,
      navContainer: navContainer,
      navItems: navItems,
      controlsContainer: controlsContainer,
      hasControls: hasControls,
      prevButton: prevButton,
      nextButton: nextButton,
      items: items,
      slideBy: slideBy,
      cloneCount: cloneCount,
      slideCount: slideCount,
      slideCountNew: slideCountNew,
      index: index,
      indexCached: indexCached,
      displayIndex: getCurrentSlide(),
      navCurrentIndex: navCurrentIndex,
      navCurrentIndexCached: navCurrentIndexCached,
      pages: pages,
      pagesCached: pagesCached,
      sheet: sheet,
      isOn: isOn,
      event: e || {}
    };
  }

  return {
    version: '2.9.1',
    getInfo: info,
    events: events,
    goTo: goTo,
    play: play,
    pause: pause,
    isOn: isOn,
    updateSliderHeight: updateInnerWrapperHeight,
    refresh: initSliderTransform,
    destroy: destroy,
    rebuild: function () {
      return tns(Object(__WEBPACK_IMPORTED_MODULE_2__helpers_extend_js__["a" /* extend */])(options, optionsElements));
    }
  };
};

/***/ }),
/* 48 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return caf; });
var win = window;

var caf = win.cancelAnimationFrame || win.mozCancelAnimationFrame || function (id) {
  clearTimeout(id);
};

/***/ }),
/* 49 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = extend;
function extend() {
  var obj,
      name,
      copy,
      target = arguments[0] || {},
      i = 1,
      length = arguments.length;

  for (; i < length; i++) {
    if ((obj = arguments[i]) !== null) {
      for (name in obj) {
        copy = obj[name];

        if (target === copy) {
          continue;
        } else if (copy !== undefined) {
          target[name] = copy;
        }
      }
    }
  }
  return target;
}

/***/ }),
/* 50 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = checkStorageValue;
function checkStorageValue(value) {
  return ['true', 'false'].indexOf(value) >= 0 ? JSON.parse(value) : value;
}

/***/ }),
/* 51 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = setLocalStorage;
function setLocalStorage(storage, key, value, access) {
  if (access) {
    try {
      storage.setItem(key, value);
    } catch (e) {}
  }
  return value;
}

/***/ }),
/* 52 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = getSlideId;
function getSlideId() {
  var id = window.tnsId;
  window.tnsId = !id ? 1 : id + 1;

  return 'tns' + window.tnsId;
}

/***/ }),
/* 53 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = calc;
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__getBody_js__ = __webpack_require__(2);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__setFakeBody_js__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__resetFakeBody_js__ = __webpack_require__(4);
// get css-calc 
// @return - false | calc | -webkit-calc | -moz-calc
// @usage - var calc = getCalc(); 




function calc() {
  var doc = document,
      body = Object(__WEBPACK_IMPORTED_MODULE_0__getBody_js__["a" /* getBody */])(),
      docOverflow = Object(__WEBPACK_IMPORTED_MODULE_1__setFakeBody_js__["a" /* setFakeBody */])(body),
      div = doc.createElement('div'),
      result = false;

  body.appendChild(div);
  try {
    var str = '(10px * 10)',
        vals = ['calc' + str, '-moz-calc' + str, '-webkit-calc' + str],
        val;
    for (var i = 0; i < 3; i++) {
      val = vals[i];
      div.style.width = val;
      if (div.offsetWidth === 100) {
        result = val.replace(str, '');
        break;
      }
    }
  } catch (e) {}

  body.fake ? Object(__WEBPACK_IMPORTED_MODULE_2__resetFakeBody_js__["a" /* resetFakeBody */])(body, docOverflow) : div.remove();

  return result;
}

/***/ }),
/* 54 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = percentageLayout;
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__getBody_js__ = __webpack_require__(2);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__setFakeBody_js__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__resetFakeBody_js__ = __webpack_require__(4);
// get subpixel support value
// @return - boolean




function percentageLayout() {
  // check subpixel layout supporting
  var doc = document,
      body = Object(__WEBPACK_IMPORTED_MODULE_0__getBody_js__["a" /* getBody */])(),
      docOverflow = Object(__WEBPACK_IMPORTED_MODULE_1__setFakeBody_js__["a" /* setFakeBody */])(body),
      wrapper = doc.createElement('div'),
      outer = doc.createElement('div'),
      str = '',
      count = 70,
      perPage = 3,
      supported = false;

  wrapper.className = "tns-t-subp2";
  outer.className = "tns-t-ct";

  for (var i = 0; i < count; i++) {
    str += '<div></div>';
  }

  outer.innerHTML = str;
  wrapper.appendChild(outer);
  body.appendChild(wrapper);

  supported = Math.abs(wrapper.getBoundingClientRect().left - outer.children[count - perPage].getBoundingClientRect().left) < 2;

  body.fake ? Object(__WEBPACK_IMPORTED_MODULE_2__resetFakeBody_js__["a" /* resetFakeBody */])(body, docOverflow) : wrapper.remove();

  return supported;
}

/***/ }),
/* 55 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = mediaquerySupport;
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__getBody_js__ = __webpack_require__(2);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__setFakeBody_js__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__resetFakeBody_js__ = __webpack_require__(4);




function mediaquerySupport() {
  var doc = document,
      body = Object(__WEBPACK_IMPORTED_MODULE_0__getBody_js__["a" /* getBody */])(),
      docOverflow = Object(__WEBPACK_IMPORTED_MODULE_1__setFakeBody_js__["a" /* setFakeBody */])(body),
      div = doc.createElement('div'),
      style = doc.createElement('style'),
      rule = '@media all and (min-width:1px){.tns-mq-test{position:absolute}}',
      position;

  style.type = 'text/css';
  div.className = 'tns-mq-test';

  body.appendChild(style);
  body.appendChild(div);

  if (style.styleSheet) {
    style.styleSheet.cssText = rule;
  } else {
    style.appendChild(doc.createTextNode(rule));
  }

  position = window.getComputedStyle ? window.getComputedStyle(div).position : div.currentStyle['position'];

  body.fake ? Object(__WEBPACK_IMPORTED_MODULE_2__resetFakeBody_js__["a" /* resetFakeBody */])(body, docOverflow) : div.remove();

  return position === "absolute";
}

/***/ }),
/* 56 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = createStyleSheet;
// create and append style sheet
function createStyleSheet(media) {
  // Create the <style> tag
  var style = document.createElement("style");
  // style.setAttribute("type", "text/css");

  // Add a media (and/or media query) here if you'd like!
  // style.setAttribute("media", "screen")
  // style.setAttribute("media", "only screen and (max-width : 1024px)")
  if (media) {
    style.setAttribute("media", media);
  }

  // WebKit hack :(
  // style.appendChild(document.createTextNode(""));

  // Add the <style> element to the page
  document.querySelector('head').appendChild(style);

  return style.sheet ? style.sheet : style.styleSheet;
};

/***/ }),
/* 57 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = addCSSRule;
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__raf_js__ = __webpack_require__(5);
// cross browsers addRule method

function addCSSRule(sheet, selector, rules, index) {
  // return raf(function() {
  'insertRule' in sheet ? sheet.insertRule(selector + '{' + rules + '}', index) : sheet.addRule(selector, rules, index);
  // });
}

/***/ }),
/* 58 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = removeCSSRule;
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__raf_js__ = __webpack_require__(5);
// cross browsers addRule method

function removeCSSRule(sheet, index) {
  // return raf(function() {
  'deleteRule' in sheet ? sheet.deleteRule(index) : sheet.removeRule(index);
  // });
}

/***/ }),
/* 59 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = getCssRulesLength;
function getCssRulesLength(sheet) {
  var rule = 'insertRule' in sheet ? sheet.cssRules : sheet.rules;
  return rule.length;
}

/***/ }),
/* 60 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = toDegree;
function toDegree(y, x) {
  return Math.atan2(y, x) * (180 / Math.PI);
}

/***/ }),
/* 61 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = getTouchDirection;
function getTouchDirection(angle, range) {
  var direction = false,
      gap = Math.abs(90 - Math.abs(angle));

  if (gap >= 90 - range) {
    direction = 'horizontal';
  } else if (gap <= range) {
    direction = 'vertical';
  }

  return direction;
}

/***/ }),
/* 62 */
false,
/* 63 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return classListSupport; });
var classListSupport = 'classList' in document.createElement('_');

/***/ }),
/* 64 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return addClass; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__hasClass_js__ = __webpack_require__(6);

var addClass = __WEBPACK_IMPORTED_MODULE_0__hasClass_js__["a" /* classListSupport */] ? function (el, str) {
  if (!Object(__WEBPACK_IMPORTED_MODULE_0__hasClass_js__["b" /* hasClass */])(el, str)) {
    el.classList.add(str);
  }
} : function (el, str) {
  if (!Object(__WEBPACK_IMPORTED_MODULE_0__hasClass_js__["b" /* hasClass */])(el, str)) {
    el.className += ' ' + str;
  }
};



/***/ }),
/* 65 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return removeClass; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__hasClass_js__ = __webpack_require__(6);

var removeClass = __WEBPACK_IMPORTED_MODULE_0__hasClass_js__["a" /* classListSupport */] ? function (el, str) {
  if (Object(__WEBPACK_IMPORTED_MODULE_0__hasClass_js__["b" /* hasClass */])(el, str)) {
    el.classList.remove(str);
  }
} : function (el, str) {
  if (Object(__WEBPACK_IMPORTED_MODULE_0__hasClass_js__["b" /* hasClass */])(el, str)) {
    el.className = el.className.replace(str, '');
  }
};



/***/ }),
/* 66 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = hasAttr;
function hasAttr(el, attr) {
  return el.hasAttribute(attr);
}

/***/ }),
/* 67 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = getAttr;
function getAttr(el, attr) {
  return el.getAttribute(attr);
}

/***/ }),
/* 68 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = setAttrs;
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__isNodeList_js__ = __webpack_require__(16);


function setAttrs(els, attrs) {
  els = Object(__WEBPACK_IMPORTED_MODULE_0__isNodeList_js__["a" /* isNodeList */])(els) || els instanceof Array ? els : [els];
  if (Object.prototype.toString.call(attrs) !== '[object Object]') {
    return;
  }

  for (var i = els.length; i--;) {
    for (var key in attrs) {
      els[i].setAttribute(key, attrs[key]);
    }
  }
}

/***/ }),
/* 69 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = removeAttrs;
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__isNodeList_js__ = __webpack_require__(16);


function removeAttrs(els, attrs) {
  els = Object(__WEBPACK_IMPORTED_MODULE_0__isNodeList_js__["a" /* isNodeList */])(els) || els instanceof Array ? els : [els];
  attrs = attrs instanceof Array ? attrs : [attrs];

  var attrLength = attrs.length;
  for (var i = els.length; i--;) {
    for (var j = attrLength; j--;) {
      els[i].removeAttribute(attrs[j]);
    }
  }
}

/***/ }),
/* 70 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = arrayFromNodeList;
function arrayFromNodeList(nl) {
  var arr = [];
  for (var i = 0, l = nl.length; i < l; i++) {
    arr.push(nl[i]);
  }
  return arr;
}

/***/ }),
/* 71 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = hideElement;
function hideElement(el, forceHide) {
  if (el.style.display !== 'none') {
    el.style.display = 'none';
  }
}

/***/ }),
/* 72 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = showElement;
function showElement(el, forceHide) {
  if (el.style.display === 'none') {
    el.style.display = '';
  }
}

/***/ }),
/* 73 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = isVisible;
function isVisible(el) {
  return window.getComputedStyle(el).display !== 'none';
}

/***/ }),
/* 74 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = whichProperty;
function whichProperty(props) {
  if (typeof props === 'string') {
    var arr = [props],
        Props = props.charAt(0).toUpperCase() + props.substr(1),
        prefixes = ['Webkit', 'Moz', 'ms', 'O'];

    prefixes.forEach(function (prefix) {
      if (prefix !== 'ms' || props === 'transform') {
        arr.push(prefix + Props);
      }
    });

    props = arr;
  }

  var el = document.createElement('fakeelement'),
      len = props.length;
  for (var i = 0; i < props.length; i++) {
    var prop = props[i];
    if (el.style[prop] !== undefined) {
      return prop;
    }
  }

  return false; // explicit for ie9-
}

/***/ }),
/* 75 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = has3DTransforms;
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__getBody_js__ = __webpack_require__(2);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__setFakeBody_js__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__resetFakeBody_js__ = __webpack_require__(4);




function has3DTransforms(tf) {
    if (!tf) {
        return false;
    }
    if (!window.getComputedStyle) {
        return false;
    }

    var doc = document,
        body = Object(__WEBPACK_IMPORTED_MODULE_0__getBody_js__["a" /* getBody */])(),
        docOverflow = Object(__WEBPACK_IMPORTED_MODULE_1__setFakeBody_js__["a" /* setFakeBody */])(body),
        el = doc.createElement('p'),
        has3d,
        cssTF = tf.length > 9 ? '-' + tf.slice(0, -9).toLowerCase() + '-' : '';

    cssTF += 'transform';

    // Add it to the body to get the computed style
    body.insertBefore(el, null);

    el.style[tf] = 'translate3d(1px,1px,1px)';
    has3d = window.getComputedStyle(el).getPropertyValue(cssTF);

    body.fake ? Object(__WEBPACK_IMPORTED_MODULE_2__resetFakeBody_js__["a" /* resetFakeBody */])(body, docOverflow) : el.remove();

    return has3d !== undefined && has3d.length > 0 && has3d !== "none";
}

/***/ }),
/* 76 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = getEndProperty;
// get transitionend, animationend based on transitionDuration
// @propin: string
// @propOut: string, first-letter uppercase
// Usage: getEndProperty('WebkitTransitionDuration', 'Transition') => webkitTransitionEnd
function getEndProperty(propIn, propOut) {
  var endProp = false;
  if (/^Webkit/.test(propIn)) {
    endProp = 'webkit' + propOut + 'End';
  } else if (/^O/.test(propIn)) {
    endProp = 'o' + propOut + 'End';
  } else if (propIn) {
    endProp = propOut.toLowerCase() + 'end';
  }
  return endProp;
}

/***/ }),
/* 77 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = addEvents;
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__passiveOption_js__ = __webpack_require__(17);


function addEvents(el, obj, preventScrolling) {
  for (var prop in obj) {
    var option = ['touchstart', 'touchmove'].indexOf(prop) >= 0 && !preventScrolling ? __WEBPACK_IMPORTED_MODULE_0__passiveOption_js__["a" /* passiveOption */] : false;
    el.addEventListener(prop, obj[prop], option);
  }
}

/***/ }),
/* 78 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = removeEvents;
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__passiveOption_js__ = __webpack_require__(17);


function removeEvents(el, obj) {
  for (var prop in obj) {
    var option = ['touchstart', 'touchmove'].indexOf(prop) >= 0 ? __WEBPACK_IMPORTED_MODULE_0__passiveOption_js__["a" /* passiveOption */] : false;
    el.removeEventListener(prop, obj[prop], option);
  }
}

/***/ }),
/* 79 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = Events;
function Events() {
  return {
    topics: {},
    on: function (eventName, fn) {
      this.topics[eventName] = this.topics[eventName] || [];
      this.topics[eventName].push(fn);
    },
    off: function (eventName, fn) {
      if (this.topics[eventName]) {
        for (var i = 0; i < this.topics[eventName].length; i++) {
          if (this.topics[eventName][i] === fn) {
            this.topics[eventName].splice(i, 1);
            break;
          }
        }
      }
    },
    emit: function (eventName, data) {
      data.type = eventName;
      if (this.topics[eventName]) {
        this.topics[eventName].forEach(function (fn) {
          fn(data, eventName);
        });
      }
    }
  };
};

/***/ }),
/* 80 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = jsTransform;
function jsTransform(element, attr, prefix, postfix, to, duration, callback) {
  var tick = Math.min(duration, 10),
      unit = to.indexOf('%') >= 0 ? '%' : 'px',
      to = to.replace(unit, ''),
      from = Number(element.style[attr].replace(prefix, '').replace(postfix, '').replace(unit, '')),
      positionTick = (to - from) / duration * tick,
      running;

  setTimeout(moveElement, tick);
  function moveElement() {
    duration -= tick;
    from += positionTick;
    element.style[attr] = prefix + from + unit + postfix;
    if (duration > 0) {
      setTimeout(moveElement, tick);
    } else {
      callback();
    }
  }
}

/***/ }),
/* 81 */,
/* 82 */,
/* 83 */,
/* 84 */,
/* 85 */,
/* 86 */,
/* 87 */,
/* 88 */,
/* 89 */,
/* 90 */,
/* 91 */,
/* 92 */,
/* 93 */,
/* 94 */,
/* 95 */,
/* 96 */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(8)(undefined);
// imports


// module
exports.push([module.i, ".tns-outer{padding:0 !important}.tns-outer [hidden]{display:none !important}.tns-outer [aria-controls],.tns-outer [data-action]{cursor:pointer}.tns-slider{-webkit-transition:all 0s;-moz-transition:all 0s;transition:all 0s}.tns-slider>.tns-item{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.tns-horizontal.tns-subpixel{white-space:nowrap}.tns-horizontal.tns-subpixel>.tns-item{display:inline-block;vertical-align:top;white-space:normal}.tns-horizontal.tns-no-subpixel:after{content:'';display:table;clear:both}.tns-horizontal.tns-no-subpixel>.tns-item{float:left}.tns-horizontal.tns-carousel.tns-no-subpixel>.tns-item{margin-right:-100%}.tns-no-calc{position:relative;left:0}.tns-gallery{position:relative;left:0;min-height:1px}.tns-gallery>.tns-item{position:absolute;left:-100%;-webkit-transition:transform 0s, opacity 0s;-moz-transition:transform 0s, opacity 0s;transition:transform 0s, opacity 0s}.tns-gallery>.tns-slide-active{position:relative;left:auto !important}.tns-gallery>.tns-moving{-webkit-transition:all 0.25s;-moz-transition:all 0.25s;transition:all 0.25s}.tns-autowidth{display:inline-block}.tns-lazy-img{-webkit-transition:opacity 0.6s;-moz-transition:opacity 0.6s;transition:opacity 0.6s;opacity:0.6}.tns-lazy-img.tns-complete{opacity:1}.tns-ah{-webkit-transition:height 0s;-moz-transition:height 0s;transition:height 0s}.tns-ovh{overflow:hidden}.tns-visually-hidden{position:absolute;left:-10000em}.tns-transparent{opacity:0;visibility:hidden}.tns-fadeIn{opacity:1;filter:alpha(opacity=100);z-index:0}.tns-normal,.tns-fadeOut{opacity:0;filter:alpha(opacity=0);z-index:-1}.tns-vpfix{white-space:nowrap}.tns-vpfix>div,.tns-vpfix>li{display:inline-block}.tns-t-subp2{margin:0 auto;width:310px;position:relative;height:10px;overflow:hidden}.tns-t-ct{width:2333.3333333%;width:-webkit-calc(100% * 70 / 3);width:-moz-calc(100% * 70 / 3);width:calc(100% * 70 / 3);position:absolute;right:0}.tns-t-ct:after{content:'';display:table;clear:both}.tns-t-ct>div{width:1.4285714%;width:-webkit-calc(100% / 70);width:-moz-calc(100% / 70);width:calc(100% / 70);height:10px;float:left}\n\n/*# sourceMappingURL=sourcemaps/tiny-slider.css.map */\n", ""]);

// exports


/***/ }),
/* 97 */,
/* 98 */,
/* 99 */,
/* 100 */,
/* 101 */,
/* 102 */,
/* 103 */,
/* 104 */,
/* 105 */,
/* 106 */,
/* 107 */,
/* 108 */,
/* 109 */,
/* 110 */,
/* 111 */,
/* 112 */,
/* 113 */,
/* 114 */,
/* 115 */,
/* 116 */,
/* 117 */,
/* 118 */,
/* 119 */,
/* 120 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = forEach;
// https://toddmotto.com/ditch-the-array-foreach-call-nodelist-hack/
function forEach(arr, callback, scope) {
  for (var i = 0, l = arr.length; i < l; i++) {
    callback.call(scope, arr[i], i);
  }
}

/***/ })
])