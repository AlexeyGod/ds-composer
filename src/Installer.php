<?php 

namespace framework\composer;

class Installer {

	public static function postInstallProject($event)
	{
		// Current directory \vendor\alexeygod\ds-composer\src
		$dir = dirname(dirname(dirname(dirname(__DIR__)))).'/assets';

		mkdir($dir);
		chmod($dir, 0777);
	}

}
?>