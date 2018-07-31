<?php

class RestServer 
{
	public function __construct()
    {
		$this->getUrl();
	}
	
	public function getUrl()
	{
		
		//var_dump($_SERVER);
		list($sl, $s, $a, $d, $db, $table, $path) = explode('/', $_SERVER['REQUEST_URI'], 7);
		echo $s . "1<br>";
		echo $a . "2<br>";
		echo $d . "3<br>";
		echo $db . "4<br>";
		echo $table . "5<br>";
		echo $path . "6<br>";
	}
}