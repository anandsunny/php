<?php

// class Tv{
// 	protected $modal;
// 	private $volume;

// 	function volDown(){
// 		return $this->volume--;
// 	}
// 	function volUp(){
// 		return $this->volume++;
// 	}
// 	function __construct($m, $v){
// 		$this->modal = $m;
// 		$this->volume = $v;
// 	}
// 	// gatter and setter funtion use access private and protected methods and variables values.

// 	function getModal(){
// 		return $this->modal;
// 	}
// }
// class plazama extends Tv{
// 	function getModal(){
// 		return $this->modal;
// 	}
// }

// $tv = new plazama('abc', 1);

// echo $tv->getModal();
// echo $tv->volUp();

?>



<?php

class parson{
	public $name;
	public $age;

	function __construct($n, $a){
		$this->name = $n;
		$this->age = $a;
	}
	public function setAge($ag){
		$this->ag = $ag;
	}
	public function display(){
		echo 'welcome <b>'.$this->name.'</b></br>';
		return $this->age-$this->ag;
	}
}
$parson = new parson('anand', 23);
$parson->setAge(20);
echo 'you are <b>'.$parson->display()."</b> years old";

?>


<?php
// class arithmatic{
// 	public $first = 1000;
// 	public $second = 500;

// 	function val(){
// 		echo "<b> Given value is ".$this->first." and ".$this->second."</b></br>";
// 	}

// 	function add(){
// 	    $res = $this->first+$this->second;
// 		echo "addition = ".$res."</br>";
// 	}
// 	function sub(){
// 		$res = $this->first-$this->second;
// 		echo "subtraction = ".$res."</br>";
// 	}
// 	function mul(){
// 		$res = $this->first*$this->second;
// 		echo "multiplication = ".$res."</br>";
// 	}
// 	function div(){
// 		$res = $this->first/$this->second;
// 		echo "division = ".$res."</br>";
// 	}
// }
// $result = new arithmatic();
// $result->val();
// $result->add();
// $result->sub();
// $result->mul();
// $result->div();
?>


