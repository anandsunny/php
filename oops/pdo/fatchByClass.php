
<?php
//--------------fecth data by by class ---------------------
$db = new PDO('mysql:host=localhost;dbname=oops','root','');
$q = $db->query('SELECT * FROM user');

class Person {
	private $uname;
	private $usalary;
	public $fullname;
	public function __construct() {
		return $this->fullname = $this->uname.' '.$this->usalary;
	}
}
echo "<pre>";
$q->setFetchMode(PDO::FETCH_CLASS,'Person');
while($row = $q->fetch()) {

	echo $row->fullname.'<br>';
	//print_r($row);
}
