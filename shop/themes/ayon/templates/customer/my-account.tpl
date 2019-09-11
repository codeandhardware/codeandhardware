{extends file='customer/page.tpl'}

{block name='page_title'}
  {l s='Your account' d='Shop.Theme.Customeraccount'}
{/block}

{block name='page_content'}
  <p>
    {l s='From your account dashboard you can view your' d='Shop.Theme.Customeraccount'} <a href="{$urls.pages.history}">{l s='recent orders' d='Shop.Theme.Customeraccount'}</a> {l s=', manage your' d='Shop.Theme.Customeraccount'} {if $customer.addresses|count}<a href="{$urls.pages.addresses}">{else}<a href="{$urls.pages.address}">{/if}{l s='shipping and billing addresses' d='Shop.Theme.Customeraccount'}</a> {l s='and' d='Shop.Theme.Customeraccount'} <a rel="nofollow" href="{$urls.pages.identity}">{l s='edit your password and account details' d='Shop.Theme.Customeraccount'}</a>
  </p>
{/block}


{block name='page_footer'}
  {block name='my_account_links'}
  {/block}
{/block}
