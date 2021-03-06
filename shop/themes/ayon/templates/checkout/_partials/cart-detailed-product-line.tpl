<div class="product-line-grid">
  <!--  product left content: image-->
  <div class="product-line-grid-thumb">
    <span class="product-image media-middle">
      <img src="{$product.cover.bySize.cart_default.url}" alt="{$product.name|escape:'quotes'}">
    </span>
  </div>

  <div class="product-line-grid-body">

    <!--  first line -->
    <div class="product-line-name">

        <div class="product-line-info">
          <a class="product-name" href="{$product.url}" data-id_customization="{$product.id_customization|intval}">{$product.name}</a>
        </div>

        {foreach from=$product.attributes key="attribute" item="value"}
          <p class="product-line-info atts">
            <span class="label">{$attribute}:</span>
            <span class="value">{$value}</span>
          </p>
        {/foreach}

        {if $product.customizations|count}
          <br>
          {block name='cart_detailed_product_line_customization'}
            {foreach from=$product.customizations item="customization"}
              <a href="#" data-toggle="modal" data-target="#product-customizations-modal-{$customization.id_customization}">{l s='Product customization' d='Shop.Theme.Catalog'}</a>
              <div class="modal fade customization-modal" id="product-customizations-modal-{$customization.id_customization}" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title">{l s='Product customization' d='Shop.Theme.Catalog'}</h4>
                    </div>
                    <div class="modal-body">
                      {foreach from=$customization.fields item="field"}
                        <div class="product-customization-line row">
                          <div class="col-sm-3 col-xs-4 label">
                            {$field.label}
                          </div>
                          <div class="col-sm-9 col-xs-8 value">
                            {if $field.type == 'text'}
                              {if (int)$field.id_module}
                                {$field.text nofilter}
                              {else}
                                {$field.text}
                              {/if}
                            {elseif $field.type == 'image'}
                              <img src="{$field.image.small.url}">
                            {/if}
                          </div>
                        </div>
                      {/foreach}
                    </div>
                  </div>
                </div>
              </div>
            {/foreach}
          {/block}
        {/if}

        <div class="cart-line-product-actions">
            <a
                class                       = "remove-from-cart remove"
                rel                         = "nofollow"
                href                        = "{$product.remove_from_cart_url}"
                data-link-action            = "delete-from-cart"
                data-id-product             = "{$product.id_product|escape:'javascript'}"
                data-id-product-attribute   = "{$product.id_product_attribute|escape:'javascript'}"
                data-id-customization   	  = "{$product.id_customization|escape:'javascript'}"
            >
              {if !isset($product.is_gift) || !$product.is_gift}
              <i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></i>
              {/if}
            </a>

            {block name='hook_cart_extra_product_actions'}
              {hook h='displayCartExtraProductActions' product=$product}
            {/block}
        </div>

      </div>

      <!--  second line -->
      <div class="product-line-prices">

          <div class="product-line-grid-price">
                  <div class="product-line-info product-price h5 {if $product.has_discount}has-discount{/if}">
                  <div class="current-price">
                    <span class="price">{$product.price}</span>
                    {if $product.has_discount}
                      <span class="regular-price old-price">{$product.regular_price}</span>
                      {if $product.discount_type === 'percentage'}
                        <span class="discount discount-percentage">
                          -{$product.discount_percentage_absolute}
                        </span>
                      {else}
                        <span class="discount discount-amount">
                          -{$product.discount_to_display}
                        </span>
                      {/if}
                    {/if}
                    {if $product.unit_price_full}
                      <div class="unit-price-cart">{$product.unit_price_full}</div>
                    {/if}
                  </div>
                </div>
          </div>

          <div class="product-line-grid-right product-line-actions">
            <div class="qty">
              {if isset($product.is_gift) && $product.is_gift}
                <span class="gift-quantity">{$product.quantity}</span>
              {else}
                <input
                  class="js-cart-line-product-quantity"
                  data-down-url="{$product.down_quantity_url}"
                  data-up-url="{$product.up_quantity_url}"
                  data-update-url="{$product.update_quantity_url}"
                  data-product-id="{$product.id_product}"
                  type="text"
                  value="{$product.quantity}"
                  name="product-quantity-spin"
                  min="{$product.minimal_quantity}"
                />
              {/if}
            </div>
            <div class="price">
              <span class="product-price">
                  {if isset($product.is_gift) && $product.is_gift}
                    <span class="gift">{l s='Gift' d='Shop.Theme.Checkout'}</span>
                  {else}
                    {$product.total}
                  {/if}
              </span>
            </div>
          </div>

        </div>

  </div>



</div>
