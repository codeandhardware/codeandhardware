<div class="side_menu"
data-menu="{if isset($roythemes.click_lay_m)}{$roythemes.click_lay_m}{/if}"
data-search="{if isset($roythemes.click_lay_s)}{$roythemes.click_lay_s}{/if}"
data-cart="{if isset($roythemes.click_lay_c)}{$roythemes.click_lay_c}{/if}"
data-acc="{if isset($roythemes.click_lay_a)}{$roythemes.click_lay_a}{/if}"
>
  <div class="side_menu_rel">
    <div id="side_cart_wrap">
      {widget name='ps_shoppingcart'}
    </div>
    <div id="side_search_wrap">
      {include file='_partials/side/side_search.tpl'}
      {hook h="displaySideSearch"}
    </div>
    <div id="side_menu_wrap">
      {include file='_partials/side/side_menu.tpl'}
      {hook h="displaySideMenu"}
    </div>
    <div id="side_acc_wrap">
      {include file='_partials/side/side_acc.tpl'}
    </div>
  </div>
</div>
<div class="side_close">
  <i>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>4</title><g id="Layer_4" data-name="Layer 4"><path d="M19.78,17,14.83,12l4.95-4.95a1,1,0,0,0,0-1.41L18.36,4.24a1,1,0,0,0-1.41,0L12,9.19,7.05,4.24a1,1,0,0,0-1.41,0L4.22,5.65a1,1,0,0,0,0,1.41L9.17,12,4.22,17a1,1,0,0,0,0,1.41L5.64,19.8a1,1,0,0,0,1.41,0L12,14.85l4.95,4.95a1,1,0,0,0,1.41,0l1.41-1.41A1,1,0,0,0,19.78,17Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/></g></svg>
  </i>
</div>
