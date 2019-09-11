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
<section class="contact-form inputs_col">
  <form action="{$urls.pages.contact}" method="post" {if $contact.allow_file_upload}enctype="multipart/form-data"{/if}>

    {if $notifications}
      <div class="col-xs-12 alert {if $notifications.nw_error}alert-danger{else}alert-success{/if}">
        <ul>
          {foreach $notifications.messages as $notif}
            <li>{$notif}</li>
          {/foreach}
        </ul>
      </div>
    {/if}

    {if !$notifications || $notifications.nw_error}
      <section class="form-fields">

        <div class="form-group row">

          <div class="col-lg-{if $contact.orders}6{else}4{/if} col-xs-12">
            <label>{l s='Subject' d='Shop.Forms.Labels'}</label>
            <select name="id_contact" class="form-control form-control-select">
              {foreach from=$contact.contacts item=contact_elt}
                <option value="{$contact_elt.id_contact}">{$contact_elt.name}</option>
              {/foreach}
            </select>
          </div>

          <div class="col-lg-{if $contact.orders}6{else}4{/if} col-xs-12">
            <label>{l s='Email address' d='Shop.Forms.Labels'}</label>
            <input
              class="form-control"
              name="from"
              type="email"
              value="{$contact.email}"
              placeholder="{l s='your@email.com' d='Shop.Forms.Help'}"
            >
          </div>

        {if $contact.orders}
            <div class="col-lg-{if $contact.orders}6{else}4{/if} col-xs-12">
              <label>{l s='Order reference' d='Shop.Forms.Labels'}</label>
              <select name="id_order" class="form-control form-control-select">
                <option value="">{l s='Select reference' d='Shop.Forms.Help'}</option>
                {foreach from=$contact.orders item=order}
                  <option value="{$order.id_order}">{$order.reference}</option>
                {/foreach}
              </select>
            </div>
        {/if}

        {if $contact.allow_file_upload}
            <div class="col-lg-{if $contact.orders}6{else}4{/if} col-xs-12 tip_inside">
              <label>{l s='Attachment' d='Shop.Forms.Labels'}</label>
              <input type="file" name="fileUpload" class="filestyle" placeholder="Click on icon to attach file" data-buttonText='
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g id="Layer_4" data-name="Layer 4"><path d="M12,21H7.6A1.71,1.71,0,0,1,6,19.2V4.8A1.71,1.71,0,0,1,7.6,3h8.8A1.71,1.71,0,0,1,18,4.8V17" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/><path d="M10,17V8.81A1.72,1.72,0,0,1,11.6,7h.8A1.72,1.72,0,0,1,14,8.81V19.4c0,1-1.12,1.6-2,1.6" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.8px"/></g></svg>
              '>
              <span class="tip">Click on icon to attach file</span>
            </div>
        {/if}

          <div class="col-lg-12">
            <textarea
              class="form-control"
              name="message"
              placeholder="{l s='Your Message' d='Shop.Forms.Help'}"
              rows="3"
            >{if $contact.message}{$contact.message}{/if}</textarea>
          </div>

        </div>

		{if isset($id_module)}
          <div class="form-group row">
            <div class="offset-md-3">
              {hook h='displayGDPRConsent' id_module=$id_module}
            </div>
          </div>
        {/if}
		
      </section>

      <footer class="form-footer text-sm-right">
        <style>
          input[name=url] {
            display: none !important;
          }
        </style>
        <input type="text" name="url" value=""/>
        <input type="hidden" name="token" value="{$token}" />
        <input class="btn btn-primary" type="submit" name="submitMessage" value="{l s='Send' d='Shop.Theme.Actions'}">
      </footer>
    {/if}

  </form>
</section>
