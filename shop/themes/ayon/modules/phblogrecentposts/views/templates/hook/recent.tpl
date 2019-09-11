{if isset($recent_posts) && count($recent_posts)}
    <section class="simpleblog" id="phblogrecentposts" itemscope="itemscope" itemtype="http://schema.org/Blog">
      {if isset($roythemes.bl_w) && $roythemes.bl_w == "1"}<div class="container">{/if}
        <div class="row">
            <h2 class="h1 products-section-title">
              <a href="{$blogLink}">
                {l s='Blog' mod='phblogrecentposts'}
              </a>
            </h2>
            <div class="blogslider slideme">
            {foreach from=$recent_posts item=post}
                {include file="module:ph_simpleblog/views/templates/front/1.7/_partials/post-miniature.tpl"}
            {/foreach}
            </div>
        </div><!-- .row -->
        {if isset($roythemes.bl_w) && $roythemes.bl_w == "1"}</div>{/if}
</section><!-- .section-news -->
{/if}
