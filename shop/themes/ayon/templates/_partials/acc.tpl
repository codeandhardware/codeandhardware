<div class="acc_top {if isset($roythemes.click_lay_a) && ($roythemes.click_lay_a !== "3")}box-acc{/if} {if isset($roythemes.click_lay_a) && ($roythemes.click_lay_a == "3")}tip_inside{/if}">
  {if isset($roythemes.click_lay_a) && ($roythemes.click_lay_a == "3")}
    <a href="{$urls.pages.my_account}" rel="nofollow">
  {/if}
    <i class="rts" data-size="28" data-color="#000000">{if isset($roythemes.acc_icon)}{$roythemes.acc_icon}{else}acc1{/if}</i>
    {if $customer.is_logged && !$customer.is_guest}
      <span class="acc_check"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polyline points="17 3 19 5 23 1" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/></svg></span>
      {if isset($roythemes.acc_name) && ($roythemes.acc_name == "1")}
        <span class="acc_name">{$customer.firstname} {$customer.lastname}</span>
      {else}
      <span class="text">{l s='Account'}</span>
      {/if}
    {else}
      <span class="text">{l s='Account'}</span>
    {/if}
  {if isset($roythemes.click_lay_a) && ($roythemes.click_lay_a == "3")}
    </a>
    {if $customer.is_logged && !$customer.is_guest}
      <span class="tip">{l s='Open My Account'}</span>
    {else}
      <span class="tip">{l s='Login / Sign up'}</span>
    {/if}
  {/if}
</div>
