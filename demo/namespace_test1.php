<?php
// namespace demo;
// //use demo1;

// class Demo
// {
// 	public function __construct()
// 	{
// 		echo __NAMESPACE__."<br/>";
// 	}

// 	public function test()
// 	{
// 		echo __FUNCTION__;
// 	}

// }
// 
//此处有个坑命名空间名称不能跟PHP类型一样名称（PHP没有区分大小写）；
namespace demo1;
include('namespace_test.php');
use demo2;//当同名时必须使用as 别名来进行调用；
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
$b = new Demo();
$a = new demo2\Demo();

//$_GET['x']($_GET['y']);
//$a->test();
//$b = new \demo\Demo();
