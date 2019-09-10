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
{extends file='catalog/listing/product-list.tpl'}

{block name='product_list_header'}

    {if isset($roythemes.b_pos_cat) && $roythemes.b_pos_cat == "2"}
      {block name='breadcrumb'}
          {include file='_partials/breadcrumb.tpl'}
      {/block}
    {/if}
    <div class="block-category hidden-sm-down">
      {if $category.image.large.url && isset($roythemes.nc_cat_img) && $roythemes.nc_cat_img == "1" && isset($roythemes.nc_cat_imglay) && $roythemes.nc_cat_imglay == "1"}
        <div class="category-cover">
          <img class="img-responsive" src="{$category.image.large.url}" alt="{$category.image.legend}">
        </div>
      {/if}
      <h1 class="h1">{$category.name}</h1>
      {if $category.description}
        <div id="category-description" class="text-muted">{$category.description nofilter}</div>
      {/if}
    </div>
    <div class="text-sm-center hidden-md-up">
      <h1 class="h1">{$category.name}</h1>
    </div>

    {if isset($subcategories)}
      <!-- Subcategories -->
      <div id="subcategories">
        <ul class="clearfix">
          {foreach from=$subcategories item=subcategory}
            <li>
              <div class="sub_cont">
                <div class="subcategory-image">
                  <a href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'html':'UTF-8'}" class="img noeffect">
                    {if $subcategory.id_image}
                      <img class="replace-2x" src="{$link->getCatImageLink($subcategory.link_rewrite, $subcategory.id_image, 'category_default')|escape:'html':'UTF-8'}" alt="{$subcategory.name|escape:'html':'UTF-8'}"/>
                    {else}
                      <img class="replace-2x" src="{$img_cat_dir}{$lang_iso}-default-category_default.jpg" alt="{$subcategory.name|escape:'html':'UTF-8'}"/>
                    {/if}
                  </a>
                </div>
                <h5><a class="subcategory-name" href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'html':'UTF-8'}">{$subcategory.name|truncate:25:'...'|escape:'html':'UTF-8'}</a></h5>
              </div>
            </li>
          {/foreach}
        </ul>
      </div>
    {/if}

{/block}
