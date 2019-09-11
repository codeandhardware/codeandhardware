<div id="_desktop_cart" class="cart_widget">
  <div class="blockcart cart-preview {if $cart.products_count > 0}active{else}inactive{/if}" data-refresh-url="{$refresh_url}">
    <div class="cart_header tip_inside">
        <a rel="nofollow" href="{$cart_url}" class="{if isset($roythemes.click_lay_c) && ($roythemes.click_lay_c !== "3")}cart_nogo{/if}">
          <i class="shopping-cart"></i>
          <span class="text hidden-sm-down">{l s='Cart' d='Shop.Theme.Checkout'}</span>
          <span class="cart-products-count{if $cart.products_count < 1} hidden{/if}">{$cart.products_count}</span>
          {if $cart.products_count > 0}
            <span class="tip">{l s='Open Shopping cart' d='Modules.Shoppingcart.Shop'}</span>
          {else}
            <span class="tip">{l s='Cart is empty.' d='Modules.Shoppingcart.Shop'}</span>
          {/if}
        </a>
    </div>

    <div class="cart_inside">
      <h4 class="side_title">{l s='Shopping Cart' d='Modules.Shoppingcart.Shop'}</h4>
      <span class="metahide">{l s='Back to shop' d='Modules.Shoppingcart.Shop'}</span>
      <span class="close_cross"><i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></i></span>
      {if $cart.products_count > 0}
        <ul class="cart-prods">
          <div class="loader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
          {foreach from=$cart.products item=product}
            <li>{include 'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' product=$product}</li>
          {/foreach}
        </ul>
        <div class="cart-prices">
          <div class="cart-subtotals">
            {foreach from=$cart.subtotals item="subtotal"}
            <div class="cart-summary-line">
              <span class="label">{$subtotal.label}</span>
              <span class="value">{$subtotal.value}</span>
            </div>
            {/foreach}
          </div>
        </div>
        <div class="cart-bottom">
          <div class="cart-total">
            {foreach from=$cart.subtotals item="subtotal"}
            <div class="cart-summary-line">
              <span class="label">{$subtotal.label}</span>
              <span class="value">{$subtotal.value}</span>
            </div>
            {/foreach}
          </div>
          <div class="cart-checkout">
            <a href="{$cart_url}" class="btn btn-primary btn-high">{l s='Shopping Cart' d='Modules.Shoppingcart.Shop'}</a>
          </div>
        </div>
      {else}
        <div class="shopping-cart empty">
          <p class="text-center">{l s='Cart is empty.' d='Modules.Shoppingcart.Shop'}</p>
          <i></i>
        </div>
        <div class="cart-checkout">
          <button class="btn btn-primary btn-high return">{l s='Back to shop' d='Modules.Shoppingcart.Shop'}</button>
        </div>
      {/if}
    </div>
  </div>
</div>
