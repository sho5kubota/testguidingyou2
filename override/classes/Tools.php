<?php
///-build_id: 2015031920.2559
/// This source file is subject to the Software License Agreement that is bundled with this 
/// package in the file license.txt, or you can get it here
/// http://addons-modules.com/en/content/3-terms-and-conditions-of-use
///
/// @copyright  2009-2012 Addons-Modules.com
///  If you need open code to customize or merge code with othe modules, please contact us.

class Tools extends ToolsCore
{	

	/*
	* module: agilemultipleseller
	* date: 2015-07-10 13:48:20
	* version: 3.0.6.2
	*/
	public static function generateHtaccess($path = null, $rewrite_settings = null, $cache_control = null, $specific = '', $disable_multiviews = null, $medias = false, $disable_modsec=null)
	{
		if(Module::isInstalled('agilemultipleseller'))
		{
			AgileSellerManager::ensure_configuration_record_for_all_shops();
						Configuration::loadConfiguration();
			return self::generateHtaccess_override($path, $rewrite_settings, $cache_control, $specific, $disable_multiviews, $medias, $disable_modsec,$disable_modsec);
		}
		return parent::generateHtaccess($path, $rewrite_settings, $cache_control, $specific, $disable_multiviews, $medias, $disable_modsec);
	}



	/*
	* module: agilemultipleseller
	* date: 2015-07-10 13:48:20
	* version: 3.0.6.2
	*/

	/*
	* module: agilemultipleseller
	* date: 2015-07-10 13:48:20
	* version: 3.0.6.2
	*/
	public static function generateHtaccess_override($path = null, $rewrite_settings = null, $cache_control = null, $specific = '', $disable_multiviews = null, $medias = false, $disable_modsec = null)
	{
		if (defined('PS_INSTALLATION_IN_PROGRESS') && $rewrite_settings === null)
			return true;

				if (is_null($path))
			$path = _PS_ROOT_DIR_.'/.htaccess';
		if (is_null($cache_control))
			$cache_control = (int)Configuration::get('PS_HTACCESS_CACHE_CONTROL');
		if (is_null($disable_multiviews))
			$disable_multiviews = (int)Configuration::get('PS_HTACCESS_DISABLE_MULTIVIEWS');

		if ($disable_modsec === null)
			$disable_modsec =  (int)Configuration::get('PS_HTACCESS_DISABLE_MODSEC');

				$specific_before = $specific_after = '';
		if (file_exists($path))
		{
			$content = file_get_contents($path);
			if (preg_match('#^(.*)\# ~~start~~.*\# ~~end~~[^\n]*(.*)$#s', $content, $m))
			{
				$specific_before = $m[1];
				$specific_after = $m[2];
			}
			else
			{
								if (preg_match('#\# http://www\.prestashop\.com - http://www\.prestashop\.com/forums\s*(.*)<IfModule mod_rewrite\.c>#si', $content, $m))
					$specific_before = $m[1];
				else
					$specific_before = $content;
			}
		}

				if (!$write_fd = fopen($path, 'w'))
			return false;
		if ($specific_before)
			fwrite($write_fd, trim($specific_before)."\n\n");

		$domains = array();
		foreach (ShopUrl::getShopUrls() as $shop_url)
		{
			if (!isset($domains[$shop_url->domain]))
				$domains[$shop_url->domain] = array();

			$domains[$shop_url->domain][] = array(
				'physical' =>	$shop_url->physical_uri,
				'virtual' =>	$shop_url->virtual_uri,
				'id_shop' =>	$shop_url->id_shop
				);
			
			if ($shop_url->domain == $shop_url->domain_ssl)
				continue;
			
			if (!isset($domains[$shop_url->domain_ssl]))
				$domains[$shop_url->domain_ssl] = array();

			$domains[$shop_url->domain_ssl][] = array(
				'physical' =>	$shop_url->physical_uri,
				'virtual' =>	$shop_url->virtual_uri,
				'id_shop' =>	$shop_url->id_shop
				);
		}

				fwrite($write_fd, "# ~~start~~ Do not remove this comment, Prestashop will keep automatically the code outside this comment when .htaccess will be generated again\n");
		fwrite($write_fd, "# .htaccess automaticaly generated by PrestaShop e-commerce open-source solution\n");
		fwrite($write_fd, "# http://www.prestashop.com - http://www.prestashop.com/forums\n\n");

		if ($disable_modsec)
			fwrite($write_fd, "<IfModule mod_security.c>\nSecFilterEngine Off\nSecFilterScanPOST Off\n</IfModule>\n\n");

				fwrite($write_fd, "<IfModule mod_rewrite.c>\n");

				fwrite($write_fd, "<IfModule mod_env.c>\n");
		fwrite($write_fd, "SetEnv HTTP_MOD_REWRITE On\n");
		fwrite($write_fd, "</IfModule>\n\n");

				if ($disable_multiviews)
			fwrite($write_fd, "\n# Disable Multiviews\nOptions -Multiviews\n\n");

		fwrite($write_fd, "RewriteEngine on\n");
		
		if (!$medias && defined('_MEDIA_SERVER_1_') && defined('_MEDIA_SERVER_2_') && defined('_MEDIA_SERVER_3_'))
			$medias = array(_MEDIA_SERVER_1_, _MEDIA_SERVER_2_, _MEDIA_SERVER_3_);
		
		$media_domains = '';
		if ($medias[0] != '')
			$media_domains = 'RewriteCond %{HTTP_HOST} ^'.$medias[0].'$ [OR]'."\n";
		if ($medias[1] != '')
			$media_domains .= 'RewriteCond %{HTTP_HOST} ^'.$medias[1].'$ [OR]'."\n";
		if ($medias[2] != '')
			$media_domains .= 'RewriteCond %{HTTP_HOST} ^'.$medias[2].'$ [OR]'."\n";

		if (Configuration::get('PS_WEBSERVICE_CGI_HOST'))
			fwrite($write_fd, "RewriteCond %{HTTP:Authorization} ^(.*)\nRewriteRule . - [E=HTTP_AUTHORIZATION:%1]\n\n");

		foreach ($domains as $domain => $list_uri)
		{
			$physicals = array();
			foreach ($list_uri as $uri)
			{
				if (Shop::isFeatureActive())
					fwrite($write_fd, 'RewriteCond %{HTTP_HOST} ^'.$domain.'$'."\n");
				fwrite($write_fd, 'RewriteRule . - [E=REWRITEBASE:'.$uri['physical'].']'."\n");
				
								fwrite($write_fd, 'RewriteRule ^api/?(.*)$ %{ENV:REWRITEBASE}webservice/dispatcher.php?url=$1 [QSA,L]'."\n\n");

				if (!$rewrite_settings)
					$rewrite_settings = (int)Configuration::get('PS_REWRITING_SETTINGS', null, null, (int)$uri['id_shop']);

				$domain_rewrite_cond = 'RewriteCond %{HTTP_HOST} ^'.$domain.'$'."\n";
								if ($uri['virtual'])
				{
					if (!$rewrite_settings)
					{
						fwrite($write_fd, $media_domains);
						if (Shop::isFeatureActive())
							fwrite($write_fd, $domain_rewrite_cond);
						fwrite($write_fd, 'RewriteRule ^'.trim($uri['virtual'], '/').'/?$ '.$uri['physical'].$uri['virtual']."index.php [L,R]\n");
					}
					else
					{
						fwrite($write_fd, $media_domains);
						if (Shop::isFeatureActive())
							fwrite($write_fd, $domain_rewrite_cond);
						fwrite($write_fd, 'RewriteRule ^'.trim($uri['virtual'], '/').'$ '.$uri['physical'].$uri['virtual']." [L,R]\n");
					}
					fwrite($write_fd, $media_domains);
					if (Shop::isFeatureActive())
						fwrite($write_fd, $domain_rewrite_cond);
					fwrite($write_fd, 'RewriteRule ^'.ltrim($uri['virtual'], '/').'(.*) '.$uri['physical']."$1 [L]\n\n");
				}			

				if ($rewrite_settings)
				{
					
					if(!isset($physical_done[$uri['physical']]))
					{
						
												fwrite($write_fd, "# Images\n");
						if (Configuration::get('PS_LEGACY_IMAGES'))
						{
							fwrite($write_fd, $media_domains);
							if (Shop::isFeatureActive())
								fwrite($write_fd, $domain_rewrite_cond);
							fwrite($write_fd, 'RewriteRule ^([a-z0-9]+)\-([a-z0-9]+)(\-[_a-zA-Z0-9-]*)(-[0-9]+)?/.+\.jpg$ %{ENV:REWRITEBASE}img/p/$1-$2$3$4.jpg [L]'."\n");
							fwrite($write_fd, $media_domains);
							if (Shop::isFeatureActive())
								fwrite($write_fd, $domain_rewrite_cond);
							fwrite($write_fd, 'RewriteRule ^([0-9]+)\-([0-9]+)(-[0-9]+)?/.+\.jpg$ %{ENV:REWRITEBASE}img/p/$1-$2$3.jpg [L]'."\n");
						}

												for ($i = 1; $i <= 8; $i++)
						{
							$img_path = $img_name = '';
							for ($j = 1; $j <= $i; $j++)
							{
								$img_path .= '$'.$j.'/';
								$img_name .= '$'.$j;
							}
							$img_name .= '$'.$j;
							fwrite($write_fd, $media_domains);
							if (Shop::isFeatureActive())
								fwrite($write_fd, $domain_rewrite_cond);
							fwrite($write_fd, 'RewriteRule ^'.str_repeat('([0-9])', $i).'(\-[_a-zA-Z0-9-]*)?(-[0-9]+)?/.+\.jpg$ %{ENV:REWRITEBASE}img/p/'.$img_path.$img_name.'$'.($j + 1).".jpg [L]\n");
						}
						
						
						
						fwrite($write_fd, $media_domains);
						if (Shop::isFeatureActive())
							fwrite($write_fd, $domain_rewrite_cond);
						fwrite($write_fd, 'RewriteRule ^c/([0-9]+)(\-[\.*_a-zA-Z0-9-]*)(-[0-9]+)?/.+\.jpg$ %{ENV:REWRITEBASE}img/c/$1$2$3.jpg [L]'."\n");
						fwrite($write_fd, $media_domains);
						if (Shop::isFeatureActive())
							fwrite($write_fd, $domain_rewrite_cond);
						fwrite($write_fd, 'RewriteRule ^c/([a-zA-Z_-]+)(-[0-9]+)?/.+\.jpg$ %{ENV:REWRITEBASE}img/c/$1$2.jpg [L]'."\n");
					}
					$physical_done[$uri['physical']] = 1;
				}
				
				fwrite($write_fd, "# AlphaImageLoader for IE and fancybox\n");
				if (Shop::isFeatureActive())
					fwrite($write_fd, $domain_rewrite_cond);
				fwrite($write_fd, 'RewriteRule ^images_ie/?([^/]+)\.(jpe?g|png|gif)$ js/jquery/plugins/fancybox/images/$1.$2 [L]'."\n");
			}
						if ($rewrite_settings)
			{
				fwrite($write_fd, "\n# Dispatcher\n");
				fwrite($write_fd, "RewriteCond %{REQUEST_FILENAME} -s [OR]\n");
				fwrite($write_fd, "RewriteCond %{REQUEST_FILENAME} -l [OR]\n");
				fwrite($write_fd, "RewriteCond %{REQUEST_FILENAME} -d\n");
				if (Shop::isFeatureActive())
					fwrite($write_fd, $domain_rewrite_cond);
				fwrite($write_fd, "RewriteRule ^.*$ - [NC,L]\n");
				if (Shop::isFeatureActive())
					fwrite($write_fd, $domain_rewrite_cond);
				fwrite($write_fd, "RewriteRule ^.*\$ %{ENV:REWRITEBASE}index.php [NC,L]\n");
			}
		}

		fwrite($write_fd, "</IfModule>\n\n");

		fwrite($write_fd, "AddType application/vnd.ms-fontobject .eot\n");
		fwrite($write_fd, "AddType font/ttf .ttf\n");
		fwrite($write_fd, "AddType font/otf .otf\n");
		fwrite($write_fd, "AddType application/x-font-woff .woff\n\n");

				if ($cache_control)
		{
			$cache_control = "<IfModule mod_expires.c>
	ExpiresActive On
	ExpiresByType image/gif \"access plus 1 month\"
	ExpiresByType image/jpeg \"access plus 1 month\"
	ExpiresByType image/png \"access plus 1 month\"
	ExpiresByType text/css \"access plus 1 week\"
	ExpiresByType text/javascript \"access plus 1 week\"
	ExpiresByType application/javascript \"access plus 1 week\"
	ExpiresByType application/x-javascript \"access plus 1 week\"
	ExpiresByType image/x-icon \"access plus 1 year\"
	ExpiresByType image/svg+xml \"access plus 1 year\"
	ExpiresByType image/vnd.microsoft.icon \"access plus 1 year\"
	ExpiresByType application/font-woff \"access plus 1 year\"
	ExpiresByType application/x-font-woff \"access plus 1 year\"
	ExpiresByType application/vnd.ms-fontobject \"access plus 1 year\"
	ExpiresByType font/opentype \"access plus 1 year\"
	ExpiresByType font/ttf \"access plus 1 year\"
	ExpiresByType font/otf \"access plus 1 year\"
	ExpiresByType application/x-font-ttf \"access plus 1 year\"
	ExpiresByType application/x-font-otf \"access plus 1 year\"
</IfModule>

FileETag INode MTime Size
<IfModule mod_deflate.c>
	<IfModule mod_filter.c>
		AddOutputFilterByType DEFLATE text/html text/css text/javascript application/javascript application/x-javascript
	</IfModule>
</IfModule>\n\n";
			fwrite($write_fd, $cache_control);
		}

				fwrite($write_fd, "#If rewrite mod isn't enabled\n");

				reset($domains);
		$domain = current($domains);
		fwrite($write_fd, 'ErrorDocument 404 '.$domain[0]['physical']."index.php?controller=404\n\n");

		fwrite($write_fd, "# ~~end~~ Do not remove this comment, Prestashop will keep automatically the code outside this comment when .htaccess will be generated again");
		if ($specific_after)
			fwrite($write_fd, "\n\n".trim($specific_after));
		fclose($write_fd);
		
		if (!defined('PS_INSTALLATION_IN_PROGRESS'))
			Hook::exec('actionHtaccessCreate');

		return true;
	}

}

