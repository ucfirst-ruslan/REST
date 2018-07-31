<?php

include_once '../libs/RestServer.php';

$cars = new Cars;
echo $cars;

class Cars
{
	public function __construct()
    {
		$rest = new RestServer;
		$rest->getUrl;
	}
}
