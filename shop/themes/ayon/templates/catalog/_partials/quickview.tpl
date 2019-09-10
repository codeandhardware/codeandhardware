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
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>
   <div class="modal-content">
     <div class="modal-body">
      <div class="row">
        <div class="col-md-6 col-sm-6 left_col">

            {block name='product_images'}
              <div class="js-qv-mask mask">
                <ul class="product-images js-qv-product-images">
                  {foreach from=$product.images item=image}
                    <li class="thumb-container">
                      <img
                        class="thumb js-thumb {if $image.id_image == $product.cover.id_image} selected {/if}"
                        data-image-medium-src="{$image.bySize.medium_default.url}"
                        data-image-large-src="{$image.bySize.large_default.url}"
                        src="{$image.bySize.large_default.url}"
                        alt="{$image.legend}"
                        title="{$image.legend}"
                        width="100"
                        itemprop="image"
                      >
                    </li>
                  {/foreach}
                </ul>
              </div>
            {/block}

        </div>
        <div class="col-md-6 col-sm-6 right_col">
            <div class="right_col_inner">

          <h1 class="h1 product-title">{$product.name}</h1>


                      <div class="product-information">

                        {block name='product_discounts'}
                          {include file='catalog/_partials/product-discounts.tpl'}
                        {/block}

                        {block name='product_prices'}
                          {include file='catalog/_partials/product-prices.tpl'}
                        {/block}

                        {block name='product_description_short'}
                          <div id="product-description-short-{$product.id}" сlass="product-short-desc" itemprop="description">{$product.description_short nofilter}</div>
                        {/block}

                        {if $product.is_customizable && count($product.customizations.fields)}
                          {block name='product_customization'}
                            {include file="catalog/_partials/product-customization.tpl" customizations=$product.customizations}
                          {/block}
                        {/if}

                        <div class="product-actions">
                          {block name='product_buy'}
                            <form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
                              <input type="hidden" name="token" value="{$static_token}">
                              <input type="hidden" name="id_product" value="{$product.id}" id="product_page_product_id">
                              <input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id">

                              {block name='product_variants'}
                                {include file='catalog/_partials/product-variants.tpl'}
                              {/block}

                              {block name='product_pack'}
                                {if $packItems}
                                  <section class="product-pack">
                                    <h3 class="h4">{l s='This pack contains' d='Shop.Theme.Catalog'}</h3>
                                    {foreach from=$packItems item="product_pack"}
                                      {block name='product_miniature'}
                                        {include file='catalog/_partials/miniatures/pack-product.tpl' product=$product_pack}
                                      {/block}
                                    {/foreach}
                                </section>
                                {/if}
                              {/block}

                              {block name='product_out_of_stock'}
                                <div class="product-out-of-stock">
                                  {hook h='actionProductOutOfStock' product=$product}
                                </div>
                              {/block}

                              {block name='product_refresh'}
                                <input class="product-refresh" data-url-update="false" name="refresh" type="submit" value="{l s='Refresh' d='Shop.Theme.Actions'}" hidden>
                              {/block}
                            </form>
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
   </div>
 </div>
</div>
