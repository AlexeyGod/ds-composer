<?php 

namespace framework\composer;

class Installer {

	public static function postInstallProject($event)
	{
		// Current directory vendor/alexeygod/composer
		$dir = dirname( // up to alexeygod
			dirname( // up to vendor
				__DIR__
			))
		.'/assets';

		mkdir($dir);
		chmod($dir, 0777);
		file_put_contents($dir.'/composer.info.txt', 'Variable $DIR: '.$dir."\r\n".'DIR: '.__DIR__);
	}

}
?>