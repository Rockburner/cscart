{if !$smarty.capture.$map_provider_api}
<script src="//www.google.com/jsapi"></script>
<script src="//maps.googleapis.com/maps/api/js?v=3&amp;language={$smarty.const.CART_LANGUAGE|fn_store_locator_google_langs}&amp;{if $sl_settings.google_key}key={$sl_settings.google_key}{/if}" type="text/javascript"></script>
{script src="js/addons/store_locator/google.js"}
{capture name="`$map_provider_api`"}Y{/capture}
{/if}

<script type="text/javascript">
    {literal}
    (function(_, $) {

        options = {
            {/literal}
            'latitude': {$smarty.const.STORE_LOCATOR_DEFAULT_LATITUDE|doubleval},
            'longitude': {$smarty.const.STORE_LOCATOR_DEFAULT_LONGITUDE|doubleval},
            'map_container': '{$map_container}'
            {literal}
        };

        $.ceMap('init', options);
    }(Tygh, Tygh.$));
    {/literal}
</script>