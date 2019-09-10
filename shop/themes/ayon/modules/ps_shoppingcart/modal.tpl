{**
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
 *}
<div id="blockcart-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-md-3 divide-right">
            <img class="product-image" src="{$product.cover.medium.url}" alt="{$product.cover.legend}" title="{$product.cover.legend}" itemprop="image">
          </div>
          <div class="col-md-9">
            <div class="cart-content">

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
              </button>
              <h4 class="modal-title h5" id="myModalLabel"><i class="material-icons rtl-no-flip">&#xE876;</i>{l s='Product successfully added to your shopping cart' d='Shop.Theme.Checkout'}</h4>

              <h6 class="h6 product-name">{$product.name}</h6>
              <p>{$product.price}</p>
              {hook h='displayProductPriceBlock' product=$product type="unit_price"}
              {foreach from=$product.attributes item="property_value" key="property"}
                <span><strong>{$property}</strong>: {$property_value}</span><br>
              {/foreach}
              <p><strong>{l s='Quantity:' d='Shop.Theme.Checkout'}</strong>&nbsp;{$product.cart_quantity}</p>

              {if $cart.products_count > 1}
                <p class="cart-products-count">{l s='There are %products_count% items in your cart.' sprintf=['%products_count%' => $cart.products_count] d='Shop.Theme.Checkout'}</p>
              {else}
                <p class="cart-products-count">{l s='There is %product_count% item in your cart.' sprintf=['%product_count%' =>$cart.products_count] d='Shop.Theme.Checkout'}</p>
              {/if}
              <p><strong>{l s='Subtotal:' d='Shop.Theme.Checkout'}</strong>&nbsp;{$cart.subtotals.products.value}</p>
              <div class="cart-content-btn">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{l s='Continue shopping' d='Shop.Theme.Actions'}</button>
                <a href="{$cart_url}" class="btn btn-primary"><i class="material-icons rtl-no-flip">&#xE876;</i>{l s='Proceed to checkout' d='Shop.Theme.Actions'}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
