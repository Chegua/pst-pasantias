<?php 

class Autoload
{
	
	public static function run()
	{
		spl_autoload_register(function ($className)
		{
			$ruta= str_replace("\\", "/", $className).".php";
			// echo __DIR__.'/'.$ruta.'<br>';
			require_once $ruta;
		});
	}
}
