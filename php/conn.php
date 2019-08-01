<?php

/**
* Database Connection file
*/
class Conn
{
	public $db;
	private $host_db = "mysql:host=localhost;dbname=uiindia_institute";
	private $user = 'root';
	private $pass = '';
	// public $user = "uiindia_institut";
	// public $pass = ".k0J#B9g)eZU";
	
	public function __construct()
	{
		$this->dbConnection();
	}
	protected function dbConnection() {
		try {
			$this->db = new PDO($this->host_db, $this->user, $this->pass);
			// echo "successfull";
		}
		catch(PDOException $e) {
			echo "database error: ".$e->getMessage();
		}
	}
}
$connObj = new Conn;



?>