<?php
class Db {	
	private $host = "localhost";
	private $dbname = "auth";
	private $username = "root";
	private $password = "root";
	private $link;

	Public function __construct(){
		$this->link = $this->dbConnect();
		//var_dump($this->link);
	}

	public function dbConnect() {
		try {
			$link = mysqli_connect($this->host, $this->username, $this->password, $this->dbname); 
			if(!$link) {
				throw new exception(mysqli_connect_error($link));
			}
			return $link;
		}
		catch (Exception $e) {
			echo "Error: ".$e->getMessage();
		}
	}

	public function insert($query) {
		try {
			if (!isset($query) && empty($query)) {
				throw new Exception("Error Processing Request: Empty Query String", 1);
				
			} else {
				$result = mysqli_query($this->link, $query);
				$inserted_id = mysqli_insert_id($this->link);
				if ($inserted_id) {
					return $result;
				} else {
					throw new Exception("Error Processing Request: Insertion Failed", 1);
				}
			}
		} catch (Exception $e) {
			echo "Error @ Execution: ".$e->getMessage();			
		}		
	}

	public function execute($query) {
		try {
			if (!isset($query) && empty($query)) {
				throw new Exception("Error Processing Request: Empty Query String", 1);
				
			} else {
				$result = mysqli_query($this->link, $query);
				if ($result->num_rows > 0) {
					$row=mysqli_fetch_row($result);
					return $row[0];
				} else {
					return false;
				}
			}
		} catch (Exception $e) {
			echo "Error @ Execution: ".$e->getMessage();			
		}
	}
}



