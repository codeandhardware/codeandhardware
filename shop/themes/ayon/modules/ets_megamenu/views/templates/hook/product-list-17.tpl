{*
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2018 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div class="menu-prods">
	{if isset($products) && $products}
		{foreach from=$products item="product"}
	    <article class="product-miniature js-product-miniature" data-id-product="{$product.id_product|intval}" data-id-product-attribute="{$product.id_product_attribute|intval}">
	    <div class="thumbnail-container tip_inside">
	      {block name='product_thumbnail'}
	        <a href="{$product.url|escape:'html':'UTF-8'}" class="thumbnail product-thumbnail">
	          <img
	            src = "{$product.cover.bySize.small_default.url|escape:'html':'UTF-8'}"
	            alt = "{$product.cover.legend|escape:'html':'UTF-8'}"
	            data-full-size-image-url = "{$product.cover.large.url|escape:'html':'UTF-8'}"
	          />
						<span class="tip">{$product.name|escape:'html':'UTF-8'}</span>
	        </a>
	      {/block}
	      </div>
	    </article>
	  {/foreach}
	{/if}
</div>
