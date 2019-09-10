{**
 * ayon.footer | roythemes.2018
 *}
<div class="footer-container">
  <div class="container">

    {if isset($roythemes.footer_lay)}

      {if $roythemes.footer_lay == "1"}
      <div class="row">
        <div class="col-md-12 wrapper foot-links">
          {widget name='ps_linklist' hook='displayFooter'}
        </div>
      </div>
      {/if}

      {if $roythemes.footer_lay == "2"}
      <div class="row">
        <div class="col-md-4 wrapper foot-social">
          {widget name='ps_socialfollow'}
        </div>

        <div class="col-md-8 wrapper foot-mail">
          {widget name='ps_emailsubscription'}
        </div>
      </div>
      {/if}

      {if $roythemes.footer_lay == "3"}
      <div class="row">
        <div class="col-md-2 wrapper foot-logo">
          <img class="logo_footer img-responsive" src="{$urls.base_url}modules/roy_customizer/upload/logo-footer-{Context::getContext()->shop->id}.{if isset($roythemes.logo_footer_ext)}{$roythemes.logo_footer_ext}{else}png{/if}" alt="{$shop.name}" />
        </div>

        <div class="col-md-8 wrapper foot-text">
          {hook h='displayFooter' mod='roy_content'}
        </div>

        <div class="col-md-2 wrapper foot-social">
          {widget name='ps_socialfollow'}
        </div>
      </div>
      {/if}

      {if $roythemes.footer_lay == "4"}
      <div class="row top">
        <div class="col-md-9 wrapper foot-links">
          {widget name='ps_linklist' hook='displayFooter'}
        </div>

        <div class="col-md-3 wrapper foot-logo">
          <img class="logo_footer img-responsive" src="{$urls.base_url}modules/roy_customizer/upload/logo-footer-{Context::getContext()->shop->id}.{if isset($roythemes.logo_footer_ext)}{$roythemes.logo_footer_ext}{else}png{/if}" alt="{$shop.name}" />
        </div>
      </div>
      <div class="row bottom">
        <div class="col-md-9 wrapper foot-text">
          {hook h='displayFooter' mod='roy_content'}
        </div>

        <div class="col-md-3 wrapper foot-social">
          {widget name='ps_socialfollow'}
        </div>
      </div>
      {/if}

      {if $roythemes.footer_lay == "5"}
      <div class="row top">
        <div class="col-md-3 wrapper">
          {widget name='ps_socialfollow'}
        </div>

        <div class="col-md-9 wrapper foot-links">
          {widget name='ps_linklist' hook='displayFooter'}
        </div>
      </div>
      <div class="row bottom">
        <div class="col-md-9 wrapper foot-text">
          {hook h='displayFooter' mod='roy_content'}
        </div>

        <div class="col-md-3 wrapper foot-logo">
          <img class="logo_footer img-responsive" src="{$urls.base_url}modules/roy_customizer/upload/logo-footer-{Context::getContext()->shop->id}.{if isset($roythemes.logo_footer_ext)}{$roythemes.logo_footer_ext}{else}png{/if}" alt="{$shop.name}" />
        </div>
      </div>
      {/if}

      {if $roythemes.footer_lay == "6"}
      <div class="row">
        <div class="col-md-5 wrapper text">
          <img class="logo_footer img-responsive" src="{$urls.base_url}modules/roy_customizer/upload/logo-footer-{Context::getContext()->shop->id}.{if isset($roythemes.logo_footer_ext)}{$roythemes.logo_footer_ext}{else}png{/if}" alt="{$shop.name}" />
          {hook h='displayFooter' mod='roy_content'}
        </div>

        <div class="col-md-3 wrapper">
          {widget name='ps_linklist' hook='displayFooter'}
        </div>

        <div class="col-md-4 wrapper">
          {widget name='ps_emailsubscription'}
          {widget name='ps_socialfollow'}
        </div>
      </div>
      {/if}

      {if $roythemes.footer_lay == "7"}
      <div class="row">
        <div class="col-md-3 wrapper text">
          <img class="logo_footer img-responsive" src="{$urls.base_url}modules/roy_customizer/upload/logo-footer-{Context::getContext()->shop->id}.{if isset($roythemes.logo_footer_ext)}{$roythemes.logo_footer_ext}{else}png{/if}" alt="{$shop.name}" />
          {hook h='displayFooter' mod='roy_content'}
        </div>

        <div class="col-md-3 wrapper">
          {widget name='ps_linklist' hook='displayFooter'}
        </div>

        <div class="col-md-3 wrapper">
          {widget name='ps_socialfollow'}
        </div>

        <div class="col-md-3 wrapper">
          {widget name='ps_emailsubscription'}
        </div>
      </div>
      {/if}

      {if $roythemes.footer_lay == "8"}
      <div class="row">
        <div class="col-md-3 wrapper text">
          <img class="logo_footer img-responsive" src="{$urls.base_url}modules/roy_customizer/upload/logo-footer-{Context::getContext()->shop->id}.{if isset($roythemes.logo_footer_ext)}{$roythemes.logo_footer_ext}{else}png{/if}" alt="{$shop.name}" />
          {hook h='displayFooter' mod='roy_content'}
        </div>

        <div class="col-md-6 wrapper">
          {widget name='ps_linklist' hook='displayFooter'}
        </div>

        <div class="col-md-3 wrapper">
          {widget name='ps_socialfollow'}
        </div>
      </div>
      {/if}

    {/if}

    <div class="row">
      {block name='hook_footer_after'}
        {hook h='displayFooterAfter'}
      {/block}
    </div>
  </div>
</div>
<div id="is_media"></div>
