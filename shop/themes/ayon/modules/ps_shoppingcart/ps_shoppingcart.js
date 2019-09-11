/* global $, prestashop */

/**
 * This module exposes an extension point in the form of the `showModal` function.
 *
 * If you want to override the way the modal window is displayed, simply define:
 *
 * prestashop.blockcart = prestashop.blockcart || {};
 * prestashop.blockcart.showModal = function myOwnShowModal (modalHTML) {
 *   // your own code
 *   // please not that it is your responsibility to handle closing the modal too
 * };
 *
 * Attention: your "override" JS needs to be included **before** this file.
 * The safest way to do so is to place your "override" inside the theme's main JS file.
 *
 */

$(document).ready(function () {
  prestashop.blockcart = prestashop.blockcart || {};

  var showModal = prestashop.blockcart.showModal || function (modal) {
    var $body = $('body');
    $body.append(modal);
    $body.one('click', '#blockcart-modal', function (event) {
      if (event.target.id === 'blockcart-modal') {
        $(event.target).remove();
      }
    });
  };

  $(document).ready(function () {
    prestashop.on(
      'updateCart',
      function (event) {

        if($('body').hasClass('add1')) {
          var cart_click = function (e) {
            $('body').addClass('side_open side_content')
            $('.side_menu .side_menu_rel > div').removeClass('show');
            $('#side_cart_wrap').addClass('show');
            $('.side_close').removeClass('search_close menu_close mail_close').addClass('cart_close');
            $('.side_menu').find('.cart-prods').addClass('loading');
          }
          cart_click();
        }

        var refreshURL = $('.blockcart').data('refresh-url');
        var requestData = {};

        if (event && event.reason) {
          requestData = {
            id_product_attribute: event.reason.idProductAttribute,
            id_product: event.reason.idProduct,
            action: event.reason.linkAction
          };
        }

        $.post(refreshURL, requestData).then(function (resp) {
          $('.blockcart').replaceWith($(resp.preview).find('.blockcart'));

          if($('body').hasClass('add1')) {
            $('.side_menu').find('.cart-prods').addClass('loading');

            setTimeout(function(){
              $('.side_menu').find('.cart-prods').removeClass('loading');
              $('.side_menu').find('.cart-prods > li:not(.show)').each(function(i){
                var row = $(this);
                setTimeout(function(){
                  row.addClass('show');
                }, 300 + i * 160);
              });
            }, 400);
          } else {
            if (resp.modal) {
              showModal(resp.modal);
            }
          }

          $('.side_close, .close_cross, .return').click(function () {
              $('body').removeClass('side_open side_content');
              $('.side_menu').find('.cart-prods > li').each(function(i){
                $(this).removeClass('show');
              });
              setTimeout(function(){
                $('body').removeClass('was_open');
              }, 440);
          });
          var reopen = function() {
              if($('body').hasClass('side_open')) {

                $('body').removeClass('side_content');
                $('.side_menu').removeClass('reopen_go').addClass('reopen_hide');
                setTimeout(function(){
                  $('body').addClass('side_content');
                }, 320);
                setTimeout(function(){
                  $('.side_menu').removeClass('reopen_hide').addClass('reopen_go');
                }, 600);

              } else {
                  $('body').addClass('side_open side_content was_open')
              }
          }
          var cartprodsshow = function () {
            $('.side_menu').find('.cart-prods > li').each(function(i){
              var row = $(this);
              setTimeout(function(){
                row.addClass('show');
              }, 300 + i * 220);
            });
          }
          var cart_click = function (e) {
              e.preventDefault();
              reopen();
              $('.side_menu .side_menu_rel > div').removeClass('show');
              $('#side_cart_wrap').addClass('show');
              $('.side_close').removeClass('search_close menu_close acc_close').addClass('cart_close');
              $('.side_close i').toggleClass('rotateit');
              if($('.side_menu').hasClass('reopen_hide')) {
                setTimeout(function(){
                  cartprodsshow();
                }, 320);
              } else {
                cartprodsshow();
              }
          }
          $('#header .row.action .blockcart a.cart_nogo').off("click", cart_click).on("click", cart_click);

        }).fail(function (resp) {
          prestashop.emit('handleError', {eventType: 'updateShoppingCart', resp: resp});
        });
      }
    );
  });
});
