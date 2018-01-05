<?php
/**
* 
*/
require_once('classes/user.php');
echo "string";
/**
* 
*/
class Success extends User
{
	
	function __construct()
	{
		echo "string";
		echo $this->getUserId();
	}
}
$a = new Success();
/*
class success
{
	
	function __construct()
	{
		$user = new User();
		var_dump($user);
		//echo $user->getUserId();
	}

}*/