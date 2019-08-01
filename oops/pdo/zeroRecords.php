<?php

//---------------when records are zero---------------
$db = new PDO('mysql:host=localhost;dbname=oops','root');
$q = $db->query('SELECT * FROM user LIMIT 0, 5');

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
}
echo "<pre>";
$q->setFetchMode(PDO::FETCH_CLASS,'Person');
$rows = $q->fetchAll();
if(count($rows)){
	foreach ($rows as $row ) {
		echo $row->uname."<br />";
	}
}
else{
	echo "No Record Found.";
}
