<?php

class testClass {
	public function __destruct(){
		print "In Destructing\n".$this->name."\n";

	}
	
	public function __construct(){
		print "In Constructing\n";
		$this->name = "construction function form test class";
	}
	
}

$obj = new testClass;

?>