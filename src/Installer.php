<?php 

namespace framework\composer;

class Installer {

	public static function postInstallProject($event)
	{
		// Current directory \vendor\alexeygod\ds-composer\src
		$dir1 = dirname(__DIR__); //Up to ds-composer
		$dir2 = dirname($dir1); // up to alexeygod
		$dir3 = dirname($dir2); // up to vendor
						
		$dir = $dir3.'/assets';

		mkdir($dir);
		chmod($dir, 0777);
		file_put_contents($dir.'/composer.info.txt', 'Variable $DIR: '.$dir
			."\r\n"
			."DIR1: ".$dir1
			."\r\n"
			."DIR2: ".$dir2
			."\r\n"
			."DIR3: ".$dir3
			."\r\n"
			.'DIR: '.__DIR__);
	}

}
?>