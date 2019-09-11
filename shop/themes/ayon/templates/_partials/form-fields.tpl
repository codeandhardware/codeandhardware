{**
 * 2007-2019 PrestaShop and Contributors
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
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{if $field.type == 'hidden'}

  {block name='form_field_item_hidden'}
    <input type="hidden" name="{$field.name}" value="{$field.value}">
  {/block}

{else}

  <div class="form-group row {if !empty($field.errors)}has-error{/if}">
    <div class="col-md-12{if ($field.type === 'radio-buttons')} form-control-valign{/if}">
      {if isset($roythemes.g_form) && $roythemes.g_form == "1"}<label>{if $field.type !== 'checkbox'}{$field.label}{/if}</label>{/if}

      {if $field.type === 'select'}

        {block name='form_field_item_select'}
          <select class="form-control form-control-select" name="{$field.name}" {if $field.required}required{/if}>
            <option value disabled selected>{l s='-- please choose --' d='Shop.Forms.Labels'}</option>
            {foreach from=$field.availableValues item="label" key="value"}
              <option value="{$value}" {if $value eq $field.value} selected {/if}>{$label}</option>
            {/foreach}
          </select>
        {/block}

      {elseif $field.type === 'countrySelect'}

        {block name='form_field_item_country'}
          <select
          class="form-control form-control-select js-country"
          name="{$field.name}"
          {if $field.required}required{/if}
          >
            <option value disabled selected>{l s='-- please choose --' d='Shop.Forms.Labels'}</option>
            {foreach from=$field.availableValues item="label" key="value"}
              <option value="{$value}" {if $value eq $field.value} selected {/if}>{$label}</option>
            {/foreach}
          </select>
        {/block}

      {elseif $field.type === 'radio-buttons'}

        {block name='form_field_item_radio'}
          {foreach from=$field.availableValues item="label" key="value"}
            <label class="radio-inline">
              <span class="custom-radio">
                <input
                  name="{$field.name}"
                  type="radio"
                  value="{$value}"
                  {if $field.required}required{/if}
                  {if $value eq $field.value} checked {/if}
                >
                <span></span>
              </span>
              {$label}
            </label>
          {/foreach}
        {/block}

      {elseif $field.type === 'checkbox'}

        {block name='form_field_item_checkbox'}
          <span class="custom-checkbox">
            <input name="{$field.name}" type="checkbox" value="1" {if $field.value}checked="checked"{/if} {if $field.required}required{/if}>
            <span><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
            <label>{$field.label nofilter}</label>
          </span>
        {/block}

      {elseif $field.type === 'date'}

        {block name='form_field_item_date'}
          <input name="{$field.name}" class="form-control" type="date" value="{$field.value}" placeholder="{if isset($field.availableValues.placeholder)}{$field.availableValues.placeholder}{/if}">
          {if isset($field.availableValues.comment)}
            <span class="form-control-comment">
              {$field.availableValues.comment}
            </span>
          {/if}
        {/block}

      {elseif $field.type === 'birthday'}

        {block name='form_field_item_birthday'}
          <div class="js-parent-focus">
            {html_select_date
            field_order=DMY
            time={$field.value}
            field_array={$field.name}
            prefix=false
            reverse_years=true
            field_separator='<br>'
            day_extra='class="form-control form-control-select"'
            month_extra='class="form-control form-control-select"'
            year_extra='class="form-control form-control-select"'
            day_empty={l s='-- day --' d='Shop.Forms.Labels'}
            month_empty={l s='-- month --' d='Shop.Forms.Labels'}
            year_empty={l s='-- year --' d='Shop.Forms.Labels'}
            start_year={'Y'|date}-100 end_year={'Y'|date}
            }
          </div>
        {/block}

      {elseif $field.type === 'password'}

        {block name='form_field_item_password'}
          <div class="input-group js-parent-focus">
            <input
              class="form-control js-child-focus js-visible-password"
              name="{$field.name}"
              type="password"
              {if isset($roythemes.g_form) && $roythemes.g_form == "2"}placeholder="{if $field.type !== 'checkbox'}{$field.label}{/if}"{/if}
              value=""
              pattern=".{literal}{{/literal}5,{literal}}{/literal}"
              {if $field.required}required{/if}
            >
            <span class="input-group-btn">
              <button
                class="btn material-icons"
                type="button"
                data-action="show-password"
                data-text-show=""
                data-text-hide=""
              >
                <i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>
                </i>
              </button>
            </span>
          </div>
        {/block}

      {else}

        {block name='form_field_item_other'}
          <input
            class="form-control"
            name="{$field.name}"
            type="{$field.type}"
            {if isset($roythemes.g_form) && $roythemes.g_form == "2"}placeholder="{if $field.type !== 'checkbox'}{$field.label}{/if}"{/if}
            value="{$field.value}"
            {if isset($field.availableValues.placeholder)}placeholder="{$field.availableValues.placeholder}"{/if}
            {if $field.maxLength}maxlength="{$field.maxLength}"{/if}
            {if $field.required}required{/if}
          >
          {if isset($field.availableValues.comment)}
            <span class="form-control-comment">
              {$field.availableValues.comment}
            </span>
          {/if}
        {/block}

      {/if}

      {block name='form_field_errors'}
        {include file='_partials/form-errors.tpl' errors=$field.errors}
      {/block}

    </div>

    <div class="col-md-12 form-control-comment">
      {block name='form_field_comment'}
        {if ($field.required && !in_array($field.type, ['radio-buttons', 'checkbox']))}
         <span class="req">{l s='*' d='Shop.Forms.Labels'}</span>
        {/if}
      {/block}
    </div>
  </div>

{/if}
