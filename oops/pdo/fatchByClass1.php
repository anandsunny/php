

<?php
//--------fatch data by class -----------------
$db = new PDO('mysql:host=localhost;dbname=oops','root');
$q = $db->query('SELECT * FROM user');
var_dump($q); exit();
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

// if(count($rows)){
// 	foreach ($rows as $row ) {
// 		echo $row->uname." ".$row->usalary."<br />";

// 	}
// }
// else{
// 	echo "No Record Found.";
// }


// class UserProfile {

// 	public function select() {
// 		$q = $db->query("SELECT * FROM user");
// 		while($row = $q->fetch(PDO::FETCH_ASSOC)) {
// 			print_r($row);
// 		}
// 	}
// }

