{**
 * 2007-2018 PrestaShop
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
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{extends file=$layout}

{block name='head_seo' prepend}
  <link rel="canonical" href="{$product.canonical_url}">
{/block}

{block name='head' append}
  <meta property="og:type" content="product">
  <meta property="og:url" content="{$urls.current_url}">
  <meta property="og:title" content="{$page.meta.title}">
  <meta property="og:site_name" content="{$shop.name}">
  <meta property="og:description" content="{$page.meta.description}">
  <meta property="og:image" content="{$product.cover.large.url}">
  <meta property="product:pretax_price:amount" content="{$product.price_tax_exc}">
  <meta property="product:pretax_price:currency" content="{$currency.iso_code}">
  <meta property="product:price:amount" content="{$product.price_amount}">
  <meta property="product:price:currency" content="{$currency.iso_code}">
  {if isset($product.weight) && ($product.weight != 0)}
  <meta property="product:weight:value" content="{$product.weight}">
  <meta property="product:weight:units" content="{$product.weight_unit}">
  {/if}
{/block}

{block name='content'}

  <section id="main" itemscope itemtype="https://schema.org/Product">
    <meta itemprop="url" content="{$product.url}">

    <div class="container">
    <div class="row {if isset($roythemes.pp_sticky) && $roythemes.pp_sticky == "1"}pp_stick_parent{/if}">
      <div class="col-lg-6 col-image">
        {block name='page_content_container'}
          <section class="col-image-inside">
            {block name='page_content'}
              {block name='product_flags'}
                <ul class="product-flags">
                  {foreach from=$product.flags item=flag}
                    <li class="product-flag {$flag.type}">{$flag.label}</li>
                  {/foreach}
                </ul>
              {/block}

              {block name='product_cover_thumbnails'}
                {include file='catalog/_partials/product-cover-thumbnails.tpl'}
              {/block}

            {/block}
          </section>
        {/block}
        </div>
        <div class="col-lg-6 col-content">
          <div class="col-content-inside {if isset($roythemes.pp_sticky) && $roythemes.pp_sticky == "1"}pp_stick_it{/if}">
            {if isset($roythemes.b_pos_pro) && $roythemes.b_pos_pro == "2"}
              {block name='breadcrumb'}
                  {include file='_partials/breadcrumb.tpl'}
              {/block}
            {/if}

            {block name='page_header_container'}
              {block name='page_header'}
                <h1 class="h1 product-title" itemprop="name">{block name='page_title'}{$product.name}{/block}</h1>
              {/block}
            {/block}

            {if isset($nbComments) && $nbComments > 0}
              <div class="comments_note">
                <div class="star_content clearfix">
                  {section name="i" start=0 loop=5 step=1}
                    {if $averageTotal le $smarty.section.i.index}
                      <div class="star"></div>
                    {else}
                      <div class="star star_on"></div>
                    {/if}
                  {/section}
                  <span class="nb-comments"><span>{l s='%s'|sprintf:$nbComments mod='productcomments'}</span> {if isset($nbComments) && $nbComments == 1}{l s='Review'}{else}{l s='Reviews'}{/if}</span>
                </div>
              </div>
            {/if}

            <div class="product-information">

              {block name='product_discounts'}
                {include file='catalog/_partials/product-discounts.tpl'}
              {/block}

              {block name='product_prices'}
                {include file='catalog/_partials/product-prices.tpl'}
              {/block}

              {block name='product_description_short'}
                <div id="product-description-short-{$product.id}" сlass="product-short-desc" itemprop="description">{$product.description_short nofilter}</div>
              {/block}

              {if $product.is_customizable && count($product.customizations.fields)}
                {block name='product_customization'}
                  {include file="catalog/_partials/product-customization.tpl" customizations=$product.customizations}
                {/block}
              {/if}

              <div class="product-actions">
                {block name='product_buy'}
                  <form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
                    <input type="hidden" name="token" value="{$static_token}">
                    <input type="hidden" name="id_product" value="{$product.id}" id="product_page_product_id">
                    <input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id">

                    {block name='product_variants'}
                      {include file='catalog/_partials/product-variants.tpl'}
                    {/block}

                    {block name='product_pack'}
                      {if $packItems}
                        <section class="product-pack">
                          <h3 class="h4">{l s='This pack contains' d='Shop.Theme.Catalog'}</h3>
                          {foreach from=$packItems item="product_pack"}
                            {block name='product_miniature'}
                              {include file='catalog/_partials/miniatures/pack-product.tpl' product=$product_pack}
                            {/block}
                          {/foreach}
                      </section>
                      {/if}
                    {/block}



                    {block name='product_out_of_stock'}
                      <div class="product-out-of-stock">
                        {hook h='actionProductOutOfStock' product=$product}
                      </div>
                    {/block}

                    {block name='product_refresh'}
                      <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="{l s='Refresh' d='Shop.Theme.Actions'}">
                    {/block}
                  </form>
                {/block}

              </div>
          </div>
        </div>
      </div>
    </div>


    {block name='product_tabs'}
      <div class="tabs">
        <div class="container">
        <ul class="nav nav-tabs" role="tablist">
          {if $product.description}
            <li class="nav-item">
               <a
                 class="nav-link{if $product.description} active{/if}"
                 data-toggle="tab"
                 href="#description"
                 role="tab"
                 aria-controls="description"
                 {if $product.description} aria-selected="true"{/if}>{l s='Description' d='Shop.Theme.Catalog'}</a>
            </li>
          {/if}
          {if $product.features}
          <li class="nav-item">
            <a
              class="nav-link{if !$product.description} active{/if}"
              data-toggle="tab"
              href="#product-details"
              role="tab"
              aria-controls="product-details"
              {if !$product.description} aria-selected="true"{/if}>{l s='Product Details' d='Shop.Theme.Catalog'}</a>
          </li>
          {/if}
          {if $product.attachments}
            <li class="nav-item">
              <a
                class="nav-link"
                data-toggle="tab"
                href="#attachments"
                role="tab"
                aria-controls="attachments">{l s='Attachments' d='Shop.Theme.Catalog'}</a>
            </li>
          {/if}
          {foreach from=$product.extraContent item=extra key=extraKey}
            <li class="nav-item">
              <a
                class="nav-link"
                data-toggle="tab"
                href="#extra-{$extraKey}"
                role="tab"
                aria-controls="extra-{$extraKey}">{$extra.title}</a>
            </li>
          {/foreach}
        </ul>

        <div class="tab-content" id="tab-content">
         <div class="tab-pane fade in{if $product.description} active{/if}" id="description" role="tabpanel">
           {block name='product_description'}
             <div class="product-description">{$product.description nofilter}</div>
           {/block}
         </div>

         {block name='product_details'}
           {include file='catalog/_partials/product-details.tpl'}
         {/block}

         {block name='product_attachments'}
           {if $product.attachments}
            <div class="tab-pane fade in" id="attachments" role="tabpanel">
               <section class="product-attachments">
                 <h3 class="h5 text-uppercase">{l s='Download' d='Shop.Theme.Actions'}</h3>
                 {foreach from=$product.attachments item=attachment}
                   <div class="attachment">
                     <h4><a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">{$attachment.name}</a></h4>
                     <p>{$attachment.description}</p
                     <a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">
                       {l s='Download' d='Shop.Theme.Actions'} ({$attachment.file_size_formatted})
                     </a>
                   </div>
                 {/foreach}
               </section>
             </div>
           {/if}
         {/block}

         {foreach from=$product.extraContent item=extra key=extraKey}
         <div class="tab-pane fade in {$extra.attr.class}" id="extra-{$extraKey}" role="tabpanel" {foreach $extra.attr as $key => $val} {$key}="{$val}"{/foreach}>
           {$extra.content nofilter}
         </div>
         {/foreach}
      </div>

      </div>
    </div>
  {/block}


    {block name='product_accessories'}
      {if $accessories}
        <section class="product-accessories featured-products slideme clearfix mt-3">
          <div class="pp_products_wrapper">
            <h2 class="products-section-title">
              {l s='You might also like' d='Shop.Theme.Catalog'}
            </h2>
            <div class="products">
              {foreach from=$accessories item="product_accessory"}
                {block name='product_miniature'}
                  {include file='catalog/_partials/miniatures/product.tpl' product=$product_accessory}
                {/block}
              {/foreach}
            </div>
          </div>
        </section>
      {/if}
    {/block}

    {block name='product_footer'}
      {hook h='displayFooterProduct' product=$product category=$category}
    {/block}

    {block name='product_images_modal'}
      {include file='catalog/_partials/product-images-modal.tpl'}
    {/block}
    </div>

    {block name='page_footer_container'}
      <footer class="page-footer">
        {block name='page_footer'}
          <!-- Footer content -->
        {/block}
      </footer>
    {/block}
  </section>

{/block}
