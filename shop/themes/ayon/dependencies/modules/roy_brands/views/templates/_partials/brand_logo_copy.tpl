<ul class="roy_brands_ul brands_logo slideme">
  {foreach from=$brands item=brand name=brand_list}
    {if $smarty.foreach.brand_list.iteration <= $text_list_nb}

    {if $smarty.foreach.brand_list.iteration == 1}<div class="brand_row">{/if}
      <li>
        <a href="{$brand['link']}" title="" class="tip_inside">
            <img src = "{$link->getManufacturerImageLink($brand.id_manufacturer, 'brand_default')}" alt = "{$brand.name|escape:html:'UTF-8'}">
            <span class="tip">{$brand['name']}</span>
        </a>
      </li>

      {if $smarty.foreach.brand_list.last}
          </div>
      {else}
          {if $smarty.foreach.brand_list.iteration%$roythemes.brand_per_row == 0}
              </div><div class="brand_row">
          {/if}
      {/if}

    {/if}
  {/foreach}

  {if !$smarty.foreach.brand_list.last && $brands}
      </div>
  {/if}

</ul>
