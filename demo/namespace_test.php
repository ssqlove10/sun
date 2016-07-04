<?php
namespace demo2;
//use demo1;

class Demo
{
	public function __construct()
	{
		echo __NAMESPACE__."<br/>";
	}

	public function test()
	{
		echo __FUNCTION__;
	}

}

//$a = new \demo1\Demo();

