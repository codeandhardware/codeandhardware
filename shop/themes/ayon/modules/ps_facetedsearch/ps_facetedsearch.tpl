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
{if isset($listing.rendered_facets)}
<div id="search_filters_wrapper" class="hidden-sm-down sidebar-block">

  <div id="search_filter_controls" class="hidden-lg-up">
    <span id="_mobile_search_filters_clear_all">
		    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
	  </span>
    <button class="btn btn-secondary ok">
      <i class="rtl-no-flip"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>rt4</title><g id="Layer_4" data-name="Layer 4"><path d="M20.78,7.07a1,1,0,0,0,0-1.41L19.36,4.24a1,1,0,0,0-1.41,0L9,14.12l-3-2.87a1,1,0,0,0-1.41,0L3.22,12.65a1,1,0,0,0,0,1.41l5.07,5a1,1,0,0,0,1.41,0Z" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px"/></g></svg></i>
      {l s='Apply and Close' d='Shop.Theme.Actions'}
    </button>
  </div>
  {$listing.rendered_facets nofilter}
</div>
{/if}
