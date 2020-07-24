<?php 

namespace framework\composer;

class Installer {

	public static function postInstallProject($event)
	{
		// Current directory \vendor\alexeygod\ds-composer\src
		$dir = dirname(dirname(dirname(dirname(__DIR__))));
		
		// Create dir for dynamic assets
		mkdir($dir.'/assets');
		chmod($dir.'/assets', 0777);

		// Create dir for content-plugin
		mkdir($dir.'/uploads/content');
		chmod($dir.'/uploads/content', 0777);

		// Create dir for content-plugin, class PageImage
		mkdir($dir.'/uploads/content/preview');
		chmod($dir.'/uploads/content/preview', 0777);
	}

}
?>