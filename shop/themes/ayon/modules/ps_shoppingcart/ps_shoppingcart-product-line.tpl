<div class="product-img">
	<span class="image-cont">
		<img class="product-image" src="{$product.cover.small.url}" alt="{$product.cover.legend}" title="{$product.cover.legend}">
	</span>
  {if $product.quantity > 1}
    <span class="product-quantity">{$product.quantity}</span>
  {/if}
	<a class="remove-from-cart tip_inside"
	    rel="nofollow"
	    href="{$product.remove_from_cart_url}"
	    data-link-action="remove-from-cart"
	    title=""
	>
	  <i>
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
	  </i>
	  <span class="tip">{l s='remove from cart' d='Shop.Theme.Actions'}</span>
	</a>
</div>
<div class="product-atts">
	<p class="product-name">{$product.name}
  {foreach from=$product.attributes item="property_value" key="property"}
    <span>{$property}: {$property_value}</span>
  {/foreach}</p>
	<span class="product-price">{$product.price}</span>
</div>
