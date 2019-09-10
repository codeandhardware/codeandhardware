{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<!doctype html>
<html lang="{$language.iso_code}">

  <head>
    {block name='head'}
      {include file='_partials/head.tpl'}
    {/block}
  </head>

  <body id="{$page.page_name}" class="{$page.body_classes|classnames}{if isset($roythemes.o_add) && $roythemes.o_add == "1"} add1{/if}">

    {if isset($roythemes.nc_loader) && $roythemes.nc_loader == "1"}
      <div class="roy-loader">
        {if isset($roythemes.nc_loader_logo) && $roythemes.nc_loader_logo !== "1"}
          <img class="logo_loader" src="{$urls.base_url}modules/roy_customizer/upload/logo-loader-{Context::getContext()->shop->id}.{if isset($roythemes.nc_loader_logo_ext)}{$roythemes.nc_loader_logo_ext}{else}png{/if}" alt="{$shop.name}" />
        {/if}
        {if isset($roythemes.nc_loader_logo) && $roythemes.nc_loader_logo !== "3"}
          <div class="icon_loader"><span></span><span></span><span></span></div>
        {/if}

      </div>
    {/if}

    {block name='hook_after_body_opening_tag'}
      {hook h='displayAfterBodyOpeningTag'}
    {/block}

    <main class="roy-reload {if isset($roythemes.nc_loader) && $roythemes.nc_loader == "1"}animsition{/if}">

      {block name='product_activation'}
        {include file='catalog/_partials/product-activation.tpl'}
      {/block}

      <header id="header" class="{if isset($roythemes.header_trans) && $roythemes.header_trans == "2"}normal{/if}{if isset($roythemes.header_ns) && $roythemes.header_ns == "1"} toppanel{/if}" data-trans="{if isset($roythemes.header_trans) && $roythemes.header_trans == "2"}normal{else}trans{/if}" data-hide="{if isset($roythemes.header_hide) && $roythemes.header_hide == "1"}yes{else}no{/if}" data-top="{if isset($roythemes.header_ns) && $roythemes.header_ns == "1"}yes{else}no{/if}">
        {block name='header'}
          {include file='_partials/header.tpl'}
        {/block}
      </header>

      <section id="wrapper" class="stick_parent_lb">
        {hook h="displayWrapperTop"}

        {block name="top_column"}
          <div id="top_column" {if $page.page_name == 'category' && $category.image.large.url && isset($roythemes.nc_cat_img) && $roythemes.nc_cat_img == "1" && isset($roythemes.nc_cat_imglay) && $roythemes.nc_cat_imglay == "2"}style="background-image:url({$category.image.large.url})"{/if}>

            <div class="container">
              {hook h='displayTopColumn'}
            </div>

            {block name='breadcrumb'}
                {include file='_partials/breadcrumb.tpl'}
            {/block}
          </div>
        {/block}

        <div class="container">

        {block name="left_column"}
            <div id="left-column" class="col-md-12 col-lg-3 side-column">
              {if $page.page_name == 'product'}
                {hook h='displayLeftColumnProduct'}
              {else}
                {hook h="displayLeftColumn"}
              {/if}
            </div>
          {/block}

          {block name="content_wrapper"}
            <div id="content-wrapper" class="left-column right-column col-sm-4 col-md-12">
              {hook h="displayContentWrapperTop"}
              {block name="content"}
                <p>Hello world! This is HTML5 Boilerplate.</p>
              {/block}
              {hook h="displayContentWrapperBottom"}
            </div>
          {/block}

          {block name="right_column"}
            <div id="right-column" class="col-md-12 col-lg-3 side-column">
              {if $page.page_name == 'product'}
                {hook h='displayRightColumnProduct'}
              {else}
                {hook h="displayRightColumn"}
              {/if}
            </div>
          {/block}

        </div>
        {hook h="displayWrapperBottom"}
      </section>

      <section id="bottom_column">
        <div class="container">
         {block name='hook_footer_before'}
           {hook h='displayFooterBefore'}
         {/block}
        </div>
      </section>

      <footer id="footer">
        {block name="footer"}
          {include file="_partials/footer.tpl"}
        {/block}
      </footer>

      {block name="side"}
        {include file="_partials/side.tpl"}
      {/block}

    </main>

    {block name='javascript_bottom'}
      {include file="_partials/javascript.tpl" javascript=$javascript.bottom}
    {/block}

    {block name='hook_before_body_closing_tag'}
      {hook h='displayBeforeBodyClosingTag'}
    {/block}
  </body>

</html>
