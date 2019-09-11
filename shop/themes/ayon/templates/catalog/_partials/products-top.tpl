<div id="js-product-list-top" class="products-selection">
  <div class="total-products">
    <i class="gl show_grid {if !isset($smarty.cookies.show_list)}active{/if}">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g id="Layer_4" data-name="Layer 4"><rect x="2" y="2" width="8" height="8" rx="3" ry="3" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2.20000004768372px"/><rect x="2" y="14" width="8" height="8" rx="3" ry="3" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2.20000004768372px"/><rect x="14" y="2" width="8" height="8" rx="3" ry="3" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2.20000004768372px"/><rect x="14" y="14" width="8" height="8" rx="3" ry="3" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2.20000004768372px"/></g>
      </svg>
    </i>
    <i class="gl show_list {if isset($smarty.cookies.show_list)}active{/if}">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g id="Layer_4" data-name="Layer 4"><rect x="2" y="2" width="20" height="4" rx="2" ry="2" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2.20000004768372px"/><rect x="2" y="10" width="20" height="4" rx="2" ry="2" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2.20000004768372px"/><rect x="2" y="18" width="20" height="4" rx="2" ry="2" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2.20000004768372px"/></g></svg>
    </i>

    {if $listing.pagination.total_items > 1}
      <p>{l s='There are' d='Shop.Theme.Catalog'} <span>{l s='%product_count%' d='Shop.Theme.Catalog' sprintf=['%product_count%' => $listing.pagination.total_items]}</span> {l s='products.' d='Shop.Theme.Catalog'}</p>
    {else if $listing.pagination.total_items > 0}
      <p>{l s='There is' d='Shop.Theme.Catalog'} <span>1</span> {l s='product.' d='Shop.Theme.Catalog'}</p>
    {/if}
  </div>
  <div class="sort-by-row">

    {block name='sort_by'}
      {include file='catalog/_partials/sort-orders.tpl' sort_orders=$listing.sort_orders}
    {/block}

    {if !empty($listing.rendered_facets)}
      <div class="col-sm-3 col-xs-4 hidden-lg-up filter-button">
        <button id="search_filter_toggler" class="btn btn-secondary">
          {l s='Filter' d='Shop.Theme.Actions'}
        </button>
      </div>
    {/if}
  </div>
  <div class="col-sm-12 hidden-md-up showing">
    {l s='Showing %from%-%to% of %total% item(s)' d='Shop.Theme.Catalog' sprintf=[
    '%from%' => $listing.pagination.items_shown_from ,
    '%to%' => $listing.pagination.items_shown_to,
    '%total%' => $listing.pagination.total_items
    ]}
  </div>
</div>
