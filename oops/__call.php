<?php

class dog {
	public $name;

	public function bark() {
		print "woof!\n";
	}
	public function meow() {
		print "dogs don't meow!\n";
	}
	public function __call($function, $array){
		$array = implode(', ', $array);
		print "call to $function with args '$array' failed!\n";
	}
}
$poppy = new dog;
$poppy->cat('foo', 'faaa', 'shoooooo');



?>