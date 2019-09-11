{**
 * 2018 RoyThemes
 *}

{if isset($roythemes.header_ns) && ($roythemes.header_ns == "1")}
  {block name='header_nav'}
    <nav class="header-nav hidden-md-down">
      <div class="container">
        <div class="row">
          {if isset($roythemes.nc_toppanel_lay)}
            {if $roythemes.nc_toppanel_lay !== "1"}
              <div class="col-md-3 col-xs-3 curlan">
                {hook h='displayNav1'}
              </div>
            {/if}
              <div class="col-md-{if $roythemes.nc_toppanel_lay == "1"}12{else}9{/if} roycon">
                {hook h='displayHeaderContent'}
              </div>
          {/if}
        </div>
      </div>
    </nav>
  {/block}
{/if}


{block name='header_top'}
  <div class="header-top">
    <div class="container">

       <div class="row action header_lay{if isset($roythemes.header_lay)}{$roythemes.header_lay}{/if}">
         {if isset($roythemes.header_lay) && ($roythemes.header_lay !== "4" && $roythemes.header_lay !== "6")}
            <div class="head_logo" id="_desktop_logo">
              <a href="{$urls.base_url}">
                <img class="logo logo-normal img-responsive" src="{$urls.base_url}modules/roy_customizer/upload/logo-normal-{Context::getContext()->shop->id}.{if isset($roythemes.nc_logo_normal_ext)}{$roythemes.nc_logo_normal_ext}{else}png{/if}" alt="{$shop.name}">
                <img class="logo logo-trans img-responsive" src="{$urls.base_url}modules/roy_customizer/upload/logo-trans-{Context::getContext()->shop->id}.{if isset($roythemes.nc_logo_trans_ext)}{$roythemes.nc_logo_trans_ext}{else}png{/if}" alt="{$shop.name}">
              </a>
              {if isset($roythemes.header_lay) && ($roythemes.header_lay == "3")}
                {widget name="ps_searchbar"}
              {/if}
            </div>
            {if isset($roythemes.header_lay) && ($roythemes.header_lay !== "5")}
            <div class="head_menu">
              {hook h='displayMegaMenu'}
            </div>
            {/if}
            <div class="head_action">
              <ul>
                {if isset($roythemes.nc_cl) && $roythemes.nc_cl == "2"}
                  <li class="curlan">
                    {widget name="ps_languageselector"}
                  </li>
                  <li class="curlan">
                    {widget name="ps_currencyselector"}
                  </li>
                {/if}
                {if isset($roythemes.header_lay) && ($roythemes.header_lay == "5")}
                  {block name='menu_top'}
                    {include file="_partials/menu.tpl"}
                  {/block}
                {/if}
                <li>
                {block name='acc_top'}
                  {include file="_partials/acc.tpl"}
                {/block}
                </li>
                {if isset($roythemes.header_lay) && ($roythemes.header_lay !== "3")}
                <li>{widget name="ps_searchbar"}</li>
                {/if}
                <li>{widget name="ps_shoppingcart"}</li>
              </ul>
            </div>
          {/if}

          {if isset($roythemes.header_lay) && ($roythemes.header_lay == "4" || $roythemes.header_lay == "6")}
            <div class="head_action">
              <ul>
                {if isset($roythemes.header_lay) && ($roythemes.header_lay == "6")}
                  {block name='menu_top'}
                    {include file="_partials/menu.tpl"}
                  {/block}
                {/if}
                <li>{widget name="ps_searchbar"}</li>
              </ul>
            </div>
            <div class="head_logo" id="_desktop_logo">
              <a href="{$urls.base_url}">
                <img class="logo logo-normal img-responsive" src="{$urls.base_url}modules/roy_customizer/upload/logo-normal-{Context::getContext()->shop->id}.{if isset($roythemes.nc_logo_normal_ext)}{$roythemes.nc_logo_normal_ext}{else}png{/if}" alt="{$shop.name}">
                <img class="logo logo-trans img-responsive" src="{$urls.base_url}modules/roy_customizer/upload/logo-trans-{Context::getContext()->shop->id}.{if isset($roythemes.nc_logo_trans_ext)}{$roythemes.nc_logo_trans_ext}{else}png{/if}" alt="{$shop.name}">
              </a>
              {if isset($roythemes.header_lay) && ($roythemes.header_lay == "3")}
               {block name='acc_top'}
                 {include file="_partials/acc.tpl"}
               {/block}
              {/if}
            </div>
            <div class="head_action">
              <ul>
                {if isset($roythemes.nc_cl) && $roythemes.nc_cl == "2"}
                  <li class="curlan">
                    {widget name="ps_languageselector"}
                  </li>
                  <li class="curlan">
                    {widget name="ps_currencyselector"}
                  </li>
                {/if}
                <li>
                  {block name='acc_top'}
                    {include file="_partials/acc.tpl"}
                  {/block}
                </li>
                <li>{widget name="ps_shoppingcart"}</li>
              </ul>
            </div>
          {/if}
        </div>

        {if isset($roythemes.header_lay) && ($roythemes.header_lay == "4")}
        <div class="head_menu">
          {hook h='displayMegaMenu'}
        </div>
        {/if}

      </div>

      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>

  </div>
  {hook h='displayNavFullWidth'}
  <div class="header-mobile hidden-lg-up">
    <div class="header-mobile-wrap">
      <div class="logo-mobile">
        <a href="{$urls.base_url}">
          <img class="logo img-responsive" src="{$urls.base_url}modules/roy_customizer/upload/logo-mobile-{Context::getContext()->shop->id}.{if isset($roythemes.nc_mobile_logo_ext)}{$roythemes.nc_mobile_logo_ext}{else}png{/if}" alt="{$shop.name}">
        </a>
      </div>
      <div class="head_action">
        <ul>
          <li><i class="box-search rts" data-size="26" data-color="#000000">{if isset($roythemes.nc_i_search)}{$roythemes.nc_i_search}{else}search1{/if}</i></li>
          <li><i class="box-cart rts" data-size="26" data-color="#000000">{if isset($roythemes.cart_icon)}{$roythemes.cart_icon}{else}cart1{/if}</i><span class="box-cart cart-products-count">{$cart.products_count}</span></li>
          <li class="menu_top"><i class="box-menu"><span></span><span></span>{if isset($roythemes.nc_m_icon) && ($roythemes.nc_m_icon !== "menu4") && ($roythemes.nc_m_icon !== "menu5")}<span></span>{/if}</i></li>
        </ul>
      </div>
    </div>
  </div>


{/block}
