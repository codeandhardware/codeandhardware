{if Configuration::get('PH_BLOG_DISPLAY_MORE')}
<div class="simpleblog__listing__post__wrapper__content__footer">
    <a href="{$post.url}" class="readmore tip_inside noeffect">
      <i><span></span><span></span><span></span></i>
      <span class="tip">{l s='Read more' mod='ph_simpleblog'}</span>
    </a>
</div>
{/if}
