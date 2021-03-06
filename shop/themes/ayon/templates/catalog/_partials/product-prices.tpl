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
{if $product.show_price}
  <div class="product-prices">

    {block name='product_price'}
      <div
        class="product-price {if $product.has_discount}has-discount{/if}"
        itemprop="offers"
        itemscope
        itemtype="https://schema.org/Offer"
      >
        <link itemprop="availability" href="https://schema.org/InStock"/>
        <meta itemprop="priceCurrency" content="{$currency.iso_code}">
        <meta itemprop="url" content="{$product.url}">
        {if isset($product.specific_prices.to)}<meta itemprop="priceValidUntil" content="{$product.specific_prices.to}">{/if}

        {if $product.has_discount}
          <div class="product-discount">
            {hook h='displayProductPriceBlock' product=$product type="old_price"}
            <span class="regular-price">{$product.regular_price}</span>
          </div>
        {/if}
        <div class="current-price">
          <span itemprop="price" content="{$product.price_amount}">{$product.price}</span>
        </div>
        {if $product.has_discount}
          {if $product.discount_type === 'percentage'}
            <span class="discount discount-percentage">{l s='Discount -%percentage%' d='Shop.Theme.Catalog' sprintf=['%percentage%' => $product.discount_percentage_absolute]}</span>
          {else}
            <span class="discount discount-amount">
                {l s='Discount -%amount%' d='Shop.Theme.Catalog' sprintf=['%amount%' => $product.discount_to_display]}
            </span>
          {/if}
        {/if}

        {block name='product_unit_price'}
          {if $displayUnitPrice}
            <p class="product-unit-price sub">{l s='(%unit_price%)' d='Shop.Theme.Catalog' sprintf=['%unit_price%' => $product.unit_price_full]}</p>
          {/if}
        {/block}
      </div>
    {/block}

    {block name='product_without_taxes'}
      {if $priceDisplay == 2}
        <p class="product-without-taxes">{l s='%price% tax excl.' d='Shop.Theme.Catalog' sprintf=['%price%' => $product.price_tax_exc]}</p>
      {/if}
    {/block}

    {block name='product_pack_price'}
      {if $displayPackPrice}
        <p class="product-pack-price"><span>{l s='Instead of %price%' d='Shop.Theme.Catalog' sprintf=['%price%' => $noPackPrice]}</span></p>
      {/if}
    {/block}

    {block name='product_ecotax'}
      {if $product.ecotax.amount > 0}
        <p class="price-ecotax">{l s='Including %amount% for ecotax' d='Shop.Theme.Catalog' sprintf=['%amount%' => $product.ecotax.value]}
          {if $product.has_discount}
            {l s='(not impacted by the discount)' d='Shop.Theme.Catalog'}
          {/if}
        </p>
      {/if}
    {/block}

    {hook h='displayProductPriceBlock' product=$product type="weight" hook_origin='product_sheet'}

    <div class="tax-shipping-delivery-label">
      {if $configuration.display_taxes_label}
        {$product.labels.tax_long}
      {/if}
      {hook h='displayProductPriceBlock' product=$product type="price"}
      {hook h='displayProductPriceBlock' product=$product type="after_price"}
      {if isset($product.additional_delivery_times)}
        {if $product.additional_delivery_times == 1}
          {if $product.delivery_information}
            <span class="delivery-information">{$product.delivery_information}</span>
          {/if}
		{elseif $product.additional_delivery_times == 2}
		  {if $product.quantity > 0}
			<span class="delivery-information">{$product.delivery_in_stock}</span>
		  {* Out of stock message should not be displayed if customer can't order the product. *}
		  {elseif $product.quantity == 0 && $product.add_to_cart_url}
			<span class="delivery-information">{$product.delivery_out_stock}</span>
		  {/if}
		{/if}
      {/if}
    </div>

    {if isset($product.specific_prices.from) || isset($product.specific_prices.to)}
      {if ($smarty.now|date_format:'%Y-%m-%d %H:%M:%S' >= $product.specific_prices.from && $smarty.now|date_format:'%Y-%m-%d %H:%M:%S' < $product.specific_prices.to)}
        <div class="product_count_block">
          <div class="countcontainer">
            <div class="roycounttitle">
              <span>{l s='Limited Special Offer! Expires in:'}</span>
            </div>
            <div class="clearfix"></div>
            <div class="count_icon">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              	 viewBox="0 0 240 240" style="enable-background:new 0 0 240 240;" xml:space="preserve">
              <g>
                <path class="hand hand-min" d="M185.4,128H120c-4.4,0-8-3.6-8-8s3.6-8,8-8h65.4c4.4,0,8,3.6,8,8S189.8,128,185.4,128z"/>
              </g>
              <g>
              	<path class="hand hand-hour" d="M120,127.2c-4.4,0-8-3.6-8-8V63.9c0-4.4,3.6-8,8-8s8,3.6,8,8v55.4C128,123.7,124.4,127.2,120,127.2z"/>
              </g>
              <path d="M120,16c57.3,0,104,46.7,104,104s-46.7,104-104,104S16,177.3,16,120S62.7,16,120,16 M120,0C53.7,0,0,53.7,0,120
              	s53.7,120,120,120s120-53.7,120-120S186.3,0,120,0L120,0z"/>
              </svg>
            </div>

            <div class="count_other">
              <div class="roycountdown">
                <div class="roycount" style="display: none;" data-specific-price-to="{$product.specific_prices.to}" data-days={l s='Days'} data-hours={l s='Hours'} data-minutes={l s='Minutes'} data-seconds={l s='Seconds'}></div>
              </div>
            </div>
          </div>
        </div>
      {/if}
    {/if}

  </div>

{/if}
