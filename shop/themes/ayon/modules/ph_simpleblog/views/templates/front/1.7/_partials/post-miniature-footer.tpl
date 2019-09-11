{if Configuration::get('PH_BLOG_DISPLAY_DATE')}
<div class="simpleblog__listing__post__wrapper__footer__block date">
    <time datetime="{$post.date_add|date_format:'c'}">{$post.date_add|date_format:Configuration::get('PH_BLOG_DATEFORMAT')}</time>
</div>
{/if}

<div class="simpleblog__listing__post__wrapper__footer">
    {if $is_category eq false && Configuration::get('PH_BLOG_DISPLAY_CATEGORY')}
    <div class="simpleblog__listing__post__wrapper__content__footer__category">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg> <a href="{$post.category_url}" title="{$post.category}" rel="category">{$post.category}</a>
    </div>
    {/if}
    {if isset($post.author) && !empty($post.author) && Configuration::get('PH_BLOG_DISPLAY_AUTHOR')}
    <div class="simpleblog__listing__post__wrapper__footer__block">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span itemprop="author">{$post.author}</span>
    </div>
    {else}
    <meta itemprop="author" content="{Configuration::get('PS_SHOP_NAME')}">
    {/if}
    {if $post.allow_comments eq true && Configuration::get('PH_BLOG_COMMENTS_SYSTEM') == 'native'}
    <div class="simpleblog__listing__post__wrapper__footer__block">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
        <span>
            <a href="{$post.url}#phsimpleblog_comments">{$post.comments} {l s='comments'  mod='ph_simpleblog'}</a>
        </span>
    </div>
    {/if}
    {if Configuration::get('PH_BLOG_DISPLAY_VIEWS')}
    <div class="simpleblog__listing__post__wrapper__footer__block">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
        <span>
            {$post.views} {l s='views'  mod='ph_simpleblog'}
        </span>
    </div>
    {/if}
    <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
        <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
          <meta itemprop="url" content="{$urls.shop_domain_url|rtrim:'/'}{$shop.logo}">
        </div>
        <meta itemprop="name" content="{Configuration::get('PS_SHOP_NAME')}">
        <meta itemprop="email" content="{Configuration::get('PS_SHOP_EMAIL')}">
    </div>
    <meta itemprop="datePublished" content="{$post.date_add}">
    <meta itemprop="dateModified" content="{$post.date_upd}">
    <meta itemprop="mainEntityOfPage" content="{$urls.shop_domain_url}">
    {if !isset($post.author) || (isset($post.author) && empty($post.author))}
    <div itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
        <meta itemprop="name" content="{Configuration::get('PS_SHOP_NAME')}">
    </div>
    {/if}
</div><!-- .simpleblog__listing__post__wrapper__footer -->
