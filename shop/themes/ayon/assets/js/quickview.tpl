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
<div id="quickview-modal-{$product.id}-{$product.id_product_attribute}" class="modal fade quickview" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>4</title><g id="Layer_4" data-name="Layer 4"><path d="M19.78,17,14.83,12l4.95-4.95a1,1,0,0,0,0-1.41L18.36,4.24a1,1,0,0,0-1.41,0L12,9.19,7.05,4.24a1,1,0,0,0-1.41,0L4.22,5.65a1,1,0,0,0,0,1.41L9.17,12,4.22,17a1,1,0,0,0,0,1.41L5.64,19.8a1,1,0,0,0,1.41,0L12,14.85l4.95,4.95a1,1,0,0,0,1.41,0l1.41-1.41A1,1,0,0,0,19.78,17Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/></g></svg>
      </button>
      <div class="row">
        <div class="col-md-6 col-sm-6 hidden-xs-down left_col">

          <div class="images-container">
            {block name='product_images'}
              <div class="js-qv-mask mask">
                <ul class="product-images js-qv-product-images qv-images owl-carousel">
                  {foreach from=$product.images item=image}
                    <li class="thumb-container">
                      <img
                        class="thumb js-thumb {if $image.id_image == $product.cover.id_image} selected {/if}"
                        data-image-medium-src="{$image.bySize.medium_default.url}"
                        data-image-large-src="{$image.bySize.large_default.url}"
                        src="{$image.bySize.home_default.url}"
                        alt="{$image.legend}"
                        title="{$image.legend}"
                      >
                    </li>
                  {/foreach}
                </ul>
              </div>
            {/block}
          </div>

        </div>
        <div class="col-md-6 col-sm-6">
          <h1 class="h1 product-title">{$product.name}</h1>
          <div class="product-information">
            {block name='product_description_short'}
              <div id="product-description-short" сlass="product-short-desc" itemprop="description">{$product.description_short nofilter}</div>
            {/block}
          </div>
          {block name='product_buy'}
            <div class="product-actions">
              <form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
                <input type="hidden" name="token" value="{$static_token}">
                <input type="hidden" name="id_product" value="{$product.id}" id="product_page_product_id">
                <input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id">
                {block name='product_variants'}
                  {include file='catalog/_partials/product-variants.tpl'}
                {/block}

                {block name='product_prices'}
                  {include file='catalog/_partials/product-prices.tpl'}
                {/block}
                {block name='product_add_to_cart'}
                  {include file='catalog/_partials/product-add-to-cart.tpl'}
                {/block}

                {block name='product_refresh'}
                  <input class="product-refresh" data-url-update="false" name="refresh" type="submit" value="{l s='Refresh' d='Shop.Theme.Actions'}" hidden>
                {/block}
            </form>
          </div>
        {/block}
        </div>
      </div>

      <div class="discover_qw">
        <a href="{$product.url}" class="btn btn-primary">
          {l s='Discover Product' d='Shop.Theme.Actions'}
        </a>
      </div>
      
     </div>
   </div>
 </div>
</div>
