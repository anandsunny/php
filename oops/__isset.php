<?php

class Test {
	public $var = 'yes';
	public function __isset($name) {
		echo "Non-existing property $name";
	}
}
$abc = new Test;

isset($abc->cat);

?>