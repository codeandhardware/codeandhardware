
  <div class="myacc_left col-md-12 col-lg-3 side-column">

      <div class="row">

        <span class="myacc_name">{$customer.firstname} {$customer.lastname}</span>
        <div class="links">
          <a href="{$urls.pages.my_account}">
              <i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg></i>
              {l s='Dashboard' d='Shop.Theme.Customeraccount'}
          </a>

          {if !$configuration.is_catalog}
            <a id="history-link" href="{$urls.pages.history}">
                <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M15,2.28l8.8,4.43a2.22,2.22,0,0,1,1.22,2V19.24a2.22,2.22,0,0,1-1.22,2L15,25.66a2.19,2.19,0,0,1-2,0l-8.8-4.43a2.22,2.22,0,0,1-1.21-2V8.69a2.22,2.22,0,0,1,1.22-2L13,2.28A2.19,2.19,0,0,1,15,2.28Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/><polyline points="3.45 7.51 14.08 12.86 24.7 7.51" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/><line x1="14" y1="26" x2="14" y2="13" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/><line x1="8.59" y1="4.57" x2="19.57" y2="10.09" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/></svg></i>
                {l s='Orders' d='Shop.Theme.Customeraccount'}
            </a>
          {/if}

          <a id="identity-link" href="{$urls.pages.identity}">
              <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M16.26,15.7A4,4,0,0,0,14,15H7a4,4,0,0,0-4,4v2l1,2h7" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/><circle cx="10.5" cy="7" r="4" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/><polygon points="22.96 14.85 26.15 18.04 18.18 26 15 26 15 22.82 22.96 14.85" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/></svg></i>
              {l s='Information' d='Shop.Theme.Customeraccount'}
          </a>

          {if $customer.addresses|count}
            <a id="addresses-link" href="{$urls.pages.addresses}">
              <i><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></i>
                {l s='Addresses' d='Shop.Theme.Customeraccount'}
            </a>
          {else}
            <a id="address-link" href="{$urls.pages.address}">
                <i><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></i>
                {l s='Add first address' d='Shop.Theme.Customeraccount'}
            </a>
          {/if}

          {if !$configuration.is_catalog}
            <a id="order-slips-link" href="{$urls.pages.order_slip}">
                <i><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg></i>
                {l s='Credit slips' d='Shop.Theme.Customeraccount'}
            </a>
          {/if}

          {if $configuration.voucher_enabled && !$configuration.is_catalog}
            <a id="discounts-link" href="{$urls.pages.discount}">
                <i><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg></i>
                {l s='Coupons' d='Shop.Theme.Customeraccount'}
            </a>
          {/if}

          {if $configuration.return_enabled && !$configuration.is_catalog}
            <a id="returns-link" href="{$urls.pages.order_follow}">
                <i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg></i>
                {l s='Merchandise returns' d='Shop.Theme.Customeraccount'}
            </a>
          {/if}

          {block name='display_customer_account'}
            {hook h='displayCustomerAccount'}
          {/block}

          <a class="logout" href="{$urls.actions.logout}" rel="nofollow">
              <i><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power"><path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path><line x1="12" y1="2" x2="12" y2="12"></line></svg></i>
              {l s='Sign out' d='Shop.Theme.Customeraccount'}
          </a>

        </div>
      </div>

  </div>
