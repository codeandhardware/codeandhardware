webpackHotUpdate(0,{

/***/ 46:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_jquery__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_jquery___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_jquery__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__node_modules_tiny_slider_src_tiny_slider__ = __webpack_require__(47);




// add carousel classes to products and wrapper
__WEBPACK_IMPORTED_MODULE_0_jquery___default()('#index #main .slider-on .products, #product .products').addClass('owl-carousel');

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
  // Featured

  var featured = Object(__WEBPACK_IMPORTED_MODULE_1__node_modules_tiny_slider_src_tiny_slider__["a" /* tns */])({
    container: '#index #main .roy_featured.slider-on .products',
    items: 4,
    mouseDrag: true,
    slideBy: 'page'
  });

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

  // Specials column slider

  var specials = Object(__WEBPACK_IMPORTED_MODULE_1__node_modules_tiny_slider_src_tiny_slider__["a" /* tns */])({
    "container": '#roy_specials_col .products',
    "items": 1,
    "mouseDrag": true,
    "slideBy": "page",
    "swipeAngle": false,
    "speed": 400
  });

  // Brands slider
  var brands = Object(__WEBPACK_IMPORTED_MODULE_1__node_modules_tiny_slider_src_tiny_slider__["a" /* tns */])({
    "container": '#roy_brands .roy_slider',
    "items": 5,
    "mouseDrag": true,
    "slideBy": "page",
    "swipeAngle": false,
    "speed": 800
  });
});

/***/ })

})