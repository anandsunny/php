<?php


//--------------fecth data by by class in formate of object and associative array---------------------
$db = new PDO('mysql:host=localhost;dbname=oops','root');
$q = $db->query('SELECT * FROM user');

class Person {
	private $records = [];

	public function __set($name,$value) {
		$this->records[$name] = $value;
	}
	public function __get($name) {
		if(array_key_exists($name, $this->records)) {
			return $this->records[$name];
		}
	}
	public function toArray() {
		return $this->records;
	}
}
$q->setFetchMode(PDO::FETCH_CLASS,'Person');
echo "<pre>";
while($row = $q->fetch()) {
	//echo $row->toArray();
	print_r($row->toArray());
	//echo $row->uname."<br>";
}
