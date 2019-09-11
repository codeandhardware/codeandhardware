{extends file='customer/page.tpl'}

{block name='page_title'}
  {l s='Favorite products' d='Shop.Theme.Customeraccount'}
{/block}

{block name='page_content'}
		<div id="favoriteproducts_block_account">
			{if $favoriteProducts}
				<div id="products" class="view_grid">
					<div class="product_list">
						<div class="products row">
						{foreach from=$favoriteProducts item=favoriteProduct}
							{include file="catalog/_partials/miniatures/product.tpl" product=$favoriteProduct}
						{/foreach}
						</div>
					</div>
				</div>
			{else}
				<p class="warning">{l s='No favorite products have been determined just yet' mod='pk_favorites'}</p>
			{/if}
		</div>
{/block}

{block name='page_footer'}
  {block name='my_account_links'}
  {/block}
{/block}
