<?php

class testClass {
	public $foo;
	public function __construct($foo) {
		$this->foo = $foo;
	}
	public function __toString() {
		return $this->foo;
	}
}
$obj = new testClass('2313345');
echo $obj;


?>

<?php
 // class test {
 // 	public function __toString() {
 // 		return get_class($this);
 // 	}
 // }
 // $obj = new test;
 // echo $obj;
?>

<?php

// class test {
// 	public function __toString() {
// 		echo "This is __toString method of test class.\n";
// 		return "hiiii i am string by return";
// 	}
// }
// $obj = new test;
// echo $obj;

?>


<?php
// class test {
// 	public $a, $b = "panwar";
// 	public function __construct($a) {
// 		$this->a = $a;
// 		echo $a.$this->b."<br />";
// 	}

// 	public function __toString() {
// 		return $this->a."\n".$this->b;
// 	}
// }
// $obj = new test('anand');

// echo $obj;

?>