<div class="bread_wrapper">
  <div class="container">
    <nav data-depth="{$breadcrumb.count}" class="breadcrumb">
      <span class="bread_name">
        {foreach from=$breadcrumb.links item=path name=breadcrumb}
          {if $smarty.foreach.breadcrumb.last}
            {$path.title}
          {/if}
        {/foreach}</span>
      <ol itemscope itemtype="http://schema.org/BreadcrumbList">
        {foreach from=$breadcrumb.links item=path name=breadcrumb}
          {block name='breadcrumb_item'}
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              {if !$smarty.foreach.breadcrumb.last}
                <a itemprop="item" href="{$path.url}">
              {/if}
                  <span itemprop="name">{$path.title}</span>
                  <a itemprop="item" href="#"></a>
              {if !$smarty.foreach.breadcrumb.last}
                </a>
              {/if}
              <meta itemprop="position" content="{$smarty.foreach.breadcrumb.iteration}">
            </li>
          {/block}
        {/foreach}
      </ol>
    </nav>
  </div>
</div>
