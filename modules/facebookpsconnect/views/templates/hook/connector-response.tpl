{if !empty($content)}
	{$content|escape:"UTF-8"}
{/if}
{if !empty($aErrors)}

	<link href="{$smarty.const._THEMES_DIR_|escape:"html"}{$smarty.const._THEME_NAME_|escape:"html"}/css/global.css" rel="stylesheet" type="text/css" media="all" />

	<div style="margin: 20px">
		{include file="`$sErrorInclude`"}

		<a href="#" style="background:#AAA; color: #FFF; padding: 5px 10px; display:inline-block; -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px;" onclick="window.close();">{l s='Close' mod='facebookpsconnect'}</a>
	</div>
{/if}