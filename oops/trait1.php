<?php

trait one {
	public function test() {
		echo "test function from trait one";
	}
}
trait two {
	public function test() {
		echo "test function from trait two";
	}
}
class def {
	use one, two{
		one::test insteadof two;
		two::test as testTwo;
	}
}
$obj = new def;
$obj->testTwo();
?>