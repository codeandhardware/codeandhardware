<div class="product-info">
  {block name='product_quantities'}
    {if $product.show_quantities}
      <div class="product-quantities">
        <label class="label">{l s='In stock' d='Shop.Theme.Catalog'}</label>
        <span data-stock="{$product.quantity}" data-allow-oosp="{$product.allow_oosp}">{$product.quantity}</span>
      </div>
    {/if}
  {/block}

  {block name='product_reference'}
    {if isset($product.reference_to_display)}
      <div class="product-reference">
        <label class="label">{l s='Reference' d='Shop.Theme.Catalog'} </label>
        <span itemprop="sku">{$product.reference_to_display}</span>
      </div>
    {/if}
  {/block}

  {block name='product_availability_date'}
    {if $product.availability_date}
      <div class="product-availability-date">
        <label>{l s='Availability date:' d='Shop.Theme.Catalog'} </label>
        <span>{$product.availability_date}</span>
      </div>
    {/if}
  {/block}

  {block name='product_condition'}
    {if $product.condition}
      <div class="product-condition">
        <label class="label">{l s='Condition' d='Shop.Theme.Catalog'} </label>
        <link itemprop="itemCondition" href="{$product.condition.schema_url}"/>
        <span>{$product.condition.label}</span>
      </div>
    {/if}
  {/block}

  {if isset($product_manufacturer->id)}
    <div class="clearfix"></div>
    <div class="product-manufacturer tip_inside">
      <a href="{$product_brand_url}" class="noeffect">
          <label class="label">{l s='Brand' d='Shop.Theme.Catalog'}</label>
          <span itemprop="brand">
            {$product_manufacturer->name}
          </span>
          <div class="clearflex"></div>
            {if isset($manufacturer_image_url)}
                <img src="{$manufacturer_image_url}" class="img img-thumbnail manufacturer-logo" alt="{$product_manufacturer->name}" height="140" width="140">
            {/if}
      </a>
        <span class='tip'>
          {l s='View all products of ' d='Shop.Theme.Catalog'}{$product_manufacturer->name}
        </span>
    </div>
  {/if}

</div>
