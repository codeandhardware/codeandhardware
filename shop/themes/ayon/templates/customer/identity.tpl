{extends 'customer/page.tpl'}

{block name='page_title'}
  {l s='Your personal information' d='Shop.Theme.Customeraccount'}
{/block}

{block name='page_content'}
  {render file='customer/_partials/customer-form.tpl' ui=$customer_form}
{/block}

{block name='page_footer'}
  {block name='my_account_links'}
  {/block}
{/block}
