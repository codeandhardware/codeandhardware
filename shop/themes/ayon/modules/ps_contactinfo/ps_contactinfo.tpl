<div class="contact-rich">
  <div class="block">
    <label>{l s='Visit our store' d='Shop.Theme.Global'}</label>
    <div class="data">{$contact_infos.address.formatted nofilter}</div>
  </div>
  {if $contact_infos.phone || $contact_infos.fax || $contact_infos.email}
    <div class="block">
      <label>{l s='Get in touch' d='Shop.Theme.Global'}</label>
      <div class="data">
      {if $contact_infos.phone}
        {$contact_infos.phone}<br />
      {/if}
      {if $contact_infos.fax}
        {$contact_infos.fax}<br />
      {/if}
      {if $contact_infos.email}
         <a href="mailto:{$contact_infos.email}">{$contact_infos.email}</a>
      {/if}
       </div>
    </div>
  {/if}
</div>
