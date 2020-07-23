<?php 

namespace framework\composer;

class Installer {

	public static function postInstallProject()
	{
		$dir = dirname(dirname(dirname(__DIR__))).'/assets';
		mkdir($dir);
		chmod($dir, 0777);
	}

}
?>