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
<section class="product-customization">
  {if !$configuration.is_catalog}
    <div class="card card-block">
      <h3 class="h4 card-title">{l s='Product customization' d='Shop.Theme.Catalog'}</h3>
      {l s='Don\'t forget to save your customization to be able to add to cart' d='Shop.Forms.Help'}

      {block name='product_customization_form'}
        <form method="post" action="{$product.url}" enctype="multipart/form-data">
          <ul class="clearfix">
            {foreach from=$customizations.fields item="field"}
              <li class="product-customization-item">
                <label> {$field.label}</label>
                {if $field.type == 'text'}
                  <textarea placeholder="{l s='Your message here' d='Shop.Forms.Help'}" class="product-message" maxlength="250" {if $field.required} required {/if} name="{$field.input_name}"></textarea>
                  <small class="float-xs-right">{l s='250 char. max' d='Shop.Forms.Help'}</small>
                  {if $field.text !== ''}
                      <h6 class="customization-message">{l s='Your customization:' d='Shop.Theme.Catalog'}
                          <label>{$field.text}</label>
                      </h6>
                  {/if}
                {elseif $field.type == 'image'}
                  {if $field.is_customized}
                    <br>
                    <img src="{$field.image.small.url}">
                    <a class="remove-image" href="{$field.remove_image_url}" rel="nofollow">{l s='Remove Image' d='Shop.Theme.Actions'}</a>
                  {/if}
                  <span class="custom-file">
                    <span class="js-file-name">{l s='No selected file' d='Shop.Forms.Help'}</span>
                    <input class="file-input js-file-input" {if $field.required} required {/if} type="file" name="{$field.input_name}">
                    <button class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>4</title><g id="Layer_4" data-name="Layer 4"><path d="M14.1,18.3V14.1h4.2a.7.7,0,0,0,.7-.7V10.6a.7.7,0,0,0-.7-.7H14.1V5.7a.7.7,0,0,0-.7-.7H10.6a.7.7,0,0,0-.7.7V9.9H5.7a.7.7,0,0,0-.7.7v2.8a.7.7,0,0,0,.7.7H9.9v4.2a.7.7,0,0,0,.7.7h2.8A.7.7,0,0,0,14.1,18.3Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/></g></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>4</title><g id="Layer_4" data-name="Layer 4"><path d="M17.4,21c1.15-.42,2.35-3.28,5.12-9.93C18.94,11,12.45,11,11,11c-1.89,0-2.92,2.35-5.15,7.64C4.74,21.3,3.41,21,3.41,21A2.81,2.81,0,0,1,2,18.25V6.09s-.31-2,2-2S9,4,9,4s1.75-.12,1.84,1.16c.13,1.81,2.75,1.38,2.75,1.38l3.69-.12S19.64,6.27,19.3,8" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/><line x1="4.19" y1="21" x2="17.84" y2="21" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/></g></svg>
                    </button>
                  </span>
                  <small class="float-xs-right">{l s='.png .jpg .gif' d='Shop.Forms.Help'}</small>
                {/if}
              </li>
            {/foreach}
          </ul>
          <div class="clearfix">
            <button class="btn btn-primary float-xs-right" type="submit" name="submitCustomizedData">{l s='Save Customization' d='Shop.Theme.Actions'}</button>
          </div>
        </form>
      {/block}

    </div>
  {/if}
</section>
