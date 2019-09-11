{if Configuration::get('PH_BLOG_DISPLAY_THUMBNAIL') && (isset($post.banner_wide) || isset($post.banner_thumb))}
<a href="{$post.url}" itemprop="url" class="noeffect">
    {if $blogLayout eq 'full'}
        <img src="{$post.banner_wide}" alt="{$post.title}" itemprop="image" class="img-fluid photo">
    {else}
        <img src="{$post.banner_thumb}" alt="{$post.title}" itemprop="image" class="img-fluid photo">
    {/if}
</a>
{else}
<div itemprop="video">
{$post.video_code nofilter}
</div>
{/if}