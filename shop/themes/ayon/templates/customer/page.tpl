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
{extends file=$layout}

{block name='content'}

  <section id="main">
    <div class="container">

      {block name='left_column'}
        {include file='customer/_partials/myacc_left.tpl'}
      {/block}


    {block name='page_content_container'}
      <section id="content" class="page-content col-md-12 col-lg-9 myacc_content">

        {block name='page_header_container'}
        {block name='page_title' hide}
          <header class="page-header">
            <h1>{$smarty.block.child}</h1>
          </header>
        {/block}
        {/block}

        
        {block name='page_content'}
        {block name='page_content_top'}{/block}
          <!-- Page content -->
        {/block}

        {block name='notifications'}
          {include file='_partials/notifications.tpl'}
        {/block}

      </section>
    {/block}


    {block name='page_footer_container'}
      <footer class="page-footer">
        {block name='page_footer'}
          <!-- Footer content -->
        {/block}
      </footer>
    {/block}

    </div>
  </section>

{/block}
