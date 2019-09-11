{** rt *}

<section class="featured-products roy_cc1 clearfix mt-3{if isset($roythemes.nc_cc1_slider) && $roythemes.nc_cc1_slider == "1"} slideme{/if}
{if isset($roythemes.nc_cc1_per)} pl_per{$roythemes.nc_cc1_per}{/if}
{if isset($roythemes.nc_cc1_spa)} pl_spa{$roythemes.nc_cc1_spa}{/if}
{if isset($roythemes.pl_lay)} pl_lay{$roythemes.pl_lay}{/if}
{if isset($roythemes.nc_cc1_lay) && $roythemes.nc_cc1_lay == "2"} mini{/if}
{if isset($roythemes.nc_cc1_width) && $roythemes.nc_cc1_width == "2"} col-lg-6{/if}"
data-auto="{$roythemes.nc_cc1_auto}"
data-max-slides="{$roythemes.nc_cc1_per}">
  <h2 class="h1 products-section-title text-uppercase">
    <a href="{$allProductsLink}">
      {l s='Our products' mod='roy_customcategory1'}
    </a>
  </h2>
  {if isset($roythemes.nc_hp_title) && $roythemes.nc_hp_title == "2"}
    <div class="undertitle">{l s='Check the people choice' mod='roy_customcategory1'}</div>
  {/if}
  <div class="products">
    {foreach from=$products item="product" name="hp"}
      {if isset($roythemes.nc_cc1_lay) && $roythemes.nc_cc1_lay == "1"}
        {include file="catalog/_partials/miniatures/product.tpl" product=$product}
      {else}

        {if $smarty.foreach.hp.iteration == 1}<div class="products-box">{/if}
        {include file="catalog/_partials/miniatures/product-mini.tpl" product=$product}

        {if $smarty.foreach.hp.last}
        </div>
        {else}
            {if $smarty.foreach.hp.iteration%3 == 0}
            </div><div class="products-box">
            {/if}
        {/if}

      {/if}
    {/foreach}
  </div>
</section>
