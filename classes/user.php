<?php
/**
* User Class
*/
require_once('db.php');
class User extends Db
{
	public static $userId;
	function __construct() {
		parent::__construct();
	}
	public function validate($uname,$email) {
		$sql = "select * from user where email = '" . $email . "' and name = '" . $uname."'";
		$result = $this->execute($sql);
		return $result;
	}
	public function getUserId() {
		return $this->userId;
	}
	public function setUserId($userId) {
		$this->userId = $userId;
	}
}
/*
$db = new db('sjk');
$dbLink = $db->dbConnect();*/
