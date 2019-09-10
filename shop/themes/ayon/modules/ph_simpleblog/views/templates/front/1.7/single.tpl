{*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{extends file='page.tpl'}

{block name='page_header_container'}
<header class="page-header">
	<h1 class="h1">{$post->title}</h1>
</header>
{/block}

{block name='hook_after_body_opening_tag' append}{strip}
    {if Configuration::get('PH_BLOG_FB_INIT')}
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v3.2&appId=&autoLogAppEvents=1';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    {/if}
{/strip}{/block}

{block name='head_seo' prepend}
<link rel="canonical" href="{$post->url}">
{/block}

{block name='head_seo_title'}{strip}
	{if !empty($post->meta_title)}
		{$post->meta_title} - {$page.meta.title}
	{else}
		{$post->title} - {$page.meta.title}
	{/if}
{/strip}{/block}

{if !empty($post->meta_description)}
    {block name='head_seo_description'}{$post->meta_description}{/block}
{/if}

{if !empty($post->meta_keywords)}
	{block name='head_seo_keywords'}{$post->meta_keywords}{/block}
{/if}

{block name='page_content'}
{assign var='post_type' value=$post->post_type}
<div class="simpleblog__postInfo">
    <ul>
    	{if Configuration::get('PH_BLOG_DISPLAY_DATE')}
        <li>
        	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
        	<span>
        		<time>
        			{$post->date_add|date_format:Configuration::get('PH_BLOG_DATEFORMAT')}
        		</time>
        	</span>
        </li>
        {/if}
        {if isset($post->author) && !empty($post->author) && Configuration::get('PH_BLOG_DISPLAY_AUTHOR')}
        <li>
        	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
        	<span>
	        	{$post->author}
	        </span>
        </li>
        {/if}
        {if Configuration::get('PH_BLOG_DISPLAY_CATEGORY')}
        <li>
        	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg>
        	<span>
	        	<a
	        		href="{$link->getModuleLink('ph_simpleblog', 'category', ['sb_category' => $post->category_rewrite])}"
	        		title="{$post->category}"
	        	>
	        		{$post->category}
	        	</a>
	        </span>

        </li>
        {/if}
        {if Configuration::get('PH_BLOG_DISPLAY_LIKES')}
        <li>
        	<a href="#" data-guest="{$guest}" data-post="{$post->id_simpleblog_post}" class="simpleblog-like-button">
        		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
	        	<span class="likes-count">
	        		{$post->likes}
	        	</span>
	        	<span>
		        	{l s='likes'  mod='ph_simpleblog'}
		        </span>
	        </a>
        </li>
        {/if}
        {if Configuration::get('PH_BLOG_DISPLAY_VIEWS')}
        <li>
        	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
        	<span>
	        	{$post->views} {l s='views'  mod='ph_simpleblog'}
	        </span>
        </li>
        {/if}
        {if $allow_comments eq true && Configuration::get('PH_BLOG_COMMENTS_SYSTEM') == 'native'}
        <li>
        	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
        	<span>
        		<a href="{$post->url}#phsimpleblog_comments">{$post->comments} {l s='comments'  mod='ph_simpleblog'}</a>
        	</span>
        </li>
        {/if}
    </ul>
</div>
<div class="simpleblog__post">
	{if $post->featured_image}
		<a href="{$post->featured_image}" title="{$post->title}" class="fancybox simpleblog__post-featured">
			<img src="{$post->featured_image}" alt="{$post->title}" class="img-fluid" />
		</a>
	{/if}
    <div class="simpleblog__post__content">
        {$post->content nofilter}

        {if $post_type == 'gallery' && sizeof($post->gallery)}
		<div class="post-gallery">
			{foreach $post->gallery as $image}
			<a rel="post-gallery-{$post->id_simpleblog_post}" class="fancybox" href="{$gallery_dir}{$image.image}.jpg" title="{l s='View full' mod='ph_simpleblog'}"><img src="{$gallery_dir}{$image.image}.jpg" class="img-fluid" /></a>
			{/foreach}
		</div><!-- .post-gallery -->
		{elseif $post_type == 'video'}
		<div class="post-video" itemprop="video">
			{$post->video_code nofilter}
		</div><!-- .post-video -->
		{/if}
    </div>
    <div class="simpleblog__post__after-content" id="displayPrestaHomeBlogAfterPostContent">
		{hook h='displayPrestaHomeBlogAfterPostContent'}
	</div><!-- #displayPrestaHomeBlogAfterPostContent -->

    <nav>
      <ul class="pagination pagination-lg">
        {if $previousPost}
        <li class="page-item">
          <a class="btn" href="{$previousPost.url}" tabindex="-1">{l s='Previous article' mod='ph_simpleblog'}</a>
        </li>
        {/if}
        <!-- <li class="page-item"><a class="btn" href="{$link->getModuleLink('ph_simpleblog', 'list')}">{l s='Main page' mod='ph_simpleblog'}</a></li> -->
        {if $nextPost}
        <li class="page-item next">
          <a class="btn" href="{$nextPost.url}">{l s='Next article' mod='ph_simpleblog'}</a>
        </li>
        {/if}
      </ul>
    </nav>
</div>

{if Configuration::get('PH_BLOG_DISPLAY_SHARER')}
<div class="simpleblog__share">
    <h3 class="h3">{l s='Share this post' mod='ph_simpleblog'}</h3>
    <ul>
        <li>
        	<a
        		data-type="twitter"
        		href="#"
        		class="btn btn-twitter"
        	>
        		<i class="fa fa-twitter"></i> Twitter
        	</a>
       	</li>
        <li>
        	<a
        		data-type="facebook"
        		href="#"
        		class="btn btn-facebook"
        	>
        		<i class="fa fa-facebook"></i> Facebook
        	</a>
        </li>
        <li>
        	<a
        		data-type="google"
        		href="#"
        		class="btn btn-google"
        	>
        		<i class="fa fa-google-plus"></i> Google+
        	</a>
        </li>
        <li>
        	<a
        		data-type="pinterest"
        		href="#"
        		class="btn btn-pinterest"
        	>
        		<i class="fa fa-pinterest"></i> Pinterest
        	</a>
        </li>
        {hook h='displayBlogForPrestaShopSocialSharing'}
    </ul>
</div>
{/if}

{if Configuration::get('PH_BLOG_DISPLAY_RELATED') && $related_products}
	{include file="module:ph_simpleblog/views/templates/front/1.7/_partials/post-single-related-products.tpl"}
{/if}

{if $allow_comments eq true && Configuration::get('PH_BLOG_COMMENTS_SYSTEM') == 'native'}
	{include file="module:ph_simpleblog/views/templates/front/1.7/comments/layout.tpl"}
{/if}

{if $allow_comments eq true && Configuration::get('PH_BLOG_COMMENTS_SYSTEM') == 'facebook'}
	{include file="module:ph_simpleblog/views/templates/front/1.7/comments/facebook.tpl"}
{/if}

{if $allow_comments eq true && Configuration::get('PH_BLOG_COMMENTS_SYSTEM') == 'disqus'}
	{include file="module:ph_simpleblog/views/templates/front/1.7/comments/disqus.tpl"}
{/if}
{/block}
