<!-- Block search module TOP -->
<div class="search-widget{if isset($roythemes.search_lay)} search{$roythemes.search_lay}{/if}" data-search-controller-url="{$search_controller_url}">
	<form method="get" action="{$search_controller_url}">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="{$search_string}" placeholder="{if isset($roythemes.search_lay) && $roythemes.search_lay == "4"}{l s='Search' d='Shop.Theme.Catalog'}{else}{l s='Start typing here...' d='Shop.Theme.Catalog'}{/if}" aria-label="{l s='Search' d='Shop.Theme.Catalog'}">
		<button type="submit" {if isset($roythemes.search_lay) && $roythemes.search_lay !== "4"}class="search_nogo"{/if}>
      <i class="rts" data-size="28" data-color="#000000">{if isset($roythemes.nc_i_search)}{$roythemes.nc_i_search}{else}search1{/if}</i>
      <span class="text hidden-xl-down">{if isset($roythemes.search_lay) && $roythemes.search_lay !== "4"}{l s='Search' d='Shop.Theme.Catalog'}{/if}</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP -->
