<?php

class RestServer 
{
	private $method;
	private $table;
	private $param;
	
	public function __construct()
    {	
		list($a, $b, $c, $d, $f, $j, $path) = explode('/', $_SERVER['REQUEST_URI'], 7);
		list($this->table, $this->params) = explode('/', $path);
		
		$this->method = $_SERVER['REQUEST_METHOD'];
	}
	
	
	private function getMethod()
	{
		switch($this->method) 
		{ 
			case 'GET': 
				$this->setMethod('get'.ucfirst($table), explode('/', $path)); 
				break; 
			case 'DELETE': 
				$this->setMethod('delete'.ucfirst($table), explode('/', $path)); 
				break; 
			case 'POST': 
				$this->setMethod('post'.ucfirst($table), explode('/', $path)); 
				break; 
			case 'PUT': 
				$this->setMethod('put'.ucfirst($table), explode('/', $path)); 
				break; 
			default: 
				return false; 
		} 
	}
	
	
	private function setMethod($method, $param=false) 
	{ 
		if ( method_exists($this, $method) ) 
		{ 
			call_user_func(......); 
		} 
	} 
}