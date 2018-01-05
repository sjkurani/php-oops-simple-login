<?php
require_once('classes/user.php');

$user = new User();
//$db = new Db();
if (isset($_POST) && !empty($_POST)) {
		$uname = $_POST['userName'];
		$email = $_POST['email'];
	if (isset($_POST['login'])) {

		$isValidUser = $user->validate($uname,$email);
		try {
			if($isValidUser) {
				//Redirect him to success page with proper msg
				echo "Log in success. redirecting to success page please wait.";

				$user->setUserId($isValidUser);
				showUserId();
				//var_dump($isValidUser);
				//exit();
				//header("location: success.php");
			}
			else {
				throw new Exception("Invalid User details", 1);				
			}
		} catch (Exception $e) {
			print_r($e);
		}

	} else if (isset($_POST['register'])){

		$isValidUser = $user->validate($uname,$email);

		try {
			if(!$isValidUser) {
				//Register new user
				$sql = "INSERT INTO `user` (`name`, `email`) VALUES ( '$uname', '$email')";
				
				$result = $user->insert($sql);
				if($result) {
					var_dump("New User Created..");
				}
				else {
					throw new Exception("Insertion failed", 1);					
				}
			}
			else {
				throw new Exception("User already exist", 1);				
			}
		} catch (Exception $e) {
			print_r($e);
		}
	}	
}
else {
	try {
		throw new exception("Post Array Not set.");	
	}	
	catch (Exception $e) {
		var_dump($e);
    } 
}
function showUserId(){
	$user = new User();
	//var_dump($user);
	echo $user->getUserId();
}