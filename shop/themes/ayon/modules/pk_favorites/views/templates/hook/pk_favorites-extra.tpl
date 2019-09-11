{*
* Promokit Favorites Module
*
* @package   alysum
* @version   1.0
* @author    https://promokit.eu
* @copyright Copyright Ⓒ 2018 promokit.eu <@email:support@promokit.eu>
* @license   GNU General Public License version 2
*}
{assign var="pkfp_text" value=''}
{assign var="pkfp_class" value=''}
{if !$isCustomerFavoriteProduct AND $customer.is_logged}
  {assign var="pkfp_text" value={l s='Add to favorites' mod='pk_favorites'}}
  {assign var="pkfp_class" value='addToFav'}
{else if $isCustomerFavoriteProduct AND $customer.is_logged}
  {assign var="pkfp_text" value={l s='Remove from favorites' mod='pk_favorites'}}
  {assign var="pkfp_class" value='removeFromFav icon_checked'}
{else if !$customer.is_logged}
  {assign var="pkfp_text" value={l s='Add to favorites' mod='pk_favorites'}}
  {assign var="pkfp_title" value={l s='You have to login to add product to Favorites' mod='pk_favorites'}}
  {assign var="pkfp_class" value='loginToAdd'}
{/if}
{if $pkfp_text != ''}
  <a href="#" class="{if $page.page_name !== 'product' || ($page.page_name == 'product' && !$customer.is_logged)}tip_inside{/if} {if isset($roythemes.pl_hover_lay) && $roythemes.pl_hover_lay == "2"}action-btn{/if} noeffect flex-container align-items-center favoritesButton icon-button {$pkfp_class}" title="" data-pid="{$pid}">
    <i class="rts" data-size="24" data-color="#000000">{if isset($roythemes.nc_i_fav)}{$roythemes.nc_i_fav}{else}fav1{/if}</i>

    {if $page.page_name == 'product'}
      {if !$customer.is_logged}
        <span>
          {l s='Add to favorites' mod='pk_favorites'}
        </span>
        <span class="tip">
          {l s='You must be logged in' mod='pk_favorites'}
        </span>
      {/if}
      {if $customer.is_logged}
        {if $isCustomerFavoriteProduct}
          <span>
            {l s='This product is in your Favorites' mod='pk_favorites'}</a>
          </span>
        {else}
          <span>
            {$pkfp_text}
          </span>
        {/if}
      {/if}
    {else}
      {if !$customer.is_logged}
        <span class="tip">
          {l s='You must be logged in' mod='pk_favorites'}
        </span>
      {/if}
      {if $customer.is_logged}
        {if $isCustomerFavoriteProduct}
          <span class="tip">
            {l s='This product is in your Favorites' mod='pk_favorites'}</a>
          </span>
        {else}
          <span class="tip">
            {$pkfp_text}
          </span>
        {/if}
      {/if}
    {/if}

  </a>
{/if}
