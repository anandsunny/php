<?php

class ABC {
	public function fun1() {
		echo "fun1 of class ABC.\n";
		return $this;
	}
	public function fun2() {
		echo "fun2 of class ABC.\n";
		return $this;
	}
	public function fun3() {
		echo "fun3 of class ABC.\n";
	}
}
$abc = new ABC;
$abc->fun1()->fun2()->fun3();

?>